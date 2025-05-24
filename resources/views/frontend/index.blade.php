<!-- START HEADER -->
@extends('frontend.layouts.main')
@section('main-container')
    <!--END HEADER SECTION -->

    <!-- BANNER SECTION START -->
    <section class="ul-banner">
        <div class="ul-banner-container">
            <div class="ul-banner-txt">
                <span class="ul-banner-sub-title">ZETA AI LAB</span>
                <h1 class="ul-banner-title">Empowering your business with trusted IT support,
                    fortified by AI.</h1>
                <a href="services.html" class="ul-banner-btn">Our
                    Services <i class="flaticon-top-right"></i> </a>
            </div>

            <!-- vectors -->
            <div class="ul-banner-vectors">
                <img src="{{url('frontend/img/banner-vector-2.svg')}}" alt="Vector" class="vector-1">
                <img src="{{url('frontend/img/banner-vector-3.svg')}}" alt="Vector" class="vector-2">
            </div>

            <!-- imgs -->
            <div class="ul-banner-slider-wrapper">
                <!-- img slider 1 -->
                <div class="ul-banner-slider swiper" id="ul-banner-slider-1" aria-label="Banner Slider">
                    <div class="swiper-wrapper">
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-1.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-2.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-3.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/service-details.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- img slider 2 -->
                <div class="ul-banner-slider swiper" id="ul-banner-slider-2" aria-label="Banner Slider">
                    <div class="swiper-wrapper">
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-2.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-3.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/service-details.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-1.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- img slider 3 -->
                <div class="ul-banner-slider swiper" id="ul-banner-slider-3" aria-label="Banner Slider">
                    <div class="swiper-wrapper">
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-3.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/service-details.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-1.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-2.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- img slider 4 -->
                <div class="ul-banner-slider swiper" id="ul-banner-slider-4" aria-label="Banner Slider">
                    <div class="swiper-wrapper">
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/service-details.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-1.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-2.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <!-- single img -->
                        <div class="swiper-slide">
                            <div class="ul-banner-img-slide">
                                <img src="{{url('frontend/img/blog-b-3.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- stats -->
            <div class="ul-banner-stats">
                <!-- single stat -->
                <!-- <div class="ul-banner-stat">
                                                                        <span class="ul-banner-stat-number">50K</span>
                                                                        <span class="ul-banner-stat-text">Projects
                                                                            Completes</span>
                                                                    </div>
                                                                     single stat -->
                <!-- <div class="ul-banner-stat">
                                                                        <span class="ul-banner-stat-number">100K</span>
                                                                        <span class="ul-banner-stat-text">Happy
                                                                            Clients</span>
                                                                    </div> -->
                <!-- single stat -->
                <!-- <div class="ul-banner-stat">
                                                                        <span class="ul-banner-stat-number">20</span>
                                                                        <span class="ul-banner-stat-text">Team
                                                                            Members</span>
                                                                    </div> -->
                <!-- single stat -->
                <div class="ul-banner-stat">
                    <a href="https://youtu.be/WUB2pSkwN2M?si=mE9CqwAUIjpYiwGm" data-fslightbox="banner-video"
                        class="ul-banner-stat-btn">
                        <span class="btn-txt">Play Reel</span>
                        <i class="flaticon-play-button-arrowhead"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- WORK PROCESS SECTION START -->
    <section class="ul-work-process ul-section-spacing overflow-hidden">
        <div class="ul-container">
            <div class="ul-section-heading text-center justify-content-center">
                <div class="left">
                    <h2 class="ul-section-title">Our Work Process</h2>
                </div>
            </div>

            <div class="row ul-bs-row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-work-process-row">
                <!-- single process -->
                <div class="col">
                    <div class="ul-work-process-single">
                        <div class="ul-work-process-single-img">
                            <img src="{{url('frontend/img/process-1.jpg')}}" alt="Image">
                            <div class="ul-work-process-single-index"><span>1</span></div>
                        </div>

                        <div class="ul-work-process-single-txt">
                            <h3 class="ul-work-process-single-title">Define
                                Requirements</h3>
                            <p class="ul-work-process-single-descr">We start by understanding your business goals,
                                target audience, and project expectations. This helps us set a clear roadmap and ensure
                                all stakeholders are aligned from the beginning.</p>
                        </div>
                    </div>
                </div>

                <!-- single process -->
                <div class="col">
                    <div class="ul-work-process-single">
                        <div class="ul-work-process-single-img">
                            <img src="{{url('frontend/img/process-2.jpg')}}" alt="Image">
                            <div class="ul-work-process-single-index"><span>2</span></div>
                        </div>

                        <div class="ul-work-process-single-txt">
                            <h3 class="ul-work-process-single-title">Design
                                & Prototyping</h3>
                            <p class="ul-work-process-single-descr">Our team transforms ideas into visual concepts and
                                interactive prototypes. This stage allows us to explore design options, gather feedback,
                                and refine the user experience before development.</p>
                        </div>
                    </div>
                </div>

                <!-- single process -->
                <div class="col">
                    <div class="ul-work-process-single">
                        <div class="ul-work-process-single-img">
                            <img src="{{url('frontend/img/process-3.jpg')}}" alt="Image">
                            <div class="ul-work-process-single-index"><span>3</span></div>
                        </div>

                        <div class="ul-work-process-single-txt">
                            <h3 class="ul-work-process-single-title">Final
                                Solution</h3>
                            <p class="ul-work-process-single-descr">Once the design is approved, we build and test the
                                final product with a focus on performance, security, and scalability. After launch, we
                                provide ongoing support to keep your solution optimized.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WORK PROCESS SECTION END -->
    <!-- ABOUT SECTION START -->
    <section class="ul-about ul-section-spacing">
        <div class="ul-about-container">
            <div class="ul-about-content-wrapper">
                <div class="ul-about-content-nav ul-about-sticky d-none">
                    <a href="#about-tab-1">Problem Solving <i class="flaticon-top-right"></i></a>
                    <a href="#about-tab-2">Our Mission <i class="flaticon-top-right"></i></a>
                    <a href="#about-tab-3">Our Vision <i class="flaticon-top-right"></i></a>
                </div>
                <div class="ul-about-content-tabs">
                    <div class="ul-about-content-tab tab ul-about-sticky" id="about-tab-1">
                        <a href="#about-tab-1" class="tab-sticky-nav">Problem Solving <i class="flaticon-top-right"></i></a>
                        <div class="row row-cols-md-2 row-cols-1 align-items-center">
                            <div class="col">
                                <div class="ul-about-content-tab-img">
                                    <img src="{{url('frontend/img/about-tab-img.png')}}" alt="About Tab Image">
                                </div>
                            </div>
                            <div class="col">
                                <div class="ul-about-content-tab-txt">
                                    <span class="ul-section-sub-title">About
                                        Us</span>
                                    <h2 class="ul-section-title">At Zeta
                                        AI Lab, we design intelligent
                                        software that simplifies
                                        complexity and drives smarter
                                        decisions.</h2>
                                    <p class="ul-about-content-tab-descr">Zeta
                                        AI Lab is a cutting-edge
                                        software company focused on
                                        building intelligent solutions
                                        powered by Artificial
                                        Intelligence, machine learning,
                                        and data science. We help
                                        businesses solve complex
                                        problems, automate processes,
                                        and unlock new possibilities
                                        through innovative and scalable
                                        technologies.</p>

                                    <ul class="ul-about-content-tab-list">
                                        <li>AI-Driven Innovation – We
                                            leverage the power of
                                            artificial intelligence to
                                            create smart, adaptive, and
                                            future-ready solutions.</li>
                                        <li>Real-World Problem Solving –
                                            Our technologies are
                                            designed to solve complex
                                            business challenges with
                                            precision and
                                            efficiency.</li>
                                        <li>Scalable & Smart Software –
                                            We build robust, scalable
                                            systems that grow with your
                                            needs and deliver measurable
                                            impact.</li>
                                    </ul>

                                    <a href="about.blade.php" class="ul-btn ul-btn--2"><span>Know
                                            More</span><i class="flaticon-up-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ul-about-content-tab tab ul-about-sticky" id="about-tab-2">
                        <a href="#about-tab-2" class="tab-sticky-nav">Our Mission <i class="flaticon-top-right"></i></a>
                        <div class="row row-cols-md-2 row-cols-1 align-items-center">
                            <div class="col">
                                <div class="ul-about-content-tab-img">
                                    <img src="{{url('frontend/img/about-tab-img-2.png')}}" alt="About Tab Image">
                                </div>
                            </div>
                            <div class="col">
                                <div class="ul-about-content-tab-txt">
                                    <span class="ul-section-sub-title">Our
                                        Mission</span>
                                    <h2 class="ul-section-title">Empowering
                                        Innovation Through Intelligent
                                        Solutions</h2>
                                    <p class="ul-about-content-tab-descr">Our
                                        mission is to harness the power
                                        of AI and advanced software to
                                        solve real-world challenges,
                                        drive innovation, and create
                                        intelligent solutions that make
                                        technology more accessible,
                                        efficient, and impactful for
                                        everyone.</p>

                                    <ul class="ul-about-content-tab-list">
                                        <li>We develop intelligent
                                            systems that solve complex
                                            problems across industries
                                            with measurable
                                            results.</li>
                                        <li>Our mission is to make
                                            cutting-edge technology
                                            practical, scalable, and
                                            user-focused.</li>
                                        <li>We aim to transform
                                            workflows, boost efficiency,
                                            and enable smarter
                                            decision-making through
                                            AI-driven software.</li>
                                    </ul>

                                    <a href="about.blade.php" class="ul-btn ul-btn--2"><span>Know
                                            More</span><i class="flaticon-up-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ul-about-content-tab tab ul-about-sticky" id="about-tab-3">
                        <a href="#about-tab-2" class="tab-sticky-nav">Our Vision <i class="flaticon-top-right"></i></a>
                        <div class="row row-cols-md-2 row-cols-1 align-items-center">
                            <div class="col">
                                <div class="ul-about-content-tab-img">
                                    <img src="{{url('frontend/img/about-tab-img-3.png')}}" alt="About Tab Image">
                                </div>
                            </div>
                            <div class="col">
                                <div class="ul-about-content-tab-txt">
                                    <span class="ul-section-sub-title">Our Vision</span>
                                    <h2 class="ul-section-title">Empowering Businesses Through Smart Technology</h2>
                                    <p class="ul-about-content-tab-descr">
                                        We envision a future where businesses of all sizes harness the power of
                                        technology to drive innovation, boost efficiency, and stay ahead of the curve.
                                        Our goal is to be the trusted partner that turns digital potential into lasting
                                        success.
                                    </p>
                                    <ul class="ul-about-content-tab-list">
                                        <li>Delivering intelligent, scalable, and secure tech solutions.</li>
                                        <li>Bridging the gap between business needs and digital innovation.</li>
                                        <li>Building long-term partnerships rooted in trust and value.</li>
                                    </ul>
                                    <a href="about.blade.php" class="ul-btn ul-btn--2">
                                        <span>Know More</span>
                                        <i class="flaticon-up-right-arrow"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ul-about-vectors">
                <img src="{{url('frontend/img/about-vector-1.svg')}}" alt class="vector-1">
                <img src="{{url('frontend/img/about-vector-2.png')}}" alt class="vector-2">
            </div>
    </section>
    <!-- ABOUT SECTION END -->
    <!--BRAND SECTION START-->

    <div class="brand-heading-container">
        <h2 class="ul-section-title">Our Clients</h2>
    </div>
    <div class="logos__marquee">
        <div class="marquee__logos"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4234885e4c2e7955fc993c_zendesk.svg"
                width="125" height="24" loading="eager" alt="Zendesk" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f68c5ab2b2bc1f1cce91512_rakuten-logo-black.svg"
                width="100" height="31" loading="eager" alt="Rakuten" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/63601e7de4cee932ead423db_logo-nyt.svg"
                width="222" height="30" loading="eager" alt="" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/614898ff2064cdb3edb45ec0_dell-black.svg"
                width="75" height="25" loading="eager" alt="Dell" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f68c62e7e087c31a302df7b_upwork-black-webclip.svg"
                width="105" height="32" loading="lazy" alt="Upwork" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4b269921bce7314c68055f_Page%201.svg"
                width="130" height="25" loading="eager" alt="Lattice" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/618d7c5ba338e335284bd8ce_logo-pwc.svg"
                width="75" height="57" loading="eager" alt="PWC" class="intro-logos_logo cc-pwc"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4c8b2c574a787655d450ce_getaround.svg"
                width="125" height="30" loading="lazy" alt="Getaround" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f9880bc2c1d2a36c4cd639b_hellosign.svg"
                width="145" height="24" loading="lazy" alt="Hellosign" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f6bac6a70255801a19ae02e_petal-black.svg"
                width="65" height="24" loading="eager" alt="Petal" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/62ed89cc58b878aa2c44aae2_logo-vice.svg"
                width="89" height="28" loading="eager" alt="Vice" class="intro-logos_logo"></div>
        <div class="marquee__logos" aria-hidden="true"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4234885e4c2e7955fc993c_zendesk.svg"
                width="125" height="24" loading="eager" alt="Zendesk" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f68c5ab2b2bc1f1cce91512_rakuten-logo-black.svg"
                width="100" height="31" loading="eager" alt="Rakuten" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/63601e7de4cee932ead423db_logo-nyt.svg"
                width="222" height="30" loading="eager" alt="" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/614898ff2064cdb3edb45ec0_dell-black.svg"
                width="75" height="25" loading="eager" alt="Dell" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f68c62e7e087c31a302df7b_upwork-black-webclip.svg"
                width="105" height="32" loading="lazy" alt="Upwork" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4b269921bce7314c68055f_Page%201.svg"
                width="130" height="25" loading="eager" alt="Lattice" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/618d7c5ba338e335284bd8ce_logo-pwc.svg"
                width="75" height="57" loading="eager" alt="PWC" class="intro-logos_logo cc-pwc"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5d4c8b2c574a787655d450ce_getaround.svg"
                width="125" height="30" loading="lazy" alt="Getaround" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f9880bc2c1d2a36c4cd639b_hellosign.svg"
                width="145" height="24" loading="lazy" alt="Hellosign" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/5f6bac6a70255801a19ae02e_petal-black.svg"
                width="65" height="24" loading="eager" alt="Petal" class="intro-logos_logo"><img
                src="https://assets-global.website-files.com/5d3e265ac89f6a3e64292efc/62ed89cc58b878aa2c44aae2_logo-vice.svg"
                width="89" height="28" loading="eager" alt="Vice" class="intro-logos_logo"></div>
    </div>
    <!--BRAND SECTION END-->
    <!-- OUR TEAM SECTION START -->
    <section class="our_team_sec ul-section-spacing">
        <div class="container">
            <div class="brand-heading-container">
                <h2 class="ul-section-title">Our Team</h2>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend//img/team-1.png')}}" />

                        </div>
                        <div class="box-desc">
                            <h5>Chaitanya Rana </h5>
                            <p>Founder</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/team-2.png')}}" alt="..." />
                        </div>
                        <div class="box-desc">
                            <h5>Nirupama patra</h5>
                            <p>Human Resource</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/team-3.png')}}" alt="..." />
                        </div>
                        <div class="box-desc">
                            <h5>Royal Pradhan</h5>
                            <p>Fullstack Web Devloper</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/team-4.png')}}" alt="..." />
                        </div>
                        <div class="box-desc">
                            <h5>Sangram Sahoo</h5>
                            <p>Web Developer</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/team-5.png')}}" alt="..." />
                        </div>
                        <div class="box-desc">
                            <h5>Nirupama patra</h5>
                            <p>Human Resource</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 my-auto">
                    <div class="box shadow-sm p-4">
                        <div class="image-wrapper mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/team-6.jpg')}}" alt="..." />
                        </div>
                        <div class="box-desc">
                            <h5>Manisha Rathore</h5>
                            <p>Senior android and iOS devloper</p>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <li> <a href="#"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- OUR TEAM SECTION END -->
    <!-- SERVICES SECTION START -->
    <section class="ul-services ul-section-spacing">
        <div class="ul-container">

            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title">Our
                        Services</span>
                    <h2 class="ul-section-title">Empowering You Through Innovation</h2>
                </div>
                <div class="ul-slider-nav ul-services-slider-nav">
                    <button class="prev"><i class="flaticon-back"></i></button>
                    <button class="next"><i class="flaticon-next-1"></i></button>
                </div>
            </div>


            <div class="ul-services-slider swiper overflow-visible">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/custom-web-dev.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Custom Web
                                    development</h3>
                                <p class="ul-service-descr">refers to
                                    the process of designing and
                                    creating tailored websites or web
                                    applications that meet specific
                                    business needs and requirements.
                                </p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/ai.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Mobile devlopment</h3>
                                <p class="ul-service-descr">Zeta AI Labs offers cutting-edge mobile app development
                                    services, specializing in creating high-performance, user-friendly, and scalable
                                    applications for both iOS and Android platforms.</p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/mobile.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Ai powered devlopment</h3>
                                <p class="ul-service-descr">Zeta AI Labs offers cutting-edge mobile app development
                                    services, specializing in creating high-performance, user-friendly, and scalable
                                    applications for both iOS and Android platforms.</p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/cloud.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Cloud computing</h3>
                                <p class="ul-service-descr">Zeta AI Labs provides robust cloud computing services
                                    designed to enhance scalability, flexibility, and security for businesses of all
                                    sizes. </p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/block-chain.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Blockchain</h3>
                                <p class="ul-service-descr">Zeta AI Labs offers secure and efficient blockchain
                                    solutions, including smart contracts, dApp development, and system integration,
                                    enabling transparency, trust, and decentralized control for modern digital
                                    ecosystems. </p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/quality.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Quality assurance</h3>
                                <p class="ul-service-descr">Zeta AI Labs provides comprehensive quality assurance
                                    services to ensure reliable, high-performing, and bug-free digital solutions. Our QA
                                    experts use automated and manual testing to deliver seamless user experiences and
                                    maintain top-tier product standards. </p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ul-service">
                            <div class="ul-service-img">
                                <img src="{{url('frontend/img/deployment.jpg')}}" alt="Image">
                            </div>
                            <div class="ul-service-txt">

                                <h3 class="ul-service-title">Deployment delivery</h3>
                                <p class="ul-service-descr">Zeta AI Labs offers seamless deployment and delivery
                                    services, ensuring smooth transition from development to production. We specialize
                                    in CI/CD pipelines, automated deployments, and environment configuration to deliver
                                    secure, scalable, and reliable digital solutions with minimal downtime.</p>
                                <a href="service-details.html" class="ul-service-btn">Read More <i
                                        class="flaticon-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">Digital Shop</span>
                                                                                        <h3 class="ul-service-title">Woo commerce</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-2.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">CRM solutions</span>
                                                                                        <h3 class="ul-service-title">CRM Solutions</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-3.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">Web Design</span>
                                                                                        <h3 class="ul-service-title">Web Design</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-4.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">Digital Security</span>
                                                                                        <h3 class="ul-service-title">Data Guard Sentinel</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-1.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">Digital Shop</span>
                                                                                        <h3 class="ul-service-title">Woo commerce</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-2.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">CRM solutions</span>
                                                                                        <h3 class="ul-service-title">CRM Solutions</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-3.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="swiper-slide">
                                                                                <div class="ul-service">
                                                                                    <div class="ul-service-txt">
                                                                                        <span class="ul-service-sub-title">Web Design</span>
                                                                                        <h3 class="ul-service-title">Web Design</h3>
                                                                                        <p class="ul-service-descr">Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.</p>
                                                                                        <a href="service-details.html" class="ul-service-btn">Read More <i class="flaticon-right"></i></a>
                                                                                    </div>
                                                                                    <div class="ul-service-img">
                                                                                        <img src="assets/img/service-4.jpg" alt="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div> -->
                </div>
            </div>
        </div>

        <div>
            <div class="ul-services-vector"></div>
            <div class="ul-services-vector vector-2"></div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->
    <!--SPECILITY AREA-->
    <section class="ul-section-wrapper">
        <div class="ul-section-heading">
            <div class="left">
                <span class="ul-section-sub-title">Our Milestones</span>
                <p class="d-none d-lg-block text-secondary fs-14">
                    With years of experience and a dedicated team, we deliver exceptional designs built on quality,
                    creativity, and client trust.
                </p>
            </div>
        </div>
    </section>

    <div class="eb-wrapper-outer">
        <div class="eb-wrapper-inner">
            <div class="eb-wrapper-inner-blocks">
                <div class="eb-row-inner" id="counter_section">

                    <!-- Counter 1 -->
                    <div class="wp-block-essential-blocks-column">
                        <div class="eb-counter-wrapper eb__animated eb__fadeInLeft">
                            <div class="icon-img-wrapper">
                                <img class="eb-counter-image"
                                    src="https://static.live.templately.com/woocommerce/2022/03/count-icon-01.png"
                                    alt="Donations Icon">
                            </div>
                            <div class="counter-contents-wrapper">
                                <h4 class="eb-counter-number">
                                    <span class="eb-counter" data-duration="1000" data-startvalue="0" data-target="1250"
                                        data-separator="," data-isshowseparator="false">1250</span>+
                                </h4>
                                <h3 class="eb-counter-title">Donations</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 2 -->
                    <div class="wp-block-essential-blocks-column">
                        <div class="eb-counter-wrapper eb__animated eb__fadeInUp">
                            <div class="icon-img-wrapper">
                                <img class="eb-counter-image"
                                    src="https://static.live.templately.com/woocommerce/2022/03/count-icon-02.png"
                                    alt="Projects Icon">
                            </div>
                            <div class="counter-contents-wrapper">
                                <h4 class="eb-counter-number">
                                    <span class="eb-counter" data-duration="1000" data-startvalue="0" data-target="36"
                                        data-separator="," data-isshowseparator="false">36</span>+
                                </h4>
                                <h3 class="eb-counter-title">Total Projects</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 3 -->
                    <div class="wp-block-essential-blocks-column">
                        <div class="eb-counter-wrapper eb__animated eb__fadeInUp">
                            <div class="icon-img-wrapper">
                                <img class="eb-counter-image"
                                    src="https://static.live.templately.com/woocommerce/2022/03/count-icon-03.png"
                                    alt="Volunteers Icon">
                            </div>
                            <div class="counter-contents-wrapper">
                                <h4 class="eb-counter-number">
                                    <span class="eb-counter" data-duration="1000" data-startvalue="0" data-target="85"
                                        data-separator="," data-isshowseparator="false">85</span>+
                                </h4>
                                <h3 class="eb-counter-title">Volunteers</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 4 -->
                    <div class="wp-block-essential-blocks-column">
                        <div class="eb-counter-wrapper eb__animated eb__fadeInRight">
                            <div class="icon-img-wrapper">
                                <img class="eb-counter-image"
                                    src="https://static.live.templately.com/woocommerce/2022/03/count-icon-04.png"
                                    alt="Support Icon">
                            </div>
                            <div class="counter-contents-wrapper">
                                <h4 class="eb-counter-number">
                                    <span class="eb-counter" data-duration="1000" data-startvalue="0" data-target="150"
                                        data-separator="," data-isshowseparator="false">150</span>+
                                </h4>
                                <h3 class="eb-counter-title">Supporters</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--SPECILITY AREA END-->
    <!-- CONTACT US  SECTION -->
    <section class="automation-banner">
        <h2>Does your business need automation??</h2>
        <a href="#" class="contact-btn">
            <i class="fas fa-phone"></i> Contact us
        </a>
    </section>

    <!-- REVIEW SECTION START -->
    <section class="ul-reviews-2 ul-section-spacing">
        <div class="ul-reviews-2-container">
            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title">Testimonial</span>
                    <h2 class="ul-2-section-title mb-0">People Love
                        us</h2>
                </div>

                <div class="right">
                    <div class="ul-reviews-2-slider-nav ul-slider-nav">
                        <button class="prev"><i class="flaticon-back"></i></button>
                        <button class="next"><i class="flaticon-next-1"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper ul-reviews-2-slider">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review-2">
                            <div class="ul-review-quotation-icon flex-shrink-0">
                                <img src="{{url('frontend/img/quote-icon-2.svg')}}" alt="quotaion-icon">
                            </div>
                            <div class="right">
                                <p class="ul-review-txt">“Collaborating with your team on the Prana Group project was
                                    seamless. From planning to execution, every detail was handled with care and
                                    professionalism. <br />Great Experience !!!”</p>

                                <div class="ul-review-reviewer-info">
                                    <h3 class="ul-review-reviewer-name">Robert Kingsley</h3>
                                    <h4 class="ul-review-reviewer-role">CEO,
                                        Prana Group (USA)</h4>
                                    <div class="ul-review-rating">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                    </div>
                                </div>

                                <div class="rvw_btn ul-btn">
                                    <button type="button" class data-bs-toggle="modal" data-bs-target="#videoModal">
                                        Watch Review Video
                                    </button>
                                </div>

                                <div class="ul-review-reviewer-img">
                                    <img src="{{url('frontend/img/user.jpg')}}" alt="Reviewer Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review-2">
                            <div class="ul-review-quotation-icon flex-shrink-0">
                                <img src="{{url('frontend/img/quote-icon-2.svg')}}" alt="quotaion-icon">
                            </div>
                            <div class="right">
                                <p class="ul-review-txt">“The experience working with you on the TEM Institute platform
                                    exceeded expectations. The application was delivered on time, with excellent
                                    functionality and clean design.”</p>

                                <div class="ul-review-reviewer-info">
                                    <h3 class="ul-review-reviewer-name"> Momar,</h3>
                                    <h4 class="ul-review-reviewer-role">Director, TEM Institute (France)</h4>
                                    <div class="ul-review-rating">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                    </div>
                                </div>
                                <div class="rvw_btn ul-btn">
                                    <button type="button" class data-bs-toggle="modal" data-bs-target="#videoModal">
                                        Watch Review Video
                                    </button>
                                </div>

                                <div class="ul-review-reviewer-img">
                                    <img src="{{url('frontend/img/user-3.jpg')}}" alt="Reviewer Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review-2">
                            <div class="ul-review-quotation-icon flex-shrink-0">
                                <img src="{{url('frontend/img/quote-icon-2.svg')}}" alt="quotaion-icon">
                            </div>
                            <div class="right">
                                <p class="ul-review-txt">“Your team’s dedication to building the Star Application was
                                    impressive. You understood the requirements quickly and built a robust, we can proudly
                                    present <br /> to our users.”</p>

                                <div class="ul-review-reviewer-info">
                                    <h3 class="ul-review-reviewer-name">Bernard</h3>
                                    <h4 class="ul-review-reviewer-role">Product Manager, <br />Star Application (USA)</h4>
                                    <div class="ul-review-rating">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                    </div>
                                </div>
                                <div class="rvw_btn ul-btn">
                                    <button type="button" class data-bs-toggle="modal" data-bs-target="#videoModal">
                                        Watch Review Video
                                    </button>
                                </div>

                                <div class="ul-review-reviewer-img">
                                    <img src="{{url('frontend/img/user-5.jpg')}}" alt="Reviewer Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="ul-review-2">
                            <div class="ul-review-quotation-icon flex-shrink-0">
                                <img src="{{url('frontend/img/quote-icon-2.svg')}}" alt="quotaion-icon">
                            </div>
                            <div class="right">
                                <p class="ul-review-txt">"Smooth process, clear communication, and the end result was
                                    perfect. Highly responsive team with great technical skills. Creative, reliable, and a
                                    pleasure to work with.
                                    <br /> ThankYou!!! "
                                </p>

                                <div class="ul-review-reviewer-info">
                                    <h3 class="ul-review-reviewer-name">Cameron
                                        Williamson</h3>
                                    <h4 class="ul-review-reviewer-role">CEO,
                                        PlexDesign</h4>
                                    <div class="ul-review-rating">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                    </div>
                                </div>
                                <div class="rvw_btn ul-btn">
                                    <button type="button" class data-bs-toggle="modal" data-bs-target="#videoModal">
                                        Watch Review Video
                                    </button>
                                </div>
                                <div class="ul-review-reviewer-img">
                                    <img src="{{url('frontend/img/user-3.jpg')}}" alt="Reviewer Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REVIEW SECTION END -->
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".eb-counter");

            const animateCounter = (counter) => {
                const startValue = parseInt(counter.getAttribute("data-startvalue")) || 0;
                const targetValue = parseInt(counter.getAttribute("data-target"));
                const duration = parseInt(counter.getAttribute("data-duration")) || 1000;
                const increment = Math.ceil(targetValue / (duration / 16)); // assuming ~60fps

                let currentValue = startValue;

                const updateCounter = () => {
                    currentValue += increment;
                    if (currentValue >= targetValue) {
                        currentValue = targetValue;
                        clearInterval(timer);
                    }
                    counter.innerText = currentValue;
                };

                const timer = setInterval(updateCounter, 16); // ~60fps
            };

            const isInViewport = (el) => {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            };

            const handleScroll = () => {
                counters.forEach(counter => {
                    if (counter.dataset.animated !== "true" && isInViewport(counter)) {
                        animateCounter(counter);
                        counter.dataset.animated = "true"; // prevent re-animation
                    }
                });
            };

            // Run on scroll and once on load
            window.addEventListener("scroll", handleScroll);
            handleScroll(); // in case they’re already in view on load
        });
    </script>


    <!-- FOOTER SECTION START HERE -->
    <!-- Start Footer -->
@endsection
<!--End Main Footer -->