<?php

// database settings
try {
    $conn = new PDO('mysql:host=pei17y9c5bpuh987.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306;dbname=x0g4hw2ntc0cma7w',
        'ko8gvu5iqafgcwlr', 'ctsjrf37oqrknwvo', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

} catch (PDOException $e) {
// The PDO constructor throws an exception if it fails
    die('Error Connecting to Database: ' . $e->getMessage());
}