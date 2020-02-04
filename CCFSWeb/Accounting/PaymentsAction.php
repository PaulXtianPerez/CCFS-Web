<?php
  include('dbase.php');
  //code for getting ID number and balance
  if(isset($_POST['search'])) {
    $id = $_POST['id'];
    $sy = "SELECT yearid FROM schoolyear WHERE scstatus = 'ACTIVE'";
    //missing code for fetching active school year data
    $idnum = "SELECT IDno, balance FROM feestudent WHERE IDno = '$id'";
    $idno = "SELECT IDno from feestudent";
    $query_run = mysqli_query($conn,$idnum);
    while($row = mysqli_fetch_array($query_run)) {
        echo '
          <tr>
            <th>ID Number </th>
            <th>Remaining Balance </th>
          </tr> <br />
                      <tr>
                      <td>'.$row["IDno"].'</td>
                      <td>'.$row["balance"].'</td>
                    </tr
        ';
    }
    // code for inserting the data
    //problems cannot insert and d ako sure dun sa pag kuha nung active school year and feeid
    if(isset($_POST['submit'])) {
      $pay = $_POST['pay'];
      $name = $_POST['pname'];
      $date = date('Y, M, d');
      $sy = "SELECT yearid FROM schoolyear WHERE scstatus = 'ACTIVE'";
      $resultsy = mysqli_query($conn,$sy);
      $feeid = "SELECT feestID FROM feestudent WHERE IDno = '$id' ";
      $resultfee = mysql_query($conn,$sy);
      $sqlpay = "INSERT INTO payment(payname, payamount, paydate, feestID, yearid) VALUES ('$pay', '$name', '$date', '$resultsy','$resultfee')";
      mysql_query($conn,$sqlpay);
      //missing code for subtracting balance
    }
  }
?>
