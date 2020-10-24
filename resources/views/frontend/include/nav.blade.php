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

    <div id="cartItem">
        

        


    </div>

    <script>
        window.onload = ()=> {
            show_cart_item()
        }
        


    </script>
    

    <div id="h-item">
        <div class="cart-total">
            <div class="row">
                <div class="col-md-6 col-6">
                    <p>Sub Total</p>
                </div>
                <div class="col-md-6 col-6">
                    <p class="text-right" id="total_cart_bal"></p>
                </div>
            </div>
        </div>
    
        <div class="go-checkout">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Checkout
            </button>
            
        </div>
    </div>

    <div id="s-item">
        <img src="{{ asset('frontend/images/empty_cart.png') }}" alt="">
    </div>

</div>
<!-- cart list end -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Customer Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
        </div>
        <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label>Customer Name</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Customer Email</label>
                <input type="email" required class="form-control" >
            </div>
            <div class="form-group">
                <label>Customer Phone</label>
                <input type="text" required class="form-control" >
            </div>
            <div class="form-group">
                <label>Customer Address</label>
                <textarea name=""  rows="2" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="place-order">Place Order</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>