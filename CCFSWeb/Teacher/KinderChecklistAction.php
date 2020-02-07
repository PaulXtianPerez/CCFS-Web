<?php
//ObservedValuesAction.php
$connect = mysqli_connect('localhost', 'root', '', 'ccfs');

//$value = isset($_GET['box']) ? 1 : 0;

//$dbc = mysqli_connect('localhost', 'root', 'root', 'database') or die('Connection error!');

//if ($value == 1) {

//$checkbox = "UPDATE checklist('firstrating', 'secondrating', 'thirdrating', 'fourthrating') VALUES('$value', '$value', '$value', '$value')";

//mysqli_query($connect , $checkbox) or die('Database error, check!');

//}

//header('location:index.php');

/*$input = filter_input_array(INPUT_POST);

$firstVal = mysqli_real_escape_string($connect, $input["firstrating"]);
$secondVal = mysqli_real_escape_string($connect, $input["secondrating"]);
$thirdVal = mysqli_real_escape_string($connect, $input["thirdrating"]);
$fourthVal = mysqli_real_escape_string($connect, $input["fourthrating"]);



  $query = "
  UPDATE checklist
  SET firstrating = '".$firstVal."',
  secondrating = '".$secondVal."',
  thirdrating = '".$thirdVal."',
  fourthrating = '".$fourthVal."'
  WHERE checkid = '".$input["checkid"]."'
  ";

  mysqli_query($connect, $query);


 echo json_encode($input);

*/


    function add_contact_details_availability(){
    if($_POST['action'] == 'checkbox-select') {
         //$checkbox = $_POST['id'];
         //$checked = $_POST['firstrating'];
    	$checked = mysqli_real_escape_string($connect, $_POST["status"]);
        // Your MySQL code here
         //$query = "UPDATE checklist SET ('firstrating', 'secondrating', 'thirdrating', 'fourthrating') VALUES('$checked', '$checked', '$checked', '$checked')";
         $query = "
  UPDATE checklist
  SET firstrating = '".$checked."',
  secondrating = '".$secondVal."',
  thirdrating = '".$thirdVal."',
  fourthrating = '".$fourthVal."'
  ";

mysqli_query($connect , $query) or die('Database error, check!');

        echo 'Updated';
    }
           echo 'Code ran';
}



?>
