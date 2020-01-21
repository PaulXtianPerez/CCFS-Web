<?php
include('Connection.php');
$input = filter_input_array(INPUT_POST);
if(isset($input['idno'])) {
    $query1 = "SELECT * FROM feestudent WHERE IDno = '".$input['idno']."' AND yearid = '".$input['yearid']."'";
    $result = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result)==0) {
        if($input['s'] == '') {
            $input['s'] == 0;
            $query = "INSERT INTO `feestudent`(tuition, books, misc, service, balance, IDno, yearid) VALUES
            ('".$input['t']."', '".$input['b']."', 
            '".$input['m']."', '".$input['s']."', 
            '".$input['ba']."', '".$input['idno']."', 
            '".$input['yearid']."')";
            mysqli_query($conn, $query);
            echo print_r(mysqli_error($conn));
        }
    }
    
}
?>