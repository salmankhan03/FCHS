<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CareGiver - Elder Care HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link href="http://t.commonsupport.com/care-giver/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet">
<link href="http://t.commonsupport.com/care-giver/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    <div class="preloader"></div>
    <?php include 'header.php'; ?>
    <!-- End Main Header -->

    	<!--Page Title-->
        <section class="page-title" style="background-image:url(http://t.commonsupport.com/care-giver/images/background/3.jpg)">
    	<div class="auto-container">
		<div Style="height: 50px"></div>
			<div Style="height: 50px"></div>
			<div Style="height: 50px"></div>
			<div Style="height: 50px"></div>
			<div Style="height: 50px"></div>
			<div Style="height: 50px"></div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			
			<!-- Title Box -->
			<div class="title-box">
				<h2>Get In Touch</h2>
				<div class="bold-text">Please connect with us by filling out the form below and we will get back to you:</div>
				<div class="required">Fields marked with an * are required</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form class="needs-validation" novalidate>
								
								<div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name*" id="name" required>
                                    <div class="invalid-feedback">
                                        THIS FIELD IS REQUIRED.
                                    </div>
								</div>
								
								<div class="form-group">
                                    <input class="form-control" type="text" placeholder="Phone Number*" id="number" required>
                                    <div class="invalid-feedback">
                                        THIS FIELD IS REQUIRED.
                                    </div>
								</div>
								
								<div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email*" id="email" required>
                                    <div class="invalid-feedback">
                                        THIS FIELD IS REQUIRED.
                                    </div>
								</div>
								
								<div class="form-group">
                                    <textarea class="form-control" id="message" rows="6" type="text" placeholder="Your Message*" required></textarea>
                                    <div class="invalid-feedback">
                                        THIS FIELD IS REQUIRED.
                                    </div>
								</div>
								
								<div class="form-group">
									<span class="captcha">8 + 4*</span>
                                    <input class="form-control" type="text" placeholder="" id="captcha" required>
                                    <div class="invalid-feedback">
                                        THIS FIELD IS REQUIRED.
                                    </div>
								</div>
								
								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
								</div>                                     
								
							</form>
						</div>
						<!--End Default Form-->
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="http://t.commonsupport.com/care-giver/images/resource/contact-1.jpg" alt="" />
						</div>
						<h3>Head Office:</h3>
						<div class="text">#200 - 3071 No. 5 Road <br/> Richmond, BC, V6X 2T4</div>
						<ul>
							<li>Tel: <a href="tel:1800-456-7890">+1 (778) 297-7108</a></li>
							<li>Email: <a href="mailto:inquiry@fullcarehs.com">inquiry@fullcarehs.com</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>

    <?php include 'footer.php' ?>
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Scroll to top-->
<script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script>
<script>
   (function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	$(window).on('load', function() {
		handlePreloader();
	});	

})(window.jQuery);
</script>
<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<!--Revolution Slider-->
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/js/main-slider-script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<!-- <script src="js/script.js"></script> -->
</body>
</html>
