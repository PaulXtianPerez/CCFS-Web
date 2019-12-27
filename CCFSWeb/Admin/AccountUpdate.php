<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(!empty($_POST)) {
      $output = '';
      $message = '';
      $firstname = mysqli_real_escape_string($connect, $_POST["firstname"]);
      $lastname = mysqli_real_escape_string($connect, $_POST["lastname"]);
      $password = mysqli_real_escape_string($connect, $_POST["password"]);
      $status = mysqli_real_escape_string($connect, $_POST["status"]);
      if($_POST["account_id"] != '') {
           $query = "
           UPDATE accounts
           SET fname='$firstname',
           lname='$lastname',
           password='$password',
           accstatus='$status'
           WHERE accid='".$_POST["account_id"]."'";
           $message = 'Account updated.';
      }

      if(mysqli_query($connect, $query)) {
           $output .= '<label class="text-success">' . $message . '</label>';
           $select_query = "SELECT * FROM accounts";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered table-hover">
                     <tr>
                       <th>Account ID</th>
                       <th>Name</th>
                       <th>Username</th>
                       <th>Account Type</th>
                       <th>Status</th>
                       <th></th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result)) {
                $output .= '
                     <tr>
                          <td>' . $row["accid"] . '</td>
                          <td>' . $row["fname"] . ' ' . $row["lname"] . '</td>
                          <td>' . $row["username"] . '</td>
                          <td>' . $row["type"] . '</td>
                          <td>' . $row["accstatus"] . '</td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["accid"] .'" class="btn btn-info btn-xs edit_data" /></td>
                     </tr>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 ?>
