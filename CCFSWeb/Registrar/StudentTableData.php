<?php
// Database connection
include("Connection.php");

// storing  request (ie, get/post) global array to a variable
$requestData = $_REQUEST;


$columns = array(
// datatable column index  => database column name
	0 => 'IDno',
	1 => 'SurName',
	2 => 'GivenName',
  3 => 'MiddleName',
	4 => 'gradelvl',
  5 => 'sename'
);

// getting total number records without any search
$sql = "SELECT IDno, enstudent.SurName, enstudent.GivenName, enstudent.MiddleName, enstudent.gradelvl,section.sename FROM enstudent,section WHERE enstudent.gradelvl = section.gradelvl AND enstudent.yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') GROUP BY IDno";
$query = mysqli_query($conn, $sql) or die("StudentTableData.php: get students");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

//SELECT IDno, enstudent.SurName, enstudent.GivenName, enstudent.MiddleName, enstudent.gradelvl,section.sename FROM enstudent,section WHERE enstudent.gradelvl = section.gradelvl AND enstudent.yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') GROUP BY IDno
//$sql = "SELECT * FROM enstudent WHERE 1=1";
$sql = "SELECT IDno, enstudent.SurName, enstudent.GivenName, enstudent.MiddleName, enstudent.gradelvl,section.sename FROM enstudent,section WHERE 1=1 AND enstudent.gradelvl = section.gradelvl AND enstudent.yearid IN (SELECT yearid from schoolyear WHERE scstatus='ACTIVE') GROUP BY IDno";
if(!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.= " AND ( IDno LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR enstudent.SurName LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR enstudent.GivenName LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR enstudent.MiddleName LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR enstudent.gradelvl LIKE '".$requestData['search']['value']."%' ";
	$sql.= " OR section.sename LIKE '".$requestData['search']['value']."%' )";
}

$query = mysqli_query($conn, $sql) or die("StudentTableData.php: get students");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
$sql.= " ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
$query = mysqli_query($conn, $sql) or die("StudentTableData.php: get students");

$data = array();
while($row = mysqli_fetch_array($query)) {  // preparing an array
	$nestedData = array();

	$nestedData[] = $row["IDno"];
	$nestedData[] = $row["SurName"];
	$nestedData[] = $row["GivenName"];
  $nestedData[] = $row["MiddleName"];
	$nestedData[] = $row["gradelvl"];
  $nestedData[] = $row["sename"];
	$nestedData[] = '<input type="button" name="edit" value="Edit" id="'.$row["IDno"] .'" class="btn btn-info btn-sm edit_data" />';

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
