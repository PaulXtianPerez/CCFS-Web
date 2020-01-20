<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');

$input = filter_input_array(INPUT_POST);

$adviser_name = mysqli_real_escape_string($connect, $input["adviserlname"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE section
 SET adviserlname = '".$adviser_name."'
 WHERE secID = '".$input["secID"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM section
 WHERE secID = '".$input["secID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
