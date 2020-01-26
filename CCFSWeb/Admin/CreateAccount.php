<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create Account</title>
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

</head>
<body class="hold-transition register-page">

<div id="contents" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Account</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Start of Create Account Card -->
    		    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fill up the fields below.</h3>
    				  </div>
              <div class="card-body">
      					<form id="frmBox" class="needs-validation" method="post" action="AccountInsert.php" onsubmit="return formSubmit();">
      						<div class="row">
      	            <div class="form-group col-6">
      								<label>Employee ID</label>
      								<div class="input-group mb-3">
      		              <input type="text" name="empid" id="empid" class="form-control" placeholder="Employee ID" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-id-badge"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      							<div class="form-group col-6">
      								<label>Account Type</label>
      								<div class="input-group mb-3">
      									<select name="type" id="type" class="form-control">
                          <option value="ADMIN">Admin</option>
      										<option value="REGISTRAR">Registrar</option>
      										<option value="ACCOUNTING">Accounting</option>
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
      	            <div class="form-group col-6">
      								<label>First Name</label>
      								<div class="input-group mb-3">
      									<input type= "text" name="fname" id="fname" class="form-control" placeholder="First Name" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-user-circle"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      							<div class="form-group col-6">
      								<label>Last Name</label>
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
      						<div class="row">
      	            <div class="form-group col-6">
      								<label>Username</label>
      								<div class="input-group mb-3">
      									<input type= "text" name="username" id="username" class="form-control" placeholder="Username" onkeyup="checkname();" minlength="2" maxlength="45" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-user"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      							<div class="form-group col-6">
      								<br><b><p id="availability" style="font-size:18px;"></p></b>
      	            </div>
      	          </div>
      						<div class="row">
      	            <div class="form-group col-6">
      								<label>Password</label>
      								<div class="input-group mb-3">
      									<input type="password" name="password" id="password" class="form-control" placeholder="Password" minlength="6"  maxlength="16" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-lock"></span>
      										</div>
      									</div>
      								</div>
      	            </div>
      							<div class="form-group col-6">
      								<label>Confirm Password</label>
      								<div class="input-group mb-3">
      									<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" minlength="6"  maxlength="16" required/>
      									<div class="input-group-append">
      										<div class="input-group-text">
      											<span class="fas fa-lock"></span>
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
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>
  </div>
</div>


<!-- Username validation. -->
<script type="text/javascript">
function checkname(){
	var name = document.getElementById("username").value;

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

<!-- Password validation. -->
<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<!--Submit form.-->
<script type="text/javascript">
function formSubmit(){
	bootbox.confirm({
		message: "Create account?",
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
				data: $("#frmBox").serialize(),
				success: function(response){
					$("#success").html(response);
					if(response.includes("Successfully created a new account.")){
						document.getElementById("frmBox").reset();
						$('#availability').html("");
					}
				}
			});
		}
	}
	});
	return false;
}
</script>

<!--===============================================================================================-->
	<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--Bootbox library for dialog box.-->
	<script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/bootstrap/js/popper.js"></script>
	<script src="../Resources/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Resources/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/js/main.js"></script>

</body>
</html>
