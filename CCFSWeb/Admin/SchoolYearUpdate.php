<?php
 $connect = mysqli_connect("localhost", "root", "", "ccfs");
 if(!empty($_POST)) {
      $output = '';
      $message = '';
      $status = mysqli_real_escape_string($connect, $_POST["status"]);
      $surname = mysqli_real_escape_string($connect, $_POST["surname"]);
      $givenname = mysqli_real_escape_string($connect, $_POST["givenname"]);
      $middlename = mysqli_real_escape_string($connect, $_POST["midname"]);
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
      $bdate = mysqli_real_escape_string($connect, $_POST["birthdate"]);
      $bplace = mysqli_real_escape_string($connect, $_POST["birthplace"]);
      $address = mysqli_real_escape_string($connect, $_POST["address"]);
      $telephone = mysqli_real_escape_string($connect, $_POST["telnum"]);
      $mobile = mysqli_real_escape_string($connect, $_POST["mobnum"]);
      //$grlvl = mysqli_real_escape_string($connect, $_POST["grdLvl"]); //error updating in database
      $fafirst = mysqli_real_escape_string($connect, $_POST["faFirstName"]);
      $falast = mysqli_real_escape_string($connect, $_POST["faLastName"]);
      $famob = mysqli_real_escape_string($connect, $_POST["faMobile"]);
      $faemail = mysqli_real_escape_string($connect, $_POST["faEmail"]);
      $mofirst = mysqli_real_escape_string($connect, $_POST["moFirstName"]);
      $molast = mysqli_real_escape_string($connect, $_POST["moLastName"]);
      $momob = mysqli_real_escape_string($connect, $_POST["moMobile"]);
      $moemail = mysqli_real_escape_string($connect, $_POST["moEmail"]);
      $guaname = mysqli_real_escape_string($connect, $_POST["guaName"]);
      $guacontact = mysqli_real_escape_string($connect, $_POST["guaContact"]);
      if($_POST["student_id"] != '') {
           $query = "
           UPDATE enstudent
           SET studstat='$status',
           SurName ='$surname',
           GivenName='$givenname',
           MiddleName='$middlename',
           gender='$gender',
           birthdate='$bdate',
           birthplace='$bplace',
           studaddress='$address',
           homeTelnum='$telephone',
           mobilenum='$mobile',
           faFname='$fafirst',
           falname='$falast',
           faMobilenum='$famob',
           faEmail='$faemail',
           moFname='$mofirst',
           moLname='$molast',
           momobilenum='$momob',
           moEmail='$moemail',
           guardianName='$guaname',
           guardianContact='$guacontact'
           WHERE IDno='".$_POST["student_id"]."'";
           $message = 'Successfully updated.';
      }

      if(mysqli_query($connect, $query)) {
           $output .= '<label class="text-success">' . $message . '</label>';
           $select_query = "SELECT IDno, SurName, GivenName, MiddleName, gradelvl FROM `enstudent`";
           $result = mysqli_query($connect, $select_query);
           $output .= '
                <table class="table table-bordered table-hover">
                     <tr>
                       <th>ID Number</th>
                       <th>Surname</th>
                       <th>Given Name</th>
                       <th>Middle Name</th>
                       <th>Grade Level</th>
                       <th>Section</th>
                       <th>Teacher</th>
                       <th></th>
                     </tr>
           ';
           while($row = mysqli_fetch_array($result)) {
                $output .= '
                     <tr>
                          <td>' . $row["IDno"] . '</td>
                          <td>' . $row["SurName"] . '</td>
                          <td>' . $row["GivenName"] . '</td>
                          <td>' . $row["MiddleName"] . '</td>
                          <td>' . $row["gradelvl"] . '</td>
                          <td></td>
                          <td></td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["IDno"] .'" class="btn btn-info btn-xs edit_data" /></td>
                     </tr>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 ?>
