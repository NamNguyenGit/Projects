<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bra | Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/style.css" type="text/css">
</head>

<body>

    <!-- Mobile Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="/frontend/img/icon/search.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="{{route('cart.index')}}"><img src="/frontend/img/icon/cart.png" alt=""> <span>{{$cart->total_qtt}}</span></a>
                <div class="cart__price">Cart: <span>{{number_format($cart->total_price)}} VND</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="{{route('client.index')}}"><img src="/frontend/img/logo/logo.png" alt="" width="100px"></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            @if(auth()->guard('customer')->check())
            <ul>
                <li><a href="{{route('info.index')}}">{{auth()->guard('customer')->user()->name}}</a> <span class="arrow_carrot-down"></span></li>
                <li><a href="{{route('client.logout')}}">Log out</a></li>
            </ul>
            @else
            <ul>
                <li><a href="{{route('client.login')}}">Sign in / Register</a> <span class="arrow_carrot-down"></span></li>
            </ul>
            @endif
        </div>
    </div>
    <!-- Mobile Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                @if(auth()->guard('customer')->check())
                                <ul>
                                    <li><a href="{{route('info.index')}}">{{auth()->guard('customer')->user()->name}}</a> <span class="arrow_carrot-down"></span></li>
                                    <li><a href="{{route('client.logout')}}">Log out</a></li>
                                </ul>
                                @else
                                <ul>
                                    <li><a href="{{route('client.login')}}">Sign in / Register</a> <span class="arrow_carrot-down"></span></li>
                                </ul>
                                @endif
                            </div>
                            <div class="header__logo">
                                <a href="{{route('client.index')}}">
                                    <img src="/frontend/img/logo/logo.png" alt="" width="160px" height="70px">
                                </a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="/frontend/img/icon/search.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="{{route('cart.index')}}"><img src="/frontend/img/icon/cart.png" alt=""> <span>{{$cart->total_qtt}}</span></a>
                                    <div class="cart__price">Cart: <span>{{number_format($cart->total_price)}} VND</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{route('client.index')}}">Home</a></li>
                            <li><a href="{{route('client.shop')}}">Shop</a>
                                {{-- <ul class="dropdown">
                                        <li><a href="">Color</a></li>
                                        <li><a href="">Size</a></li>
                                    </ul> --}}
                            </li>
                            <li><a href="{{route('client.shop')}}">Sale off</a></li>
                            <li><a href="{{route('client.shop')}}">Gallery</a></li>
                            <li><a href="{{route('client.about')}}">About</a></li>
                            <li><a href="{{route('client.contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="/frontend/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{route('client.index')}}"><img src="/frontend/img/logo/logo.png" alt="" width="100px"></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="{{route('client.index')}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{route('client.index')}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{route('client.index')}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{route('client.index')}}"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email" disabled>
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" action="{{route('client.search')}}">
                <input type="text" id="search-input" placeholder="Search name....." name="key">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/jquery.nice-select.min.js"></script>
    <script src="/frontend/js/jquery.barfiller.js"></script>
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/jquery.nicescroll.min.js"></script>
    <script src="/frontend/js/main.js"></script>

</body>

</html>