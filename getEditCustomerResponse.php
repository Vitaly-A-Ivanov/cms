<?php
require_once("config.php");

/*
 * get modified customer details.
 * return confirmation or error
 * */
$data = $_POST['data'];
if ((isset($_POST['data']))) {
    $customerData = json_decode($data);
    $id = trim(strip_tags($customerData[0]));
    $name = trim(strip_tags($customerData[1]));
    $surname = trim(strip_tags($customerData[2]));
    $address = trim(strip_tags($customerData[3]));
    $telephone = trim(strip_tags($customerData[4]));
    $email = trim(strip_tags($customerData[5]));
    $gender = trim(strip_tags($customerData[6]));
    $note = trim(strip_tags($customerData[7]));
    try {
        $sql = "UPDATE Customers c, Notes n
SET
    c.name = ?,
    c.surname = ?,
    c.address = ?,
    c.telephone = ?,
    c.email = ?,
    c.gender = ?,
    n.note = ?
WHERE c.customer_id = n.customer_id
AND     c.customer_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $surname, $address, $telephone, $email, $gender, $note, $id]);
        echo json_encode("details has been updated for Customer with ID = '$id'");
    } catch (PDOException $e) {
        echo json_encode($e->getMessage());
    }
}
