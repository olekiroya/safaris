@extends('website.layouts.apps')
@section('content')

    <!-- End-banner-area -->
    <!-- Start-Package-Section -->
    <section class="">
        <div class="container">
            <div class="row">
               @foreach ($addons as $addon)        
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="single_package">
                        <div class="media">
                            <img src="{{URL::asset('/storage/uploads/'.$addon->attachment) }}" class="img-responsive" alt="{{  $addon->addon_name }}" style="height: 200px !important" alt="">
                           
                            <div class="media-body">
                                    @foreach ($addons_accom as $addon_accom) 
                                       @if($addon->destination_id == $addon_accom->destination_id)

                                     {{$addon_accom->accommodation_name}}

                                     @endif
                                     @endforeach
                             </span>
                                <h3><a href="#">Addon name: {{$addon->addon_name}}</a></h3>
                                <p>{{$addon->addon_highlight}}.</p>
                                <div class="duration">
                                    <ul>
                                        <li>
                                            <p> <i class="far fa-clock"></i> Duration</p>
                                            <h5>{{ $addon->days }} Days</h5>
                                        </li>
                                        <li>
                                            <p> <i class="fas fa-tags"></i> From</p>
                                            <h5>${{ $addon->price }}</h5>
                                        </li>
                                         <li>
                                            <p> <i class="fas fa-tags"></i> Tour type</p>
                                            <h5>{{ $addon->type }}</h5>
                                        </li>
                                         <li>
                                            <p> <i class="fas fa-tags"></i>Style</p>
                                            <h5>{{ $addon->style }}</h5>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <!--/.duration-->
                                <a href="{{ route('addons.show',$addon->id) }}" class="btn btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach       
                       
            </div>
        </div>
    </section>
    <!-- End-Package-Section -->
@endsection

