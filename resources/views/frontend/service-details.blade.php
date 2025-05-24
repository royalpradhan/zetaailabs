@extends('frontend.layouts.main')
@section('main-container')
    <main>
        <!-- BREADCRUMBS SECTION START -->
        <section class="ul-breadcrumb ul-section-spacing">
            <div class="ul-container">
                <ul class="ul-breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="separator"><i class="flaticon-right"></i></span></li>
                    <li>Service Details</li>
                </ul>
                <h2 class="ul-breadcrumb-title">Service Details</h2>
            </div>
        </section>
        <!-- BREADCRUMBS SECTION END -->


        <section class="ul-service-details ul-section-spacing">
            <div class="ul-container">
                <div class="row ul-bs-row flex-column-reverse flex-md-row">
                    <div class="col-md-4 wow animate__fadeInUp">
                        <div class="ul-service-details-sidebar">
                            <ul class="ul-service-details-sidebar-links">
                                <li><a href="service-details.html" class="active">Digital Marketing <i
                                            class="flaticon-top-right"></i></a></li>
                                <li><a href="service-details.html">SEO Analytics <i class="flaticon-top-right"></i></a></li>
                                <li><a href="service-details.html">Social Marketing <i class="flaticon-top-right"></i></a>
                                </li>
                                <li><a href="service-details.html">Email Marketing <i class="flaticon-top-right"></i></a>
                                </li>
                                <li><a href="service-details.html">Web Development <i class="flaticon-top-right"></i></a>
                                </li>
                                <li><a href="service-details.html">UI/UX Design <i class="flaticon-top-right"></i></a></li>
                            </ul>


                            <!-- call to action card -->
                            <div class="ul-service-details-sidebar-cta">
                                <div class="ul-service-details-sidebar-cta-icon"><i class="flaticon-customer-support"></i>
                                </div>
                                <h2 class="ul-service-details-sidebar-cta-title">Don't Hesitate to Contact Us</h2>
                                <p class="ul-service-details-sidebar-cta-descr">At our IT solution company, we are committed
                                    to exceptional</p>
                                <a href="contact.html" class="ul-service-details-sidebar-cta-btn">Get in Touch <i
                                        class="flaticon-top-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8 wow animate__fadeInUp">
                        <div>
                            <div class="ul-service-details-img">
                                <img src="assets/img/service-details.jpg" alt="Image">
                            </div>
                            <div class="ul-service-details-txt">
                                <h2 class="ul-service-details-title">Overview</h2>
                                <p class="ul-service-details-descr">Effective marketing campaigns are the backbone of any
                                    successful business strategy. Our Campaign Management service focuses on designing and
                                    executing campaigns that deliver measurable results and drive your success forward. We
                                    handle everything from planning.</p>

                                <p class="ul-service-details-descr">CMS provides user-friendly features for easy editing and
                                    is compatible with installing plugins and tools that provide even more features for
                                    advanced functions. API CMS’s are built to have an excellent user-friendly interface
                                    that is easy to use.</p>

                                <div class="ul-service-details-inner-block">
                                    <h3 class="ul-service-details-inner-title">Features</h3>
                                    <p class="ul-service-details-descr">A content management system (CMS) is an application
                                        that is used to manage content, allowing multiple contributors to create, edit and
                                        publish. Content in a CMS is typically stored in a database and displayed in a
                                        presentation layer based on a set of templates like a website.</p>

                                    <ul>
                                        <li>Creating and editing content</li>
                                        <li>Workflows, reporting, and content organization</li>
                                        <li>User & role-based administration and security</li>
                                        <li>Flexibility, scalability, and performance and analysis</li>
                                        <li>Multilingual content capabilities</li>
                                    </ul>
                                </div>

                                <div class="ul-service-details-inner-block">
                                    <h3 class="ul-service-details-inner-title">Goal</h3>
                                    <p class="ul-service-details-descr">Effective marketing campaigns are the backbone of
                                        any successful business strategy. Our Campaign Management service focuses on
                                        designing and executing campaigns that deliver measurable results and drive your
                                        success forward. We handle everything from planning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- FOOTER SECTION START -->
    <footer class="ul-footer">
        <!-- footer top -->
        <div class="ul-footer-top">
            <div class="ul-container">
                <div class="ul-footer-top-contact-infos">
                    <!-- single info -->
                    <div class="ul-footer-top-logo">
                        <a href="index.html"><img src="assets/img/logo-white.svg" alt="logo"></a>
                        <div class="ul-footer-socials">
                            <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                        </div>
                    </div>

                    <!-- single info -->
                    <div class="ul-footer-top-contact-info">
                        <!-- icon -->
                        <div class="ul-footer-top-contact-info-icon"><i class="flaticon-telephone"></i></div>
                        <!-- txt -->
                        <div class="ul-footer-top-contact-info-txt">
                            <span class="ul-footer-top-contact-info-label">Call Now</span>
                            <h5 class="ul-footer-top-contact-info-address"><a href="tel:20866660112">+208-6666-0112</a></h5>
                        </div>
                    </div>

                    <!-- single info -->
                    <div class="ul-footer-top-contact-info">
                        <!-- icon -->
                        <div class="ul-footer-top-contact-info-icon"><i class="flaticon-mail"></i></div>
                        <!-- txt -->
                        <div class="ul-footer-top-contact-info-txt">
                            <span class="ul-footer-top-contact-info-label">Email Us</span>
                            <h5 class="ul-footer-top-contact-info-address"><a
                                    href="mailto:info@exmple.com">info@exmple.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection