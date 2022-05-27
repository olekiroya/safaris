
@extends('website.layouts.apps')
@section('content')

    <!-- ===============  breadcrumb area start =============== -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Destination</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Destination</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  breadcrumb area end =============== -->

     <!-- =============== Destinations area start =============== -->
     <div class="destinations-area pt-120">
        <div class="container">
           <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="section-head pb-40">
                       <h5>Choose Your Package</h5>
                       <h2>Select Your best Package For Your Travel</h2>
                   </div>
               </div>
           </div>

           @foreach ($destinations as $destionation )
           <div class="row">
               <div class="col-lg-3 col-md-3">
                   <div class="package-slider-wrap">
                       <img src="{{ URL::asset('/storage/uploads/'.$destionation->attachment) }}" alt="" class="img-fluid">
                       <div class="pakage-overlay">
                         <strong>{{ $destionation->category }}</strong>
                       </div>
                   </div>
               </div>

               <div class="col-lg-9 col-md-9">
                   <div class="row owl-carousel destinations-1">
                    @foreach ($programs as $program)
                    @if($program->type == $destionation->category)
                       <div class="package-card">
                           <div class="package-thumb">
                               <img src="{{ URL::asset('/storage/uploads/'.$program->attachment) }}" alt="" class="img-fluid" style="height:225px !important">
                           </div>
                           <div class="package-details">
                               <div class="package-info">
                                   <h5><span>${{ $program->price }}</span>/Per Person</h5>
                               </div>
                               <h3><i class="flaticon-arrival"></i>
                                   <a href="package-details.html">{{ $program->tour_name }}</a>
                               </h3>
                               <div class="package-rating">
                                <i class='bx bxs-binoculars'></i>
                                <strong><span></span>{{ $program->type }}</strong>
                             </div>
                           </div>
                       </div>


                       @endif
                       @endforeach
                   </div>

               </div>

           </div>

@endforeach

        </div>
    </div>
    <!-- =============== Destinations area end =============== -->


@endsection
