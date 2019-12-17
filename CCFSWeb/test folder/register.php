<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<title>Registation page</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel= "stylesheet" href="../css/register.style.css"/>
		<link rel= "stylesheet" href="../css/font.css"/>
		<link rel="stylesheet" href="../fontawesome/css/all.min.css">
	</head>


  <body>
 
	<div class = "container">
	
		<div class = "row">
			<div class="col-lg-3"></div>
			
			<div class="col-lg-6">
				<div class="modal-content">
				<h1> Registration Form </h1>
					    <form method = "post" class="forms" action="register.php">
		   <?php include('errors.php'); ?>
					
						<div class="row">
							<div class="col-lg-6">
								<label>ID number:</label>
								<input type = "text" name="username" class="form-control" placeholder ="user name"/>
								<label>Firstname:</label>
								<input type = "text" name="firstname" class="form-control" placeholder ="First Name"/>
								<label>Lastname:</label>
								<input type = "text" name="lastname" class="form-control" placeholder ="Last Name"/>
								</div>

						</div>

							<label>Email address</label>
								 <input type = "email" class="form-control"name="email" placeholder ="email id"/>
								 
								
						<div class="row">

							<div class="col-lg-6">
								<label for="exampleInputEmail1">Password</label>
								 <input type = "password" class="form-control"name="password_1" placeholder ="password"/>
							</div>
							<div class="col-lg-6">
								<label for="exampleInputEmail1">Re-type Password</label>
								 <input type = "password" class="form-control"name="password_2" placeholder ="confirm password"/>
							</div>
						</div>
						<br>
						 <button type ="submit" class="btn btn-primary btn-block btn-large" name="reg_user">Create </button>
      <p class = "message"> Already Registered?<a href = "login.php">Login</a>
      </p>
						
					</form>
			</div>

		</div>
	</div>

  </body>
</html>