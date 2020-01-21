<?php
    $servername = "localhost"; //localhost in Wamp
    $username = "root"; // Default username
    $password = ""; //Default password
    $dbname = "ccfs"; // Database name
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
