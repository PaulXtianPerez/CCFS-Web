<?php
// php populate html table from mysql database
// connect to mysql
include('AttendanceAction.php');
$connect = mysqli_connect("localhost", "root", "", "ccfs");

// mysql select query
$query = "SELECT curstudent.IDno,GivenName,MiddleName,SurName FROM `curstudent` JOIN `enstudent` ON enstudent.IDno = curstudent.IDno";

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
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Attendance</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <div>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                  <div class="input-group input-group-sm">
                    <input id='search' class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"/>
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
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>IDno</th>
                  <th>Given name</th>
                  <th>Middle name</th>
                  <th>Surname</th>
                </tr>
                </thead>
                <tbody> <!-- Populate from database. -->
                  <?php
                    while($row = mysqli_fetch_array($result)) {
                      echo "<tr><td>".$row['IDno']."</td>
                      <td>".$row['GivenName']."</td>
                      <td>".$row['MiddleName']."</td>
                      <td>".$row['SurName']."</td>
                      <td><button type='button' class='btn btn-info btn-xs edit_data' id=".$row['IDno']." data-toggle='modal' data-target='#myModal'>Edit</button></tr>";
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
  </div>
</div> <!-- ./wrapper -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title" id="modHead"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table id="attTable" class="table-sm table-bordered table-hover">
            <tr>
              <th>Months</th>
              <th>Days Present</th>
              <th>Days Tardy</th>
              <th>Days Absent</th>
              <th>Total</th>
              <th></th>
            </tr>
            <tbody>
              <input type="text" id="studid" disabled>
              <tr><td>Jan</td><td><input type="number" name="dPres1"></td><td><input type="number" name="dTar1" ></td><td><input type="number" name="dAbs1"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="1">Save</button></td></tr>
              <tr><td>Feb</td><td><input type="number" name="dPres2"></td><td><input type="number" name="dTar2" ></td><td><input type="number" name="dAbs2"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="2">Save</button></td></tr>
              <tr><td>Mar</td><td><input type="number" name="dPres3"></td><td><input type="number" name="dTar3" ></td><td><input type="number" name="dAbs3"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="3">Save</button></td></tr>
              <tr><td>Apr</td><td><input type="number" name="dPres4"></td><td><input type="number" name="dTar4" ></td><td><input type="number" name="dAbs4"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="4">Save</button></td></tr>
              <tr><td>May</td><td><input type="number" name="dPres5"></td><td><input type="number" name="dTar5" ></td><td><input type="number" name="dAbs5"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="5">Save</button></td></tr>
              <tr><td>Jun</td><td><input type="number" name="dPres6"></td><td><input type="number" name="dTar6" ></td><td><input type="number" name="dAbs6"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="6">Save</button></td></tr>
              <tr><td>Jul</td><td><input type="number" name="dPres7"></td><td><input type="number" name="dTar7" ></td><td><input type="number" name="dAbs7"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="7">Save</button></td></tr>
              <tr><td>Aug</td><td><input type="number" name="dPres8"></td><td><input type="number" name="dTar8" ></td><td><input type="number" name="dAbs8"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="8">Save</button></td></tr>
              <tr><td>Sep</td><td><input type="number" name="dPres9"></td><td><input type="number" name="dTar9" ></td><td><input type="number" name="dAbs9"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="9">Save</button></td></tr>
              <tr><td>Oct</td><td><input type="number" name="dPres10"></td><td><input type="number" name="dTar10" ></td><td><input type="number" name="dAbs10"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="10">Save</button></td></tr>
              <tr><td>Nov</td><td><input type="number" name="dPres11"></td><td><input type="number" name="dTar11" ></td><td><input type="number" name="dAbs11"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="11">Save</button></td></tr>
              <tr><td>Dec</td><td><input type="number" name="dPres12"></td><td><input type="number" name="dTar12" ></td><td><input type="number" name="dAbs12"></td><td></td><td><button type="submit" class="btn btn-info btn-xs ed" id="12">Save</button></td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','.edit_data',function(){
    var student_id = $(this).attr("id");
    $.ajax({
      url:"AttendanceAction.php",
      method:"POST",
      data:{student_id:student_id},
      dataType:"json",
      success:function(data){
        $('#studid').val(data);
      }
    });
  });
  $(document).on('click','.ed',function() {
    var month = $(this).attr("id");
    var id = $('#studid').val();
    var daysPres1 = $("input[name=dPres1]").val();
    var daysPres2 = $("input[name=dPres2]").val();
    var daysPres3 = $("input[name=dPres3]").val();
    var daysPres4 = $("input[name=dPres4]").val();
    var daysPres5 = $("input[name=dPres5]").val();
    var daysPres6 = $("input[name=dPres6]").val();
    var daysPres7 = $("input[name=dPres7]").val();
    var daysPres8 = $("input[name=dPres8]").val();
    var daysPres9 = $("input[name=dPres9]").val();
    var daysPres10 = $("input[name=dPres10]").val();
    var daysPres11 = $("input[name=dPres11]").val();
    var daysPres12 = $("input[name=dPres12]").val();
    // dtar
    var daysTar1 = $("input[name=dTar1]").val();
    var daysTar2 = $("input[name=dTar2]").val();
    var daysTar3 = $("input[name=dTar3]").val();
    var daysTar4 = $("input[name=dTar4]").val();
    var daysTar5 = $("input[name=dTar5]").val();
    var daysTar6 = $("input[name=dTar6]").val();
    var daysTar7 = $("input[name=dTar7]").val();
    var daysTar8 = $("input[name=dTar8]").val();
    var daysTar9 = $("input[name=dTar9]").val();
    var daysTar10 = $("input[name=dTar10]").val();
    var daysTar11 = $("input[name=dTar11]").val();
    var daysTar12 = $("input[name=dTar12]").val();
    //dAbs
    var daysAbs1 = $("input[name=dAbs1]").val();
    var daysAbs2 = $("input[name=dAbs2]").val();
    var daysAbs3 = $("input[name=dAbs3]").val();
    var daysAbs4 = $("input[name=dAbs4]").val();
    var daysAbs5 = $("input[name=dAbs5]").val();
    var daysAbs6 = $("input[name=dAbs6]").val();
    var daysAbs7 = $("input[name=dAbs7]").val();
    var daysAbs8 = $("input[name=dAbs8]").val();
    var daysAbs9 = $("input[name=dAbs9]").val();
    var daysAbs10 = $("input[name=dAbs10]").val();
    var daysAbs11 = $("input[name=dAbs11]").val();
    var daysAbs12 = $("input[name=dAbs12]").val();
    $.ajax({
      url:"AttendanceAction.php",
      method:"POST",
      data:{month:month,id:id,daysPres1:daysPres1,daysPres2:daysPres2,daysPres3:daysPres3,
        daysPres4:daysPres4,daysPres5:daysPres5,daysPres6:daysPres6,daysPres7:daysPres7,
        daysPres8:daysPres8,daysPres9:daysPres9,daysPres10:daysPres10,daysPres11:daysPres11,
        daysPres12:daysPres12,daysTar1:daysTar1,daysTar2:daysTar2,daysTar3:daysTar3,
        daysTar4:daysTar4,daysTar5:daysTar5,daysTar6:daysTar6,daysTar7:daysTar7,
        daysTar8:daysTar8,daysTar9:daysTar9,daysTar10:daysTar10,daysTar11:daysTar11,
        daysTar12:daysTar12,daysAbs1:daysAbs1,daysAbs2:daysAbs2,daysAbs3:daysAbs3,
        daysAbs4:daysAbs4,daysAbs5:daysAbs5,daysAbs6:daysAbs6,daysAbs7:daysAbs7,
        daysAbs8:daysAbs8,daysAbs9:daysAbs9,daysAbs10:daysAbs10,daysAbs11:daysAbs11,
        daysAbs12:daysAbs12},
      dataType:"json"
    });
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
