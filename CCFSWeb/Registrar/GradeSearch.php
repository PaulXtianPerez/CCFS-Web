<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');
$input = filter_input_array(INPUT_POST);
if(isset($input['grLvl'])) {
    
    echo json_encode($rows);
}
?>