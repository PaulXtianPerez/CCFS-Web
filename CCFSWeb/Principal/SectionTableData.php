<?php
// Database connection
include("database.php");

// storing  request (ie, get/post) global array to a variable
$requestData = $_REQUEST;


$columns = array(
// datatable column index  => database column name
	0 => 'sename','gradelvl',
	1 => 'adviserlname'
);

// getting total number records without any search
$sql = "SELECT * FROM `section` WHERE yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE')";
$query = mysqli_query($mysqli, $sql) or die("SectionTableData.php: get sections");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * FROM `section` WHERE 1=1 AND yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE')";
if(!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.= " AND ( sename LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR gradelvl LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR adviserlname LIKE '".$requestData['search']['value']."%' )";
}

$query = mysqli_query($mysqli, $sql) or die("SectionTableData.php: get sections");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.= " ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
$query = mysqli_query($mysqli, $sql) or die("SectionTableData.php: get sections");

$data = array();
while($row = mysqli_fetch_array($query)) {  // preparing an array
	$nestedData = array();

	$nestedData[] = $row["gradelvl"] .' - '. $row["sename"];
	$nestedData[] = '<div contenteditable class="update" data-id="'.$row["secID"].'" data-column="adviserlname">' . $row["adviserlname"] . '</div>';
	$nestedData[] = '<button type="button" name="delete" class="btn btn-danger btn-sm delete" id="'.$row["secID"].'"><span data-toggle="tooltip" title="Delete section"><i class="fas fa-trash" aria-hidden="true"></i></span></button>';

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
