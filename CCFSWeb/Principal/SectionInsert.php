<?php
include("database.php");

if(!$mysqli){
  die("Could not connect:".mysqli_connect_error());
} else {
  $query = "INSERT INTO `section`(sename, gradelvl, adviserlname, yearid) values ('$_POST[sename]', '$_POST[gradelvl]', '$_POST[advname]', '$_POST[yearid]')";

  if(mysqli_query($mysqli, $query)){
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created a new section." . "</span>";
    $_POST = array();
  } else {
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to create a new section." . "</span>";
  }

  mysqli_close($mysqli);
}
?>
