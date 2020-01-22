<?php

// connect to mysql
$connect = mysqli_connect("localhost", "root", "", "ccfs");

// mysql select query
$activeYrStart = "SELECT `yearstart` FROM `schoolyear` WHERE `scstatus`='active'";

// result for method
$result1 = $connect->query($activeYrStart);
$data3 = array();
while($row = $result1->fetch_assoc()) {
    $data3[0] = $row['yearstart'];
}

// mysql select query
$activeYrEnd = "SELECT `yearend` FROM `schoolyear` WHERE `scstatus`='active'";

// result for method
$result2 = $connect->query($activeYrEnd);
$data2 = array();
while($row = $result2->fetch_assoc()) {
    $data2[1] = $row['yearend'];
}
// print the active school year
if(empty($data3[0]) || empty($data2[1])) {
  echo "-----";
} else {
  echo $data3[0]; echo "-"; echo $data2[1];
}
?>
