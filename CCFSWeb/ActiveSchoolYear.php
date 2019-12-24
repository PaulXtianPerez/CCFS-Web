<?php

// connect to mysql
$connect = mysqli_connect("localhost", "root", "", "ccfs");

// mysql select query
//$activeSchYr = "SELECT CONCAT(`yearstart`, '-',`yearend`) FROM `schoolyear` WHERE `scstatus`='active'";
$activeYrStart = "SELECT `yearstart` FROM `schoolyear` WHERE `scstatus`='active'";

// result for method
$result1 = $connect->query($activeYrStart);
$data1 = array();
while($row = $result1->fetch_assoc()) {
    $data1[0] = $row['yearstart'];
}

// mysql select query
$activeYrEnd = "SELECT `yearend` FROM `schoolyear` WHERE `scstatus`='active'";

// result for method
$result2 = $connect->query($activeYrEnd);
$data2 = array();
while($row = $result2->fetch_assoc()) {
    $data2[1] = $row['yearend'];
}

?>
