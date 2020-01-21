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
<!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
  <!-- DataTables plugin -->
  <script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
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
                        <input id="searchInput" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"/>
                      </div>
                    </form>
                  </div>
                </form>
              </div> <br>
              <div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="studListTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>IDno</th>
                      <th>Given name</th>
                      <th>Middle name</th>
                      <th>Surname</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody> <!-- Populate from database. -->
                      <?php
                        while($row = mysqli_fetch_array($result)) {
                          echo "<tr><td>".$row['IDno']."</td>
                          <td>".$row['GivenName']."</td>
                          <td>".$row['MiddleName']."</td>
                          <td>".$row['SurName']."</td>
                          <td style='text-align: center;'><button type='button' class='btn btn-info btn-xs edit_data' id=".$row['IDno']." data-toggle='modal' data-target='#myModal'>Edit</button></tr>";
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
        </section>
      </div><!-- /.container-fluid -->
    </div>
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
          <table id="attTable" class="table-lg table-bordered table-hover" style="text-align:center">
            <tr>
              <th>Months</th>
              <th>Days Present</th>
              <th>Days Tardy</th>
              <th>Days Absent</th>
              <th>Total Class Days</th>
              <th></th>
            </tr>
            <tbody>
              <input type="text" size="3" id="studid" disabled>
              <tr><td>Jan</td><td><input type="number" size="3" name="dPres1"></td><td><input type="number" size="3" name="dTar1" ></td><td><input type="number" size="3" name="dAbs1"></td><td><input type="text" size="7" id="total1" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="1">Save</button></td></tr>
              <tr><td>Feb</td><td><input type="number" size="3" name="dPres2"></td><td><input type="number" size="3" name="dTar2" ></td><td><input type="number" size="3" name="dAbs2"></td><td><input type="text" size="7" id="total2" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="2">Save</button></td></tr>
              <tr><td>Mar</td><td><input type="number" size="3" name="dPres3"></td><td><input type="number" size="3" name="dTar3" ></td><td><input type="number" size="3" name="dAbs3"></td><td><input type="text" size="7" id="total3" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="3">Save</button></td></tr>
              <tr><td>Apr</td><td><input type="number" size="3" name="dPres4"></td><td><input type="number" size="3" name="dTar4" ></td><td><input type="number" size="3" name="dAbs4"></td><td><input type="text" size="7" id="total4" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="4">Save</button></td></tr>
              <tr><td>May</td><td><input type="number" size="3" name="dPres5"></td><td><input type="number" size="3" name="dTar5" ></td><td><input type="number" size="3" name="dAbs5"></td><td><input type="text" size="7" id="total5" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="5">Save</button></td></tr>
              <tr><td>Jun</td><td><input type="number" size="3" name="dPres6"></td><td><input type="number" size="3" name="dTar6" ></td><td><input type="number" size="3" name="dAbs6"></td><td><input type="text" size="7" id="total6" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="6">Save</button></td></tr>
              <tr><td>Jul</td><td><input type="number" size="3" name="dPres7"></td><td><input type="number" size="3" name="dTar7" ></td><td><input type="number" size="3" name="dAbs7"></td><td><input type="text" size="7" id="total7" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="7">Save</button></td></tr>
              <tr><td>Aug</td><td><input type="number" size="3" name="dPres8"></td><td><input type="number" size="3" name="dTar8" ></td><td><input type="number" size="3" name="dAbs8"></td><td><input type="text" size="7" id="total8" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="8">Save</button></td></tr>
              <tr><td>Sep</td><td><input type="number" size="3" name="dPres9"></td><td><input type="number" size="3" name="dTar9" ></td><td><input type="number" size="3" name="dAbs9"></td><td><input type="text" size="7" id="total9" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="9">Save</button></td></tr>
              <tr><td>Oct</td><td><input type="number" size="3" name="dPres10"></td><td><input type="number" size="3" name="dTar10" ></td><td><input type="number" size="3" name="dAbs10"></td><td><input type="text" size="7" id="total10" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="10">Save</button></td></tr>
              <tr><td>Nov</td><td><input type="number" size="3" name="dPres11"></td><td><input type="number" size="3" name="dTar11" ></td><td><input type="number" size="3" name="dAbs11"></td><td><input type="text" size="7" id="total11" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="11">Save</button></td></tr>
              <tr><td>Dec</td><td><input type="number" size="3" name="dPres12"></td><td><input type="number" size="3" name="dTar12" ></td><td><input type="number" size="3" name="dAbs12"></td><td><input type="text" size="7" id="total12" disabled></td><td><button type="submit" class="btn btn-info btn-xs ed" id="12">Save</button></td></tr>
              <tr><td></td><td></td><td></td><td>Total Days</td><td><input type="text" id="tl" size="3" disabled></td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','.edit_data',function(){
    var student_id = $(this).attr("id");
    $('#studid').val(student_id);
    $.ajax({
      url:"AttendanceAction.php",
      method:"POST",
      data:{student_id:student_id},
      dataType:"json",
      success:function(data){
        //
        $('#total1').val(parseInt(data[0].daysPres)+parseInt(data[0].daysAbs));
        $('#total2').val(parseInt(data[1].daysPres)+parseInt(data[1].daysAbs));
        $('#total3').val(parseInt(data[2].daysPres)+parseInt(data[2].daysAbs));
        $('#total4').val(parseInt(data[3].daysPres)+parseInt(data[3].daysAbs));
        $('#total5').val(parseInt(data[4].daysPres)+parseInt(data[4].daysAbs));
        $('#total6').val(parseInt(data[5].daysPres)+parseInt(data[5].daysAbs));
        $('#total7').val(parseInt(data[6].daysPres)+parseInt(data[6].daysAbs));
        $('#total8').val(parseInt(data[7].daysPres)+parseInt(data[7].daysAbs));
        $('#total9').val(parseInt(data[8].daysPres)+parseInt(data[8].daysAbs));
        $('#total10').val(parseInt(data[9].daysPres)+parseInt(data[9].daysAbs));
        $('#total11').val(parseInt(data[10].daysPres)+parseInt(data[10].daysAbs));
        $('#total12').val(parseInt(data[11].daysPres)+parseInt(data[11].daysAbs));
        //
        $("input[name=dPres1]").val(data[0].daysPres);
        $("input[name=dPres2]").val(data[1].daysPres);
        $("input[name=dPres3]").val(data[2].daysPres);
        $("input[name=dPres4]").val(data[3].daysPres);
        $("input[name=dPres5]").val(data[4].daysPres);
        $("input[name=dPres6]").val(data[5].daysPres);
        $("input[name=dPres7]").val(data[6].daysPres);
        $("input[name=dPres8]").val(data[7].daysPres);
        $("input[name=dPres9]").val(data[8].daysPres);
        $("input[name=dPres10]").val(data[9].daysPres);
        $("input[name=dPres11]").val(data[10].daysPres);
        $("input[name=dPres12]").val(data[11].daysPres);
        //
        $("input[name=dTar1]").val(data[0].daysTar);
        $("input[name=dTar2]").val(data[1].daysTar);
        $("input[name=dTar3]").val(data[2].daysTar);
        $("input[name=dTar4]").val(data[3].daysTar);
        $("input[name=dTar5]").val(data[4].daysTar);
        $("input[name=dTar6]").val(data[5].daysTar);
        $("input[name=dTar7]").val(data[6].daysTar);
        $("input[name=dTar8]").val(data[7].daysTar);
        $("input[name=dTar9]").val(data[8].daysTar);
        $("input[name=dTar10]").val(data[9].daysTar);
        $("input[name=dTar11]").val(data[10].daysTar);
        $("input[name=dTar12]").val(data[11].daysTar);
        //
        $("input[name=dAbs1]").val(data[0].daysAbs);
        $("input[name=dAbs2]").val(data[1].daysAbs);
        $("input[name=dAbs3]").val(data[2].daysAbs);
        $("input[name=dAbs4]").val(data[3].daysAbs);
        $("input[name=dAbs5]").val(data[4].daysAbs);
        $("input[name=dAbs6]").val(data[5].daysAbs);
        $("input[name=dAbs7]").val(data[6].daysAbs);
        $("input[name=dAbs8]").val(data[7].daysAbs);
        $("input[name=dAbs9]").val(data[8].daysAbs);
        $("input[name=dAbs10]").val(data[9].daysAbs);
        $("input[name=dAbs11]").val(data[10].daysAbs);
        $("input[name=dAbs12]").val(data[11].daysAbs);
        //
        if(!isNaN(parseInt($('#total1').val())+parseInt($('#total2').val())+parseInt($('#total3').val())+parseInt($('#total4').val())+parseInt($('#total5').val())+parseInt($('#total6').val())+parseInt($('#total7').val())+parseInt($('#total8').val())+parseInt($('#total9').val())+parseInt($('#total10').val())+parseInt($('#total11').val())+parseInt($('#total12').val()))) {
          $("#tl").val(parseInt($('#total1').val())+parseInt($('#total2').val())+parseInt($('#total3').val())+parseInt($('#total4').val())+parseInt($('#total5').val())+parseInt($('#total6').val())+parseInt($('#total7').val())+parseInt($('#total8').val())+parseInt($('#total9').val())+parseInt($('#total10').val())+parseInt($('#total11').val())+parseInt($('#total12').val()));
        }
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
    //
    //
    $('#total1').val(parseInt($("input[name=dPres1]").val())+parseInt($("input[name=dAbs1]").val()));
    $('#total2').val(parseInt($("input[name=dPres2]").val())+parseInt($("input[name=dAbs2]").val()));
    $('#total3').val(parseInt($("input[name=dPres3]").val())+parseInt($("input[name=dAbs3]").val()));
    $('#total4').val(parseInt($("input[name=dPres4]").val())+parseInt($("input[name=dAbs4]").val()));
    $('#total5').val(parseInt($("input[name=dPres5]").val())+parseInt($("input[name=dAbs5]").val()));
    $('#total6').val(parseInt($("input[name=dPres6]").val())+parseInt($("input[name=dAbs6]").val()));
    $('#total7').val(parseInt($("input[name=dPres7]").val())+parseInt($("input[name=dAbs7]").val()));
    $('#total8').val(parseInt($("input[name=dPres8]").val())+parseInt($("input[name=dAbs8]").val()));
    $('#total9').val(parseInt($("input[name=dPres9]").val())+parseInt($("input[name=dAbs9]").val()));
    $('#total10').val(parseInt($("input[name=dPres10]").val())+parseInt($("input[name=dAbs10]").val()));
    $('#total11').val(parseInt($("input[name=dPres11]").val())+parseInt($("input[name=dAbs11]").val()));
    $('#total12').val(parseInt($("input[name=dPres12]").val())+parseInt($("input[name=dAbs12]").val()));
    if(!isNaN(parseInt($('#total1').val())+parseInt($('#total2').val())+parseInt($('#total3').val())+parseInt($('#total4').val())+parseInt($('#total5').val())+parseInt($('#total6').val())+parseInt($('#total7').val())+parseInt($('#total8').val())+parseInt($('#total9').val())+parseInt($('#total10').val())+parseInt($('#total11').val())+parseInt($('#total12').val()))) {
          $("#tl").val(parseInt($('#total1').val())+parseInt($('#total2').val())+parseInt($('#total3').val())+parseInt($('#total4').val())+parseInt($('#total5').val())+parseInt($('#total6').val())+parseInt($('#total7').val())+parseInt($('#total8').val())+parseInt($('#total9').val())+parseInt($('#total10').val())+parseInt($('#total11').val())+parseInt($('#total12').val()));
        }
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

<!-- Initialize DataTables plugin -->
<script type="text/javascript">
var table = $("#studListTable").DataTable();
$("#searchInput").on("keyup", function() {
  table.search(this.value).draw(); //search/filter functionality using DataTables search API
});
table.destroy(); //for reinitialization

$("#studListTable").DataTable({
  "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
  "bFilter": false, //remove default search/filter
  "destroy": true //for reinitialization
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

</body>
</html>
