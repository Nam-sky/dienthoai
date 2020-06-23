<?php
    $severname = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($severname, $username, $password);
    
    if ($conn->connect_error) {
        die("Connection failed").$conn->connect_error;
    }