<?php
 include("database.php");
 if(isset($_POST["curr_name"])){
      $output = '';
      $query = "SELECT * FROM curriculum WHERE curname = '".$_POST["curr_name"]."'";
      $result = mysqli_query($mysqli, $query);
      $output .= '
      <div class="table-responsive">
           <b><p>Curriculum: '.$_POST["curr_name"].'</p></b>
           <table class="table table-bordered">
           <thead style="text-align:center;">
             <tr>
               <th>Grade Level</th>
               <th>Subjects</th>
             </tr>
           </thead>
           <tbody>';
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td width="30%">'.$row["grade"].'</td>
                     <td id="WELON">'
                     .$row["subjname1"]." , ". $row["subjname2"]." , ".$row["subjname3"]." , ". $row["subjname4"]." , ".$row["subjname5"]." , ". $row["subjname6"]." , "
                     .$row["subjname7"]." , ". $row["subjname8"]." , ".$row["subjname9"]." , ". $row["subjname10"]." , ".$row["subjname11"]." , ". $row["subjname12"]." , "
                     .$row["subjname13"]." , ". $row["subjname14"]." , ".$row["subjname15"]." , ". $row["subjname16"]." , ".$row["subjname17"]." , ". $row["subjname18"]." , "
                     .$row["subjname19"]." , ". $row["subjname20"].
                     '</td>
                </tr>
                ';
      }
      $output .= "</tbody></table></div>";
      echo $output;
 }
 ?>
