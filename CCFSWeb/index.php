<?php
	include('server.php');

	if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']){
	  if($_SESSION['TYPE']=='ADMIN'){
	    header('location: Admin/AdminHome.php');
	  }elseif($_SESSION['TYPE']=='REGISTRAR'){
	    header('location: Registrar/RegistrarHome.php');
	  }else{
	    header('location: Accounting/AccountingHome.php');
	  }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CCFS Login</title>
	<link rel="icon" href="Resources/dist/img/CCFS_logo.png" type="image/icon type">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Resources/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Resources/dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="Resources/dist/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50 animated animatedFadeInUp fadeInUp">
				<form class="login100-form validate-form" method="post" class= "forms" action="index.php">
					<img src="Resources/dist/img/CCFS_Logo.png" alt="CCFS Logo" id="ccfs_logo" class="animated animatedFadeInUp fadeInUp" >
					<span class="login100-form-title p-b-33">
						Cypress Christian Foundation School
					</span>


					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" id="enterButton" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						 <input type= "submit" class="btn btn-primary btn-block" name="login_user" value="Login">
					</div>
					<div style="text-align: center; margin-top: 6px; color: red;">
						 <?php include('errors.php'); ?>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	function processForm(e) {
	    if (e.preventDefault) e.preventDefault();

	    var textinput = document.getElementById("enterButton");
	    var searchterm = textinput.value;
	    window.location.assign("index.php" + searchterm)

	    return false; // Block form
	}

	var form = document.getElementById('searchForm');

	if (form.attachEvent) { form.attachEvent("submit", processForm); }
	else { form.addEventListener("submit", processForm); }​
	</script>

<!--===============================================================================================-->
	<script src="Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Resources/vendor/animsition/js/animsition.min.js"></script>
<!--=================================================================ss==============================-->
	<script src="Resources/vendor/bootstrap/js/popper.js"></script>
	<script src="Resources/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Resources/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Resources/vendor/daterangepicker/moment.min.js"></script>
	<script src="Resources/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Resources/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Resources/js/main.js"></script>

</body>
</html>
