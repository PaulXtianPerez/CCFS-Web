<?php

$output = '';
$connect = mysqli_connect("localhost", "root", "", "ccfs");
$query = "SELECT * FROM `checklist` WHERE (checkdesc IS NULL AND competencydesc IS NULL)";
$result = mysqli_query($connect, $query);
$output .= '
<div class="table-responsive">
     <table id="editObsValTable" class="table table-bordered">
     <thead style="text-align:center;">
       <tr>
         <th style="display:none">Check ID</th>
         <th>Core Values</th>
         <th>Behavioral Statements / Description</th>
       </tr>
     </thead>
     <tbody>';

     while($row = mysqli_fetch_array($result)){
       $output .= '
       <tr>
       <td style="display:none">'.$row["checkid"].'</td>
       <td>'.$row["corevalues"].'</td>
       <td>'.$row["valuedesc"].'</td>
       </tr>
            ';
    }

    $output .= "</tbody></table></div>";
    echo $output;

?>

<!--Tabledit action-->
<?php
$input = filter_input_array(INPUT_POST);

$coreVal = mysqli_real_escape_string($connect, $input["corevalues"]);
$valueVal = mysqli_real_escape_string($connect, $input["valuedesc"]);

if($input["action"] === 'edit'){
  $query = "
  UPDATE checklist
  SET corevalues = '".$coreVal."',
  valuedesc = '".$valueVal."'
  WHERE checkid = '".$input["checkid"]."'
  ";

  mysqli_query($connect, $query);

}

//echo json_encode($input);

?>
