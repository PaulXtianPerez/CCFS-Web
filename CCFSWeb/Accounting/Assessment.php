<html>
<head>
  <!-- Open new page -->
  <script src="../Resources/js/displaypage.js"></script>
  <!-- jQuery -->
  <script src="../Resources/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!--Bootbox library for dialog box.-->
  <script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
</head>
<body>
  <div class="Balance">
  <div class="searchID">
    <form method="post" id="poll_form" onsubmit="return formSubmit();">
      <input type="submit" name="create" class="btn btn-success create" value="Create Assessment"/>
      <b><p id="success" style="text-align:center; color:#0AC02A; font-size:22px;"></p></b>
    </form>
  </div>
  </div>


  <!--Submit form.-->
  <script type="text/javascript">
  function formSubmit(){
  	bootbox.confirm({
  		message: "Create assessment?",
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
  				url: "AssessmentAction.php",
  				data: $("#poll_form").serialize(),
  				success: function(response){
  					$("#success").html("<i class=\"fa fa-check-circle\"></i> Successfully created assessment.");
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
