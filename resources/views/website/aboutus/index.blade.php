
@extends('website.layouts.apps')
@section('content')

    <!-- ===============  breadcrumb area start =============== -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>About Us</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  breadcrumb area end =============== -->

    <!-- ===============  About wrapper area start =============== -->
    <div class="about-wrapper mt-120">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="about-wrapper-left head-left">
                        <h2>The Best Tour Company.</h2>
                            <h5>Background</h5>
                        <p style="text-align: justify">
                            {{ $abouts->introduction }}
                        </p>
                        <br>
                        <p style="text-align: justify">
                            {{ $abouts->body }}
                        </p>
                        <br>
                            <h5>Objectives</h5>
                        <p style="text-align: justify">
                            {{ $abouts->objectives }}
                        </p>

                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-5 col-md-5">
                    <div class=" about-wrapper-right ">
                        <h2> Our Vision</h2>
                        <p>{{  $abouts->vission }}</p>
                        <h2> Our Mission</h2>
                        <p>{{  $abouts->mission }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  About wrapper area end =============== -->

@endsection
