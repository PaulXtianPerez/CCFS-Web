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
      $grlvl = mysqli_real_escape_string($connect, $_POST["grdLvl"]);
      $fafirst = mysqli_real_escape_string($connect, $_POST["faFirstName"]);
      $falast = mysqli_real_escape_string($connect, $_POST["faLastName"]);
      $faadd = mysqli_real_escape_string($connect, $_POST["faAddress"]);
      $faoccu = mysqli_real_escape_string($connect, $_POST["faOccupation"]);
      $famob = mysqli_real_escape_string($connect, $_POST["faMobile"]);
      $faemail = mysqli_real_escape_string($connect, $_POST["faEmail"]);
      $mofirst = mysqli_real_escape_string($connect, $_POST["moFirstName"]);
      $molast = mysqli_real_escape_string($connect, $_POST["moLastName"]);
      $moadd = mysqli_real_escape_string($connect, $_POST["moAddress"]);
      $mooccu = mysqli_real_escape_string($connect, $_POST["moOccupation"]);
      $momob = mysqli_real_escape_string($connect, $_POST["moMobile"]);
      $moemail = mysqli_real_escape_string($connect, $_POST["moEmail"]);
      $guaname = mysqli_real_escape_string($connect, $_POST["guaName"]);
      $guaaddress = mysqli_real_escape_string($connect, $_POST["guaAddress"]);
      $guacontact = mysqli_real_escape_string($connect, $_POST["guaContact"]);
      if($_POST["student_id"] != '') {
           $query = "
           UPDATE enstudent
           SET studstat='$status',
           SurName ='$surname',
           GivenName='$givenname',
           MiddleName='$middlename',
           gender='$gender',
           gradelvl='$grlvl',
           birthdate='$bdate',
           birthplace='$bplace',
           studaddress='$address',
           homeTelnum='$telephone',
           mobilenum='$mobile',
           faFname='$fafirst',
           falname='$falast',
           faAdd='$faadd',
           faoccupation='$faoccu',
           faMobilenum='$famob',
           faEmail='$faemail',
           moFname='$mofirst',
           moLname='$molast',
           moAdd='$moadd',
           mooccupation='$mooccu',
           momobilenum='$momob',
           moEmail='$moemail',
           guardianName='$guaname',
           guardianAddress='$guaaddress',
           guardianContact='$guacontact'
           WHERE IDno='$_POST[student_id]'";
           $message = 'Successfully updated.';
      }

      if(mysqli_query($connect, $query)) {
           $output .= '<label class="text-success">' . $message . '</label>';
           $select_query = "SELECT IDno, enstudent.SurName, enstudent.GivenName, enstudent.MiddleName, enstudent.gradelvl,section.sename FROM enstudent,section WHERE enstudent.gradelvl = section.gradelvl AND enstudent.yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') GROUP BY IDno";
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
                          <td>' . $row["sename"] . '</td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["IDno"] .'" class="btn btn-info btn-xs edit_data" /></td>
                     </tr>
                ';
           }
           $output .= '</table>';
      }
      echo $output;
 }
 ?>
