<?php

require_once("config.php");

/*
 * Submit new customer details
 * respond with confirmation or error
 * */
if ((isset($_POST['name'])
        && $_POST['name'] != '')
    && (isset($_POST['surname'])
        && $_POST['surname'] != '')
    && (isset($_POST['address'])
        && $_POST['address'] != '')
    && (isset($_POST['email'])
        && $_POST['email'] != '')
    && (isset($_POST['telephone'])
        && $_POST['telephone'] != '')
    && (isset($_POST['gender'])
        && $_POST['gender'] != '')) {

    $name = trim(strip_tags($_POST['name']));
    $surname = trim(strip_tags($_POST['surname']));
    $address = trim(strip_tags($_POST['address']));
    $email = trim(strip_tags($_POST['email']));
    $telephone = trim(strip_tags($_POST['telephone']));
    $gender = trim(strip_tags($_POST['gender']));
    $note = trim(strip_tags($_POST['note']));
    try {
        $sql1 = "INSERT INTO Customers (name, surname, address, telephone, email, gender) VALUES ('" . $name . "','" . $surname . "', '" . $address . "', '" . $telephone . "', '" . $email . "', '" . $gender . "')";
        $conn->exec($sql1);
        $sql2 = "SELECT customer_id FROM Customers  WHERE email = '$email'";
        $stmt = $conn->query($sql2);
        $customerID = $stmt->fetch();
        $sql3 = "INSERT INTO Notes (note, customer_id) VALUES('" . $note . "', '" . $customerID['customer_id'] . "')";
        $conn->exec($sql3);
        echo json_encode("details has been saved!");
    } catch (PDOException $e) {
        echo json_encode($e->getMessage());
    }

}


