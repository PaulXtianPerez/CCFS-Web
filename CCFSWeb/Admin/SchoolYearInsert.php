<?php
  include("database.php");

  if(!$mysqli){
    die("Could not connect:".mysqli_connect_error());
  } else {
  $query = "INSERT INTO `schoolyear`(yearstart, yearend,janAtt, febAtt, marAtt, aprAtt, mayAtt, junAtt, julAtt, augAtt, sepAtt, octAtt, novAtt, decAtt, dateStart, dateEnd, pretui1, premisc1, prebook1, pretui2, premisc2, prebook2, pretui3, premisc3, prebook3, gradetui1, grademisc1, gradebook1, gradetui2, grademisc2, gradebook2, gradetui3, grademisc3, gradebook3, gradetui4, grademisc4, gradebook4, gradetui5, grademisc5, gradebook5,gradetui6, grademisc6, gradebook6 ) values ('$_POST[yearstart]', '$_POST[yearend]', '$_POST[janAtt]', '$_POST[febAtt]', '$_POST[marAtt]', '$_POST[aprAtt]', '$_POST[mayAtt]', '$_POST[junAtt]', '$_POST[julAtt]', '$_POST[augAtt]', '$_POST[sepAtt]', '$_POST[octAtt]', '$_POST[novAtt]', '$_POST[decAtt]', '$_POST[dateStart]', '$_POST[dateEnd]', '$_POST[pretui1]', '$_POST[premisc1]', '$_POST[prebook1]','$_POST[pretui2]', '$_POST[premisc2]', '$_POST[prebook2]', '$_POST[pretui3]', '$_POST[premisc3]', '$_POST[prebook3]', '$_POST[gradetui1]', '$_POST[grademisc1]', '$_POST[gradebook1]', '$_POST[gradetui2]', '$_POST[grademisc2]', '$_POST[gradebook2]', '$_POST[gradetui3]', '$_POST[grademisc3]', '$_POST[gradebook3]', '$_POST[gradetui4]', '$_POST[grademisc4]', '$_POST[gradebook4]', '$_POST[gradetui5]', '$_POST[grademisc5]', '$_POST[gradebook5]', '$_POST[gradetui6]', '$_POST[grademisc6]', '$_POST[gradebook6]')";

    if(mysqli_query($mysqli, $query)){
      echo "<span style='color:#0AC02A;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created a new school year." . "</span>";
      $_POST = array();
    } else {
      echo "<span style='color:#FF0004;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to create a new school year." . "</span>";
    }

    mysqli_close($mysqli);
  }
?>
