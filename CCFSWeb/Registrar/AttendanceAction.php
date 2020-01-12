<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');
$input = filter_input_array(INPUT_POST);

if(isset($input["student_id"])){
    echo $input['student_id'];
    
}else if(isset($input['id'])) {
        $query = "
        UPDATE attendance
        SET daysPres = ".$input['daysPres'].",
        daysTar = ".$input['daysTar'].",
        daysAbs = ".$input['daysAbs']."
        WHERE IDno = ".$input['id']."
        ";

        mysqli_query($connect, $query);
}


    // if($input['action'] == 'edit') {
    

    // }
// $days_Present = mysqli_real_escape_string($connect, $input["daysPres"]);
// $days_Tardy = mysqli_real_escape_string($connect, $input["daysTar"]);


?>
