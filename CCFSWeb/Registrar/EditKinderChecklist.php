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
           <td>'.$row["checkvalues"].'</td>
           <td>'.$row["checkdesc"].'</td>
           </tr>
                ';
      }
      $output .= "</tbody></table></div>";
      echo $output;


      if(!empty($_POST)){
        //$name = mysqli_real_escape_string($connect, $_POST["name"]);  
        //$address = mysqli_real_escape_string($connect, $_POST["address"]); 
        if($_POST["checkid"] = '') {  
           $queryInsert = "INSERT INTO `checklist`(checkvalues, checkdesc) VALUES ('$_POST[domain]', '$_POST[description]')";
        } 

      }
      

 ?>

<!--Tabledit-->
<script type="text/javascript">
$('#editChecklistTable').Tabledit({
  url: 'SectionUpdate.php',
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
      identifier: [0, 'secID'],
      editable: [[2, 'checkdesc']]
  },
  onSuccess:function(data, textStatus, jqXHR){
   if(data.action == 'delete'){
     $('#'+data.id).remove();
   }
  }
});
</script>
