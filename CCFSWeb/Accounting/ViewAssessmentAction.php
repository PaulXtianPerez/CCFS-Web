<?php
  include('dbase.php');
  if(isset($_POST['search'])) {
    $id = $_POST['id'];
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
    $result = $conn->query($query) or die($conn->error.__LINE__);
    $actyear = mysqli_fetch_array($result);
    $idnum = "SELECT * FROM assessment WHERE IDno = '$id' AND assessfor !='downpayment' AND yearid = $actyear[0] ORDER BY duedate";
    $idno = "SELECT IDno from assessment";
    $query_run = mysqli_query($conn,$idnum);
    while($row = mysqli_fetch_array($query_run)) {
        echo ' <br />

                      <tr>
                      <td>'.$row["IDno"].'</td>
                      <td>'.$row["assessfor"].'</td>
                      <td>'.$row["amount"].'</td>
                      <td>'.$row["duedate"].'</td>
                    </tr
                      ';
    }
    if($_POST['id']!= $idno) {
      echo "No Match Found";
    }
  }
  if(isset($_POST['viewall'])) {
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $actyear = mysqli_fetch_array($result);
    $idnum = "SELECT * FROM assessment WHERE assessfor !='downpayment' AND yearid = $actyear[0] ORDER BY duedate";
    $idno = "SELECT IDno from assessment";
    $query_run = mysqli_query($conn,$idnum);
    while($row = mysqli_fetch_array($query_run)) {
        echo '
          <tr>
            <th>ID Number </th>
            <th>Assessed For </th>
            <th>Amount </th>
            <th>Due Date </th>
          </tr> <br />
                      <tr>
                      <td>'.$row["IDno"].'</td>
                      <td>'.$row["assessfor"].'</td>
                      <td>'.$row["amount"].'</td>
                      <td>'.$row["duedate"].'</td>
                    </tr
                      ';
    }
  }

?>
