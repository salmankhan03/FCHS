<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>聯絡FCHS | 長者護理諮詢專線</title>
	<meta name="description" content="歡迎致電或電郵FCHS，諮詢陪伴、醫療或美容護理服務。專業團隊為您量身定制方案，快速回應">
	<!-- Stylesheets -->

	<link rel="stylesheet" href="lib/bootstrap.css">
	<!-- <link href="http://t.commonsupport.com/care-giver/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"> -->
	<link href="lib/settings.css" rel="stylesheet" type="text/css">

	<link href="css/style.css" rel="stylesheet">
	<!-- <link href="http://t.commonsupport.com/care-giver/css/responsive.css" rel="stylesheet"> -->
	<link href="lib/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">


	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<script>
        function getRandomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function generateCaptcha() {
            const min = 1000;
            const max = 9999;
            const randomNumber = getRandomNumber(min, max);

            const captchaLabel = document.getElementById("captcha-label");
            captchaLabel.textContent = `請輸入以下數字: ${randomNumber}`;

            const hiddenInput = document.getElementById("captcha-input");
            hiddenInput.value = randomNumber;
        }

        window.onload = generateCaptcha;
    </script>
</head>

<body>

	<div class="page-wrapper">
		<div class="preloader"></div>
		<?php include 'header.php'; ?>
		<!-- End Main Header -->

		<!--Page Title-->
		<section class="page-title" style="background-image:url(img/Contact/banner_contact.jpg)">
			<div class="auto-container">
				<div Style="height: 400px"></div>
			</div>
		</section>
		<!--End Page Title-->

		<!-- Contact Form Section -->
		<section class="contact-form-section">
			<div class="auto-container">

				<!-- Title Box -->
				<div class="title-box">
					<h2>請聯繫我們</h2>
					<div class="bold-text">請填寫以下表格與我們聯繫，我們將盡快回覆您的諮詢。</div>
					<div class="required">請填寫所有欄位</div>
				</div>

				<div class="row clearfix">

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Default Form -->
							<div class="default-form contact-form">
								<form class="needs-validation" action="send-mail.php" method="post" novalidate>

									<div class="form-group">
										<input class="form-control" type="text" placeholder="名字" id="name" name="name" required>
										<div class="invalid-feedback">
											此欄位為必填
										</div>
									</div>

									<div class="form-group">
										<input class="form-control" type="text" placeholder="電話號碼" name="contact_no" id="number" required>
										<div class="invalid-feedback">
											此欄位為必填
										</div>
									</div>

									<div class="form-group">
										<input class="form-control" type="email" placeholder="電子郵件" id="email" name="email" required>
										<div class="invalid-feedback">
											此欄位為必填
										</div>
									</div>

									<div class="form-group">
										<textarea class="form-control" id="message" rows="6" type="text" name="message" placeholder="請填寫您想諮詢的問題" required></textarea>
										<div class="invalid-feedback">
											此欄位為必填
										</div>
									</div>

									<div class="form-group">
									
										<span id="captcha-label" class="captcha"></span>
										<input class="form-control" type="text" id="captcha" placeholder="" required>
    									<input type="hidden" id="captcha-input">
										<div class="invalid-feedback">
											此欄位為必填
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="theme-btn btn-style-one" name="submit_message" ><span class="txt">提交</span></button>
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
								<img src="img/Contact/contact-1.jpg" alt="" />
							</div>
							<h3>總部地址</h3>
							<div class="text">#200 - 3071 No. 5 Road <br /> Richmond, BC, V6X 2T4</div>
							<ul>
								<li>電話: <a href="tel:1800-456-7890">+1 (778) 297-7108</a></li>
								<li>電子郵件: <a href="mailto:inquiry@fullcarehs.com">inquiry@fullcarehs.com</a></li>
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
	<!-- <script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script> -->
	<script>
		$(document).ready(function () {
			$(".scroll-to-top").hide();

			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) { 
					$(".scroll-to-top").fadeIn();
				} else {
					$(".scroll-to-top").fadeOut();
				}
			});

			$(".scroll-to-target").on('click', function () {
				var target = $(this).attr('data-target');
				$('html, body').animate({
					scrollTop: $(target).offset().top
				}, 1500);
			});
		});
	</script>
	<script>
		(function() {
			'use strict'

			var forms = document.querySelectorAll('.needs-validation')

			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						event.preventDefault(); // Prevent default submission first
						
						// Check form validity
						if (!form.checkValidity()) {
							event.stopPropagation();
							form.classList.add('was-validated');
							return;
						}

						// Check captcha
						const userInput = document.getElementById("captcha").value;
						const captchaValue = document.getElementById("captcha-input").value;

						if (userInput !== captchaValue) {
							event.stopPropagation();
							alert("驗證碼錯誤，請再試一次。");
							generateCaptcha();
							form.classList.add('was-validated');
							return;
						}

						// If everything is valid, submit the form
						form.submit();
					}, false)
				})
		})()
	</script>
	<!--Revolution Slider-->
	<script src="lib/jquerycare.js"></script>
    <script src="lib/revolution.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
    <script src="lib/layeranimation.js"></script>
    <script src="lib/revolution.extension.navigation.min.js.js"></script>
    <script src="lib/revolution.extension.parallax.min.js"></script>
    <script src="lib/revolution.extension.slideanims.min.js"></script>
    <script src="lib/main-slider-script.js"></script>
    <script src="lib/appear.js"></script>
    <script src="lib/fancybox.js"></script>
	<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/jquery.themepunch.revolution.min.js">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
	<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js">
	</script>
	<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.navigation.min.js">
	</script>
	<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.parallax.min.js">
	</script>
	<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js">
	</script>
	<script src="http://t.commonsupport.com/care-giver/js/main-slider-script.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script> -->
	<script src="js/appear.js"></script>
	<!-- <script src="js/script.js"></script> -->
</body>

</html>