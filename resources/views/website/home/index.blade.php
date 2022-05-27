@extends('website.layouts.apps')
@section('content')

@isset($sliders)
<section class="">
<main class="hero-slide-three ">

    <!-- ===============  Main banner area start =============== -->
    <div class="main-banner">
        <div class="banner-slider owl-carousel">
            @foreach ($sliders as $slides)

            <div class="slider-item slider-item-1" style="background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(48, 79, 71, 0.65)), to(rgba(48, 79, 71, 0.65))), url({{ URL::asset('/storage/uploads/'.$slides->attachment) }});
            background: linear-gradient(rgba(48, 79, 71, 0.65) 100%, rgba(48, 79, 71, 0.65) 100%), url({{ URL::asset('/storage/uploads/'.$slides->attachment) }});
            background-size: cover;
            background-position: center;">
                <div class="container">
                    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" >
                        <h2>{{ $slides->title }} </h2>

                            <span style="font-size: 40px; color:aliceblue; shadow:black">{{ $slides->tour_name }}</span>
                            <h5>7 Days, 8 Night Tour</h5>
                            <div class="banner-btn">
                                <a href="package.html" class="btn-common">Book Now</a>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>
    </div>
    <!-- ===============  Main banner area end =============== -->

     <!-- ===============  Package  area start =============== -->
    <div class="package-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-45">
                        <h5>Choose Your Package</h5>
                        <h2>Select Your best Package For Your Travel</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($programs as $program)
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="{{ URL::asset('/storage/uploads/'.$program->attachment) }}" alt="" class="img-fluid" style="height: 300px !important">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>{{ $program->price }} {{ $program->currency }}</span>/Per Person</h5>
                                <h5><i class="flaticon-calendar"></i>{{ $program->days }} Days/{{ $program->days - 1 }} night</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">{{ $program->tour_name }}</a>
                            </h3>
                    <div class="package-info">
                        <h5><span>
                            <div class="package-rating package-info">
                                <strong><i class='bx bxs-binoculars'></i><span style="font-size: 12px;">{{ $program->type}}</span> </strong>
                             </div>
                        </span>
                        </h5>
                        <h5><div class="blog-btn">
                            <a href="/safaris/{{ $program->id }}" class="btn-common-sm">Read More</a>
                        </div>
                    </h5>
                    </div>
                    </div>
                </div>
            </div>
                @endforeach




        </div>
    </div>
     <!-- ===============  Package  area end =============== -->


     <!-- =============== achievement area start =============== -->
     <div class="achievement-area p-80 mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-30">
                        <h5>Why Ewangan </h5>
                        <h2>Why you are travel with Ewangan </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated"  data-wow-duration="1500ms" data-wow-delay="0ms" >
                    <div class="achievement-card mt-30">
                        <div class="achievement-icon">
                            <i class="flaticon-guide"></i>
                        </div>
                        <h5>100% Friendly customer support </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated"  data-wow-duration="1500ms" data-wow-delay="200ms" >
                    <div class="achievement-card mt-30">
                        <div class="achievement-icon">
                            <i class="flaticon-trust"></i>
                        </div>
                        <h5>100% trusted travel agency</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated"  data-wow-duration="1500ms" data-wow-delay="400ms" >
                    <div class="achievement-card mt-30">
                        <div class="achievement-icon">
                            <i class="flaticon-experience"></i>
                        </div>
                        <h5>Experienced Guide in African safaris</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated"  data-wow-duration="1500ms" data-wow-delay="600ms" >
                    <div class="achievement-card mt-30">
                        <div class="achievement-icon">
                            <i class="flaticon-traveller"></i>
                        </div>
                        <h5>90% of our traveller happy</h5>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- =============== achievement area end =============== -->

    <!-- ===============  Feature area start =============== -->
    <div class="feature-area mt-120 p-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head pb-60">
                        <h5>Feature Tours</h5>
                        <h2>See Our Best Popular Package</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <div class="feature-slider owl-carousel">

                    @foreach ($popular_safari as $popular )


                       <div class="feature-card">
                           <div class="feature-img">
                               <img src="{{ URL::asset('/storage/uploads/'.$popular->attachment) }}" alt="" class="img-fluid">
                           </div>
                           <div class="feature-content">
                                <a href="package-details.html" class="title">{{ $popular->tour_name }}</a>
                                <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>
                                <strong>${{ $popular->price }} <span>${{$popular->price }}</span></strong>
                           </div>
                       </div>
                       @endforeach

                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Feature area start =============== -->

    {{-- @endforeach --}}
</main>
@endisset
</section>

<!-- END WHY CHOOSE US -->
<!-- START COUNTER -->
<br>

    {{-- Modal for booking form --}}
<!-- Modal -->
{{-- end of booking form madal --}}
 @endsection
