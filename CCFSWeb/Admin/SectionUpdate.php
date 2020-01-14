<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(!empty($_POST)) {
      $output = '';
      $message = '';
      $sename = mysqli_real_escape_string($connect, $_POST["sename"]);
      $gradelvl = mysqli_real_escape_string($connect, $_POST["gradelvl"]);
      $adviserlname = mysqli_real_escape_string($connect, $_POST["adviserlname"]);
      if($_POST["sec_ID"] != '') {
           $query = "
           UPDATE section
           SET sename='$sename',
           gradelvl='$gradelvl', 
           adviserlname='$adviserlname'
           WHERE secID='".$_POST["sec_ID"]."'";
           $message = 'Account updated.';
      }

      if(mysqli_query($connect, $query)) {
           $output .= '<label class="text-success">' . $message . '</label>';
           $select_query = "SELECT * FROM section";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered table-hover">
                     <tr>
                       <th>Section ID</th>
                       <th>Section Name</th>
                       <th>Grade Level</th>
                       <th>Adviser Name</th>
                       <th>School Year</th>
                       <th></th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result)) {
                $output .= '
                     <tr>
                          <td>' . $row["secID"] . '</td>
                          <td>' . $row["sename"] . '</td>
                          <td>' . $row["gradelvl"] . '</td>
                          <td>' . $row["adviserlname"] . '</td>
                          <td>' . $row["yearid"] . '</td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["secID"] .'" class="btn btn-info btn-xs edit_data" /></td>
                     </tr>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 ?>
