<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <title>FCOH</title>
    <base href="https://192.168.0.47/FCHS/">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="lib/bootstrap.css">
    <!-- <link href="http://t.commonsupport.com/care-giver/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"> -->
    <link href="lib/settings.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" integrity="sha512-QKC1UZ/ZHNgFzVKSAhV5v5j73eeL9EEN289eKAEFaAjgAiobVAnVv/AGuPbXsKl1dNoel3kNr6PYnSiTzVVBCw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.css" integrity="sha512-9Tu/Gu0+bXW+oGrTGJOeNz2RG4MaF52FznXCciXFrXehFTLF6phJnJFNVOU2mmj9FWIXk9ap0H1ocygu1ZTRqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="http://t.commonsupport.com/care-giver/css/responsive.css" rel="stylesheet"> -->
    <link href="lib/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="main-header ">
            <div class="header-upper">
                <div class="inner-container">

                    <div class="auto-container clearfix nav-container">
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo"><a href="zh/index.php"><img src="img/logo.svg" alt="logo" title="" class="logo-img"></a></div>
                        </div>

                        <div class="right-align">
                            <div class="mobile-lang-nav">
                                <a href="index.php" class="mobile-lang-btn lang-en <?php echo !strpos($_SERVER['REQUEST_URI'], '/zh/') ? 'active' : ''; ?>">EN</a>
                                <span class="lang-separator">|</span>
                                <a href="zh/index.php" class="mobile-lang-btn <?php echo strpos($_SERVER['REQUEST_URI'], '/zh/') ? 'active' : ''; ?>">中文</a>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer clearfix">
                                <!--Mobile Navigation Toggler For Mobile-->
                                <div class="mobile-nav-toggler"><span class="fa fa-bars"></span></div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="navbar-header">
                                        <!-- Togg le Button -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon flaticon-menu"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class=""><a id="index" href="zh/index.php">家</a>
                                            </li>
                                            <li class="dropdown"><a id="service" href="zh/Companion_Care.php">服務</a>
                                                <ul>
                                                    <li><a href="zh/Companion_Care.php">Companion Care</a></li>
                                                    <li><a href="zh/Personal_Care.php">Personal Care</a></li>
                                                    <li><a href="zh/Nursing_Care.php">Nursing Care</a></li>
                                                    <li><a href="zh/Specialty_Care.php">Specialty Care</a></li>
                                                    <li><a href="zh/Beauty_Care.php">Beauty Care</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a id="about" href="zh/About.php">關於我們</a>
                                            </li>
                                            <li class=""><a id="career" href="zh/Career.php">職業</a>
                                            </li>
                                            <li class=""><a id="contact" href="zh/Contact.php">接觸</a>
                                            </li>
                                        </ul>
                                        <div class="lang-nav">
                                            <a href="index.php" class="lang-btn lang-en <?php echo !strpos($_SERVER['REQUEST_URI'], '/zh/') ? 'active' : ''; ?>">EN</a>
                                            <span class="lang-separator">|</span>
                                            <a href="zh/index.php" class="lang-btn <?php echo strpos($_SERVER['REQUEST_URI'], '/zh/') ? 'active' : ''; ?>">中文</a>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="img/logo.png" alt="" title=""></a></div>

                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

    </div>
    <!--End pagewrapper-->

    <script>
        const currentPathLink = window.location.pathname.split("/");
        const path = currentPathLink[currentPathLink.length - 1];

        if (path === "index.php") {
            const element = document.getElementById('index');
            element.style.color = '#7659b1';
        } else if (path === "about.php") {
            const element = document.getElementById('about');
            element.style.color = '#7659b1';
        } else if (path === "service.php" || path === "Personal.php" || path === "Nursing.php" || path === "Specialty.php" || path === "spa.php") {
            const element = document.getElementById('service');
            element.style.color = '#7659b1';
        } else if (path === "career.php") {
            const element = document.getElementById('career');
            element.style.color = '#7659b1';
        } else if (path === "contact.php") {
            const element = document.getElementById('contact');
            element.style.color = '#7659b1';
        }
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
</body>

</html>