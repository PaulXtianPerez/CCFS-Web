<?php
include("CurriculumInsert.php");
?>
<!DOCTYPE html>
<html lang=en>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCFS Student Information System</title>
  <link rel="icon" href="../Resources/dist/img/CCFS_logo.png" type="image/icon type">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="../Resources/width=device-width, initial-scale=1">
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
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/jquery.toast/jquery.toast.min.css"/>
  <link rel="stylesheet" href="../Resources/bootstrap-4.4.1/css/bootstrap.css">
  </head>
  <body>
    <!-- Content Wrapper. Contains page content -->
  <div id="contents">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Curriculum</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <form id="frmBox" class="needs-validation" method="post">
            <!-- Curriculum content -->
            <?php foreach ( $grades as $grade_id => $grade ) {?>
              <input type="hidden" id="inputGradeLevel" name ="grade[<?php echo $grade_id; ?>]" value="<?php echo $grade; ?>">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Create Curriculum for <?php echo $grade; ?></h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-3" id="adding">
                      <label for="subjid"> Subjects: </label>
                      <?php for ($x=1; $x<=5; $x++) { ?>
                      <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                      <br>
                      <?php } ?>
                    </div>
                    <div class="form-group col-3">
                      <label for="subjid"> Subjects: </label>
                      <?php for ($x=6; $x<=10; $x++) { ?>
                      <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                      <br>
                      <?php } ?>
                    </div>
                    <div class="form-group col-3">
                      <label for="subjid"> Subjects: </label>
                      <?php for ($x=11; $x<=15; $x++) { ?>
                      <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                      <br>
                      <?php } ?>
                    </div>
                    <div class="form-group col-3">
                      <label for="subjid"> Subjects: </label>
                      <?php for ($x=16; $x<=20; $x++) { ?>
                      <input class="form-control" id="subject" placeholder="Enter Subject" type="type" name="grade[<?php echo $grade_id; ?>][subject][<?php echo $x; ?>]">
                      <br>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            <div class="row form-inline card-body">
              <div class="form-group col-5">
                <label for="curid">Curriculum Name: </label>
                <input class="form-control" id="inputCurriculumID" placeholder="Enter Curriculum Name" type="text" name="curname" min="0" required style="margin-left: 10px;">
              </div>

              <div class="form-group col-3" style="display:none;">
                <label for="yearid">School Year:</label>
                <?php
                  $query2 = "Select yearid from schoolyear where scstatus = 'ACTIVE'";
                  $result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
                ?>
                <select name="yearid" class="form-control" style="margin-left: 10px;">
                  <?php while ($row2 = mysqli_fetch_array($result2)):;?>
                  <option name = "yearid" type = "hidden" class="form-control"><?php echo $row2[0];?></option>
                  <?php endwhile;?>
                </select>
              </div>
              <div class="form-group col-3">
                <input type="submit" name="submit" class="btn btn-success" value="Create" style="margin-left: 10px;"/>
                <b><p id="success" style="text-align:center; font-size:22px;"></p></b>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>


<!--Submit form.-->
<script type="text/javascript">
$(document).ready(function(){
  $('#frmBox').on("submit", function(event){
    event.preventDefault();
    var curname = $("#inputCurriculumID").val();
    var submit = $('input[name=submit]').val();
    var inputGradeLevel = $("#inputGradeLevel").val();
    bootbox.confirm({
    	message: "Create curriculum " +curname+ "?",
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
          url: "CurriculumInsert.php",
          data: $("#frmBox").serialize(), //{submit:submit, inputGradeLevel:inputGradeLevel}
          success: function(response){
            $("#success").html(response);
            if(response.includes("Successfully created a new curriculum.")){
              document.getElementById("frmBox").reset();
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
                text: "<span style='font-size:15px;'><i class=\"fa fa-exclamation-circle\"></i> Failed to create curriculum.</span>", // Text that is to be shown in the toast
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


<!--===============================================================================================-->
	<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--Bootbox library for dialog box.-->
	<script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
<!-- jquery toast -->
  <script src="../Resources/plugins/jquery.toast/jquery.toast.min.js" type="text/javascript"></script>
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
