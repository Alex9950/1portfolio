@extends('layouts.base')
@section('content')
<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay"></div>
            <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=Yz5-mrDBbxU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
            <div class="display-t text-center">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box">
                                <h1 class="holder"><span>Fashion Photoshoot</span></h1>
                                <h2>Classy Rebel Fashion Photoshoot</h2>
                               
                                <p><a href="{{ url('/gallery') }}" class="btn btn-primary btn-custom">Просмотр галереи</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-camera4"></i>
                            </span>
                            <div class="desc">
                                <h3>Фотосъемка</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-image2"></i>
                            </span>
                            <div class="desc">
                                <h3>Обработка фотографий</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services">
                            <span class="icon">
                                <i class="icon-video3"></i>
                            </span>
                            <div class="desc">
                                <h3>Видеосъемка</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-about-flex">
            <div class="col-half about-flex-img animate-box" style="background-image: url(images/about.jpg);"></div>
            <div class="col-half">
                <div class="row">
                    <div class="col-md-12 col-md-pull-2 animate-box">
                        <div class="about-desc">
                            <h2>We Are Imahe a Photography Studio</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Gallery</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 no-gutters">
                        <a href="images/gallery-1.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-1.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Мария Рублевская</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                        <a href="images/gallery-2.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-2.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Ольга Шкребова</h2>
                                <p class="category"><span>Jacket</span> <span>Woman</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 no-gutters">
                        <a href="images/gallery-3.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-3.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Джен Чоу</h2>
                                <p class="category"><span>Jacket</span> <span>Male</span></p>
                            </div>
                        </a>
                        <a href="images/gallery-4.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-4.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Мария Афанасьева</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 no-gutters">
                        <a href="images/gallery-5.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-5.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Екатерина Кривиченко</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                        <a href="images/gallery-6.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-6.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Никита Колмагоров</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 no-gutters">
                        <a href="images/gallery-7.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-7.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Ксения Романова</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                        <a href="images/gallery-8.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-8.jpg" alt="">
                            <div class="desc text-center">
                                <h2>Александра Мазурова</h2>
                                <p class="category"><span>Fashion</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Недавние записи</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-1.jpg);"></a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">Photoshoot Technique</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                            <div class="admin">
                                <p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-2.jpg);"></a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">Some tricks in Photoshop for your photo</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                            <div class="admin">
                                <p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="{{ url('/blog') }}" class="blog-img" style="background-image: url(images/blog-3.jpg);"></a>
                            <div class="desc">
                                <h2><a href="{{ url('/blog') }}">50 Effects in Photoshop</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                            <div class="admin">
                                <p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i
                                 class="icon-bubble3"></i> 10</a></span></p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

       @endsection