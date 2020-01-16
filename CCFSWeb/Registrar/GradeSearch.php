<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');
$input = filter_input_array(INPUT_POST);
if(isset($input['grLvl'])) {
    $sql = "SELECT curstudent.gradelvl,curstudent.IDno,enstudent.GivenName,enstudent.SurName FROM `curstudent`,`enstudent` WHERE curstudent.gradelvl='".$input['grLvl']."' AND curstudent.IDno=enstudent.IDno";
    $result2 = $connect->query($sql); 
    $rows = [];
    while($row = mysqli_fetch_array($result2))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
?>