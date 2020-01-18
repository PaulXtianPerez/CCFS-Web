<?php 
  include 'database.php';

  $grades = array( 'NURSERY', 'PRE-KINDER', 'KINDER', 'GRADE 1', 'GRADE 2', 'GRADE 3', 'GRADE 4', 'GRADE 5', 'GRADE 6' );

  if(isset($_POST['submit']) && isset($_POST['grade'])){
    foreach ($_POST['grade'] as $grade_id => $grade_r) {
      $grade     = $grades[$grade_id];
      $subjname1 = $grade_r['subject'][1];
      $subjname2 = $grade_r['subject'][2];
      $subjname3 = $grade_r['subject'][3];
      $subjname4 = $grade_r['subject'][4];
      $subjname5 = $grade_r['subject'][5];
      $subjname6 = $grade_r['subject'][6];
      $subjname7 = $grade_r['subject'][7];
      $subjname8 = $grade_r['subject'][8];
      $subjname9 = $grade_r['subject'][9];
      $subjname10 = $grade_r['subject'][10];
      $subjname11 = $grade_r['subject'][11];
      $subjname12 = $grade_r['subject'][12];
      $subjname13 = $grade_r['subject'][13];
      $subjname14 = $grade_r['subject'][14];
      $subjname15 = $grade_r['subject'][15];
      $subjname16 = $grade_r['subject'][16];
      $subjname17 = $grade_r['subject'][17];
      $subjname18 = $grade_r['subject'][18];
      $subjname19 = $grade_r['subject'][19];
      $subjname20 = $grade_r['subject'][20];

      $query = "INSERT INTO `curriculum`(curname, grade, subjname1, subjname2, subjname3, subjname4, subjname5, subjname6, subjname7, subjname8, subjname9, subjname10, subjname11, subjname12, subjname13, subjname14, subjname15, subjname16, subjname17, subjname18, subjname19, subjname20, yearid) 
                VALUES ('$_POST[curname]', '$grade', '$subjname1', '$subjname2', '$subjname3', '$subjname4', '$subjname5', '$subjname6', '$subjname7', '$subjname8', '$subjname9', '$subjname10', '$subjname11', '$subjname12', '$subjname13', '$subjname14', '$subjname15', '$subjname16', '$subjname17', '$subjname18', '$subjname19', '$subjname20', '$_POST[yearid]')";
      $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
    }

    $message = 'Curriculum have been added';
  }
?>

<!DOCTYPE html>
<html lang=en>
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
            <h1 class="m-0 text-dark">Create Curriculum</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Curriculum</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- /.card-header -->

      <?php if(isset($message)) echo '<p>' .$message.'</p>';?>

      <form method="post" action="CreateCurriculum.php">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <!-- Curriculum content -->
            <?php foreach ( $grades as $grade_id => $grade ) {?>
            <input type="hidden" id="inputGradeLevel" name ="grade[<?php echo $grade_id; ?>]" value="<?php echo $grade; ?>">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum for <?php echo $grade; ?></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <?php for ($x=1; $x<=5; $x++) { ?>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                    <br>
                    <?php } ?>
                  </div>
                  <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <?php for ($x=6; $x<=10; $x++) { ?>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                    <br>
                    <?php } ?>
                  </div>
                  <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <?php for ($x=11; $x<=15; $x++) { ?>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                    <br>
                    <?php } ?>
                  </div>
                  <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <?php for ($x=16; $x<=20; $x++) { ?>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                    <br>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>  
            
            <div class="row form-inline">
              <div class="form-group col-5">
                <label for="curid">Curriculum Name: </label>
                <input class="form-control" id="inputCurriculumID" placeholder="Enter Curriculum Name" type="text" name ="curname" min="0" style="margin-left: 10px;">
              </div>

              <div class="form-group col-3">
                <label for="yearid">School Year:</label>
                <?php 
                  $query2 = "Select yearid from schoolyear where scstatus = 'ACTIVE'";
                  $result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
                ?>  
                <select name="yearid" class="form-control" style="margin-left: 10px;">
                  <?php while ($row2 = mysqli_fetch_array($result2)):;?>
                  <option name = "yearid" type = "hidden" class="form-control"><?php echo $row2[0];?></option>
                  <?php endwhile;?>
                </select>

                <input type = "submit" name="submit" class="btn btn-success" value = "Create" min ="0" style="margin-left: 10px;"/>
              </div>
            </div>
          </div>
        </div>  
      </form> 
  </body>
</html>
