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

	@foreach(App\Models\category::orderBy('id','asc')->get() as $category) 
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>

				<h2 class="mb-4">{{$category->name}}</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12">
					<div class="row menu-wrap">

						@foreach(App\Models\menu::orderBy('id','asc')->where('category_id',$category->id)->get() as $menu) 
						<div class="col-md-6 col-12 menus d-flex ftco-animate">
							@if ($menu->image==NULL)
							<div class="menu-img img" style="background-image: url({{asset('images/menu/test.jpeg')}});">
	
							@else
							<div class="menu-img img" style="background-image: url({{asset('images/menu/'.$menu->image)}});">
							@endif	
							</div>
							<div class="food-detail text ">
								<div class="add_to_cart "data-id="{{ $menu->id }}" >
									<button>
										<i class="fas fa-plus" data-id="{{ $menu->id }}"></i>
									</button>	
								</div>
								<div class="d-flex">
									<div class="one-half">
										<h3>{{$menu->name}}</h3>
									</div>
									<div class="one-forth">
									<span class="price">${{$menu->price}}</span>
									</div>
								</div>
								<p>{{$menu->description}}</p>
							</div>
						</div>
						<!-- menu item end -->

						@endforeach
						

						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>

			</div>
		</div>

	</section>
	@endforeach


	@include('frontend.include.footer')