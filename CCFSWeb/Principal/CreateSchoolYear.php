<!DOCTYPE html>
<html lang="en">
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
<head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Content Wrapper. Contains page content -->
  <div id="contents" class="wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create School Year</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <form id="frmBox" class="needs-validation" method="post" action="SchoolYearInsert.php" onsubmit="return formSubmit();">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">School Year Information</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="Yearstart">Year Start</label>
                      <input class="form-control" id="inputYearStart" placeholder="Enter Year Start" type="number" name="yearstart" min="0" required>
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">Year End</label>
                      <input class="form-control" id="inputYearEnd" placeholder="Enter Year Start" type="number" name="yearend" min="0" required>
                    </div>
                    <div class="form-group col-3">
                      <label for="dateStart">Date Start</label>
                      <input class="form-control" id="inputDateStart" placeholder="Enter First Day" type="date" name="dateStart" min="0" required>
                    </div>
                    <div class="form-group col-3">
                      <label for="dateEnd">Date End</label>
                      <input class="form-control" id="inputDateEnd" placeholder="Enter Last Day" type="date" name="dateEnd" min="0" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                      <label>Curriculum to use for this school year</label>
                      <?php include("database.php");
                            $query1 = "SELECT curname FROM curriculum GROUP BY curname";
                            $result = $mysqli->query($query1) or die($mysqli->error.__LINE__);
                      ?>
                      <select name="curname" id="curname" class="form-control">
                        <?php while ($row1 = mysqli_fetch_array($result)):;?>
                          <option name = "curname"><?php echo $row1[0];?></option>
                        <?php endwhile;?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Number of Days per Month</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="Yearstart">January </label>
                      <input class="form-control attNum years year-1" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01" name="janAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">February</label>
                      <input class="form-control attNum years year-2" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01"  name="febAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearstart">March</label>
                      <input class="form-control attNum years year-3" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01"  name="marAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">April</label>
                      <input class="form-control attNum years year-4" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01"  name="aprAtt" min="0" max="31">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="Yearstart">May</label>
                      <input class="form-control attNum years year-5" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01"  name="mayAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">June</label>
                      <input class="form-control attNum years year-6" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01"  name="junAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearstart">July </label>
                      <input class="form-control attNum years year-7" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01" name="julAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">August</label>
                      <input class="form-control attNum years year-8" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01" name="augAtt" min="0" max="31">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="Yearstart">September </label>
                      <input class="form-control attNum years year-9" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01" name="sepAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">October</label>
                      <input class="form-control attNum years year-10" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01" name="octAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearstart">November </label>
                      <input class="form-control attNum years year-11" id="inputYearStart" placeholder="Number Of Days" type="number" step="0.01" name="novAtt" min="0" max="31">
                    </div>
                    <div class="form-group col-3">
                      <label for="Yearend">December</label>
                      <input class="form-control attNum years year-12" id="inputYearEnd" placeholder="Number Of Days" type="number" step="0.01" name="decAtt" min="0" max="31">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label>Total School Days</label>
                      <output class="form-control" id="totalDays"></output>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Start of Preschool Card -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Preschool Fees</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="nurseryTuition">Nursery Tuition Fee</label>
                      <button type="button" name="btnApplyPreTui" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all preschool levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control nurNum" id="inputnurseryTuition" placeholder="Enter Tuition Fee" type="number" step="0.01" name="pretui1" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="nurseryMisc">Nursery Misc. Fees</label>
                      <button type="button" name="btnApplyPreMisc" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all preschool levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control nurNum" id="inputnurseryMisc" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="premisc1" min ="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="nurseryBook">Nursery Book Fees</label>
                      <button type="button" name="btnApplyPreBook" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all preschool levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control nurNum" id="inputnurseryBook" placeholder="Enter Book Fees" type="number" step="0.01" name="prebook1" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="nurTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="preKinTuition">Pre-Kinder Tuition Fee</label>
                      <input class="form-control preNum" id="inputpreKinTuition" placeholder="Enter Tuition Fee" type="number" step="0.01" name="pretui2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="preKinMisc">Pre-Kinder Misc. Fees</label>
                      <input class="form-control preNum" id="inputpreKinMisc" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="premisc2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="preKinBook">Pre-Kinder Book Fees</label>
                      <input class="form-control preNum" id="inputpreKinBook" placeholder="Enter Book Fees" type="number" step="0.01" name="prebook2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="preTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="KinTuition">Kinder Tuition Fee</label>
                      <input class="form-control kinNum" id="inputKinTuition" placeholder="Enter Tuition Fee" type="number" step="0.01" name="pretui3" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="KinMisc">Kinder Misc. Fees</label>
                      <input class="form-control kinNum" id="inputKinMisc" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="prebook3" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="KinBook">Kinder Book Fees</label>
                      <input class="form-control kinNum" id="inputKinBook" placeholder="Enter Book Fees" type="number" step="0.01" name="premisc3" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="kinTotal"></output>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Start of Gradeschool Card -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Grade School Fees</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade1TFee">Grade 1 Tuition Fee </label>
                      <button type="button" name="btnApplyGrdTui" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all grade school levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control oneNum" id="inputgrade1TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui1" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade1MiscFee">Grade 1 Misc. Fees</label>
                      <button type="button" name="btnApplyGrdMisc" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all grade school levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control oneNum" id="inputgrade1MiscFee" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="grademisc1" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade1BookFee">Grade 1 Book Fees</label>
                      <button type="button" name="btnApplyGrdBook" class="btn btn-info btn-sm" data-toggle="tooltip" title="Apply fee to all grade school levels"><i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
                      <input class="form-control oneNum" id="inputgrade1BookFee" placeholder="Enter Book Fees" type="number" step="0.01" name="gradebook1" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="oneTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade2TFee">Grade 2 Tuition Fee </label>
                      <input class="form-control twoNum" id="inputgrade2TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade2MiscFee">Grade 2 Misc. Fees</label>
                      <input class="form-control twoNum" id="inputgrade2MiscFee" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="grademisc2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade2BookFee">Grade 2 Book Fees</label>
                      <input class="form-control twoNum" id="inputgrade2BookFee" placeholder="Enter Book Fees" type="number" step="0.01" name="gradebook2" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="twoTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade3TFee">Grade 3 Tuition Fee </label>
                      <input class="form-control threeNum" id="inputgrade3TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui3" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade3MiscFee">Grade 3 Misc. Fees</label>
                      <input class="form-control threeNum" id="inputgrade3MiscFee" placeholder="Enter Miscellaneous Fees" step="0.01" type="number" name="grademisc3" min = "0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade3BookFee">Grade 3 Book Fees</label>
                      <input class="form-control threeNum" id="inputgrade3BookFee" placeholder="Enter Book Fees" type="number" step="0.01" name="gradebook3" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="threeTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade4TFee">Grade 4 Tuition Fee </label>
                      <input class="form-control fourNum" id="inputgrade4TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui4" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade4MiscFee">Grade 4 Misc. Fees</label>
                      <input class="form-control fourNum" id="inputgrade4MiscFee" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="grademisc4" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade4BookFee">Grade 4 Book Fees</label>
                      <input class="form-control fourNum" id="inputgrade4BookFee" placeholder="Enter Book Fees" type="number" step="0.01" name="gradebook4" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="fourTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade5TFee">Grade 5 Tuition Fee </label>
                      <input class="form-control fiveNum" id="inputgrade5TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui5" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade5MiscFee">Grade 5 Misc. Fees</label>
                      <input class="form-control fiveNum" id="inputgrade5MiscFee" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="grademisc5" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade5BookFee">Grade 5 Book Fees</label>
                      <input class="form-control fiveNum" id="inputgrade5BookFee" placeholder="Enter Book Fees" type="number" step="0.01" name="gradebook5" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="fiveTotal"></output>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label for="grade6TFee">Grade 6 Tuition Fee</label>
                      <input class="form-control sixNum" id="inputgrade6TFee" placeholder="Enter Tuition Fee" type="number" step="0.01" name="gradetui6" min ="0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade6MiscFee">Grade 6 Misc. Fees</label>
                      <input class="form-control sixNum" id="inputgrade6MiscFee" placeholder="Enter Miscellaneous Fees" type="number" step="0.01" name="grademisc6" min = "0">
                    </div>
                    <div class="form-group col-3">
                      <label for="grade6BookFee">Grade 6 Book Fees</label>
                      <input class="form-control sixNum" id="inputgrade6BookFee" placeholder="Enter Book Fees" type= "number" step="0.01" name="gradebook6" min="0">
                    </div>
                    <div class="form-group col-3">
                      <label>Total</label>
                      <output class="form-control" id="sixTotal"></output>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <input type="submit" class="btn btn-success" name="submit" value="Create" min="0"/>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- Submit form. -->
  <script type="text/javascript">
  function formSubmit(){
    var yrStart = document.getElementById("inputYearStart").value;
    var yrEnd = document.getElementById("inputYearEnd").value;
    bootbox.confirm({
      message: "Create school year " + yrStart + "-" + yrEnd + "?",
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
          url: "SchoolYearInsert.php",
          data: $("#frmBox").serialize(),
          success: function(response){
            if(response.includes("Successfully created a new school year.")){
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
                text: response, // Text that is to be shown in the toast
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
    return false;
  }
  </script>

  <script type="text/javascript">

  $('document').ready(function() {
    $('.years').closest('.form-group').hide();
    $('[name=dateStart]').on('blur', function() {
      dateStartEndChange();
    });

    $('[name=dateEnd]').on('blur', function() {
      dateStartEndChange();
    });

    function dateStartEndChange() {
      var date_start = $('[name=dateStart]').val();
      var date_end = $('[name=dateEnd]').val();
      var date_start_month = new Date(date_start).getMonth() + 1;
      var date_end_month = new Date(date_end).getMonth() + 1;

      $('.years').closest('.form-group').hide();

      if (date_start_month <= date_end_month) {
        for (var $d = date_start_month; $d <= date_end_month; $d++) {
          $('.year-' + $d).closest('.form-group').show();
        }
      } else {
      	for (var $d = date_start_month; $d <= 12; $d++) {
          $('.year-' + $d).closest('.form-group').show();
        }
        for (var $d = 1; $d <= date_end_month; $d++) {
          $('.year-' + $d).closest('.form-group').show();
        }
      }

    }
  });
</script>

  <!-- Show/hide no. of sch days.
  <script type="text/javascript">
  $('document').ready( function ( ) {
    $( '.years' ).closest( '.form-group' ).hide();
    $( '[name=dateStart]' ).on( 'blur', function ( ) {
      dateStartEndChange();
    });

    $( '[name=dateEnd]' ).on( 'blur', function ( ) {
      dateStartEndChange();
    });

    var monthNames = [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ];
    function dateStartEndChange() {
      /*var dateStart = moment($('[name=dateStart]').val(), "MM-DD-YYYY");
      var dateEnd = moment($('[name=dateEnd]').val(), "MM-DD-YYYY");
      var interim = dateStart.clone();
      var timeValues = [];

      $( '.years' ).closest( '.form-group' ).hide();

      if (dateStart.isValid() && dateEnd.isValid()) {
        while (dateEnd > interim || interim.format('M') === dateEnd.format('M')) {
          timeValues.push(interim.format('MM'));
          interim.add(1,'month');
          $( '.year-' + timeValues ).closest( '.form-group' ).show();
        }
      }*/
      var arr = [];
      var dateStart = $('[name=dateStart]').val();
      var dateEnd = $('[name=dateEnd]').val();
      //var date_start_month = new Date(date_start).getMonth() + 1;
      //var date_end_month = new Date(date_end).getMonth() + 1;
      //var start = new Date(Date.parse(dateStart));
      //var end = new Date(Date.parse(dateEnd));
      var datFrom = new Date('1 ' + dateStart);
      var datTo = new Date('1 ' + dateEnd);
      var fromYear =  datFrom.getFullYear();
      var toYear =  datTo.getFullYear();
      var diffYear = (12 * (toYear - fromYear)) + datTo.getMonth();

      $('.years').closest('.form-group').hide();

      for ($d = datFrom.getMonth(); $d <= diffYear; $d++) {
        arr.push(monthNames[$d%12]);
        //$('.year-' + $d).closest('.form-group').show();
      }
      return arr;
      $('.year-' + monthNames).closest('.form-group').show();
    }
  });
  </script>-->


  <script>
  var d1 = document.getElementById('dateStart');
  var d2 = document.getElementById('dateEnd');
  var startDate = moment($('[name=dateStart]').val());
  var endDate = moment($('[name=dateEnd]').val());

  function validate(){
    if (endDate.isBefore(startDate)) {
      d2.setCustomValidity("Date end can't be before date start!");
    }else{
    	d2.setCustomValidity("");
    }

    /*if(time2 > time1){
    	d2.setCustomValidity("Date end can't be before date start!");
    }else{
    	d2.setCustomValidity("");
    }*/
  }
  //yrStart.onchange = validateSchoolYear;
  d1.onchange = validate;
  d2.onchange = validate;
  d2.onkeyup = validate;
  /*function compare() {
    var moment = require('moment');

var firstDate = moment($("#inputDateStart").val(), "MM-DD-YYYY");
var secondDate = moment($("#inputDateEnd").val(), "MM-DD-YYYY");

console.log(firstDate.inspect(), secondDate.inspect());

if (firstDate.isValid() && secondDate.isValid()) {
  // you need a validation before using diff function of momentjs
  //var diff = firstDate.isAfter(secondDate);
  //console.log(diff);
  if(firstDate.isAfter(secondDate, 'days')){
    alert("hhh");
  }
  }
}*/
  </script>

  <!-- Validate date inputs
  <script type="text/javascript">
    var yrStart = document.getElementById('inputYearStart');
    var yrEnd = document.getElementById('inputYearEnd');
    var dtSt = document.getElementById('inputDateStart');
    var dtEn = document.getElementById('inputDateEnd');
    /*var dtStart = document.getElementById('inputDateStart').value;
    var dtEnd = document.getElementById('inputDateEnd').value;

    var dtYrStart = new Date(dtStart);
    var dtYrEnd = new Date(dtEnd);*/
    var date_start = $( '[name=dateStart]' ).val( );
    var date_end = $( '[name=dateEnd]' ).val( );
    var date_start_year = new Date( date_start ).getYear();
    var date_end_year = new Date( date_end ).getYear();

    function validateSchoolYear(){
      if(yrStart.value > yrEnd.value) {
        yrEnd.setCustomValidity("Year end can't be before year start!");
      } else {
        yrEnd.setCustomValidity('');
      }
    }
    yrStart.onchange = validateSchoolYear;
    yrEnd.onchange = validateSchoolYear;
    yrEnd.onkeyup = validateSchoolYear;

    function validateYear(){
      if(date_start_year != yrStart.value){
        dtSt.setCustomValidity("Years don't match!");
      } else if(date_end_year != yrEnd.value) {
        dtEn.setCustomValidity("Years don't match!");
      } else {
        dtSt.setCustomValidity('');
        dtEn.setCustomValidity('');
      }
    }
    //yrStart.onchange = validateYear;
    //yrStart.onkeyup = validateYear;
    yrEnd.onchange = validateYear;
    yrEnd.onkeyup = validateYear;
    //dtSt.onchange = validateYear;
    //dtSt.onkeyup = validateYear;
    dtEn.onchange = validateYear;
    dtEn.onkeyup = validateYear;
    /*function validateYear(){
      if(yrStart != dateYrStart) {
        dateYrStart.setCustomValidity("Years Don't Match");
      } else if(yrEnd != dateYrEnd) {
        dateYrEnd.setCustomValidity("Years Don't Match");
      } else {
        dateYrStart.setCustomValidity('');
        dateYrEnd.setCustomValidity('');
      }
    }
    yrStart.onchange = validateYear;
    dateYrStart.onkeyup = validateYear;
    yrEnd.onchange = validateYear;
    dateYrEnd.onkeyup = validateYear;*/
  </script>-->

  <!-- 'Apply to all' button -->
  <script type="text/javascript">
  $(document).ready(function(){
    var preTui = $('#inputnurseryTuition');
    var preMisc = $('#inputnurseryMisc');
    var preBook = $('#inputnurseryBook');
    var grdTui = $('#inputgrade1TFee');
    var grdMisc = $('#inputgrade1MiscFee');
    var grdBook = $('#inputgrade1BookFee');

    $('[name=btnApplyPreTui]').on('click', function(){
      $('#inputpreKinTuition').val(preTui.val());
      $('#inputKinTuition').val(preTui.val());
    });

    $('[name=btnApplyPreMisc]').on('click', function(){
      $('#inputpreKinMisc').val(preMisc.val());
      $('#inputKinMisc').val(preMisc.val());
    });

    $('[name=btnApplyPreBook]').on('click', function(){
      $('#inputpreKinBook').val(preBook.val());
      $('#inputKinBook').val(preBook.val());
    });

    $('[name=btnApplyGrdTui]').on('click', function(){
      $('#inputgrade2TFee').val(grdTui.val());
      $('#inputgrade3TFee').val(grdTui.val());
      $('#inputgrade4TFee').val(grdTui.val());
      $('#inputgrade5TFee').val(grdTui.val());
      $('#inputgrade6TFee').val(grdTui.val());
    });

    $('[name=btnApplyGrdMisc]').on('click', function(){
      $('#inputgrade2MiscFee').val(grdMisc.val());
      $('#inputgrade3MiscFee').val(grdMisc.val());
      $('#inputgrade4MiscFee').val(grdMisc.val());
      $('#inputgrade5MiscFee').val(grdMisc.val());
      $('#inputgrade6MiscFee').val(grdMisc.val());
    });

    $('[name=btnApplyGrdBook]').on('click', function(){
      $('#inputgrade2BookFee').val(grdBook.val());
      $('#inputgrade3BookFee').val(grdBook.val());
      $('#inputgrade4BookFee').val(grdBook.val());
      $('#inputgrade5BookFee').val(grdBook.val());
      $('#inputgrade6BookFee').val(grdBook.val());
    });
  });
  </script>

  <!--===============================================================================================-->
  <script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="moment.js"></script>
  <script src="moment.min.js"></script>
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
    <!--Compute total days and total fees in ui.-->
    <script src="../Resources/js/compute-total.js"></script>
</body>
</html>
