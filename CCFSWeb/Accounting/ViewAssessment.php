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
<body class="hold-transition sidebar-mini layout-fixed">
<div id="contents" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Assessment of Fees</h1>
          </div>
        </div><!-- /.col -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="input-group">
              <!-- Create assessment -->
              <div class="Balance">
                <div class="searchID">
                  <form id="poll_form">
                    <input type="submit" name="create" class="btn btn-info create" value="Create Assessment"/>
                  </form>
                </div>
              </div>
              <!-- Update assessment -->
              <div class="status">
                <div class="statusass">
                  <form method="post" id="statusupdate">
                    <input type="submit" name="update" class="btn btn-info update" value="Update Assessment"/>
                  </form>
                </div>
              </div>
            </div>
            <div>
              <b><p id="success" style="text-align:center; color:#0AC02A; font-size:22px;"></p></b>
            </div>

              <div class="card card-primary">
                <div class="card-header">
                  <div class="input-group input-group-sm">
                    <form id="K" class="form-inline"> <!-- SEARCH FORM -->
                      <div class="input-group">
                        <div class="input-group input-group-sm">
                          <input type="text" name="id" class="id form-control form-control-navbar" placeholder="Enter ID Number"/>
                        </div>
                        <div class="input-group">
                          <div class="input-group input-group-sm col-6">
                            <input type="submit" name="search" class="form-control search btn btn-light" value="Search"/>
                          </div>
                          <div class="input-group input-group-sm col-6">
                            <input type="submit" name="viewall" class="form-control viewall btn btn-light" value="View All"/>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.card-header -->
      			    <!-- Balance -->
                <div class="card-body">
                  <table id="assessmentTable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID Number </th>
      					        <th>Assessed For </th>
      					        <th>Amount </th>
      					        <th>Due Date <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#add_data_Modal">Set Due Dates</button> </th>
                        <th>Status </th>
                      </tr>
                    </thead>
            				<tbody id="viewAssessment"> <!-- Populate from database. -->
                    </tbody>
                  </table>
                </div><!-- /.card-body -->
              </div><!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div><!-- /.container-fluid -->
  </div><!-- ./wrapper -->

  <!-- Modal to set due dates -->
  <div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Set Due Dates</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php include("DueDate.php"); ?>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Submit search form.-->
<script type="text/javascript">
   $(document).ready(function(){
        $(document).on('click','input[name=search]',function(e){
          e.preventDefault();
            var id = $('input[name=id]').val();
            var search = $('input[name=search]').val();
             $.ajax({
                  type:"post",
                  url:"ViewAssessmentAction.php",
                  data:{search:search,id:id},
                  success:function(data){
                    console.log(data);
                    $('#viewAssessment').html(data);
                  }
             });
        });
        $(document).on('click','input[name=viewall]',function(e){
          e.preventDefault();
            var viewall = $('input[name=viewall]').val();
             $.ajax({
                  type:"post",
                  url:"ViewAssessmentAction.php",
                  data:{viewall:viewall},
                  success:function(data){
                    console.log(data);
                    $('#viewAssessment').html(data);
                  }
             });
        });
   });
</script>

<!-- Create Assessment -->
<script type="text/javascript">
$(document).ready(function(){
  $('#poll_form').on("submit", function(event){
    event.preventDefault();
    var create = $('input[name=create]').val();
    bootbox.confirm({
  		message: "Create assessment?",
  		buttons: {
  			confirm: {
          label: "Yes",
          className: "btn-success"
      },
      cancel: {
          label: "No",
          className: "btn-danger"
      }
  	},
  	callback: function(result){
  		if(result){
        $.ajax({
          type:"post",
          url:"AssessmentAction.php",
          data: {create:create},
          success:function(data){
            $("#success").html(data);
          }
        });
      }
    }
  });
  });
});
</script>

<!-- Update assessment -->
<script type="text/javascript">
$(document).ready(function(){
  $('#statusupdate').on("submit", function(event){
    event.preventDefault();
    var update = $('input[name=update]').val();
    bootbox.confirm({
  		message: "Update assessment?",
  		buttons: {
  			confirm: {
          label: "Yes",
          className: "btn-success"
      },
      cancel: {
          label: "No",
          className: "btn-danger"
      }
  	},
  	callback: function(result){
  		if(result){
        $.ajax({
          type:"post",
          url:"UpdatePaidAction.php",
          data: {update:update},
          success:function(data){
            $("#success").html(data);
          }
        });
      }
    }
  });
  });
});
</script>

<!-- Initialize DataTables plugin
<script type="text/javascript">
$("#assessmentTable").DataTable({
  "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
  "processing": true,
  "serverSide": true,
  "ajax": "ViewAssessmentAction.php",
  "destroy": true //for reinitialization
});
</script> -->

<!--===============================================================================================-->
  <script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--Bootbox library for dialog box.-->
  <script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/vendor/bootstrap/js/popper.js"></script>
  <script src="../Resources/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/vendor/daterangepicker/moment.min.js"></script>
  <script src="../Resources/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../Resources/js/main.js"></script>
    </body>
</html>
