<?php
  session_start();

  include('Connection.php');
  include('database.php');

  $query = "SELECT * FROM `section`";
  $result = mysqli_query($mysqli, $query);
?>
<html>
<head>
  <?php if(isset($message)){
        echo "<p>".$message."</p>";
  }?>
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
<form>
  <!-- Content Wrapper. Contains page content -->
  <div id="contents">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-dark">Fill up the forms below</h1>
            <br>
              <!-- SEARCH FORM -->
            <div class="form-inline">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search ID or Surname"
                aria-label="Search" name="search">
              <button type="submit" name="searcher" value="search" class="btn btn-info btn-sm" style="margin-left: 10px;">Search</button>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enrollment Form Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Basic Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <input type="hidden" name="studentIDno" value="">
                <input type="hidden" name="studentIDnoNew" value="">
                <input type="hidden" name="redirect_to" value="<?php echo $_SESSION['TYPE'] == 'ADMIN' ? '../Admin/AdminHome.php' : '../Registrar/RegistrarHome.php'; ?>">

                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-4">
                    <label for="surname">Surname</label>
                    <input class="form-control" id="Inputsurname" placeholder="Enter Surname" name="studentSurname">
                  </div>
                  <div class="form-group col-5">
                    <label for="givenName">Given Name</label>
                    <input class="form-control" id="givenName" placeholder="Enter Given Name" name="studentGivenName">
                  </div>
                  <div class="form-group col-3">
                    <label for="middleName"> Middle Name</label>
                    <input class="form-control" id="middleName" placeholder="Enter Middle Name" name="studentMiddleName">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                <div class="form-group col-md-3">
                   <label for="birthDate">Birthdate</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask name="studentBirthDate">
                  </div>
                </div>
                    <div class="form-group col-md-3">
                        <label>Grade Level</label>
                        <select class="form-control" name="gradeLevel">
                          <option>NURSERY</option>
                          <option>PRESCHOOL</option>
                          <option>KINDER</option>
                          <option>GRADE 1</option>
                          <option>GRADE 2</option>
                          <option>GRADE 3</option>
                          <option>GRADE 4</option>
                          <option>GRADE 5</option>
                          <option>GRADE 6</option>
                        </select>
                      </div>
                    <div class="form-group col-md-3">
                        <label>Section</label>
                <?php $query1 = "Select sename from section";
                $result = $mysqli->query($query1) or die($mysqli->error.__LINE__);
                ?>  
                <div class="input-group mb-3">
                <select name="sename" id="sename" class="form-control">
                <?php while ($row1 = mysqli_fetch_array($result)):;?>
                <option name = "sename"><?php echo $row1[0];?></option>
                <?php endwhile;?>
                </select>
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                  <div class="form-group col-md-6">
                    <label for="birthPlace">Birth Place</label>
                    <input class="form-control" id="birthPlace" placeholder="Enter BirthPlace" name="studentBirthPlace">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="studAddress">Student Address</label>
                    <input class="form-control" id="studAddress" placeholder="Enter Student Adress" name="studentAddress">
                  </div>
                </div>
              <div class="row">
                  <div class="form-group col-md-3">
                    <label for="studAddress">Telephone Number</label>
                    <input class="form-control" id="telNumber" placeholder="Enter Telephone Number" name="studentTelNum">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="studAddress">Mobile Number</label>
                    <input class="form-control" id="mobileNumber" placeholder="Enter Mobile Number" name="studentMobNum">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="studAddress">Last School Attended</label>
                    <input class="form-control" id="lastSchool" placeholder="Enter Last School Attended" name="studentLastSchool">
                  </div>
              </div>
           <!-- /.card-body -->
              </div>
              
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Family Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="fatherFirstName">Father First name</label>
                    <input class="form-control" id="fatherFirstName" placeholder="Enter Father First Name" name="fatherFirst">
                  </div>
                  <div class="form-group col-3">
                    <label for="fatherLastName">Fathers Last name</label>
                    <input class="form-control" id="fatherLastName" placeholder="Enter Father Last Name" name="fatherLast">
                  </div>
                  <div class="form-group col-6">
                    <label for="fatherAddress"> Father Address</label>
                    <input class="form-control" id="fatherAddress" placeholder="Enter Address" name="fatherAdd">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="fatherOccupation">Father Occupation</label>
                    <input class="form-control" id="fatherOccupation" placeholder="Enter Father Occupation" name="fatherOcc">
                  </div>
                  <div class="form-group col-3">
                    <label for="fatherMobile">Father Mobile number</label>
                    <input class="form-control" id="fatherMobile" placeholder="Enter Father Mobile Number" name="fatherMobileNum">
                  </div>
                  <div class="form-group col-6">
                    <label for="fatherEmail"> Father Email Address</label>
                    <input class="form-control" id="fatherEmail" placeholder="Enter Father Email Address" name="fatherEmailAdd">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="motherFirstName">Mother First name</label>
                    <input class="form-control" id="motherFirstName" placeholder="Enter Mother First Name" name="motherFirst">
                  </div>
                  <div class="form-group col-3">
                    <label for="motherLastName">Mother Maiden name</label>
                    <input class="form-control" id="motherLastName" placeholder="Enter Mother Last Name" name="motherLast">
                  </div>
                  <div class="form-group col-6">
                    <label for="motherAddress"> Mother Address</label>
                    <input class="form-control" id="motherAddress" placeholder="Enter Address" name="motherAdd">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="motherOccupation">Mother Occupation</label>
                    <input class="form-control" id="motherOccupation" placeholder="Enter Mother Occupation" name="motherOcc">
                  </div>
                  <div class="form-group col-3">
                    <label for="motherMobileNumber">Mother Mobile number</label>
                    <input class="form-control" id="motherMobileNumber" placeholder="Enter Mother Mobile Number" name="motherMobNum">
                  </div>
                  <div class="form-group col-6">
                    <label for="motherEmailAddress">Mother Email Address</label>
                    <input class="form-control" id="motherEmailAddress" placeholder="Enter Mother Email Address" name="motherEmAdd">
                  </div>
                </div>
           <!-- /.card-body -->
              </div>
              



            </div>

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Guardian Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="guardianName">Guardian Name</label>
                    <input class="form-control" id="guardianName" placeholder="Enter Sibling Surname" name="guardianName">
                  </div>
                  <div class="form-group col-6">
                    <label for="guardianAddress"> Guardian Address </label>
                    <input class="form-control" id="guardianAddress" placeholder="Enter Guardian Address" name="guardianAddress">
                  </div>
                  <div class="form-group col-3">
                    <label for="guardianContact">Guardian Contact Number</label>
                    <input class="form-control" id="guardianContact" placeholder="Enter Guardian Contact Number" name="guardianContact">
                  </div>
                </div>

           <!-- /.card-body -->
              </div>



            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-success" data-toggle="modal" name="enroll" data-target="#myModal1" style="float: right;">Enroll</button>
      </div>
          </form>


          <!-- The Modal -->
  <div class="modal fade Weeb" id="myModal1" data-backdrop="static">
    
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title kk">Success</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <center>Student Fee</center>
          <input type="hidden" name="yerrr">
          <label>Tuition</label>
          <input class="form-control" type="number" name="tuition">
          <label>Books</label>
          <input class="form-control" type="number" name="books">
          <label>Mics</label>
          <input class="form-control" type="number" name="mics" id="grenades">
          <label>service</label>
          <input class="form-control" type="number" name="service">
          <label>balance</label>
          <input class="form-control" type="number" name="balance">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success elon-chan" data-dismiss="modal">Confirm</button>
        </div>

      </div>
    </div>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- Left col -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--   <footer class="main-footer">
    <strong>Copyright &copy; 2018-2019 Cypress Christian Foundation School.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer> -->

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

    <script>
      $(document).ready(function () {
        
        $('[name=searcher]').on('click', function () {
          var search = $('[name=search]').val();
          $.ajax({
            url: 'searchStudent.php',
            data: { s: search },
            dataType: 'json',
          }).done(function (data) {
              if ( data.data ) {
                var student = data.data;

                // name = field name
                // student. = database column name
                $('[name=studentIDno]').val(student.IDno);
                $('[name=studentSurname]').val(student.SurName);
                $('[name=studentGivenName]').val(student.GivenName);
                $('[name=studentMiddleName]').val(student.MiddleName);
                $('[name=gender] option:selected').val(student.gender);
                $('[name=studentBirthDate]').val(student.birthdate);
                $('[name=gradeLevel] option:selected').val(student.gradelvl);
                $('[name=sename]').val(student.sename);
                $('[name=studentBirthPlace]').val(student.birthplace);
                $('[name=studentAddress]').val(student.studaddress);
                $('[name=studentTelNum]').val(student.homeTelnum);
                $('[name=studentMobNum]').val(student.mobilenum);
                $('[name=studentLastSchool]').val(student.prevschoolattended);
                $('[name=fatherFirst]').val(student.faFname);
                $('[name=fatherLast]').val(student.falname);
                $('[name=fatherAdd]').val(student.faAdd);
                $('[name=fatherOcc]').val(student.faoccupation);
                $('[name=fatherMobileNum]').val(student.faMobilenum);
                $('[name=fatherEmailAdd]').val(student.faEmail);
                $('[name=motherFirst]').val(student.moFname);
                $('[name=motherLast]').val(student.moLname);
                $('[name=motherAdd]').val(student.moAdd);
                $('[name=motherOcc]').val(student.mooccupation);
                $('[name=motherMobNum]').val(student.momobilenum);
                $('[name=motherEmAdd]').val(student.moEmail);
                $('[name=guardianName]').val(student.guardianName);
                $('[name=guardianAddress]').val(student.guardianAddress);
                $('[name=guardianContact]').val(student.guardianContact);
              } else {
                alert( data.message );
              }
          });
          return false;
        });
        $(document).on('click',':submit','form',function(e){
          e.preventDefault();
          if(!$('input[name=studentBirthPlace]').val()) {
            $('.kk').text('Not Success');
            $('input[name=tuition]').prop('disabled',true);
            $('input[name=books]').prop('disabled',true);
            $('input[name=mics]').prop('disabled',true);
            $('input[name=service]').prop('disabled',true);
            $('input[name=balance]').prop('disabled',true);
          }else {
            $('.kk').text('Success');
            $('input[name=tuition]').prop('disabled',false);
            $('input[name=books]').prop('disabled',false);
            $('input[name=mics]').prop('disabled',false);
            $('input[name=service]').prop('disabled',false);
            $('input[name=balance]').prop('disabled',false);
          }
          $.ajax({
            type:'POST',
            url:'EnrollmentSave.php',
            data: $('form').serialize(),
            dataType:"json",
            success:function(data) {
              $('input[name=yerrr]').val(data['em']);
              $('input[name=studentIDnoNew]').val(data['me'])
              switch($('[name=gradeLevel] option:selected').val()) {
                case 'NURSERY':
                  $('input[name=tuition]').val(data['ELONTUSK']['pretui1']);
                  $('input[name=books]').val(data['ELONTUSK']['prebook1']);
                  $('input[name=mics]').val(data['ELONTUSK']['premisc1']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'PRESCHOOL':
                  $('input[name=tuition]').val(data['ELONTUSK']['pretui2']);
                  $('input[name=books]').val(data['ELONTUSK']['prebook2']);
                  $('input[name=mics]').val(data['ELONTUSK']['premisc2']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'KINDER':
                  $('input[name=tuition]').val(data['ELONTUSK']['pre3']);
                  $('input[name=books]').val(data['ELONTUSK']['pre3']);
                  $('input[name=mics]').val(data['ELONTUSK']['pre3']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 1':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui1']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook1']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc123456']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 2':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui23456']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook23456']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc23456']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 3':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui3456']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook3456']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc3456']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 4':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui456']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook456']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc456']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 5':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui56']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook56']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc56']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
                case 'GRADE 6':
                  $('input[name=tuition]').val(data['ELONTUSK']['gradetui6']);
                  $('input[name=books]').val(data['ELONTUSK']['gradebook6']);
                  $('input[name=mics]').val(data['ELONTUSK']['grademisc6']);
                  if(!$('input[name=service]').val() || !$('input[name=tuition]').val() || !$('input[name=books]').val() || !$('input[name=mics]').val()) {
                    $('input[name=service]').val(0);
                    $('input[name=books]').val(0);
                    $('input[name=mics]').val(0);
                    $('input[name=tuition]').val(0);
                    $('input[name=balance]').val(parseInt($('input[name=tuition]').val())+parseInt($('input[name=books]').val())+parseInt($('input[name=mics]').val())+parseInt($('input[name=service]').val()));
                  }
                break;
              }
            }
          });
        });
        $(document).on('click','.elon-chan',function(e) {
          e.preventDefault();
          var idno = $('input[name=studentIDno]').val();
          var yearid = $('input[name=yerrr]').val();
          var t = $('input[name=tuition]').val();
          var b = $('input[name=books]').val();
          var m = $('input[name=mics]').val();
          var s = $('input[name=service]').val();
          var ba = $('input[name=balance]').val();
          var redirect = $('input[name=redirect_to]').val();
          if(!$('input[name=studentIDno]').val()) {
            idno = $('input[name=studentIDnoNew]').val();
          }
          $.ajax({
            url:'EnrollFees.php',
            type:'POST',
            data:{idno:idno,yearid:yearid,t:t,b:b,m:m,s:s,ba:ba},
            success:function(data) {
              console.log(data);
              //window.location.href = $('input[name=redirect_to]').val();
            }
          });
        });
      });
    </script>

    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY hh:mm A'
          }
        });
      });
    </script>
</body>

</html>
