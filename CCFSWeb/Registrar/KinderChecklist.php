<?php
// php populate html table from mysql database

// connect to mysql
$connect = mysqli_connect("localhost", "root", "", "ccfs");

// mysql select query
$query = "SELECT * FROM `checklist`";

// result for method
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
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

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="contents" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Early Childhood Care and Development and Checklist</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div>
                  <!-- SEARCH FORM -->
                  <form class="form-inline">
                    <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"/>
                      <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div> <br>
                <div>
                  <h3 class="card-title">Student: [Name] | [Grade Lv.]</h3><br>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="checklistTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Check ID</th>
                      <th>Domain</th>
                      <th>Description</th>
                      <th>1st</th>
                      <th>2nd</th>
                      <th>3rd</th>
                      <th>4th</th>
                    </tr>
                  </thead>
                  <tbody> <!-- Populate from database. -->
                    <?php
                      while($row = mysqli_fetch_array($result)) {
                        echo '
                        <tr>
                        <td>'.$row["checkid"].'</td>
                        <td>'.$row["checkdesc"].'</td>
                        <td>'.$row["checkvalues"].'</td>
                        <td>'.$row["firstrating"].'</td>
                        <td>'.$row["secondrating"].'</td>
                        <td>'.$row["thirdrating"].'</td>
                        <td>'.$row["fourthrating"].'</td>
                        </tr>
                        ';
                      }
                      ?>
                  </tbody>
                </table>
              </div>
                <!-- /.card-body -->
            </div>
              <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
</div><!-- ./wrapper -->

<script>
$(document).ready(function(){
    $('#checklistTable').Tabledit({
     url:'ObservedValuesAction.php',
     deleteButton: false,
    // hideIdentifier: true,
     buttons: {
        edit: {
            class: 'btn btn-info btn-xs edit_data',
            html: '<span data-toggle="tooltip" title="Edit"><i class="fas fa-edit" aria-hidden="true"></i></span>',
            action: 'edit'
        }
    },
     columns:{
      identifier:[0, "checkid"],
      editable:[[3, 'firstrating'], [4, 'secondrating'], [5, 'thirdrating'], [6, 'fourthrating']]
     },
    });

});
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
<!-- JQuery Inline Table Editor Plugin -->
<script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
<script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>
</body>
</html>
