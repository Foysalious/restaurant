@include('frontend.include.header')
@include('frontend.include.topbar')
@include('frontend.include.nav')



	

	

	<!-- banner start -->
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">

			<!-- banner item start -->
			<div class="slider-item js-fullheight" style="background-image:url({{asset('frontend/images/tandoori.jpeg')}});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Memsaab Indian Restaurant</h2></span>
								<h1>TANDOORI CHICKEN</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner item end -->

			<!-- banner item start -->
			<div class="slider-item js-fullheight" style="background-image:url({{asset('frontend/images/jalfrazi.jpeg')}});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Memsaab Indian Restaurant</h2></span>
								<h1>JALFRAZI CHICKEN LAMB PRAWN</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner item end -->

			

		</div>
	</section>
	<!-- banner end -->

	<!--  about section start-->
	<section class="about">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">About Us</h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>

			<div class="row m-t-15 about-image">
				<div class="col-md-4">
					<img src="{{asset('frontend/images/IMG_3747-260x195.jpg')}}" class="img-fluid" alt="">
				</div>
				<div class="col-md-4">
					<img src="{{asset('frontend/images/IMG_3755-260x195.jpg')}}" class="img-fluid" alt="">
				</div>
				<div class="col-md-4">
					<img src="{{asset('frontend/images/IMG_3745-260x195.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>

			<div class="row m-t-15">
				<div class="col-md-12">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
	</section>
	<!--  about section end-->

	<!-- booking section start -->
	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" id="booking">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form id="createMessage">
						<h3 class="mb-3">Book your Table</h3>
						<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group">
									<input type="name" class="form-control" placeholder="Name" name="name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" name="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone" name="phone">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<input type="time" class="form-control" placeholder="Time" name="date">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="date" class="form-control" name="time">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">Book Your Table Now</button>
								</div>
							</div>
							<div class="col-md-12 sending_mail">
								<div class=" alert alert-warning" role="alert">
									Sending ...
								  </div>
							</div>
						
						</div>
					</form>
				</div>
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">About</span>
									<h2 class="mb-4">Welcome to Memsaab Indian Restaurant &amp; Takeaway Islington</h2>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came
									from it would have been rewritten a thousand times and everything that was left from
									its origin would be the word "and" and the Little Blind Text should turn around and
									return to its own, safe country. A small river named Duden flows by their place and
									supplies it with the necessary regelialia. It is a paradisematic country, in which
									roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- booking section end -->

	<!-- chief section start -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Chef</span>
					<h2 class="mb-4">Our Master Chef</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url({{asset('frontend/images/chef-4.jpg')}});"></div>
						<div class="text px-4 pt-2">
							<h3>John Gustavo</h3>
							<span class="position mb-2">CEO, Co Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
							
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url({{asset('frontend/images/chef-2.jpg')}});"></div>
						<div class="text px-4 pt-2">
							<h3>Michelle Fraulen</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url({{asset('frontend/images/chef-3.jpg')}});"></div>
						<div class="text px-4 pt-2">
							<h3>Alfred Smith</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url({{asset('frontend/images/chef-1.jpg')}});"></div>
						<div class="text px-4 pt-2">
							<h3>Antonio Santibanez</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- chief section end -->


	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="index.html#booking" class="btn btn-white btn-outline-white">Book A Table Now</a>
				</div>
			</div>
		</div>
	</section>

	
	@include('frontend.include.footer')