<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CV - Coffee Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <!-- More css customer -->
    <link href="{{asset('css/topHeader.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Top header -->
    <div class="top-header">
        <div class="container-fluid">
            @if(check_auth())
            <a href="/shop-cart"><i class="fas fa-shopping-cart"> Shopping Cart</i></a>
            <!-- <a href="#"><i class="fa fa-user"> Account</i></a> -->
            <a href="/signout" class="btn btn-info rounded-pill">LOGOUT</a>
            @else
            <a href="" data-toggle="modal" class="btn btn-info rounded-pill" data-target="#exampleModal">Login</a>
            @endif
        </div>
    </div>
    <!-- Modal Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('logins')}}" method="POST">
                        @csrf
                        @if (session('success'))
                        <div class="alert alert-danger">
                            {{ session('success') }}
                        </div>
                        @endif
                        <!-- Email input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Email</label>
                            <input type="mail" name="user_email" class="form-control bg-transparent border-primary p-4" placeholder="Email" required="required" />
                        </div>
                        <!-- Password input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Password</label>
                            <input type="password" name="password" class="form-control bg-transparent border-primary p-4" placeholder="Password" required="required" />
                        </div>
                        <!-- 2 column grid layout for inline styling -->
                        <!-- <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
                            <div class="col">
                                <a href="">Forgot password?</a>
                            </div>
                        </div> -->
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal1">Register</a></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal REGISTER-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REGISTER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('customerRegister') }}" method="POST">
                        @csrf
                        @if (session('success'))
                        <div class="alert alert-danger">
                            {{ session('success') }}
                        </div>
                        @endif
                        <!-- Name input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Name</label>
                            <input type="text" class="form-control bg-transparent border-primary p-4" name="user_name" placeholder="Name" required="required" />
                            @if ($errors->has('user_name'))
                            <span class="text-danger">{{ $errors->first('user_name') }}</span>
                            @endif
                        </div>
                        <!-- Email input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Email</label>
                            <input type="mail" class="form-control bg-transparent border-primary p-4" name="user_email" placeholder="Email" required="required" />
                            @if ($errors->has('user_email'))
                            <span class="text-danger">{{ $errors->first('user_email') }}</span>
                            @endif
                        </div>
                        <!-- Password input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Password</label>
                            <input type="password" class="form-control bg-transparent border-primary p-4 user_password" name="password" placeholder="Password" required="required" />
                            @if ($errors->has('user_password'))
                            <span class="text-danger">{{ $errors->first('user_password') }}</span>
                            @endif
                        </div>
                        <!-- RePassword input -->
                        <div class="form-group">
                            <label class="form-label" for="form2Example2">Repassword</label>
                            <input type="password" class="form-control bg-transparent border-primary p-4" name="user_repassword" placeholder="Repassword" required="required" />
                            <span class="text-danger repass-result"></span>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4 btn_register" disabled>Sign in</button>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>You are member? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal">Login</a></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="/" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">CV</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{ route('index') }}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                    <a href="{{ route('shop') }}" class="nav-item nav-link {{ (request()->is('shop')) ? 'active' : '' }}">Shop</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Service</a>
                    <a href="{{ route('menu') }}" class="nav-item nav-link {{ (request()->is('menu')) ? 'active' : '' }}">Menu</a>

                    <!-- <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="nav-item dropdown-item">Reservation</a>
                            <a href="/testimonial" class="nav-item dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a> -->

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    @yield('content')
    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
            <p class="m-0 text-white">Edited by <a class="font-weight-bold" href="https://www.facebook.com/profile.php?id=100030007710928">Hiroe</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>


    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- More Javascript -->
    <!-- <script src="{{asset('js/navbar.js')}}"></script> -->
    <script src="{{asset('js/search-ajax.js')}}"></script>
    <script src="{{asset('js/check-password.js')}}"></script>

</body>

</html>