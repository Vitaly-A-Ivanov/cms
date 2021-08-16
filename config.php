<?php

// database settings
try {
    $conn = new PDO('mysql:host=c8u4r7fp8i8qaniw.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306;dbname=r9kd9m8pvsmvrk4j',
        'eg09y9eqjac9hpy9', 'hnch1nfcsgl2zm5r', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

} catch (PDOException $e) {
// The PDO constructor throws an exception if it fails
    die('Error Connecting to Database: ' . $e->getMessage());
}