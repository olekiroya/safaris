@extends('website.layouts.apps')
@section('content')

<a></a>

   <section class="ws-section-spacing bg-gray package-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-title ">
                        <h5 class="title">{{$circuit_name}} Tours</h5>
                    </div>
                </div>
                   <div class="col-lg-12">
                    <div class="center-title ">
                        <h5 class="title">Group Tours</h5>
                    </div>
                </div>
            </div>
            <div class="row small-package-list">
               @foreach ($circuitTour as $circuit)
               @if($circuit->category=='Group')
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="single_package">
                        <div class="media">
                             <img src="{{URL::asset('/storage/uploads/'.$circuit->attachment) }}" alt="{{  $circuit->tour_name }}" style="widht:100% !important; height:200px; !important">
                            <div class="media-body">
                                <span class="direction"><i class="fas fa-map-marker-alt"></i><b>{{$circuit->tour_name}} </b>| {{$circuit->type}} | {{$circuit->style}}| {{$circuit->category}}</sp
                                  an>
                                <p>{{$circuit->tour_highlight}}</p> |
                                <div class="duration">
                                    <ul>
                                        <li>
                                            <p> <i class="far fa-clock"></i> Duration</p>
                                            <h5>{{$circuit->days}}Days</h5>
                                        </li>
                                        <li>
                                            <p> <i class="fas fa-tags"></i> From</p>
                                            <h5>${{number_format($circuit->price)}}</h5>
                                        </li>
                                    </ul>
                                </div>
                                <!--/.duration-->
                              
                                  <div class="col-lg-8 col-md-8 col-sm-12">
                                <a href="{{ route('grouptour.show',$circuit->id) }}" class="booking-btn btn-primary">Book now</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> 
                  @endif           
         @endforeach
            
            </div>
       </div>
    </section>

    <section class="ws-section-spacing bg-gray package-list">
        <div class="container">
            <div class="row">
                   <div class="col-lg-12">
                    <div class="center-title ">
                        <h5 class="title">Private Tours</h5>
                    </div>
                </div>
            </div>
            <div class="row small-package-list">
               @foreach ($circuitTour as $circuit_private)
               @if($circuit_private->category=='Private')
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="single_package">
                        <div class="media">
                             <img src="{{URL::asset('/storage/uploads/'.$circuit_private->attachment) }}" alt="{{  $circuit_private->tour_name }}" style="widht:100% !important; height:200px; !important">
                            <div class="media-body">
                                <span class="direction"><i class="fas fa-map-marker-alt"></i><b>{{$circuit_private->tour_name}} </b>| {{$circuit_private->type}} | {{$circuit_private->style}}| {{$circuit_private->category}}</sp
                                  an>
                                <p>{{$circuit_private->tour_highlight}}</p> |
                                <div class="duration">
                                    <ul>
                                        <li>
                                            <p> <i class="far fa-clock"></i> Duration</p>
                                            <h5>{{$circuit_private->days}}Days</h5>
                                        </li>
                                        <li>
                                            <p> <i class="fas fa-tags"></i> From</p>
                                            <h5>${{number_format($circuit_private->price)}}</h5>
                                        </li>
                                    </ul>
                                </div>
                                <!--/.duration-->
                              
                                  <div class="col-lg-8 col-md-8 col-sm-12">
                                <a href="{{ route('safaris.show',$circuit_private->id) }}" class="booking-btn btn-primary">Book now</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> 
                  @endif           
         @endforeach
            
            </div>
       </div>
    </section>
@endsection
