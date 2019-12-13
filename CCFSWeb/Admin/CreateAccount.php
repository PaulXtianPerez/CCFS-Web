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

	<div>
		<!--<div class="container-login100"> -->
		<div>
			<div>
				<form class="login100-form validate-form" action="CreateAccount.php">
					<span class="login100-form-title p-b-33">
						Create Account
					</span>
					<div class="wrap-input100 validate-input">
						Account Type:
						<select>
							<option value="ACCOUNTING">ACCOUNTING</option>
							<option value="REGISTRAR">REGISTRAR</option>
						</select><br>
					</div>
					<div class="wrap-input100 validate-input" data-validate="REQUIRED!">
					Employee ID:
					<input class="input100" type="text" name="empid"><br>
				</div>
				<div class="wrap-input100 validate-input">
					First Name:
					<input class="input100" type="text" name="firstname"><br>
				</div>
				<div class="wrap-input100 validate-input">
					Last Name:
					<input class="input100" type="text" name="lastname"><br>
				</div>
				<div class="wrap-input100 validate-input">
					Username:
					<input class="input100" type="text" name="username"><br>
				</div>
				<div class="wrap-input100 validate-input">
					Password:
					<input class="input100" type="password" name="psw"><br>
				</div>
					<div class="wrap-input100 validate-input">
					Confirm Password:
					<input class="input100" type="password" name="confpsw"><br>
					</div>
					<div class="container-login100-form-btn m-t-20">
					<input type="submit" value="Create">
				</div>
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
