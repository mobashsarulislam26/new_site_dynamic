@extends('master')
@section('content')

    <body>

        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li>Camera & Video </li>
                                <li>shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <!--shop  area start-->
        <div class="shop_area shop_reverse">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <!--sidebar widget start-->
                        <aside class="sidebar_widget">
                            <div class="widget_inner">
                                <div class="widget_list widget_filter">
                                    <h2>Filter by price</h2>
                                    <form action="#">
                                        <div id="slider-range"></div>
                                        <button type="submit">Filter</button>
                                        <input type="text" name="text" id="amount" />

                                    </form>
                                </div>
                                <div class="widget_list widget_categories">
                                    <h2>categories</h2>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Categories1 (6)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Categories2(10)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Categories3 (4)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Categories4(10)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Categories5(8)</a>
                                            <span class="checkmark"></span>
                                        </li>

                                    </ul>
                                </div>

                                <div class="widget_list widget_categories">
                                    <h2>Manufacturer</h2>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Brake Parts(6)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Accessories (10)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Engine Parts (4)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">hermes(10)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">louis vuitton(8)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Tommy Hilfiger(7)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">House Plants(6)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget_list widget_categories">
                                    <h2>Select By Color</h2>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Black (6)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#"> Blue (8)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Brown (10)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#"> Green (6)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Pink (4)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">White (2)</a>
                                            <span class="checkmark"></span>

                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <a href="#">Yellow (3)</a>
                                            <span class="checkmark"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop_sidebar_banner">
                                <a href="#"><img src="assets/img/bg/banner9.jpg" alt=""></a>
                            </div>
                        </aside>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_banner">
                            <img src="assets/img/bg/banner8.jpg" alt="">
                        </div>
                        <div class="shop_title">
                            <h1>shop</h1>
                        </div>
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">

                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip"
                                    title="3"></button>

                                <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip"
                                    title="4"></button>

                                <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                                    title="List"></button>
                            </div>
                            <div class=" niceselect_option">

                                <form class="select_option" action="#">
                                    <select name="orderby" id="short">

                                        <option selected value="1">Sort by average rating</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </form>


                            </div>
                            <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div>
                        </div>
                        <!--shop toolbar end-->

                        <div class="row shop_wrapper">
                            @foreach ($products as $key => $product)
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="single_product">
                                        <div class="product_name grid_name">
                                            <h3><a href="{{ url('/productDetails') }}"> {{ $product->name }}</a></h3>
                                            <p class="manufacture_product"><a href="#">
                                                    {{ $product->Category->name }}</a>
                                            </p>
                                        </div>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ url('/productDetails') }}"><img
                                                    src="assets/img/product/{{ $product->image }}" alt=""></a>
                                            <a class="secondary_img" href="{{ url('/productDetails') }}"><img
                                                    src="assets/img/product/{{ $product->image }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-47%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="lnr lnr-magnifier"></span></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                                                    </li>
                                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                                class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="content_inner">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_footer d-flex align-items-center">
                                                    <div class="price_box">
                                                        <span class="current_price">${{ $product->sale_price }}</span>
                                                        <span class="old_price">${{ $product->sale_price }}</span>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="cart.html" title="add to cart"><span
                                                                class="lnr lnr-cart"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                            <div class="shop_toolbar t_bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">next</a></li>
                                        <li><a href="#">>></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--shop  area end-->

            <!--call to action start-->
            <section class="call_to_action">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="call_action_inner">
                                <div class="call_text">
                                    <h3>We Have <span>Recommendations</span> for You</h3>
                                    <p>Take 30% off when you spend $150 or more with code Autima11</p>
                                </div>
                                <div class="discover_now">
                                    <a href="#">discover now</a>
                                </div>
                                <div class="link_follow">
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--call to action end-->
            <!--footer area start-->
            <footer class="footer_widgets">
                <div class="container">
                    <div class="footer_top">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="widgets_container contact_us">
                                    <div class="footer_logo">
                                        <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                    <p>Well never share your email address with a third-party.</p>
                                    <div class="subscribe_form">
                                        <form id="mc-form" class="mc-form footer-newsletter">
                                            <input id="mc-email" type="email" autocomplete="off"
                                                placeholder="Enter you email address here..." />
                                            <button id="mc-submit">Subscribe</button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div><!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright_area">
                                    <p>Copyright &copy; 2022 <a href="#">Autima</a> All Right Reserved.</p>
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
            <!--footer area end-->


            <!-- modal area start-->
            <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="modal_tab">
                                            <div class="tab-content product-details-large">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal_tab_button">
                                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                                    <li>
                                                        <a class="nav-link active" data-toggle="tab" href="#tab1"
                                                            role="tab" aria-controls="tab1" aria-selected="false"><img
                                                                src="assets/img/product/product1.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                            aria-controls="tab2" aria-selected="false"><img
                                                                src="assets/img/product/product2.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                            role="tab" aria-controls="tab3" aria-selected="false"><img
                                                                src="assets/img/product/product3.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                            aria-controls="tab4" aria-selected="false"><img
                                                                src="assets/img/product/product5.jpg" alt=""></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="modal_title mb-10">
                                                <h2>Handbag feugiat</h2>
                                            </div>
                                            <div class="modal_price mb-10">
                                                <span class="new_price">$64.99</span>
                                                <span class="old_price">$78.99</span>
                                            </div>
                                            <div class="modal_description mb-15">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                                    laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti
                                                    nam
                                                    in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum
                                                    vel
                                                    recusandae </p>
                                            </div>
                                            <div class="variants_selects">
                                                <div class="variants_size">
                                                    <h2>size</h2>
                                                    <select class="select_option">
                                                        <option selected value="1">s</option>
                                                        <option value="1">m</option>
                                                        <option value="1">l</option>
                                                        <option value="1">xl</option>
                                                        <option value="1">xxl</option>
                                                    </select>
                                                </div>
                                                <div class="variants_color">
                                                    <h2>color</h2>
                                                    <select class="select_option">
                                                        <option selected value="1">purple</option>
                                                        <option value="1">violet</option>
                                                        <option value="1">black</option>
                                                        <option value="1">pink</option>
                                                        <option value="1">orange</option>
                                                    </select>
                                                </div>
                                                <div class="modal_add_to_cart">
                                                    <form action="#">
                                                        <input min="1" max="100" step="2" value="1" type="number">
                                                        <button type="submit">add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal_social">
                                                <h2>Share this product</h2>
                                                <ul>
                                                    <li class="facebook"><a href="#"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="twitter"><a href="#"><i
                                                                class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="pinterest"><a href="#"><i
                                                                class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li class="google-plus"><a href="#"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li class="linkedin"><a href="#"><i
                                                                class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>
@endsection
