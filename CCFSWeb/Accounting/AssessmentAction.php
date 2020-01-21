<?php
    include('dbase.php');
     if(isset($_POST['create'])) {
        $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $actyear = mysqli_fetch_array($result);
        $query1[] = "SELECT IDno, tuition, balance FROM feestudent WHERE yearid = $actyear[0]";
        $result1[] = $conn->query($query1[0]) or die($conn->error.__LINE__);
        while($row = mysqli_fetch_array($result1[0])) {
            $down = $row["tuition"];
            $bals = $row["balance"];
            $id = $row["IDno"];
            $assess1 = ($down * .1);
            $query2 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess1.", ".$id.", 'downpayment')";
            mysqli_query($conn,$query2);

            $assess2 = ($bals-$assess1)/9;

            $query3 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'July')";
            mysqli_query($conn,$query3);
            $query4 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'August')";
            mysqli_query($conn,$query4);
            $query5 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'September')";
            mysqli_query($conn,$query5);
            $query6 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'October')";
            mysqli_query($conn,$query6);
            $query7 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'November')";
            mysqli_query($conn,$query7);
            $query8 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'December')";
            mysqli_query($conn,$query8);
            $query9 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'January')";
            mysqli_query($conn,$query9);
            $query10 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'February')";
            mysqli_query($conn,$query10);
            $query11 = "INSERT INTO assessment(amount, IDno, assessfor) VALUES (".$assess2.", ".$id.", 'March')";
            mysqli_query($conn,$query11);

        }
     }
  ?>
