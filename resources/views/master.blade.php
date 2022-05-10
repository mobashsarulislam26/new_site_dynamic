<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font.awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/slinky.menu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<header class="header_area">

    <div class="header_top">
        <div class="container">
            <div class="top_inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="follow_us">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    @php $logo = \App\Models\Logo::first(); @endphp
                    <div class="logo">
                        @if (!empty($logo->image_favicon))
                            <a href="index.html"><img src="{{ asset('assets/img/logo/' . $logo->image_favicon) }}"
                                    alt=""></a>
                        @endif

                    </div>
                </div>
                <div class="col-lg-9 col-md-6">
                    <div class="middel_right">
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="middel_right_info">

                            <div class="header_wishlist">
                                <a href="wishlist.html"><span class=""></span></a>
                                <span class=""></span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><span class=""></span> </a>
                                <span class=""></span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_close">
            <div class="cart_text">
                <h3>cart</h3>
            </div>
            <div class="mini_cart_close">
                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="cart_item">
            <div class="cart_img">
                <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">JBL Flip 3 Splasroof Portable Bluetooth 2</a>

                <span class="quantity">Qty: 1</span>
                <span class="price_cart">$60.00</span>

            </div>
            <div class="cart_remove">
                <a href="#"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="cart_item">
            <div class="cart_img">
                <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">Koss Porta Pro On Ear Headphones </a>
                <span class="quantity">Qty: 1</span>
                <span class="price_cart">$69.00</span>
            </div>
            <div class="cart_remove">
                <a href="#"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_total">
                <span>Sub total:</span>
                <span class="price">$138.00</span>
            </div>
            <div class="cart_total mt-10">
                <span>total:</span>
                <span class="price">$138.00</span>
            </div>
        </div>

        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="cart.html">View cart</a>
            </div>
            <div class="cart_button">
                <a class="active" href="checkout.html">Checkout</a>
            </div>

        </div>

    </div>
    <!--mini cart end-->

    <!--header bottom satrt-->
    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu header_position">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</i></a>

                                <li class="mega_items"><a href="{{ url('/shop') }}">Products </li>

                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}"> Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">

                    <div class="canvas_close">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>


                    <div class="top_right text-right">
                    </div>
                    <div class="Offcanvas_follow">
                        <label>Follow Us:</label>
                        <ul class="follow_link">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="search-container">
                        <form action="#">
                            <div class="search_box">
                                <input placeholder="Search entire store here ..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">shop</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">other Pages</a>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Types</a>
                                        <ul class="sub-menu">

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/blog') }}">blog</a>


                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about') }}">About Us</a></li>

                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/contact') }}"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>







@yield('content')



<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        @php $logo = \App\Models\Logo::first(); @endphp
                        <div class="footer_logo">
                            @if (!empty($logo->image_favicon))
                                <a href="index.html"><img src="{{ asset('assets/img/logo/' . $logo->image_favicon) }}"
                                        alt=""></a>
                            @endif

                        </div>
                        <div class="footer_contact">
                            <p>We are a team of designers and developers that
                                create high quality Magento, Prestashop, Opencart...</p>
                            <p><span>Address</span> 4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                            <p><span>Need Help?</span>Call: <a href="tel:1-800-345-6789">1-800-345-6789</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Extras</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container">
                        <h3>Newsletter Subscribe</h3>
                        <p>We’ll never share your email address with a third-party.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off"
                                    placeholder="Enter you email address here..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2022 <a href="#"></a> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script src="https://www.google.com/jsapi"></script>
<script src="assets/js/map.js"></script>


<script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>

<script src="{{ asset('assets/js/popper.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>

<script src="{{ asset('assets/js/jquery.ui.js') }}"></script>

<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>

<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('assets/js/slinky.menu.js') }}"></script>

<script src="{{ asset('assets/js/plugins.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
