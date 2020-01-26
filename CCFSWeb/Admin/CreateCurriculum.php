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
            <form id="frmBox" class="needs-validation" method="post" action="CurriculumInsert.php" onsubmit="return formSubmit();">
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
                <input class="form-control" id="inputCurriculumID" placeholder="Enter Curriculum Name" type="text" name ="curname" min="0" required style="margin-left: 10px;">
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
                <input type="submit" name="submit" class="btn btn-success" value = "Create" min ="0" style="margin-left: 10px;"/>
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
//$('#frmBox').on("submit", function(event){
  //event.preventDefault();
  function formSubmit(){
  var curname = document.getElementById("inputCurriculumID").value;
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
        data: $("#frmBox").serialize(),
        success: function(response){
          $('#frmBox')[0].reset();
          $("#success").html(response);
          if(response.includes("Successfully created a new curriculum.")){
            document.getElementById("frmBox").reset();
          }
        }
      });
    }
  }
  });
  //return false;
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
