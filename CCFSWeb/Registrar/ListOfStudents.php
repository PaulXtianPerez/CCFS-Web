<?php
    include('../ActiveSchoolYear.php');
    include("Connection.php");
    $qearStud = "SELECT IDno, SurName, GivenName, MiddleName, gradelvl FROM `enstudent`";
    $result = $conn->query($qearStud);
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
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
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
            <h1 class="m-0 text-dark">List of Students</h1>
            <h5 class="m-0 text-dark">School Year: <?php if(empty($data1[0])) {
              echo "--";
            }else {
              echo $data1[0];
            }
            ; echo "-" ; if(empty($data2[1])){echo "--";}else {echo $data2[1];}?></h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main content -->
       <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <div>
                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" id="searchInput" type="search" placeholder="Search" aria-label="Search"/>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="studListTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID Number </th>
                      <th>Surname</th>
                      <th>Given Name</th>
                      <th>Middle Name</th>
                      <th>Grade Level</th>
                      <th>Section</th>
                      <th>Teacher</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody> <!-- Populate from database. -->
                    <?php while($row = $result->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $row["IDno"];?></td>
                        <td><?php echo $row["SurName"];?></td>
                        <td><?php echo $row["GivenName"];?></td>
                        <td><?php echo $row["MiddleName"];?></td>
                        <td><?php echo $row["gradelvl"];?></td>
                        <td></td>
                        <td></td>
                        <td style="text-align:center;"><input type="button" name="edit" value="Edit" id="<?php echo $row["IDno"]; ?>" class="btn btn-info btn-xs edit_data" /></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </section>
      </div><!-- /.container-fluid -->
    </div>
  </div>
</div> <!-- ./wrapper -->

<!-- Modal to display student information. -->
<div id="add_data_Modal" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Student Information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" id="insert_form">
          <div class="row">
            <div class="form-group col-4">
              <label>ID Number</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="studid" id="studid" disabled/>
            </div>
            <div class="form-group col-4">
              <label>Date Enrolled</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="dateEnr" id="dateEnr" disabled/>
            </div>
            <div class="form-group col-4">
              <label>Status</label>
              <select name="status" id="status" class="form-control">
                <option value="Enrolled">Enrolled</option>
                <option value="Temporarily Enrolled">Temporarily Enrolled</option>
                <option value="Withdrew">Withdrew</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-4">
              <label>Surname</label>
              <input class="form-control" type="text" name="surname" id="surname" required/>
            </div>
            <div class="form-group col-4">
              <label>Given Name</label>
              <input class="form-control" type="text" name="givenname" id="givenname" required/>
            </div>
            <div class="form-group col-4">
              <label>Middle Name</label>
              <input class="form-control" type="text" name="midname" id="midname" required/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-2">
              <label>Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option value="M">MALE</option>
                <option value="F">FEMALE</option>
              </select>
            </div>
            <div class="form-group col-3">
              <label>Birthdate</label>
              <input class="form-control" type="date" name="birthdate" id="birthdate" required/>
            </div>
            <div class="form-group col-2">
              <label>Age</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="age" id="age" disabled/>
            </div>
            <div class="form-group col-5">
              <label>Birthplace</label>
              <input class="form-control" type="text" name="birthplace" id="birthplace" required/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-8">
              <label>Address</label>
              <input class="form-control" type="text" name="address" id="address" required/>
            </div>
            <div class="form-group col-2">
              <label>Telephone No.</label>
              <input class="form-control" type="text" name="telnum" id="telnum"/>
            </div>
            <div class="form-group col-2">
              <label>Mobile No.</label>
              <input class="form-control" type="text" name="mobnum" id="mobnum"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-4">
              <label>Grade Level</label>
              <select name="grdLvl" id="grdLvl" class="form-control">
                <option value="NURSERY">NURSERY</option>
                <option value="PRE-KINDER">PRE-KINDER</option>
                <option value="KINDER">KINDER</option>
                <option value="GRADE 1">GRADE 1</option>
                <option value="GRADE 2">GRADE 2</option>
                <option value="GRADE 3">GRADE 3</option>
                <option value="GRADE 4">GRADE 4</option>
                <option value="GRADE 5">GRADE 5</option>
                <option value="GRADE 6">GRADE 6</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label>Section</label>
              <select name="section" id="section" class="form-control">
                <option value="section">[fetch from database]</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label>Adviser</label>
              <input class="form-control" type="text" name="adviser" id="adviser"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-3">
              <label>Father First Name</label>
              <input class="form-control" type="text" name="faFirstName" id="faFirstName"/>
            </div>
            <div class="form-group col-3">
              <label>Father Last Name</label>
              <input class="form-control" type="text" name="faLastName" id="faLastName"/>
            </div>
            <div class="form-group col-3">
              <label>Father Mobile No.</label>
              <input class="form-control" type="text" name="faMobile" id="faMobile"/>
            </div>
            <div class="form-group col-3">
              <label>Father Email Address</label>
              <input class="form-control" type="email" name="faEmail" id="faEmail"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-3">
              <label>Mother First Name</label>
              <input class="form-control" type="text" name="moFirstName" id="moFirstName"/>
            </div>
            <div class="form-group col-3">
              <label>Mother Last Name</label>
              <input class="form-control" type="text" name="moLastName" id="moLastName"/>
            </div>
            <div class="form-group col-3">
              <label>Mother Mobile No.</label>
              <input class="form-control" type="text" name="moMobile" id="moMobile"/>
            </div>
            <div class="form-group col-3">
              <label>Mother Email Address</label>
              <input class="form-control" type="email" name="moEmail" id="moEmail"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Guardian Name</label>
              <input class="form-control" type="text" name="guaName" id="guaName"/>
            </div>
            <div class="form-group col-6">
              <label>Guardian Contact No.</label>
              <input class="form-control" type="text" name="guaContact" id="guaContact"/>
            </div>
          </div>

          <input type="hidden" name="student_id" id="student_id" />
          <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- View and edit student information through modal. -->
<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click', '.edit_data', function(){
    var student_id = $(this).attr("id");
    $.ajax({
      url:"StudentFetch.php",
      method:"POST",
      data:{student_id:student_id},
      dataType:"json",
      success:function(data){
        $('#studid').val(data.IDno);
        $('#dateEnr').val(data.dateenrolled);
        $('#status').val(data.studstat);
        $('#surname').val(data.SurName);
        $('#givenname').val(data.GivenName);
        $('#midname').val(data.MiddleName);
        $('#gender').val(data.gender);
        $('#birthdate').val(data.birthdate);
        $('#birthplace').val(data.birthplace);
        $('#address').val(data.studaddress);
        $('#telnum').val(data.homeTelnum);
        $('#mobnum').val(data.mobilenum);
        $('#grdLvl').val(data.gradelvl);
        $('#faFirstName').val(data.faFname);
        $('#faLastName').val(data.falname);
        $('#faMobile').val(data.faMobilenum);
        $('#faEmail').val(data.faEmail);
        $('#moFirstName').val(data.moFname);
        $('#moLastName').val(data.moLname);
        $('#moMobile').val(data.momobilenum);
        $('#moEmail').val(data.moEmail);
        $('#guaName').val(data.guardianName);
        $('#guaContact').val(data.guardianContact);
        $('#student_id').val(data.IDno);
        $('#add_data_Modal').modal('show');
      }
    });
  });

  $('#insert_form').on("submit", function(event){
    event.preventDefault();
    $.ajax({
      url:"StudentUpdate.php",
      method:"POST",
      data:$('#insert_form').serialize(),
      beforeSend:function(){
        $('#update').val("Updating...");
        },
        success:function(data){
          $('#insert_form')[0].reset();
          $('#add_data_Modal').modal('hide');
          $('#studListTable').html(data);
          $('#update').val("Update");
        }
      });
    });
  });
</script>

<!-- Initialize DataTables plugin -->
<script type="text/javascript">
var table = $("#studListTable").DataTable();
$("#searchInput").on("keyup", function() {
  table.search(this.value).draw(); //search/filter functionality using DataTables search API
});
table.destroy(); //for reinitialization

$("#studListTable").DataTable({
  "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
  "bFilter": false, //remove default search/filter
  "destroy": true //for reinitialization
});
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
<!-- DataTables plugin -->
<script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
</body>
</html>
