<?php
include("database.php");

if(!$mysqli){
  die("Could not connect:".mysqli_connect_error());
} else {
  $query = "INSERT INTO `accounts`(empid, username, fname, lname, type) values ('$_POST[emplyid]', '$_POST[uname]', '$_POST[fname]', '$_POST[lname]', '$_POST[acctype]')";

  if(mysqli_query($mysqli, $query)){
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created a new account." . "</span>";
    $_POST = array();
  } else {
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to create a new account." . "</span>";
  }

  mysqli_close($mysqli);
}
?>
