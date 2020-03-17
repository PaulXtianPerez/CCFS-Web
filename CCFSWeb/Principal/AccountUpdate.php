<?php
 include("database.php");

 $input = filter_input_array(INPUT_POST);

 if(!empty($_POST) && !isset($input['reset'])) {
   $firstname = mysqli_real_escape_string($mysqli, $_POST["firstname"]);
   $lastname = mysqli_real_escape_string($mysqli, $_POST["lastname"]);
   $status = mysqli_real_escape_string($mysqli, $_POST["status"]);
   if($_POST["account_id"] != '') {
     $query = "
     UPDATE accounts
     SET fname='$firstname',
     lname='$lastname',
     accstatus='$status'
     WHERE accid='".$_POST["account_id"]."'";
   }

   if(mysqli_query($mysqli, $query)) {
     echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Account updated." . "</span>";
   } else {
     echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Update failed." . "</span>";
   }

 } else if (isset($input['reset'])) {
   $query = "UPDATE accounts SET password = DEFAULT WHERE accid='".$_POST["account_id"]."'";
   if(mysqli_query($mysqli, $query)) {
     echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Password reset successful." . "</span>";
   } else {
     echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to reset password." . "</span>";
   }
 }
 ?>
