<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCFS Student Information System</title>
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
  <!-- jQuery -->
  <script src="../Resources/plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
  <!-- DataTables plugin -->
  <script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
  <link rel="stylesheet" href="../Resources/bootstrap-4.4.1/css/bootstrap.css">
</head>
<body>

  <div id="contents" class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div>
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Payment of Fees</h1>
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
              <!-- Start of Create Account Card -->
      		    <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Fill up the fields below.</h3>
      				  </div>
                <div class="card-body">
                  <div class="Balance">
                    <div class="searchID">
                      <form method="get" id="searchForm" class="form-inline">
                        <div class="input-group input-group-sm">
                          <input type="text" name="id" class="id form-control form-control-navbar" placeholder="Enter ID Number" style="margin-right: 15px;" required/>
                        </div>
                        <div class="input-group input-group-sm">
                          <input type="submit" name="search" class="form-control btn btn-info search" value="Search"/>
                        </div>
                      </form> <br>
                      <div id="searchResult">

                      </div>

                      <form method="post" id="pay_form">
                        <div>
                          <b><p>Payment Details:</p></b>
                        </div>
                        <div class="row">
            	            <div class="form-group col-4">
            								<label>Name of Payee</label>
                            <input type="text" name="pname" class="form-control pname" placeholder="Enter Name" required/>
            	            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-4">
                            <label>Payment for Remaining Balance</label>
                            <input type="number" step="0.01" name="pay" class="form-control pay" placeholder="Enter Amount"/>
                          </div>
                          <div class="form-group col-4">
                            <label>Payment for School Service</label>
                            <input type="number" step="0.01" name="payser" class="form-control payser" placeholder="Enter Amount"/>
                          </div>
                          <div class="form-group col-4">
                            <label>Payment for Surcharge</label>
                            <input type="number" step="0.01" name="paysur" class="form-control paysur" placeholder="Enter Amount"/>
                          </div>
                        </div>
                        <div class="row col-4">
                          <input type="submit" name="paid" class="btn btn-success paid" value="Submit"/>
                        </div>
                      </form>
                    </div>
                  </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </section>
    </div>
  </div>

  <?php include("PaymentsInsert.php"); ?>

  <!-- Search student -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('#searchForm').on("submit", function(event){
      event.preventDefault();
      var id = $('input[name=id]').val();
      var search = $('input[name=search]').val();
      $.ajax({
        type:"get",
        url:"PaymentsSearch.php",
        data:{id:id, search:search},
        success:function(data){
          $("#searchResult").html(data);
          }
        });
      });
    });
  </script>

  <!-- Submit form. -->
  <script type="text/javascript">
  $('#pay_form').on("submit", function(event){
    event.preventDefault();
    var id = $('input[name=id]').val();
    var pname = $('input[name=pname]').val();
    var paid = $('input[name=paid]').val();
  	bootbox.confirm({
  		message: "Submit payment?",
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
  				url: "PaymentsSearch.php",
  				//data: {id:id, pname:pname, paid:paid},
          data: $("#pay_form").serialize(),
  				success: function(response){
            alert(response);
            $('#pay_form')[0].reset();
  					//$("#success").html(response);
  					}
  			});
  		}
  	}
  	});
  });
  </script>


  <!-- jQuery UI 1.11.4 -->
  <script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!--Bootbox library for dialog box.-->
  <script src="../Resources/plugins/bootstrap/js/bootbox/bootbox.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../Resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../Resources/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../Resources/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../Resources/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../Resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../Resources/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../Resources/plugins/moment/moment.min.js"></script>
  <script src="../Resources/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../Resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../Resources/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../Resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../Resources/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../Resources/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../Resources/dist/js/demo.js"></script>
</body>
</html>
