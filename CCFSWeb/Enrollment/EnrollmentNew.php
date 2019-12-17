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
      <link rel="stylesheet" type="text/css" href="dist/css/main.css">
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div id="contents">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fill up the forms below</h1>
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
              <form role="form">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-4">
                    <label for="surname">Surname</label>
                    <input class="form-control" id="Inputsurname" placeholder="Enter Surname">
                  </div>
                  <div class="form-group col-5">
                    <label for="givenName">Given Name</label>
                    <input class="form-control" id="givenName" placeholder="Enter Given Name">
                  </div>
                  <div class="form-group col-3">
                    <label for="middleName"> Middle Name</label>
                    <input class="form-control" id="middleName" placeholder="Enter Middle Name">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Gender</label>
                        <select class="form-control">
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
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                  </div>
                </div>
                    <div class="form-group col-md-2">
                        <label>Grade Level</label>
                        <select class="form-control">
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
                  <div class="form-group col-md-5">
                    <label for="birthPlace">Birth Place</label>
                    <input class="form-control" id="birthPlace" placeholder="Enter BirthPlace">
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-12">
                    <label for="studAddress">Student Address</label>
                    <input class="form-control" id="studAddress" placeholder="Enter Student Adress">
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-3">
                    <label for="studAddress">Telephone Number</label>
                    <input class="form-control" id="telNumber" placeholder="Enter Telephone Number">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="studAddress">Mobile Number</label>
                    <input class="form-control" id="mobileNumber" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="studAddress">Last School Attended</label>
                    <input class="form-control" id="lastSchool" placeholder="Enter Last School Attended">
                  </div>
              </div>
           <!-- /.card-body -->
              </div>
              </form>
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
              <form role="form">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="fatherFirstName">Father First name</label>
                    <input class="form-control" id="fatherFirstName" placeholder="Enter Father First Name">
                  </div>
                  <div class="form-group col-3">
                    <label for="fatherLastName">Fathers Last name</label>
                    <input class="form-control" id="fatherLastName" placeholder="Enter Father Last Name">
                  </div>
                  <div class="form-group col-6">
                    <label for="fatherAddress"> Father Address</label>
                    <input class="form-control" id="fatherAddress" placeholder="Enter Address">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="motherFirstName">Father Occupation</label>
                    <input class="form-control" id="motherFirstName" placeholder="Enter Father Occupation">
                  </div>
                  <div class="form-group col-3">
                    <label for="motherLastName">Father Mobile number</label>
                    <input class="form-control" id="motherLastName" placeholder="Enter Father Mobile Number">
                  </div>
                  <div class="form-group col-6">
                    <label for="motherAddress"> Father Email Address</label>
                    <input class="form-control" id="motherAddress" placeholder="Enter Father Email Address">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="fatherFirstName">Mother First name</label>
                    <input class="form-control" id="fatherFirstName" placeholder="Enter Mother First Name">
                  </div>
                  <div class="form-group col-3">
                    <label for="fatherLastName">Mother Maiden name</label>
                    <input class="form-control" id="fatherLastName" placeholder="Enter Mother Last Name">
                  </div>
                  <div class="form-group col-6">
                    <label for="fatherAddress"> Mother Address</label>
                    <input class="form-control" id="fatherAddress" placeholder="Enter Address">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="motherFirstName">Mother Occupation</label>
                    <input class="form-control" id="motherFirstName" placeholder="Enter Mother Occupation">
                  </div>
                  <div class="form-group col-3">
                    <label for="motherLastName">Mother Mobile number</label>
                    <input class="form-control" id="motherLastName" placeholder="Enter Mother Mobile Number">
                  </div>
                  <div class="form-group col-6">
                    <label for="motherAddress">Mother Email Address</label>
                    <input class="form-control" id="motherAddress" placeholder="Enter Mother Email Address">
                  </div>
                </div>
           <!-- /.card-body -->
              </div>
              </form>



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
              <form role="form" class="siblingtable">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-3">
                    <label for="fatherFirstName">Sibling Surname</label>
                    <input class="form-control" id="fatherFirstName" placeholder="Enter Sibling Surname">
                  </div>
                  <div class="form-group col-3">
                    <label for="fatherLastName">Siblings Given name</label>
                    <input class="form-control" id="fatherLastName" placeholder="Enter Sibling Given Name">
                  </div>
                  <div class="form-group col-md-3">
                   <label for="birthDate">Birthdate</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                  </div>
                </div>
                  <div class="form-group col-3">
                    <label for="fatherAddress"> Siblings School</label>
                    <input class="form-control" id="fatherAddress" placeholder="Enter Address">
                  </div>
                  <div class="row">
                    <button type="submit" class="btn btn-primary">Add More</button>
                  </div>
                </div>

           <!-- /.card-body -->
              </div>
              </form>



            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal1" style="float: right;">Submit</button>
      </div>

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
