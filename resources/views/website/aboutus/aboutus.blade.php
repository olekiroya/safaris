
@extends('website.layouts.apps')
@section('content')

    <!-- ===============  breadcrumb area start =============== -->
    <div class="breadcrumb-area"
    style="
    background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(0, 0, 0, 0.65)), to(rgba(0, 0, 0, 0.65))),url({{ URL::asset('/storage/uploads/'.$tourname->attachment) }});
    background: linear-gradient(rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.65) 100%), url({{ URL::asset('/storage/uploads/'.$tourname->attachment) }});
    background-size: cover;
    min-height: 320px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2> About Us</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="/">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Package Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  breadcrumb area end =============== -->
    <div class="package-details-wrapper pt-120">

        <div class="container">


            <div class="row">
                <div class="col-lg-8">
                    <div class="package-details">
                        <div class="package-thumb">
                            <img src="{{ URL::asset('/storage/uploads/'.$tourname->attachment) }}" alt="" style="height: 400px !important">
                        </div>

                        <div class="package-header">
                            <div class="package-title">
                                <h3>{{ $tourname->tour_name }}</h3>
                                <strong><i class="flaticon-arrival"></i>
                                    {{ $tourname->style }}
                                </strong>
                            </div>
                            <div class="pd-review">
                                <p>The Best</p>
                                <ul>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bx-star' ></i></li>
                                </ul>
                                {{--  <p>800 Review</p>  --}}
                            </div>
                        </div>
                        <div class="p-short-info">
                            <div class="single-info">
                                <i class="flaticon-clock"></i>
                                <div class="info-texts">
                                    <strong>Duration</strong>
                                    <p>{{ $tourname->days }} Days</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-footprints"></i>
                                <div class="info-texts">
                                    <strong>Tour Type</strong>
                                    <p>{{ $tourname->type }}</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-traveller"></i>
                                <div class="info-texts">
                                    <strong>Group Size</strong>
                                    <p>30 People</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <i class="flaticon-translate"></i>
                                <div class="info-texts">
                                    <strong>Languages</strong>
                                    <p>English</p>
                                </div>
                            </div>
                        </div>
                        <div class="package-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="flaticon-info"></i>
                                    Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="flaticon-clipboard"></i>
                                    Travel Plan</button>
                                </li>

                              </ul>
                              <div class="tab-content p-tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-1">
                                                <div class="p-overview">
                                                 <h5>Overview</h5>
                                                 <p>{{ $tourname->overview }}</p>
                                                </div>

                                                <div class="p-highlight">
                                                    <h5>Highlight</h5>
                                                    <p>
                                                        {{ $tourname->tour_highlight }}
                                                    </p>

                                                </div>
                                                @foreach ( $programs as $program)
                                                @endforeach
                                                <div class="p-details-table">
                                                 <table class="table caption-top">
                                                     <tbody>
                                                       <tr>
                                                         <td>Destination</td>
                                                         <td>   @foreach ( $programs as $prog){{ $prog->destination_name }}, @endforeach</td>
                                                       </tr>

                                                       <tr>
                                                         <td>Included</td>
                                                         <td>
                                                             <ul class="table-list-allow">
                                                                 <li><i class='bx bx-check' ></i> Specilaized Bilingual Guide</li>
                                                                 <li> <i class='bx bx-check' ></i> Private Transport</li>
                                                                 <li><i class='bx bx-check' ></i> Entrance Fees</li>
                                                                 <li><i class='bx bx-check' ></i> Box Lunch,Water,Dinner and Snacks</li>
                                                             </ul>
                                                         </td>
                                                       </tr>
                                                       <tr>
                                                         <td>Excluded</td>
                                                         <td>
                                                             <ul class="table-list-disallow">
                                                                 <li> <i class='bx bx-x'></i> Additional Services</li>
                                                                 <li><i class='bx bx-x'></i> Insurance</li>
                                                                 <li><i class='bx bx-x'></i> Drink</li>
                                                                 <li><i class='bx bx-x'></i> Tickets</li>
                                                             </ul>
                                                         </td>
                                                       </tr>
                                                     </tbody>
                                                   </table>
                                                </div>

                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="tab-content-2">
                                        <div class="row">



                                            <div class="col-lg-12">
                                                <div class="p-timeline-overview">
                                                    <h5>Overview</h5>
                                                    <p>
                                                        {{ $program->itinerary_summury }}</p>
                                                </div>

                                                <ul class="p-timeline">
                                                    @foreach ($programs as $itinerary)
                                                    <li>
                                                        <div class="timeline-index">
                                                            <div class="index-circle">
                                                                <h5>{{ $itinerary->day }}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-content">
                                                            <h5>
                                                                DAY {{ $itinerary->day }} : {{ $itinerary->itinerary_title }}</h5>
                                                                Destination:<strong> {{ $itinerary->destination_name }} </strong><br>
                                                                Accommodation: <strong> {{ $itinerary->accommodation_name }} </strong>
                                                            <p>{{ $itinerary->itinerary_description }}</p>


                                                            <ul>
                                                                <li><li><i class="bx bx-check"></i>Specilaized Bilingual Guide</li>
                                                                <li><li><i class="bx bx-check"></i>Private Transport</li>
                                                                <li><li><i class="bx bx-check"></i>Entrance Fees</li>
                                                                <li><li><i class="bx bx-check"></i>Box Lunch,Water,Dinner and Snacks</li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    @endforeach
                                                </ul>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-d-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="p-sidebar-form">
                                    <form>
                                        <h5 class="package-d-head">Book This Package</h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Your Full Name">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="tel" placeholder="Phone">
                                            </div>
                                            <div class="col-lg-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Tickets Type</option>
                                                    <option value="1">Travel With Bus</option>
                                                    <option value="2">Travel With Plane</option>
                                                  </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Adult</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Child</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="calendar-input">
                                                    <input type="text" name="check-in" class="input-field check-in" placeholder="dd-mm-yy">
                                                    <i class="flaticon-calendar"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea  cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="submit" value="Book Now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="p-sidebar-cards mt-40">
                                    <h5 class="package-d-head">Related Packages</h5>

                                    <ul class="package-cards">

                                        @foreach ($related as $relate)
                                        <li class="package-card-sm">
                                            <div class="p-sm-img">
                                                <img src="{{ URL::asset('/storage/uploads/'.$relate->attachment) }}" alt="">
                                            </div>
                                            <div class="package-info">
                                                <div class="package-date-sm">
                                                    <strong><i class="flaticon-calendar"></i>{{ $relate->days-1 }} Days/{{ $relate->days }} night</strong>
                                                </div>
                                                <h3><i class="flaticon-arrival"></i>
                                                    <a href="/safaris/{{ $relate->id }}">{{ $relate->tour_name }}</a>
                                                </h3>
                                                <h5><span>${{ $relate->price }}</span>/ Per Person</h5>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
