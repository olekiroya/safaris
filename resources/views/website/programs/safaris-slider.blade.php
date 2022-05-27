@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2>{{$sliders->tour_name}}</h2>
    </div>
 </section>

</section>
    <section class="ws-section-spacing bg-gray">
    <div class="container">
          <!-- Start of Image filled from slider -->
             <div class="package-list-wrap ">
                <img src="{{URL::asset('/storage/uploads/'.$sliders->attachment) }}" class="img-fluid" alt="det-img" style="height:400px !important">
                <div class="package-list-content">
                    <p class="package-list-duration"> <span
                            class="">{{$sliders->title}}
                            </span>
                                
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"></a>
                    </h3>
                    <a role="button" class="btn btn-primary text-center" href="{{ route('safaris.show',$sliders->tour_id) }}">Acquire</a>                    
                </div>
                </div>              
                <div  class="col-lg-12 col-md-12 col-sm-12">
                 <p>
                  {{$sliders->description}}
                 </p>
                </div>
                <hr>
      <!-- End of Image filled from slider -->
      <section class="text-center bg-white">
    <div>
        <h2>More {{$title}}</h2>
    </div>
    <hr>
 </section>
        <div class="row masonry-item">
            <!-- item -->
            @foreach ($safaris as $safari)
            <a class="" href="{{ route('safaris.show',$safari->id) }}">
            <div class="col-lg-4 col-md-6 col-sm-12 masonry">
                <div class="package-one">
                    <div class="img-wapper">
                        <img src="{{URL::asset('/storage/uploads/'.$safari->attachment) }}" alt="{{  $safari->tour_name }}" style="widht:100% !important; height:200px; !important">
                    </div>
                    <div class="package-content">
                        <h3><a href="#">{{ $safari->tour_name }}</a></h3>
                        <p>{{ $safari->days }} Days, {{ $safari->days -1 }} Nights Start From <span>${{ number_format($safari->price) }}</span></p>
                        <p>Physical Rating: <span>{{ $safari->physical_rating }}</p>
                      
                        <ul class="ct-action">
                            <li><a href="{{ route('safaris.show',$safari->id) }}" class="booking-btn">Book Now</a>
                            </li>
                            <li>
                               <!-- Rating place -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
            @endforeach
            <!-- item -->
        </div>
    </div>
</section>
<!-- End-Package-Section -->
@endsection

