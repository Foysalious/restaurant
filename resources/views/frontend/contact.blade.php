

@include('frontend.include.header')
@include('frontend.include.topbar')
@include('frontend.include.nav')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('frontend/images/dinner-2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Contact us</h1>
      <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>
@foreach(App\Models\contact::orderBy('id','desc')->get() as $contact) 
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-12">
        <h2 class="h4 font-weight-bold">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 ">
        <div class="contact-box">
        <p><span>Address:</span> {!!$contact->address!!}</p>
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="contact-box">
        <p><span>Tel:</span> <a href="tel://1234567920">{!!$contact->phone!!}</a></p>
         
        </div>
      </div>
      <div class="col-md-3 ">
        <div class="contact-box">
        <span>Email:</span>{!!$contact->email!!} <a href="{{$contact->email}}"></a>
        </div>


      </div>
      <div class="col-md-3">
        <div class="contact-box">
          <p><span>Website</span> <a href="#">http://www.memsaabislington.co.uk/</a></p>
        </div>

      </div>
    </div>
  </div>
</section>
@endforeach
<section class="ftco-section ftco-no-pt contact-section">
  <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
      <div class="col-md-6 p-5 order-md-last">
        <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
        <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>


@include('frontend.include.footer')