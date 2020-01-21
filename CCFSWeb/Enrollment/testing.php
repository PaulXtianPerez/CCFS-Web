
  <!-- USE THIS TO TEST IF AUTO INPUT IS WORKING -->
    <!-- REPLACE ALL IDNO TO STATIC VALUES  -->
<?php include 'database.php'; ?>
<?php 
	if(isset($_POST['submit'])){
		
		

		
		$query = "INSERT INTO `feestudent`(tuition, books, misc, service,balance,IDno,yearid) values ('$_POST[tuition]', '$_POST[books]', '$_POST[misc]', '$_POST[service]', '$_POST[balance]', '$_POST[IDno]', '$_POST[yearid]')";
		
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		


	$message = 'Fees have been added';
	//The ID of the last input
	$lastID= mysqli_insert_id($mysqli);
	}
	
	
?>



<html>
<body>
	<header>

	</header>
	
<main>
	<h1> Confirm for price</h1>
	<?php if(isset($message)){
			echo '<p>' .$message.'</p>';
		
	?> 
			
	<?php }else {}?>
	<form method="post" action="autotest.php">
	
	
	<?php
	
	//REPLACE IDno TO STUDENTID WITH VALUE $lastID WHEN TESTING IS DONE
	 $query3 = "Select IDno from curstudent where IDno = '210014'";
           $result3 = $mysqli->query($query3) or die($mysqli->error.__LINE__);
                
                  
          $ID = mysqli_fetch_array($result3);
			 echo $ID[0];
         
			 
	$gradelvl = "Select gradelvl from curstudent JOIN schoolyear on IDno where scstatus = 'ACTIVE' and IDno = '210014' " ;
		$result = $mysqli->query($gradelvl) or die($mysqli->error.__LINE__);
		
		 $lvl = mysqli_fetch_row($result);
		 echo $lvl[0];

		 
			if($lvl[0] == 'GRADE 2'){
				
		$query1 = "Select gradetui2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '210021' and gradelvl = 'GRADE 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<select name = "tuition">
	
		<option name = "tuition"><?php echo $price[0];?></option>
	
		</select>
		</p>
	
			<?php }elseif($lvl[0] == "GRADE 6"){
		$query1 = "Select gradetui6 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '210014' and gradelvl = 'GRADE 6'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		
	<select name = "tuition">
	
		<option name = "tuition"><?php echo $price[0];?></option>
	
		</select>
		</p>
			<?php }?>	

		
	
		
	

		 
		<p> 
		
			<label> BOOKS:</label>
			<?php if($lvl[0] == "GRADE 6"){
		$query1 = "Select grademisc6 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '210014' and gradelvl = 'GRADE 6'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			<?php }?>	
			
		</p>
		
		
		<p>
		<label> SchoolYear:</label>
		<?php $query2 = "Select yearid from schoolyear where scstatus = 'ACTIVE'";
		$result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
		?>	
		
		<select name = "yearid" type = "hidden">
		<?php while ($row2 = mysqli_fetch_array($result2)):;?>
		<option name = "yearid" type = "hidden"><?php echo $row2[0];?></option>
		<?php endwhile;?>
		</select>
		
		<p> 
			<label> ID NUMBER:</label>
			<?php
	// ID NUMBER
	 $query3 = "Select IDno from curstudent where IDno = '210014'";
           $result3 = $mysqli->query($query3) or die($mysqli->error.__LINE__);
                
                  
          $ID = mysqli_fetch_array($result3);
	
			 ?>
				<input type= "text" name ="IDno" value = "<?php echo $ID[0];?>"/>
		</p>


		<p>
		<input type = "submit" name = "submit" value = "submit" "0"/>
		</p>

</main>

</body>
</html>

