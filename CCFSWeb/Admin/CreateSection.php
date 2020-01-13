<?php include 'database.php'; ?>
<?php 
	if(isset($_POST['submit'])){
		
		

		
		$query = "INSERT INTO `section`(sename, gradelvl, adviserlname, yearid) values ('$_POST[sename]', '$_POST[gradelvl]', '$_POST[adviserlname]', '$_POST[yearid]')";
		
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		


	$message = 'Section have been added';
	
	}
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Section Creation</title>
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
    	<div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Section</h1>
            	<?php if(isset($message)){
			echo '<p>' .$message.'</p>';

	}else {}?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <div class="container-fluid">
		<!-- Start of Create Account Card -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Fill up the fields below.</h3>
				</div>
				<div class="card-body">
					<form id="frmBox" class="needs-validation" method="post" action="CreateSection.php" onsubmit="return formSubmit();">
						<div class="row">
	            <div class="form-group col-6">
								<label>Section name</label>
								<div class="input-group mb-3">
		              <input type="text" name="sename" id="sename" class="form-control" placeholder="Enter Section Name" onkeyup="checkname();" minlength="2" maxlength="45" required/>
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
									<select name="gradelvl" id="type" class="form-control">
										<option value="Registrar">Nursery</option>
										<option value="Accounting">Pre-Kinder</option>
										<option value="Registrar">Kinder</option>
										<option value="Accounting">Grade 1</option>
										<option value="Registrar">Grade 2</option>
										<option value="Accounting">Grade 3</option>
										<option value="Registrar">Grade 4</option>
										<option value="Accounting">Grade 5</option>
										<option value="Registrar">Grade 6</option>
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
								<label>Adviser Last Name</label>
								<?php $query1 = "Select lname from accounts";
								$result = $mysqli->query($query1) or die($mysqli->error.__LINE__);
								?>	
								<div class="input-group mb-3">
								<select name="adviserlname" id="type" class="form-control">
								<?php while ($row1 = mysqli_fetch_array($result)):;?>
								<option name = "adviserlname"><?php echo $row1[0];?></option>
								<?php endwhile;?>
								</select>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-user-circle"></span>
										</div>
									</div>
								</div>
	            </div>
							<div class="form-group col-6">
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
				</div>
			</div>
		</div>
	</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



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
<!-- <script type="text/javascript">
function formSubmit(){
	bootbox.confirm({
		message: "Create Section?",
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
				data: $("#frmBox").serialize(),
				success: function(response){
					$("#success").html(response);
					if(response.includes("Successfully created a new section.")){
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
</script> -->

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
