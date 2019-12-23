<?php
    include("Connection.php");
    $qearStud = "SELECT IDno,SurName,GivenName,MiddleName,gradelvl FROM `enstudent`";
    $result = $conn->query($qearStud);
?>
<!DOCTYPE html>

<!DOCTYPE html>

<?php
// php populate html table from mysql database

// connect to mysql
$connect = mysqli_connect("localhost", "root", "", "ccfs");

// mysql select query
$query = "SELECT `IDno`, `SurName`, `GivenName`, `MiddleName`, `gradelvl`, `gradelvl`, `GivenName` FROM `enstudent`";
// result for method
$result = mysqli_query($connect, $query);
?>

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
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div>

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List of Students</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Double click on a row to view/edit student information.</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Number </th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Grade Level</th>
                  <th>Section</th>
                  <th>Teacher</th>
                </tr>
                <tr>
                    <?php
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row['IDno']."</td>"
                                    . "<td>".$row['SurName']."</td>"
                                    . "<td>".$row['GivenName']."</td>"
                                    . "<td>".$row['MiddleName']."</td>"
                                    . "<td>".$row['gradelvl']."</td></tr>";
                        }
                  ?>
                </tr>
                </thead>
                <tbody> <!-- Populate from database. -->
                  <?php while($row1 = mysqli_fetch_array($result)):;?>
                    <tr>
                      <td><?php echo $row1[0];?></td>
                      <td><?php echo $row1[1];?></td>
                      <td><?php echo $row1[2];?></td>
                      <td><?php echo $row1[3];?></td>
                      <td><?php echo $row1[4];?></td>
                      <td><?php echo $row1[5];?></td>
                      <td><?php echo $row1[6];?></td>
                    </tr>
                  <?php endwhile;?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <div class="row">
          <!-- Left col -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">STUDENT INFORMATION</h4>
        </div>
        <div class="modal-body">
          <p>ID Number: <input type="text" class="input-sm" id="txtid"/></p>
          <p>Username: <input type="text" class="input-sm" id="txtusername"/></p>
          <p>Account Type: <input type="text" class="input-sm" id="txttype"/></p>
          <div class="container">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#changePasswdDiv">Change Password</button>
            <div id="changePasswdDiv" class="collapse">
              <form class="changepasswd" action="index.html" method="post">
                <label for="passwd">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name ="passwd" min = "0" required>
                <label for="passwd">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name ="confpasswd" min = "0" required>
                <input type="submit" class="btn btn-success"  name="save" value="Save New Password" min="0"/>
              </form>
            </div>
          </div>
          <br><br>
          <button type="button" class="btn btn-info">Activate/Deactivate Account</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
$('table tbody tr  td').on('dblclick',function(){
  $("#myModal").modal("show");
  $("#txtid").val($(this).closest('tr').children()[0].textContent);
  $("#txtusername").val($(this).closest('tr').children()[2].textContent);
  $("#txttype").val($(this).closest('tr').children()[3].textContent);
});

var password = document.getElementById("inputPassword")
  , confirm_password = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

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
