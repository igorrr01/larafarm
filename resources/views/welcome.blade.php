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
    <div class="product-list-area box-layout default-padding bottom-less bg-gray text-center p-1" style="background-image: url(/public/assets/img/shape/16.png);">
        <div class="container">
            <div class="row">
                @if($productsBy)
                <div class="m-2">
                    <h3>Ми продаємо</h3>
                </div>
                <div class="product-list-box">
                    @foreach($productsSell as $productSell)
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="{{ route('product.show', $productSell->id) }}">
                            <img class="rounded" src="/storage/app/{{ $productSell->photo }}" alt="img" height="200">
                            <h5>{{ $productSell->name }}</h5>
                            <span class="text-muted fs-6 fw-light "><i>{{ mb_substr($productSell->description, 0, 100) }}...</i></span>
                        </a>
                        <span class="badge bg-light text-dark">{{ $productSell->price }} грн</span>
                        <span class="badge bg-dark">{{ $productSell->price_type }}</span>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
                @endif
                @if($productsSell)
                <div class="m-2">
                    <h3>Купуємо</h3>
                </div>
                <div class="product-list-box">
                    @foreach($productsBy as $productBy)
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="{{ route('product.show', $productBy->id) }}">
                            <img class="rounded" src="/storage/app/{{ $productBy->photo }}" alt="img" height="200">
                            <h5>{{ $productBy->name }}</h5>
                            <span class="text-muted fs-6 fw-light "><i>{{ mb_substr($productBy->description, 0, 100) }}...</i></span>
                        </a>
                        <span class="badge bg-light text-dark">{{ $productBy->price }} грн</span>
                        <span class="badge bg-dark">{{ $productBy->price_type }}</span>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Product Area -->

        <!-- Start Blog Area
    ============================================= -->

    @if(isset($posts))
    <div class="blog-area full-blog blog-grid default-padding bottom-less">
        <div class="container">
            <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-6 mb-30">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="{{ route('blog.show', $post->id) }}"><img src="/storage/app/{{ $post->photo }}" alt="img"></a>
                            <div class="date"><strong>{{ $post->created_at->format('d') }}</strong> <span>{{ App\Http\Controllers\Helper::intToMounthName($post->created_at->format('n')-1) }}, {{ $post->created_at->format('Y') }}</span></div>
                        </div>
                        <div class="info">
                            <h4 class="title">
                                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    @endif
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