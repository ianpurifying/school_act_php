<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db1";  
    $port = 3306;

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $db_name, $port);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
