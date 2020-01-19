<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');
$input = filter_input_array(INPUT_POST);
if(isset($input['subject'])) {
    $sql = "SELECT grades.IDno,GivenName,SurName,subject.subname,firstquartergrade,secondquartergrade,thirdquartergrade,fourthquartergrade,finalgrade,remarks,grades.subjID
    FROM grades,enstudent,subject,section 
    WHERE grades.sename = section.sename 
    AND grades.sename = '".$input['section']."' 
    AND section.gradelvl='".$input['grLvl']."'
    AND grades.IDno = enstudent.IDno 
    AND subject.subjID = grades.subjID 
    AND subject.subname = '".$input['subject']."'";
    $result2 = $connect->query($sql); 
    $rows = [];
    while($row = mysqli_fetch_array($result2))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
?>