@extends('website.layouts.apps')
@section('content')


<style type="text/css">
      
    .bg-banner-front {

    background: url('../img/ava2.jpg');
  
     height: 60%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
.bg-banner-front::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
}
</style>
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
                        <h2>What We Offer</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">What We Offer</li>
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
          {{$PostcategoryImage->body}}.
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>
 @endisset

<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      @foreach ($Postcategory as $safaris )
      <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="package-one blog-box">                    
                    <div class="img-wapper">
                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" alt="{{  $safaris->tour_name }}" style="widht:100% !important; height:200px; !important">
                              </div>
                                <div class="package-content">
                                    <h3>{{$safaris->title}}</h3>
                                   <hr>
                                    <p>{{$safaris->body}}.
                                    </p>
                                </div>
                                <p class="text-center">
                                <a href="#" class="read-btn" data-toggle="modal" data-target="#view_{{$safaris->id}}" data-id="myModal2">Read More<i class="fas fa-angle-double-right"></i></a>
                             </p>
                            </div>
                            </div> 

  <!-- Modal -->  
 <div class="modal fade" id="view_{{$safaris->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title"> {{$safaris->title}}</h4> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

        <div class="modal-body">
                    <div class="img-wapper">
                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" alt="{{  $safaris->tour_name }}" style="widht:100% !important; height:200px; !important">
                              </div>
                              <hr>
          <p>{{$safaris->body}}.
                                    </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

