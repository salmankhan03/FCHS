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
        <section class="page-title" style="background-image:url(img/Services/banner_specilty.jpg)">
            <div Style="height: 150px"></div>
            <div Style="height: 50px"></div>
            <div Style="height: 50px"></div>
            <div Style="height: 50px"></div>
            <div Style="height: 50px"></div>
            <div Style="height: 50px"></div>
        </section>
        <!--End Page Title-->

        <!-- Best Life Realized -->
        <section class="mission-section style-two">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="content-column col-lg-4 col-md-5 col-sm-12">
                        <div class="">
                            <h5 class="text3" style="letter-spacing: 1px;">OUR SERVICES</h5>
                            <h2 style="color: #007E8A !important">Specialty Care </h2>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-7 col-sm-12">
                        <div class="inner-column">
                            <ul class="mission-list">
                                <li class="text3">Seniors face an unfortunate reality that as they age, they will experience a wide variety of
                                    health issues and medical conditions. The personalized approach that customizes care to meet
                                    specific wants or needs will enable your loved one to keep up with their activities while still
                                    feeling safe, confident and comfortable. Specialized registered nurses provide essential
                                    healthcare services at a higher level of quality care which will give family members peace of
                                    mind.</li>
                                <li class="text3">No matter what your specialized needs are, we will offer you the best support from our medical
                                    professionals who are knowledgeable, experienced and specially trained in helping with a
                                    multitude of specific conditions.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Best Life Realized -->

        <!-- Service Section -->
        <section class="news-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title style-two">
                    <div class="clearfix">
                        <div style="text-align: center">
                            <h2 class="h2 pt-5">Explore Our Services</h2>
                        </div>
                    </div>
                </div>


                <div class="row clearfix">

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="service.php"><img src="img/Services/img_companion.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="service.php">Companion Care</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Personal.php"><img src="img/Services/img_personal.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Personal.php">Personal Care</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="Nursing.php"><img src="img/Services/img_nursing.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h5 style="text-align: center"><a class="h4" href="Nursing.php">Nursing Care</a></h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Service Section -->
        <?php include 'footer.php' ?>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
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
    <!--Scroll to top-->
    <script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script>
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