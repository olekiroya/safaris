@extends('website.layouts.apps')
@section('content')

<!-- service-section -->
<section class="service-one ws-section-spacing bg-grays">
    <div class="container">

          <div class="row">
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="service-box-title">Trust & Safety</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                    <a class="btn" href="#">See more</a>
                </div>
            </div>

               <!-- item -->
               <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="servicebox-one service-type-two">
                    <div class="service-box-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3 class="service-box-title">Trust & Safety</h3>
                    <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore .</p>
                    <a class="btn" href="#">See more</a>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End-service-section -->

<!-- START TESTIMONIAL -->
<section class="testimonial" style="background-image: url(images/img/client.jpg); background-size: cover; background-attachment: fixed; position: relative;">
    <div class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center white-title">
                        <span>Testimonials</span>
                        <h2>What Travellers Say Tour Reviews</h2>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <div class="row">
                <div class="col-md-8 d-block mx-auto text-center">
                    <div id="testimonial-slider" class="owl-carousel">

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="https://wildquesttours.com/bawbaw.jpg" width="50" alt="review image">
                                <h3 class="title">Williamson</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros imperdiet amet hendrerit  Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="https://wildquesttours.com/images/bawbaw.jpg" width="50" alt="review image">
                                <h3 class="title">Williamson</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="images/img/testi-3.jpg" width="50" alt="review image">
                                <h3 class="title">Williamson</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- END single Testimonials -->

                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. Praesent bibendum dolor eros imperdiet amet hendrerit Lorem ipsum dolor sit amet consectetur adipiscing elit.
                            </div>

                            <div class="testimonial-bottom">
                                <img src="https://wildquesttours.com/images/bawbaw.jpg" width="50" alt="review image">
                                <h3 class="title">Williamson</h3>
                                <div class="test-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END single Testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TESTIMONIAL -->
<!-- START BLOG -->
<section id="blog" class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Special Offer</h2>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->

        <div class="row" data-aos="fade-up">
            {{-- my custom design --}}
            <div class="col-lg-4 col-md-6">
                        <div class="single_blog listing-shot grid-style">
                            <div class="listing-badge now-open"><strong>10% Off</strong></div>
                            <a href="">
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="https://wildquesttours.com/uploads/tour_1575391519.jpg" class="img-responsive" alt="9 DAYS -  KILIMANJARO CLIMBING via LEMOSHO ROUTE">
                                    </div>
                                </div>
                                <div class="blog-text">
                                <div class="listing-shot-caption">
                                    <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                                        <div class="col-md-7 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11) ">
                                            <h3 style=" margin-top:10px;">Early Booking Sale</h3>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                           <span class="text-danger" style="font-size:18px"><strong> $2,210 </strong> pp
                                           </span><s style=""><sup> $2455.00 </sup></s><br>
                                            <span style="font-size:12px;">Save $246</span>
                                        </div>


                                    </div>
                                    <h4>9 Days -  Kilimanjaro Climbing via Lemosho Route</h4>
                                    <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6 ">
                                              Duration:
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>9 Days, 8 Nights</strong>
                                                </div>
                                           <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Physical Rating: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>Average</strong>
                                                </div>
                                     </div>
                                     <hr>
                                </div>
                            </a>

                            <div class="listing-shot-info rating">
                                <div class="row extra">
                                    <div class="col-md-7 col-sm-7 col-xs-6">
                                        <i class="text-primary fa fa-star" aria-hidden="true"></i>
                                        <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                                        <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                                        <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                                        <i class="text-primary   fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-6 pull-right">
                                        <a href="#" class="booking-btn">Explore</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
{{-- End of the custom design --}}

{{-- my custom design --}}
<div class="col-lg-4 col-md-6">
    <div class="single_blog listing-shot grid-style">
        <div class="listing-badge now-open"><strong>10% Off</strong></div>
        <a href="">
            <div class="listing-shot-img">
                <div class="blog_image">
                <img src="https://wildquesttours.com/uploads/tour_1575391519.jpg" class="img-responsive" alt="9 DAYS -  KILIMANJARO CLIMBING via LEMOSHO ROUTE">
                </div>
            </div>
            <div class="blog-text">
            <div class="listing-shot-caption">
                <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                    <div class="col-md-7 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11) ">
                        <h3 style=" margin-top:10px;">Early Booking Sale</h3>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                       <span class="text-danger" style="font-size:18px"><strong> $2,210 </strong> pp
                       </span><s style=""><sup> $2455.00 </sup></s><br>
                        <span style="font-size:12px;">Save $246</span>
                    </div>


                </div>
                <h4>9 Days -  Kilimanjaro Climbing via Lemosho Route</h4>
                <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 ">
                          Duration:
                        </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                               <strong>9 Days, 8 Nights</strong>
                            </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                           <span> Physical Rating: </span>  </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                               <strong>Average</strong>
                            </div>
                 </div>
                 <hr>
            </div>
        </a>

        <div class="listing-shot-info rating">
            <div class="row extra">
                <div class="col-md-7 col-sm-7 col-xs-6">
                    <i class="text-primary fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary   fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-6 pull-right">
                    <a href="#" class="booking-btn">Explore</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
{{-- End of the custom design --}}


{{-- my custom design --}}
<div class="col-lg-4 col-md-6">
    <div class="single_blog listing-shot grid-style">
        <div class="listing-badge now-open"><strong>10% Off</strong></div>
        <a href="">
            <div class="listing-shot-img">
                <div class="blog_image">
                <img src="https://wildquesttours.com/uploads/tour_1575391519.jpg" class="img-responsive" alt="9 DAYS -  KILIMANJARO CLIMBING via LEMOSHO ROUTE">
                </div>
            </div>
            <div class="blog-text">
            <div class="listing-shot-caption">
                <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                    <div class="col-md-7 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11) ">
                        <h3 style=" margin-top:10px;">Early Booking Sale</h3>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                       <span class="text-danger" style="font-size:18px"><strong> $2,210 </strong> pp
                       </span><s style=""><sup> $2455.00 </sup></s><br>
                        <span style="font-size:12px;">Save $246</span>
                    </div>


                </div>
                <h4>9 Days -  Kilimanjaro Climbing via Lemosho Route</h4>
                <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 ">
                          Duration:
                        </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                               <strong>9 Days, 8 Nights</strong>
                            </div>
                       <div class="col-md-6 col-sm-6 col-xs-6">
                           <span> Physical Rating: </span>  </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                               <strong>Average</strong>
                            </div>
                 </div>
                 <hr>
            </div>
        </a>

        <div class="listing-shot-info rating">
            <div class="row extra">
                <div class="col-md-7 col-sm-7 col-xs-6">
                    <i class="text-primary fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary  fa fa-star" aria-hidden="true"></i>
                    <i class="text-primary   fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-6 pull-right">
                    <a href="#" class="booking-btn">Explore</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
{{-- End of the custom design --}}
    </div><!--- END CONTAINER -->
</section>
<!-- END BLOG -->

 <!-- Start-Contact-Section -->
    <section class="contact1 contact-two-page">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-7 col-md-12">
                     <div class="img-wapper">
                        <img src="https://wildquesttours.com/images/bawbaw.jpg" alt="about">
                    </div>
                 </div>
                <div class="col-lg-5 col-md-12">
                    <h3 class="title-left">General Enquiry</h3>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname" placeholder="Name" name="Name"
                                        required="">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" placeholder="Email"
                                        name="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname" placeholder="Subject" name="Name"
                                        required="">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" placeholder="Phone"
                                        name="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="5" id="comment"
                                    placeholder="Your Comment"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Contact-Section -->
@endsection
