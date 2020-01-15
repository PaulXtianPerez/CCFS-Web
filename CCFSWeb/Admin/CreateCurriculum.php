<?php include 'database.php'; ?>
<?php 
  if(isset($_POST['submit'])){
    
 

  for ($x = 0; $x <= 8; $x++) {
    $query = "INSERT INTO `curriculum`(curname, grade, subjname1, subjname2, subjname3, subjname4, subjname5, subjname6, subjname7, subjname8, subjname9, subjname10, subjname11, subjname12, subjname13, subjname14, subjname15, subjname16, subjname17, subjname18, subjname19, subjname20, yearid) values ('$_POST[curname]', '$_POST[grade]', '$_POST[subjname1]', '$_POST[subjname2]', '$_POST[subjname3]', '$_POST[subjname4]', '$_POST[subjname5]', '$_POST[subjname6]', '$_POST[subjname7]', '$_POST[subjname8]', '$_POST[subjname9]', '$_POST[subjname10]', '$_POST[subjname11]', '$_POST[subjname12]', '$_POST[subjname13]', '$_POST[subjname14]', '$_POST[subjname15]', '$_POST[subjname16]', '$_POST[subjname17]', '$_POST[subjname18]', '$_POST[subjname19]', '$_POST[subjname20]', '$_POST[yearid]')";

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

<!--  <form class="form-inline ml-3" action="CreateSchoolYear.php"> -->
    <div>
  <?php if(isset($message)){
      echo '<p>' .$message.'</p>';

  }else {}?>
  <form method="post" action="CreateCurriculum.php">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <!-- Curriculum content -->
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="curid">Curriculum Name: </label>
                    <input class="form-control" id="inputCurriculumID" placeholder="Enter Curriculum Name" type= "text" name ="curname" min = "0">
                  </div>
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>NURSERY</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>PRE-KINDER</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>KINDER</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>   
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 1</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>   
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 2</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>   
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 3</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 4</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>  
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 5</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>  
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Curriculum</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                        <label for="grade">Grade level:</label>
                    <select class="form-control" id="inputGradeLevel" name ="grade">
                        <option>GRADE 6</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-3" id="adding">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname1">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname2">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname3">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname4">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname5">
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname6">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname7">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname8">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname9">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname10">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname11">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname12">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname13">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname14">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname15">
                    <br>
                  </div>
                    <div class="form-group col-3">
                    <label for="subjid"> Subjects: </label>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname16">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname17">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname18">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname19">
                    <br>
                    <input class="form-control" id="subject" placeholder="Enter Subject" type= "string" name ="subjname20">
                    <br>
                  </div>
              </div>
              </div>
            </div>  
                  <div class="form-group col-3">
                    <label for="yearid"> School Year: </label>
                  <?php $query2 = "Select yearid from schoolyear where scstatus = 'ACTIVE'";
                  $result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
                  ?>  
                  
                  <select name = "yearid" type = "hidden">
                  <?php while ($row2 = mysqli_fetch_array($result2)):;?>
                  <option name = "yearid" type = "hidden" class="form-control"><?php echo $row2[0];?></option>
                  <?php endwhile;?>
                  </div>
                  <div class="form-group col-3">  
                  <input type = "submit" name = "submit" class="btn btn-success" value = "Create" min ="0"/>
                </div>
              </div>
            </div>   
        </body>
</html>
