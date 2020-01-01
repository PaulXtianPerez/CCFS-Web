<?php
//ObservedValuesAction.php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');

$input = filter_input_array(INPUT_POST);

$firstVal = mysqli_real_escape_string($connect, $input["firstrating"]);
$secondVal = mysqli_real_escape_string($connect, $input["secondrating"]);
$thirdVal = mysqli_real_escape_string($connect, $input["thirdrating"]);
$fourthVal = mysqli_real_escape_string($connect, $input["fourthrating"]);

if($input["action"] === 'edit'){
 $query = "
 UPDATE checklist
 SET firstrating = '".$firstVal."',
 secondrating = '".$secondVal."',
 thirdrating = '".$thirdVal."',
 fourthrating = '".$fourthVal."'
 WHERE checkid = '".$input["checkid"]."'
 ";

 mysqli_query($connect, $query);

}

echo json_encode($input);

?>
