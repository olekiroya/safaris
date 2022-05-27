<link rel="stylesheet" href="../../../css/bootstrap431.css">
@extends('website.layouts.apps')
@section('content')

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
                        <h2>Special Offers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">
                                    Home
                                </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Special Offers</li>
                            </ol>
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
 @endisset
</hr>


<section id="blog_group" class="blog_section">
<div class="container">
 <div class="row ">
                {{-- start of tabs --}}
                <div class="col-lg-12 col-md-12 col-sm-12 masonry ">
                    <div class="package-detail">
<div class="tab" id="myTabContent">

    <button class="tablink" onclick="openPage('tabP', this, 'orange')" id="defaultOpen" >Private Tour Offers</button>

                                    <button class="tablink" onclick="openPage('tabG', this, 'orange')">Group Tour Offers</button>
                                    
                            </div>
                                <div id="tabP" class="tabcontent">
                       <hr>
                           @if($offers_private)

   
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-left">
                    @if($offers_private !='[]')
                    <h3>PRIVATE TOUR OFFERS</h3>
                    @endif
                </div>
            </div>
        </div>
      
            <div class="row" data-aos="fade-up">       
           
              @foreach ($offers_private as $special_private)
                       <div class="col-lg-4 col-md-6">
                        <div class="single_blog listing-shot grid-style">
                            <div class="listing-badge now-open"><strong>{{ round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                            <a href=""></a>
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$special_private->attachment) }}" class="img-responsive" alt="{{  $special_private->tour_name }}" style="height: 250px !important">
                                    </div>
                                </div>
                                <div class="blog-text">                                
                                <div class="listing-shot-caption">
                                      <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                                        <div class="col-md-6 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11)">
                                            <h3 style=" margin-top:10px;">Dead Line <b class="text-danger">{{ $special_private->offer_deadline }}</b></h3>
                                        </div>
                                        <div class="col-md-6 col-sm-5 col-xs-5">
                                           <span class="text-danger" style="font-size:18px"><strong>${{ $special_private->new_price }} </strong> pp
                                           </span><s style=""><sup>$ {{ $special_private->price }} </sup></s><br>
                                            <span style="font-size:12px;">Save ${{ $special_private->save }}</span>
                                        </div>
                                    </div>                                  
                                       <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6 ">
                                              Tour Duration:
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</strong>
                                                </div>
                                           <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Physical Rating: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $special_private->physical_rating }}</strong>
                                                </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span>Tour Style: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                 <strong>{{ $special_private->category }}</strong>
                                                </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span>Tour Code: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                 <strong>{{ $special_private->tour_code }}</strong>
                                                </div>
                                              </div>                               
                                    </div>
                                    <hr>                              
                              
                            <div class="listing-shot-info rating">
                                <div class="row extra">
                                   <div class="col-md-6 col-sm-7 col-xs-6">
                                   </div>
                                    
                                    <div class="col-md-6 col-sm-5 col-xs-6 pull-right">
                                        <a href="{{ route('safaris.show',$special_private->tour_id) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>                
              @endforeach              
            </div>


            <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center">                  
                @if($offers_private =='[]')
                    <h4>No any Private Offer at this moment</h4>
                @endif
                </div>
            </div>
        </div>
        </div>
@endif
                            <div id="tabG" class="tabcontent">
                              <hr>                              

@if($offers_group)
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-left">                  
                     @if($offers_group !='[]')
                    <h3>GROUP TOUR OFFERS</h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="row" data-aos="fade-up">    
               @foreach ($offers_group as $special_group)
                       <div class="col-lg-4 col-md-6">
                        <div class="single_blog listing-shot grid-style">
                            <div class="listing-badge now-open"><strong>{{ round($special_group->save/$special_group->price * 100),0 }}% Off</strong></div>
                            <a href=""></a>
                                <div class="listing-shot-img">
                                    
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$special_group->attachment) }}" class="img-responsive" alt="{{  $special_group->tour_name }}" style="height: 250px !important">
                                    </div>
                                </div>
                                <div class="blog-text">
                                <div class="listing-shot-caption">
                                     <div class="row" style="border-bottom:1px solid rgba(71,85,95,.11)">
                                        <div class="col-md-6 col-sm-7 col-xs-7" style="border-right:1px solid rgba(71,85,95,.11) ">
                                            <h3 style=" margin-top:10px;">Dead Line <b class="text-danger">{{ $special_group->offer_deadline }}</b></h3>
                                        </div>
                                        <div class="col-md-6 col-sm-5 col-xs-5">
                                           <span class="text-danger" style="font-size:18px"><strong>${{ $special_group->new_price }} </strong> pp
                                           </span><s style=""><sup>$ {{ $special_group->price }} </sup></s><br>
                                            <span style="font-size:12px;">Save ${{ $special_group->save }}</span>
                                        </div>
                                    </div>                                  
                                       <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6 ">
                                              Tour Duration:
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $special_group->days }} Days, {{ $special_group->days -1 }} Nights</strong>
                                                </div>
                                           <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span> Physical Rating: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <strong>{{ $special_group->physical_rating }}</strong>
                                                </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span>Tour Style: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                 <strong>{{ $special_group->category }}</strong>
                                                </div>

                                                 <div class="col-md-6 col-sm-6 col-xs-6">
                                               <span>Tour Code: </span>  </div>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                 <strong>{{ $special_group->tour_code }}</strong>
                                                </div>
                                              </div>          
                                    </div>

                                
                       <hr>
                            <div class="listing-shot-info rating">
                                <div class="row extra">
                                   <div class="col-md-6 col-sm-7 col-xs-6">
                                   </div>
                                    
                                    <div class="col-md-6 col-sm-5 col-xs-6 pull-right">
                                        <a href="{{ route('grouptour.show',$special_group->tour_id) }}" class="btn btn-success">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>               
            @endforeach
        </div>
           <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center">                  
                @if($offers_group =='[]')
                    <h4>No any Group Offer at this moment</h4>
                @endif
                </div>
            </div>
        </div>
            @endif
                            </div>
                        </div>
                    </div>
                </div>
   </div>

</section>
</br>


<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


$('#myTab a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})
</script>
@endsection
