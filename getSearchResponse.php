<?php
require_once("config.php");

/*
 * Returns search results using customer name or email
 * */
if ((isset($_POST['searchField'])
    && $_POST['searchField'] != '')) {
    $searchedData = trim(strip_tags($_POST['searchField']));
    $stmt = $conn->prepare("SELECT C.customer_id, C.name, C.surname, C.address,
       C.telephone, C.email, C.gender, N.note
FROM   Customers C
LEFT JOIN Notes N ON C.customer_id = N.customer_id
WHERE `name` LIKE ? OR `email` LIKE ?");
    $stmt->execute(["%" . $searchedData . "%", "%" . $searchedData . "%"]);
    $results = $stmt->fetchAll();
    echo json_encode($results);
}
