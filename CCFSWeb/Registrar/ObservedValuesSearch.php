<?php
include("Connection.php");

$output = '';
$input = filter_input_array(INPUT_POST);

if(isset($input['searcher'])) {

  $id = $input['id'];
  $query = "SELECT * FROM `checklist` WHERE (checkdesc IS NULL AND competencydesc IS NULL) AND IDno='".$id."' ORDER BY corevalues";
  $result = mysqli_query($conn, $query);

  $output .= '
  <div class="table-responsive">
  <table id="obsValTable" class="table table-bordered table-hover">
    <thead style="text-align:center;">
      <tr>
        <th style="display:none;">Check ID</th>
        <th style="width:20%;">Core Values</th>
        <th style="width:40%;">Behavioral Statements / Description</th>
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
      <td>'.$row["corevalues"].'</td>
      <td>'.$row["valuedesc"].'</td>
      <td style="text-align:center;">'.$row["firstrating"].'</td>
      <td style="text-align:center;">'.$row["secondrating"].'</td>
      <td style="text-align:center;">'.$row["thirdrating"].'</td>
      <td style="text-align:center;">'.$row["fourthrating"].'</td>
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

<!-- Edit ratings -->
<script>
$(document).ready(function(){
 $('#obsValTable').Tabledit({
  url:'ChecklistsRatings.php',
  deleteButton: false,
  hideIdentifier: true,
  buttons: {
    edit: {
      class: 'btn btn-info btn-xs edit_data',
      html: '<span data-toggle="tooltip" title="Edit"><i class="fas fa-edit" aria-hidden="true"></i></span>',
      action: 'edit'
    }
  },
  columns:{
    identifier:[0, "checkid"],
    editable:[[3, 'firstrating'], [4, 'secondrating'], [5, 'thirdrating'], [6, 'fourthrating']]
  },
 });
});
</script>
