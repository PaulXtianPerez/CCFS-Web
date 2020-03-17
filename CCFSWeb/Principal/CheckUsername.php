<?php
include("database.php");

if(isset($_POST['user_name'])){
  $name = $_POST['user_name'];

  $checkdata = "SELECT * FROM accounts WHERE username='$name'";

  $query = mysqli_query($mysqli, $checkdata);

  if(mysqli_num_rows($query)>0){
    echo "<span style='color:#FF0004;' data-toggle='tooltip' title='Username already exists'>" . '<i class="fas fa-exclamation-circle"></i>' . "</span>";
  } else {
    echo "<span style='color:#0AC02A;' data-toggle='tooltip' title='Username available'>" . '<i class="fas fa-check-circle"></i>' . "</span>";
  }
  exit();
}
?>
