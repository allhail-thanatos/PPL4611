<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/admin/images/icons/favicon.ico') ?>" />
<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css') ?>" >

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>" >

	<link rel="stylesheet" type="text/css"href="<?php echo base_url('assets/admin/vendor/animate/animate.css') ?>" >
	
	<link rel="stylesheet" type="text/css"href="<?php echo base_url('assets/admin/vendor/css-hamburgers/hamburgers.min.css') ?>" >

	<link rel="stylesheet" type="text/css"href="<?php echo base_url('assets/admin/vendor/select2/select2.min.css') ?>" >

	<link rel="stylesheet" type="text/css"href="<?php echo base_url('assets/admin/css/util.css') ?>" >
	<link rel="stylesheet" type="text/css"href="<?php echo base_url('assets/admin/css/main.css') ?>" >

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" >
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/admin/images/img-01.png')?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url('index.php/clogin/login') ?>" method="post">
					<span class="login100-form-title" style="width: 350px;">
						<!-- Member --> Login
						<h4>
							<?php
                              if($this->session->flashdata('sukses')) {
                                echo '<p class="warning" style=" color:red; ">'.$this->session->flashdata('sukses').'</p>';} 
                                echo validation_errors('<p class="warning" style=" color:red;">','</p>');
                            ?>
                        </h4>
					</span>

					<div class="wrap-input100 validate-input" style="width: 350px;" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email_user" id="email_user" placeholder="Email" autofocus="autofocus" required="required">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" style="width: 350px;" data-validate = "Password is required" > 
						<input class="input100" type="password" name="pass_user" id="pass_user" placeholder="Password" autofocus="autofocus" required="required">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn" style="width: 350px;">
						<!-- <button class="login100-form-btn" style="background-color:royalblue;">
							Login
						</button> -->
						<input type="submit" name="submit" id="submit" value="Login" class="login100-form-btn" style="background-color:royalblue;">
					</div>
					<div class="container-login100-form-btn" style="width: 350px;">
						<button class="login100-form-btn" style="width: 150px;"><a href="<?php echo base_url('index.php/cregister') ?>">
							Register
						</a>
						</button>
						<button class="login100-form-btn" style="width: 200px;background-color:red;">
							Forgot Password
						</button>
					</div>

					<div class="text-center p-t-12">
						<!-- <span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a> -->
					</div>

					<div class="text-center p-t-136">
						<!-- <a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!-- Javascript -->
	<script src="<?php echo base_url('assets/admin/vendor/jquery/jquery-3.2.1.min.js')?>" ></script>
	<script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/popper.js')?>" ></script>
	<script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js')?>" ></script>
	<script src="<?php echo base_url('assets/admin/vendor/select2/select2.min.js')?>" ></script>
	<script src="<?php echo base_url('assets/admin/vendor/tilt/tilt.jquery.min.js')?>" ></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url('assets/admin/js/main.js')?>" ></script>

</body>
</html>