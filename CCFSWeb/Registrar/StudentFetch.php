<?php
 include("Connection.php");
 if(isset($_POST["student_id"])) {
   $query = "SELECT * FROM enstudent WHERE IDno = '$_POST[student_id]'";
   $result = mysqli_query($conn, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
