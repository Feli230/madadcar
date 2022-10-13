@extends('layouts.app')

@section('content')
        {{--  <meta name="viewport" content="width=device-width, initial-scale=1.0">  --}}
        <!-- favicon -->
        <link rel="shortcut icon" href="https://themeforest.kreativdev.com/maarif/maarif/assets/img/favicon.png">
        <!-- bootstrap css -->       
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/bootstrap.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/flaticon.css">
        <!-- fontawesome css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/fontawesome.min.css">
        <!-- owl carousel css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/owl.carousel.min.css">
        <!-- owl carousel theme css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/owl.theme.default.min.css">
        <!-- slicknav css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/slicknav.css">
        <!-- main css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="https://themeforest.kreativdev.com/maarif/maarif/assets/css/responsive.css">
        <!-- jquery js -->
        <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/jquery-1.10.2.min.js"></script>

         
                <!--  Header Section Start  -->
                <div class="header-section home-3">
                    <div class="info-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mb-0 text-right">Opening Hours : Monday - Saturday 9 AM to 5 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="support-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-xl-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="support-box">
                                                <div class="icon-wrapper"><i class="flaticon-envelope"></i></div>
                                                <div class="support-txt">
                                                    <h4>Mail To Us</h4>
                                                    <p>Madadcar@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-6">
                                    <div class="appointment">
                                        <p>Our Admin is available 24/7 for any queries or complains</p>
                                        <a class="phone-number" href="tel:+496170961709">
                                            <div class="icon-wrapper"><i class="flaticon-phone-receiver"></i></div>
                                            <span>0321-8476789</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
                <!--  Header Section End  -->
        
        
                <!--   search bar popup start   -->
                <div class="search-popup">
                    <form class="search-form" action="#">
                        <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
                    </form>
                    <div class="search-popup-overlay" id="searchOverlay"></div>
                    <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
                </div>
                <!--   search bar popup end   --> 
        
        
                <!--  Hero Area Start  -->  
                <div class="hero-area hero-bg-3 home-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="hero-txt">
                                    <h1>We help your auto to get on the road</h1>
                                </div>
                            </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                    <div class="hero-overlay"></div>
                </div>
                <!--  Hero Area End  -->
        
        
                <!--  Feature Area Start  --> 
                <div class="feature-area home-3">
                    <div class="container">
                        <div class="features">
                            <div class="row no-gutters">
                                <div class="col-md-6 col-lg-4">
                                    <div class="single-feature">
                                        <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/feature3_1.jpg" alt="">
                                        <div class="feature-info">
                                            <div class="icon-wrapper"><i class="flaticon-timing-belt"></i></div>
                                            <div class="feature-txt">
                                                <h3>WE MAKE IT EASY</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="single-feature">
                                        <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/feature3_2.jpg" alt="">
                                        <div class="feature-info">
                                            <div class="icon-wrapper"><i class="flaticon-wrench"></i></div>
                                            <div class="feature-txt">
                                                <h3>Fair Pricing</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="single-feature">
                                        <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/feature3_3.jpg" alt="">
                                        <div class="feature-info">
                                            <div class="icon-wrapper"><i class="flaticon-fan"></i></div>
                                            <div class="feature-txt">
                                                <h3>Secured</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <h3>you lead a busy life ! we drop off your vehicle 24/7.</h3>
                                </div>
                                <div class="col-lg-3">
                                    <a href="about.html" class="ad-btn"><span>Know More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Feature Area End  -->
        
        
                <!--  Warranty Area Start  --> 
                <div class="warranty-section home-2 home-3">
                    <div class="warranty-top warranty-bg-2">
                        <div class="container">
                            <div class="row">
                                <div class="offset-lg-5 col-lg-7 offset-xl-6 col-xl-6">
                                    <div class="warranty-content">
                                        <div class="section-title">
                                            <h2>Comprehensive Warranty On All Work</h2>
                                        </div>
                                        <div class="warranty-txt">
                                            <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                                            <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                                        </div>
                                        <a href="contact.html" class="warranty-btn"><span>SCHEDULE A REPAIR</span></a>                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="warranty-features">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon-wrapper">
                                            <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/info_icon_1.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <p>Over 23 years of experience</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon-wrapper">
                                            <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/info_icon_2.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <p>ASE Certified Master Technicians</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-feature">
                                        <div class="icon-wrapper">
                                            <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/info_icon_3.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <p>We offer Financing Options</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Warranty Area End  -->  
        
        
                <!--  Service Area Start  --> 
                <div class="service-area service-bg">
                    <div class="container">
                        <div class="section-title">
                            <span>OUR SERVICES</span>
                            <h2>WHAT WE PROVIDE</h2>
                        </div>
                        <div class="services-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="battery-tab" data-toggle="tab" href="#battery" role="tab" aria-controls="battery" aria-selected="true"><i class="flaticon-battery"></i>Battery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="breaks-tab" data-toggle="tab" href="#breaks" role="tab" aria-controls="breaks" aria-selected="false"><i class="flaticon-break"></i>Breaks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="belts-tab" data-toggle="tab" href="#belts" role="tab" aria-controls="belts" aria-selected="false"><i class="flaticon-seat-belt"></i>Belts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="diagnostics-tab" data-toggle="tab" href="#diagnostics" role="tab" aria-controls="diagnostics" aria-selected="false"><i class="flaticon-settings"></i>Diagnostics</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="battery" role="tabpanel" aria-labelledby="battery-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-battery"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-electric-car"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-settings"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="breaks" role="tabpanel" aria-labelledby="breaks-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-battery"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-electric-car"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-settings"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="belts" role="tabpanel" aria-labelledby="belts-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-battery"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-electric-car"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-settings"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="diagnostics" role="tabpanel" aria-labelledby="diagnostics-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-battery"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-electric-car"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-service">
                                                <i class="flaticon-settings"></i>
                                                <h3>Battery change</h3>
                                                <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-overlay"></div>
                </div>
                <!--  Service Area End  --> 
        
        
                <!--  Statistics Area Start  -->
                <div class="statistics-area">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-statistic">
                                    <div class="icon-wrapper"><i class="flaticon-electric-car"></i></div>
                                    <div class="count">
                                        <h2><span class="counter">9,250</span> +</h2>
                                    </div>
                                    <span class="title">Vehicles Repaired</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-statistic">
                                    <div class="icon-wrapper"><i class="flaticon-steering-wheel"></i></div>
                                    <div class="count">
                                        <h2><span class="counter">1,250</span> +</h2>
                                    </div>
                                    <span class="title">Satisfied Clients</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-statistic">
                                    <div class="icon-wrapper"><i class="flaticon-settings"></i></div>
                                    <div class="count">
                                        <h2><span class="counter">2,500</span> +</h2>
                                    </div>
                                    <span class="title">Diagonistic Autos</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-statistic">
                                    <div class="icon-wrapper"><i class="flaticon-break"></i></div>
                                    <div class="count">
                                        <h2><span class="counter">1,457</span> +</h2>
                                    </div>
                                    <span class="title">Parts Recoveres</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Statistics Area End  --> 
        
        
                <!--  Review Area Start  --> 
                <div class="review-area review-bg home-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="section-title">
                                    <span>Testimonial</span>
                                    <h2>WHAT THEY SAY ABOUT US</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="review-carousel-2 owl-carousel owl-theme home-2">
                                    <div class="single-review bg-color">
                                        <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                                        <span>Ariana Hedge CEO, Devrise</span>
                                        <div class="rate">
                                            <div class="rating" style="width:100%"></div>
                                        </div>
                                    </div>
                                    <div class="single-review bg-color">
                                        <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                                        <span>Ariana Hedge CEO, Devrise</span>
                                        <div class="rate">
                                            <div class="rating" style="width:100%"></div>
                                        </div>
                                    </div>
                                    <div class="single-review bg-color">
                                        <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                                        <span>Ariana Hedge CEO, Devrise</span>
                                        <div class="rate">
                                            <div class="rating" style="width:100%"></div>
                                        </div>
                                    </div>
                                    <div class="single-review bg-color">
                                        <p>…I would drive out of my way to have them service my vehicle any day of the week because I know I am getting service the way it should be!!</p>
                                        <span>Ariana Hedge CEO, Devrise</span>
                                        <div class="rate">
                                            <div class="rating" style="width:100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-overlay"></div>
                </div>
                <!--  Review Area End  --> 
        
        
                <!--  Vehicles Area Start  -->
                <div class="vehicles-area home-2">
                    <div class="container">
                        <div class="section-title">
                            <span>check our recent work</span>
                            <h2>Recently Serviced Vehicles</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-vehicle">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/service_1.jpg" alt=""></div>
                                    <div class="txt">
                                        <h3>2009 Acura MDX</h3>
                                        <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-vehicle">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/service_2.jpg" alt=""></div>
                                    <div class="txt">
                                        <h3>2009 Acura MDX</h3>
                                        <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-vehicle">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/service_3.jpg" alt=""></div>
                                    <div class="txt">
                                        <h3>2009 Acura MDX</h3>
                                        <p> Change oil and oil filter. Check air filter ( most cars ) . FILL Washer solvent </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Vehicles Area End  -->
        
        
                <!--  Team Area Start  -->
                <div class="team-area">
                    <div class="container">
                        <div class="section-title">
                            <span>maarif team</span>
                            <h2>meet the team</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-team">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/team_1.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>Admond harb</h5>
                                        <span>Head of director</span>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-team">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/team_2.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>Roger linn</h5>
                                        <span>MANAGING director</span>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-team">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/team_3.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>ARIANA GRANDE</h5>
                                        <span>MANAGING director</span>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-team">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/team_4.jpg" alt=""></div>
                                    <div class="txt">
                                        <h5>ARIANA GRANDE</h5>
                                        <span>MANAGING director</span>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Team Area End  -->
        
        
                <!--  Quote Area Start  -->
                <div class="quote-area quote-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="quote-form">
                                    <div class="section-title">
                                        <span>quote</span>
                                        <h2>Request a free qoute</h2>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-element">
                                                    <input type="text" name="name" placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-element">
                                                    <select name="type">
                                                        <option value="" selected>Auto Repair</option>
                                                        <option value="">Auto Servicing</option>
                                                        <option value="">Car Wash</option>
                                                        <option value="">Tire Change</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-element"><input name="email" type="text" placeholder="Email"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-element mb-0"><button type="submit"><span>Submit</span></button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Quote Area End  -->
        
        
                <!--  News Area Start  -->
                <div class="news-area">
                    <div class="container">
                        <div class="section-title">
                            <span>Latest blog</span>
                            <h2>Inside The News</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-news">
                                    <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/news_1.jpg" alt=""></div>
                                    <div class="txt">
                                        <span>November 05, 2018  -  BY Admin</span>
                                        <h3><a href="https://themeforest.kreativdev.com/maarif/maarif/blog-details.html">make your auto clean as before like new</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-0 mt-lg-0 mt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-news small">
                                            <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/news_2.jpg" alt=""></div>
                                            <div class="txt">
                                                <span>November 05, 2018  -  BY Admin</span>
                                                <h3><a href="https://themeforest.kreativdev.com/maarif/maarif/blog-details.html">New auto trend 2019-2025</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-news small">
                                            <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/news_3.jpg" alt=""></div>
                                            <div class="txt">
                                                <span>November 05, 2018  -  BY Admin</span>
                                                <h3><a href="https://themeforest.kreativdev.com/maarif/maarif/blog-details.html">New auto trend 2019-2025</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-news small mb-sm-0">
                                            <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/news_4.jpg" alt=""></div>
                                            <div class="txt">
                                                <span>November 05, 2018  -  BY Admin</span>
                                                <h3><a href="https://themeforest.kreativdev.com/maarif/maarif/blog-details.html">New auto trend 2019-2025</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-news small mb-0">
                                            <div class="img-wrapper"><img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/news_5.jpg" alt=""></div>
                                            <div class="txt">
                                                <span>November 05, 2018  -  BY Admin</span>
                                                <h3><a href="https://themeforest.kreativdev.com/maarif/maarif/blog-details.html">New auto trend 2019-2025</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  News Area End  -->
        
        
                <!--  Partner Area Start  -->
                <div class="partner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="partner-carousel owl-carousel owl-theme border-bottom border-top-lg-0 border-top">
                                    <div class="single-partner-item">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/partner-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-partner-item">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/partner-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-partner-item">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/partner-3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-partner-item">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/partner-4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-partner-item">
                                        <div class="outer">
                                            <div class="inner">
                                                <img src="https://themeforest.kreativdev.com/maarif/maarif/assets/img/partner-5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Partner Area End  -->
        
        
                <!--    Call to Action Area Start    -->
                <div class="cta-area cta-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-10">
                                <h2>We Are Here To Help With Your Transportation All Repair Needs</h2>
                            </div>
                            <div class="col-lg-2">
                                <a href="https://themeforest.kreativdev.com/maarif/maarif/contact.html" class="cta-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-overlay"></div>
                </div>
                <!--    Call to Action Area End    -->
        
        
                <!--    Footer Area Start    -->
                <footer>
                    <div class="container">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <a class="logo-wrapper" href="https://themeforest.kreativdev.com/maarif/maarif/index.html"><img src="https://themeforest.kreativdev.com/maarif/maarif/https://themeforest.kreativdev.com/maarif/maarif/assets/img/logo-2.png" alt=""></a>
                                    <p class="txt">Our commitment to you is to provide honest, friendly, and on-time service. Visit a locally owned and operated business that has been serving the community since 1992.</p>
                                </div>
                                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-3">
                                    <h4>Useful Links</h4>
                                    <ul class="links">
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/index.html">Home</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/about.html">About us</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/services.html">Service</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/blogs.html">Blog</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-3">
                                    <h4>Services</h4>
                                    <ul class="links">
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/service-details.html">Battery Service</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/service-details.html">Belt service</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/service-details.html">car wash</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/service-details.html">break repair</a></li>
                                        <li><a href="https://themeforest.kreativdev.com/maarif/maarif/service-details.html">automate filter</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <h4>Contact Us</h4>
                                    <div class="contact-infos">
                                        <div class="single-info">
                                            <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                                            <p>143 castle road 517 district, kiyev port south Canada</p>
                                        </div>
                                        <div class="single-info">
                                            <div class="icon-wrapper"><i class="flaticon-phone-auricular-hand-drawn-ringing-tool-outline"></i></div>
                                            <p>+00 12 123 4567</p>
                                        </div>
                                        <div class="single-info">
                                            <div class="icon-wrapper"><i class="flaticon-message"></i></div>
                                            <p>Info@yourmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <p>© Copyrights 2019 Maarif. All rights reserved. </p>
                        </div>
                    </div>
                </footer>
                <!--    Footer Area End    -->
        
        
                <!-- back to top area start -->
                <div class="back-to-top">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <!-- back to top area end -->
        
        
                <!-- preloader start -->
                <div class="preloader">
                    <div class="loading-window">
                        <div class="car">
                            <div class="strike"></div>
                            <div class="strike strike2"></div>
                            <div class="strike strike3"></div>
                            <div class="strike strike4"></div>
                            <div class="strike strike5"></div>
                            <div class="car-detail spoiler"></div>
                            <div class="car-detail back"></div>
                            <div class="car-detail center"></div>
                            <div class="car-detail center1"></div>
                            <div class="car-detail front"></div>
                            <div class="car-detail wheel"></div>
                            <div class="car-detail wheel wheel2"></div>
                        </div>
                        <div class="text">
                            <span>Loading</span><span class = "dots">...</span>
                        </div>
                    </div>
                </div>
                <!-- preloader end -->
        
        
        
                <!-- popper js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/popper.min.js"></script>    
                <!-- bootstrap js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/bootstrap.min.js"></script>
                <!-- owl carousel js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/owl.carousel.min.js"></script>
                <!-- waypoints js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/waypoints.min.js"></script>
                <!-- counterup js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/jquery.counterup.min.js"></script>
                <!-- slicknav js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/jquery.slicknav.min.js"></script>
                <!-- main js -->
                <script src="https://themeforest.kreativdev.com/maarif/maarif/assets/js/main.js"></script>

@endsection
