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
               <th>Check ID</th>
               <th>Domain</th>
               <th>Description</th>
             </tr>
           </thead>
           <tbody>';
      while($row = mysqli_fetch_array($result)){
           $output .= '
           <tr>
           <td>'.$row["checkid"].'</td>
           <td>'.$row["competencyvalues"].'</td>
           <td>'.$row["competencydesc"].'</td>
           </tr>
                ';
      }
      $output .= "</tbody></table></div>";
      echo $output;

      ?>