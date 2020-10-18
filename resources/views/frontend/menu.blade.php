@include('frontend.include.header')
@include('frontend.include.topbar')
@include('frontend.include.nav')


	
	<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/jalfrazi.jpeg')}});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Menu</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12">
					<div class="row menu-wrap">

						<!-- menu item start -->
						<div class="col-md-6 col-12 menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url({{asset('frontend/images/breakfast-1.jpg')}});">
								
							</div>
							<div class="food-detail text">
								<div class="add_to_cart">
									<i class="fas fa-plus"></i>
								</div>
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<!-- menu item end -->

						<!-- menu item start -->
						<div class="col-md-6 col-12 menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url({{asset('frontend/images/breakfast-2.jpg')}});"></div>
							<div class="food-detail text">
								<div class="add_to_cart">
									<i class="fas fa-plus"></i>
								</div>
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<!-- menu item end -->

						<!-- menu item start -->
						<div class="col-md-6 col-12 menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url({{asset('frontend/images/breakfast-1.jpg')}});">
								
							</div>
							<div class="food-detail text">
								<div class="add_to_cart">
									<i class="fas fa-plus"></i>
								</div>
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<!-- menu item end -->

						<!-- menu item start -->
						<div class="col-md-6 col-12 menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url({{asset('frontend/images/breakfast-2.jpg')}});"></div>
							<div class="food-detail text">
								<div class="add_to_cart">
									<i class="fas fa-plus"></i>
								</div>
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<!-- menu item end -->
						

						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>

			</div>
		</div>

	</section>



	@include('frontend.include.footer')