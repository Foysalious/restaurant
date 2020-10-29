<!-- body content start -->
<div class="body-content">


    <!-- left sidebar pc start -->
    <section class="left-sidebar">
        <div class="container-fluid">
        
            <!-- top part start -->
            <div class="row top-part">

                <!-- middle part start -->
                <div class="col-md-9 col-9">
                    <h3></h3>
                   
                    <p>Super Admin</p>
                    
                </div>
                <!-- middle part end -->

                <!-- right part start -->
                <div class="col-md-3 col-3">
                    <img src="images/badge.png" class="img-fluid" alt="">
                </div>
                <!-- right part end -->

            </div>
            <!-- top part end -->

            <!-- navbar item start -->
            <div class="row nav-item">
                <div class="col-md-12">
                    <ul>

                        <!-- nav single view start -->
                        <li >
                            <a href="{{ route('backend_dashboard') }}">
                            <div class="left">
                                    dashboard
                            </div>
                            <div class="right">
                                    <i class="fas fa-home"></i>
                            </div>
                            </a>
                        </li>
                        <!-- nav single view end -->

                          <!-- nav single view start -->
                          <li >
                            <a href="{{route('hoursShow')}}">
                            <div class="left">
                                    hours
                            </div>
                            <div class="right">
                                    <i class="fas fa-clock"></i>
                            </div>
                            </a>
                        </li>
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                        <a href="{{route('logoShow')}}">
                            <div class="left">
                                logo
                            </div>
                            <div class="right">
                                <i class="fas fa-bars"></i>
                            </div>
                            </a>
                        </li>
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('sliderShow')}}">
                            <div class="left">
                                Home Page Slider
                            </div>
                            <div class="right">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            </a>
                        </li>

                        <!-- nav single view start -->

                         <!-- nav single view start -->
                         <li >
                            <a href="{{route('aboutShow')}}">
                            <div class="left">
                                About US
                            </div>
                            <div class="right">
                                <i class="fas fa-address-card"></i>
                            </div>
                            </a>
                        </li>

                        <!-- nav single view start -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('chefShow')}}">
                            <div class="left">
                               Chef
                            </div>
                            <div class="right">
                                <i class="fas fa-chess-king"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('galleryShow')}}">
                            <div class="left">
                               Gallery
                            </div>
                            <div class="right">
                                <i class="fab fa-envira"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('categoryShow')}}">
                            <div class="left">
                               Category
                            </div>
                            <div class="right">
                                <i class="fas fa-bars"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('menuShow')}}">
                            <div class="left">
                               Menu
                            </div>
                            <div class="right">
                                <i class="fas fa-bars"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('contactShow')}}">
                            <div class="left">
                               Contact Info
                            </div>
                            <div class="right">
                                <i class="fas fa-id-card"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                        <!-- nav single view end -->

                        <!-- nav single view start -->
                        <li >
                            <a href="{{route('reservationShow')}}">
                            <div class="left">
                               reservation Info
                            </div>
                            <div class="right">
                                <i class="fas fa-bars"></i>
                            </div>
                            </a>
                        </li>

                        
                       
                       
                        <!-- nav drop down view start -->
                        <li>
                            <div class="row navbar-dropdown-top" id="2">
                            <div class="col-md-10  col-10">
                                selling history           
                            </div>    
                            <div class="col-md-2 col-2 text-right">
                                <i class="fas fa-angle-down"></i>                            
                            </div>                      
                            </div>
                            <div class="row navbar-dropdown-child 2">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <a href="{{ route('pending.show') }}">
                                            <i class="fas fa-history" style="margin-right: 5px"></i>
                                            Pending Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('confirmed.show') }}">
                                            <i class="fas fa-check" style="margin-right: 5px"></i>
                                            confirmed Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('delivered.show') }}">
                                            <i class="fas fa-truck-loading" style="margin-right: 5px"></i>
                                            delivered Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cancel.show') }}">
                                            <i class="fas fa-window-close" style="margin-right: 5px"></i>
                                            cancelled Order
                                        </a>
                                    </li>
                                </ul>                  
                            </div>                        
                            </div>
                        </li>
                        <!-- nav drop down view end -->
                        
                        
                    </ul>
                </div>
            </div>
            <!-- navbar item end -->

        </div>
    </section>
    <!-- left sidebar pc end -->