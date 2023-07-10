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
    <div class="top-bar top-style-one text-light" style="background-color:#0f1145;">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-4 col-lg-4 col-md-4 info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <span>Телефон</span>
                                <a href="tel:+4733378901">{{ $settings->phone }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 logo">
                    <a href="#"><img src="/public/build/agro/img/logo-header.png" alt="Logo"></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 text-end info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-comments-alt-dollar"></i>
                            </div>
                            <div class="content">
                                <span>Email</span>
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
                    <a class="navbar-brand" href="index.html"><img src="/public/build/agro/img/logo-header.png" class="logo" alt="Logo"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Головна</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Новини</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Про нас</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Контакти</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
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
    <footer class="bg-dark text-light" >
    <div class="container">
    <!-- Start Footer Bottom -->
    <div class="row m-1">
        <div class="col-lg-6">
            <p>&copy; 2023. Developed by I.O. </p>
        </div>
        <div class="col-lg-6 text-end">
            <ul style="display: flex; list-style: none; justify-content: flex-end;">
                <li style="margin-right: 10px;">
                    <a href="#" style="display: inline;">Правила</a>
                </li>
                <li style="margin-right: 10px;">
                    <a href="#" style="display: inline;">Політика</a>
                </li>
                <li>
                    <a href="#" style="display: inline;">Підтримка</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Footer Bottom -->
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
<script src="/public/build/agro/js/main.js"></script>

</html>