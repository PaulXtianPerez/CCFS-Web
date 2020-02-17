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
            <h1 class="m-0 text-dark">Learner's Observed Values for Grade School</h1>
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
                  </form>
                </div>
                <div>
                  <h3 class="card-title">ID: <p name="studentIDno"></p></h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div>
                <button type="button" name="obsval" id="obsval" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info view_data" style="float:right; margin-top:5px; margin-right:20px;">Edit Core Values and Descriptions</button>
              </div>
              <b><p id="success" style="text-align:center; font-size:15px;"></p></b>
              <div id="obsValData" class="card-body">
                <table id="obsValTable" class="table table-bordered table-hover">
                  <thead style="text-align:center;">
                    <tr>
                      <th colspan="1"></th>
                      <th colspan="1"></th>
                      <th colspan="4">Periodic Rating</th>
                    </tr>
                    <tr>
                      <th style="display:none;">Check ID</th>
                      <th style="width:20%;">Core Values</th>
                      <th style="width:40%;">Behavioral Statements / Description</th>
                      <th style="width:10%;">1st</th>
                      <th style="width:10%;">2nd</th>
                      <th style="width:10%;">3rd</th>
                      <th style="width:10%;">4th</th>
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

<!-- Modal for editing observed values. -->
<div id="add_data_Modal" class="modal fade" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Core Values and Descriptions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div>
          <form id="insert_form" method="post">
            <div>
              <div class="row form-group col-6">
                <label>Core Value</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="domain" name="domain" list="domains" maxlength="50" required/>
                    <?php $query1 = "SELECT corevalues FROM `checklist` WHERE (checkdesc IS NULL AND competencydesc IS NULL) GROUP BY corevalues";
                    $result = $conn->query($query1) or die($conn->error.__LINE__);
                    ?>
                  <datalist id="domains">
                    <?php while ($row1 = mysqli_fetch_array($result)):;?>
                    <option name = "competencyvalues"><?php echo $row1[0];?></option>
                    <?php endwhile;?>
                  </datalist>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-11">
                  <label>Description <i>(max 250 characters)</i></label>
                  <div class="input-group mb-3">
                    <textarea class="form-control" id="description" name="description" rows="3" maxlength="250" required></textarea>
                  </div>
                </div>
                <div class="col-1">
                  <input type="submit" name="submit" value="Add" min="0" class="btn btn-success"/>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div id="checklistData">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Search student-->
<script type="text/javascript">
$(document).ready(function(){
  $('#searchForm').on("submit", function(event){
    event.preventDefault();
    var id = $('input[name=id]').val();
    var searcher = $('input[name=searcher]').val();
    $.ajax({
      type:"post",
      url:"ObservedValuesSearch.php",
      data:{id:id, searcher:searcher},
      success:function(data){
        $('[name=studentIDno]').html(id);
        $("#obsValData").html(data);
        }
      });
    });
  });
</script>

<!-- View/add/edit domains and descriptions through modal. -->
<script>
$(document).ready(function(){
  $('.view_data').click(function(){
    $.ajax({
      url:"ObservedValuesUpdate.php",
      success:function(response){
        $('#checklistData').html(response);
        $('#dataModal').modal("show");
        }
      });
    });
  //Submit form
  $('#insert_form').on("submit", function(event){
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "ObservedValuesUpdate.php",
      data: $("#insert_form").serialize(),
      success: function(response){
        if(response.includes("Successfully added.")){
          $('#description').val("");
          $('#checklistData').html(response);
          $("#add_data_Modal").on("hidden.bs.modal", function () {
            location.reload();
          });
        }
      }
    });
  });
});
</script>

<!-- Inline/live edit ratings
<script>
$(document).ready(function(){
  function edit_data(id, text, column_name){
    $.ajax({
      url:"ChecklistsRatings.php",
      method:"POST",
      data:{id:id, text:text, column_name:column_name},
      dataType:"text",
      success:function(data){
        $("#success").html(data);
      }
    });
  }
  $(document).on('keyup', '.first', function(){
    var id = $(this).data("id1");
    var firstrating = $(this).text();
    edit_data(id, firstrating, "firstrating");
  });
  $(document).on('keyup', '.second', function(){
    var id = $(this).data("id2");
    var secondrating = $(this).text();
    edit_data(id, secondrating, "secondrating");
  });
  $(document).on('keyup', '.third', function(){
    var id = $(this).data("id3");
    var thirdrating = $(this).text();
    edit_data(id, thirdrating, "thirdrating");
  });
  $(document).on('keyup', '.fourth', function(){
    var id = $(this).data("id4");
    var fourthrating = $(this).text();
    edit_data(id, fourthrating, "fourthrating");
  });
});
 </script>-->

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
