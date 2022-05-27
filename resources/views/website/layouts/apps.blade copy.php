<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- wow css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <!-- Start-Header-Section -->
    <header>
        <!-- Topbar-start-area -->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="contact_wrapper_top">
                            <ul class="header_top_contact">
                                <li><i class="fa fa-phone" aria-hidden="true"></i>+255 7xxx xxx xxx</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>info@ewangantours.com</li>
                            </ul>

                             <div class="">
                                  <a href="/tailorForm" class="btn btn-primary">Tailor Made</a>
                                <a href="/bookingTrip" class="btn btn-success">Your Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-Topbar-area -->
        <!-- Menu-start-area -->
<!-- Menu-start-area -->
        <div class="header-fixed header-two">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                        {{--  <img src="https://wildquesttours.com/images/logo2.png" alt="logo" style="width: 100px;">  --}}
                        <h1>Ewangan <span style="font-size:12px"> Tours & Safari </span></h1>
                    </a>
                    <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">  <a class="nav-link" href="/">Home</li>


                              <li class="nav-item
                                {{ (request()->is('grouptour')) ? 'active' : '' }}
                                {{ (request()->is('specials')) ? 'active' : '' }}
                                    ">
                                    <a class="nav-link" href="#">Who We Are <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/aboutus">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Why Adventure With Us</a>
                                        </li>
                                    </ul>
                           </li>


                            <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">   <a class="nav-link" href="/whatWeOfferClient">What We Offer</li>

                                <li class="nav-item
                                {{ (request()->is('grouptour')) ? 'active' : '' }}
                                {{ (request()->is('specials')) ? 'active' : '' }}
                                    ">
                                    {{--  <a class="nav-link" href="#">WildQuest Specials <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/Group-scheduled">Scheduled Group Tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/offers">Special Offers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/special-occasions">Special Occasions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/Utali-nyumani">Utalii Nyumbani</a>
                                        </li>
                                     </ul>  --}}
                                </li>

                                <li class="nav-item
                                {{ (request()->is('safaris')) ? 'active' : '' }}
                                {{ (request()->is('trekking')) ? 'active' : '' }}
                                {{ (request()->is('holiday')) ? 'active' : '' }}
                                    ">
                                    <a class="nav-link" href="#">Tour Products <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/safaris">Wildlife Safaris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/trekking">Hiking & Trekking</a>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/holiday">Beach Holidays</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="/combinedTours">Combined Tours</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="/dayTours">Day Tours</a>
                                        </li>
                                     </ul>
                                </li>

                            <li class="nav-item   {{ (request()->is('contact')) ? 'active' : '' }}">   <a class="nav-link" href="/contact"> Contact</a></li>

                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-menu" data-logo="https://wildquesttours.com/images/logo2.png"></div>
                </div>
            </div>
            <!-- End-Menu-area-->
    </header>
    @yield('content')
   <!-- Footer-section -->
   <footer class="ws-section-spacing img-footer1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3>Associations </h3>
			        <ul class="payment-option" style="float:left">
			                   <li> <img style="width:60px" src="https://wildquesttours.com/images/tato.png" alt="tato" title="tato">
                                <img style="width:60px" src="https://wildquesttours.com/images/ttb.png" alt="Tanzania Tourist Board" title="Tanzania tourist Board"></li>
                                <li><img style="width:60px" src="https://wildquesttours.com/images/Lonely-Planet.png" alt="Lonely Planet" title="Lonely Planet">
                                <img  style="width:60px"src="https://wildquesttours.com/images/Amref-flying-doctor.png" alt="Amref flying doctor" title="Amref flying doctor"></li>

             </ul>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-12">
                <h3>We accept</h3>
                <a href="https://wildquesttours.com/payment-methods">
                   <img src="https://wildquesttours.com/images/pay.png" style="width:150px">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
   <!-- Touristlink Certification Badge BEGIN -->
    <div style="">
    <a href="https://www.touristlink.com/user/gilead.html?sereferer=F4B546FE" title="Touristlink Certified Member"
    target="_blank" rel="nofollow">
    <img src="https://www.touristlink.com/assets/shared/images/badge/certified_150x150.png"
    style="width:150px" border="0" alt="Touristlink Certification Badge" title="Touristlink Certification Badge" /></a>
    </div>
    <!-- Touristlink Certification Badge END -->
            </div>
             <div class="col-lg-3 col-md-3 col-sm-12">
                <!-- Trip advisor -->
                {{--  <div id="TA_cdswritereviewlgvi673" class="TA_cdswritereviewlgvi">
<ul id="gsqn8rI3SZ" class="TA_links E8lb5VW0bX">
<li id="Z9RXg1DxQ" class="SYTuGpN19j">
<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/medium-logo-62975-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>  --}}
<script async src="https://www.jscache.com/wejs?wtype=cdswritereviewlgvi&amp;uniq=673&amp;locationId=19281795&amp;lang=en_US&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
            </div>
        </div>
    </div>
</footer>
 <footer class="ws-section-spacing img-footer">
                <div class="container">
                    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <div class="title">
                       <h3>About Ewangan Tours</h3>
                    </div>
                      <ul class="link-widget">
                        <li class="dropdown"><a title="Who we are" href="/aboutus">Who we are</a></li>
                        <li class="dropdown"><a title="Why Adventure with us" href="#">Why Adventure with us</a></li>
                        <li class="dropdown"><a title="What We offer" href="/whatWeOfferClient">What We offer</a></li>
                        <li class="dropdown"><a title="Contact Us" href="/accommodationList">Accommodation List</a></li>
                           <li class="dropdown"><a title="Accommodation List" href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <div class="title">
                        <h3>Destinations</h3>
                    </div>
                    <ul class="link-widget">
                        <li class="dropdown"><a title="Northern Circuit" href="/Attraction-Client/Northern Circuit">Northern Circuit</a></li>
                        <li class="dropdown"><a title="Southern Circuit" href="/Attraction-Client/Southern Circuit">Southern Circuit</a></li>
                        <li class="dropdown"><a title="Eastern Circuit" href="/Attraction-Client/Eastern Circuit">Eastern Circuit</a></li>
                        <li class="dropdown"><a title="Western Circuit" href="/Attraction-Client/Western Circuit">Western Circuit</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <div class="title">
                        <h3>Useful Information</h3>
                    </div>
                    <ul class="link-widget">
                        <li class="dropdown"><a href="#">About Tanzania</a></li>
                        <li class="dropdown"><a  href="">Visa information</a></li>
                        <li class="dropdown"><a  href="#">Health & Vaccination</a></li>
                        <li class="dropdown"><a  href="#">Payment Methods</a></li>
                        <li class="dropdown"><a  href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <div class="title">
                        <h3>WildQuest Contact</h3>
                    </div>
                    <ul class="link-widget">

                        <li class="dropdown"><a  href="">Address:{{$contacts->address??'Arusha'}}</a></li>
                        <li class="dropdown"><a  href="#">Contact No:</a></li>
                        <li class="dropdown"><a  href="#">Email:</a></li>
                        <li class="dropdown"><a href="#">Website:</a></li>
                    </ul>
            </div>

            </div>
        </div>
    </div>
</footer>
<!-- copyright-area -->
<div class="footer-bottom text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-text">
                    Copyright © 2021 Ewangan Tours | All Rights Reserved | Privacy Policy.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End-footer-section -->
<!-- Jquery.min.js-->
 <script src="../../../js/jquery.1.12.4.js"></script>
 <!--bootstrap.min.js-->
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/popper.min.js"></script>
<script src="../../../js/bootstrap-datepicker.js"></script>
<!--slicknav.min.js-->
<script src="../../../js/jquery.slicknav.min.js"></script>
<!--slickslider.min.js-->
<script src="../../../js/slick.min.js"></script>
<!-- counterup.min.js -->
<script src="../../../js/waypoints.min.js"></script>
<script src="../../../js/jquery.counterup.min.js"></script>
<!-- magnific-popup.js -->
<script src="../../../js/lity.min.js"></script>
<!-- isotope.pkgd.min.js -->
<script src="../../../js/isotope.pkgd.min.js"></script>
<script src="../../../js/imagesloaded.js"></script>
<!-- main.js -->
<script src="../../../js/main.js"></script>

<!-- Latest jQuery -->
<script src="../../../js/js/jquery.inview.min.js"></script>
<script src="../../../js/js/jquery.magnific-popup.js"></script>
<script src="../../../js/js/scripts.js"></script>
<script src="../../../js/js/owl.carousel.min.js"></script>


</body>
</html>
