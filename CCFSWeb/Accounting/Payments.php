<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCFS Student Information System</title>
  <link rel="icon" href="../Resources/dist/img/CCFS_logo.png" type="image/icon type">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../Resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../Resources/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Resources/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../Resources/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../Resources/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
  <!-- DataTables plugin -->
  <script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
  <link rel="stylesheet" href="../Resources/bootstrap-4.4.1/css/bootstrap.css">
</head>
<body>
        <div class="Balance">
        <div class="searchID">
          <form method="post" id="poll_form">
            <h3>Enter ID Number</h3>
            <div class="radio">
            <label><h4><input type="text" name="id" class="id" placeholder="Enter Id Number"/></h4></label>
            </div>
            <input type="submit" name="search" class="search" value="Search"/>
          </form>
          <br />
          <form method="post" id="payment_form">
                          <h3>Enter Payment</h3>
                          <div class="radio">
                          <label><h4><input type="text" name="pname" class="pname" placeholder="Enter Name"/></h4></label>
                          <label><h4><input type="text" name="pay" class="pay" placeholder="Enter Payment"/></h4></label>
                          </div>
                          <input type="submit" name="paid" class="paid" value="submit"/>
                         </form>
          <table>
              <?php
                include('dbase.php');
                //code for getting ID number and balance
                if(isset($_POST['search'])) {
                  $id = $_POST['id'];
                  $sy = "SELECT yearid FROM schoolyear WHERE scstatus = 'ACTIVE'";
                  //missing code for fetching active school year data
                  $idnum = "SELECT IDno, balance FROM feestudent WHERE IDno = '$id'";
                  $idno = "SELECT IDno from feestudent";
                  $query_run = mysqli_query($conn,$idnum);
                  while($row = mysqli_fetch_array($query_run)) {
                      echo '
                        <tr>
                          <th>ID Number </th>
                          <th>Remaining Balance </th>
                        </tr> <br />
                                    <tr>
                                    <td>'.$row["IDno"].'</td>
                                    <td>'.$row["balance"].'</td>
                                  </tr
                      ';
                  }
                  // code for inserting the data
                  //problems cannot insert and d ako sure dun sa pag kuha nung active school year and feeid
                  if(isset($_POST['submit'])) {
                    $pay = $_POST['pay'];
                    $name = $_POST['pname'];
                    $date = date('Y, M, d');
                    $sy = "SELECT yearid FROM schoolyear WHERE scstatus = 'ACTIVE'";
                    $resultsy = mysqli_query($conn,$sy);
                    $feeid = "SELECT feestID FROM feestudent WHERE IDno = '$id' ";
                    $resultfee = mysql_query($conn,$sy);
                    $sqlpay = "INSERT INTO payment(payname, payamount, paydate, feestID, yearid) VALUES ('$pay', '$name', '$date', '$resultsy','$resultfee')";
                    mysql_query($conn,$sqlpay);
                    //missing code for subtracting balance
                  }
                }
              ?>
          </table>
        </div>
    </div>


    <!-- jQuery -->
    <script src="../Resources/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../Resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../Resources/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../Resources/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../Resources/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../Resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../Resources/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../Resources/plugins/moment/moment.min.js"></script>
    <script src="../Resources/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../Resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../Resources/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../Resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Resources/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../Resources/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Resources/dist/js/demo.js"></script>
</body>
</html>
