<?php
include("Connection.php");

$output = '';
$input = filter_input_array(INPUT_POST);

if(isset($input['searcher'])) {

  $id = $input['id'];
  $query = "SELECT * FROM `checklist` WHERE (checkdesc IS NULL AND valuedesc IS NULL) AND IDno='".$id."' AND yearID IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') ORDER BY competencyvalues";
  $result = mysqli_query($conn, $query);

  $output .= '
  <div class="table-responsive">
    <table id="competencyTable" class="table table-bordered table-hover">
       <thead style="text-align:center;">
         <tr>
           <th colspan="1"></th>
           <th colspan="1"></th>
           <th colspan="4">Periodic Rating</th>
         </tr>
         <tr>
           <th style="display:none;">Check ID</th>
           <th style="width:20%;">Domain</th>
           <th style="width:40%;">Competency / Description</th>
           <th style="width:10%;">1st</th>
           <th style="width:10%;">2nd</th>
           <th style="width:10%;">3rd</th>
           <th style="width:10%;">4th</th>
         </tr>
       </thead>
       <tbody>';
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)) {
    $output .= '
    <tr>
      <td style="display:none;">'.$row["checkid"].'</td>
      <td>'.$row["competencyvalues"].'</td>
      <td>'.$row["competencydesc"].'</td>
      <td class="first" data-id1="'.$row["checkid"].'" contenteditable style="text-align:center;">'.$row["firstrating"].'</td>
      <td class="second" data-id2="'.$row["checkid"].'" contenteditable style="text-align:center;">'.$row["secondrating"].'</td>
      <td class="third" data-id3="'.$row["checkid"].'" contenteditable style="text-align:center;">'.$row["thirdrating"].'</td>
      <td class="fourth" data-id4="'.$row["checkid"].'" contenteditable style="text-align:center;">'.$row["fourthrating"].'</td>
    </tr>
         ';
   }

   $output .= "</tbody></table></div>";
   echo $output;

   } else {
     echo "No matching records found";
   }
  }

 ?>
