<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>KeytoQuestions - Responsive Html5 Template</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" type="image/png" href="<?php echo FAVICON16;?>"/>
	<link rel="shortcut icon" type="image/png" href="<?php echo FAVICON32;?>"/>
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/theme/css/flexslider.css">
	<!-- Flexslider -->
	<!-- Style Swicther -->
	<link id="style-switch" href="<?php echo base_url()?>assets/theme/css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">
	<style type="text/css">
		<?php if(isset($this->homebg) && $this->homebg!=''){?>
			.headerNew{padding: 5px 0 !important;}
			.headerNew .navbar-brand{background: none;padding-top: 3px;}
			.margin-t-50{margin-top: 50px;}
		<?php }?>
	</style>
</head>

<body>

	<div class="body-inner">
	<!-- Header start -->
		<header id="<?php echo isset($this->homebg) && $this->homebg!=''?'':'header';?>" class="navbar-fixed-top <?php echo isset($this->homebg)  && $this->homebg!=''?'headerNew':'header2';?> <?php echo $this->homebg;?>" role="<?php echo isset($this->homebg)  && $this->homebg!=''?'':'banner';?>">
			<div class="container">
				<div class="row">
					<!-- Logo start -->
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
					    <div class="navbar-brand">
						    <a href="<?php echo base_url();?>">
						    	<img class="img-responsive" src="<?php echo $this->menulogo;?>" alt="logo">
						    </a> 
					    </div>                   
					</div><!--/ Logo end -->
					<nav class="collapse navbar-collapse clearfix" role="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo base_url();?>exam-categories">Exams</a></li>
							<li><a href="<?php echo base_url();?>login">Tutorials</a></li>
							<li><a href="<?php echo base_url();?>login">Govt Jobs</a></li>
							<?php if($this->session->has_userdata('USERID')){ ?>
								<li><a href="<?php echo base_url();?>login">Sign Out</a></li>
	            			<?php }else{ ?>
	            				<li><a href="<?php echo base_url();?>login">Sign in</a></li>
	            				<li><a href="<?php echo base_url();?>registration">Sign up</a></li>
	            			<?php } ?>
	                    </ul>
					</nav><!--/ Navigation end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</header><!--/ Header end -->
