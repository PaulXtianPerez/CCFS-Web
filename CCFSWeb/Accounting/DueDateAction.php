<?php
    include('dbase.php');
    if(isset($_POST["date"])) {
        $months = $_POST["month"];
        $duemonth = $_POST["duedatee"];
        //update for yearid insert this 3 lines of code from $query to $actyear
        $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $actyear = mysqli_fetch_array($result);                         //insert this yearid code below//
        $query1 = "SELECT * FROM assessment WHERE assessfor =  '$months'AND  yearid = '".$actyear[0]."' ";
        $result = $conn->query($query1) or die($conn->error.__LINE__);
        while($row = mysqli_fetch_array($result)) {
            $query2  = "UPDATE assessment SET duedate = '".$duemonth."' WHERE assessfor = '$months'";
            mysqli_query($conn,$query2);
            echo '
                <table>
                     <td>'.$query1.'</td>
                     <td>'.$duemonth.'</td>
                </table>
            ';
            echo mysqli_error($conn);
        }
    }
?>
