<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!--link rel="icon" href="#"-->

        <title>IZIVEND</title>

        <!-- Bootstrap core CSS -->
        <link href="{{  asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Custom styles for this template -->
        <link href="{{  asset('css/theme.min.css') }}" rel="stylesheet">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">
        
        <!-- Icons -->
        <link href="{{ asset('assets/fonts/icofont/icofont.min.css') }}" rel="stylesheet">
        
        
    </head>

    <body>
          <!-- 
        PRELOADER
        =============================================== -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="">
        </div>
        <!-- END: PRELOADER -->
        
        <!-- 
        NAVBAR
        =============================================== -->
        <nav class="navbar navbar-default">
            
            <div class="container">
               
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/main-brand.png" alt="" class="brand">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- Top panel / search / phone -->
                    <div class="top-panel">
                       
                        <div class="phone text-blue">
                            <i class="icofont icofont-phone-circle"></i>
                            +1 234 567 89 10
                        </div>
                        
                        <form class="search bg-grey-light btn-material">
                            <input type="text" class="search-form" id="top-search">
                            <label for="top-search">search</label>
                        </form>
                        
                        <div class="btn-cols">
                            
                            <ul class="list-btn-group">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        Sing up
                                    </a>
                                </li>
                                <li>
                                    <a href="register-page.html">
                                        <b>Sing in</b>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right info-panel">
                        
                        <!-- Profile -->
                        <li class="profile">
                            <span class="wrap">
                                
                                <!-- Image -->
                                <span class="image bg-white">
                                    
                                    <!-- New message badge -->
                                    <span class="badge bg-blue hidden-xs hidden-sm">5</span>
                                   
                                    <span class="icon">
                                        <i class="icofont icofont-user-alt-4 text-blue"></i>
                                    </span>

                                    <!--img src="images/profile/profile-img.jpg" alt=""-->
                                </span>
                                
                                <!-- Info -->
                                <span class="info">
                                    <!-- Name -->
                                    <span class="name text-uppercase">John Doe</span>
                                    <a href="#">edit profile</a>
                                </span>
                            </span>
                        </li>
                        
                        <!-- Cart -->
                        <li class="cart">
                            
                            <a href="#" class="cart-icon hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                
                                <span class="badge bg-blue">3</span>
                                
                                <i class="icofont icofont-cart-alt"></i>
                            </a>
                            
                            <a href="#" class="visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont icofont-cart-alt"></i>
                                Shopping cart
                            </a>
                            
                            <!-- Dropdown items list -->
                            <ul class="dropdown-menu">
                                
                                <!-- Item -->
                                <li>
                                    <div class="wrap">
                                        
                                        <!-- Image -->
                                        <div class="image">
                                            <img src="images/shop/img-01.jpg" alt="">
                                        </div>
                                        
                                        <!-- Caption -->
                                        <div class="caption">
                                            <span class="comp-header st-1 text-uppercase">
                                                T-SHIPT
                                                <span>
                                                    MEN COLLECTION
                                                </span>
                                                <span>
                                                    FAKE BRAND
                                                </span>
                                            </span>
                                           
                                            <span class="price">
                                                <span class="text-grey-dark">$</span>
                                                257 <small class="text-grey-dark">.00</small>
                                            </span>
                                        </div>
                                        
                                        <!-- Remove btn -->
                                        <span class="remove-btn bg-blue">
                                            <i class="icofont icofont-bucket"></i>
                                        </span>
                                    </div>
                                </li>
                                
                                <!-- Item -->
                                <li>
                                    <div class="wrap">
                                        
                                        <!-- Image -->
                                        <div class="image">
                                            <img src="images/shop/img-01.jpg" alt="">
                                        </div>
                                        
                                        <!-- Caption -->
                                        <div class="caption">
                                            <span class="comp-header st-1 text-uppercase">
                                                T-SHIPT
                                                <span>
                                                    MEN COLLECTION
                                                </span>
                                                <span>
                                                    FAKE BRAND
                                                </span>
                                            </span>
                                           
                                            <span class="price">
                                                <span class="text-grey-dark">$</span>
                                                257 <small class="text-grey-dark">.00</small>
                                            </span>
                                        </div>
                                        
                                        <!-- Remove btn -->
                                        <span class="remove-btn bg-blue">
                                            <i class="icofont icofont-bucket"></i>
                                        </span>
                                    </div>
                                </li>
                                
                                <!-- Item -->
                                <li>
                                    <div class="wrap">
                                        
                                        <!-- Image -->
                                        <div class="image">
                                            <img src="images/shop/img-01.jpg" alt="">
                                        </div>
                                        
                                        <!-- Caption -->
                                        <div class="caption">
                                            <span class="comp-header st-1 text-uppercase">
                                                T-SHIPT
                                                <span>
                                                    MEN COLLECTION
                                                </span>
                                                <span>
                                                    FAKE BRAND
                                                </span>
                                            </span>
                                           
                                            <span class="price">
                                                <span class="text-grey-dark">$</span>
                                                257 <small class="text-grey-dark">.00</small>
                                            </span>
                                        </div>
                                        
                                        <!-- Remove btn -->
                                        <span class="remove-btn bg-blue">
                                            <i class="icofont icofont-bucket"></i>
                                        </span>
                                    </div>
                                </li>
                                
                                           
                               <li class="more-btn sdw">
                                   <a href="card-page-step-1.html" class="btn-material btn-primary">
                                       View order <i class="icofont icofont-check-circled"></i>
                                   </a>
                               </li>
                                            
                                             
                            </ul>
                        </li>
                    </ul>
                
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.html">
                                home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                categories <i class="icofont icofont-curved-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Man line</a></li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Jewerly</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Clothes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">
                                new
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                pages <i class="icofont icofont-curved-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-list.html">Shop category</a></li>
                                <li><a href="shop-item.html">Shop item</a></li>
                                <li><a href="card-page-step-1.html">Shopping card. Step 1</a></li>
                                <li><a href="card-page-step-2.html">Shopping card. Step 2</a></li>
                                <li><a href="card-page-step-3.html">Shopping card. Step 3</a></li>
                                <li><a href="register-page.html">Register page</a></li>
                                <li><a href="blog-item.html">Item blog</a></li>
                            </ul>
                        </li>
                    </ul>
                
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            
        </nav>
        <!-- END: NAVBAR -->
            
        <!-- 
        SLIDESHOW
        =============================================== -->
        @yield('content')
        <!-- 
        FOOTER
        =============================================== -->
        <footer>            
            
            <div class="container-fluid bg-blue footer text-white">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-sm-6 col-md-3">
                               
                                <h3 class="header text-uppercase">
                                    Buyer information
                                </h3>
                                
                                <ul class="nav-vrt white opc none-padding">
                                    <li>
                                        <a href="#" class="btn-material">Support service</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Support service</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Affiliate program</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Technical proposals</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Service agreement</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">Buyers guide</a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn-material">How to Pay</a>
                                    </li>
                                </ul>
                                
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                               
                                <h3 class="header text-uppercase">
                                    Service
                                </h3>
                                
                                <ul class="nav-vrt white opc none-padding">
                                    <li>
                                        <a href="#" class="btn-material">About us</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="btn-material">Contact us</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="btn-material">My account</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="btn-material">Orders history</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="btn-material">Advanced search</a>
                                    </li>
                                </ul>
                                
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                               
                                        <h3 class="header text-uppercase">
                                            Our contacts
                                        </h3>
                                        
                                        <ul class="list-icon white ">
                                            <li>
                                                <i class="icon icofont icofont-location-pin"></i>
                                                12A Questen, Mt Vernon, NY 10550, US
                                            </li>
                                            <li>
                                                <a href="mailto:info@example.com">
                                                    <i class="icon icofont icofont-email"></i>
                                                    info@example.com
                                                </a>
                                            </li>
                                            <li>
                                                <i class="icon icofont icofont-phone-circle"></i>
                                                +1 (234) 567-89-10
                                            </li>
                                            <li>
                                                <i class="icon icofont icofont-clock-time"></i>
                                                Working Days/Hours:
                                                Mon - Sun / 9:00AM - 8:00PM
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="footer-brand">
                                            <img src="images/main-brand.png" alt="">
                                        </div>
                                        
                                        <span class="comp-header st-12 text-uppercase">
                                            Komotto
                                            <span>
                                                Bootstrap theme
                                            </span>
                                        </span>
                                        
                                        <p>
                                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <ul class="social ">
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-facebook"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-google-plus"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-twitter"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-vk"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-instagram"></i>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <i class="icofont icofont-social-youtube-play"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid copiright">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="copy">
                                    © 2016 Komotto by ThemeDron. All rights reserved.
                                </span>
                            </div>
                           
                            <div class="col-md-6 ">
                                
                                <ul class="vrt-icons text-yellow pull-right">
                                    <li>
                                        <i class="icofont icofont-paypal-alt"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-visa-alt"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-mastercard-alt"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-american-express-alt"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            .
        </footer>
        <!-- END: FOOTER -->
            
        <!-- 
        REGISTER MODAL
        =============================================== -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                   
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">
                                <i class="icofont icofont-close-line"></i>
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Authorization 
                            <span>
                                required
                            </span>
                        </h4>
                    </div>
                    
                    <div class="modal-body">

                        <!-- Authirize form -->
                        <div class="row auth-form">
                            <div class="col-md-4">

                                <!-- Nav -->
                                <div class="asside-nav no-bg">
                                    <ul class="nav-vrt border">
                                        <li class="active">
                                            <a href="#" class="btn-material">Privacy policy</a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn-material">Terms and conditions</a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn-material">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-5 col-md-offset-1 form-fields">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="checkbox padding">
                                        <input type="checkbox" id="inputCheckBox">
                                        <label for="inputCheckBox">
                                            <span class="checkbox-input">
                                            <span class="off">off</span>
                                            <span class="on">on</span>
                                            </span>
                                            remember password
                                        </label>
                                    </div>
                                    <span class="sdw-wrap">
                                        <button type="submit" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">Login</button>
                                        <span class="sdw"></span>
                                    </span>

                                    <ul class="addon-login-btn">
                                        <li>
                                            <a href="#">register</a>
                                        </li>
                                        <li>or</li>
                                        <li>
                                            <a href="#">restore password</a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- / Authirize form -->
                    </div>
                </div>
            </div>
        </div>

         <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{  asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{  asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{  asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL Carousel -->
        <script src="{{  asset('assets/js/lv-ripple.jquery.min.js') }}"></script><!-- BTN Material effects --> 
        <script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script><!-- SmoothScroll -->
        <script src="{{  asset('assets/js/jquery.TDPageEvents.min.js') }}"></script><!-- Page Events -->
        <script src="{{  asset('assets/js/jquery.TDParallax.min.js') }}"></script><!-- Parallax -->
        <script src="{{  asset('assets/js/jquery.TDTimer.min.js') }}"></script><!-- Timer -->
        <script src="{{  asset('assets/js/selectize.min.js') }}"></script><!-- Select customize -->
        <script src="{{  asset('js/main.min.js') }}"></script>
        <!-- END: REGISTER MODAL -->
    </body>
</html>