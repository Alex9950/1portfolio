@extends('layouts.base')
@section('content')

		<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box">
								<h2>Услуги</h2>
								<p class="breadcrumbs"><span><a href="{{ url('/welcome') }}">Главная</a></span> <span>Услуги</span></p>
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

		@endsection