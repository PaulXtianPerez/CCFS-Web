<?php
 include("database.php");
 if(isset($_POST["account_id"])) {
   $query = "SELECT * FROM accounts WHERE accid = '".$_POST["account_id"]."'";
   $result = mysqli_query($mysqli, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
