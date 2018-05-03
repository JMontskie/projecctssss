<!DOCTYPE html>
<html>
<head>
	<title>National Telecommunications Commission</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
	<!--FONTAWESOME -->
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css" />
	<!-- CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
	 <!-- GOOGLE FONTS-->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#etc_b" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<img src="assets/img/nav-brand.png" width="38" height="38" alt="NATELCOM" class="d-inline-block align-top">
				National Telecommunications Commission-X
			</a>
			<div class="collapse navbar-collapse" id="etc_b">
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img width="35" height="35" src="assets/img/user.png" alt="User-photo">
						<span class="user-info">
							<small>Welcome,</small>
							User
						</span>	
						</a>
						<!-- THIS PART IS THE LOGOUT BUTTON-->
						<div class="dropdown-menu" aria-labelledby="user">
							<a class="dropdown-item" href="#"> <!--Link to Change Password Page -->
								<i class="fas fa-user"></i>
								<small>Change Password</small> 
							</a>
							<a class="dropdown-item" href="#"> <!-- Link to about -->
								<i class="fas fa-file"></i>
								<small>About NTC</small>
							</a>
							<a class="dropdown-item" href="#"> <!-- Logout session -->
								<i class="fas fa-sign-out-alt"></i>
								<small>Logout</small>
							</a>
						</div> <!-- END OF NAVBAR LIST -->
					</li> <!-- END OF LIST -->
				</ul> <!-- END OF UNORDERED LIST --> 	
			</div> <!-- END OF DIV -->
		</nav> <!-- END OF NAVBAR COLLAPSABLE -->
		<div class="container-fluid">
		    <div class="row d-flex d-md-block flex-nowrap wrapper">
		        <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
		                <div class="list-group border-0 card text-center text-md-left">
		                <a href="#" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fab fa-fort-awesome-alt"></i> <span class="d-none d-md-inline">Home</span> </a>
		                <div class="collapse" id="menu1" data-parent="#sidebar">
		                    <!-- <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 1 </a>
		                    <div class="collapse" id="menu1sub1" data-parent="#menu1">
		                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem a</a>
		                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem b</a>
		                        <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem c </a>
		                        <div class="collapse" id="menu1sub1sub1">
		                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem c.1</a>
		                            <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem c.2</a>
		                        </div>
		                        <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem d</a>
		                        <a href="#menu1sub1sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem e </a>
		                        <div class="collapse" id="menu1sub1sub2">
		                            <a href="#" class="list-group-item">Subitem e.1</a>
		                            <a href="#" class="list-group-item">Subitem e.2</a>
		                        </div>
		                    </div> -->
		                </div>
		               		<a href="#various" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fas fa-sort-down float-right"></i> <span class="d-none d-md-inline">Various</span></a>
		                <div class="collapse" id="various" data-parent="#sidebar">
		                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fas fa-inbox"></i> Incoming Various</a>
		                    <a href="#" class="list-group-item" data-parent="#menu3"><i class="fas fa-sign-out-alt"></i> Outgoing Various</a>
		                </div>
		                <a href="#ord" class="list-group-item d-inline-block collapsed" data-toggle="collapse"
		                aria-expanded="false"><i class="fas fa-sort-down float-right"></i> <span class="d-none d-md-inline">Office of Regional Director</span></a>
		                <div class="collapse" id="ord" data-parent="#sidebar">
		                	<a href="#" class="list-group-item" data-parent="ord"><i class="fas fa-inbox"></i> Incoming ORD</a>
		                	<a href="#" class="list-group-item" data-parent="ord"><i class="fas fa-sign-out-alt"></i> Outgoing ORD</a>
		                </div>
		                <a href="#iar" class="list-group-item d-inline-block collapsed" data-toggle="collapse"
		                aria-expanded="false"><span class="d-none d-md-inline">Inspection & Acceptance Report <i class="fas fa-sort-down float-right"></i> </span></a>
		                <div class="collapse" id="iar" data-parent="#sidebar">
		                	<a href="#" class="list-group-item" data-parent="iar"><i class="fas fa-parachute-box"></i> Regular Supply</a>
		                	<a href="#" class="list-group-item" data-parent="iar"><i class="far fa-money-bill-alt"></i> Petty Cash</a>
		                </div>
		            </div>
		        </div>
		        <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
		            <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="fas fa-bars fa-2x py-2 p-1"></i></a>
		    </div>
		</div>


	<!--SCRIPT-->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>