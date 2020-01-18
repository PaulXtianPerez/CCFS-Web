<?php
include("Connection.php");
include("../ActiveSchoolYear.php");

// mysql select query
$query = "SELECT *,SurName FROM `grades`,`enstudent`WHERE grades.IDno = enstudent.IDno";
$query1 = "SELECT sename FROM `section`";
$query2 = "SELECT subname FROM `subject`";
$query3 = "SELECT curstudent.IDno,enstudent.surname FROM curstudent,enstudent WHERE curstudent.IDno = enstudent.IDno";
$query5 = "SELECT yearid FROM schoolyear WHERE scstatus='ACTIVE'";
$query6 = "SELECT IDno,gradelvl FROM curstudent";
$query8 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-N%'";
$query9 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-PK%'";
$query10 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-K%'";
$query11 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-1%'";
$query12 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-2%'";
$query13 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-3%'";
$query14 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-4%'";
$query15 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-5%'";
$query16 = "SELECT subjID,subname FROM `subject` WHERE `subname` LIKE '%-6%'";
$result5 = mysqli_query($conn,$query5);
$result6 = mysqli_query($conn,$query6);
$result8 = mysqli_query($conn,$query8);
$result9 = mysqli_query($conn,$query9);
$result10 = mysqli_query($conn,$query10);
$result11 = mysqli_query($conn,$query11);
$result12 = mysqli_query($conn,$query12);
$result13 = mysqli_query($conn,$query13);
$result14 = mysqli_query($conn,$query14);
$result15 = mysqli_query($conn,$query15);
$result16 = mysqli_query($conn,$query16);
$data4 = array();
$data5 = array();
$data6 = array();
$data8 = array();
$data9 = array();
$data10 = array();
$data11 = array();
$data12 = array();
$data13 = array();
$data14 = array();
$data15 = array();
$data16 = array();
while($row = mysqli_fetch_array($result5)) {
  $data5[] = $row;
}
while($row = mysqli_fetch_array($result6)) {
  $data6[] = $row;
}
while($row = mysqli_fetch_array($result8)) {
  $data8[] = $row;
}
while($row = mysqli_fetch_array($result9)) {
  $data9[] = $row;
}
while($row = mysqli_fetch_array($result10)) {
  $data10[] = $row;
}
while($row = mysqli_fetch_array($result11)) {
  $data11[] = $row;
}
while($row = mysqli_fetch_array($result12)) {
  $data12[] = $row;
}
while($row = mysqli_fetch_array($result13)) {
  $data13[] = $row;
}
while($row = mysqli_fetch_array($result14)) {
  $data14[] = $row;
}
while($row = mysqli_fetch_array($result15)) {
  $data15[] = $row;
}
while($row = mysqli_fetch_array($result16)) {
  $data16[] = $row;
}
// print_r($data4);
// echo "<br>";
// print_r($data5);
// echo "<br>";
// print_r($data6[0]['IDno']);

for($i = 0; $i < sizeof($data6);$i++) {
  $query7 = "SELECT IDno,subjID,sename FROM grades WHERE IDno = ".$data6[$i]['IDno']."";
  $result7 = mysqli_query($conn,$query7);
  if (mysqli_num_rows($result7) == 0) { 
    switch($data6[$i]['gradelvl']) {
      case 'NURSERY':
        for($in = 0; $in < sizeof($data8);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data8[$in][`subjID`].",'ALEPH',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'PRE-KINDER':
        for($in = 0; $in < sizeof($data9);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data9[$in][`subjID`].",'ALPHA',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'KINDER':
        for($in = 0; $in < sizeof($data10);$in++) {
          $sqlN = "INSERT INTO `grades` ( `subjID`, `sename`,`IDno`, `yearid`) VALUES ('".$data10[$in]['subjID']."', 'BETA', '".$data6[$i]['IDno']."', '".$data5[0]['yearid']."');";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 1':
        for($in = 0; $in < sizeof($data11);$in++){
          $sqlN = "INSERT INTO `grades` ( `subjID`, `sename`,`IDno`, `yearid`) VALUES ('".$data11[$in]['subjID']."', 'GAMMA', '".$data6[$i]['IDno']."', '".$data5[0]['yearid']."');";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 2':
        for($in = 0; $in < sizeof($data12);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data12[$in][`subjID`].",'DELTA',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 3':
        for($in = 0; $in < sizeof($data13);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data13[$in][`subjID`].",'EPILON',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 4':
        for($in = 0; $in < sizeof($data14);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data14[$in][`subjID`].",'ZETA',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 5':
        for($in = 0; $in < sizeof($data15);$in++) {
          $sqlN = "INSERT INTO 'grades'(`subjID`,`sename`,`IDno`,`yearId`) VALUES (".$data15[$in][`subjID`].",'ETA',".$data6[$i]['IDno'].",".$data5[0]['yearid'].")";
          $conn->query($sqlN);
        }
      break;
      case 'GRADE 6':    
        for($in = 0; $in < sizeof($data16);$in++) {
          $sqlN = "INSERT INTO `grades`(`subjID`, `sename`,`IDno`, `yearid`) VALUES ('".$data16[$in]['subjID']."','THETA','".$data6[$i]['IDno']."','".$data5[0]['yearid']."')";
        }
      break;
    }
  }
}

// result for method
$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
?>

<!DOCTYPE html>
<html>
<head>
<input type="text" name="grades" id="grade" style="width: 4em">
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
  <link rel="stylesheet" type="text/css" href="../Resources/dist/css/main.css">
  <!-- CSS for DataTables plugin -->
  <link rel="stylesheet" type="text/css" href="../Resources/plugins/bootstrap/js/DataTables/datatables.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div id="contents" class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Grades</h1>
            <h5 class="m-0 text-dark">School Year: <?php if(empty($data3[0])) {
              echo "--";
            }else {
              echo $data3[0];
            }
            ; echo "-" ; if(empty($data2[1])){echo "--";}else {echo $data2[1];}?></h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main content -->
       <section class="content">
       <form>
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                    <div class="row">
                      <!-- SELECT GRADE LEVEL -->
                      <div class="form-group col-3">
                        <label>Grade Level</label>
                        <select id="grLvl" class="form-control e" name="grLvl">
                          <option>Nursery</option>
                          <option>Pre-Kinder</option>
                          <option>Kinder</option>
                          <option>Grade 1</option>
                          <option>Grade 2</option>
                          <option>Grade 3</option>
                          <option>Grade 4</option>
                          <option>Grade 5</option>
                          <option>Grade 6</option>
                        </select>
                      </div>
                      <!-- SELECT SECTION -->
                      <div class="form-group col-3">
                        <label>Section</label>
                        <select id="section" class="form-control" name="section">
                        <?php
                          while($row = mysqli_fetch_array($result1)) {
                            echo "<option>".$row['sename']."</option>";

                          }
                        ?>
                        </select>
                      </div>
                      <!-- SELECT SUBJECT -->
                      <div class="form-group col-3">
                        <label>Subject</label>
                        <select id="subject" class="form-control" name="subject">
                          <?php
                            while($row = mysqli_fetch_array($result2)) {
                              echo "<option>".$row['subname']."</option>";
  
                            }
                          ?>
                        </select>
                      </div>
                      <!-- SUBMIT -->
                      <div class="form-group col-3">
                        <br><input class="btn btn-default elon" type="button"  name="submit" value="Go">
                      </div>
                    </div>
      
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
                  <table id="gradesTable" class="table table-bordered table-hover">
                    <thead style="text-align:center;">
                      <tr>
                        <th colspan="2">Student Information</th>
                        <th colspan="4">Periodic Rating</th>
                        <th colspan="2" id="n"></th>
                      </tr>
                      <tr>
                        <th style="display:none">Grade ID</th>
                        <th>ID Number</th>
                        <th>Name</th>
                        <th>1st</th>
                        <th>2nd</th>
                        <th>3rd</th>
                        <th>4th</th>
                        <th>Final Grade</th>
                        <th>Remarks</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody> <!-- Populate from database. -->
                      <?php
                        while($row = mysqli_fetch_array($result)) {
                          echo '
                          <tr class="p">
                          <td>'.$row["IDno"].'</td>
                          <td>'.$row["firstquartergrade"].'</td>
                          <td>'.$row["secondquartergrade"].'</td>
                          <td>'.$row["thirdquartergrade"].'</td>
                          <td>'.$row["fourthquartergrade"].'</td>
                          <td>'.$row["finalgrade"].'</td>
                          <td>'.$row["remarks"].'</td>
                          <td></td>
                          </tr>
                          ';
                        }
                        ?>
                        
                    </tbody>
                    </tfoot>
                  </table>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </section>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  
</div> <!-- ./wrapper -->

<!-- Initialize DataTables plugin -->
<!-- <script type="text/javascript">

// $("#gradesTable").DataTable({
//   "pagingType": "full_numbers", //'First', 'Previous', 'Next' and 'Last' buttons plus page numbers
//   "destroy": true //for reinitialization
// });
</script> -->

<!--Tabledit plugin -->
<script>
$(document).ready(function() {
  $(".p").remove();
  $("#WELON").val($("#grLvl option:selected").text());
  $(document).on('click','.elon',function(){
    var grLvl = $("#grLvl option:selected").text();
    var section = $("#section option:selected").text();
    var subject = $("#subject option:selected").text();
    $.ajax( {
      url:"GradeSearch.php",
      method:"POST",
      data:{grLvl:grLvl,section:section,subject:subject},
      dataType:"json",
      success:function(data) {
        if(data.length == 0) {
          $(".p").remove();
          $('tbody').append("<tr class='p'><td width='100%' colspan='8' id='i' style='text-align: center;'>No Result</td></tr>");
          $("#n").html("No Result");  
        }else {
          $(".p").remove();
          for(var i = 0 ; i < data.length;i++) {
            $('tbody').append("<tr class='p'><td>"+data[i].IDno+"</td><td>"+data[i].GivenName+" "+data[i].SurName+"</td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='number id='grades' name='grades[]'style='width: 4em'></td><td><input type='submit' class='m' id="+data[i].IDno+" value='Save'></td></tr>");
            $("#n").html(data.length+" Results");  
          }
        }
      }
    });
  });
$(document).on("click", ":submit", 'form',function(e){
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'GradesUpdate.php',
    data: $('form').serialize() + '&IDno='+ $(this).attr('id'),
    success: function (data) {
      console.log(data);
      console.log(data);
    }
  });

});
// $(function () {

// $('form').on(':submit', function (e) {
//   e.preventDefault();
//   console.log($(this).attr("id"));

  // $.ajax({
  //   type: 'POST',
  //   url: 'GradesUpdate.php',
  //   data: $('form').serialize(),
  //   success: function (data) {
  //     alert(data);
  //   }
  // });

// });

// });
  // $(document).on('click','.m',function() {
  //   var student_id = $(this).attr("id");
  // });
  
    // $('#gradesTable').Tabledit({
    //  url:'GradesAction.php',
    //  deleteButton: false,
    //  hideIdentifier: true,
    //  buttons: {
    //     edit: {
    //         class: 'btn btn-info btn-xs edit_data',
    //         html: '<span data-toggle="tooltip" title="Edit"><i class="fas fa-edit" aria-hidden="true"></i></span>',
    //         action: 'edit'
    //     }
    // },
    //  columns:{
    //    identifier:[1, "gradeid"], //gradeid or subjID?
    //    editable:[[3, 'firstquartergrade'], [4, 'secondquartergrade'], [5, 'thirdquartergrade'], [6, 'fourthquartergrade']]
    //  },
    // });

});
// if($("#grLvl option:selected").text() == 'Nursery') {
    
  // }
  // var d = "e";
  //   $.ajax({
  //     url:"GradeSearch.php",
  //     method:"POST",
  //     data:{d:d},
  //     dataType:"json",
  //     success:function(data){
  //       $("#e").val("E");
  //     });
  //   }
  // }
  // $("select.e").change(function(){
  //   console.log($(this).children("option:selected").text());
  // });
</script>


<!-- jQuery -->
<script src="../Resources/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Resources/plugins/jquery-ui/jquery-ui.min.js"></script>
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
<!-- DataTables plugin -->
<script type="text/javascript" charset="utf8" src="../Resources/plugins/bootstrap/js/DataTables/datatables.js"></script>
<!-- JQuery Inline Table Editor Plugin -->
<script src="../Resources/plugins/jquery/jquery.tabledit.js"></script>
<script src="../Resources/plugins/jquery/jquery.tabledit.min.js"></script>
</body>
</html>
