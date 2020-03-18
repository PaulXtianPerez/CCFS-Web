<?php
include("Connection.php");

$input = filter_input_array(INPUT_POST);

for($i = 0; $i < $input['IDno']; $i++) {
  $slicedGrades = array_slice($input['grades'],0,6);
  $sql = "UPDATE `grades` SET
        `firstquartergrade`='".$slicedGrades[0]."',`secondquartergrade`='".$slicedGrades[1]."',
        `thirdquartergrade`='".$slicedGrades[2]."',`fourthquartergrade`='".$slicedGrades[3]."',
        `finalgrade`='".$slicedGrades[4]."',`remarks`='".$slicedGrades[5]."'
        WHERE IDno = '".$input['IDno'][$i]."' AND subjID = '".$input[subjID]."'";

  $conn->query($sql);
  array_shift($input['grades']);
  array_shift($input['grades']);
  array_shift($input['grades']);
  array_shift($input['grades']);
  array_shift($input['grades']);
  array_shift($input['grades']);
}
?>
