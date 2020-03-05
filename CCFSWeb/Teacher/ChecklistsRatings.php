<?php
include("Connection.php");

$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];
$sql = "UPDATE checklist SET ".$column_name."='".$text."' WHERE checkid='".$id."'";

if(mysqli_query($conn, $sql)) {
  echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Data updated" . "</span>";
} else {
  echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Update failed" . "</span>";
}

mysqli_close($conn);

 ?>
