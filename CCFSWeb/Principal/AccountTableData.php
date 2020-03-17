<?php
// Database connection
include("database.php");

// storing  request (ie, get/post) global array to a variable
$requestData = $_REQUEST;


$columns = array(
// datatable column index  => database column name
	0 => 'accid',
	1 => 'fname','lname',
	2 => 'username',
  3 => 'type',
	4 => 'accstatus'
);

// getting total number records without any search
$sql = "SELECT * FROM accounts";
$query = mysqli_query($mysqli, $sql) or die("AccountTableData.php: get accounts");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * FROM accounts WHERE 1=1";
if(!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.= " AND ( accid LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR fname LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR lname LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR username LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR type LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR accstatus LIKE '".$requestData['search']['value']."%' )";
}

$query = mysqli_query($mysqli, $sql) or die("AccountTableData.php: get accounts");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.= " ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
$query = mysqli_query($mysqli, $sql) or die("AccountTableData.php: get accounts");

$data = array();
while($row = mysqli_fetch_array($query)) {  // preparing an array
	$nestedData = array();

	$nestedData[] = $row["accid"];
	$nestedData[] = $row["fname"] .' '. $row["lname"];
	$nestedData[] = $row["username"];
  $nestedData[] = $row["type"];
	$nestedData[] = $row["accstatus"];
	$nestedData[] = '<input type="button" name="reset" value="Reset" id="'.$row["accid"] .'" class="btn btn-danger btn-sm reset_data" />';
	$nestedData[] = '<input type="button" name="edit" value="Edit" id="'.$row["accid"] .'" class="btn btn-info btn-sm edit_data" />';

	$data[] = $nestedData;
}



$json_data = array(
	"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
	"recordsTotal"    => intval( $totalData ),  // total number of records
	"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	"data"            => $data   // total data array
);

echo json_encode($json_data);  // send data as json format

?>
