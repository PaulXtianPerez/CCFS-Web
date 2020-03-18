<?php
include("database.php");

if(isset($_POST["id"]) && !isset($_POST["del"])){
  $value = mysqli_real_escape_string($mysqli, $_POST["value"]);
  $query = "UPDATE section SET ".$_POST["column_name"]."='".$value."' WHERE secID = '".$_POST["id"]."'";

  if(mysqli_query($mysqli, $query)){
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Data updated." . "</span>";
  } else {
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Update failed." . "</span>";
  }

} else if(isset($_POST["id"]) && isset($_POST["del"])){
  $query = "DELETE FROM section WHERE secID = '".$_POST["id"]."'";

  if(mysqli_query($mysqli, $query)){
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Section deleted." . "</span>";
  } else {
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Delete failed." . "</span>";
  }
}

?>
