<?php 
// credentials
$db_host =  'localhost';
$db_name = 'ccfs';
$db_user = 'root';
$db_pass = '';

//object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


//error handler
if($mysqli->connect_error){
 printf("Connection failed" %s\n, $mysql->connect_error);
	exit();
}