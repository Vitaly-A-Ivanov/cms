<?php

require_once("config.php");

/*
 * deletes customer from the table with given id
 * */
if ((isset($_POST['data'])
    && $_POST['data'] != '')) {

    $id = trim(strip_tags($_POST['data']));
    try {
        $sql = "DELETE FROM Customers WHERE customer_id='$id'";
        $conn->exec($sql);
        echo json_encode("customer has been deleted with ID = '$id'");
    } catch (PDOException $e) {
        echo json_encode($e->getMessage());
    }
}
