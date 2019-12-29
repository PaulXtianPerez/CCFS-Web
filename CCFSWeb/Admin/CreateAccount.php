<?php include 'database.php'; ?>
<?php 
	if(isset($_POST['submit'])){
		
		

		
		$query = "INSERT INTO `accounts`(empid, username, password, fname, lname, type) values ('$_POST[empid]', '$_POST[username]', '$_POST[password]', '$_POST[fname]', '$_POST[lname]', '$_POST[type]')";
		
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		


	$message = 'Account have been added';
	
	}
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Account</title>

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../Resources/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Resources/dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<body class="hold-transition register-page">
<div class="register-box">

  <div class="card">
  	    <img src="../Resources/dist/img/CCFS_Logo.png" alt="CCFS Logo" id="ccfs_logoAcc" class="animated animatedFadeInUp fadeInUp" >
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new account</p>

      <form method="post" action="CreateAccount.php">
        <div class="input-group mb-3">
          <input type= "text" name ="empid" class="form-control" placeholder="Employee ID" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-badge"></span>
            </div>
          </div>
        </div>
            <div class="form-group col-6">
              <select name="type" id="type" class="form-control">
                <option value="Registrar">Registrar</option>
                <option value="Accounting">Accounting</option>
              </select>
            </div>
        <div class="input-group mb-3">
          <input type= "text" name ="fname" class="form-control" placeholder="First Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type= "text" name ="lname" class="form-control" placeholder="Last Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type= "text" name ="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type= "password" name ="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <input input type = "submit" name = "submit" value = "Create" min = "0" class="btn btn-success"/>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!--
					<div class="wrap-input100 validate-input" data-validate="Employee ID is required">
						<input class="input100" type="text" name="username" placeholder="Employee ID">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Account Type is Required">
						<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registrar
						</button>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="First name is required">
						<input class="input100" type="text" name="firstName" placeholder="Full Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Last name is required">
						<input class="input100" type="text" name="lastName" placeholder="Full Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
				-->
			</div>
		</div>
	</div>

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

<!--===============================================================================================-->
	<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Resources/vendor/animsition/js/animsition.min.js"></script>
<!--=================================================================ss==============================-->
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
