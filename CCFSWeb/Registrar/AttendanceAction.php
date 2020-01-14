<?php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');
$input = filter_input_array(INPUT_POST);

if(isset($input["student_id"])) {
    $chkAtt = "SELECT IDno FROM attendance WHERE IDno=".$input['student_id']."";
    $getYID = "SELECT yearid FROM schoolyear WHERE scstatus = 'ACTIVE'";
    $result = $connect->query($getYID); 
    $result1 = $connect->query($chkAtt); 
    $data = array();
    $data1 = array();
    while($row = $result->fetch_assoc()) {
        $data[0] = $row['yearid'];
    }
    while($row = $result1->fetch_assoc()) {
        $data1[0] = $row['IDno'];
    }
    $monthID = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    if (empty($data1[0])) {
        for($i = 0 ; $i < sizeof($monthID); $i++) { 
            $insAtt = "INSERT INTO `attendance`(`IDno`,`yearid`,`month`) VALUES (".$input['student_id'].",".$data[0].",'".$monthID[$i]."')";
            $insert_row = $connect->query($insAtt);
        }
    }
    echo $input['student_id'];
    
}else if(isset($input['id'])) {
    
    switch($input['month']) {
        case 1:
            $query = "
            UPDATE attendance
            SET
            daysPres = ".$input['daysPres1'].",
            daysTar = ".$input['daysTar1'].",
            daysAbs = ".$input['daysAbs1']."
            WHERE IDno = ".$input['id']." AND `month`='Jan'
            ";
            mysqli_query($connect, $query);
        break;
        case 2:
            $query = "
            UPDATE attendance
            SET
            daysPres = ".$input['daysPres2'].",
            daysTar = ".$input['daysTar2'].",
            daysAbs = ".$input['daysAbs2']."
            WHERE IDno = ".$input['id']." AND `month`='Feb'
            ";
            mysqli_query($connect, $query);
        break;
        case 3:
            $query = "
            UPDATE attendance
            SET
            month = 'Mar',
            daysPres = ".$input['daysPres3'].",
            daysTar = ".$input['daysTar3'].",
            daysAbs = ".$input['daysAbs3']."
            WHERE IDno = ".$input['id']." AND `month`='Mar'
            ";
            mysqli_query($connect, $query);
        break;
        case 4:
            $query = "
            UPDATE attendance
            SET
            month = 'Apr',
            daysPres = ".$input['daysPres4'].",
            daysTar = ".$input['daysTar4'].",
            daysAbs = ".$input['daysAbs4']."
            WHERE IDno = ".$input['id']." AND `month`='Apr'
            ";
            mysqli_query($connect, $query);
        break;
        case 5:
            $query = "
            UPDATE attendance
            SET
            month = 'May',
            daysPres = ".$input['daysPres5'].",
            daysTar = ".$input['daysTar5'].",
            daysAbs = ".$input['daysAbs5']."
            WHERE IDno = ".$input['id']." AND `month`='May'
            ";
            mysqli_query($connect, $query);
        break;
        case 6:
            $query = "
            UPDATE attendance
            SET
            month = 'Jun',
            daysPres = ".$input['daysPres6'].",
            daysTar = ".$input['daysTar6'].",
            daysAbs = ".$input['daysAbs6']."
            WHERE IDno = ".$input['id']." AND `month`='Jun'
            ";
            mysqli_query($connect, $query);
        break;
        case 7:
            $query = "
            UPDATE attendance
            SET
            month = 'Jul',
            daysPres = ".$input['daysPres7'].",
            daysTar = ".$input['daysTar7'].",
            daysAbs = ".$input['daysAbs7']."
            WHERE IDno = ".$input['id']." AND `month`='Jul'
            ";
            mysqli_query($connect, $query);
        break;
        case 8:
            $query = "
            UPDATE attendance
            SET
            month = 'Aug',
            daysPres = ".$input['daysPres8'].",
            daysTar = ".$input['daysTar8'].",
            daysAbs = ".$input['daysAbs8']."
            WHERE IDno = ".$input['id']." AND `month`='Aug'
            ";
            mysqli_query($connect, $query);
        break;
        case 9:
            $query = "
            UPDATE attendance
            SET
            month = 'Sep',
            daysPres = ".$input['daysPres9'].",
            daysTar = ".$input['daysTar9'].",
            daysAbs = ".$input['daysAbs9']."
            WHERE IDno = ".$input['id']." AND `month`='Sep'
            ";
            mysqli_query($connect, $query);
        break;
        case 10:
            $query = "
            UPDATE attendance
            SET
            month = 'Oct',
            daysPres = ".$input['daysPres10'].",
            daysTar = ".$input['daysTar10'].",
            daysAbs = ".$input['daysAbs10']."
            WHERE IDno = ".$input['id']." AND `month`='Oct'
            ";
            mysqli_query($connect, $query);
        break;
        case 11:
            $query = "
            UPDATE attendance
            SET
            month = 'Nov',
            daysPres = ".$input['daysPres11'].",
            daysTar = ".$input['daysTar11'].",
            daysAbs = ".$input['daysAbs11']."
            WHERE IDno = ".$input['id']." AND `month`='Nov'
            ";
            mysqli_query($connect, $query);
        break;
        case 12:
            $query = "
            UPDATE attendance
            SET
            month = 'Dec',
            daysPres = ".$input['daysPres12'].",
            daysTar = ".$input['daysTar12'].",
            daysAbs = ".$input['daysAbs12']."
            WHERE IDno = ".$input['id']." AND `month`='Dec'
            ";
            mysqli_query($connect, $query);
        break;
    }
        
}
?>
