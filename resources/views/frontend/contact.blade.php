

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



@include('frontend.include.footer')