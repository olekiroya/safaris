
@extends('website.layouts.apps')
@section('content')

<!-- ===============  breadcrumb area start =============== -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="breadcrumb-wrap">
                    <h2>Contact US</h2>
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="/">Home</a>
                            <i class="bx bx-chevron-right"></i>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  breadcrumb area end =============== -->

<div class="contact-wrapper pt-90">
    <div class="contact-cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <div class="contact-icon"><i class="flaticon-arrival"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>{{ $contacts->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <div class="contact-icon"><i class="flaticon-customer-service"></i>

                        </div>
                        <div class="contact-info">
                            <h5>Email & Phone</h5>
                            <p>{{ $contacts->phone }}
                                {{ $contacts->email }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-card">
                        <div class="contact-icon"><i class="flaticon-thumbs-up"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Social Media</h5>
                            <ul class="contact-icons">
                                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#"><i class='bx bxl-facebook' ></i></a></li>
                                <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                                <li><a href="#"><i class='bx bxl-whatsapp' ></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   <div class="container">
    <div class="contact-inputs pt-120">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-details">
                    <h5 class="contact-d-head">Get In Touch</h5>
                    <p>{{ $contacts->body }}
                    </p>
                    <ul class="office-clock">
                        <li>
                            <div class="clock-icon"><i class='flaticon-clock-1'></i></div>
                            <div class="clock-info">
                                <h5>Open Hour</h5>
                                <p>Sat - Thu At <br> 10.00Am to 10.00PM</p>
                            </div>
                        </li>
                        <li>
                            <div class="clock-icon"><i class='flaticon-clock-1'></i></div>
                            <div class="clock-info">
                                <h5>Close Hour</h5>
                                <p>Friday Office Close</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form action="#" method="post">
                        <h5 class="contact-d-head">Contact Us</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="col-lg-12">
                                <textarea cols="30" rows="7" placeholder="Write Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Submit Now">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>

@endsection
