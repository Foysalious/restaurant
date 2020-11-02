<!-- topbar start -->
<div class="wrap">
    <div class="container">
        @foreach(App\Models\contact::orderBy('id','desc')->get() as $contact) 
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                        
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="{{$contact->facebook}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="{{$contact->twitter}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="{{$contact->instagram}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- topbar end -->