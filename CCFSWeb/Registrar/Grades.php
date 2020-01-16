<?php
include("Connection.php");
include("../ActiveSchoolYear.php");

// mysql select query
$query = "SELECT * FROM `grades`";

// result for method
$result = mysqli_query($conn, $query);
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
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="contents" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Grades</h1>
            <h5 class="m-0 text-dark">School Year: <?php if(empty($data3[0])) {
              echo "--";
            }else {
              echo $data3[0];
            }
            ; echo "-" ; if(empty($data2[1])){echo "--";}else {echo $data2[1];}?></h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main content -->
       <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <form>
                    <div class="row">
                      <!-- SELECT GRADE LEVEL -->
                      <div class="form-group col-3">
                        <label>Grade Level</label>
                        <select id="grLvl" class="form-control" name="grLvl">
                          <option>Nursery</option>
                          <option>Pre-Kinder</option>
                          <option>Kinder</option>
                          <option>Grade 1</option>
                          <option>Grade 2</option>
                          <option>Grade 3</option>
                          <option>Grade 4</option>
                          <option>Grade 5</option>
                          <option>Grade 6</option>
                        </select>
                      </div>
                      <!-- SELECT SECTION -->
                      <div class="form-group col-3">
                        <label>Section</label>
                        <select id="section" class="form-control" name="section">
                          <option></option>
                        </select>
                      </div>
                      <!-- SELECT SUBJECT -->
                      <div class="form-group col-3">
                        <label>Subject</label>
                        <select id="subject" class="form-control" name="subject">
                          <option></option>
                        </select>
                      </div>
                      <!-- SUBMIT -->
                      <div class="form-group col-3">
                        <br><input class="btn btn-default" type="submit" name="submit" value="Go">
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="gradesTable" class="table table-bordered table-hover">
                    <thead style="text-align:center;">
                      <tr>
                        <th colspan="2">Student Information</th>
                        <th colspan="4">Periodic Rating</th>
                        <th colspan="2"></th>
                      </tr>
                      <tr>
                        <th style="display:none">Grade ID</th>
                        <th>ID Number</th>
                        <th>Name</th>
                        <th>1st</th>
                        <th>2nd</th>
                        <th>3rd</th>
                        <th>4th</th>
                        <th>Final Grade</th>
                        <th>Remarks</th>
                      </tr>
                    </thead>
                    <tbody> <!-- Populate from database. -->
                      <?php
                        while($row = mysqli_fetch_array($result)) {
                          echo '
                          <tr>
                          <td>'.$row["gradeid"].'</td>
                          <td>'.$row["IDno"].'</td>
                          <td>'.$row["firstquartergrade"].'</td>
                          <td>'.$row["secondquartergrade"].'</td>
                          <td>'.$row["thirdquartergrade"].'</td>
                          <td>'.$row["fourthquartergrade"].'</td>
                          <td>'.$row["finalgrade"].'</td>
                          <td>'.$row["remarks"].'</td>
                          </tr>
                          ';
                        }
                        ?>
                    </tbody>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </section>
      </div><!-- /.container-fluid -->
    </div>
  </div>
</div> <!-- ./wrapper -->

<!-- Initialize DataTables plugin -->
<script type="text/javascript">
$("#gradesTable").DataTable({
  "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
  "destroy": true //for reinitialization
});
</script>

<!--Tabledit plugin -->
<script>
$(document).ready(function(){
    $('#gradesTable').Tabledit({
     url:'GradesAction.php',
     deleteButton: false,
     hideIdentifier: true,
     buttons: {
        edit: {
            class: 'btn btn-info btn-xs edit_data',
            html: '<span data-toggle="tooltip" title="Edit"><i class="fas fa-edit" aria-hidden="true"></i></span>',
            action: 'edit'
        }
    },
     columns:{
       identifier:[1, "gradeid"], //gradeid or subjID?
       editable:[[3, 'firstquartergrade'], [4, 'secondquartergrade'], [5, 'thirdquartergrade'], [6, 'fourthquartergrade']]
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
<!-- DataTables plugin -->
<script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
<!-- JQuery Inline Table Editor Plugin -->
<script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
<script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>
</body>
</html>
