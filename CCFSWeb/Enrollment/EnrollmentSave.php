<?php 
$input = filter_input_array(INPUT_POST);
include('Connection.php');
$dateToday = date('Y-m-d');
$query = "SELECT IDno FROM enstudent WHERE IDno = '".$input['studentIDno']."'";
$query1 = "SELECT MAX(IDno) FROM enstudent";
$query2 = "SELECT yearid,yearstart FROM schoolyear WHERE scstatus = 'ACTIVE'";
$result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$query1);
$result2 = mysqli_query($conn,$query2);
$elongated = [];
$elongated1 = [];
while($row = mysqli_fetch_array($result2)) {
	$elongated[] = $row ;
}
while($row = mysqli_fetch_array($result1)) {
	$elongated1[] = $row ;
}
$evolveID = substr($elongated[0]['yearstart'],2).substr($elongated1[0]['MAX(IDno)'],2)+1;
echo $elongated[0]['yearid'];

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
}else {
	$update = "UPDATE enstudent SET GivenName = '".$input['studentGivenName']."', MiddleName = '".$input['studentMiddleName']."',
	SurName = '".$input['studentSurname']."' , gradelvl = '".$input['gender']."' , birthdate = '".$input['studentBirthDate']."' ,
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

	// session_start();

	// include('Connection.php');
	// include('database.php');

	// if (!isset($_POST['enroll'])) return false;

	// $query   = mysqli_query($mysqli, "SELECT * FROM enstudent WHERE IDno = '$_POST[studentIDno]' LIMIT 1");
	// $student = mysqli_fetch_assoc( $query );

	// $query        = mysqli_query($mysqli, "SELECT * FROM enstudent ORDER BY enid DESC LIMIT 1");
	// $student_last = mysqli_fetch_assoc( $query );

	// if ( $student ) { // UPDATE STUDENT INFO
	// 	$query = "UPDATE `enstudent` SET
	// 		 GivenName='$_POST[studentGivenName]', MiddleName='$_POST[studentMiddleName]',
	// 		 SurName='$_POST[studentSurname]', gradelvl='$_POST[gradeLevel]', birthdate='$_POST[studentBirthDate]',
	// 		 birthplace='$_POST[studentBirthPlace]', gender='$_POST[gender]', homeTelnum='$_POST[studentTelNum]',
	// 		 mobilenum='$_POST[studentMobNum]', studaddress='$_POST[studentAddress]',
	// 		 prevschoolattended='$_POST[studentLastSchool]',
	// 		 faFname='$_POST[fatherFirst]', falname='$_POST[fatherLast]',
	// 		 faAdd='$_POST[fatherAdd]', faMobilenum='$_POST[fatherMobileNum]',faEmail='$_POST[fatherEmailAdd]',
	// 		 faoccupation='$_POST[fatherOcc]', moFname='$_POST[motherFirst]', moLname='$_POST[motherLast]',
	// 		 moAdd='$_POST[motherAdd]', momobilenum='$_POST[motherMobNum]', moEmail='$_POST[motherEmAdd]',
	// 		 mooccupation='$_POST[motherOcc]',
	// 		 yearid='".date('y')."', dateenrolled='".date('Y-m-d')."',
	// 		 guardianName='$_POST[guardianName]', guardianAddress='$_POST[guardianAddress]',
	// 		 guardianContact='$_POST[guardianContact]'
 	// 	WHERE IDno = '$student_last[IDno]'";


	//     if ( mysqli_query($mysqli, $query)) {
	//     	echo 'UPDATE SAVE';
	//     }
	// } else { // INSERT NEW STUDENT
	// 	$query = "INSERT INTO `enstudent`(
	// 		 IDno, GivenName, MiddleName,
	// 		 SurName, gradelvl, birthdate,
	// 		 birthplace, gender, homeTelnum,
	// 		 mobilenum, studaddress,
	// 		 prevschoolattended, studstat,
	// 		 sponsor, faFname, falname,
	// 		 faAdd, faMobilenum, faEmail,
	// 		 faoccupation, moFname, moLname,
	// 		 moAdd, momobilenum, moEmail,
	// 		 mooccupation,
	// 		 yearid, dateenrolled,
	// 		 guardianName, guardianAddress,
	// 		 guardianContact)
 	// 	VALUES ('". ($student_last['IDno'] + 1) ."','$_POST[studentGivenName]','$_POST[studentMiddleName]',
 	// 		 '$_POST[studentSurname]','$_POST[gradeLevel]','$_POST[studentBirthDate]',
	//          '$_POST[studentBirthPlace]','$_POST[gender]','$_POST[studentTelNum]',
	//          '$_POST[studentMobNum]','$_POST[studentAddress]',
	//          '$_POST[studentLastSchool]','Enrolled',
	//          '','$_POST[fatherFirst]','$_POST[fatherLast]',
	//          '$_POST[fatherAdd]','$_POST[fatherMobileNum]','$_POST[fatherEmailAdd]',
	//          '$_POST[fatherOcc]','$_POST[motherFirst]','$_POST[motherLast]',
	//          '$_POST[motherAdd]','$_POST[motherMobNum]','$_POST[motherEmAdd]',
	//          '$_POST[motherOcc]',
	//          '".date('y')."','".date('Y-m-d')."',
	//          '$_POST[guardianName]','$_POST[guardianAddress]',
	//          '$_POST[guardianContact]')";

	//     if ( mysqli_query($mysqli, $query)) {
	//     	echo 'INSERT SAVE';
	//     }
	// }





	// echo "<pre>";
	// print_r( $_POST);
	// exit();


	// header( "Location: $_POST[redirect_to]" );

?>