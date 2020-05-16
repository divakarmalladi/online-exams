<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <title>Forgot Password - KeytoQuestions</title>
	  <link rel="shortcut icon" type="image/png" href="<?php echo FAVICON16;?>"/>
	  <link rel="shortcut icon" type="image/png" href="<?php echo FAVICON32;?>"/>
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	  <!-- Bootstrap core CSS -->
	  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	  <!-- Material Design Bootstrap -->
	  <link href="<?php echo base_url('assets/css/mdb.min.css');?>" rel="stylesheet">
	  <!-- Your custom styles (optional) -->
	 <style type="text/css">
	 	.login-form{width:35%;margin: auto;padding-top: 10px !important;}.error{color:red;font-size: 12px; font-weight: 500;}.height50{height: 50px;}
		@media screen and (max-width: 767px) and (min-width: 320px){.login-form{width:100% !important;padding-top: 10px !important;}}
	</style>
	</head>

	<body>
		<!-- Default form login -->
		<form class="text-center p-5 login-form" method="post" id="login_form">
			<p class="h4 mb-4">
				<img src="<?php echo $this->logo;?>" class="img-fluid" alt="Responsive image">
			</p>
		    <p class="h4 mb-4">Forgot Password</p>

		    <!-- Email -->
		    <span class="error" id="success_error"></span>
		    <div class="form-group height50 text-left">
		    <input type="text"  id="signup_email" name="signup_email-email-5-80" class="form-control" placeholder="E-mail">
		    <span class="error" id="signup_email_error"></span>
			</div>
		    
		    <div class="d-flex justify-content-around">
		        <div>
		            <!-- Forgot password -->
		            <a href="<?php echo base_url();?>login">Login</a>
		        </div>
		    </div>

		    <!-- Sign in button -->
		    <button  class="btn btn-info btn-block my-4" type="submit" id="submit">Sign in</button>

		    <!-- Register -->
		    <p>Not a member?
		        <a href="<?php echo base_url();?>registration">Register</a>
		    </p>

		    <!-- Social login -->
		    <p>or sign in with:</p>

		    <a href="#" class="light-blue-text mx-2">
		        <i class="fab fa-facebook-f"></i>
		    </a>
		    <a href="#" class="light-blue-text mx-2">
		        <i class="fab fa-twitter"></i>
		    </a>
		    <a href="#" class="light-blue-text mx-2">
		        <i class="fab fa-linkedin-in"></i>
		    </a>
		    <a href="#" class="light-blue-text mx-2">
		        <i class="fab fa-github"></i>
		    </a>

		</form>
		<!-- Default form login -->
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/mdb.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/validations.js');?>"></script>
		<script type="text/javascript">
			$('#login_form').on('submit', function(e){
				var err = new Object();
				err.signup_email = email_validate($('#signup_email').val().trim(),5,80,'Email');
				var errors = error_list(err);
				if(Object.keys(errors).length<=0){
					formValid = ajax_request('forgot-password', '', $('#login_form').serialize(), 'POST', 'submit');
				}
				return false;
			});
		</script>
	</body>
</html>