<?php
//to integrate this either you put a button "UPDATE ASSESSMENT" or when you click the "THE VIEW ASSESSMENT IT WILL AUTOMATICALLY UPDATE THE ASSESSMENT"
include('dbase.php');
if(isset($_POST['update'])) {
  //active school year
  $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $actyear = mysqli_fetch_array($result);
  mysqli_error($conn);
  //get student balance info
  $bal[] = "SELECT * FROM feestudent WHERE yearid = '".$actyear[0]."' ";

  $result1 = $conn->query($bal[0]) or die($conn->error.__LINE__);

  while($row = mysqli_fetch_array($result1)) {
    //values for status paid or unpaid
    $set = 'Paid';
    $down = $row["tuition"];
    $bals = $row["balance"];
    $tuition = $row["tuition"];
    $books = $row["books"];
    $misc = $row["misc"];
    $surcharge = $row["surcharge"];
    $service = $row["service"];
    //computation for status paid or unpaid
    $id = $row["IDno"];
    $downpayment = ($down * .1);
    $total = ($tuition + $books + $misc + $service);
    $comp1 = ($total-$downpayment)/9;
    //first computation for the first assessment
    $check = $total - $downpayment;
    $check1 =  $total - (($comp1 + $downpayment) );
    $check2 =  $total - (($comp1 * 2) + $downpayment);
    $check3 =  $total - (($comp1 * 3) + $downpayment);
    $check4 =  $total - (($comp1 * 4) + $downpayment);
    $check5 =  $total - (($comp1 * 5) + $downpayment);
    $check6 =  $total - (($comp1 * 6) + $downpayment);
    $check7 =  $total - (($comp1 * 7) + $downpayment);
    $check8 =  $total - (($comp1 * 8) + $downpayment);
    $Paid = 'Paid';
    //queries
    $query  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'downpayment' AND yearid = '".$actyear[0]."' ";
    $query1  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'July' AND yearid = '".$actyear[0]."' ";
    $query2  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'August' AND yearid = '".$actyear[0]."' ";
    $query3  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'September' AND yearid = '".$actyear[0]."' ";
    $query4  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'October' AND yearid = '".$actyear[0]."' ";
    $query5  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'November' AND yearid = '".$actyear[0]."' ";
    $query6  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'December' AND yearid = '".$actyear[0]."' ";
    $query7  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'January' AND yearid = '".$actyear[0]."' ";
    $query8  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'February' AND yearid = '".$actyear[0]."' ";
    $query9  = "UPDATE assessment SET asmstatus = '".$set."' WHERE IDno = '".$id."' AND assessfor = 'March' AND yearid = '".$actyear[0]."' ";
    mysqli_error($conn);
    //update status from unpaid to unpaid
    //REMOVE ALL ECHO STATEMENT, ECHO STATEMENTS ARE USED ONLY TO CHECK WHAT IF STATEMENT IS BEING EXECUTED thankss
    if($bals <= $check AND $bals > $check1){
      mysqli_query($conn,$query);
      mysqli_error($conn);
    }
    if($bals <= $check1 AND $bals > $check2){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_error($conn);
    }
    if($row['balance'] <= $check2 and $row['balance'] > $check3){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
    }
    if($row['balance'] <= $check3 and $row['balance'] > $check4){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_error($conn);
    }
    if($row['balance'] <= $check4 and $row['balance'] > $check5){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_error($conn);
    }
    if($row['balance'] <= $check5 and $row['balance'] > $check6){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_query($conn,$query5);
      mysqli_error($conn);
    }
    if($row['balance'] <= $check6 and $row['balance'] > $check7){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_query($conn,$query5);
      mysqli_query($conn,$query6);
    }
    if($row['balance'] <= $check7 and $row['balance'] > $check8){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_query($conn,$query5);
      mysqli_query($conn,$query6);
      mysqli_query($conn,$query7);
      mysqli_error($conn);
    }
    if($row['balance'] <= $check8 and $row['balance'] > 0){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_query($conn,$query5);
      mysqli_query($conn,$query6);
      mysqli_query($conn,$query7);
      mysqli_query($conn,$query8);
      mysqli_error($conn);
    }
    if($row['balance'] == 0){
      mysqli_query($conn,$query);
      mysqli_query($conn,$query1);
      mysqli_query($conn,$query2);
      mysqli_query($conn,$query3);
      mysqli_query($conn,$query4);
      mysqli_query($conn,$query5);
      mysqli_query($conn,$query6);
      mysqli_query($conn,$query7);
      mysqli_query($conn,$query8);
      mysqli_query($conn,$query9);
      mysqli_error($conn);
    }

  }
  echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully updated assessment." . "</span>";
}
