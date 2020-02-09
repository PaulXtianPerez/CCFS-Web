<?php
include("dbase.php");

if(isset($_POST['paid'])) {
  $id = $_GET['id'];
  $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $actyear = mysqli_fetch_array($result);
  $name = $_POST['pname'];
  //default values if the user didnt input anything
  $pbal = empty($_POST['pay']) ? 0 : $_POST['pay'];
  $ser = empty($_POST['payser']) ? 0 : $_POST['payser'];
  $sur = empty($_POST['paysur']) ? 0 : $_POST['paysur'];
  //computation for the total amount of payment
  $pay = $pbal + $ser + $sur;
  $date = date('Y-m-d');
  $query1 = "SELECT feestID FROM feestudent WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."'";
  $result1 = $conn->query($query1) or die($conn->error.__LINE__);
  $feeid1 = mysqli_fetch_array($result1);
  //balance minus the total payment
  $query2 = "SELECT balance FROM feestudent WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
  $result2 = $conn->query($query2) or die($conn->error.__LINE__);
  $bal = mysqli_fetch_array($result2);
  $balance = ($bal[0]-$pay);
  //service minus the servicefee
  $query4 = "SELECT service FROM feestudent WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
  $result4 = $conn->query($query4) or die($conn->error.__LINE__);
  $service = mysqli_fetch_array($result4);
  $serbal = $service[0]-$ser;
  $query5 = "UPDATE feestudent SET service = '".$serbal."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
  $query3 = "UPDATE feestudent SET balance = '".$balance."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
   $sqlpay = "INSERT INTO `payment` (`payid`, `payname`, `payamount`, `paydate`, `feeestID`, `yearid`) VALUES (NULL, '".$name."', '".$pay."', '".$date."', '".$feeid1[0]."', '".$actyear[0]."' )";
  //surcharge minus the surchargefee
  $query6 = "SELECT surcharge FROM feestudent WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
  $result6 = $conn->query($query6) or die($conn->error.__LINE__);
  $surchar = mysqli_fetch_array($result6);
  $surtotal = $surchar[0] - $sur;
  $query7 = "UPDATE feestudent SET surcharge = '".$surtotal."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
  mysqli_query($conn,$sqlpay);
  mysqli_query($conn,$query3);
  mysqli_query($conn,$query5);
  mysqli_query($conn,$query7);
  echo mysqli_error($conn);
}
?>
