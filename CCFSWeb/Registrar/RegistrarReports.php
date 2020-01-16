<?php
include('../ActiveSchoolYear.php');
include("Connection.php");
$query = "SELECT sename,section.gradelvl,curstudent.IDno FROM curstudent,section,enstudent";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
    <link rel="stylesheet" href="../Resources/ plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../Resources/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
  </head>
  <body>
    <!-- Content Wrapper. Contains page content -->
    <div id="contents">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Summary of Students</h1>
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
           <!-- Number of Pre-School Students -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Number of Pre-School Students</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="preSchSummary" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th width="20%">Grade Level</th>
                        <th width="20%">Section</th>
                        <th width="20%">Boys</th>
                        <th width="20%">Girls</th>
                        <th width="20%">Total</th>
                      </tr>
                      </thead>
                      <tbody> <!-- Populate from database. -->
                        <tr>
                          <td>Nursery</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Pre-Kinder</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Kinder</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>  
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><b>Total</b></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of Grade School (Elementary) Students -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Number of Grade School (Elementary) Students</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="grdSchSummary" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th width="20%">Grade Level</th>
                        <th width="20%">Section</th>
                        <th width="20%">Boys</th>
                        <th width="20%">Girls</th>
                        <th width="20%">Total</th>
                      </tr>
                      </thead>
                      <tbody> <!-- Populate from database. -->
                        <tr>
                          <td>Grade 1</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td>Grade 2</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td>Grade 3</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td>Grade 4</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td>Grade 5</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td>Grade 6</td>
                          <td>[Section]</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><b>Total</b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Number of Students -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Total Number of Students</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="totalStudSummary" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th width="20%"></th>
                        <th>Boys</th>
                        <th>Girls</th>
                        <th>Total</th>
                      </tr>
                      </thead>
                      <tbody> <!-- Populate from database. -->
                        <tr>
                          <td><b>Total Students</b></td>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of Students per Status -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Number of Students per Status</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="statusSummary" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th width="20%">Status</th>
                        <th>Nursery</th>
                        <th>Kinder</th>
                        <th>Pre-Kinder</th>
                        <th>Grade 1</th>
                        <th>Grade 2</th>
                        <th>Grade 3</th>
                        <th>Grade 4</th>
                        <th>Grade 5</th>
                        <th>Grade 6</th>
                        <th>Total</th>
                      </tr>
                      </thead>
                      <tbody> <!-- Populate from database. -->
                        <tr>
                          <td>Academic Scholars</td>
                        </tr>
                        <tr>
                          <td>Paying</td>
                        </tr>
                        <tr>
                          <td>Full Sponsors</td>
                        </tr>
                        <tr>
                          <td>% Sponsors</td>
                        </tr>
                        <tr>
                          <td>Staff Scholar</td>
                        </tr>
                          <td><b>Total</b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Number of Families from Nursery to Grade 6 -->
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Total Number of Families from Nursery to Grade 6</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="totalFamilySummary" class="table table-bordered table-hover">
                      <tbody> <!-- Populate from database. -->
                        <tr>
                          <td><b>Total number of families from nursery to grade 6: </b>___</td>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button type="button" class="btn btn-success" name="saveBtn" style="float: right;">Save report as...</button>
            </div>

          </section>
        </div><!-- /.container-fluid -->
      </div>
  </div> <!-- /.content-wrapper -->

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
