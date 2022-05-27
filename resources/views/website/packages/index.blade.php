
@extends('website.layouts.apps')
@section('content')

    <!-- ===============  breadcrumb area start =============== -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Packages</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  breadcrumb area end =============== -->

     <!-- =============== Destinations area start =============== -->
<div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="section-head pb-45">
                <h2>Select Your best Package For Your Travel</h2>
            </div>
        </div>
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
                    <a href="/safaris/{{ $program->id }}" class="btn-common-sm">Book Now</a>
                </div>
            </h5>
            </div>
            </div>
        </div>
    </div>
        @endforeach

    </div>
</div>
    <!-- =============== Destinations area end =============== -->


@endsection
