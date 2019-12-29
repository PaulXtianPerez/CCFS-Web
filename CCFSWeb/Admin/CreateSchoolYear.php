<?php include 'database.php'; ?>
<?php 
  if(isset($_POST['submit'])){
    
    $query = "INSERT INTO `schoolyear`(yearstart, yearend, totalAtt, totalSec, dateStart, dateEnd, preTuition, preMisc, preBook, gradeTuition, gradeMisc, gradeBook, scfee ) values ('$_POST[yearstart]', '$_POST[yearend]', '$_POST[totalAtt]', '$_POST[totalSec]', '$_POST[dateStart]', '$_POST[dateEnd]', '$_POST[preTuition]', '$_POST[preMisc]', '$_POST[preBook]', '$_POST[gradeTuition]', '$_POST[gradeMisc]', '$_POST[gradeBook]', '$_POST[scfee]')";
    
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
  
  $message = 'School Year have been added';
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCFS Student Information System</title>
    <link rel="icon" href="../Resources/dist/img/CCFS_logo.png" type="image/icon type">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="../Resources/width=device-width, initial-scale=1">
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
      <link rel="stylesheet" type="text/css" href="dist/css/main.css">
<head>

<body>
    <!-- Content Wrapper. Contains page content -->
  <div id="contents">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create School Year</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create School Year Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

              <!-- /.card-header -->

<!--  <form class="form-inline ml-3" action="CreateSchoolYear.php"> -->
    <div>
  <?php if(isset($message)){
      echo '<p>' .$message.'</p>';

  }else {}?>
  <form method="post" action="CreateSchoolYear.php">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">School Year Information</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="Yearstart">Year Start: </label>
                    <input class="form-control" id="inputYearStart" placeholder="Enter Year Start" type= "number" name ="yearstart" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="Yearend">Year End</label>
                    <input class="form-control" id="inputYearEnd" placeholder="Enter Year Start" type= "number" name ="yearend" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="dateStart"> Date Start</label>
                    <input class="form-control" id="inputDateStart" placeholder="Enter first day" type= "date" name ="dateStart" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="dateEnd"> Date End</label>
                    <input class="form-control" id="inputDateStart" placeholder="Enter last day" type= "date" name ="dateEnd" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="noSchoolDays"> Number of School Days</label>
                    <input class="form-control" id="inputNoSchoolDays" placeholder="Enter Number of School Days" type= "number" name ="totalAtt" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="totalSect"> Number of Section</label>
                    <input class="form-control" id="inputNumSec" placeholder="Enter Number of Section" type= "number" name ="totalSec" min = "0">
                  </div>
                </div>  
              </div>
            </div>    

        <!-- Start of Preschool Card -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Preschool Fees</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="nurseryTuition">Nursery Tuition</label>
                    <input class="form-control" id="inputnurseryTuition" placeholder="Enter Tuition Fee" type= "number" name ="nurseryTuition" min="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="nurseryBook">Nursery Book Fees</label>
                    <input class="form-control" id="inputnurseryBook" placeholder="Enter Book Fee" type= "number" name ="nurBook" min= "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="nurseryMisc">Nursery Misc. Fee</label>
                    <input class="form-control" id="inputnurseryMisc" placeholder="Enter Miscellaneous Fee" type= "number" name ="nurMisc" min ="0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="preKinTuition">Pre-Kinder Tuition</label>
                    <input class="form-control" id="inputpreKinTuition" placeholder="Enter Tuition Fee" type= "number" name ="preKinTuition" min="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="preKinBook">Pre-Kinder Book Fees</label>
                    <input class="form-control" id="inputpreKinBook" placeholder="Enter Book Fee" type= "number" name ="preKinBook" min= "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="preKinMisc">Pre-Kinder Misc. Fee</label>
                    <input class="form-control" id="inputnurseryMisc" placeholder="Enter Miscellaneous Fee" type= "number" name ="preKinMisc" min ="0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="KinTuition">Kinder Tuition</label>
                    <input class="form-control" id="inputKinTuition" placeholder="Enter Tuition Fee" type= "number" name ="KinTuition" min="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="KinBook">Kinder Book Fees</label>
                    <input class="form-control" id="inputKinBook" placeholder="Enter Book Fee" type= "number" name ="KinBook" min= "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="KinMisc">Kinder Misc. Fee</label>
                    <input class="form-control" id="inputnurseryMisc" placeholder="Enter Miscellaneous Fee" type= "number" name ="KinMisc" min ="0">
                  </div>
                </div>     
              </div>
            </div> 

        <!-- Start of Gradeschool Card -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gradeschool Fees</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade1TFee">Grade 1 Tuition Fee </label>
                    <input class="form-control" id="inputgrade1TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade1Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade1MiscFee">Grade 1 Misc. Fee</label>
                    <input class="form-control" id="inputgrade1MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade1Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade1BookFee">Grade 1 Book Fee</label>
                    <input class="form-control" id="inputgrade1BookFee" placeholder="Enter Book Fee" type= "number" name ="grade1Book" min = "0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade2TFee">Grade 2 Tuition Fee </label>
                    <input class="form-control" id="inputgrade2TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade2Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade2MiscFee">Grade 2 Misc. Fee</label>
                    <input class="form-control" id="inputgrade2MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade2Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade2BookFee">Grade 2 Book Fee</label>
                    <input class="form-control" id="inputgrade2BookFee" placeholder="Enter Book Fee" type= "number" name ="grade2Book" min = "0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade3TFee">Grade 3 Tuition Fee </label>
                    <input class="form-control" id="inputgrade3TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade3Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade3MiscFee">Grade 3 Misc. Fee</label>
                    <input class="form-control" id="inputgrade3MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade3Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade3BookFee">Grade 3 Book Fee</label>
                    <input class="form-control" id="inputgrade3BookFee" placeholder="Enter Book Fee" type= "number" name ="grade3Book" min = "0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade4TFee">Grade 4 Tuition Fee </label>
                    <input class="form-control" id="inputgrade4TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade4Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade4MiscFee">Grade 4 Misc. Fee</label>
                    <input class="form-control" id="inputgrade4MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade4Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade4BookFee">Grade 4 Book Fee</label>
                    <input class="form-control" id="inputgrade4BookFee" placeholder="Enter Book Fee" type= "number" name ="grade4Book" min = "0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade5TFee">Grade 5 Tuition Fee </label>
                    <input class="form-control" id="inputgrade5TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade5Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade5MiscFee">Grade 5 Misc. Fee</label>
                    <input class="form-control" id="inputgrade5MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade5Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade5BookFee">Grade 5 Book Fee</label>
                    <input class="form-control" id="inputgrade5BookFee" placeholder="Enter Book Fee" type= "number" name ="grade5Book" min = "0">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="grade6TFee">Grade 6 Tuition Fee </label>
                    <input class="form-control" id="inputgrade6TFee" placeholder="Enter Tuition Fee" type= "number" name ="grade5Tuition" min ="0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade6MiscFee">Grade 6 Misc. Fee</label>
                    <input class="form-control" id="inputgrade5MiscFee" placeholder="Enter Miscellaneous Fee" type= "number" name ="grade6Misc" min = "0">
                  </div>
                  <div class="form-group col-3">
                    <label for="grade6BookFee">Grade 6 Book Fee</label>
                    <input class="form-control" id="inputgrade6BookFee" placeholder="Enter Book Fee" type= "number" name ="grade6Book" min = "0">
                  </div>
                </div>
                  <div class="form-group col-3">
                    <label for="totalFee">Overall Tuition Fee</label>
                    <input class="form-control" id="inputtotalFee" type= "number" name ="scfee" min = "0">
                  </div>
                </div>  
              </div>
            </div>     

    <p>
    <input type = "submit" class="btn btn-success" style="float: right;" name = "submit" value = "Create" min = "0"/>
    </p>
    </div>

  </form>
</body>

</html>
