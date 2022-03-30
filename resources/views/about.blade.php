 @extends('master')
 @section('title')
     {{-- <span>Contact</span> --}}
 @endsection
 @section('content')

     <body>

         <!--breadcrumbs area start-->
         <div class="breadcrumbs_area">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="breadcrumb_content">
                             <ul>
                                 <li><a href="{{ url('/home') }}">home</a></li>
                                 <li>about us</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--breadcrumbs area end-->

         <!--about section area -->
         <div class="about_section mt-32">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-12">
                         <div class="about_thumb">
                             <img src="assets/img/about/about1.jpg" alt="">
                         </div>

                         <div class="about_content">
                             <h1>Welcome to Autima!</h1>
                             <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                                 illum dolore eu feugiat nulla facilisis</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--about section end-->

         <!--chose us area start-->
         <div class="choseus_area">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="chose_title">
                             <h1>Why chose us?</h1>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single_chose">
                             <div class="chose_icone">
                                 <img src="assets/img/about/About_icon1.jpg" alt="">
                             </div>
                             <div class="chose_content">
                                 <h3>Creative Design</h3>
                                 <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                     velit amet enim</p>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single_chose">
                             <div class="chose_icone">
                                 <img src="assets/img/about/About_icon2.jpg" alt="">
                             </div>
                             <div class="chose_content">
                                 <h3>100% Money Back Guarantee</h3>
                                 <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                     velit amet enim</p>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single_chose">
                             <div class="chose_icone">
                                 <img src="assets/img/about/About_icon3.jpg" alt="">
                             </div>
                             <div class="chose_content">
                                 <h3>Online Support 24/7</h3>
                                 <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                     velit amet enim</p>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--chose us area end-->

         <!--services img area-->
         <div class="about_gallery_section">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-6">
                         <div class="single_gallery_section">
                             <div class="gallery_thumb">
                                 <img src="assets/img/service/services2.jpg" alt="">
                             </div>
                             <div class="about_gallery_content">
                                 <h3>What do we do?</h3>
                                 <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                     litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single_gallery_section">
                             <div class="gallery_thumb">
                                 <img src="assets/img/service/services1.jpg" alt="">
                             </div>
                             <div class="about_gallery_content">
                                 <h3>Our Mission</h3>
                                 <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                     litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="single_gallery_section">
                             <div class="gallery_thumb">
                                 <img src="assets/img/service/services3.jpg" alt="">
                             </div>
                             <div class="about_gallery_content">
                                 <h3>History Of Us</h3>
                                 <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                     litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--services img end-->

         <!--testimonials section start-->
         <div class="testimonial_are">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="testimonial_titile">
                             <h1>What Our Custumers Say ?</h1>
                         </div>
                     </div>
                     <div class="testimonial_active owl-carousel">
                         <div class="col-12">
                             <div class="single_testimonial">
                                 <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
                                     have many options to choose! Best Support team ever! Very fast responding! Thank you
                                     very much! I highly recommend this theme and these people!</p>
                                 <img src="assets/img/about/testimonial4.jpg" alt="">
                                 <span class="name">Kathy Young</span>
                                 <span class="job_title">CEO of SunPark</span>
                                 <div class="product_ratting">
                                     <ul>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="single_testimonial">
                                 <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
                                     have many options to choose! Best Support team ever! Very fast responding! Thank you
                                     very much! I highly recommend this theme and these people!</p>
                                 <img src="assets/img/about/testimonial5.jpg" alt="">
                                 <span class="name">Kathy Young</span>
                                 <span class="job_title">CEO of SunPark</span>
                                 <div class="product_ratting">
                                     <ul>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="single_testimonial">
                                 <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you
                                     have many options to choose! Best Support team ever! Very fast responding! Thank you
                                     very much! I highly recommend this theme and these people!</p>
                                 <img src="assets/img/about/testimonial6.png" alt="">
                                 <span class="name">Kathy Young</span>
                                 <span class="job_title">CEO of SunPark</span>
                                 <div class="product_ratting">
                                     <ul>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                         <li><a href="#"><i class="fa fa-star"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--testimonials section end-->

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
