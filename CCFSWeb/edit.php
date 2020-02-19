<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "ccfs";

$status2 = "";


try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

?>
