<?php
include("database.php");

if(!$mysqli){
  die("Could not connect:".mysqli_connect_error());
} else {

  $output = '';
	$insert_query = "INSERT INTO `section`(sename, gradelvl, adviserlname, yearid) values ('$_POST[sename]', '$_POST[gradelvl]', '$_POST[advname]', '$_POST[yearid]')";

  if(mysqli_query($mysqli, $insert_query)){
    $_POST = array();
    $select_query = "SELECT * FROM `section`";
    $result = mysqli_query($mysqli, $select_query);

    $output .= '
    <div class="table-responsive">
    <table id="secListTable" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th style="display:none;">Section ID</th>
          <th width="40%">Section Name</th>
          <th>Adviser Name</th>
        </tr>
      </thead>
      <tbody>
    ';

    while($row = mysqli_fetch_array($result)){
      $output .= '
      <tr>
      <td style="display:none">'.$row["secID"].'</td>
      <td>' . $row["gradelvl"] . ' - ' . $row["sename"] . '</td>
      <td>'.$row["adviserlname"].'</td>
      </tr>
      ';
    }

    $output .= '</tbody></table></div>';
    echo $output;

  } else {
    echo "<span style='color:#FF0004;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Failed to create a new section." . "</span>";
  }

  mysqli_close($mysqli);
}
?>

<!--Tabledit-->
<script type="text/javascript">
$('#secListTable').Tabledit({
  url: 'SectionUpdate.php',
  buttons: {
     edit: {
         class: 'btn btn-info btn-xs edit_data',
         html: '<span data-toggle="tooltip" title="Edit adviser"><i class="fas fa-edit" aria-hidden="true"></i></span>',
         action: 'edit'
     },
     delete: {
         class: 'btn btn-danger btn-xs edit_data',
         html: '<span data-toggle="tooltip" title="Delete section"><i class="fas fa-trash" aria-hidden="true"></i></span>',
         action: 'delete'
       },
     },
  columns: {
      identifier: [0, 'secID'],
      editable: [[2, 'adviserlname']]
  },
  onSuccess:function(data, textStatus, jqXHR){
   if(data.action == 'delete'){
     $('#'+data.id).remove();
   }
 },
  //Prevent empty field
  onAjax: function(action, data, serialize){
    console.log('onAjax(action, serialize)');
    console.log(action);
    console.log(serialize);

    if (action === 'edit'){
      var values_1 = data.split('&');
      var id_1 = values_1[0];
      var notes_1 = values_1[1];

      var values_2 = notes_1.split('=');
      var notes_2 = values_2[1];

      if (notes_2 === ""){
        return false;
      } else {
        return true;
      }
    }
  }
});
</script>
