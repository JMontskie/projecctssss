

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LOGIN PAGE</title>
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />
	<!--FONTAWESOME -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/fontawesome-all.css" />
	<!-- CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/custom.css" />
	 <!-- GOOGLE FONTS-->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url("<?= base_url() ?>assets/img/ntc.jpg");
			background-size: cover;
		}
		footer{

		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				
				<br />
				<h2 class=""> LOGIN </h2>
				<H5>(Enter correct details to get access)</H5>
				<br />
			</div>
		</div>

		<div class="row ">
			<div class="col-md-6 mx-auto">
				<div class="card rounded-0">
					<div class="card-header">
						<div class="card-title">
							<?php  
								$success_msg = $this->session->flashdata('success_msg');
								$error_msg = $this->session->flashdata('error_msg');

								if($success_msg){
							?>		
								<div class="alert alert-success" role="alert">
									<?php echo $success_msg; ?>
								</div>
							<?php	
								}
								if($error_msg){
							?>
								<div class="alert alert-danger" role="alert">
									<?php echo $error_msg; ?>
								</div>
							<?php
								}
							?>
							<h5 class="mb-0"><strong>Enter Details to Login</strong></h5>							
						</div>
					</div><!-- END OF card-header--> 
					<div class="card-body">
						
						<center><img src="<?= base_url() ?>assets/img/ntc.png"></center>
						<br />
						<form role="form" action="<?=base_url('login/login_user'); ?>" method="POST" id="frmLogin"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
									<input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" autofocus="autofocus" required>
							</div> <!-- END OF FORM GROUP (USERNAME) -->
							
							<br />

							<div class="input-group">
								<div class="input-group-prepend"> 
									<span class="input-group-text"><i class="fas fa-lock"></i></span>
								</div>
								<input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
							</div> <!-- END OF FORM GROUP (PASSWORD) --> 

							<br />

							<div class="form-group">
								<div class="form-check">
									<label class="form-check-label">
	                                      <input type="checkbox" class="form-check-input" id="RememberMe">
	                                      <span class="form-check-label small text-dark" for="RememberMe">Remember Me on this computer</span>
	                                </label>
	                                <span class="float-right small">
	                                	<a href="#">Forgot Password?</a>
	                                </span>
								</div>
							</div>
							

							<div class="field-group">
								<div>
									<input type="submit" name="login" value="Login" class="btn btn-success">
									</span>
								</div>
							</div>
							
							<hr>
							Don't have an account? <a href="#">Sign Up</a>
						</form><!-- END OF FORM -->
					</div><!-- END OF PANEL BODY -->
				</div><!-- END OF PANEL -->  
			</div><!-- END OF CLASS-MD -->
		</div><!-- END OF CLASS ROW -->
	</div><!-- END OF CLASS CONTAINTER -->

	<!--SCRIPT-->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
</body>
</html>