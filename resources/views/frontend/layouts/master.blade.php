<?php
$siteData = App\Models\SiteSetting::first();
if ($siteData) {
    Session::put('logo', $siteData->logo);
    Session::put('fav_icon', $siteData->fav_icon);
    Session::put('facebook', $siteData->facebook);
    Session::put('youtube', $siteData->youtube);
    Session::put('twitter', $siteData->twitter);
    Session::put('instagram', $siteData->instagram);
    Session::put('tiktok', $siteData->tiktok);
    Session::put('satisfied', $siteData->satisfied);
    Session::put('projects', $siteData->projects);
    Session::put('finished_works', $siteData->finished_works);
    Session::put('experience', $siteData->experience);
    Session::put('address', $siteData->address);
    Session::put('email', $siteData->email);
    Session::put('phone_number', $siteData->phone_number);
}

?>
<!-- Required meta tags -->
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/mitech/index-infotechno.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 03:57:56 GMT -->

<head>
    @include('frontend.layouts.header')

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    @include('frontend.layouts.navbar')
    <!--====================  End of header area  ====================-->
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--============ Infotechno Hero Start ============-->
            @yield('content')
            <!--=========== fun fact Wrapper End ==========-->
            <!--=========== Infotechno Video Wrapper Start ==========-->
            {{-- <div class="infotechno-video-wrapper infotechno-video-ptb infotechno-video-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-10 col-11 offset-md-2 offset-1 offset-lg-6 ms-auto">
                                <div class="video-content-wrap">
                                    <div class="vieeo-content-inner">
                                        <h2 class="heading">Share the joy of achieving glorious moments<br>&amp; climbing up the top.</h2>

                                        <div class="viewo-text-wrap">
                                            <div class="video-popup infotech-video-box">
                                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="single-popup-wrap video-link">
                                                    <div class="video-content">
                                                        <div class="ht-popup-video video-button">
                                                            <div class="video-mark">
                                                                <div class="wave-pulse wave-pulse-1"></div>
                                                                <div class="wave-pulse wave-pulse-2"></div>
                                                            </div>
                                                            <div class="video-button__two">
                                                                <div class="video-play">
                                                                    <span class="video-play-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-text">
                                                            Watch video<br>intro
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            <!--=========== Infotechno Video Wrapper End ==========-->
            <!--===========  Projects wrapper Start =============-->

            <!--====================  Blog Section End  ====================-->
            <!--====================  Conact us Section Start ====================-->
            {{-- <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-lg-6">
                                <div class="conact-us-wrap-one">
                                    <h3 class="heading">Obtaining further information by <span class="text-color-primary">make a contact</span> with our experienced IT staffs. </h3>

                                    <div class="sub-heading">We’re available for 8 hours a day!<br>Contact to require a detailed analysis and assessment of your plan.</div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-lg-6">
                                <div class="contact-info-one text-center">
                                    <div class="icon">
                                        <span class="fal fa-phone"></span>
                                    </div>
                                    <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                    <h2 class="call-us"><a href="tel:190068668">1900 68668</a></h2>
                                    <div class="contact-us-button mt-20">
                                        <a href="#" class="btn btn--secondary">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            <!--====================  Conact us Section End  ====================-->
        </div>


        <!--====================  footer area ====================-->
        @include('frontend.layouts.footer')
        <!--====================  End of footer area  ====================-->












    </div>
    <!-- Start Toolbar -->
    {{-- <div class="demo-option-container">
            <!-- Start Toolbar -->
            <div class="aeroland__toolbar">
                <div class="inner">
                    <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                        <i class="fal fa-project-diagram"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                        <i class="fal fa-life-ring"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource" aria-label="Purchase Mitech">
                        <i class="fal fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <!-- End Toolbar -->
            <!-- Start Quick Link -->
            <div class="demo-option-wrapper">
                <div class="demo-panel-header">
                    <div class="title">
                        <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                    </div>

                    <div class="panel-btn mt-20">
                        <a class="ht-btn ht-btn-md" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource"><i class="far fa-shopping-cart me-2"></i> Buy Now </a>
                    </div>
                </div>
                <div class="demo-quick-option-list">
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                        <img class="img-fluid" src="assets/images/demo-images/home-01.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                        <img class="img-fluid" src="assets/images/demo-images/home-02.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                        <img class="img-fluid" src="assets/images/demo-images/home-03.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                        <img class="img-fluid" src="assets/images/demo-images/home-04.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                        <img class="img-fluid" src="assets/images/demo-images/home-05.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                        <img class="img-fluid" src="assets/images/demo-images/home-06.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-modern-it-company.html" aria-label="Modern IT Company">
                        <img class="img-fluid" src="assets/images/demo-images/modern-it-company.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-machine-learning.html" aria-label="Machine Learning">
                        <img class="img-fluid" src="assets/images/demo-images/machine-learning.webp" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-software-innovation.html" aria-label="Software Innovation">
                        <img class="img-fluid" src="assets/images/demo-images/software-innovation.webp" alt="Images">
                    </a>
                </div>
            </div>
            <!-- End Quick Link -->
        </div> --}}
    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                <li><a href="index-processing.html"><span>Processing</span></a></li>
                                <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                <li><a href="index-services.html"><span>Services</span></a></li>
                                <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                                <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                                <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="about-us-01.html"><span>About us</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                        <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                        <li class="has-children">
                                            <a href="#"><span>Submenu Level Two</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="leadership.html"><span>Leadership</span></a></li>
                                <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                <li><a href="our-history.html"><span>Our history</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="careers.html"><span>Careers</span></a></li>
                                <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">IT solutions</a>
                            <ul class="sub-menu">
                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                <li><a href="industries.html"><span>Industries</span></a></li>
                                <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Element Group 01</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                        <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                        <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                        <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                        <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                        <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                        <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                        <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 02</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-counters.html"><span>Counters</span></a></li>
                                        <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                        <li><a href="element-flexible-image-slider.html"><span>Flexible image
                                                    slider</span></a></li>
                                        <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                        <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                        <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                        <li><a href="element-lists.html"><span>Lists</span></a></li>
                                        <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 03</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                        <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                        <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                        <li><a href="element-progress-circle.html"><span>Progress Circle</span></a>
                                        </li>
                                        <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                        <li><a href="element-social-networks.html"><span>Social Networks</span></a>
                                        </li>
                                        <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                        <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 04</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                        <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                        <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a>
                                        </li>
                                        <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Case Studies</a>
                            <ul class="sub-menu">
                                <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Blogs</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!-- JS
        ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>


<!-- Mirrored from htmldemo.net/mitech/index-infotechno.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2022 03:59:00 GMT -->

</html>
