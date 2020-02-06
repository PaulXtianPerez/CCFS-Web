<?php
include('Connection.php');
$input = filter_input_array(INPUT_POST);
if(isset($input['idno'])) {
    $query1 = "SELECT * FROM feestudent WHERE IDno = '".$input['idno']."' AND yearid = '".$input['yearid']."'";
    $result = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result)==0) {
        $query = "INSERT INTO `feestudent`(tuition, books, misc, service, balance, IDno, yearid) VALUES
        ('".$input['t']."', '".$input['b']."', 
        '".$input['m']."', '".$input['s']."', 
        '".$input['ba']."', '".$input['idno']."', 
        '".$input['yearid']."')";
        mysqli_query($conn, $query);
        $bigpp = [];
        $bigpp1 = [];
        $bigpp2 = [];
        $checklist = "SELECT checkvalues,checkdesc FROM `checklist` WHERE checkvalues IS NOT NULL AND checkdesc IS NOT NULL";
        $checklist1 = "SELECT competencyvalues,competencydesc FROM `checklist` WHERE competencyvalues IS NOT NULL AND competencydesc IS NOT NULL";
        $checklist2 = "SELECT competencyvalues,competencydesc FROM `checklist` WHERE competencyvalues IS NOT NULL AND competencydesc IS NOT NULL";
        $result1 = mysqli_query($conn,$checklist);
        $result2 = mysqli_query($conn,$checklist1);
        $result3 = mysqli_query($conn,$checklist2);
        while($row = mysqli_fetch_array($result1)) {
            $bigpp[] = $row ;
        }
        while($row = mysqli_fetch_array($result2)) {
            $bigpp1[] = $row ;
        }
        while($row = mysqli_fetch_array($result3)) {
            $bigpp2[] = $row ;
        }
        if($input['gradeLevel'] == 'NURSERY' || $input['gradeLevel'] == 'KINDER' || $input['gradeLevel'] == 'PREKINDER') {
            for($i = 0; $i < sizeOf($bigpp) ; $i++) {
                $insertCh = "INSERT INTO `checklist`(checkvalues,checkdesc,IDno) values ('".$bigpp[$i]['checkvalues']."','".$bigpp[$i]['checkdesc']."','".$input['idno']."')";
                mysqli_query($conn,$insertCh);
            }
            for($i = 0; $i < sizeOf($bigpp1) ; $i++) {
                $insertCh1 = "INSERT INTO `checklist`(competencyvalues,competencydesc,IDno) values ('".$bigpp1[$i]['competencyvalues']."','".$bigpp1[$i]['competencydesc']."','".$input['idno']."')";
                mysqli_query($conn,$insertCh1);
            }
        }else {
            for($i = 0; $i < sizeOf($bigpp2) ; $i++) {
                $insertCh2 = "INSERT INTO `checklist`(corevalues,valuedesc,IDno) values ('".$bigpp1[$i]['competencyvalues']."','".$bigpp1[$i]['competencydesc']."','".$input['idno']."')";
                mysqli_query($conn,$insertCh2);
            }
        }
        echo print_r(mysqli_error($conn));
    }
    
}
?>