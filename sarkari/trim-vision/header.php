<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trim Vision Services</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/switcher-style.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/favicon-16x16.png" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
        
	</head>
<style>
.logo-cls{display: inline-block !important;
    color: #fff !important;
    position: relative !important;
    padding: 5px 16px !important;
    margin: 0 3px !important;
    border: 1px solid transparent !important;
}
.sec-title {
    text-align: center;
    max-width: 100% !important; 
    margin: 0 auto 40px;
}
.download-btn {
    display: flex;
     text-align: left; 
    margin: 8px 25px;
    padding: 1px 31px 5px;
    border: 1px solid #fff;
    border-radius: 50px;
}
.error{ color:#F00;}
.success{color:green;}
.caret {
    display: none !important;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-top: 4px solid\9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
.logo-clss {
    /* display: inline-block !important; */
    color: #fff !important;
    position: relative !important;
    padding: 5px 16px !important;
    margin: 0 3px !important;
    border: 1px solid transparent !important;
}
.label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 70 !important;
}



</style>    
  
    
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
                        
							<a href="index.php"  class="logo-clss"><img src="assets/img/logo.png" alt="logo" />
                            <!--TRIM VISION-->
                            </a>
                            
                            
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                            
                              
                                <?php $aclass='';if(basename($_SERVER['PHP_SELF'])=='' || basename($_SERVER['PHP_SELF'])=='index.php')$aclass='active'; ?>
                            
                                <li><a class="nav-link  <?php echo $aclass; ?>" href="index.php">Home</a></li>
                                <?php $aclass='';if(basename($_SERVER['PHP_SELF'])=='about-us.php')$aclass='active'; ?>
                                <li><a class="nav-link <?php echo $aclass; ?>" href="about-us.php">About us</a></li>
                                
                                <?php $aclass='';if(basename($_SERVER['PHP_SELF'])=='visa-services.php' || basename($_SERVER['PHP_SELF'])=='passport-services.php' || basename($_SERVER['PHP_SELF'])=='tourism-services.php' || basename($_SERVER['PHP_SELF'])=='ticketing-services.php')$aclass='active'; ?>
                                
                                
                                <li class="dropdown"><a class="dropdown-toggle <?php echo $aclass; ?>" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="visa-services.php">Visa Services</a></li>
          <li><a href="tourism-services.php">Tourism Services</a></li>
          <li><a href="passport-services.php">Passport Services</a></li>
          <li><a href="ticketing-services.php">Passport Services</a></li>
        </ul>
      </li>
                                 <?php $aclass='';if(basename($_SERVER['PHP_SELF'])=='contact-us.php')$aclass='active'; ?>
                                <li><a class="nav-link <?php echo $aclass; ?>" href="contact-us.php">Contact Us</a></li>
                               <!-- <li><a class="appao-btn" href="#">Download</a></li>-->
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header><!-- header section end -->
        