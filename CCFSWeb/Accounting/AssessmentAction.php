<?php
include('dbase.php');
 if(isset($_POST['create'])) {
    $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
    $result = $conn->query($query) or die($conn->error.__LINE__);
    $actyear = mysqli_fetch_array($result);
    $query1 = "SELECT * FROM feestudent WHERE yearid = $actyear[0]";
    $result1 = $conn->query($query1) or die($conn->error.__LINE__);
    while($row = mysqli_fetch_array($result1)) {
        //update
        $tuition = $row["tuition"];
        $books = $row["books"];
        $misc = $row["misc"];
        $surcharge = $row["surcharge"];
        $service = $row["service"];
        $total = $tuition + $books + $misc;
        //end of update
        $down = $row["tuition"];
        $bals = $row["balance"];
        $id = $row["IDno"];
        $assess1 = ($down * .1);
        $query2 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess1.", ".$id.", 'downpayment', ".$actyear[0].")";
        mysqli_query($conn,$query2);
        $assess2 = ($total-$assess1)/9;
        $query3 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'July', ".$actyear[0].")";
        mysqli_query($conn,$query3);
        $query4 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'August', ".$actyear[0].")";
        mysqli_query($conn,$query4);
        $query5 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'September', ".$actyear[0].")";
        mysqli_query($conn,$query5);
        $query6 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'October', ".$actyear[0].")";
        mysqli_query($conn,$query6);
        $query7 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'November', ".$actyear[0].")";
        mysqli_query($conn,$query7);
        $query8 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'December', ".$actyear[0].")";
        mysqli_query($conn,$query8);
        $query9 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'January', ".$actyear[0].")";
        mysqli_query($conn,$query9);
        $query10 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'February', ".$actyear[0].")";
        mysqli_query($conn,$query10);
        $query11 = "INSERT INTO assessment(amount, IDno, assessfor, yearid) VALUES (".$assess2.", ".$id.", 'March', ".$actyear[0].")";
        mysqli_query($conn,$query11);

    }
    echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created assessment." . "</span>";
 }
?>
