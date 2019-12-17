<?php include 'database.php'; ?>
<?php 
	if(isset($_POST['submit'])){
		
		

		
		$query = "INSERT INTO `schoolyear`(yearstart, yearend, totalAtt, totalSec, dateStart, dateEnd, preTuition, preMisc, preBook, gradeTuition, gradeMisc, gradeBook, scfee ) values ('$_POST[yearstart]', '$_POST[yearend]', '$_POST[totalAtt]', '$_POST[totalSec]', '$_POST[dateStart]', '$_POST[dateEnd]', '$_POST[preTuition]', '$_POST[preMisc]', '$_POST[preBook]', '$_POST[gradeTuition]', '$_POST[gradeMisc]', '$_POST[gradeBook]', '$_POST[scfee]')";
		
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		


	$message = 'School Year have been added';
	
	}
	
	
?>



<html>
<body>
	<header>

	</header>
	
<main>
	<h1> Add a SchoolYear</h1>
	<?php if(isset($message)){
			echo '<p>' .$message.'</p>';

	}else {}?>
	<form method="post" action="add.php">
		<p> 
			<label> Year Start:</label>
			<input type= "number" name ="yearstart" min = "0"/>
		</p>
		
		<p> 
			<label> Year End:</label>
			<input type= "number" name ="yearend" "0"/>
		</p>

			<p> 
			<label> Number of School Days:</label>
			<input type= "number" name ="totalAtt" "0"/>
		</p>

			

		<p> 
			<label> Total Section:</label>
			<input type= "number" name ="totalSec" "0"/>
		</p>

		<p> 
			<label> Date Start:</label>
			<input type= "date" name ="dateStart" "0"/>
		</p>

		<p> 
			<label> Date End:</label>
			<input type= "date" name ="dateEnd" "0"/>
		</p>

		<p><h3>PreSchool Fee</h3>

			<label> PreSchool Tuition:</label>
			<input type= "number" name ="preTuition" "0"/>
		</p>

		<p>
			<label> PreSchool Book:</label>
			<input type= "number" name ="preBook" "0"/>
		</p>
		<p>
			<label> PreSchool Misc:</label>
			<input type= "number" name ="preMisc" "0"/>
		</p>

		<p><h3>GradeSchool Fee</h3>

			<label> Grade School Tuition:</label>
			<input type= "number" name ="gradeTuition" "0"/>
		</p>

		<p>
			<label> Grade School Misc:</label>
			<input type= "number" name ="gradeMisc" "0"/>
		</p>
		<p>
			<label> Grade School Book:</label>
			<input type= "number" name ="gradeBook" "0"/>
		</p>

		<p> 
			<label> Total Fee:</label>
			<input type= "number" name ="scfee" "0"/>
		</p>

		<p>
		<input type = "submit" name = "submit" value = "submit" "0"/>
		</p>

</main>

</body>
</html>

