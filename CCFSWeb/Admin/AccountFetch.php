<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(isset($_POST["account_id"])) {
   $query = "SELECT * FROM accounts WHERE accid = '".$_POST["account_id"]."'";
   $result = mysqli_query($connect, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
