<?php
include("Connection.php");

$output = '';
$input = filter_input_array(INPUT_POST);

if(isset($input['searcher'])) {

  $id = $input['id'];
  $query = "SELECT * FROM `checklist` WHERE (competencydesc IS NULL AND valuedesc IS NULL) AND IDno='".$id."' AND yearID IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') ORDER BY checkvalues";
  $result = mysqli_query($conn, $query);

  $output .= '
  <div class="table-responsive">
  <table id="checklistTable" class="table table-bordered table-hover">
    <thead style="text-align:center;">
      <tr>
        <th colspan="1"></th>
        <th colspan="1"></th>
        <th colspan="4">Periodic Rating</th>
      </tr>
      <tr>
        <th style="display:none;">Check ID</th>
        <th style="width:20%;">Domain</th>
        <th style="width:60%;">Description</th>
        <th style="width:5%;">1st</th>
        <th style="width:5%;">2nd</th>
        <th style="width:5%;">3rd</th>
        <th style="width:5%;">4th</th>
      </tr>
    </thead>
    <tbody>';
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)) {
    $output .= '
    <tr>
      <td class="ch" style="display:none;">'.$row["checkid"].'</td>
      <td>'.$row["checkvalues"].'</td>
      <td>'.$row["checkdesc"].'</td>
      <td style="text-align:center;"><input type="checkbox" name="chk" id="chk" data-contact_avl="val" value="1">'.$row["firstrating"].'</td>
      <td style="text-align:center;"><input type="checkbox" name="chk" id="chk" data-contact_avl="val" value="1">'.$row["secondrating"].'</td>
      <td style="text-align:center;"><input type="checkbox" name="chk" id="chk" data-contact_avl="val" value="1">'.$row["thirdrating"].'</td>
      <td style="text-align:center;"><input type="checkbox" name="chk" id="chk" data-contact_avl="val" value="1">'.$row["fourthrating"].'</td>
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
