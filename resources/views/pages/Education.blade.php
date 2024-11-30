<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Golddit-Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- theme default CSS -->	
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all" />	
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />	
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />	
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all" />	
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />	
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="style.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="dist/style.html">
    <link href="tail-style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&amp;display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&amp;family=Nunito:wght@800&amp;family=Roboto&amp;display=swap');
    </style>
    <!-- Alpine Plugins -->
    <script defer src="unpkg/cdn.min.js"></script>
    <script defer src="unpkg/alpinejs@3.10.5/dist/cdn.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D1J7K42REG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-D1J7K42REG');
    </script>
</head>
<body class=" overflow-x-auto" x-data>
    <!--==================================================-->
    <!-- Start cryptobit Main Menu Area -->
    <!--==================================================-->
<div id="sticky-header" class="cryptobit_nav_manu upper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="logo">
                    <a class="logo_img upper1" href="/" title="cryptobit">
                            <img src="assets/images/logo2.png" alt="" />
                    </a>
                    <a class="main_sticky upper1" href="/" title="cryptobit">
                            <img src="assets/images/logo2.png" alt="astute" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                    <nav class="cryptobit_menu upper">
                        <ul class="nav_scroll">
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/service">Services <span>+</span></a>
                                <ul class="sub-menu">
                                    <li><a href="/pricing">Pricing</a></li>
                                </ul>
                            </li>
                            <li><a href="/education">Education <span></span></a>
                            </li>
                            <li><a href="/blog">Blog</a>
                            </li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                        <div class="header-button upper1">
                            <a href="#">Login</a>
                        </div>
                    </nav>
            </div>
        </div>
    </div>
</div>
   <!-- Cryptobit Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu" >
        <nav class="cripto_menu" >
            <ul class="nav_scroll" >
                <li><a href="/">Home</a>
                </li>
                <li><a href="/about">About</a></li>
                <li><a href="/service">Services <span></span></a>
                    <ul class="sub-menu">
                            <li><a href="/pricing">Pricing</a></li>
                    </ul>
                </li>
                <li><a href="/education">Education <span></span></a></li>
                <li><a href="/blog">Blog</a>
                </li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
   
    <!--==================================================-->
    <!-- End cryptobit main menu Area -->
    <!--==================================================-->

    <!--Article Section-->
    <section
        class=" md:h-auto w-full flex flex-wrap justify-center items-center md:py-40 py-20 md:px-20 px-5 md:mt-5 mt-10">
        <div class="max-w-screen-xl flex justify-center ">
            <div class=" w-full p-2 md:flex justify-between md:space-x-4 md:space-y-0 space-y-5">
                <div class=" md:w-3/12 md:pr-5 ">
                    <div class=" rounded-md space-y-3 md:text-left font-roboto">
                        <ul class="flex flex-col space-y-3">
                            <li class=" bg-gray-700 hover:bg-gray-800 text-white rounded-lg" x-data="accordion(1)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Basic Articles</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()"
                                    class=" text-gray-700 overflow-hidden max-h-0 duration-500 bg-white transition-all">
                                    <div class=" mt-2 px-6 space-y-1 ">
                                        <ol class="list-decimal">
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/1.html"
                                                    show="article/1.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/3.html"
                                                    show="article/3.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/4.html"
                                                    show="article/4.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/5.html"
                                                    show="article/5.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/6.html"
                                                    show="article/6.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/7.html"
                                                    show="article/7.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/8.html"
                                                    show="article/8.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/9.html"
                                                    show="article/9.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/10.html"
                                                    show="article/10.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/11.html"
                                                    show="article/11.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles" href="article/12.html"
                                                    show="article/12.html">
                                                    <p></p>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </li>

                            <li class=" bg-gray-700 hover:bg-gray-800 text-white rounded-lg" x-data="accordion(2)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Medium Articles</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()"
                                    class=" text-gray-700 overflow-hidden max-h-0 duration-500 bg-white transition-all">
                                    <div class=" mt-2 px-6 space-y-1 list-disc">
                                        <ol class="list-decimal">

                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/1.html" show="article/medium/1.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/2.html" show="article/medium/2.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/3.html" show="article/medium/3.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/4.html" show="article/medium/4.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/5.html" show="article/medium/5.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/6.html" show="article/medium/6.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/7.html" show="article/medium/7.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/8.html" show="article/medium/8.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/9.html" show="article/medium/9.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/10.html" show="article/medium/10.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/11.html" show="article/medium/11.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/12.html" show="article/medium/12.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/13.html" show="article/medium/13.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/14.html" show="article/medium/14.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/15.html" show="article/medium/15.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/16.html" show="article/medium/16.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/17.html" show="article/medium/17.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/18.html" show="article/medium/18.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/19.html" show="article/medium/19.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/20.html" show="article/medium/20.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/21.html" show="article/medium/21.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/22.html" show="article/medium/22.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/23.html" show="article/medium/23.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/24.html" show="article/medium/24.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/25.html" show="article/medium/25.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/26.html" show="article/medium/26.html">
                                                    <p></p>
                                                </a>
                                            </li>


                                            <li>
                                                <a class=" hover:text-blue-500 loadArticles"
                                                    href="article/medium/27.html" show="article/medium/27.html">
                                                    <p></p>
                                                </a>
                                            </li>

                                        </ol>
                                    </div>
                                </div>
                            </li>

                            <li class=" bg-gray-700 hover:bg-gray-800 text-white rounded-lg" x-data="accordion(3)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Advance Articles</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()"
                                    class=" text-gray-700 overflow-hidden max-h-0 duration-500 bg-white transition-all">
                                    <div class=" mt-2 px-3 space-y-1 list-disc">
                                        <div>
                                            <a href="online-course.html">
                                                <p class=" hover:text-blue-500 loadArticles"> On-Point Advance Trading
                                                    Practical Course. </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class=" mt-5 hidden md:block">
                        <div>
                            <h2 class=" text-xl  text-black font-bold border-b-4 border-red-400 pb-4">Top Brokers</h2>
                        </div>
                        <div class=" mt-4 bg-gray-100 p-2 pb-4 rounded-lg">
                            <div>
                                <h2 class=" text-center text-black">Nordfx</h2>
                                <div class="flex justify-center">
                                    <img src="img/nfx.jpg" alt="" class=" mt-2 w-5/6 rounded-lg shadow-md">
                                </div>
                                <div class=" flex justify-center mt-5">
                                    <a href="https://account.nordfx.com/account/register/?id=434789&amp;lang=en"
                                        target="_blank"
                                        class=" bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-700">Open
                                        an Account</a>
                                </div>
                            </div>
                        </div>
                        <div class=" mt-4 bg-gray-100 p-2 pb-4 rounded-lg">
                            <div>
                                <h2 class=" text-center text-black">IC Market</h2>
                                <div class="flex justify-center">
                                    <img src="img/icm.jpg" alt="" class=" mt-2 w-5/6 rounded-lg shadow-md">
                                </div>
                                <div class=" flex justify-center mt-5">
                                    <a href="https://www.icmarkets.com/global/en/trading-accounts/overview/?camp=40484"
                                        target="_blank"
                                        class=" bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-700">Open
                                        an Account</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="md:w-9/12 border-b pb-10 font-roboto">
                    <div class="">
                        <h1 class="text-xl font-extrabold text-gray-400">කොහොමද Forex කරන්න පටන් ගන්නේ ?</h1>
                    </div>
                    <div class=" mt-4 text-gray-700 space-y-1">
                        <p>
                        <div>
                            <div style="text-align: justify;"><span
                                    style="text-decoration: underline; font-size: 24pt;"><strong>කොහොමද Forex කරන්න පටන්
                                        ගන්නේ ?</strong></span></div>
                            <div style="text-align: justify;">&nbsp;</div>
                        </div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;"></span></div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span
                                style="text-decoration: underline; font-size: 14pt;"><strong></strong></span></div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;"><strong></strong></span></div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;"><strong></strong></span></div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;"><strong></span></div>
                        <div style="text-align: justify;"><span
                                style="font-size: 12pt;"><strong></strong><strong></strong></strong></span></div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span
                                style="color: #e03e2d; font-size: 12pt;"><strong></strong></span></div>
                        <div style="text-align: justify;">&nbsp;</div>

                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span style="text-decoration: underline;"><strong><span
                                        style="font-size: 14pt;">අප සමග ඔබට ලැබෙන වාසි මොනවද ?</span></strong></span>
                        </div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;">අපි කලින් සදහන් කරා වගේ 2010
                                ඉදලා ලංකාවේ ක්&zwj;රියාත්මක වන දිනපතා යාවත්කාලීන වෙන ලංකාවේ එකම Forex වෙබි අඩවිය. අපේ
                                වෙබි අඩවිය මුලුමනින්ම ක්&zwj;රියාත්මක වෙන්නේ අවුරැදු 14 ක් පුරා සැබෑ වෙළද පොලේ ගණුදෙනු
                                කරන සැබෑ ගණුදෙනු කරැවන් අතින් මිසක් පාඨමාලා පමණක් කරන කිසිවෙක් අතින් නෙවෙයි. ඒක නිසා
                                අපිට හැකියාව ලැබිලා තියෙනවා බොහෝ සේවාවන් හැමෝටම නොමිලේ සපයන්න.&nbsp;</span></div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;">අපි කලින් සදහන් කරා වගේ 2010
                                ඉදලා ලංකාවේ ක්&zwj;රියාත්මක වන දිනපතා යාවත්කාලීන වෙන ලංකාවේ එකම Forex වෙබි අඩවිය. අපේ
                                වෙබි අඩවිය මුලුමනින්ම ක්&zwj;රියාත්මක වෙන්නේ අවුරැදු 14 ක් පුරා සැබෑ වෙළද පොලේ ගණුදෙනු
                                කරන සැබෑ ගණුදෙනු කරැවන් අතින් මිසක් පාඨමාලා පමණක් කරන කිසිවෙක් අතින් නෙවෙයි. ඒක නිසා
                                අපිට හැකියාව ලැබිලා තියෙනවා බොහෝ සේවාවන් හැමෝටම නොමිලේ සපයන්න.&nbsp;</span></div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;">ඉතින් පිළිවෙලට නිවැරදිවම Forex
                                කරලා ඒක ඔයාගේ ආදායම් මාර්ගයක් කරගන්න යන ගමනේ තිරණය තියන්නේ ඔයාගේ අතේ. අපට කරන්න පුලුවන්
                                නිවැරදි මගපෙන්වීම හා අවශ්&zwj;ය පහසුම් සැපයීම පමණයි. මෙියාකරයෙන් පිළිවෙලකට මේක කරගෙන
                                යන්න හිතන් ඉන්න කෙනක්නං ඔබ, මෙි ලිපියේ තියෙන ගිණුම විවෘත කරගෑනිමේ පියවර මුලින්ම කරලා
                                ඉදිරියට යන්න. නැත්තං පැටලෙන්න පුලුවන්. ගැටලුවක් ඇත්නම් ඔනෑම අවස්ථාවක අහන්නත්
                                පුලුවන්.&nbsp; එවගේම ඔයාට අපේ විඩියොස් පවා බලන්න පුලුවන් පහතින්. පහත නිල් පාට
                                <strong>NEXT</strong> කිලික් කරලා ඊළග ලිපියට ඔයාට යන්න පුලුවන්.&nbsp;</span></div>
                        <div style="text-align: justify;">
                            <div>
                                <div style="text-align: justify;">&nbsp;</div>
                                <div style="text-align: justify;"><span style="font-size: 12pt;">එවගේම සමිබන්ධ වෙන්න අපේ
                                        <strong>Telegram Group</strong> එකට. <a href="https://t.me/+iALOgW1VVA45MDc1"
                                            target="_blank" rel="noopener">CLICK HERE</a><br />පහතින් දාලා තියෙන්වා අපේ
                                        යුටියුබි චැනල් එකේ විඩියොස්. එවත් බැලුවට කිසිම පාඩුවක් නැ.&nbsp;</span></div>
                                <div style="text-align: justify;"><span style="font-size: 14pt;"><span
                                            style="font-size: 14pt;"><br /><span style="font-size: 10pt;">*Please read
                                                our terms and conditions. By using any of our services, we consider that
                                                you agree to our terms and conditions.</span></span></span>
                                    <hr />
                                </div>
                            </div>
                        </div>
                        <!--Button-->
                        <div style="margin-top: 20px; text-align: center;"><a
                                href="https://www.youtube.com/channel/UC3LqAUorlB3toeR55ZRBiYQ" target="_blank"
                                rel="noopener"> <button
                                    style="background-color: #c14063; border: none; border-radius: 5px; color: white; /* dark grey */ padding: 15px 32px;">Watch
                                    All Videos</button></a></div>
                        <!--Button end-->
                        <div
                            style="margin-top: 20px; margin-bottom: 20px; color: white; padding-top: 6px; padding-right: 6px; padding-bottom: 6px; background-color: #a87d8f; border-radius: 10px; text-align: center;">
                            <p>Forex ගැන මුල සිට අගටම සියලුම Advance ප්&zwj;රායෝගික ක්&zwj;රම සමග දිනකට $2-$50 දක්වා
                                නිවැරදිව උපයන ආකාරය තනි පුද්ගල පාඨාමාලා ලෙස lakforex Admin සමග සරලවම ඉගෙන ගන්න. මේ ඔබට
                                අවශ්&zwj;ය එකම හා අවසාන පෞද්ගලික Forex පුහුණු පාඨමාලාවයි. විස්තර සදහා</p>
                            <div style="margin-top: 20px; text-align: center;"><a href="online-course.html"
                                    target="_blank" rel="noopener"> <button
                                        style="background-color: #61a8db; border: none; border-radius: 5px; color: white; /* dark grey */ padding: 15px 32px;">පිවිසෙන්න</button>
                                </a></div>
                        </div>
                        </p>


                    </div>
                    <div class=" mt-10 flex justify-between items-center">
                        <a href="article/3.html">
                            <div class="btn-primary btn">
                                <button
                                    class=" text-white px-6 py-2 rounded-md hover:bg-blue-600">Next</button>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Disable Right click
        document.addEventListener('contextmenu', event => event.preventDefault());

        // Disable key down
        document.onkeydown = disableSelectCopy;

        // Disable mouse down
        document.onmousedown = dMDown;

        // Disable click
        document.onclick = dOClick;

        function dMDown(e) { return false; }

        function dOClick() { return true; }

        function disableSelectCopy(e) {
            // current pressed key
            var pressedKey = String.fromCharCode(e.keyCode).toLowerCase();
            if ((e.ctrlKey && (pressedKey == "c" || pressedKey == "x" || pressedKey == "v" || pressedKey == "a" || pressedKey == "u")) || e.keyCode == 123) {
                return false;
            }
        }
    </script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function () { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '../lakforex.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
    </script>

    <!-- Modal -->
    <div class="modal fade hidden" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="noticeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="noticeModalLabel">Please Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    To view the content, please login to the My Account
                </div>
            </div>
        </div>
    </div>

    <!--header-->

    <!--==================================================-->
    <!-- Start Cryptobit Footer Middle Area -->
    <!--==================================================-->
    <div class="footer-middle style-two pt-80 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widgets-company-info  pt-3 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="cryptobit-logo">
                            <a class="logo_img" href="index.html" title="cryptobit">
                                <img src="assets/images/logo2.png" alt="" />
                            </a>
                        </div>
                        <div class="company-info-desc">
                            <p>Cryptocurrencies are used prim outside existing banking govern institutions hanged</p>
                        </div>
                        <div class="company_icon">
                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-nav-menu wow fadeInLeft" data-wow-delay=".5s">
                                <h4 class="widget-title">Catagories</h4>
                                <div class="menu-quick-link-content">
                                    <ul class="menu">
                                        <li><a href="#">What is ICO</a></li>
                                        <li><a href="#">Token</a></li>
                                        <li><a href="#">Road Map</a></li>
                                        <li><a href="#">Advisor</a></li>
                                        <li><a href="#">Payments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-nav-menu upper wow fadeInLeft" data-wow-delay=".6s">
                                <h4 class="widget-title">Useful Link</h4>
                                <div class="menu-quick-link-content">
                                    <ul class="menu">
                                        <li><a href="#">Payment & TAX</a></li>
                                        <li><a href="#">Terms of Services</a></li>
                                        <li><a href="#">My Account </a></li>
                                        <li><a href="#">Return Policy</a></li>
                                        <li><a href="#">Discount</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget-nav-menu upper1 wow fadeInLeft" data-wow-delay=".7s">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="menu-quick-link">
                                    <p>Get now free 20% discount for all products on your first order</p>
                                </div>
                                <div class="contact-form-box-2 text-center">
                                    <form>
                                        <div class="from-box1">
                                            <input type="text" placeholder="Enter Your E-Mail">
                                            <button><i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom mt-65 wow fadeInLeft" data-wow-delay=".8s">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© 2024 All Rights Reserved. By: <span>TRIO DEV</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-menu">
                            <ul>
                                <li>Privacy Policy</li>
                                <li>Terms & Condition</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-bottom-shape">
                        <img src="assets/images/resource/footer-b.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End Cryptobit Footer Middle Area -->
    <!--==================================================-->
</body>

</html>