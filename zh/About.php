<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>關於FCHS | 專業長者護理團隊</title>
    <meta name="description" content="了解FCHS使命及以人為本服務理念。我們提供安全、尊嚴與自主的個性化護理，深受家庭信賴">
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
</head>

<body>

<div class="page-wrapper">
    <div class="preloader"></div>
    <?php include 'header.php'; ?>
    <!-- End Main Header -->

        <!-- Our Team -->
        <section class="mission-section style-two ">
		<div class="auto-container aboutUpper">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="content-column col-lg-4 col-md-5 col-sm-12">
					<div class="">
                        <h5 class="text3" style="letter-spacing:2px !important;">關於我們</h5>
                        <h2 class="h1">我們的團隊</h2>
                    </div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-7 col-sm-12">
					<div class="inner-column">
						<ul class="mission-list">
							<li class="text3">
								我們提供一站式計劃與諮詢，幫助您或摯愛找到最適合的護理服務方案。透過我們的經驗、專業知識及同理心，我們的護理專家能幫助您擁有更美好、更充實的銀髮生活。我們以善良和關懷的心為本，經過專業訓練的團隊將為您或摯愛提供所需的個性化護理，涵蓋從陪伴到複雜的健康需求。
							</li>
                        </ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <!-- End Best Life Realized -->


    <!-- Our Service Section -->
	<section class="quality-section" style="background-color: #edf1f4">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
		
					<!-- Images Column -->
					<div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row ">
                            <div class="column col-lg-12 col-md-12 col-sm-12" >
                                <div class="image">
                                    <img class="chooseUs" style="padding: 0px 40px" src="img/About/img_why_choose_us.jpg" alt="" />
                                </div>
                            </div>
                        </div>
					</div>

                    <!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title Two -->
							
							<div class="sec-title-two style-two">
								<h4 class="h2 mb-4" style="color: #fff">我們的優勢</h4>
								<div class="text3" style="color: #fff" class="text">Full Care Health Services提供全方位的高品質護理服務，讓您或摯愛感到安心、放心。我們專注於幫助客戶在最舒適和受到尊重的環境中保持其獨立自主性。通過考慮周到、充滿愛心的高品質護理計劃，我們致力於維護我們所有客戶的尊嚴與自信，助他們應付日常生活，活得健康。</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Service Section Section -->

    <!-- Quality Section -->
	<section class="quality-section">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column pt-0">
							<!-- Sec Title Two -->
							<div class="sec-title-two style-two">
								<h2 class="h3">我們正在尋找像您一樣富有同理心的人加入我們的團隊。</h2>
								<div class="text text3">如果您希望以積極樂觀的態度影響長者的生活動力，並熱衷於建立有意義的聯繫，我們邀請您與我們一起踏上這個充實的旅程。</div>
							</div>
							<div class="btn-box" style="margin-top: 20px">
								<a href="zh/Career.php" class="theme-btn btn-style-one"><span class="txt">立即申請</span></a>
							</div>
						</div>
					</div>
					
					<!-- Images Column -->
					<div class="images-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="row clearfix">
								
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<div class="image">
										<img src="img/About/img_join_1.jpg" alt="" />
									</div>
								</div>
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<div class="image">
										<img src="img/About/img_join_2.jpg" alt="" />
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Quality Section -->
    <?php include 'footer.php' ?>
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
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
<!--Scroll to top-->
<!-- <script src="http://t.commonsupport.com/care-giver/js/jquery.js"></script> -->
<!--Revolution Slider-->
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script> -->
<script src="lib/jquerycare.js"></script>
    <script src="lib/revolution.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script> -->
    <script src="lib/layeranimation.js"></script>
    <script src="lib/revolution.extension.navigation.min.js"></script>
    <script src="lib/revolution.extension.parallax.min.js"></script>
    <script src="lib/revolution.extension.slideanims.min.js"></script>
    <script src="lib/main-slider-script.js"></script>
    <script src="lib/appear.js"></script>
    <script src="lib/fancybox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/revslider@5.4.201-8.6/js/jquery.themepunch.tools.min.js"></script>
<!-- <script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="http://t.commonsupport.com/care-giver/js/main-slider-script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script> -->
<script src="js/appear.js"></script>
<!-- <script src="js/script.js"></script> -->
</body>
</html>
