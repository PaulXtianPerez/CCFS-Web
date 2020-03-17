<?php
include("server.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CCFS Student Information System</title>
    <link rel="icon" href="Resources/dist/img/CCFS_logo.png" type="image/icon type">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Resources/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Resources/dist/css/main.css">
    <link rel="stylesheet" href="Resources/bootstrap-4.4.1/css/bootstrap.css">
  </head>
  <body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
        <div class="input-group">
          <div class="info col-12">
            <div class="user-panel">
              <a class="d-block" style="font-size:20px; color:black!important;" tabindex="-1"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION['USERNAME']; ?></a>
                  <?php  if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == true ) : ?>
               <i class="fa fa-cogs" aria-hidden="true"></i><a style="font-size:15px;color:black!important;" tabindex="-1" href="logout.php"> Log Out<?php endif ?></a>
            </div>
          </div>
        </div><br>

        <form method="post" id="frmBox" class="forms" action="ChangePasswordAction.php">
          <div class="input-group">
            <div class="col-12">
              <p>You are using the default password. Please change your password to continue.</p>
            </div>
            <div class="col-12">
              <label>New Password</label>
              <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="New password" minlength="6" maxlength="16" required/>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="input-group">
            <div class="col-12">
              <label>Confirm New Password</label>
              <div class="input-group mb-3">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password" minlength="6" maxlength="16" required/>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="input-group">
            <div class="col-4">
              <input type="submit" name="savePasswd" value="Save" class="btn btn-primary"/>
            </div>
          </div>
        </form><br>

      </div>
    </div>
  </div>


  <!-- Password validation. -->
  <script type="text/javascript">
  var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirmPassword");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("The passwords don't match.");
    } else if(password.value == "ccfs2020") {
      password.setCustomValidity("New password cannot be the same as the default password.");
    } else {
      confirm_password.setCustomValidity('');
    }
  }
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
  </script>

  <!--===============================================================================================-->
  	<script src="Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="Resources/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
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
