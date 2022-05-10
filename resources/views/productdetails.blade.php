@include('master')


@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="shop.html">Product</a></li>
                            <li><a href="shop.html">Clothing</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ dd($product) }};
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">


                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                {{ $product->image }}
                                <img id="zoom1" src="{{ asset('assets/img/product/' . $product->image) }} "
                                    data-zoom-image="{{ asset('assets/img/product/' . $product->image) }}" alt="big-1">

                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="assets/img/product/product8.jpg"
                                        data-zoom-image="assets/img/product/product8.jpg">
                                        <img src="assets/img/product/product8.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="assets/img/product/product9.jpg"
                                        data-zoom-image="assets/img/product/product9.jpg">
                                        <img src="assets/img/product/product9.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="assets/img/product/product10.jpg"
                                        data-zoom-image="assets/img/product/product10.jpg">
                                        <img src="assets/img/product/product10.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="assets/img/product/product13.jpg"
                                        data-zoom-image="assets/img/product/product13.jpg">
                                        <img src="assets/img/product/product13.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">
                            {{-- {{ $product->name }} --}}
                            <h1>{{$product->name}}</h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href=" "><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="next"><a href=" "><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                {{-- {{ $product->sale_price }} --}}
                                {{-- {{ $product->old_price }} --}}
                                <span class="current_price">${{$product->sale_price}}</span>
                                <span class="old_price">${{$product->old_price}}</span>

                            </div>
                            <div class="product_desc">
                                {{-- {{ $product->description }} --}}
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>

                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                    <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                {{-- {{ $product->Category->name }} --}}
                                <span>Category: {{$product->Category->name}}<a href="#"></a></span>
                            </div>


                        </form>
                    </div>
                    <div class="product_meta">
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                        Like</a>
                                </li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i>
                                        tweet</a>
                                </li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                        save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                        share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                        linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="product_d_info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist" id="nav-tab">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#info" role="tab"
                                            aria-controls="info" aria-selected="false">Description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                            aria-selected="false">Specification</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews (1)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>
                                            {{-- {{ $product->description }} --}}
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sheet" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        {{-- {{ $product->short_description }} --}}
                                        <p></p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="reviews_wrapper">
                                        <h2>1 review for Donec eu furniture</h2>
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="assets/img/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="star_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p><strong>admin </strong>- September 12, 2018</p>
                                                    <span>roadthemes</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                        </div>
                                        <div class="product_ratting mb-10">
                                            <h3>Your rating</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product_details_area_end  -->
@endsection
