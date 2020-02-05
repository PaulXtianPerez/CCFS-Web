<?php
    include('dbase.php');
     if(isset($_POST['surcharge'])) {
        $id = $_POST['idn'];
        $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $actyear = mysqli_fetch_array($result);
        $query1 = "SELECT * FROM feestudent WHERE IDno = '".$id."' AND yearid = $actyear[0]";
        $result1 = $conn->query($query1) or die($conn->error.__LINE__);
        $query4 = "SELECT * FROM feestudent WHERE IDno = '".$id."' AND yearid = $actyear[0]";
        $result4 = $conn->query($query4) or die($conn->error.__LINE__);
        while($row = mysqli_fetch_array($result4)) {
        //variables
        $bals = $row["balance"];
        $tuition = $row["tuition"];
        $books = $row["books"];
        $misc = $row["misc"];
        $surcharge = $row["surcharge"];
        $service = $row["service"];
        $downpayment = ($tuition * .1);
        $total = ($tuition + $books + $misc);
        //computation for surcharge
        $suramount = (($total-$downpayment)/9) * .1;
        $suramount1 = $surcharge + $suramount;
        $surbal = $bals + $suramount;
        //queries
        if($row['surcharge' == 0]) {
        $query2  = "UPDATE feestudent SET surcharge = '".$suramount."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
        $query3  = "UPDATE feestudent SET balance = '".$surbal."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
        }
        if($row['surcharge' > 0]) {
        $query2  = "UPDATE feestudent SET surcharge = '".$suramount1."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
        $query3  = "UPDATE feestudent SET balance = '".$surbal."' WHERE IDno = '".$id."' AND yearid = '".$actyear[0]."' ";
        }
        mysqli_query($conn,$query2);
        mysqli_query($conn,$query3);
        }

        $select_query = "SELECT * FROM feestudent";
        $result = mysqli_query($conn, $select_query);

        //echo '<i class="fas fa-check-circle"></i>' . " Surcharge added.";
        while($row = mysqli_fetch_array($result)) {
            echo "
                    <tbody>
                      <tr>
                        <td>".$row['IDno']."</td>
                        <td>".$row['books']."</td>
                        <td>".$row['misc']."</td>
                        <td>".$row['tuition']."</td>
                        <td>".$row['service']."</td>
                        <td>".$row['balance']."</td>
                        <td>".$row['surcharge']."</td>
                      </tr>
                    </tbody>";
        }
     }
  ?>
