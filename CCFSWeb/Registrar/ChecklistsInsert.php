<?php
include("Connection.php");

if(!$conn){
  die("Could not connect:".mysqli_connect_error());
} else {

  /*if(!empty($_POST)){
    //$name = mysqli_real_escape_string($connect, $_POST["name"]);
    //$address = mysqli_real_escape_string($connect, $_POST["address"]);
    if($_POST["checkid"] = '') {
       $queryInsert = "INSERT INTO `checklist`(checkvalues, checkdesc) VALUES ('$_POST[domain]', '$_POST[description]')";
    }

  }*/

  //if(!empty($_POST["corevalues"])){
    $query = "INSERT INTO `checklist`(corevalues, valuedesc) VALUES ('$_POST[domain]', '$_POST[description]')";
//  }


  if(mysqli_query($conn, $query)){
    echo "<span style='color:#0AC02A;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully added." . "</span>";
    $_POST = array();
  } else {
    echo "<span style='color:#FF0004;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to add values." . "</span>";
  }

  mysqli_close($conn);
}
?>
