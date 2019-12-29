<?php
    include("Connection.php");
    $lastID = 'SELECT IDno FROM enstudent ORDER BY IDno DESC LIMIT 1';
    $result = $conn->query($lastID);
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[0] = $row['IDno'];
    }
    $lastyear = 'SELECT yearId FROM schoolyear ORDER BY yearId DESC LIMIT 1';
    $result1 = $conn->query($lastyear);
    $data1 = array();
    while($row = $result1->fetch_assoc()) {
        $data1[0] = $row['yearId'];
    }
    if (isset($_POST['submit'])) { 
        $enstud = "INSERT INTO `enstudent`( 
        IDno, GivenName, MiddleName, 
        SurName, gradelvl, birthdate, 
        birthplace, gender, homeTelnum, 
        mobilenum, studaddress, 
        prevschoolattended, studstat, 
        sponsor, faFname, falname, 
        faAdd, faMobilenum, faEmail, 
        faoccupation, moFname, moLname, 
        moAdd, momobilenum, moEmail, 
        mooccupation, sibFname, sibLname, 
        sibBirthdate, sibschoolname, 
        yearid, dateenrolled, 
        guardianName, guardianAddress, 
        guardianContact) 
        VALUES ('".$result['IDno']."','$_POST[studentGivenName]]',"
                . "'$_POST[studentMiddleName]'),'$_POST[studentSurname]',"
                . "'$_POST[gradeLevel]','$_POST[studentBirthDate]',"
                . "'$_POST[studentBirthPlace]','$_POST[gender]',"
                . "'$_POST[studentTelNum]',$_POST[studentMobNum],"
                . "'$_POST[studentAddress]',$_POST[studentLastSchool],"
                . "Enrolled,'','$_POST[fatherFirst]','$_POST[fatherLast]',"
                . "'$_POST[fatherAdd],'$_POST[fatherMobile]',"
                . "'$_POST[fatherEmailAdd]','$_POST[fatherOcc]',"
                . "'$_POST[motherFirst]','$_POST[motherLast]',"
                . "'$_POST[motherAdd]','$_POST[motherMobNum]',"
                . "'$_POST[motherEmAdd]','$_POST[motherOcc]','','','','',"
                . "'".$result1['yearid']."','2019-12-12','','','')";
        $insert_row = $conn->query($enstud);
    }
?>
<html>
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
            <h1 class="m-0 text-dark">Fill up the forms below <?php echo $data[0]; echo $data1[0];?></h1>
              <!-- SEARCH FORM -->
          <form class="form-inline md-form form-sm mt-0">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search by ID Num or Surname"
              aria-label="Search">
          </form>
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
              <form role="form" action="EnrollmentNew.php" method="POST">
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
                          <option>Preschool</option>
                          <option>Kinder</option>
                          <option>Grade 1</option>
                          <option>Grade 2</option>
                          <option>Grade 3</option>
                          <option>Grade 4</option>
                          <option>Grade 5</option>
                          <option>Grade 6</option>
                        </select>
                      </div>
                    <div class="form-group col-md-3">
                        <label>Section</label>
                        <select class="form-control" name="section">
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

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sibling Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="siblingSurname">Sibling Surname</label>
                    <input class="form-control" id="siblingSurname" placeholder="Enter Sibling Surname" name="siblinglast">
                  </div>
                  <div class="form-group col-3">
                    <label for="siblingGivenName">Siblings Given name</label>
                    <input class="form-control" id="siblingGivenName" placeholder="Enter Sibling Given Name" name="siblingFirst">
                  </div>
                  <div class="form-group col-md-3">
                   <label for="birthDate">Birthdate</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask name="siblingBirth">
                  </div>
                </div>
                  <div class="form-group col-3">
                    <label for="siblingSchool"> Siblings School</label>
                    <input class="form-control" id="siblingSchool" placeholder="Enter Address" name="siblingSchoolLast">
                  </div>
                  <div class="row">
                    <button  class="btn btn-primary">Add More</button> 
                  </div>
                </div>

           <!-- /.card-body -->
              </div>



            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-success" data-toggle="modal" name="submitButton" data-target="#myModal1" style="float: right;">Submit</button>
      </div>
                          </form>


          <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enroll this Student?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <center>Student Information</center>
          <hr>
          <!-- Put Student Information here-->
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Confirm</button>
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
    })

  })
</script>
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
