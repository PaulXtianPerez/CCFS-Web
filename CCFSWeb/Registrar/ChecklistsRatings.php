<?php
include("Connection.php");
$input = filter_input_array(INPUT_POST);

$firstVal = mysqli_real_escape_string($conn, $input["firstrating"]);
$secondVal = mysqli_real_escape_string($conn, $input["secondrating"]);
$thirdVal = mysqli_real_escape_string($conn, $input["thirdrating"]);
$fourthVal = mysqli_real_escape_string($conn, $input["fourthrating"]);

if($input["action"] === 'edit'){
  $query = "
  UPDATE checklist
  SET firstrating = '".$firstVal."',
  secondrating = '".$secondVal."',
  thirdrating = '".$thirdVal."',
  fourthrating = '".$fourthVal."'
  WHERE checkid = '".$input["checkid"]."'
  ";

mysqli_query($conn, $query);

}

echo json_encode($input);

?>
