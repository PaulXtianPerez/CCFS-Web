<?php 
	session_start();

	include('Connection.php');
	include('database.php');

	if (!isset($_POST['enroll'])) return false;

	$query   = mysqli_query($mysqli, "SELECT * FROM enstudent WHERE IDno = '$_POST[studentIDno]' LIMIT 1");
	$student = mysqli_fetch_assoc( $query );

	$query        = mysqli_query($mysqli, "SELECT * FROM enstudent ORDER BY enid DESC LIMIT 1");
	$student_last = mysqli_fetch_assoc( $query );

	if ( $student ) { // UPDATE STUDENT INFO
		$query = "UPDATE `enstudent` SET
			 GivenName='$_POST[studentGivenName]', MiddleName='$_POST[studentMiddleName]',
			 SurName='$_POST[studentSurname]', gradelvl='$_POST[gradeLevel]', birthdate='$_POST[studentBirthDate]',
			 birthplace='$_POST[studentBirthPlace]', gender='$_POST[gender]', homeTelnum='$_POST[studentTelNum]',
			 mobilenum='$_POST[studentMobNum]', studaddress='$_POST[studentAddress]',
			 prevschoolattended='$_POST[studentLastSchool]',
			 faFname='$_POST[fatherFirst]', falname='$_POST[fatherLast]',
			 faAdd='$_POST[fatherAdd]', faMobilenum='$_POST[fatherMobileNum]',faEmail='$_POST[fatherEmailAdd]',
			 faoccupation='$_POST[fatherOcc]', moFname='$_POST[motherFirst]', moLname='$_POST[motherLast]',
			 moAdd='$_POST[motherAdd]', momobilenum='$_POST[motherMobNum]', moEmail='$_POST[motherEmAdd]',
			 mooccupation='$_POST[motherOcc]',
			 yearid='".date('y')."', dateenrolled='".date('Y-m-d')."',
			 guardianName='$_POST[guardianName]', guardianAddress='$_POST[guardianAddress]',
			 guardianContact='$_POST[guardianContact]'
 		WHERE IDno = '$student_last[IDno]'";


	    if ( mysqli_query($mysqli, $query)) {
	    	echo 'UPDATE SAVE';
	    }
	} else { // INSERT NEW STUDENT
		$query = "INSERT INTO `enstudent`(
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
			 guardianContact)
 		VALUES ('". ($student_last['IDno'] + 1) ."','$_POST[studentGivenName]','$_POST[studentMiddleName]',
 			 '$_POST[studentSurname]','$_POST[gradeLevel]','$_POST[studentBirthDate]',
	         '$_POST[studentBirthPlace]','$_POST[gender]','$_POST[studentTelNum]',
	         '$_POST[studentMobNum]','$_POST[studentAddress]',
	         '$_POST[studentLastSchool]','Enrolled',
	         '','$_POST[fatherFirst]','$_POST[fatherLast]',
	         '$_POST[fatherAdd]','$_POST[fatherMobileNum]','$_POST[fatherEmailAdd]',
	         '$_POST[fatherOcc]','$_POST[motherFirst]','$_POST[motherLast]',
	         '$_POST[motherAdd]','$_POST[motherMobNum]','$_POST[motherEmAdd]',
	         '$_POST[motherOcc]',
	         '".date('y')."','".date('Y-m-d')."',
	         '$_POST[guardianName]','$_POST[guardianAddress]',
	         '$_POST[guardianContact]')";

	    if ( mysqli_query($mysqli, $query)) {
	    	echo 'INSERT SAVE';
	    }
	}





	echo "<pre>";
	print_r( $_POST);
	exit();


	header( "Location: $_POST[redirect_to]" );
