<footer class="ftco-footer ftco-no-pb ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                <a href="{{ route('index') }}">
                        @foreach(App\Models\Logo::orderBy('id','desc')->get() as $logo) 
        
                        <img src="{{asset('images/Logo/'.$logo->logo)}}" width="100px" alt="">
            
                        @endforeach
                    </a>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        @foreach(App\Models\contact::orderBy('id','desc')->get() as $contact) 
                    <li class="ftco-animate"><a href="{{$contact->twitter}}"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="{{$contact->facebook}}"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{$contact->instagram}}"><span class="fa fa-instagram"></span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Open Hours</h2>
                    <ul class="list-unstyled open-hours">
                        @foreach(App\Models\hours::orderBy('id','desc')->get() as $hour) 
                        <li class="d-flex"><span>{{$hour->day}}</span><span>{{$hour->time}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid px-0 bg-primary py-3">
        <div class="row no-gutters">
            <div class="col-md-12 text-center">

                <p class="mb-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template
                    is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://ssttechbd.com/" target="_blank">SST Tech Ltd</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

 
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('frontend/js/jquery.timepicker.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://sstmarinebd.com/Frontend/js/fencybox-2.min.js"></script>
<script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend/js/google-map.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>