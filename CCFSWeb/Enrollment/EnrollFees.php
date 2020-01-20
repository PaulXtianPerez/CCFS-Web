<?php
include('Connection.php');
$input = filter_input_array(INPUT_POST);
if(isset($input['idno'])) {
    $query = "INSERT INTO `feestudent`(tuition, books, misc, service, balance, IDno, yearid) VALUES
    ('".$input['t']."', '".$input['b']."', 
    '".$input['m']."', '".$input['s']."', 
    '".$input['ba']."', '".$input['idno']."', 
    '".$input['yearid']."')";
    mysqli_query($conn, $query);
}
?>