<?php
include("Connection.php");

$output = '';
$input = filter_input_array(INPUT_POST);

if(isset($input['searcher'])) {

  $id = $input['id'];
  $query = "SELECT * FROM `checklist` WHERE (competencydesc IS NULL AND valuedesc IS NULL) AND IDno='".$id."' ORDER BY checkvalues";
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
    $firstVal = $row['firstrating'];
    $secondVal = $row['secondrating'];
    $thirdVal = $row['thirdrating'];
    $fourthVal = $row['fourthrating'];

    $output .= '
    <tr>
      <td class="ch" style="display:none;">'.$row["checkid"].'</td>
      <td>'.$row["checkvalues"].'</td>
      <td>'.$row["checkdesc"].'</td>
      ';

      if($firstVal != 0){
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id1="'.$row["checkid"].'" name="chk1" id="chk1" value="1" checked="checked"></td>
        ';
      } else {
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id1="'.$row["checkid"].'" name="chk1" id="chk1" value="1"></td>
        ';
      }

      if($secondVal != 0){
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id2="'.$row["checkid"].'" name="chk2" id="chk2" value="1" checked="checked"></td>
        ';
      } else {
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id2="'.$row["checkid"].'" name="chk2" id="chk2" value="1"></td>
        ';
      }

      if($thirdVal != 0){
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id3="'.$row["checkid"].'" name="chk3" id="chk3" value="1" checked="checked"></td>
        ';
      } else {
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id3="'.$row["checkid"].'" name="chk3" id="chk3" value="1"></td>
        ';
      }

      if($fourthVal != 0){
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id4="'.$row["checkid"].'" name="chk4" id="chk4" value="1" checked="checked"></td>
        ';
      } else {
        $output .= '
        <td style="text-align:center;"><input type="checkbox" data-id4="'.$row["checkid"].'" name="chk4" id="chk4" value="1"></td>
        ';
      }

      $output .= '</tr>';
   }

   $output .= "</tbody></table></div>";
   echo $output;

   } else {
     echo "No matching records found";
   }
  }

 ?>
