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
            <h1 class="m-0 text-dark">Student Fees</h1>
            <span id="successmsg"></span>
          </div>
        </div><!-- /.col -->
      </div><!-- /.container-fluid -->
		</div>
	</div>

  <!-- Main content -->
  <section class="content">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <div class="input-group input-group-sm">
            <form method="post" id="search_id">
              <div class="radio">
                <label><h4><input type="text" name="id" class="id form-control form-control-navbar" placeholder="Enter ID Number"/></h4></label>
              </div>
              <input type="submit" name="search" class="search btn btn-default" value="Search" onclick="formSubmit();"/>
              <input type="submit" name="viewall" class="viewall btn btn-default" value="View All"/>
            </form>
            </div>
          </div><!-- /.card-header -->
          <!-- SEARCH FORM -->
			    <!-- Balance -->
          <div class="card-body">
            <table id="schyrTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Number </th>
					        <th>Assessed For </th>
					        <th>Amount </th>
					        <th>Due Date </th>
                </tr>
              </thead>
      				<tbody id="viewAssessment"> <!-- Populate from database. -->
                
              </tbody>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </section>
    </div> <!-- ./wrapper -->

<!--Submit form.-->
<script type="text/javascript">
function formSubmit(){
   $(document).ready(function(){
        $('.search').click(function(){
             var curr_name = $(this).attr("id");
             $.ajax({
                  url:"ViewAssessmentAction.php",
                  method:"post",
                  data:{curr_name:curr_name},
                  success:function(data){
                       $('#viewAssessment').html(data);
                  }
             });
        });
   });
   return false;
}
</script>

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
