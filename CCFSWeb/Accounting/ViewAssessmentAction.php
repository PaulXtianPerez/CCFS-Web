<?php
  include('dbase.php');
  $input = filter_input_array(INPUT_POST);
  if(isset($input['search'])) {
    $id = $input['id'];
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
    $result = $conn->query($query) or die($conn->error.__LINE__);
    $actyear = mysqli_fetch_array($result);
    $idnum = "SELECT * FROM assessment WHERE IDno = '".$id."' AND assessfor !='downpayment' AND yearid = '".$actyear[0]."' ORDER BY duedate";
    $idno = "SELECT IDno from assessment";
    $query_run = mysqli_query($conn,$idnum);
    while($row = mysqli_fetch_array($query_run)) {
        echo " <br>
                <tr>
                <td>".$row['IDno']."</td>
                <td>".$row['assessfor']."</td>
                <td>".$row['amount']."</td>
                <td>".$row['duedate']."</td>
                <td>".$row["asmstatus"]."</td>
                    </tr>";
    }
    $result2 = $conn->query($idno);
    $e = mysqli_fetch_array($result2);
    if($input['id']!= $e[0]) {
      echo "No Match Found";
    }
  }else if(isset($input['viewall'])) {
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $actyear = mysqli_fetch_array($result);
    $idnum = "SELECT * FROM assessment WHERE assessfor !='downpayment' AND yearid = $actyear[0] ORDER BY duedate";
    $idno = "SELECT IDno from assessment";
    $query_run = mysqli_query($conn,$idnum);
    while($row = mysqli_fetch_array($query_run)) {
        echo '
          <br />
                      <tr>
                      <td>'.$row["IDno"].'</td>
                      <td>'.$row["assessfor"].'</td>
                      <td>'.$row["amount"].'</td>
                      <td>'.$row["duedate"].'</td>
                      <td>'.$row["asmstatus"].'</td>
                    </tr>
                      ';
    }
  }

?>
