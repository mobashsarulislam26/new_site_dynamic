@extends('master')
@section('content')

    <body>
        <section class="slider_section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Browse categories</h2>



                            </div>
                            <div class="categories_menu_toggle ">

                                <ul>
                                    @foreach ($category as $key => $categorys)
                                        <div class="categories_menu_toggle">
                                            <ul>
                                                <li class="menu_item_children categorie_list"><a href="#">
                                                        {{ $categorys->name }} </a></li>
                                            </ul>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="slider_area owl-carousel">
                            @foreach ($sliders as $item)
                                <div class="single_slider d-flex align-items-center"
                                    data-bgimg="assets/img/slider/{{ $item->image }}">
                                    <div class="slider_content">
                                        <h2>{{ $item->sub_title }}</h2>
                                        <h1>{{ $item->title }}</h1>
                                        <a class="button" href="shop.html">{{ $item->button_text }}</a>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!--product area start-->
        <section class="product_area mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2><span> <strong>Our</strong>Products</span></h2>

                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="brake" role="tabpanel">
                        <div class="product_carousel product_column5 owl-carousel">
                            @foreach ($products as $product)
                                <div class="single_product">
                                    <div class="product_name">
                                        <h3><a href="{{ route('proDetails', $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        <p class="manufacture_product"><a href="#">{{ $product->Category->name }}</a></p>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('proDetails', $product->id) }}"><img
                                                src="assets/img/product/{{ $product->image }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('proDetails', $product->id) }}"><img
                                                src="assets/img/product/{{ $product->image }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale"></span>
                                        </div>

                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="lnr lnr-magnifier"></span></a></li>
                                                <li class="wishlist"><a href="#" title="Add to Wishlist"><span
                                                            class="lnr lnr-heart"></span></a>
                                                </li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
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
                                                <span class="regular_price">{{ $product->sale_price }}</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="#" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="tab-pane fade" id="wheels" role="tabpanel">
                        <div class="product_carousel product_column5 owl-carousel">


                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <div class="tab-pane fade" id="turbo" role="tabpanel">
                        <div class="product_carousel product_column5 owl-carousel">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Category Product Area =================-->

        <!--product area start-->
        <section class="product_area mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2><span> <strong>Special</strong>Offers</span></h2>
                        </div>

                    </div>

                    <div class="product_carousel product_column5 owl-carousel">
                        @foreach ($products as $productse)
                            <div class="single_product">
                                <div class="product_name">
                                    <h3><a href="product-details.html">
                                            {{ $productse->name }} </a></h3>
                                    <p class="manufacture_product"><a href="#"> {{ $productse->Category->name }}</a>
                                    </p>
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="assets/img/product/{{ $productse->image }}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="assets/img/product/{{ $productse->image }}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale"> </span>
                                    </div>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_box" title="quick view"> <span
                                                        class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href=" " title="Add to Wishlist"><span
                                                        class="lnr lnr-heart"></span></a>
                                            </li>
                                            <li class="compare"><a href=" " title="compare"><span
                                                        class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
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
                                            <span class="regular_price">{{ $productse->sale_price }}</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
        <!--product area end-->

        <!--brand area start-->
        <div class="brand_area mb-42">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       
                    </div>
                </div>
            </div>
        </div>
        <!--brand area end-->

        <!--custom product area-->
        <section class="custom_product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!--featured product area-->
                        <div class="custom_product">
                            <div class="section_title">
                                <h2><span>Featured Products </span></h2>
                            </div>
                            <div class="small_product_items small_product_active">

                                @foreach ($products as $produc)
                                    <div class="single_product_items">
                                        <div class="product_thumb">
                                            <a href="product-details.html"><img
                                                    src="assets/img/product/{{ $produc->image }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h3><a href="product-details.html">{{ $produc->name }}</a></h3>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">{{ $produc->sale_price }}</span>
                                                <span class="old_price">{{ $produc->old_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--featured product end-->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!--mostview product area-->
                        <div class="custom_product">
                            <div class="section_title">
                                <h2><span>Most view products </span></h2>
                            </div>
                            <div class="small_product_items small_product_active">
                               @php
                                //    $Product = \App\Models\Product::find(1); $Product->views->count();
                               @endphp


                                <div class="single_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product12.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">1. New and sale new badge product </a></h3>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$180.00</span>
                                            <span class="old_price">$420.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mostview product end-->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!--bestSeller product area-->
                        <div class="custom_product">
                            <div class="section_title">
                                <h2><span>bestseller products </span></h2>
                            </div>
                            <div class="small_product_items small_product_active">

                                <div class="single_product_items">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">1. New and sale new badge product </a></h3>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$180.00</span>
                                            <span class="old_price">$420.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--bestSeller product end-->
                    </div>
                </div>
            </div>
        </section>
        <!--custom product end-->

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
    </body>
@endsection
