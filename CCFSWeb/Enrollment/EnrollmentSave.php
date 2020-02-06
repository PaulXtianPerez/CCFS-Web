<?php 
$input = filter_input_array(INPUT_POST);
include('Connection.php');
$dateToday = date('Y-m-d');
$query = "SELECT IDno FROM enstudent WHERE IDno = '".$input['studentIDno']."'";
$query1 = "SELECT MAX(IDno) FROM enstudent";
$query2 = "SELECT yearid,yearstart FROM schoolyear WHERE scstatus = 'ACTIVE'";
$query3 = "SELECT * FROM schoolyear WHERE scstatus = 'ACTIVE'";
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);
$result2 = mysqli_query($conn,$query2);
$result3 = mysqli_query($conn,$query3);
$elongated = [];
$elongated1 = [];
$elongated2 = [];
while($row = mysqli_fetch_array($result3)) {
	$elongated2[] = $row ;
}
while($row = mysqli_fetch_array($result2)) {
	$elongated[] = $row ;
}
while($row = mysqli_fetch_array($result1)) {
	$elongated1[] = $row ;
}
$pp = array();
$evolveID = substr($elongated[0]['yearstart'],2).substr($elongated1[0]['MAX(IDno)'],2)+1;


if (mysqli_num_rows($result)==0) {
	$enstud = "INSERT INTO `enstudent`(
		IDno, GivenName, MiddleName,
		SurName, gradelvl, birthdate,
		birthplace, gender, homeTelnum,
		mobilenum, studaddress,
		prevschoolattended, studstat,
		sponsor, faFname, falname,
		faAdd, faMobilenum, faEmail,
		faoccupation, moFname, moLname,
		moAdd, momobilenum, moEmail,
		mooccupation,
		yearid, dateenrolled,
		guardianName, guardianAddress,
		guardianContact) VALUES ('".$evolveID."','".$input['studentGivenName']."',
		'".$input['studentMiddleName']."','".$input['studentSurname']."','".$input['gradeLevel']."',
		'".$input['studentBirthDate']."','".$input['studentBirthPlace']."','".$input['gender']."',
		'".$input['studentTelNum']."','".$input['studentMobNum']."','".$input['studentAddress']."',
		'".$input['studentLastSchool']."','Enrolled','','".$input['fatherFirst']."',
		'".$input['fatherLast']."','".$input['fatherAdd']."','".$input['fatherMobileNum']."',
		'".$input['fatherEmailAdd']."','".$input['fatherOcc']."','".$input['motherFirst']."',
		'".$input['motherLast']."','".$input['motherAdd']."','".$input['motherMobNum']."',
		'".$input['motherEmAdd']."','".$input['motherOcc']."','".$elongated[0]['yearid']."','".$dateToday."',
		'".$input['guardianName']."','".$input['guardianAddress']."','".$input['guardianContact']."')";
	$conn->query($enstud);
	$pp = array('em'=>$elongated[0]['yearid'],'me'=>$evolveID,'ELONTUSK'=>$elongated2[0],'error'=>mysqli_error($conn));
	
	echo json_encode($pp);
}else {
	$update = "UPDATE enstudent SET GivenName = '".$input['studentGivenName']."', MiddleName = '".$input['studentMiddleName']."',
	SurName = '".$input['studentSurname']."' , gradelvl = '".$input['gradeLevel']."' , birthdate = '".$input['studentBirthDate']."' ,
	birthplace = '".$input['studentBirthPlace']."' , gender = '".$input['gender']."' , homeTelnum = '".$input['studentTelNum']."' ,
	mobilenum = '".$input['studentMobNum']."' , studaddress = '".$input['studentAddress']."' ,
	prevschoolattended = '".$input['studentLastSchool']."' ,
	faFname = '".$input['fatherFirst']."' , falname = '".$input['fatherLast']."' ,
	faAdd = '".$input['fatherAdd']."' , faMobilenum = '".$input['fatherMobileNum']."' , faEmail = '".$input['fatherEmailAdd']."' ,
	faoccupation = '".$input['fatherOcc']."' , moFname = '".$input['motherFirst']."' , moLname = '".$input['motherLast']."' ,
	moAdd = '".$input['motherAdd']."' , momobilenum = '".$input['motherMobNum']."' , moEmail = '".$input['motherEmAdd']."' ,
	mooccupation = '".$input['motherOcc']."' ,
	yearid = '".$elongated[0]['yearid']."' , dateenrolled = '".$dateToday."' ,
	guardianName = '".$input['guardianName']."' , guardianAddress = '".$input['guardianAddress']."' ,
	guardianContact = '".$input['guardianContact']."' WHERE IDno = '".$input['studentIDno']."'";
	$conn->query($update);
}
?>