<?php

require_once("config.php");

$sql = "SELECT Customers.customer_id, Customers.name, Customers.surname, Customers.address, Customers.telephone, Customers.email, Customers.gender, N.note  FROM     Customers
                       LEFT JOIN Notes N on Customers.customer_id = N.customer_id";
$query = $conn->prepare($sql);
if ($query->execute() === FALSE) {
    die('Error Running Query: ' . implode(' ', $query->errorInfo()));
}
$results = $query->fetchAll();
?>

<div class="title mb-4">
    <h3> Our Customers</h3>
</div>
<form class="form-inline my-2 my-lg-0 pb-3 " id="searchForm">
    <input class="form-control mr-sm-2" id="searchField" name="searchField" type="search" placeholder="Enter ID or Email"
           aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<div class="table_wrapper">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Note</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (empty($results)) {
            echo '<div>' . 'Nothing to display' . '</div>';
        } else {
            foreach ($results as $row) {
                $newNote = $row['note'];
                if (!isset($newNote)) $newNote = 'n/a';
                $note = $newNote;
                echo '<tr> 
                  <td>' . $row['customer_id'] . '</td> 
                  <td>' . $row['name'] . '</td> 
                  <td>' . $row['surname'] . '</td> 
                  <td>' . $row['address'] . '</td> 
                  <td>' . $row['telephone'] . '</td> 
                  <td>' . $row['email'] . '</td> 
                  <td>' . $row['gender'] . '</td>
                  <td>' . $note . '</td> 
                  <td class="d-flex justify-content-around">
                      <button type="button" class=" btn btn-primary btn-sm editCustomerBtn">Modify</button>
                      <button type="button" class=" btn btn-warning btn-sm cancelCustomerBtn hideBtn d-none">Cancel</button>
                      <button type="button" class=" btn btn-danger btn-sm deleteCustomerBtn hideBtn d-none">Delete</button>
                  </td>    
              </tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>


