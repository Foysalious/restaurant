<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="{{asset('frontend/images/logo.png')}}" width="100px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('menu')}}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Reservation</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item main-cart" style="position: relative;">
                    <i class="fas fa-shopping-cart" style="color: #987B4E;"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<!-- cart list start -->
<div class="cart-list">

    <div class="close-cart">
        <i class="fas fa-times"></i>
    </div>

    <div class="cart-item">
        <div class="row">
            <div class="col-md-8 col-8">
                <img src="images/dessert-1.jpg" width="32px" alt="">
                <p class="color-gold">Desert Item </p>
            </div>
            <div class="col-md-4 col-4 text-right cart-right">
                <p class="color-gold">USD 500</p>
                <i class="fas fa-trash"></i>
            </div>
        </div>
    </div>

    <div class="cart-item">
        <div class="row">
            <div class="col-md-8 col-8">
                <img src="images/dessert-1.jpg" width="32px" alt="">
                <p class="color-gold">Desert Item </p>
            </div>
            <div class="col-md-4 col-4 text-right cart-right">
                <p class="color-gold">USD 500</p>
                <i class="fas fa-trash"></i>
            </div>
        </div>
    </div>

    <div class="cart-total">
        <div class="row">
            <div class="col-md-6 col-6">
                <p>Sub Total</p>
            </div>
            <div class="col-md-6 col-6">
                <p class="text-right">1400 USD</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-6">
                <p>Delivery Charge</p>
            </div>
            <div class="col-md-6 col-6">
                <p class="text-right">10 USD</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-6">
                <p>Total</p>
            </div>
            <div class="col-md-6 col-6">
                <p class="text-right">1410 USD</p>
            </div>
        </div>
    </div>

    <div class="go-checkout">
        <a href="">Checkout</a>
    </div>

</div>
<!-- cart list end -->