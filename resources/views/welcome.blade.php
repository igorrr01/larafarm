@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <!-- Start Banner Area 
    ============================================= -->
    <div class="banner-area banner-style-two text-center navigation-custom-large zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-two">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(/public/assets/img/field2.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="content">
                                    <h2>ФГ <strong>Атюшівське</strong></h2>
                                    <p class="mb-2">
                                        {{ $settings->slider_1_text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="item">
                            <img src="/public/assets/img/shape/v1.png" alt="Image Not Found">
                        </div>
                        <div class="item">
                            <img src="/public/assets/img/shape/v2.png" alt="Image Not Found">
                        </div>
                        <div class="item">
                            <img src="/public/assets/img/shape/v3.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-two">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(/public/assets/img/field.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="content">
                                    <h2>ФГ <strong>Атюшівське</strong></h2>
                                    <p class="mb-2">
                                        {{ $settings->slider_1_text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-animation">
                        <div class="item">
                            <img src="/public/assets/img/shape/v1.png" alt="Image Not Found">
                        </div>
                        <div class="item">
                            <img src="/public/assets/img/shape/v2.png" alt="Image Not Found">
                        </div>
                        <div class="item">
                            <img src="/public/assets/img/shape/v3.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
            <!-- Pagination -->

        </div>        
    </div>
    <!-- End Main -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area bottom-less text-center default-padding-top">
        <div class="shape-leaf">
            <img src="/public/assets/img/shape/30.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Чим ми займаємось</h5>
                        <h2 class="title">Вирощуємо с/г культури, плодово-ягідні культури</h2>
                        <div class="devider"></div>
                        <p>
                            Тут якись текст 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-style-two-box relative">
                <div class="shape-box-right-top-animated">
                    <img src="/public/assets/img/shape/leaf-4.png" alt="Image not found">
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Product
    ============================================= -->
    <div class="product-list-area box-layout default-padding bottom-less bg-gray text-center" style="background-image: url(/public/assets/img/shape/16.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Тут можна якись там довідник Про культури</h5>
                        <h2 class="title">Смачні й органічні продукти</h2>
                        <div class="devider"></div>
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting <br> projection off. Connection stimulated estimating.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="product-list-box">
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/1.png" alt="Icon"></div>
                            <h5>Blueberry</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/7.png" alt="Icon"></div>
                            <h5>Fruit</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/2.png" alt="Icon"></div>
                            <h5>Strawberry</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/4.png" alt="Icon"></div>
                            <h5>Eggplant</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/5.png" alt="Icon"></div>
                            <h5>Orange</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="#">
                            <div class="thumb"><img src="/public/assets/img/icon/8.png" alt="Icon"></div>
                            <h5>Harvest</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

        <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area full-blog blog-grid default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="#"><img src="/public/assets/img/1500x890.png" alt="Image Not Found"></a>
                            <div class="date"><strong>18</strong> <span>Apr, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="#">Announcing if attachment resolution sentiments Possession ye no mr unaffected remarkably</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="#"><img src="/public/assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>15</strong> <span>Jul, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="#">Considered imprudence of he friendship day</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="#"><img src="/public/assets/img/800x1000.png" alt="Image Not Found"></a>
                            <div class="date"><strong>24</strong> <span>Feb, 22</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title">
                                <a href="#">Overcame breeding or concerns removing past</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area bg-gray default-padding" style="background-image: url(/public/assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">
                
                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Маєте питання?</h5>
                        <h2 class="heading">Відправте нам повідомлення</h2>
                        <form action="/public/assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Ім'я" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Поштова скринька*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Телефон" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Текст повідомлення *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Відправити
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Контактна 
                            <span>
                                Інформація
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Телефон</h5>
                                    <a href="">{{ $settings->phone }}</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Ми знаходимся</h5>
                                    <p>
                                        Чернігівська область, Коропський район
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Поштова скринька</h5>
                                    <a href="mailto:info@agrul.com.com">{{ $settings->email }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    </div>
</div>
@endsection