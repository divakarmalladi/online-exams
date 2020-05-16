<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <title>Registration  - KeytoQuestions</title>
	  <link rel="shortcut icon" type="image/png" href="<?php echo FAVICON16;?>"/>
	  <link rel="shortcut icon" type="image/png" href="<?php echo FAVICON32;?>"/>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	  <link href="<?php echo base_url('assets/css/mdb.min.css');?>" rel="stylesheet">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />	
	  <style type="text/css">
	 	.login-form{width:35%;margin: auto;padding-top: 10px !important;}.error{color:red;font-size: 12px; font-weight: 500;}.height50{height: 50px;}.select2-container .select2-selection--single{height: calc(1.5em + .75rem + 2px) !important;padding: 5px !important;}
		@media screen and (max-width: 767px) and (min-width: 320px){.login-form{width:100% !important;padding-top: 10px !important;}}
	  </style>
	</head>

	<body>
		<!-- Default form login -->
		<form class="text-center p-5 login-form" method="post" id="login_form">
			<p class="h4 mb-4">
				<a href="<?php echo base_url();?>"><img src="<?php echo $this->logo;?>" class="img-fluid" alt="Responsive image"></a>
			</p>
		    <p class="h4 mb-4">Sign up</p>

		    <!-- Email -->
		    <span class="error" id="success_error"></span>
		    <div class="form-group height50 text-left">
		    <input type="text" id="signup_name" name="signup_name-varchar-3-60" class="form-control" placeholder="Full Name">
		    <span class="error" id="signup_name_error"></span>
			</div>

		    <div class="form-group height50 text-left">
		    <input type="text"  id="signup_email" name="signup_email-email-5-80" class="form-control" placeholder="E-mail">
		    <span class="error" id="signup_email_error"></span>
			</div>
		    <!-- Password -->
		    <div class="form-group height50 text-left">
		    <input type="password" id="signup_password" name="signup_password-varchar-5-15" class="form-control" placeholder="Password">
		    <span class="error" id="signup_password_error"></span>
			</div>

			<div class="form-group height50 text-left">
		    <input type="text" id="signup_mobile" name="signup_mobile-varchar-5-15" class="form-control" placeholder="Mobile Number">
		    <span class="error" id="signup_mobile_error"></span>
			</div>

			<div class="form-group height50 text-left">
		    <select class="form-control" name="signup_city-varchar-1-10" id="signup_city">
		    	<option value="">Select City</option>
		    	<?php 
		    	if(isset($cities) && !empty($cities)){
		    		foreach ($cities as $key => $value) {
		    			echo '<option value="'.trim($key).'">'.trim(ucwords($value)).'</option>';
		    		}
		    	}
		    	?>
		    </select>
		    <span class="error" id="signup_city_error"></span>
			</div>
	
		    <!-- Sign in button -->
		    <button  class="btn btn-info btn-block my-4" type="submit" id="submit">Sign in</button>

		    <!-- Register -->
		    <p>Already a member?
		        <a href="<?php echo base_url();?>login">Login</a>
		    </p>

		    <!-- Social login -->
		    <p>or sign up with:</p>

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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#signup_city').select2();
			});
			$('#login_form').on('submit', function(e){
				var err = new Object();
				err.signup_email = email_validate($('#signup_email').val().trim(),5,80,'Email');
				err.signup_password = varchar_validate($('#signup_password').val().trim(),5,15,'Password');
				err.signup_name = string_validate($('#signup_name').val().trim(),3,60,'Full Name');
				err.signup_mobile = int_validate($('#signup_mobile').val().trim(),10,15,'Mobile');
				err.signup_city = varchar_validate($('#signup_city').val().trim(),1,10,'City');
				var errors = error_list(err);
				if(Object.keys(errors).length<=0){
					formValid = ajax_request('registration', 'dashboard', $('#login_form').serialize(), 'POST', 'submit');
				}
				return false;
			});
		</script>
	</body>
</html>