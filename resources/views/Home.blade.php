<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Vankine - Just another Html template</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Fav Icon -->
    <!-- Googel Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=latin%2Clatin-ext"
        type="text/css" media="all" />
    <!-- Googel Fonts -->
    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/select.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/owl.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/rangeslider.css" type="text/css" media="all" />
    <!-- Plugins -->
    <!-- Vankine Styles -->
    <link rel="stylesheet" href="assets/css/global-settings.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/theme.css" type="text/css" media="all" />
    <!-- Vankine Styles -->
    <!-- Icon Styles -->
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-rounded.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-straight.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/flaticon_vankine.css" type="text/css" media="all" />
    <!-- Icon Styles -->
    <!-- styling for demo purpose
    <link rel='stylesheet' href='assets/css/color-3.css' type='text/css' media='all' />
   styling for demo purpose -->
</head>

<body class="theme-vankine scrollbarcolor s_color_three">
    <div class="line_box_outer">
        <div class="lined"></div>
        <div class="lined two"></div>
        <div class="lined three"></div>
        <div class="lined four"></div>
        <div class="lined"></div>
    </div>
    <!----=============page_wapper=============---->
    <div id="page" class="page_wapper hfeed site">
        <!----=============page_wapper=============---->
        <!----=============Preloader=============---->
        <div class="loader-wrap color_three">
            <div class="preloader">
                <div class="preloader-close"><i class="fi-rr-cross"></i></div>
            </div>
            <div class="layer"></div>
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
        </div>
        <!----=============Preloader end=============---->
        <!----=============Header=============---->
        <div class="header_area" id="header_contents">
            <header class="header-area header-style-5 htype_one">
                <div class="top_bar">
                    <div class="bgiamge">
                        <img src="assets/images/header-5-bg.png" class="img-fluid" alt="img" />
                    </div>
                    <div class="container">
                        <div class="row align-items-center flex-lg-nowrap">
                            <div class="flex-lg-fill col-md-6 col-sm-6 col-xs-12">
                                <div class="logo_box">
                                    <a href="index.html" class="logo navbar-brand">
                                        <img height="60" src="assets/images/logo/logo-becj-bicolor.png"
                                            alt="BECJ " class="logo_default" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="tite">Our Locations</h6>
                                        <div class="title_no_a_20">55 Main Street, USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-black-back-closed-envelope-shape"></i>
                                    </div>

                                    <div class="content">
                                        <h6 class="tite">Email For Us</h6>
                                        <div class="title_no_a_20">{{ $apropos->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-telephone"></i>
                                    </div>

                                    <div class="content">
                                        <h6 class="tite">Call For Us</h6>
                                        <div class="title_no_a_20">{{ $apropos->telephone }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medium-container position-relative">
                    <div class="main_header_content default_header">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                    <div class="navbar_content d-flex align-items-center">
                                        <ul class="navbar_nav">
                                            <li
                                                class="menu-item nav-item menu-item-has-children dropdown mennucolumn_full-six">
                                                <a href="index.html" class="nav_link">
                                                    <span class="text-link">Accueil</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children dropdown mennucolumn_ nav-item">
                                                <a href="#a-propos" class="nav_link">
                                                    <span class="text-link">A propos de nous</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children dropdown nav-item">
                                                <a href="#nos-services" class="nav_link">
                                                    <span class="text-link">Nos services</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children dropdown mennucolumn_ nav-item">
                                                <a href="#nos-avantages" class="nav_link">
                                                    <span class="text-link">Nos avantages</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children dropdown mennucolumn_two nav-item">
                                                <a href="blog.html" class="nav_link" id="testimonial">
                                                    <span class="text-link">Avis</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children dropdown mennucolumn_ nav-item">
                                                <a href="contact.html" class="nav_link">
                                                    <span class="text-link">Nous contacter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nav_tog_column">
                                    <div class="d-flex right_content align-items-center">
                                        <!--menu icon-->
                                        <div class="navbar_togglers hamburger_menu">
                                            <span class="line"></span>
                                            <span class="line"></span>
                                            <span class="line"></span>
                                        </div>
                                        <!--menu icon-->
                                        <div class="button">
                                            <a href="/facture/liste" class="theme_btn">
                                                Mon compte
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="blue"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="nnn">
                    <header class="header-area header-style-1 htype_one">
                        <div class="main_header_content default_header">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-12 col-md-5 col-sm-5 col-xs-5">
                                        <div class="logobox">
                                            <a href="index.html" class="logo navbar-brand">
                                                <img src="assets/images/Logo-green.png" alt="Vankine"
                                                    class="logo_default" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                        <div class="navbar_content d-flex align-items-center">
                                            <ul class="navbar_nav">
                                                <li class="menu-item nav-itemx">
                                                    <a href="index.html" class="nav_link">
                                                        <span class="text-link"> Home </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Pages </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Services </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Portfolio </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="blog.html" class="nav_link">
                                                        <span class="text-link"> Blog </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="{{ route('login') }}" class="nav_link">
                                                        <span class="text-link"> Contact </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-7 col-sm-7 col-xs-7 nav_tog_column">
                                        <div class="d-flex right_content align-items-center">
                                            <!--menu icon-->
                                            <div class="navbar_togglers hamburger_menu">
                                                <span class="line"></span>
                                                <span class="line"></span>
                                                <span class="line"></span>
                                            </div>
                                            <!--menu icon-->
                                            <div class="button">
                                                <a href="#" class="theme_btn">
                                                    Se Connecter
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div> --}}
            </header>
        </div>
        <!----=============Header end=============---->
        <!----==============sticky header==============--->
        <div class="sticky_header_area sticky_header_content color_three">
            <header class="header-area header-style-1 htype_one">
                <div class="main_header_content default_header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-12 col-md-5 col-sm-5 col-xs-5">
                                <div class="logobox">
                                    <a href="index.html" class="logo navbar-brand">
                                        <img src="assets/images/Logo-green.png" alt="Vankine"
                                            class="logo_default" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                <div class="navbar_content d-flex align-items-center">
                                    <ul class="navbar_nav">
                                        <li class="menu-item nav-itemx">
                                            <a href="index.html" class="nav_link">
                                                <span class="text-link"> Home </span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#" class="nav_link">
                                                <span class="text-link"> Pages </span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#" class="nav_link">
                                                <span class="text-link"> Services </span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#" class="nav_link">
                                                <span class="text-link"> Portfolio </span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="blog.html" class="nav_link">
                                                <span class="text-link"> Blog </span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="contact.html" class="nav_link">
                                                <span class="text-link"> Contact </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-7 col-sm-7 col-xs-7 nav_tog_column">
                                <div class="d-flex right_content align-items-center">
                                    <!--menu icon-->
                                    <div class="navbar_togglers hamburger_menu">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                    <!--menu icon-->
                                    <div class="button">
                                        <a href="#" class="theme_btn">
                                            Get A Quote
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!----==============sticky header end==============--->
        <!----==============content_all_warpper==============--->
        <div id="wrapper_full" class="content_all_warpper">
            <!----==============content_all_warpper==============--->
            <!--content start-->
            <div id="content" class="site-content">
                <!---slider-->
                <div class="slider style_five">
                    <div class="tab_content_slick">
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image:url(assets/images/slider/banner-5-1.jpg)"></div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h6 class="animate_up">
                                                    Welcome To Vankine
                                                </h6>
                                                <h1 class="animate_left">A Moments Of Caring <br>
                                                    Your Dream Home </h1>

                                                <div class="button_all animate_down">
                                                    <a href="#" class="theme_btn color_white  animated">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image:url(assets/images/slider/banner-5-2.jpg)"></div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h6 class="animate_up">
                                                    Better Insurance
                                                </h6>
                                                <h1 class="animate_left"> Find Health Coverage <br>
                                                    that's Right for you </h1>

                                                <div class="button_all animate_down">
                                                    <a href="#" class="theme_btn color_white  animated">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image:url(assets/images/slider/banner-5-3.jpg)"></div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h6 class="animate_up">
                                                    Better Insurance
                                                </h6>
                                                <h1 class="animate_left"> Don’t Call it a Dream,<br>
                                                    Call it a Plan. </h1>

                                                <div class="button_all animate_down">
                                                    <a href="#" class="theme_btn color_white  animated">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image:url(assets/images/slider/banner-5-4.jpg)"></div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h6 class="animate_up">
                                                    Better Insurance
                                                </h6>
                                                <h1 class="animate_left"> Build Amazing Life <br>
                                                    With Insurance </h1>

                                                <div class="button_all animate_down">
                                                    <a href="#" class="theme_btn color_white  animated">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab_postion_absolute">
                        <div class="container">
                            <div class="slider tab_slick">
                                <div class="title">
                                    <h3>House Insurance</h3>
                                </div>
                                <div class="title">
                                    <h3>Medical Insurance</h3>
                                </div>
                                <div class="title">
                                    <h3>Travel Insurance</h3>
                                </div>
                                <div class="title">
                                    <h3>Life Insurance</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---slider end-->
                <!--about-->
                <section id="a-propos" class="about-section">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 pd_right_60">
                                <div class="section_title">
                                    <h4 class="sm_title">Amazing Company</h4>
                                    <div class="title_whole">
                                        <h2 class="title">{{ $apropos->titre }}</h2>
                                    </div>

                                    <p>{{ $apropos->description }}</p>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                                <div class="position-relative">
                                    <ul class="list_box list">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_1 }} </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_2 }}
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_3 }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!---============spacing==========--->

                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                            </div>
                            <div class="col-lg-4 col-md-8 mr_left_minus_40">
                                <div class="image_video_box_only type_two">
                                    <div class="image one">
                                        <img src="{{ asset('Storage/' . $apropos->image) }}" alt="img"
                                            class="imf-fluid" />

                                        <div class="fun_facts type_two">
                                            <h6 class="title_no_a_18">{{ $apropos->annees_experience }}</h6>
                                            <h6 class="title_no_a_26">
                                                Years Of <br />
                                                Experience
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 pd_left_30">
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_1 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_1 }}</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_2 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_1 }}</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_3 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_1 }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_90"></div>
                    <!---============spacing==========--->
                </section>
                <!--about end-->

                <!---service-->
                <section class="service-section position-relative bg_2 overflow-hidden">
                    <!---============spacing==========--->
                    <div class="pd_top_80"></div>
                    <!---============spacing==========--->
                    <div class="ab_img_left_top mr_top_minus_40 z_0">
                        <img src="assets/images/shape/wave-pattern-2.png" class="img-fluid" alt="img">
                    </div>
                    <div class="position-relative z_1">
                        <div class="container pd_zero md_pd_left_15 md_pd_right_15">
                            <div class="row">
                                <div class="col-lg-7 m-auto">
                                    <div class="section_title text-center type_one color_white">
                                        <h4 class="sm_title"> Vinkine Popular Services</h4>
                                        <div class="title_whole">
                                            <h2 class="title"> Amazing Insurance Services</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="row mr_left_minus_15 mr_right_minus_15">
                                @foreach ($services as $Sr)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_box type_five style_two icon_box_only type_three trans">
                                            <div class="icon_inner trans">
                                                <div class="d-flex trans">
                                                    <div class="icon trans">
                                                        <i class="{{ $Sr->icone }}"></i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="title_22">
                                                            <a href="service.html">{{ $Sr->titre }}</a>
                                                        </div>
                                                        <p class="trans">
                                                            {{ $Sr->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="ab_img_right_bottom mr_bottom_minus_250 z_0">
                        <img src="assets/images/shape/wave-pattern-1.png" class="img-fluid" alt="img">
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_80"></div>
                    <!---============spacing==========--->

                </section>
                <!---service end-->
                <div class="pd_bottom_70"></div>
                <!--form section-->
                <section class="form-section mr_bottom_minus_250 position-relative z_1" style="margin-bottom: 0;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="contact_form_box_all style_one bg_14 bg_op_4 mr_right_40 z_1"
                                    style="background-image: url(assets/images/form-shape-1.png);">
                                    <div class="section_title color_white type_one">
                                        <h4 class="sm_title"> Check Your Favorite Insurance</h4>
                                        <div class="title_whole">
                                            <h2 class="title"> Get Started Favorite
                                                Insurance</h2>
                                        </div>
                                    </div>
                                    <div class="contact_form_shortcode">
                                        <form method="post" action="#">
                                            <div class="forms-field-name mr_bottom_20">
                                                <input type="text" name="name" placeholder="First Name"
                                                    required="">
                                            </div>
                                            <div class="forms-field-name mr_bottom_20">
                                                <input type="text" name="sname" placeholder="Second Name"
                                                    required="">
                                            </div>
                                            <div class="forms-field-email mr_bottom_20">
                                                <input type="text" name="email" placeholder="Email"
                                                    spellcheck="false" required="">
                                            </div>
                                            <div class="forms-field-Dropdown mr_bottom_40">
                                                <select name="select">
                                                    <option value="" class="placeholder" disabled=""
                                                        selected="selected">Insurance Type</option>
                                                    <option value="Life Insurance">Life Insurance</option>
                                                    <option value="Health Insurance">Health Insurance
                                                    </option>
                                                    <option value="House Insurance">House Insurance</option>
                                                    <option value="Travel Insurance">Travel Insurance
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="forms-field-number-slider mr_bottom_40">
                                                <input type="range" name="range" value="4500" min="0"
                                                    max="7000" step="1">
                                                <div class="slider-hint mr_top_5" data-hint="Selected Value: {value}">
                                                    Selected Value: <b>4500</b>
                                                </div>
                                            </div>
                                            <button type="submit">Get a Guote</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mr_left_minus_100">
                                <div class="image_box_only type_nine">
                                    <img src="assets/images/form-image-1.jpg" class="img-fluid" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--form section-->
                <!--client-->

                <!--client-->
                <!--divider-->
                <!-- <div class="divider"></div> -->
                <!--divider-->
                <!--testimonial-section-->

                <!---============spacing==========--->
                <!--testimonial-->
                <div class="pd_bottom_70"></div>
                <section class="testimonial-section  position-relative" id="testimonial">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-8 pd_zero">
                                <div class="image">
                                    <img src="https://media.northwesternmutual.com/images/article/featured/2400x1350/1733-8-charitable-giving-strategies-1319763433.webp"
                                        class="img-fluid height_800px object-fit-cover w_100" alt="img" />
                                </div>
                            </div>
                            <div class="col-lg-4 pd_right_100 pd_top_40">
                                <div
                                    class="testimonial_ver_carousel nav_false position-relative dot_true mr_left_minus_250">
                                    <div class="vertoneitem owl-theme owl-carousel">
                                        @foreach ($avis as $av)
                                            <div class="testimonial_box type_one">
                                                <svg class="svg1" width="631" height="475"
                                                    viewBox="0 0 631 475" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M631 382.071L599.611 363.928L630.163 346.265L630.442 346.109V309.8L631 309.476L630.442 309.152V272.854L599.633 255.034L630.197 237.36L630.476 237.204V199.621L598.25 218.256L597.971 218.413V254.074L597.949 254.062V291.008L568.679 307.934C568.411 307.666 568.065 307.465 567.686 307.364V236.567L536.296 218.424V182.126L506.458 164.876C506.513 164.686 506.547 164.497 506.547 164.295C506.547 164.094 506.513 163.904 506.458 163.726L536.018 146.633L536.296 146.476V110.837L566.537 128.322V201.554L596.922 183.981C597.324 184.383 597.87 184.628 598.473 184.628C599.678 184.628 600.659 183.645 600.659 182.439C600.659 181.422 599.968 180.573 599.031 180.327V110.212L630.186 92.1914L630.465 92.0349V54.4523L599.031 72.6292V72.5957L567.083 91.063L535.136 72.5957V109.553L504.059 127.528L503.78 127.685V162.195C502.843 162.441 502.152 163.29 502.152 164.307C502.152 165.323 502.843 166.172 503.78 166.418V200.928L535.17 219.072V254.722L504.896 272.228V236.578L473.518 218.413V217.765L472.96 218.089L472.402 217.765V218.413L441.292 236.4L441.013 236.556V274.139L471.398 256.565C471.8 256.967 472.346 257.213 472.949 257.213C473.551 257.213 474.109 256.967 474.499 256.565L503.769 273.491V346.734L535.716 328.267L566.548 346.086L597.38 363.917L567.106 381.423L566.548 381.099V381.747L565.99 382.071L566.548 382.395V418.693L597.937 436.836V470.699C597 470.945 596.309 471.794 596.309 472.81C596.309 474.017 597.29 475 598.495 475C599.7 475 600.681 474.017 600.681 472.81C600.681 472.609 600.648 472.419 600.592 472.241L630.152 455.147L630.431 454.991V417.408L599.042 435.552V400.55L631 382.071ZM599.086 219.061L629.36 201.554V236.556L599.086 254.062V219.061ZM629.327 345.449L599.053 362.956V327.954L629.327 310.448V345.449ZM629.327 308.504L599.053 290.997V255.995L629.327 273.502V308.504ZM598.506 291.969L628.78 309.476L615.026 317.43L598.506 326.982L569.225 310.057C569.27 309.878 569.314 309.688 569.314 309.487C569.314 309.286 569.281 309.096 569.225 308.917L598.506 291.969ZM566.559 273.513V307.364C566.18 307.465 565.834 307.666 565.566 307.934L551.433 299.756L536.296 291.008V256.006L551.433 264.754L566.559 273.513ZM567.652 128.322L597.926 110.815V145.817L567.652 163.323V128.322ZM567.652 199.621V164.619L597.926 147.113V180.327C596.989 180.573 596.298 181.422 596.298 182.439C596.298 182.64 596.331 182.83 596.387 183.009L567.652 199.621ZM599.086 73.8916L629.36 56.3851V91.387L599.086 108.894V73.8916ZM597.915 109.53L567.641 127.037V92.0349L597.915 74.5284V109.53ZM536.263 74.5284L566.537 92.0349V127.037L536.296 109.553V108.894L536.274 108.905V74.5284H536.263ZM535.17 110.826V145.828L505.9 162.754C505.632 162.486 505.286 162.284 504.907 162.184V128.322L535.17 110.826ZM504.907 200.269V166.407C505.286 166.306 505.632 166.116 505.9 165.837L535.181 182.763V217.765L504.907 200.269ZM566.559 237.215V272.217L551.422 263.469L536.285 254.722V219.72L566.559 237.215ZM442.139 272.217V237.215L472.413 219.709V252.923C471.476 253.169 470.785 254.018 470.785 255.034C470.785 255.236 470.818 255.425 470.874 255.604L442.139 272.217ZM473.518 252.923V219.709L503.792 237.215V272.217L475.068 255.615C475.113 255.437 475.157 255.247 475.157 255.046C475.157 254.018 474.455 253.169 473.518 252.923ZM504.907 273.513L535.181 256.006V291.008L504.907 308.515V273.513ZM504.907 309.8L535.181 292.293V327.295L504.907 344.801V309.8ZM536.285 327.306V292.304L551.422 301.052L565.009 308.906C564.964 309.085 564.919 309.275 564.919 309.476C564.919 310.492 565.611 311.341 566.548 311.587V344.801L536.285 327.306ZM567.675 311.587C568.054 311.487 568.4 311.297 568.667 311.017L597.937 327.943V362.945L567.664 345.438V311.587H567.675ZM597.949 364.889L598.506 364.565L599.064 364.889L628.78 382.071L598.506 399.578L568.232 382.071L597.949 364.889ZM567.675 383.032L597.949 400.539V435.54L567.675 418.034V383.032ZM629.327 419.33V454.332L600.057 471.257C599.789 470.989 599.443 470.788 599.064 470.688V436.825L629.327 419.33ZM443.768 200.593C443.768 200.392 443.735 200.202 443.679 200.023L473.239 182.93L473.518 182.774V110.212L502.609 93.3868C503.011 93.9454 503.658 94.314 504.394 94.314C505.599 94.314 506.58 93.3309 506.58 92.1243C506.58 91.1077 505.889 90.2586 504.952 90.0128V54.4523L473.562 72.5957V36.9458L441.057 18.1545V55.7483L471.856 73.5564L441.571 91.0742L412.289 74.1486C412.334 73.9698 412.379 73.7799 412.379 73.5788C412.379 72.3722 411.397 71.3891 410.192 71.3891C408.988 71.3891 408.006 72.3722 408.006 73.5788C408.006 74.5955 408.698 75.4445 409.635 75.6903V108.905V145.85L378.803 163.681L348.529 146.174L379.082 128.512L379.361 128.355V92.0238L379.918 91.6998L379.361 91.3758V55.7371L410.471 37.7502L410.75 37.5938V0L378.524 18.6349L378.245 18.7913V54.4412L347.971 36.9346V36.2867L347.414 36.6106L315.467 18.1433V53.2904C315.087 53.391 314.741 53.5921 314.474 53.8602L285.204 36.9346V0.011172L253.814 18.1545V18.1433L221.588 36.7782L221.31 36.9346V72.5845L191.036 55.078V54.43L190.478 54.754L189.92 54.43V55.078L159.089 72.8973L127.141 54.43V91.387L96.901 108.882V73.2325L64.4073 54.4412L33.018 36.2867V73.2325L3.74798 90.1581C3.34641 89.7559 2.79983 89.5101 2.18632 89.5101C0.981615 89.5101 0 90.4932 0 91.6998C0 92.9064 0.981615 93.8895 2.18632 93.8895C2.79983 93.8895 3.34641 93.6437 3.73683 93.2415L33.018 110.178V147.124L65.2439 128.478L65.5228 128.322V92.6717L95.7967 110.178V147.113L126.182 129.539C126.45 129.807 126.796 130.009 127.175 130.109V164.619L159.68 183.411V147.113L191.069 165.256V127.674L160.237 109.854L190.5 92.3589L222.447 110.826V73.8804L252.721 56.3739V127.674L221.611 145.661L221.332 145.817V183.4L251.717 165.826C252.119 166.228 252.665 166.474 253.268 166.474C254.473 166.474 255.454 165.491 255.454 164.284C255.454 163.268 254.763 162.419 253.826 162.173V128.31L284.936 110.324L285.215 110.167V74.5284L315.489 92.0349V125.897C314.552 126.143 313.86 126.992 313.86 128.009C313.86 128.21 313.894 128.4 313.949 128.579L284.389 145.672L284.111 145.828V183.411L316.058 164.943L347.447 183.087L378.836 164.943L410.226 183.087L441.057 165.256V198.471C440.12 198.716 439.429 199.565 439.429 200.582C439.429 201.789 440.41 202.772 441.615 202.772C442.786 202.783 443.768 201.8 443.768 200.593ZM472.402 182.126L443.132 199.052C442.865 198.783 442.519 198.582 442.139 198.482V164.619L442.697 164.295L472.413 147.113V182.126H472.402ZM410.75 110.826L441.024 128.333V163.335L410.75 145.828V110.826ZM442.139 128.322L472.402 110.826V145.828L442.128 163.335V128.322H442.139ZM472.402 109.53L442.128 127.037V92.0349L472.402 74.5284V109.53ZM503.836 56.3851V90.0016C502.899 90.2474 502.208 91.0965 502.208 92.1132C502.208 92.1802 502.219 92.2472 502.23 92.3142L473.573 108.882V73.8916L503.836 56.3851ZM442.184 20.0873L472.458 37.5938V72.5957L442.184 55.0891V20.0873ZM410.75 75.6791C411.129 75.5786 411.475 75.3887 411.743 75.1094L441.013 92.0349V127.037L410.739 109.53V75.6791H410.75ZM347.425 109.206L317.151 91.6998L330.905 83.7453L347.425 74.1933L377.699 91.6998L363.945 99.6543L347.425 109.206ZM316.593 57.5246C316.972 57.4241 317.318 57.2342 317.586 56.9549L346.298 73.5564L316.582 90.739V57.5246H316.593ZM346.867 72.5845L318.144 55.9717C318.188 55.793 318.233 55.6031 318.233 55.402C318.233 55.2009 318.199 55.0109 318.144 54.8322L346.867 38.2194V72.5845ZM346.867 110.178V145.18L318.144 128.567C318.188 128.389 318.233 128.199 318.233 127.998C318.233 126.981 317.541 126.132 316.604 125.886V92.6717L346.867 110.178ZM316.593 130.12C316.972 130.02 317.318 129.819 317.586 129.551L346.298 146.152L316.582 163.335V130.12H316.593ZM378.245 127.674L347.971 145.18V110.178L378.245 92.6717V127.674ZM379.361 19.4393L409.635 1.93276V36.9346L379.361 54.4412V19.4393ZM378.245 55.7371V90.739L347.971 73.2325V38.2306L378.245 55.7371ZM346.309 37.2586L317.597 53.8602C317.329 53.5921 316.984 53.391 316.604 53.2904V20.0761L346.309 37.2586ZM284.099 1.94393V36.9458L253.826 54.4523V19.4505L284.099 1.94393ZM189.943 56.3739V91.3758L159.669 108.882V73.8804L189.943 56.3739ZM128.29 56.3739L158.564 73.8804V108.882L143.427 100.135L128.29 91.387V56.3739ZM158.553 145.18L143.416 136.432L129.83 128.579C129.874 128.4 129.919 128.21 129.919 128.009C129.919 126.992 129.227 126.143 128.29 125.897V92.6717L143.427 101.419L158.564 110.167V145.18H158.553ZM95.7856 108.882L65.5228 91.3758V56.3739L95.7967 73.8804V108.882H95.7856ZM34.1334 38.2306L64.4073 55.7371V90.739L34.1334 73.2325V38.2306ZM4.29457 91.13L33.5757 74.2044L63.8496 91.711L50.0958 99.6543L33.5757 109.206L4.29457 92.2807C4.33918 92.102 4.3838 91.912 4.3838 91.711C4.3838 91.5099 4.33918 91.3199 4.29457 91.13ZM64.4073 127.674L34.1334 145.18V110.178L64.4073 92.6717V127.674ZM96.901 145.18V110.178L127.175 92.6717V125.886C126.238 126.132 125.546 126.981 125.546 127.998C125.546 128.199 125.58 128.389 125.636 128.567L96.901 145.18ZM158.553 181.467L128.279 163.96V130.098C128.658 129.997 129.004 129.807 129.272 129.528L143.405 137.706L158.542 146.454V181.467H158.553ZM189.943 163.323L159.669 145.817V110.815L189.943 128.322V163.323ZM221.321 108.882L191.058 91.387V56.3739L221.332 73.8804V108.882H221.321ZM222.436 72.5957V37.5826L252.71 20.0761V55.078L222.436 72.5957ZM284.099 38.2418V73.2325L253.826 90.739V55.7371L284.099 38.2418ZM222.436 181.478V146.476L252.71 128.97V162.184C251.773 162.43 251.081 163.279 251.081 164.295C251.081 164.497 251.115 164.686 251.171 164.865L222.436 181.478ZM284.099 109.53L253.826 127.037V92.0349L284.099 74.5284V109.53ZM285.215 38.2306L313.938 54.8322C313.894 55.0109 313.849 55.2009 313.849 55.402C313.849 56.4186 314.541 57.2677 315.478 57.5135V90.7278L285.204 73.2213V38.2306H285.215ZM285.215 146.476L314.485 129.551C314.753 129.819 315.098 130.02 315.478 130.12V163.983L285.204 181.489V146.476H285.215ZM347.425 181.802L317.151 164.295L346.867 147.113L347.425 146.789L347.983 147.113L377.699 164.295L347.425 181.802ZM379.918 164.295L410.192 146.789L440.466 164.295L410.192 181.802L379.918 164.295Z"
                                                        fill="white" fill-opacity="0.05"></path>
                                                </svg>
                                                <div class="top_content">
                                                    <p>
                                                        <i class="fa fa-star fill"></i><i
                                                            class="fa fa-star fill"></i><i
                                                            class="fa fa-star fill"></i><i
                                                            class="fa fa-star empty"></i><i
                                                            class="fa fa-star empty"></i>
                                                    </p>
                                                    <div class="title_no_a_26 t_comment">
                                                        <sup>“</sup>{{ $av->texte }}<sub>“</sub>
                                                    </div>
                                                </div>
                                                <div class="lower_content clearfix">
                                                    <div class="image_box">
                                                        <img class="img-fluid" src="assets/images/team/team-5.png"
                                                            alt="image">
                                                        <svg width="86" height="88" viewBox="0 0 86 88"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M39.9434 87.5484C17.5317 86.8101 0.00666874 66.6886 0.800056 42.6058C1.59344 18.523 20.4048 -0.401485 42.8165 0.336847C65.2281 1.07518 85.8758 32.0772 85.0824 56.16C84.289 80.2429 62.355 88.2868 39.9434 87.5484Z"
                                                                fill="var(--color-set-one-1)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="cont">
                                                        <h4 class="title_no_a_22">{{ $av->titre }}</h4>
                                                        <p>{{ $av->sous_titre }}</p>
                                                    </div>
                                                </div>
                                                <i class="flaticon-right-quote"></i>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!---testimonial end-->
                <!---============spacing==========--->
                <!---============spacing==========--->
                <!--testimonial-section-->

                <!--news section-->
                <section class="news-section position-relative">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container z_1 position-relative">
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <div class="section_title text-center type_one">
                                    <h4 class="sm_title"> Latest News & Blog</h4>
                                    <div class="title_whole">
                                        <h2 class="title"> Read Our Latest Articles</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_40"></div>
                        <!---============spacing==========--->
                        <div class="blog_post position-relative">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published"
                                                        datetime="2022-12-29T10:06:24+00:00">Dec 29,
                                                        2022</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="blog.html">
                                                    <img src="assets/images/blog/blog-3.png" alt="image"
                                                        class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <div class="d-flex authour align-items-center">
                                                    <img src="assets/images/gavatar.png" alt="image"
                                                        class="img-fluid">
                                                    Bradley R Grady
                                                </div>
                                                <h4 class="title_22">
                                                    <a href="blog.html">Create
                                                        An Information Way Architecture Easy</a>
                                                </h4>
                                                <p class="descs">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem…
                                                </p>
                                                <a href="blog.html" class="rd_more">Read More<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published"
                                                        datetime="2022-12-29T10:09:05+00:00">Dec 29,
                                                        2022</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="blog.html">
                                                    <img src="assets/images/blog/blog-2.png" alt="image"
                                                        class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <div class="d-flex authour align-items-center">
                                                    <img src="assets/images/gavatar.png" alt="image"
                                                        class="img-fluid">
                                                    Bradley R Grady
                                                </div>
                                                <h4 class="title_22">
                                                    <a href="blog.html">Bring
                                                        to the table win-win survival strategis</a>
                                                </h4>
                                                <p class="descs">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem…
                                                </p>
                                                <a href="blog.html" class="rd_more">Read More<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published"
                                                        datetime="2022-12-29T10:07:32+00:00">Dec 29,
                                                        2022</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="blog.html">
                                                    <img src="assets/images/blog/blog-1.png" alt="image"
                                                        class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <div class="d-flex authour align-items-center">
                                                    <img src="assets/images/gavatar.png" alt="image"
                                                        class="img-fluid">
                                                    Jason P Laforce
                                                </div>
                                                <h4 class="title_22">
                                                    <a href="blog.html">Building
                                                        Web Layouts For Dual Foldable Devices</a>
                                                </h4>
                                                <p class="descs">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem…
                                                </p>
                                                <a href="blog.html" class="rd_more">Read More<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_70"></div>
                    <!---============spacing==========--->
                </section>
                <!--news section-->
            </div>
            <!--content end-->
            <!--footer start-->

            <!----==============content_all_warpper==============--->
        </div>
        <!----==============content_all_warpper end==============--->
        <!----=============page_wapper end=============---->
        <!---footer start--->
        <footer class="footer style_four">
            <!---============spacing==========--->
            <div class="pd_top_80"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="call_to_action style_one">
                    <div class="section_title type_one">
                        <div class="title_whole">
                            <h4 class="sm_title"> Contact Us</h4>
                            <h2 class="title">
                                Find an Insurance Agent or Start
                                Tracking your Claims
                            </h2>
                        </div>
                    </div>
                    <div class="theme_btn_all">
                        <a href="#" class="theme_btn">
                            Track Your Claim <span> <i class=" fi-rr-arrow-small-up"></i></span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center contact_header_one">
                        <div class="icon_s">
                            <i class=" fi-rr-headphones"></i>
                        </div>
                        <div class="content">
                            <h6 class="tite">Need Help?</h6>
                            <div class="title_20"><a href="tel:+000(123)45688">{{ $apropos->telephone }}</div>
                        </div>
                    </div>
                </div>

            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="mid_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list_box text-center linline">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            Home </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            About </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            Services </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            Reviews </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            Need a Career? </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            News & Blog </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#">
                                            Support </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="bottom_content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="logo_box">
                                <a href="#" class="logo navbar-brand">
                                    <img src="assets/images/footer-logo-three.png" alt="Vankine"
                                        class="logo_default">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 text-md-end">
                            <div class="position-relative color_white">
                                Copyright 2023, Vankine. All Rights Reserved</div>
                        </div>
                    </div>

                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_80"></div>
            <!---============spacing==========--->
            <div class="pattern_1">
                <img src="assets/images/dot-round-2.png" class="img-fluid" alt="img" />
            </div>
            <div class="pattern_2">
                <img src="assets/images/pattern-3.png" class="img-fluid" alt="img" />
            </div>
            <div class="pattern_3">
                <img src="assets/images/h-6-shap1-2.png" class="img-fluid" alt="img" />
            </div>
        </footer>
        <!--footer end---
        <!----=================Script================---->
        <script type="text/javascript" src="assets/js/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/appear.js"></script>
        <script type="text/javascript" src="assets/js/plugins/TweenMax.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/waypoints.js"></script>
        <script type="text/javascript" src="assets/js/plugins/select.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/js/plugins/isotope.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/owl.js"></script>
        <script type="text/javascript" src="assets/js/plugins/sharer.js"></script>
        <script type="text/javascript" src="assets/js/plugins/rangeslider.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/counterup.js"></script>
        <script type="text/javascript" src="assets/js/plugins/slick.js"></script>
        <script type="text/javascript" src="include/validator.min.js"></script>
        <script type="text/javascript" src="include/contact.js"></script>
        <!-- map script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/map-helper.js"></script>
        <!-- main-js -->
        <script type="text/javascript" src="assets/js/main.js"></script>
        <!----=================Script================---->
</body>

</html>
