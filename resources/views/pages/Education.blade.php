<!DOCTYPE HTML>
<html lang="en-US">
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
    <link href="tail-style.css" rel="stylesheet">
        <!-- Alpine Plugins -->
        <script defer src="unpkg/cdn.min.js"></script>
    <script defer src="unpkg/alpinejs@3.10.5/dist/cdn.min.js"></script>
</head>
<body>

<!-- loder -->
    <div class="loader-wrapper">
      <div class="loader"></div>
      <div class="loder-section left-section"></div>
      <div class="loder-section right-section"></div>
    </div>

    
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
                <li><a href="/service">Services <span>+</span></a>
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
        class=" md:h-auto w-full flex flex-wrap justify-center items-center md:py-40 py-20 md:px-20 px-5 md:mt-5 mt-10 ">
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
                                        style="font-size: 14pt;">අප සමග ඔබට ලැබෙන වාසි මොනවද ? </span></strong></span>
                        </div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <div style="text-align: justify;"><span style="font-size: 12pt;">අපි කලින් සදහන් කරා වගේ 2010
                                ඉදලා ලංකාවේ ක්&zwj;රියාත්මක වන දිනපතා යාවත්කාලීන වෙන ලංකාවේ එකම Forex වෙබි අඩවිය. අපේ
                                වෙබි අඩවිය මුලුමනින්ම ක්&zwj;රියාත්මක වෙන්නේ අවුරැදු 14 ක් පුරා සැබෑ වෙළද පොලේ ගණුදෙනු
                                කරන සැබෑ ගණුදෙනු කරැවන් අතින් මිසක් පාඨමාලා පමණක් කරන කිසිවෙක් අතින් නෙවෙයි. ඒක නිසා
                                අපිට හැකියාව ලැබිලා තියෙනවා බොහෝ සේවාවන් හැමෝටම නොමිලේ සපයන්න.&nbsp;</span></div>
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
                            <!-- <div class="btn-primary btn">
                                <button
                                    class=" text-white px-6 py-2 rounded-md hover:bg-blue-600">Next</button>
                            </div> -->
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <p>Cryptocurrencies are used prim outside existing banking govern institutions  hanged</p>
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
                            <h4 class="widget-title">Company Address</h4>
                            <div class="menu-quick-link">
                                <p>Address <br>10 south building dhaka</p>
                                <p>Telephone <br>07182812</p>
                                <p>Email <br> hellow @ GAMIL.COM</p>
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

<!--==================================================-->
<!-- Start scroll Area -->
<!--==================================================-->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start scroll Area -->
<!--==================================================-->

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
	
	<!-- jquery js -->	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- bootstrap js -->	
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script src="assets/js/ajax-mail.js"></script>
	<!--  animated-text js -->	
	<script src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- jquery meanmenu js -->	
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->
	<script src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->	
	<script src="assets/js/theme.js"></script>
    <!-- range js -->   
    <script src="assets/js/range.js"></script>
	<!-- barfiller js -->
	<script src="assets/js/jquery.barfiller.js"></script>
    <!-- particls js -->
    <script src="assets/js/particls.chart1.js"></script>

    <!--jave script -->
    <script>
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').addClass('active');
            if (scrolled < 300) $('.go-top').removeClass('active');
        });

        $('.go-top').on('click', function () {
            $("html, body").animate({
                scrollTop: "0"
            }, 1200);
        });
    </script>

</body>
</html>