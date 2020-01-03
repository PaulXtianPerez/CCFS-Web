<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(isset($_POST["student_id"])) {
   $query = "SELECT * FROM enstudent WHERE IDno = '$_POST[student_id]'";
   $result = mysqli_query($connect, $query);
   $row = mysqli_fetch_array($result);
   echo json_encode($row);
 }
 ?>
