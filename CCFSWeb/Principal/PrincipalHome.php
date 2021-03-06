<?php
 include('../server.php');
 include('Connection.php');

 if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']){
   if($_SESSION['TYPE']=='REGISTRAR'){
     header('location: ../Registrar/RegistrarHome.php');
   }elseif($_SESSION['TYPE']=='ACCOUNTING'){
     header('location: ../Accounting/AccountingHome.php');
   }elseif($_SESSION['TYPE']=='TEACHER'){
     header('location: ../Teacher/TeacherHome.php');
   }
 } else {
   header('location: ../index.php');
 }

 $lastID = 'SELECT IDno FROM enstudent ORDER BY IDno DESC LIMIT 1';
 $result = $conn->query($lastID);
 $data = array();
 while($row = $result->fetch_assoc()) {
     $data[0] = $row['IDno']+1;
 }

 $lastyear = 'SELECT yearId FROM schoolyear ORDER BY yearId DESC LIMIT 1';
 $result1 = $conn->query($lastyear);
 $data1 = array();
 while($row = $result1->fetch_assoc()) {
     $data1[0] = $row['yearId'];
 }
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
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="PrincipalHome.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <h5>School Year: <?php include("../ActiveSchoolYear.php") ?></h5>
    </ul>
  <!--  <h3>Cypress Christian Foundation School</h3> -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-gradient-green elevation-4">
    <!-- Brand Logo -->
    <a href="PrincipalHome.php" class="brand-link">
      <img src="../Resources/dist/img/CCFS_logo.png" alt="CCFS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CCFS - Principal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Resources/dist/img/users.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block agray" style="font-size: 20px" tabindex="-1"><?php echo $_SESSION['USERNAME']; ?></a>
              <?php  if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true ) : ?>
           <i class="fa fa-cogs" aria-hidden="true" style="color: white"></i><a style="font-size: 15px" tabindex="-1" href="../logout.php"> Log Out<?php endif ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="menus">
          <li class="nav-item">
            <a href="PrincipalHome.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>Homepage</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#CreateSchoolYear" id="crSchYr" class="nav-link">
              <i class="nav-icon fas fa-calendar-plus"></i>
              <p>Create School Year</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#ListOfSchoolYears" id="schYrsList" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>List of School Years</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#Sections" id="sectionsList" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Class Sections</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#CreateCurriculum" id="crCurr" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Create Curriculum</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#ListOfCurriculums" id="curriculumsList" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>List of Curriculums</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <form action="../Enrollment/EnrollmentNew.php" method="post">
            <input type="hidden" name="varname" value="A">
              <button type="submit" id="newEnroll" href="'../Enrollment/EnrollmentNew.php'">
                <a class="nav-link">
                  <i class="nav-icon fas fa-id-badge"></i>
                  <p>Enroll Student</p>
                </a>
              </button>
            </form>
          </li>
          <li class="nav-item has-treeview">
            <a href="#DiscountSponsor" id="discSpons" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>Discounts & Sponsorships</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#Accounts" id="accList" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>User Accounts</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="contents">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Welcome!</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Welcome Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cypress Chrisitan Foundation School</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                  <img src="../Resources/dist/img/CCFSLOGO2.png" alt="CCFS Logo" class="pull-left mr-2 float-left" style="max-width: 320px">
                  <p style="margin-top: 100px; font-size: 21px;"> Cypress Christian Foundation School (CCFS), located at 600 Naguilian Road, Irisan, Baguio City, is a primary school run by Saved of the Lord Ministry. The school was founded in 1999.
                  CCFS caters to preschool up to grade school, with an academic calendar that runs from June to April. Although a Christian school, non-Christian students are welcome to enroll in CCFS.
                 </p>
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="font-style: italic; text-align: center;">
                "But these are written that you might believe that Jesus is the Christ, the Son of God, and that believing, you might have life through His name"  -  John 20:31
              </div>
              <!-- /.card-footer-->
            </div>
         </div>
      </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Cypress Christian Foundation School.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


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
<!-- Load new page into #contents div -->
<script src="../Resources/js/disp.js"></script>
</body>
</html>
