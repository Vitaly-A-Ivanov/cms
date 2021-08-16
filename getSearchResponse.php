<?php
require_once("config.php");


/*
 * Returns search results using customer name or email
 * */
if ((isset($_POST['searchField'])
    && $_POST['searchField'] != '')) {
    $searchedData = trim(strip_tags($_POST['searchField']));
    $stmt = $conn->prepare("SELECT * FROM `Customers` WHERE `name` LIKE ? OR `email` LIKE ?");
    $stmt->execute(["%" . $searchedData . "%", "%" . $searchedData . "%"]);
    $results = $stmt->fetchAll();
    echo json_encode($results);
}
