<html>  
    <body>  
        <div class="Balance">  
				<div class="searchID">
					<form method="post" id="poll_form">
						<h3>Enter ID Number</h3>
						<div class="radio">
						<label><h4><input type="text" name="id" class="id" placeholder="Enter Id Number"/></h4></label>
						</div>
						<input type="submit" name="search" class="search" value="Search"/>
					</form>
					<br />
					<table>
							<?php
								include('dbase.php');  
								if(isset($_POST['id'])) {
									$id = $_POST['id'];
									$idnum = "SELECT IDno, books, misc, tuition, service, balance FROM feestudent WHERE IDno = '$id' ";
									$idno = "SELECT IDno from feestudent";
									$query_run = mysqli_query($conn,$idnum);
									while($row = mysqli_fetch_array($query_run)) {
											echo '
												<tr>
													<th>Books Fee </th>
													<th>Misc Fee </th>
													<th>Tuition Fee </th>
													<th>Service Fee </th>
													<th>Remaining Balance </th>
												</tr> <br />
							                   		<tr>
							                    	<td>'.$row["IDno"].'</td>
							                    	<td>'.$row["books"].'</td>
							                    	<td>'.$row["misc"].'</td>
							                   	 	<td>'.$row["tuition"].'</td>
							                    	<td>'.$row["service"].'</td>
							                    	<td>'.$row["balance"].'</td>
							                    </tr
							                      ';
									}
									if($_POST['id']!= $idno) {
										echo "No Match Found";
									}
								}
								
							?>
				</div>
		</div>
    </body>  
</html>  

        