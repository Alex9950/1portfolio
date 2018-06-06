@extends('layouts.base')
@section('content')

		<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box">
								<h2>О нас</h2>
								<p class="breadcrumbs"><span><a href="{{ url('/welcome') }}">Главная</a></span> <span>О нас</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="colorlib-about">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-6 animate-box">
						<div class="video colorlib-video" style="background-image: url(images/about.jpg);">
							<a href="https://www.youtube.com/watch?v=5TiDnEvfwe4" class="popup-vimeo"><i class="icon-play3"></i></a>
							<div class="overlay"></div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<h2>About Imahe</h2>
						<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Наши сотрудники</h2>
						<p></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<div class="staff-entry">
							<a href="#" class="staff-img" style="background-image: url(images/person1.jpg);"></a>
							<div class="desc">
								<h3>Александр Панков</h3>
								<span>Главный фотограф</span>
								<p> Меня зовут Александр Панков, я профессиональный свадебный и студийный фотограф, живу и работаю преимущественно в Минске..</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/#__utmzi__1__=1"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/sasha_pankov1/"><i class="icon-instagram"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="staff-entry">
							<a href="#" class="staff-img" style="background-image: url(images/person2.jpg);"></a>
							<div class="desc">
								<h3>Никита Ключенович</h3>
								<span>Видеооператор</span>
								<p> Меня зовут Никита Ключенович, я профессиональный видеооператор..</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/#__utmzi__1__=1"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="staff-entry">
							<a href="#" class="staff-img" style="background-image: url(images/person3.jpg);"></a>
							<div class="desc">
								<h3>Ноа Нельсон</h3>
								<span>Фотограф</span>
								<p> Меня зовут Ноа, я профессиональный свадебный и студийный фотограф, живу и работаю преимущественно в Москве..</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="staff-entry">
							<a href="#" class="staff-img" style="background-image: url(images/person4.jpg);"></a>
							<div class="desc">
								<h3>Дороти Мерсон</h3>
								<span>Организатор</span>
								<p>Меня зовут Дороти, я профессиональный организатор свадебных и студийных фотосессий, живу и работаю преимущественно в Москве..</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		@endsection