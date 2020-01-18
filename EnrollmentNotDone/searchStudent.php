<?php
  include('Connection.php');
  include('database.php');

  if(isset($_GET['s'])){
    $s      = $_GET['s'];
    $query  = "SELECT * From enstudent WHERE IDno='$s' OR SurName='$s' LIMIT 1";
    $result = mysqli_query($mysqli, $query);
    $data   = array();

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      }

      echo json_encode(array(
        'data'    => $data[0],
        'message' => 'Successfully found.',
      ));
      exit();
    }
  }

  echo json_encode(array(
    'data'    => null,
    'message' => 'Cannot find student.',
  ));
  exit();
?>