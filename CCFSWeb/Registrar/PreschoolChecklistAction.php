<?php

include("Connection.php");

//$id = $_POST["id"];

if(isset($_POST['chk1'])){
  $firstVal = $_POST['chk1']; //checkbox is checked and value=1
} else {
  $firstVal=0; //checkbox is not checked and value=0
}

if(isset($_POST['chk2'])){
  $secondVal = $_POST['chk2'];
} else {
  $secondVal=0;
}

if(isset($_POST['chk3'])){
  $thirdVal = $_POST['chk3'];
} else {
  $thirdVal=0;
}

if(isset($_POST['chk4'])){
  $fourthVal = $_POST['chk4'];
} else {
  $fourthVal=0;
}

$query = "UPDATE checklist
          SET firstrating='".$firstVal."',
          secondrating = '".$secondVal."',
          thirdrating = '".$thirdVal."',
          fourthrating = '".$fourthVal."'
          WHERE checkid=1";
mysqli_query($conn, $query);

/*
    function add_contact_details_availability(){
    if($_POST['action'] == 'checkbox-select') {
         //$checkbox = $_POST['id'];
         //$checked = $_POST['firstrating'];
    	$checked = mysqli_real_escape_string($connect, $_POST["status"]);
        // Your MySQL code here
         //$query = "UPDATE checklist SET ('firstrating', 'secondrating', 'thirdrating', 'fourthrating') VALUES('$checked', '$checked', '$checked', '$checked')";
         $query = "
  UPDATE checklist
  SET firstrating = '".$checked."',
  secondrating = '".$secondVal."',
  thirdrating = '".$thirdVal."',
  fourthrating = '".$fourthVal."'
  ";

mysqli_query($connect , $query) or die('Database error, check!');

        echo 'Updated';
    }
           echo 'Code ran';
}
*/


?>
