
@include('frontend.include.header')
@include('frontend.include.topbar')
@include('frontend.include.nav')


<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/jalfrazi.jpeg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Gallery</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>


<!-- main gallery section start -->
<section class="main-gallery">
    <div class="container">
        <div class="row ">

            <div class="col-md-12 gallery-row">

                @foreach(App\Models\gallery::orderBy('id','desc')->get() as $gallery) 
                <!-- gallery item start -->
                <div class="gallery-item">
                    <img src="{{asset('images/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                    <div class="gallery-hover">
                        <a data-fancybox="gallery" href="{{asset('images/gallery/'.$gallery->image)}}">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                @endforeach
                <!-- gallery item end -->

               

            </div>

        </div>
    </div>
</section>
<!-- main gallery section end -->



@include('frontend.include.footer')