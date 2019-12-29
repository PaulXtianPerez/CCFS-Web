<?php
//AttendanceAtion.php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');

$input = filter_input_array(INPUT_POST);

$days_Present = mysqli_real_escape_string($connect, $input["daysPres"]);
$days_Tardy = mysqli_real_escape_string($connect, $input["daysTar"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE attendance
 SET daysPres = '".$days_Present."',
 daysTar = '".$days_Tardy."'
 WHERE attid = '".$input["attid"]."'
 ";

 mysqli_query($connect, $query);

}

echo json_encode($input);

?>
