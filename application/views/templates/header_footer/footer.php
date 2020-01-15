 <!-- Bootstrap core JavaScript -->
 <script src="<?php base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="<?php base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="<?php base_url(); ?>assets/lib/typed/typed.js"></script>
 <script src="<?php base_url(); ?>assets/lib/wow/wow.min.js"></script>
 <script src="<?php base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
 <script src="<?php base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="<?php base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>

 <!-- Custom scripts for this template -->
 <script src="<?php base_url(); ?>assets/js/resume.min.js"></script>
 <script src="<?php base_url(); ?>assets/js/costume_home.js"></script>
 <script src="<?php base_url(); ?>assets/js/costume_about.js"></script>
 <script src="<?php base_url(); ?>assets/js/costume_exprience.js"></script>

 <script>
     var typed = $(".typed");
     $(function() {
         typed.typed({
             strings: ["Mr.Joe.", "Designer.", "Developer.", "Freelancer.", "Photographer"],
             typeSpeed: 100,
             loop: true,
         });
     });
     // Initiate the wowjs animation library
     new WOW().init();
 </script>

 </body>

 </html>