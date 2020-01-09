<?php
include("database.php");

if(isset($_POST['user_name'])){
  $name = $_POST['user_name'];

  $checkdata = "SELECT * FROM accounts WHERE username='$name'";

  $query = mysqli_query($mysqli, $checkdata);

  if(mysqli_num_rows($query)>0){
    echo "<span style='color:#FF0004;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Username already exists." . "</span>";
  } else {
    echo "<span style='color:#0AC02A;'>" . '<i class="fas fa-check-circle"></i>' . " Username available." . "</span>";
  }
  exit();
}
?>
