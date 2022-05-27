@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
<style>
.bg-bannerw{
  
  @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
   @endisset

   height: 80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
      @isset($PostcategoryImage->attachment)
   <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>{{$title??'Popular Experience'}}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title?? 'Popular Experience'}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
      @endisset


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          {{$PostcategoryImage->body ?? ''}}.
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>


<section id="popular_experience" class="blog_section">
    <div class="container">       
    
     <div class="row" data-aos="fade-up">    
            @foreach ($popularExperiences as $safari)
                       <div class="col-lg-4 col-md-4">
                        <div class="single_blog listing-shot grid-style">                           
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$safari->attachment) }}" class="img-responsive" alt="{{  $safari->tour_name }}" style="height: 240px !important">
                                    </div>
                                </div>
                                <div class="blog-text">
                               
                            <div class="row" >
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="border-right:1px solid rgba(71,85,95,.11) ">
                                            <h3 style=" margin-top:0px;"> <b style="color:green">{{$safari->tour_name}}</b></h3>
                                        </div>


                                     <div class="col-md-7 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.12)">
                                            <strong style=" margin-top:4px;"><b>{{ $safari->days }} Days, {{ $safari->days -1 }} Nights</b></strong>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                           <span class="text-danger" style="font-size:18px"><strong>From $<b>{{ number_format($safari->price),2 }}</b>  </strong>
                                           </span><br>
                                         </div>   
                                        
                                    </div>  
                                    <hr>
                                                                   
                                    <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6 ">
                                              Tour Style:
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong>{{ $safari->category }}</strong>
                                                </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Physical Rating: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong>{{ $safari->physical_rating }}</strong>
                                                </div>
                                                  <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Tour Code: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong>{{ $safari->tour_code }}</strong>
                                                </div>
                                             </div>
<hr>
                            <div class="listing-shot-info rating">
                                <div class="row extra">
                                   <div class="col-md-6 col-sm-7 col-xs-6">
                                   </div>
                                    
                                    <div class="col-md-6 col-sm-5 col-xs-6 pull-right">
                                        <a href="/safaris/{{$safari->id}}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
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

