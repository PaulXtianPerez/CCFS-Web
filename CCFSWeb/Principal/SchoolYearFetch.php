<?php
 include("database.php");
 if(isset($_POST["schoolYear_id"])) {
   $query = "SELECT * FROM schoolyear WHERE yearid = '".$_POST["schoolYear_id"]."'";
   $result = mysqli_query($mysqli, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
