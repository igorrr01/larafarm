<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="/public/build/agro/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/build/agro/css/font-awesome.min.css" rel="stylesheet">
    <link href="/public/build/agro/css/themify-icons.css" rel="stylesheet">
    <link href="/public/build/agro/css/elegant-icons.css" rel="stylesheet">
    <link href="/public/build/agro/css/flaticon-set.css" rel="stylesheet">
    <link href="/public/build/agro/css/magnific-popup.css" rel="stylesheet">
    <link href="/public/build/agro/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/public/build/agro/css/animate.csss" rel="stylesheet">
    <link href="/public/build/agro/css/validnavs.css" rel="stylesheet">
    <link href="/public/build/agro/css/helper.css" rel="stylesheet">
    <link href="/public/build/agro/css/style.css" rel="stylesheet">
    <link href="/public/build/agro/css/unit-test.css" rel="stylesheet">
    <link href="/public/build/agro/style.css" rel="stylesheet">

    <!-- Scripts -->
    <!--     @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

</head>

<body>

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar top-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-4 col-lg-4 col-md-4 info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <span>Call Anytime</span>
                                <a href="tel:+4733378901">{{ $settings->phone }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 logo">
                    <a href="#"><img src="assets/img/logo-mix.png" alt="Logo"></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 text-end info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-comments-alt-dollar"></i>
                            </div>
                            <div class="content">
                                <span>Write Email</span>
                                <a href="mailto:info@agrul.com">{{ $settings->email }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->
    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav less-logo navbar-common navbar-default validnavs navbar-sticky">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container d-flex justify-content-between align-items-center">            
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="logo" alt="Logo"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Agriculture</a></li>
                                <li><a href="index-3.html">Farm Shop</a></li>
                                <li><a href="index-2.html">Organic Farm</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="project.html" class="dropdown-toggle" data-toggle="dropdown" >Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services Version One</a></li>
                                <li><a href="services-2.html">Services Version Two</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shop-single-thumb-only.html">Shop Single Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="opening-hours">
                                <div class="call">
                                    <div class="info">
                                        <p>Opening hours</p>
                                        <h5>Sun - Fri 9:30 - 17:00</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                </div>

            </div>  

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

        <main class="py-4">
            @yield('content')
        </main>
</body>

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url(assets/img/shape/brush-down.png);">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Happen active county. Winding morning ambition shyness evident to poor. Because elderly new to the point to main success.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> Go</button>  
                            </form>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-2 col-md-6 item">
                        <div class="footer-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="#">News & Media</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Volunteers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item recent-post">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 Sep, 2022</span>
                                        </div>
                                        <h5><a href="#">Meant widow equal an share least part. </a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">18 Jul, 2022</span>
                                        </div>
                                        <h5><a href="#">Future Plan & Strategy for Consutruction </a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        5919 Trussville Crossings Pkwy, Birmingham
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:2151234567">+123 34598768</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Itme -->
                    
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2022. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
        <div class="shape-right-bottom">
            <img src="assets/img/shape/10.png" alt="Image Not Found">
        </div>
        <div class="shape-left-bottom">
            <img src="assets/img/shape/11.png" alt="Image Not Found">
        </div>
    </footer>
    <!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<script src="/public/build/agro/js/jquery-3.6.0.min.js"></script>
<script src="/public/build/agro/js/bootstrap.bundle.min.js"></script>
<script src="/public/build/agro/js/jquery.appear.js"></script>
<script src="/public/build/agro/js/jquery.easing.min.js"></script>
<script src="/public/build/agro/js/jquery.magnific-popup.min.js"></script>
<script src="/public/build/agro/js/modernizr.custom.13711.js"></script>
<script src="/public/build/agro/js/swiper-bundle.min.js"></script>
<script src="/public/build/agro/js/wow.min.js"></script>
<script src="/public/build/agro/js/progress-bar.min.js"></script>
<script src="/public/build/agro/js/circle-progress.js"></script>
<script src="/public/build/agro/js/isotope.pkgd.min.js"></script>
<script src="/public/build/agro/js/imagesloaded.pkgd.min.js"></script>
<script src="/public/build/agro/js/jquery.nice-select.min.js"></script>
<script src="/public/build/agro/js/count-to.js"></script>
<script src="/public/build/agro/js/jquery.scrolla.min.js"></script>
<script src="/public/build/agro/js/YTPlayer.min.js"></script>
<script src="/public/build/agro/js/TweenMax.min.js"></script>
<script src="/public/build/agro/js/validnavs.js"></script>
<script src="/public/build/agro/js/custom.js"></script>

</html>