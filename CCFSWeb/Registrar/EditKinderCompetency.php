<?php

$output = '';
$connect = mysqli_connect("localhost", "root", "", "ccfs");
$query = "SELECT * FROM `checklist` WHERE (checkdesc IS NULL AND valuedesc IS NULL)";
$result = mysqli_query($connect, $query);
$output .= '
<div class="table-responsive">
     <table id="editCompetencyTable" class="table table-bordered">
     <thead style="text-align:center;">
       <tr>
         <th style="display:none">Check ID</th>
         <th>Domain</th>
         <th>Description</th>
       </tr>
     </thead>
     <tbody>';

     while($row = mysqli_fetch_array($result)){
       $output .= '
       <tr>
       <td style="display:none">'.$row["checkid"].'</td>
       <td>'.$row["competencyvalues"].'</td>
       <td>'.$row["competencydesc"].'</td>
       </tr>
            ';
      }

      $output .= "</tbody></table></div>";
      echo $output;

?>

<!--Tabledit action-->
<?php
$input = filter_input_array(INPUT_POST);

$compVal = mysqli_real_escape_string($connect, $input["competencyvalues"]);
$descVal = mysqli_real_escape_string($connect, $input["competencydesc"]);

if($input["action"] === 'edit'){
  $query = "
  UPDATE checklist
  SET competencyvalues = '".$compVal."',
  competencydesc = '".$descVal."'
  WHERE checkid = '".$input["checkid"]."'
  ";

  mysqli_query($connect, $query);

}

//echo json_encode($input);

?>
