<?php
//GradesAction.php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');

$input = filter_input_array(INPUT_POST);

$firstGr = mysqli_real_escape_string($connect, $input["firstquartergrade"]);
$secondGr = mysqli_real_escape_string($connect, $input["secondquartergrade"]);
$thirdGr = mysqli_real_escape_string($connect, $input["thirdquartergrade"]);
$fourthGr = mysqli_real_escape_string($connect, $input["fourthquartergrade"]);
$remarks = mysqli_real_escape_string($connect, $input["remarks"]);

if($input["action"] === 'edit'){
 $query = "
 UPDATE grades
 SET firstquartergrade = '".$firstGr."',
 secondquartergrade = '".$secondGr."',
 thirdquartergrade = '".$thirdGr."',
 fourthquartergrade = '".$fourthGr."',
 remarks = '".$remarks."',
 WHERE subjID = '".$input["subjID"]."'
 ";

 mysqli_query($connect, $query);

}

echo json_encode($input);

?>
