<?php
$connect = mysqli_connect("localhost", "root", "", "ccfs");

include('../ActiveSchoolYear.php');
$query = "SELECT sename FROM section WHERE gradelvl='NURSERY' OR gradelvl='PRE-KINDER' or gradelvl='KINDER'";
$query1 = "SELECT sename FROM section WHERE gradelvl='GRADE 1' OR gradelvl='GRADE 2' or gradelvl='GRADE 3' or gradelvl='GRADE 4' or gradelvl='GRADE 5' or gradelvl='GRADE 6'";
$queryN = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'NURSERY'";
$queryPK = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'PRE-KINDER'";
$queryK = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'KINDER'";
$queryG1 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 1'";
$queryG2 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 2'";
$queryG3 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 3'";
$queryG4 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 4'";
$queryG5 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 5'";
$queryG6 = "SELECT COUNT(CASE WHEN gender='M' THEN 1 END)MAIL, COUNT(CASE WHEN gender='F' THEN 1 END)FEMALE, COUNT(*)TOTAL FROM enstudent,curstudent WHERE enstudent.IDno = curstudent.IDno AND curstudent.gradelvl = 'GRADE 6'";

$result = mysqli_query($connect, $query);
$result1 = mysqli_query($connect, $queryN);
$result2 = mysqli_query($connect, $queryPK);
$result3 = mysqli_query($connect, $queryK);
$result4 = mysqli_query($connect, $query1);
$result5 = mysqli_query($connect, $queryG1);
$result6 = mysqli_query($connect, $queryG2);
$result7 = mysqli_query($connect, $queryG3);
$result8 = mysqli_query($connect, $queryG4);
$result9 = mysqli_query($connect, $queryG5);
$result10 = mysqli_query($connect, $queryG6);
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
  <form action="DlRep.php" method="post">
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
                  <form method="post">
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
                          <td><?php $row = mysqli_fetch_array($result);
                                    echo $row['sename'];
                           ?></td>
                          <td><?php $r = mysqli_fetch_array($result1);
                          echo $r[0];?></td>
                          <td><?php echo $r[1];?></td>
                          <td><?php echo $r[2];?></td>
                          <input type="hidden" name="rep[1][]" value="<?php echo $row['sename'];?>">
                          <input type="hidden" name="rep[1][]" value="boys <?php echo $r[0];?>">
                          <input type="hidden" name="rep[1][]" value="girls <?php echo $r[1];?>">
                          <input type="hidden" name="rep[1][]" value="total <?php echo $r[2];?>">
                        </tr>
                        <tr>
                          <td>Pre-Kinder</td>
                          <td><?php $row = mysqli_fetch_array($result);
                                    echo $row['sename'];
                           ?></td>
                          <td><?php $rw = mysqli_fetch_array($result2);
                                    echo $rw[0];
                           ?></td>
                          <td><?php echo $rw[1];?></td>
                          <td><?php echo $rw[2];?></td>
                          <input type="hidden" name="rep[2][]" value=<?php echo $row['sename'];?>>
                          <input type="hidden" name="rep[2][]" value="boys <?php echo $rw[0];?>">
                          <input type="hidden" name="rep[2][]" value="girls <?php echo $rw[1];?>">
                          <input type="hidden" name="rep[2][]" value="total <?php echo $rw[2];?>">
                        </tr>
                        <tr>
                          <td>Kinder</td>
                          <td><?php $row = mysqli_fetch_array($result);
                                    echo $row['sename'];
                           ?></td>
                          <td><?php $ra = mysqli_fetch_array($result3);
                                    echo $ra[0];
                           ?></td>
                          <td><?php echo $ra[1];?></td>
                          <td><?php echo $ra[2];?></td>
                          <input type="hidden" name="rep[3][]" value=<?php echo $row['sename'];?>>
                          <input type="hidden" name="rep[3][]" value="boys <?php echo $ra[0];?>">
                          <input type="hidden" name="rep[3][]" value="girls <?php echo $ra[1];?>">
                          <input type="hidden" name="rep[3][]" value="total <?php echo $ra[2];?>">
                        </tr>
                        <tr>  
                          <td></td>
                          <td></td>
                          <td></td>
                          <th><b>Total</b></th>
                          <td><?php echo $ra[2]+$rw[2]+$r[2];?></td>
                          <input type="hidden" name="rep[4][]" value="TOTAL <?php echo $ra[2]+$rw[2]+$r[2];?>">
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
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g1 = mysqli_fetch_array($result5);
                                    echo $g1[0];?></td>
                          <td><?php echo $g1[1];?></td>
                          <td><?php echo $g1[2];?></td>
                          <input type="hidden" name="rep[5][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[5][]" value="boys <?php echo $g1[0];?>">
                          <input type="hidden" name="rep[5][]" value="girls <?php echo $g1[1];?>">
                          <input type="hidden" name="rep[5][]" value="total <?php echo $g1[2];?>">
                        </tr>
                        <tr>
                          <td>Grade 2</td>
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g2 = mysqli_fetch_array($result6);
                          echo $g2[0];
                           ?></td>
                          <td><?php echo $g2[1];?></td>
                          <td><?php echo $g2[1];?></td>
                          <input type="hidden" name="rep[6][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[6][]" value="boys <?php echo $g2[0];?>">
                          <input type="hidden" name="rep[6][]" value="girls <?php echo $g2[1];?>">
                          <input type="hidden" name="rep[6][]" value="total <?php echo $g2[2];?>">
                        </tr>
                        <tr>
                          <td>Grade 3</td>
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g3 = mysqli_fetch_array($result7);
                          echo $g3[0];?></td>
                          <td><?php echo $g3[1];?></td>
                          <td><?php echo $g3[2];?></td>
                          <input type="hidden" name="rep[7][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[7][]" value="boys <?php echo $g3[0];?>">
                          <input type="hidden" name="rep[7][]" value="girls <?php echo $g3[1];?>">
                          <input type="hidden" name="rep[7][]" value="total <?php echo $g3[2];?>">
                        </tr>
                        <tr>
                          <td>Grade 4</td>
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g4 = mysqli_fetch_array($result8);
                          echo $g4[0];?></td>
                          <td><?php echo $g4[1];?></td>
                          <td><?php echo $g4[2];?></td>
                          <input type="hidden" name="rep[8][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[8][]" value="boys <?php echo $g4[0];?>">
                          <input type="hidden" name="rep[8][]" value="girls <?php echo $g4[1];?>">
                          <input type="hidden" name="rep[8][]" value="total <?php echo $g4[2];?>">
                        </tr>
                        <tr>
                          <td>Grade 5</td>
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g5 = mysqli_fetch_array($result9);
                          echo $g5[0];?></td>
                          <td><?php echo $g5[1];?></td>
                          <td><?php echo $g5[2];?></td>
                          <input type="hidden" name="rep[9][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[9][]" value="boys <?php echo $g5[0];?>">
                          <input type="hidden" name="rep[9][]" value="girls <?php echo $g5[1];?>">
                          <input type="hidden" name="rep[9][]" value="total <?php echo $g5[2];?>">
                        </tr>
                        <tr>
                          <td>Grade 6</td>
                          <td><?php $ro = mysqli_fetch_array($result4);
                                    echo $ro['sename'];?></td>
                          <td><?php $g6 = mysqli_fetch_array($result10);
                          echo $g6[0];?></td>
                          <td><?php echo $g6[1];?></td>
                          <td><?php echo $g6[2];?></td>
                          <input type="hidden" name="rep[10][]" value=<?php echo $ro['sename'];?>>
                          <input type="hidden" name="rep[10][]" value="boys <?php echo $g6[0];?>">
                          <input type="hidden" name="rep[10][]" value="girls <?php echo $g6[1];?>">
                          <input type="hidden" name="rep[10][]" value="total <?php echo $g6[2];?>">
                        </tr>
                        <tr>
                          <td><?php?></td>
                          <td></td>
                          <td></td> 
                          <th><b>Total</b></td>
                          <td><?php echo $g1[2]+$g2[2]+$g3[2]+$g4[2]+$g5[2]+$g6[2];?></td>
                          <input type="hidden" name="rep[11][]" value="TOTAL <?php echo $g1[2]+$g2[2]+$g3[2]+$g4[2]+$g5[2]+$g6[2];?>">
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
                          <td><?php echo $g1[0]+$g2[0]+$g3[0]+$g4[0]+$g5[0]+$g6[0]+$r[0]+$rw[0]+$ra[0]?></td>
                          <td><?php echo $g1[1]+$g2[1]+$g3[1]+$g4[1]+$g5[1]+$g6[1]+$r[1]+$rw[1]+$ra[1]?></td>
                          <td><?php echo $g1[2]+$g2[2]+$g3[2]+$g4[2]+$g5[2]+$g6[2]+$r[2]+$rw[2]+$ra[2]?></td>
                          <input type="hidden" name="rep[12][]" value="TOTAL boys <?php echo $g1[0]+$g2[0]+$g3[0]+$g4[0]+$g5[0]+$g6[0]+$r[0]+$rw[0]+$ra[0]?>">
                          <input type="hidden" name="rep[12][]" value="TOTAL girls <?php echo $g1[1]+$g2[1]+$g3[1]+$g4[1]+$g5[1]+$g6[1]+$r[1]+$rw[1]+$ra[1]?>">
                          <input type="hidden" name="rep[12][]" value="TOTAL <?php echo $g1[2]+$g2[2]+$g3[2]+$g4[2]+$g5[2]+$g6[2]+$r[2]+$rw[2]+$ra[2]?>">
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
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Paying</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
                        </tr>
                        <tr>
                          <td>Full Sponsors</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
                        </tr>
                        <tr>
                          <td>% Sponsors</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
                        </tr>
                        <tr>
                          <td>Staff Scholar</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                          <td><b>Total</b></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
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
              <input type="submit" class="btn btn-success" name="saveBtn" style="float: right;" value="Save as..">
            </div>
            </form>
          </section>
        </div><!-- /.container-fluid -->
      </div>
  </div>
  </form> <!-- /.content-wrapper -->
<script>
// $(document).ready(function(){
//   $(document).on("click", ":submit", 'form',function(e) {
//     e.preventDefault();
//     $.ajax({
//       type:'POST',
//       url:"DlRep.php",
//       data:$('form').serialize()
//     });
//   });
// });
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
