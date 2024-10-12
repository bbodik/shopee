<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" href={{asset("img/shop-img/favicon.ico")}}>
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="{{route('search')}}" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src={{ asset('img/shop-img/search.png')}} alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrapper d-flex clearfix">
    <div class="mobile-nav">
        <div class="amado-navbar-brand">
            <a href="{{route('home')}}">
                <img src={{ asset('img/shop-img/logo.png')}} alt=""></a>
        </div>
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <header class="header-area clearfix">
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="logo">
            <a href="{{route('home')}}"><img src={{ asset('img/shop-img/logo.png')}} alt=""></a>
        </div>
        <nav class="amado-nav">
            <ul>
                <?php $current_action = substr(Route::currentRouteAction(), (strpos(Route::currentRouteAction(), '@') + 1)) ?>
                <li @if($current_action=='index')class="active"@endif><a href="{{route('home')}}">Home</a></li>
                <li @if($current_action=='shop')class="active"@endif><a
                        href="{{route('shop', ['category_name'=>"Chairs"])}}">Shop</a></li>
                <li @if($current_action=='cart')class="active"@endif><a href="{{route('cart')}}">Cart</a></li>
                <li @if($current_action=='checkout')class="active"@endif><a href="{{route('checkout')}}">Checkout</a>
                </li>
                <li @if($current_action=='login')class="active"@endif><a href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </nav>
        <div class="cart-fav-search mb-100">
            <a href="{{route('cart')}}" class="cart-nav"><img src={{ asset('img/shop-img/cart.png')}} alt=""> Cart</a>
            <a href="{{route('get_wishes')}}" class="fav-nav"><img src={{ asset('img/shop-img/favorites.png')}} alt="">
                Wishes</a>
            <a href="#" class="search-nav"><img src={{ asset('img/shop-img/search.png')}} alt=""> Search</a>
        </div>
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    @yield('main')
</div>
<section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Subscribe for a <span>25% Discount</span></h2>
                    <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur.
                        Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="#" method="post">
                        <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <div class="footer-logo mr-50">
                        <a href="{{route('home')}}"><img src="{{ asset('img/shop-img/logo2.png')}}" alt=""></a>
                    </div>
                    <p class="copywrite">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <?php $current_action = substr(Route::currentRouteAction(), (strpos(Route::currentRouteAction(), '@') + 1)) ?>
                                    <li class="nav-item @if($current_action=='index') active @endif "><a
                                            class="nav-link"
                                            href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item @if($current_action=='shop') active @endif "><a
                                            class="nav-link"
                                            href="{{route('shop', ['category_name'=>"Chairs"])}}">Shop</a></li>

                                    <li class="nav-item @if($current_action=='cart') active @endif ">
                                        <a class="nav-link"
                                           href="{{route('cart')}}">Cart</a>
                                    </li>
                                    <li class="nav-item @if($current_action=='checkout') active @endif "><a
                                            class="nav-link" href="{{route('checkout')}}">Checkout</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}" defer></script>
<script src="{{ asset('js/popper.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/plugins.js') }}" defer></script>
<script src="{{ asset('js/active.js') }}" defer></script>
</html>
