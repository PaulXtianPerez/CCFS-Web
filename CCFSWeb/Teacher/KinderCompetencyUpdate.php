<?php
include("Connection.php");
$select_query = "SELECT * FROM `checklist` WHERE (checkdesc IS NULL AND valuedesc IS NULL) ORDER BY competencyvalues";
$output = '';

if(empty($_POST)){
  $result = mysqli_query($conn, $select_query);
  $output .= '
  <div class="table-responsive">
     <table id="editCompetencyTable" class="table table-bordered">
     <thead style="text-align:center;">
       <tr>
         <th style="display:none">Check ID</th>
         <th>Domain</th>
         <th>Competency / Description</th>
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

    } else if(!empty($_POST)){
      $insert_query = "INSERT INTO `checklist`(competencyvalues, competencydesc) VALUES ('$_POST[domain]', '$_POST[description]')";

      if(mysqli_query($conn, $insert_query)){
        echo "<b><p style='color:#0AC02A; text-align:center; font-size:22px;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully added." . "</p></b>";
        $_POST = array();
        $result = mysqli_query($conn, $select_query);
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
          }
        }

?>


<script type="text/javascript">
$('#editCompetencyTable').Tabledit({
  url: 'ChecklistsDescriptions.php',
  buttons: {
    edit: {
      class: 'btn btn-info btn-xs edit_data',
      html: '<span data-toggle="tooltip" title="Edit description"><i class="fas fa-edit" aria-hidden="true"></i></span>',
      action: 'edit'
    },
    delete: {
        class: 'btn btn-danger btn-xs edit_data',
        html: '<span data-toggle="tooltip" title="Delete row"><i class="fas fa-trash" aria-hidden="true"></i></span>',
        action: 'delete'
      },
    },
    columns: {
      identifier: [0, 'checkid'],
      editable: [[1, 'competencyvalues'], [2, 'competencydesc']]
    },
    onSuccess:function(data, textStatus, jqXHR){
      if(data.action == 'delete'){
        $('#'+data.id).remove();
      }
    }
  });
</script>
