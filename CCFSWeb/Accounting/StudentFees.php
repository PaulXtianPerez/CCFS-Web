<?php
// connect to database
include("dbase.php");
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
  <link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
  <!-- jQuery -->
  <script src="../Resources/plugins/jquery/jquery.min.js"></script>
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
  <!-- DataTables plugin -->
  <script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/jquery.toast/jquery.toast.min.css"/>
  <link rel="stylesheet" href="../Resources/bootstrap-4.4.1/css/bootstrap.css">
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
            <h1 class="m-0 text-dark">Student Fees</h1>
            <span id="successmsg"></span>
          </div> <!-- /.col -->
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="Surchargee">
              <div class="searchID">
                <form method="post" id="surch" class="form-inline">
                  <div class="input-group input-group-sm">
                    <input type="text" name="idn" class="idn form-control form-control-navbar" placeholder="Enter ID Number" style="margin-right: 15px;" required/>
                  </div>
                  <div class="input-group input-group-sm">
                    <input type="submit" name="surcharge" class="form-control btn btn-info surcharge" value="Add Surcharge"/>
                  </div>
                </form>
              </div>
            </div>
            <br>

            <div class="card card-primary">
              <div class="card-header">
                <div> <!-- SEARCH FORM -->
                  <form class="form-inline">
                    <div class="input-group input-group-sm">
                      <input type="text" name="id" id="searchInput" class="id form-control form-control-navbar" placeholder="Search"/>
                    </div>
                  </form>
                </div> <!-- /.SEARCH FORM -->
              </div> <!-- /.card-header -->
              <div class="card-body">
                <table id="feesTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID Number</th>
      					      <th>Books Fee</th>
      					      <th>Misc Fee</th>
      					      <th>Tuition Fee</th>
      					      <th>Service Fee</th>
      					      <th>Remaining Balance</th>
                      <th>Surcharge</th>
                    </tr>
                  </thead>
                </table>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div><!-- /.row -->
</div><!-- ./wrapper -->


<!-- Initialize DataTables plugin -->
<script type="text/javascript" language="javascript">
$(document).ready(function(){
  var dataTable = $('#feesTable').DataTable({
    "processing": true,
    "serverSide": true,
    "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
    //"bFilter": false, //remove default search/filter
    "ajax":{
      url: "StudentFeesTableData.php", // json datasource
      type: "post",  // method  , by default get
      error: function(){  // error handling
        $(".table-grid-error").html("");
        $("#feesTable").append('<tbody class="table-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
        $("#feesTable_processing").css("display","none");
        }
      }
  });
});
</script>

<!--Surcharge -->
<script type="text/javascript">
$(document).ready(function(){
  $('#surch').on("submit", function(event){
    event.preventDefault();
    var idn = $('input[name=idn]').val();
    var surcharge = $('input[name=surcharge]').val();
    $.ajax({
      type:"post",
      url:"SurchargeAction.php",
      data:{idn:idn, surcharge:surcharge},
      success:function(response){
        if(response.includes("Surcharge added.")) {
          $('#feesTable').DataTable().ajax.reload();
          $.toast({
            text: response, // Text that is to be shown in the toast
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            bgColor: '#00753a',  // Background color of the toast
            textColor: '#ffffff',  // Text color of the toast
            textAlign: 'center',  // Text alignment i.e. left, right or center
            loader: true,  // Whether to show loader or not. True by default
            loaderBg: '#9EC600',  // Background color of the toast loader
          });
        } else {
          $.toast({
            text: response, // Text that is to be shown in the toast
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: false, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            bgColor: '#FF0004',  // Background color of the toast
            textColor: '#ffffff',  // Text color of the toast
            textAlign: 'center',  // Text alignment i.e. left, right or center
            loader: false,  // Whether to show loader or not. True by default
          });
        }
      }
    });
  });
});
</script>


<!-- jQuery UI 1.11.4 -->
<script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jquery toast -->
<script src="../Resources/plugins/jquery.toast/jquery.toast.min.js" type="text/javascript"></script>
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

  </body>
</html>
