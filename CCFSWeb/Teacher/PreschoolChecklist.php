<?php
// connect to mysql
include("Connection.php");
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
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Preschool Early Childhood Care and Development Checklist</h1>
            <h5 class="m-0 text-dark">School Year: <?php include("../ActiveSchoolYear.php")?></h5>
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
                  <form id="searchForm" class="form-inline">
                    <div class="input-group input-group-sm">
                      <input class="id form-control form-control-navbar" type="text" name="id" placeholder="Search ID number" aria-label="Search" required/>
                    </div>
                    <div class="input-group input-group-sm col-1">
                      <input class="form-control search btn btn-primary" type="submit" name="searcher" value="Search"/>
                    </div>
                    <!--
                    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div>-->
                  </form>
                  <div class="row">
                    <div class="col-4">
                      <h3 class="card-title">ID Number:</h3>
                    </div>
                    <div class="col-4">
                      <p name="studentIDno"></p>
                    </div>
                  </div>
                </div>
              </div><!-- /.card-header -->

              <div id="checkData" class="card-body">
                <table id="checklistTable" class="table table-bordered table-hover">
                  <thead style="text-align:center;">
                    <tr>
                      <th colspan="1"></th>
                      <th colspan="1"></th>
                      <th colspan="4">Periodic Rating</th>
                    </tr>
                    <tr>
                      <th style="display:none;">Check ID</th>
                      <th style="width:20%;">Domain</th>
                      <th style="width:60%;">Description</th>
                      <th style="width:5%;">1st</th>
                      <th style="width:5%;">2nd</th>
                      <th style="width:5%;">3rd</th>
                      <th style="width:5%;">4th</th>
                    </tr>
                  </thead>
                  <tbody> <!-- Populate from database. -->

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


<!-- Search student -->
<script type="text/javascript">
$(document).ready(function(){
  $('#searchForm').on("submit", function(event){
    event.preventDefault();
    var id = $('input[name=id]').val();
    var searcher = $('input[name=searcher]').val();
    $.ajax({
      type:"post",
      url:"PreschoolChecklistSearch.php",
      data:{id:id, searcher:searcher},
      success:function(data){
        $('[name=studentIDno]').html(id);
        $("#checkData").html(data);
        }
      });
    });
  });
</script>

<!-- Save checkbox option on click -->
<script>
$(document).ready(function(){
  function checkbox_select(id, value, column_name){
    var status = $(value).prop('checked');
    var action = '';
    if(status) {
      status = 1;
      action = 'checked';
    } else {
      status = 0;
      action = 'unchecked';
    }

    $.ajax({
      url: 'PreschoolChecklistAction.php',
      type: 'post',
      data: {id:id, value:status, column_name:column_name},
      cache: false,
      success: function(data){
        if(data.includes("Data updated")){
          $.toast({
            text: data + ': ' + action, // Text that is to be shown in the toast
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
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
            text: data, // Text that is to be shown in the toast
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
  }

  $(document).on("change", "input[name='chk1']", function(){
    var id = $(this).data("id1");
    checkbox_select(id, this, "firstrating");
  });
  $(document).on("change", "input[name='chk2']", function(){
    var id = $(this).data("id2");
    checkbox_select(id, this, "secondrating");
  });
  $(document).on("change", "input[name='chk3']", function(){
    var id = $(this).data("id3");
    checkbox_select(id, this, "thirdrating");
  });
  $(document).on("change", "input[name='chk4']", function(){
    var id = $(this).data("id4");
    checkbox_select(id, this, "fourthrating");
  });
});
</script>

<!-- jQuery -->
<script src="../Resources/plugins/jquery/jquery.min.js"></script>
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
<!-- JQuery Inline Table Editor Plugin -->
<script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
<script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>

</body>
</html>
