<?php include('header.php');?>
		<!-- breadcrumb area start -->
		<section class="hero-area breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hero-area-content">
							<h1>Contact us</h1>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Contact us</li>
                              
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		<!-- blog section start -->
		<!-- blog section end -->
        
        
       
        
        
        
        
        <!-- download section end -->
		<!-- blog section start -->
		<!-- blog section end -->
		<!-- google map area start -->
		<div class="google-map" id="map"></div>
		<!-- google map area end -->
		<!-- footer section start -->
		<footer class="footer" id="contact">
			<div class="container">
				<div class="row">
                    <div class="col-lg-6">
						<div class="contact-form">
							<h4>Get in Touch</h4>
							<p class="form-message"></p>
							<form  action="#" method="POST" id="addForm">
				                <input type="text" name="name" id='name' placeholder="Enter Your Name">
				                <input type="email" name="email" id="email" placeholder="Enter Your Email">
				                <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile">
				                <textarea placeholder="Messege" name="message" id="message"></textarea>
                                <br>
				                <button type="submit" name="submit">Send Message</button>
				            </form>
						</div>
                    </div>
                    <div class="col-lg-6">
						<div class="contact-address">
							<h4>Address</h4>
							<p>TRIMVISION SERVICES (OPC) PVT. LTD.
Deshaipet Road, Opp. Filter Bed, Warangal, Pincode: 506002</p>
							<ul>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-headphone-alt"></i>
									</div>
									<div class="contact-address-info">
										<a href="callto:#">+919347096502</a>
										<a href="callto:#">+919100699920 </a>
                                        <a href="callto:#">+916305023566 </a>
									</div>
								</li>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-envelope"></i>
									</div>
									<div class="contact-address-info">
										<a href="mailto:#">trimvisionservices@gmail.com</a>
									</div>
								</li>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-web"></i>
									</div>
									<div class="contact-address-info">
										<a href="http://trimvisionservices.com/">    www.trimvisionservices.com</a>
									</div>
								</li>
							</ul>
						</div>
                    </div>
				</div>
				<!--<div class="row">
                    <div class="col-lg-12">
						<div class="subscribe-form">
							<form action="#">
								<input type="text" placeholder="Your email address here">
								<button type="submit">Subcribe</button>
							</form>
						</div>
                    </div>
				</div>-->
				<div class="row">
                    <div class="col-lg-12">
						<div class="copyright-area">
							<ul>
								<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
								<li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
							</ul>
							<p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </p>
						</div>
                    </div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>
		
		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<!-- Gmap JS -->
		<script src="assets/js/gmap3.min.js"></script>
        <!-- Google map api -->
        <script language=javascript src='http://maps.google.com/maps/api/js?sensor=false'></script>
        
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>-->
		<!-- Custom map JS -->
		<!--<script src="assets/js/custom-map.js"></script>-->
		<!-- WOW JS -->
		<script src="assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="assets/js/switcher.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
        
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
        
    <script>
    
    
   function initialize(){
     var myLatlng = new google.maps.LatLng(18.001169,79.615169);
     var myOptions = {
         zoom: 10,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
         }
      map = new google.maps.Map(document.getElementById("map"), myOptions);
      var marker = new google.maps.Marker({
          position: myLatlng, 
          map: map,
      title:"Fast marker"
     });
} 

google.maps.event.addDomListener(window,'load', initialize);
   
    </script>   
    <script>
$(document).ready(function(){			
jQuery.validator.addMethod("capital", function(value, element) {
    return this.optional(element) ||/^[A-Z][a-z0-9_-]{3,19}$/.test(value);
});
jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
}); 
jQuery.validator.addMethod("alphanumericCode", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9-//]+$/.test(value);
}); 
jQuery.validator.addMethod("geaterThan", function(value, element) {
    return this.optional(element) ||value >$('#dateofbrith').val();
}); 

jQuery.validator.addMethod("phoneStartingWith", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
    return this.optional(element) || phone_number.match(/^8\d{8,}$/) || phone_number.match(/^9\d{8,}$/);
}, "mobile number should be start with 8 or 9 number only");
	
$("#addForm").validate({
	    rules:{
	         name:{required:true,maxlength:15,alphanumeric:true},
		     email:{required:true,email:true},
			 mobile:{required:true,number:true,minlength:10,maxlength:10},
			 message:{required:true}
		},
		messages:{
			username:{
				required:'Please Enter Name',
				maxlength:'Name should be below 15 charactres',
				alphanumeric:'Do not Enter alphanumeric charactres',
				},
			email:{required:'please enter valid email',email:'please enter valid email'},
			mobile:{
				required:'please enter valid mobile number',
				number:'mobile number should be numeric',
				minlength:'mobile number should be atleast 10 numbers',
				maxlength:'mobile number should be maximum 10 numbers',
				
			}
			
	   },
	    errorPlacement: function(error, element){
            error.insertAfter( element );
        },
		submitHandler: function() {
			$.ajax({
            url: "ajax_post.php", 
            type: "POST",             
            data: $('#addForm').serialize(),
            cache: false,             
            processData: false,      
            success: function(opt) {
				$('#addForm')[0].reset();
				if(opt==200){
				   $('.form-message').html('Your request has been sent successfully');
				   $('.form-message').addClass('success');
				}else{
				   $('.form-message').html('Somthing went wrong please try again');
				   $('.form-message').addClass('error');
				}
                
            }
          });
			return false;
		}
		
	});


});

</script> 
        
        
        
        
        
        
        
        
        
	</body>
</html>