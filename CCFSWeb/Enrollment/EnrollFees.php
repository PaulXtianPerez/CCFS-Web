<?php
include('Connection.php');
$input = filter_input_array(INPUT_POST);
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$edge = array("Peter"=>99, "Ben"=>99, "Joe"=>99);
if(isset($input['idno'])) {
    $query = "INSERT INTO `feestudent`(tuition, books, misc, service, balance, IDno, yearid) VALUES
    ('".$input['t']."', '".$input['b']."', 
    '".$input['m']."', '".$input['s']."', 
    '".$input['ba']."', '".$input['idno']."', 
    '".$input['yearid']."')";
    mysqli_query($conn, $query);
    echo json_encode($age);
}
echo json_encode($edge);
?>