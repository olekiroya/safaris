@extends('website.layouts.apps')
@section('content')

<!-- <style>
.bg-bannerw{
  background-image: url("../img/ava2.jpg");
   height:80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
 -->

<style>
.bg-bannerw{
     @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
     @endisset
     
   height: 75%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

 <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>{{$tour_category}}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$tour_category}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
            @isset($PostcategoryImage->body)
          {{$PostcategoryImage->body}}.
         @endisset
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>

<section id="blog_private" class="blog_section">
    <div class="container">       
      
            <div class="row" data-aos="fade-up">      
           
              @foreach ($programs as $program)
                       <div class="col-lg-4 col-md-6">
                        <div class="single_blog listing-shot grid-style">                           
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$program->attachment) }}" class="img-responsive" alt="{{  $program->tour_name }}" style="height: 250px !important">
                                    </div>
                                </div>
                                <div class="blog-text">
                                <div class="listing-shot-caption">
                                 <p><b>{{$program->tour_name}}</b></p>

                                <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                                        <div class="col-md-7 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11) ">
                                            <h3 style=" margin-top:10px;"> Valid: <b style="color:red">{{ $program->end_date }}</b></h3>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                           <span class="text-danger" style="font-size:18px"><strong>From $<b>{{ $program->price }}</b>  </strong>
                                           </span><br>
                                         </div>   
                                        
                                    </div>                                   
                                    <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6 ">
                                              Duration:
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $program->days }} Days, {{ $program->days -1 }} Nights</strong>
                                                </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Physical Rating: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $program->physical_rating }}</strong>
                                                </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span>Category: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                 <strong>{{ $program->category }}-Join</strong>
                                                </div>

                                     </div>
                                     <hr>
                                </div>

                            <div class="listing-shot-info rating">
                                <div class="row extra">
                                   <div class="col-md-6 col-sm-7 col-xs-6">
                                   </div>
                                    
                                    <div class="col-md-6 col-sm-5 col-xs-6 pull-right">
                                        <a href="{{ route('grouptour.show',$program->id) }}" class="btn btn-success">Book Now</a>
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
@endsection

