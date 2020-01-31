<!--Tabledit action-->
<?php
include("Connection.php");
$input = filter_input_array(INPUT_POST);

$checkValues = mysqli_real_escape_string($conn, $input["checkvalues"]);
$checkDesc = mysqli_real_escape_string($conn, $input["checkdesc"]);
$compValues = mysqli_real_escape_string($conn, $input["competencyvalues"]);
$compDesc = mysqli_real_escape_string($conn, $input["competencydesc"]);
$coreValues = mysqli_real_escape_string($conn, $input["corevalues"]);
$valueDesc = mysqli_real_escape_string($conn, $input["valuedesc"]);

if(isset($input['checkvalues']) || isset($input['checkdesc'])){
  if($input["action"] === 'edit'){
    $query = "
    UPDATE checklist
    SET checkvalues = '".$checkValues."',
    checkdesc = '".$checkDesc."'
    WHERE checkid = '".$input["checkid"]."'
    ";
    mysqli_query($conn, $query);
  }
  echo json_encode($input);
}

else if(isset($input['competencyvalues']) || isset($input['competencydesc'])){
  if($input["action"] === 'edit'){
    $query = "
    UPDATE checklist
    SET competencyvalues = '".$compValues."',
    competencydesc = '".$compDesc."'
    WHERE checkid = '".$input["checkid"]."'
    ";
    mysqli_query($conn, $query);
  }
  echo json_encode($input);
}

else if(isset($input['corevalues']) || isset($input['valuedesc'])){
  if($input["action"] === 'edit'){
    $query = "
    UPDATE checklist
    SET corevalues = '".$coreValues."',
    valuedesc = '".$valueDesc."'
    WHERE checkid = '".$input["checkid"]."'
    ";
    mysqli_query($conn, $query);
  }
  echo json_encode($input);
}

if($input["action"] === 'delete'){
  $query = "
  DELETE FROM checklist WHERE checkid = '".$input["checkid"]."'
  ";
  mysqli_query($conn, $query);
}

mysqli_close($conn);

?>
