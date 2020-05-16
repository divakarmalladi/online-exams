 <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 offset-lg-1 footer-info">
            <h3><?php echo DOMAIN_NAME; ?></h3>
            <p>Headquartered in Melbourne, Spryonsoft holds a strong market presence in Digital Transformation,Mobility,UI-UX, App Development,Website design and development, SEO services, Website Maintenance, Content Development and Social Media Marketing, among others. Within a short span of launch,Spryonsoft has been playing a key role in the business growth, promotion and marketing of its numerous clientele.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="#Services">Services</a></li>
              <li><a href="contact-us.php">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            Quixtart Business Centre
Plot No. 532, 4th Floor,
A-Block, 100 Feet Road,
Ayyappa Society, Madhapur,
Hyderabad, Telangana 500081, India
            
            <br /><br />

            <div class="social-links">
              <a href="twitter.com/spryonsoft" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Spryonsoft-108870097117461" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.linkedin.com/company/13446361/admin/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Spryonsoft</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="http://spryonsoft.com/">Spryonsoft</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script language=javascript src='http://maps.google.com/maps/api/js?sensor=false'></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  
  
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

</body>
</html>