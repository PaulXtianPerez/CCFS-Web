<?php

$output = '';
$connect = mysqli_connect("localhost", "root", "", "ccfs");
$query = "SELECT * FROM `checklist` WHERE (competencydesc IS NULL AND valuedesc IS NULL)";
$result = mysqli_query($connect, $query);
$output .= '
<div class="table-responsive">
     <table id="editChecklistTable" class="table table-bordered">
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
       <td>'.$row["checkvalues"].'</td>
       <td>'.$row["checkdesc"].'</td>
       </tr>
            ';
      }

      $output .= "</tbody></table></div>";
      echo $output;

 ?>

 <!--Tabledit action-->
 <?php
 $input = filter_input_array(INPUT_POST);

 $checkVal = mysqli_real_escape_string($connect, $input["checkvalues"]);
 $descVal = mysqli_real_escape_string($connect, $input["checkdesc"]);

 if($input["action"] === 'edit'){
   $query = "
   UPDATE checklist
   SET checkvalues = '".$checkVal."',
   checkdesc = '".$descVal."'
   WHERE checkid = '".$input["checkid"]."'
   ";

   mysqli_query($connect, $query);

 }

 //echo json_encode($input);

 ?>
