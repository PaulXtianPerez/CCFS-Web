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
            <h1 class="m-0 text-dark">User Accounts</h1>
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
              </div>
              <!-- /.card-header -->

              <div>
                <div class="form-group col-4">
                  <button data-toggle="collapse" data-target="#insert_form"><p><b>Create New Account: <span class="fas fa-angle-down"></span></b></p></button>
                </div>
                <!-- Form for creating new account. -->
                <form id="insert_form" class="needs-validation collapse" method="post" action="AccountInsert.php" onsubmit="return formSubmit();">
                  <div class="input-group">

      							<div class="form-group col-3">
      								<div class="input-group mb-3">
      									<select name="acctype" id="acctype" class="form-control" required>
                          <option value="" disabled selected>Select Account Type</option>
                          <option value="PRINCIPAL">Principal</option>
      										<option value="REGISTRAR">Registrar</option>
      										<option value="ACCOUNTING">Accounting</option>
                          <option value="TEACHER">Teacher</option>
      									</select>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-users"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
                    <div class="form-group col-3">
      								<div class="input-group mb-3">
      		              <input type="text" name="emplyid" id="emplyid" class="form-control" placeholder="Employee ID" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-id-badge"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
                    <div class="form-group col-3">
      								<div class="input-group mb-3">
      									<input type= "text" name="fname" id="fname" class="form-control" placeholder="First Name" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-user-circle"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      							<div class="form-group col-3">
      								<div class="input-group mb-3">
      									<input type= "text" name="lname" id="lname" class="form-control" placeholder="Last Name" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-user-circle"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      	          </div>
      						<div class="input-group">
      	            <div class="form-group col-3">
      								<div class="input-group mb-3">
      									<input type= "text" name="uname" id="uname" class="form-control" placeholder="Username" onkeyup="checkname();" minlength="2" maxlength="45" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-user"></span>&nbsp;
                            <span id="availability"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
                    <div class="form-group col-2">
                      <input type="submit" name="submit" value="Create" class="btn btn-success"/>
                    </div>
      	          </div><hr>
                </form>
              </div>

              <div class="card-body">
                <table id="accListTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Account ID</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Account Type</th>
                      <th>Status</th>
                      <th>Password</th>
                      <th></th>
                    </tr>
                  </thead>
                </table>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
</div><!-- ./wrapper -->

<!-- Modal to display account information. -->
<div id="add_data_Modal" class="modal fade" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Account Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" id="update_form">
          <div class="row">
            <div class="form-group col-6">
              <label>Account ID</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="accid" id="accid" disabled/>
            </div>
            <div class="form-group col-6">
              <label>Employee ID</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="empid" id="empid" disabled/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>First Name</label>
              <input class="form-control" type="text" name="firstname" id="firstname" required/>
            </div>
            <div class="form-group col-6">
              <label>Last Name</label>
              <input class="form-control" type="text" name="lastname" id="lastname" required/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Username</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="text" name="username" id="username" class="form-control" disabled/>
            </div>
            <div class="form-group col-6">
              <label>Account Type</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="text" name="type" id="type" class="form-control" disabled/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-6">
              <label>Date/Time Created</label> <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control" type="text" name="dtme" id="dtme" disabled/>
            </div>
            <div class="form-group col-6">
              <label>Change Account Status</label>
              <select name="status" id="status" class="form-control">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
              </select>
            </div>
          </div>
          <div class="input-group">
            <input type="hidden" name="account_id" id="account_id" />
            <input type="submit" name="update" id="update" value="Save Changes" class="btn btn-success" />
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Initialize DataTables plugin -->
<script type="text/javascript" language="javascript">
$(document).ready(function(){
  var dataTable = $('#accListTable').DataTable({
    "processing": true,
    "serverSide": true,
    "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
    //"bFilter": false, //remove default search/filter
    "ajax":{
      url: "AccountTableData.php", // json datasource
      type: "post",  // method  , by default get
      error: function(){  // error handling
        $(".table-grid-error").html("");
        $("#accListTable").append('<tbody class="table-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
        $("#accListTable_processing").css("display","none");
        }
      }
  });
});
</script>

<!-- Username validation. -->
<script type="text/javascript">
function checkname(){
	var name = document.getElementById("uname").value;

	if(name){
		$.ajax({
			type: "POST",
			url: "CheckUsername.php",
			data: {
				user_name:name,
			},
			success: function(response){
				$("#availability").html(response);
			}
		});
	} else {
		$("#availability").html("");
		return false;
	}
}
</script>

<!-- Submit create account form. -->
<script type="text/javascript">
function formSubmit(){
	bootbox.confirm({
		message: "Create user account?",
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
				url: "AccountInsert.php",
				data: $("#insert_form").serialize(),
				success: function(response){
					if(response.includes("Failed to create a new account.")){
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
						$('#availability').html("");
            $('#accListTable').DataTable().ajax.reload();
            $.toast({
              text: "<span style='font-size:15px;'><i class=\"fa fa-check-circle\"></i> Successfully created a new account.</span>", // Text that is to be shown in the toast
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
	return false;
}
</script>

<!-- Initialize DataTables plugin
<script type="text/javascript">
var table = $("#accListTable").DataTable();
$("#searchInput").on("keyup", function() {
  table.search(this.value).draw(); //search/filter functionality using DataTables search API
});
table.destroy(); //for reinitialization

$("#accListTable").DataTable({
  "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
  "bFilter": false, //remove default search/filter
  "destroy": true //for reinitialization
});
</script>-->

<!-- View and edit account information through modal. -->
<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click', '.edit_data', function(){
    var account_id = $(this).attr("id");
    $.ajax({
      url:"AccountFetch.php",
      method:"POST",
      data:{account_id:account_id},
      dataType:"json",
      success:function(data){
        $('#accid').val(data.accid);
        $('#empid').val(data.empid);
        $('#firstname').val(data.fname);
        $('#lastname').val(data.lname);
        $('#username').val(data.username);
        $('#type').val(data.type);
        $('#status').val(data.accstatus);
        $('#dtme').val(data.created);
        $('#account_id').val(data.accid);
        $('#add_data_Modal').modal('show');
      }
    });
  });

  $('#update_form').on("submit", function(event){
    event.preventDefault();
    bootbox.confirm({
    	message: "Are you sure you want to save any changes made to this account?",
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
            url:"AccountUpdate.php",
            method:"POST",
            data:$('#update_form').serialize(),
            beforeSend:function(){
              $('#update').val("Updating...");
            },
            success:function(data){
              if(data.includes("Account updated.")){
                $('#update').val("Save Changes");
                $.toast({
                  text: data, // Text that is to be shown in the toast
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
                $("#add_data_Modal").on("hidden.bs.modal", function(){
                  $('#accListTable').DataTable().ajax.reload();
                });
              } else {
                $.toast({
                  text: data, // Text that is to be shown in the toast
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
            }
          });
        }
      }
    });
  });
});
</script>

<!-- Reset password -->
<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click', '.reset_data', function(){
    var reset = $('input[name=reset]').val();
    var account_id = $(this).attr("id");
    bootbox.confirm({
    	message: "Are you sure you want to reset this account's password?",
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
            url:"AccountUpdate.php",
            method:"POST",
            data:{reset:reset, account_id:account_id},
            success:function(response){
              if(response.includes("successful")) {
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
              } else {
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
              }
            }
          });
        }
      }
    });
  });
});
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
