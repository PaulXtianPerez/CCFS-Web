<html>
    <body>
        <div class="due">
        <div class="duemonthh">
            <h3> Enter Duedate For: </h3>
            <select name="month" form="create_duedate">
              <option name="month" class="month" value="July">July</option>
              <option name="month" class="month" value="August">August</option>
              <option name="month" class="month" value="September">September</option>
              <option name="month" class="month" val ue="October">October</option>
              <option name="month" class="month" value="November">November</option>
              <option name="month" class="month" value="December">December</option>
              <option name="month" class="month" value="January">January</option>
              <option name="month" class="month" value="February">February</option>
              <option name="month" class="month" value="March">March</option>
            </select>
          <form method="post" id="create_duedate">
            Duedate: <input type="date" name="duedatee" class="duedatee">
            <br>
            <input type="submit" name="date" class="date" value="confirm"/>
          </form>
        </div>
        </div>


<?php
    include('dbase.php');
    if(isset($_POST["date"])) {
        $months = $_POST["month"];
        $duemonth = $_POST["duedatee"];
        $query1 = "SELECT * FROM assessment WHERE assessfor =  '$months' ";
        $result = $conn->query($query1) or die($conn->error.__LINE__);
        while($row = mysqli_fetch_array($result)) {
            $query2  = "UPDATE assessment SET duedate = '".$duemonth."' WHERE assessfor = '$months'";
            mysqli_query($conn,$query2);
          
            echo mysqli_error($conn);
            //burahin to pag na insert na ung date pang check ko lng to kungn tama query, tama nmn ung nakkuhang date pero ewan ko bkit ayaw mag
        }
    }
?>
    </body>
</html>
