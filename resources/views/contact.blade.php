@extends('layouts.base')
@section('content')

		<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_2.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box">
								<h2>Контакты</h2>
								<p class="breadcrumbs"><span><a href="{{ url('/welcome') }}">Главная</a></span> <span>Контакты</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 animate-box">
						<h2>Контакты</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span> ул.Якуба Коласа, 28 <br> Республика Беларусь, Минск</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 375(44)530-33-14</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">AlexandrPankov@gmail.com</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="#">AlexandrPankov@gmail.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-md-pull-4 animate-box">
						<h2>Свезаться с нами</h2>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" class="form-control" placeholder="Имя">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" class="form-control" placeholder="Фамилия">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" class="form-control" placeholder="Email ">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject" class="form-control" placeholder="Цель заяки">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="О себе"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Оставить заявку" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>

		
				</div>
			</div>
			@endsection