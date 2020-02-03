<?php
// connect to database
include("database.php");
// mysql select query
$query = "SELECT * FROM `section` WHERE yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE')";
// result for method
$result = mysqli_query($mysqli, $query);
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
  <!-- DataTables plugin -->
  <script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
  <!-- JQuery Inline Table Editor Plugin -->
  <script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
  <script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>
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
            <h1 class="m-0 text-dark">Class Sections</h1>
            <h5>School Year: <?php include("../ActiveSchoolYear.php"); ?></h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div>
                  <!-- SEARCH FORM -->
                  <form class="form-inline">
                    <div class="input-group input-group-sm">
                      <input id="searchInput" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"/>
                    </div>
                  </form>
                </div>
              </div> <!-- /.card-header -->
              <div>
                <button type="button" name="section" id="section" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info" style="float:right; margin-top:5px; margin-right:20px;">Create Section</button>
              </div>
              <div class="card-body">
                <table id="secListTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="display:none;">Section ID</th>
                      <th width="40%">Section Name</th>
                      <th>Adviser Name</th>
                    </tr>
                  </thead>
                   <tbody> <!-- Populate from database. -->
                      <?php while($row = mysqli_fetch_array($result)):;?>
                        <tr>
                          <td style="display:none;"><?php echo $row["secID"];?></td>
                          <td><?php echo trim( str_replace( 'Grade', '', $row["gradelvl"] ) ) . " - " . $row["sename"];?></td>
                          <td><?php echo $row["adviserlname"];?></td>
                        </tr>
                      <?php endwhile;?>
                    </tbody>
                  </table>
                </div> <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

<!-- Modal for creating a new section. -->
<div id="add_data_Modal" class="modal fade">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Section</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="insert_form" class="needs-validation" method="post">
          <div class="row">
            <div class="form-group col-6">
              <label>Section Name</label>
              <div class="input-group mb-3" class="validate-input" data-validate="Section name is required">
                <input type="text" name="sename" id="sename" class="form-control" placeholder="Enter Section Name" maxlength="40" required/>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-id-badge"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group col-6">
              <label>Grade Level</label>
              <div class="input-group mb-3">
                <select name="gradelvl" id="gradelvl" class="form-control">
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
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-users"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label>Adviser Name</label>
              <div class="input-group mb-3">
                <input type="text" name="advname" id="advname" class="form-control" placeholder="Enter Adviser Name" maxlength="40" required/>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user-circle"></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="form-group col-6" style="display:none">
                <label>School Year</label>
                <?php $query2 = "Select yearid from schoolyear where scstatus = 'ACTIVE'";
                $result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
                ?>
                <div class="input-group mb-3">
                <select name = "yearid" type = "hidden" class="form-control" >
                    <?php while ($row2 = mysqli_fetch_array($result2)):;?>
                    <option name = "yearid" type = "hidden"><?php echo $row2[0];?></option>
                    <?php endwhile;?>
                    </select>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-calendar"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-4">
                <input type="submit" name="submit" value="Create" min="0" class="btn btn-success"/>
              </div>
              <!-- /.col -->
            </div>
            <b><p id="success" style="text-align:center; font-size:22px;"></p></b>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Submit form.-->
<script type="text/javascript">
$('#insert_form').on("submit", function(event){
  event.preventDefault();
  var secname = document.getElementById("sename").value;
	bootbox.confirm({
		message: "Create section " +secname+ "?",
		buttons: {
			confirm: {
        label: "Yes",
        className: "btn-success"
    },
    cancel: {
        label: "No",
        className: "btn-danger"
    }
	},
	callback: function(result){
		if(result){
			$.ajax({
				type: "POST",
				url: "SectionInsert.php",
				data: $("#insert_form").serialize(),
				success: function(response){
          $('#insert_form')[0].reset();
					$("#success").html(response);
            $("#add_data_Modal").on("hidden.bs.modal", function () {
              location.reload();
            });
					}
			});
		}
	}
	});
});
</script>

<!-- Initialize DataTables plugin -->
<script type="text/javascript">
var table = $("#secListTable").DataTable();
$("#searchInput").on("keyup", function() {
  table.search(this.value).draw(); //search/filter functionality using DataTables search API
});
table.destroy(); //for reinitialization

$("#secListTable").DataTable({
  "paging": false, //remove pagination
  "bFilter": false, //remove default search/filter
  "destroy": true //for reinitialization
});
</script>

<!--Tabledit-->
<script type="text/javascript">
$('#secListTable').Tabledit({
  url: 'SectionUpdate.php',
  buttons: {
     edit: {
         class: 'btn btn-info btn-xs edit_data',
         html: '<span data-toggle="tooltip" title="Edit adviser"><i class="fas fa-edit" aria-hidden="true"></i></span>',
         action: 'edit'
     },
     delete: {
         class: 'btn btn-danger btn-xs edit_data',
         html: '<span data-toggle="tooltip" title="Delete section"><i class="fas fa-trash" aria-hidden="true"></i></span>',
         action: 'delete'
       },
     },
  columns: {
      identifier: [0, 'secID'],
      editable: [[2, 'adviserlname']]
  },
  onSuccess:function(data, textStatus, jqXHR){
   if(data.action == 'delete'){
     $('#'+data.id).remove();
   }
 },
  //Prevent empty field
  onAjax: function(action, data, serialize){
    console.log('onAjax(action, serialize)');
    console.log(action);
    console.log(serialize);

    if (action === 'edit'){
      var values_1 = data.split('&');
      var id_1 = values_1[0];
      var notes_1 = values_1[1];

      var values_2 = notes_1.split('=');
      var notes_2 = values_2[1];

      if (notes_2 === ""){
        return false;
      } else {
        return true;
      }
    }
  }
});
</script>

<!--Force capitalize inputs-->
<script type="text/javascript">
function forceKeyPressUppercase(e){
  var charInput = e.keyCode;
  if((charInput >= 97) && (charInput <= 122)) { // lowercase
    if(!e.ctrlKey && !e.metaKey && !e.altKey) { // no modifier key
      var newChar = charInput - 32;
      var start = e.target.selectionStart;
      var end = e.target.selectionEnd;
      e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
      e.target.setSelectionRange(start+1, start+1);
      e.preventDefault();
    }
  }
}
var capsFields = document.getElementsByTagName("input");
for (i = 0; i < capsFields.length; i++) {
    capsFields[i].addEventListener("keypress", forceKeyPressUppercase, false);
}
</script>


<!-- jQuery -->
<script src="../Resources/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!--Bootbox library for dialog box.-->
<script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
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
