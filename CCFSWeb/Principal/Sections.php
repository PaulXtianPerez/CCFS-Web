<?php
// connect to database
include("database.php");
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
  <!-- jQuery -->
  <script type="text/javascript" language="javascript" src="../Resources/plugins/jquery/jquery.js"></script>
  <!-- CSS for DataTables plugin-->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
  <!-- DataTables plugin-->
  <script type="text/javascript" language="javascript" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
  <!-- JQuery Inline Table Editor Plugin -->
  <script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
  <script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/jquery.toast/jquery.toast.min.css"/>
  <link rel="stylesheet" href="../Resources/bootstrap-4.4.1/css/bootstrap.css">
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
                <div class="form-group col-4">
                  <button data-toggle="collapse" data-target="#insert_form"><p><b>Create New Section: <span class="fas fa-angle-down"></span></b></p></button>
                </div>
                <!-- Form for creating new section. -->
                <form id="insert_form" class="needs-validation collapse" method="post">
                  <div class="input-group">
                    <div class="form-group col-3">
                      <div class="input-group mb-3">
                        <select name="gradelvl" id="gradelvl" class="form-control" required>
                          <option value="" disabled selected>Select Grade Level</option>
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
                    <div class="form-group col-3">
                      <div class="input-group mb-3" class="validate-input" data-validate="Section name is required">
                        <input type="text" name="sename" id="sename" class="form-control" placeholder="Enter Section Name" maxlength="40" required/>
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-id-badge"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-4">
                      <div class="input-group mb-3">
                        <input type="text" name="advname" id="advname" class="form-control" placeholder="Enter Adviser Name" maxlength="40" required/>
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-user-circle"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-2">
                      <input type="submit" name="submit" value="Create" class="btn btn-success"/>
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
                  </div><hr>
                </form>
              </div>

              <div class="card-body">
                <table id="secListTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th width="40%">Section Name</th>
                      <th>Adviser Name (<i>Click to edit</i>)</th>
                      <th width="5%"></th>
                    </tr>
                  </thead>
                  </table>
                </div> <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


<!-- Initialize DataTables plugin -->
<script type="text/javascript" language="javascript">
$(document).ready(function(){
  var dataTable = $('#secListTable').DataTable({
    "processing": true,
    "serverSide": true,
    "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
    //"bFilter": false, //remove default search/filter
    "ajax":{
      url: "SectionTableData.php", // json datasource
      type: "post",  // method  , by default get
      error: function(){  // error handling
        $(".table-grid-error").html("");
        $("#secListTable").append('<tbody class="table-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
        $("#secListTable_processing").css("display","none");
        }
      }
  });
});
</script>

<!--  Edit and delete data -->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  function update_data(id, column_name, value){
    $.ajax({
      url:"SectionUpdate.php",
      method:"POST",
      data:{id:id, column_name:column_name, value:value},
      success:function(response){
        if(response.includes("Update failed.")){
          $.toast({
            text: response, // Text that is to be shown in the toast
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: false, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            bgColor: '#FF0004',  // Background color of the toast
            textColor: '#ffffff',  // Text color of the toast
            textAlign: 'center',  // Text alignment i.e. left, right or center
            loader: false,  // Whether to show loader or not. True by default
          });
        } else {
          $('#secListTable').DataTable().ajax.reload();
          $.toast({
            text: response, // Text that is to be shown in the toast
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            bgColor: '#00753a',  // Background color of the toast
            textColor: '#ffffff',  // Text color of the toast
            textAlign: 'center',  // Text alignment i.e. left, right or center
            loader: true,  // Whether to show loader or not. True by default
            loaderBg: '#9EC600',  // Background color of the toast loader
          });
        }
      }
    });
  }

  $(document).on('blur', '.update', function(){
    var id = $(this).data("id");
    var column_name = $(this).data("column");
    var value = $(this).text();
    if(value != ''){
      update_data(id, column_name, value);
    } else {
      $('#secListTable').DataTable().ajax.reload();
      $.toast({
        text: "<span style='font-size:15px;'><i class='fas fa-exclamation-circle'></i> Adviser name is required.</span>", // Text that is to be shown in the toast
        showHideTransition: 'plain', // fade, slide or plain
        allowToastClose: true, // Boolean value true or false
        hideAfter: false, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
        stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
        position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
        bgColor: '#FF0004',  // Background color of the toast
        textColor: '#ffffff',  // Text color of the toast
        textAlign: 'center',  // Text alignment i.e. left, right or center
        loader: false,  // Whether to show loader or not. True by default
      });
    }
  });

  $(document).on('click', '.delete', function(){
    var id = $(this).attr("id");
    var del = $('button[name=delete]').val();

    bootbox.confirm({
   		message: "Are you sure you want to delete this section?",
      centerVertical: true,
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
   				url: "SectionUpdate.php",
          method: "POST",
          data:{id:id, del:del},
   				success: function(response){
            if(response.includes("Delete failed.")){
              $.toast({
                text: response, // Text that is to be shown in the toast
                showHideTransition: 'plain', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: false, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                bgColor: '#FF0004',  // Background color of the toast
                textColor: '#ffffff',  // Text color of the toast
                textAlign: 'center',  // Text alignment i.e. left, right or center
                loader: false,  // Whether to show loader or not. True by default
              });
            } else {
     					$('#secListTable').DataTable().ajax.reload();
              $.toast({
                text: response, // Text that is to be shown in the toast
                showHideTransition: 'plain', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                bgColor: '#00753a',  // Background color of the toast
                textColor: '#ffffff',  // Text color of the toast
                textAlign: 'center',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#9EC600',  // Background color of the toast loader
              });
            }
   				}
   			});
   		}
   	}
  });
});
});
</script>

<!-- Submit form. -->
<script type="text/javascript">
$('#insert_form').on("submit", function(event){
  event.preventDefault();
  var secname = document.getElementById("sename").value;
	bootbox.confirm({
		message: "Create section " +secname+ "?",
    centerVertical: true,
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
          if(response.includes("Failed to create a new section.")){
            $.toast({
              text: response, // Text that is to be shown in the toast
              showHideTransition: 'plain', // fade, slide or plain
              allowToastClose: true, // Boolean value true or false
              hideAfter: false, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
              stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
              position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
              bgColor: '#FF0004',  // Background color of the toast
              textColor: '#ffffff',  // Text color of the toast
              textAlign: 'center',  // Text alignment i.e. left, right or center
              loader: false,  // Whether to show loader or not. True by default
            });
          } else {
            $('#insert_form')[0].reset();
  					$('#secListTable').DataTable().ajax.reload();
            $.toast({
              text: response, // Text that is to be shown in the toast
              showHideTransition: 'plain', // fade, slide or plain
              allowToastClose: true, // Boolean value true or false
              hideAfter: 10000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
              stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
              position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
              bgColor: '#00753a',  // Background color of the toast
              textColor: '#ffffff',  // Text color of the toast
              textAlign: 'center',  // Text alignment i.e. left, right or center
              loader: true,  // Whether to show loader or not. True by default
              loaderBg: '#9EC600',  // Background color of the toast loader
            });
          }
				}
			});
		}
	}
	});
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


<!-- jQuery UI 1.11.4 -->
<script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!--Bootbox library for dialog box.-->
<script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
<!-- jquery toast -->
<script src="../Resources/plugins/jquery.toast/jquery.toast.min.js" type="text/javascript"></script>
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
