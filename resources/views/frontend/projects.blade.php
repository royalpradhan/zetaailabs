@extends('frontend.layouts.main')
@section('main-container')

    <!-- HEADER SECTION START -->
    <header class="ul-header wow animate__slideInDown">
        <div class="ul-header-bottom to-be-sticky wow animate__slideInDown">
            <div class="ul-header-bottom-wrapper ul-header-container">
                <div class="logo-container">
                    <a href="index.html" class="d-inline-block"><img src="assets/img/logo.svg" alt="logo" class="logo"></a>
                </div>

                <div class="ul-header-bottom-right">
                    <!-- header nav -->
                    <div class="ul-header-nav-wrapper">
                        <div class="to-go-to-sidebar-in-mobile">
                            <nav class="ul-header-nav">
                                <div class="has-sub-menu">
                                    <a role="button">Home</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="about.html">About</a>
                                <div class="has-sub-menu">
                                    <a role="button">Services</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="has-sub-menu active">
                                    <a role="button">Pages</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Member Details</a></li>
                                            <li><a href="pricing.html">Pricing Plans</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="has-sub-menu">
                                    <a role="button">Blog</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="blog-2.html">Blogs Layout 2</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="contact.html">Contact</a>
                            </nav>
                        </div>
                    </div>

                    <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                    <a href="contact.html" class="ul-btn d-sm-inline-flex d-xxs-none"><span>Get in Touch <i class="flaticon-top-right"></i></span></a>
                    <button class="ul-header-sidebar-opener d-lg-none d-inline-flex"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->


    <main>
        <!-- BREADCRUMBS SECTION START -->
        <section class="ul-breadcrumb ul-section-spacing">
            <div class="ul-container">
                <ul class="ul-breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="separator"><i class="flaticon-right"></i></span></li>
                    <li>Projects</li>
                </ul>
                <h2 class="ul-breadcrumb-title">Projects</h2>
            </div>
        </section>
        <!-- BREADCRUMBS SECTION END -->

        <div class="ul-section-spacing">
            <div class="ul-case-study-container">
                <div class="row ul-bs-row row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-1.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Mobile App</span>
                                <h3 class="ul-case-study-item-title">Digital Banking App</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">01</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-2.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Web App</span>
                                <h3 class="ul-case-study-item-title">E-commerce Website</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">02</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-3.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Technology</span>
                                <h3 class="ul-case-study-item-title">Smart Home Automation</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">03</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-2.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Mobile App</span>
                                <h3 class="ul-case-study-item-title">Healthcare App</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">04</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-3.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Web App</span>
                                <h3 class="ul-case-study-item-title">ERM Software</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">05</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- single case study -->
                    <div class="col">
                        <div class="ul-case-study-item ul-inner-case-study-item">
                            <div class="img"><img src="assets/img/case-study-1.jpg" alt="Case Study Image"></div>
                            <div class="txt">
                                <span class="ul-case-study-item-category">Technology</span>
                                <h3 class="ul-case-study-item-title">Digital Banking Platform</h3>
                            </div>
                            <div class="ul-case-study-item-bottom">
                                <span class="ul-case-study-item-index">06</span>
                                <a href="project-details.html" class="ul-case-study-item-btn"><i class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <h5 class="ul-footer-top-contact-info-address"><a href="mailto:info@exmple.com">info@exmple.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection