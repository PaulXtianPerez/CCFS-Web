<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(isset($_POST["sec_ID"])) {
   $query = "SELECT * FROM section WHERE secID = '".$_POST["sec_ID"]."'";
   $result = mysqli_query($connect, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
