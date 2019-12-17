<?php include('server.php');
 include ('edit.php');?>
<html>
	<head>
	<title>Reservations page</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel= "stylesheet" href="../css/font.css"/>
		<link rel="stylesheet" href="../fontawesome/css/all.min.css">
		<link rel= "stylesheet" href="../css/guidelines.style.css"/>
	</head>
		ADMIN
	<body>
		<!-- Navigation start -->
			
				</div>
				<li>
					<a href="admin.php"> Home</a>
				</li>
				<li>
					<a href="facilities.php">Register</a>
				</li>
				<li >
					<a href="guidelines.php">SchoolYear</a>
				</li>
				<li class="nav-item">
					<a  href="reservation.php">View Fees</a>
				</li>
				</ul>
				
	
								<ul >
									<a tabindex="-1" href="#"><?php echo $_SESSION['username']; ?></a>
									<a tabindex="-1" href="../pages/profile.php">Profile</a>
									<?php  if (isset($_SESSION['username'])) : ?>
									<a tabindex="-1" href="../pages/login.php">Log Out<?php endif ?></a>
								</ul>
							</div>
						</li>
					</div>
				</ul>
		</nav>
		
                        <!-- <?php 
                                    
                                        $sql = "SELECT * FROM reservation"; // table name
                                        $result = $db->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                    ?>              

										<?php
                                            while($row = $result->fetch_assoc()) 
											echo "<tr><th>$row[reservation_id]</th> <th>$row[adviser]</th>  <th>$row[organization]</th>
										<th>$row[activity]</th> <th>$row[event_date]</th>
										<th>$row[status]</th>
										<th>$row[comment]</th>
					</a>";{
                                        ?>
                                        
                                       <?php 
                                           }
                                            } 
                                        ?> -->
<!--  


         

         
 <input type="button" name="view" data-toggle="modal" class="fa fa-eye icon view" id="<?php echo $row["fee_id"]; ?>"></input>        
 <button type="submit" class="btn btn-primary reservation"  data-toggle="modal" data-target="#modalReservation"">Forms</button> 
-->
              ISIPIN KUNG ANO ILALAGAY DITO                   
	</body>
</html>





