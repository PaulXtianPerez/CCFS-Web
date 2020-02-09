<?php
  include('dbase.php');
  //code for getting ID number and balance
  if(isset($_GET['search'])) {
    $id = $_GET['id'];
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
    $result = $conn->query($query) or die($conn->error.__LINE__);
    $actyear = mysqli_fetch_array($result);
    $idnum = "SELECT * FROM feestudent WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' " ;
    $query_run = mysqli_query($conn,$idnum);

    if(mysqli_num_rows($query_run) > 0){
      while($row = mysqli_fetch_array($query_run)) {
          echo '
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Number </th>
                  <th>Remaining Balance </th>
                  <th>Service Fee </th>
                  <th>Surcharge </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>'.$row["IDno"].'</td>
                  <td>'.$row["balance"].'</td>
                  <td>'.$row["service"].'</td>
                  <td>'.$row["surcharge"].'</td>
                </tr>
              </tbody>
            </table>
          ';
      }
    } else {
      echo "No matching records found";
    }
  }
  
?>
