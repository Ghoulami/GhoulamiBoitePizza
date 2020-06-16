<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Restaurant & Pizza</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Domnoo/css/fav2.ico" type="image/x-icon">
    <link rel="icon" href="../Domnoo/css/fav2.ico" type="image/x-icon">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="../Domnoo/css/bootstrap.min.css">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="../Domnoo/css/style.css">
    <!-- color stylesheet -->
    <link rel="stylesheet" href="../Domnoo/css/colors.css" id="ui-theme-color">
    <!-- responsive css -->
    <link rel="stylesheet" href="../Domnoo/css/responsive.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('extra-css')
    @yield('extra-script')
</head>

<body>
    <div class="loader_wrapper ">
        <div class="loader">
            <img src="../Domnoo/images/loader.gif" alt="" class="img-fluid">
        </div>
    </div>
    <!--// loader_wrapper -->
    <div id="wrapper">
	<header class="new-block main-header">
            <div class="main-nav new-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="logo">
                                <a href="{{route('accueil')}}"><img src="../Domnoo/images/logo.png" alt="logo" height="90px" class="img-responsive"></a>
                            </div>

                            <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                            <nav class="nav">
                                <ul class="list-unstyled">
                                    <li class="drop"><a href="{{route('accueil')}}">Accueil</a></li>
                                    <li class="drop {{Request::path() === 'order' ? 'active': ''}} "><a href="{{route('order')}}">Demande</a></li>
                                    <li class="drop"><a href="{{route('menu')}}">Menu</a></li>
                                    <li><a href="{{route('about')}}">À propos</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Se connecter</li>
                                    @else
                                    <li class="drop"><a href="#">{{ Auth::user()->nom }}</a>
                                        <ul class="drop-down">
                                            <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endguest
                                </ul>
                            </nav>
                            <div class="nav-right-block">
                                <ul class="list-unstyled">
                                    @if (Request::session()->get('cart'))
                                        <li><a href="{{route('Shopping_cart')}}"><i class="flaticon-scooter-front-view"></i><span class="nav-price">{{ Request::session()->get('cart')->totalPrice}} MAD</span></a></li>
                                    @else
                                        <li><a href="{{route('Shopping_cart')}}"><i class="flaticon-scooter-front-view"></i><span class="nav-price">0.0 MAD</span></a></li>
                                    @endif
                                </ul>
                            </div><!-- nav-login -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="main-footer new-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="footer-head">
                            <h3>À propos de nous :</h3>
                        </div>
                        <div class="footer-content">
                            <p>Donec tincidunt, augue a convallis cursus, sapien eros efficitur sem in placerat sapien est nec quam.</p>
                            <a href="#" class="link">Lire la suite</a>
                            <ul class="list-unstyled card-block">
                                <li><a href="#"><img src="../Domnoo/images/crt1.png" alt=""></a></li>
                                <li><a href="#"><img src="../Domnoo/images/crt2.png" alt=""></a></li>
                                <li><a href="#"><img src="../Domnoo/images/crt3.png" alt=""></a></li>
                                <li><a href="#"><img src="../Domnoo/images/crt4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="our-company">
                            <div class="footer-head">
                                <h3>Notre compagnie :</h3>
                            </div>
                            <div class="footer-content">
                                <ul class="list-unstyled">
                                    <li><a href="#">Notre compagnie :</a></li>
                                    <li><a href="#">Pizza murgon</a></li>
                                    <li><a href="#">Burger king</a></li>
                                    <li><a href="#">Fried Chicken</a></li>
                                    <li><a href="#">Mocktail</a></li>
                                    <li><a href="#">Top Brands</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-head">
                            <h3>Service client :</h3>
                        </div>
                        <div class="footer-content">
                            <ul class="list-unstyled">
                                <li><a href="#">Notre compagnie :</a></li>
                                <li><a href="#">Pizza murgon</a></li>
                                <li><a href="#">Burger king</a></li>
                                <li><a href="#">Fried Chicken</a></li>
                                <li><a href="#">Mocktail</a></li>
                                <li><a href="#">Top Brands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="flickr">
                            <div class="footer-head">
                                <h3>Get Flickr :</h3>
                            </div>
                            <div class="footer-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="../Domnoo/images/Layer-12.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-13.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-14.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-15.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-16.png" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-17.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-18.jpg" alt="" class="img-responsive"></a></li>
                                    <li><a href="#"><img src="../Domnoo/images/Layer-19.jpg" alt="" class="img-responsive"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copy-right">
            <div class="container">
                <ul class="social-nav">
                    <li><a href="#"><i class="flaticon-facebook-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-behance"></i></a></li>
                </ul>
            </div>
        </div>
        
        <span id="go_to_top" class="go-to-top"><i class="flaticon-up-arrow"></i></span>
    </div><!-- #wrapper -->

    <!-- include jQuery -->
    <script src="../Domnoo/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="../Domnoo/js/bootstrap.min.html"></script>
    <!-- bootstrap -->
    <script src="../Domnoo/js/owl.carousel.min.js"></script>
    <!-- slick slider  -->
    <script src="../Domnoo/js/slick.js"></script>
    <!-- dscountdown  -->
    <script src="../Domnoo/js/dscountdown.min.js"></script>
    <!-- jquery.nice-select -->
    <script src="../Domnoo/js/jquery.nice-select.js"></script>
    <!-- magnific-popup -->
    <script src="../Domnoo/js/jquery.magnific-popup.min.js"></script>
    <!-- Mixitup -->
    <script src="../Domnoo/js/mixitup.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script>
    <script src="../Domnoo/js/map.js"></script>
    <!-- custom js -->
    <script src="../Domnoo/js/custom.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    
    @yield('extra-js')
</body>


</html> 