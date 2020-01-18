<?php include 'database.php'; ?>
<?php 
	echo "<pre>";
	print_r( $_POST);
	exit();

	if(isset($_POST['submit'])){
		
		// THIS WILL NOT WORK WITHOUT LAST INPUT FROM ENROLLMENT

		
		$query = "INSERT INTO `feestudent`(tuition, books, misc, service, balance, IDno, yearid) values ('$_POST[tuition]', '$_POST[books]', '$_POST[misc]', '$_POST[service]', '$_POST[balance]', '$_POST[IDno]', '$_POST[yearid]')";
		
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
	<form method="post" action="testauto.php">
	
	
	<?php
	
	 $query3 = "Select IDno from curstudent where studentid = '$lastID'";
           $result3 = $mysqli->query($query3) or die($mysqli->error.__LINE__);
                
                  
          $ID = mysqli_fetch_array($result3);
			 echo $ID[0];
         
			 
	$gradelvl = "Select gradelvl from curstudent JOIN schoolyear on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' " ;
		$result = $mysqli->query($gradelvl) or die($mysqli->error.__LINE__);
		
		 $lvl = mysqli_fetch_row($result);
		 echo '<p>'. $lvl[0]. '</p>';
//TUITION 
		 echo '<label>TUITION FEE</label>';
			if(strcasecmp($lvl[0], 'NURSERY') == 0){
				
		$query1 = "Select pretui1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'NURSERY'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 1') == 0){
				
		$query1 = "Select pretui2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'KINDER 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 2') == 0){
				
		$query1 = "Select pretui3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'KINDER 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 1') == 0){
				
		$query1 = "Select gradetui1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 1'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 2') == 0){
				
		$query1 = "Select gradetui2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 3') == 0){
				
		$query1 = "Select gradetui3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 3'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 4') == 0){
				
		$query1 = "Select gradetui4 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 4'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 5') == 0){
				
		$query1 = "Select gradetui5 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 5'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_row($result9);

			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
	
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 6') == 0){
		$query1 = "Select gradetui6 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$ID[0]' and gradelvl = 'GRADE 6'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		
	<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
		</p>
			<?php }?>	

		
		<?php 
		
		
		?>	
		
	

			
		<p> 
  <!-- BOOK FEES -->
			<label> BOOK FEES:</label>
			<?php if(strcasecmp($lvl[0], 'NURSERY') == 0){
		$query1 = "Select prebook1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'NURSERY'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 1') == 0){
		$query1 = "Select prebook2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'KINDER 1'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>

			
		</p>
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 2') == 0){
		$query1 = "Select prebook3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'KINDER 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 1') == 0){
		$query1 = "Select gradebook1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 1'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 2') == 0){
		$query1 = "Select gradebook2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
		
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 3') == 0){
		$query1 = "Select gradebook3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 3'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
	
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 4') == 0){
		$query1 = "Select gradebook4 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 4'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 5') == 0){
		$query1 = "Select gradebook5 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 5'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
			</p><?php }elseif(strcasecmp($lvl[0], 'GRADE 6') == 0){
		$query1 = "Select gradebook6 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 6'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			<?php }?>	
			
		</p>
		<p> 
  <!-- MISC FEES -->
			<label>MISCELLANEOUS FEES:</label>
			<?php if(strcasecmp($lvl[0], 'NURSERY') == 0){
		$query1 = "Select premisc1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'NURSERY'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 1') == 0){
		$query1 = "Select premisc2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'KINDER 1'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>

			
		</p>
			<?php }elseif(strcasecmp($lvl[0], 'KINDER 2') == 0){
		$query1 = "Select premisc3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'KINDER 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 1') == 0){
		$query1 = "Select grademisc1 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 1'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 2') == 0){
		$query1 = "Select grademisc2 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 2'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
		
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 3') == 0){
		$query1 = "Select grademisc3 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 3'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
	
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 4') == 0){
		$query1 = "Select grademisc4 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 4'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
		</p>
			
			<?php }elseif(strcasecmp($lvl[0], 'GRADE 5') == 0){
		$query1 = "Select grademisc5 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 5'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			
			
			</p><?php }elseif(strcasecmp($lvl[0], 'GRADE 6') == 0){
		$query1 = "Select grademisc6 from schoolyear JOIN curstudent on IDno where scstatus = 'ACTIVE' and IDno = '$[0]' and gradelvl = 'GRADE 6'" ;
		$result9 = $mysqli->query($query1) or die($mysqli->error.__LINE__);
		$price = mysqli_fetch_array($result9);
	
			?>
		

	
		<input type= "text" name ="grade" value = "<?php echo $price[0];?>"/>
	</input>
	
		</p>
			<?php }?>	
			
		</p>
		
		
		<p> 
			<label> SERVICE FEES:</label>
			
			<input type= "number" name ="service" min = "0"/>
		</p>

		<input class="form-control" id="guardianName" placeholder="" name="balance">
		
		
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
	
	 $query3 = "Select IDno from curstudent where studentid = '$lastID'";
           $result3 = $mysqli->query($query3) or die($mysqli->error.__LINE__);
                
                  
          $ID = mysqli_fetch_array($result3);
			 echo $ID[0];
			 ?>
				<input type= "text" name ="IDno" value = "<?php echo $ID[0];?>"/>
		</p>



		<p>
		<input type = "submit" name = "submit" value = "submit" "0"/>
		</p>

</main>

</body>
</html>

