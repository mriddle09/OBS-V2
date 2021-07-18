<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
       $conn = new PDO("mysql:host:localhost", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $state = "CREATE DATABASE IF NOT EXISTS OBSV2";
       $conn->exec($state); 
    } catch (PDOException $e) {
        $error_message = $e->getMessage(); 
    }
    $conn = null; 

    $dsn = "mysql:host:localhost;dbname=OBSV2";
    
    try {
        $db = new PDO($dsn, $username, $password);
        $use = "USE OBSV2";
        $db->exec($use);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
    }

?>