<?php
include("database.php");

$input = filter_input_array(INPUT_POST);

$adviser_name = mysqli_real_escape_string($mysqli, $input["adviserlname"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE section
 SET adviserlname = '".$adviser_name."'
 WHERE secID = '".$input["secID"]."'
 ";

 mysqli_query($mysqli, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM section
 WHERE secID = '".$input["secID"]."'
 ";
 mysqli_query($mysqli, $query);
}

echo json_encode($input);

?>
