<?php
include('dbase.php');

$input = filter_input_array(INPUT_POST);
$requestData = $_REQUEST;

if(isset($input['search'])) {

  $columns = array(
  // datatable column index  => database column name
  	0 => 'IDno',
  	1 => 'assessfor',
  	2 => 'amount',
    3 => 'duedate',
  	4 => 'asmstatus'
  );

  $id = $input['id'];
  $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
  $result = $conn->query($query) or die($conn->error.__LINE__);
  $actyear = mysqli_fetch_array($result);
  $idnum = "SELECT * FROM assessment WHERE IDno = '".$id."' AND assessfor !='downpayment' AND yearid = '".$actyear[0]."' ORDER BY duedate";
  $idno = "SELECT IDno from assessment";
  $query_run = mysqli_query($conn,$idnum);
  $totalData = mysqli_num_rows($query_run);
  $totalFiltered = $totalData;
  while($row = mysqli_fetch_array($query_run)) {
      /*echo "
              <tr>
              <td>".$row['IDno']."</td>
              <td>".$row['assessfor']."</td>
              <td>".$row['amount']."</td>
              <td>".$row['duedate']."</td>
              <td>".$row["asmstatus"]."</td>
                  </tr>";*/
                  $nestedData = array();

                	$nestedData[] = $row["IDno"];
                	$nestedData[] = $row["assessfor"];
                	$nestedData[] = $row["amount"];
                  $nestedData[] = $row["duedate"];
                	$nestedData[] = $row["asmstatus"];

                	$data[] = $nestedData;
  }

  $json_data = array(
  	"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
  	"recordsTotal"    => intval( $totalData ),  // total number of records
  	"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
  	"data"            => $data   // total data array
  );

  echo json_encode($json_data);  // send data as json format

  $result2 = $conn->query($idno);
  $e = mysqli_fetch_array($result2);

  if($input['id']!= $e[0]) {
    echo "No Match Found";
  }

}else if(isset($input['viewall'])) {
  $query = "SELECT yearid FROM schoolyear WHERE scstatus ='ACTIVE'";
      $result = $conn->query($query) or die($conn->error.__LINE__);
      $actyear = mysqli_fetch_array($result);
  $idnum = "SELECT * FROM assessment WHERE assessfor !='downpayment' AND yearid = $actyear[0] ORDER BY duedate";
  $idno = "SELECT IDno from assessment";
  $query_run = mysqli_query($conn,$idnum);
  while($row = mysqli_fetch_array($query_run)) {
      echo '

                    <tr>
                    <td>'.$row["IDno"].'</td>
                    <td>'.$row["assessfor"].'</td>
                    <td>'.$row["amount"].'</td>
                    <td>'.$row["duedate"].'</td>
                    <td>'.$row["asmstatus"].'</td>
                  </tr>
                    ';
  }
}

?>
