<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Login page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel= "stylesheet" href="../css/login.style.css"/>
    <link rel= "stylesheet" href="../css/font.css"/>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
  </head>
 
  <body>

        
        <!-- Form start here -->
      <form method="post" class= "forms" action="login.php">
        <?php include('errors.php'); ?>
          <h1>User Login</h1>
          <br>
          <!-- Input Username -->
          <div class="form-group">
              <input type = "text" name="username" class="form-control" placeholder ="user name"/>
          </div>
          <!-- Input Password -->
          <div class="form-group">
            <input type = "password" name="password" class="form-control" placeholder ="password"/>
          </div>             
 
            <input type= "submit" class="btn btn-primary btn-block" name="login_user" value="login">
      <p class = "message">
        Not registered?<a href="register.php">Register</a>
      </p>
    </div>   
        </form>

      
  </body>
</html>