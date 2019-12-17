<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<html>
	<head>
	<title>Home page</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel= "stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="fontawesome/css/all.min.css">
		<link rel= "stylesheet" href="css/index.style.css"/>
	
		
	</head>
		
	<body>
		<nav class="navbar navbar-expand-md navbar-dark">
			<ul class = "navbar-nav mr-auto">
				<div class="logo">
				<li class="nav-item">
					<img src="pictures/Logo.png" class="img-responsive" alt="Logo">
				</li>
				</div>
				<li class="nav-item">
					<a class="nav-link" href="Index.php"> Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/facilities.php"> Facilities</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/guidelines.php"> Guidelines</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/reservation.php"> Reservation</a>
				</li>
				</ul>
				
				<ul class = "navbar-nav">
					<div class="user-img ">
						<li class="nav-item-right">			
							<div class="dropdown ">
								<button class="btn btn-secondary btn-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
							<?php  
								$con = mysqli_connect("localhost","root","","room") ;
								$q = mysqli_query($con,"Select * from user where username = '".$_SESSION["username"]."'");
								if($row=mysqli_fetch_assoc($q)){
								if($row['image']==""){
								
								}else{
									echo "<img src='pictures/".$row['image']."' width ='200' height='20' alt ='Logo' class='img-responsive'>";
								}
								
								}
							?>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" tabindex="-1" href="#"><?php echo $_SESSION['username']; ?></a>
									<a class="dropdown-item" tabindex="-1" href="./pages/profile.php">Profile</a>
									<?php  if (isset($_SESSION['username'])) : ?>
									<a class="dropdown-item" tabindex="-1" href="./pages/login.php">Log Out<?php endif ?></a>
								</ul>
							</div>
						</li>
					</div>
				</ul>
		</nav>
		
		<div class= "main-section">
			<div class="container">
				<div class="row">
					<div class = "col">
						<div class="index-img ">
							<img src="pictures/Home.jpg" class="img-responsive" alt="No image">
						</div>
					</div>
					<div class = "col">
						<!--<div class = "box"> -->
						<h6>
						<p>RoomScape is a webpage for SLU students for reserving school facility, learning about rooms in 
                            Devesse Building. With a hundreds of rooms inside, it is certain that most are used and some are 
                            not as well, the students/professors who are interested to provide an event in one of the facility 
                            rooms are bound to be occupied. Although there are instances that is already occupied and it takes 
                            effort to initiate an interview for another room or another schedule to provide a vacancy.</p>
                        <p>This webpage will require the user to log-in although the accounts must used ONLY by SLU members and 
                            will be prompt to have oppurtunity to roam around rooms as well as granting them the permission to 
                            provide a reservation for an interview with the Dean's within the Dean's office or Equipment room. 
                            Overall, this will help users to register, reserve with this webpage through PC and devices.</p>
							</h6>
						</div>
					</div>
				</div>
			</div>	
		</div>	
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</body>
</html>