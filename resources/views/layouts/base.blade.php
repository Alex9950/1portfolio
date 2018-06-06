<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PANKOV | Ph</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-md-push-5 text-center">
                            <div id="colorlib-logo"><a href="{{url('/welcome')}}"><i class="icon-camera4"></i>NS | Studio</a></div>
                        </div>
                        <div class="col-md-5 col-md-pull-2 text-right menu-1">
                            <ul>
                                <li><a href="{{ url('/welcome') }}">Главная</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ url('/gallery') }}">Галерея</a>
                                    
                                </li>
                                <li><a href="{{ url('/services') }}">Услуги</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 text-left menu-1">
                            <ul>
                                <li><a href="{{ url('/blog') }}">Блог</a></li>
                                <li><a href="{{ url('/about') }}">Команда</a></li>
                                <li><a href="{{ url('/contact') }}">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <div id="colorlib-instagram">><a href="{{url('https://www.instagram.com/sasha_pankov1/')}}">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 colorlib-heading text-center animate-box">
                    <h2><i class="icon-instagram"></i> Instagram</h2>
                </div>
            </div>
            <div class="row">
                <div class="instagram-entry animate-box">
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-1.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-2.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-3.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-4.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-5.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-6.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-7.jpg);">
                    </a>
                    <a href="#" class="instagram text-center" style="background-image: url(images/insta-8.jpg);">
                    </a>
                </div>
            </div>
        </div>

        <footer id="colorlib-footer">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>О себе</h4>
                        <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                      
                    </div>
                    <div class="col-md-3 colorlib-widget">
                        <h4>Информация</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="{{ url('/welcome') }}"><i class="icon-check"></i> Главная</a></li>
                                <li><a href="{{ url('/gallery') }}"><i class="icon-check"></i> Галерея</a></li>
                                <li><a href="{{ url('/about') }}"><i class="icon-check"></i> Команда</a></li>
                                <li><a href="{{ url('/blog') }}"><i class="icon-check"></i> Блог</a></li>
                                <li><a href="{{ url('/contact') }}"><i class="icon-check"></i> Контакты</a></li>
                                
                            </ul>
                        </p>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>Свежие новости</h4>
                        <div class="f-blog">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-1.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">Photoshoot Technique</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                        <div class="f-blog">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-2.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">Camera Lens Shoot</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                        <div class="f-blog">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-3.jpg);">
                            </a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">PANKOV | PH the biggest photography studio</a></h2>
                                <p class="admin"><span>30 March 2018</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>Контактная информация</h4>
                        <ul class="colorlib-footer-links">
                            <li> ул.Якуба Коласа, 28, <br>  Республика Беларусь, Минск</li>
                            <li><a href="tel://1234567920"><i class="icon-phone"></i> +375(44)530-33-14</a></li>
                            <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> AlexandrPankov@gmail.com</a></li>
                            <li><a><i class="icon-location4"></i> instagram sasha_pankov1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- YTPlayer -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    </body>
</html>

