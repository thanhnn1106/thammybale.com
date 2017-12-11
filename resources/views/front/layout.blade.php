<!DOCTYPE HTML>
<head>
    <title>Trường thẫm mỹ Balê</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/menu/css/simple_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/boxes/css/style5.css') }}">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    <!--JS FILES STARTS-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.eislideshow.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        jQuery.noConflict()(function ($) {
            $('#ei-slider').eislideshow({
                animation: 'center',
                autoplay: true,
                slideshow_interval: 3000,
                titlesFactor: 0
            });
        });
    </script>
    <script src="{{ asset('/js/slides/slides.min.jquery.js') }}"></script>
    <script src="{{ asset('js/cycle-slider/cycle.js') }}"></script>
    <script src="{{ asset('js/nivo-slider/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('js/tabify/jquery.tabify.js') }}"></script>
    <script src="{{ asset('js/prettyPhoto/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/twitter/jquery.tweet.js') }}"></script>
    <script src="{{ asset('js/scrolltop/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('js/portfolio/filterable.js') }}"></script>
    <script src="{{ asset('js/modernizr/modernizr-2.0.3.js') }}"></script>
    <script src="{{ asset('js/easing/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/kwicks/jquery.kwicks-1.5.1.pack.js') }}"></script>
    <script src="{{ asset('js/swfobject/swfobject.js') }}"></script>
    <!-- get fancybox -->
    <link rel="stylesheet" type="text/css" itemprop="javascript" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" media="all">
    <script src="{{ asset('js/fancybox/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/fancybox/jquery.fancybox-1.2.1.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="site_title"><a href="index.html"><img src="{{ asset('images/home/logo.png') }}" alt=""></a></div>
        <ul id="menu" class="menu" style="width: 100%;">
            <li class="current_nav"><a href="/trang-chu">TRANG CHỦ</a></li>
            <li><a href="/ve-chung-toi">VỀ CHÚNG TÔI</a>
                <!-- sub menu -->
                <!-- <ol>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="cinema.html">Cinema</a></li>
                  <li><a href="slider.html">Nivo Slider</a></li>
                  <li><a href="columns.html">Columns</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li class="last"><a href="photogrid.html">Photo Grid</a></li>
                  <li><a href="image.html">Static Image</a></li>
                </ol> -->
                <!-- end sub menu -->
            <li><a href="/cac-khoa-hoc">CÁC KHOÁ HỌC</a></li>
            <li><a href="/dich-vu-spa">DỊCH VỤ SPA & BẢNG GIÁ</a></li>
            <li><a href="/lien-he">LIÊN HỆ</a></li>
            <li class="last"><a href="/tin-tuc">HÌNH ẢNH & VIDEO & TIN TỨC</a></li>
        </ul>
        <div class="clr"></div>
        <ol id="menu2" class="simple_menu simple_menu_css horizontal black_menu" style="margin-left: 1180px;">
            <li><a href=''>Việt Nam</a></li>
            <li><a href=''>English</a></li>
        </ol>
        <div class="clr"></div>
    </div>
    <!-- end header -->
    <div class="wrapper">
        <div id="ei-slider" class="ei-slider">
            <ul class="ei-slider-large">
                <li> <img src="{{ asset('img/home/banner1.png') }}" alt="">
                    <div class="ei-title">
                        <h2>Professional</h2>
                        <h3>Lightning Equipment</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner2.png') }}" alt="">
                    <div class="ei-title">
                        <h2>Passionate</h2>
                        <h3>Ballerina</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner3.png') }}" alt="">
                    <div class="ei-title">
                        <h2>Tranquility</h2>
                        <h3>in red</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner4.png') }}" alt="">
                    <div class="ei-title">
                        <h2>Vintage</h2>
                        <h3>Beauty</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner5.png') }}" alt="">
                    <div class="ei-title">
                        <h2>Mystery</h2>
                        <h3>Woman</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner6.png') }}" alt="">
                    <div class="ei-title">
                        <h2>In the</h2>
                        <h3>Spotlight</h3>
                    </div>
                </li>
                <li> <img src="{{ asset('img/home/banner7.png') }}" alt="">
                    <div class="ei-title">
                        <h2>A touch of</h2>
                        <h3>Fashion</h3>
                    </div>
                </li>
            </ul>
            <!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <li><a href="#">Slide 1</a><img src="{{ asset('img/home/banner1.png') }}" alt=""></li>
                <li><a href="#">Slide 2</a><img src="{{ asset('img/home/banner2.png') }}" alt=""></li>
                <li><a href="#">Slide 3</a><img src="{{ asset('img/home/banner3.png') }}" alt=""></li>
                <li><a href="#">Slide 4</a><img src="{{ asset('img/home/banner4.png') }}" alt=""></li>
                <li><a href="#">Slide 5</a><img src="{{ asset('img/home/banner5.png') }}" alt=""></li>
                <li><a href="#">Slide 6</a><img src="{{ asset('img/home/banner6.png') }}" alt=""></li>
                <li><a href="#">Slide 7</a><img src="{{ asset('img/home/banner7.png') }}" alt=""></li>
            </ul>
            <!-- ei-slider-thumbs -->
        </div>
        <!-- ei-slider -->
    </div>
    <div id="container">
        @yield('content')
    </div>
    <div style="clear:both; height: 40px"></div>
    <div id="footer">
<!--        <div style="width:960px; margin: auto; padding-bottom: 30px">
            <div class="one-fourth">
                <h3>Useful Links</h3>
                <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">
                    <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Lorem Ipsum</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Ellem Ciet</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Currivitas</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Salim Aritu</li>
                </ul>
            </div>
            <div class="one-fourth">
                <h3>Terms and Conditions</h3>
                <ul style="font-family: Georgia, 'Times New Roman'; margin: 0 15px 0 0">
                    <li style="border-bottom: 1px dotted #737a84; border-top: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Lorem Ipsum</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Ellem Ciet</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Currivitas</li>
                    <li style="border-bottom: 1px dotted #737a84; padding: 3px 20px; letter-spacing: 2px">Salim Aritu</li>
                </ul>
            </div>
            <div class="one-fourth">
                <h3>Information</h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
                <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
                    Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
            </div>
            <div class="one-fourth last">
                <h3>Socialize</h3>
                <img src="{{ asset('img/icon_fb.png') }}" alt="">
                <img src="{{ asset('img/icon_twitter.png') }}" alt="">
                <img src="{{ asset('img/icon_in.png') }}" alt="">
            </div>
            <div style="clear:both"></div>
        </div>-->
    </div>
    <div id="shadow"></div>
</body>
</html>