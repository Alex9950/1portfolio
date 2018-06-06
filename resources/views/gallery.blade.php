@extends('layouts.base')
@section('content')

		<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box">
								<h2>Галерея</h2>
								<p class="breadcrumbs"><span><a href="{{ url('/welcome') }}">Главная</a></span> <span>Галерея</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-gallery">
			<div class="container">
				<div class="row row-pb-md">
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
						<a href="images/gallery-9.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-9.jpg" alt="">
							<div class="desc text-center">
								<h2>Федор Новиков</h2>
								<p class="category"><span>Fashion</span> <span>Man</span></p>
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
						<a href="images/gallery-10.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-10.jpg" alt="">
							<div class="desc text-center">
								<h2>Алина Родионова</h2>
								<p class="category"><span>Fashion</span> <span>Woman</span></p>
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
						<a href="images/gallery-11.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-11.jpg" alt="">
							<div class="desc text-center">
								<h2>Кирилл Пивоваров</h2>
								<p class="category"><span>Fashion</span> <span>Man</span></p>
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
						<a href="images/gallery-12.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-12.jpg" alt="">
							<div class="desc text-center">
								<h2>Ольга  Сокол</h2>
								<p class="category"><span>Jacket</span> <span>Woman</span></p>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		
					@endsection