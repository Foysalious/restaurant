<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Admin Template</title>

	<!-- Favicon -->
	<link type="image/gif" rel="shortcut icon" href="images/fav.png">

	<!-- fonts file -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- data table css start -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

	<!-- font awesome file 4.7.0 css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.min.css') }}"> 

	<!--- Font Awesome CSS 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 

	<!-- main bootstrap file -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}"> 

	<!-- the main css file -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}"> 

	<!-- responsive css file -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/responsive.css') }}"> 

</head>

<!-- login section start -->
<section class="auth">
    <div class="container">
        <div class="row auth-row">
            
            <div class="auth-box">
                <div class="auth-form">

                    <!-- logo start -->
                    <div class="auth-logo">
                        <img src="{{ asset('frontend/images/logo.png') }}" class="img-fluid" alt="">
                    </div>
                    <!-- logo end -->

                    <!-- form start -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn">Login</button>
                        </div>
                        
                    </form>
                    <!-- form end -->

                    <!-- card start -->
                    <div class="auth-card">
                        <!-- <a href="forgetPassword.php">Lost Your Password?</a> -->
                        <a href="{{ route('register') }}">Not yet registered? Go to register page</a>
                    </div>
                    <!-- card end -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- login section end -->



</div>
<!-- body content end -->



	<!-- jquery lib file -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- jqeury ui js -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- the main bootstrap file -->
	<script type="text/javascript" src="{{ asset('backend/js/bootstrap.min.js') }}" ></script>

	<!-- data table js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	
	<!-- the main js file -->
	<script type="text/javascript" src="{{ asset('backend/js/main.js') }}" ></script>


</body>
</html>

