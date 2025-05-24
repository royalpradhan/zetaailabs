@extends('frontend.layouts.main')
@section('main-container')
 <!-- HEADER SECTION END -->

<main>
        <!-- BREADCRUMBS SECTION START -->
        <section class="ul-breadcrumb ul-section-spacing">
            <div class="ul-container">
                <ul class="ul-breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><span class="separator"><i class="flaticon-right"></i></span></li>
                    <li>Project Details</li>
                </ul>
                <h2 class="ul-breadcrumb-title">Project Details</h2>
            </div>
        </section>
        <!-- BREADCRUMBS SECTION END -->


        <div class="ul-container ul-section-spacing overflow-hidden">
            <div class="ul-project-details-img-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/img/project-details-img.jpg" alt="Image">
                        </div>
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/img/project-details-img.jpg" alt="Image">
                        </div>
                    </div>
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/img/project-details-img.jpg" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="ul-project-details-slider-nav ul-slider-nav">
                    <button class="prev"><i class="flaticon-back"></i></button>
                    <button class="next"><i class="flaticon-next-1"></i></button>
                </div>
            </div>

            <div class="row gx-4 gy-4 flex-column-reverse flex-lg-row">
                <!-- event details content -->
                <div class="col-lg-8">
                    <div class="ul-service-details-txt">
                        <h2 class="ul-project-details-title">Web Development</h2>
                        <p class="ul-project-details-descr">Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget potenti vestibulum is cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus.Lectus ve pellentesque a cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit mauris ad to elementum fringilla facilisi volutpat fusce pharetra.</p>
                        <p>Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget potenti vestibulum is cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus.Lectus ve pellentesque a cras posuere tempor facilisi habitant lectus rutrum pede . Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget potenti vestibulum is cras.</p>
                        <h3 class="ul-project-details-inner-title">Challenge & Solution </h3>
                        <p class="ul-project-details-descr">Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients. Netus lorem rutrum arcu dignissim at sit morbi nascetur eget potenti vestibulum is cras. Tempor nonummy metus lobortis. Sociis v, dapibus.Lepellentesque a cras posuere tempor facilisi habitant lectus rutrum pede .</p>
                        <h3 class="ul-project-details-inner-title">Final Result</h3>
                        <p class="ul-project-details-descr">For almost 50 years Leighton Asia, one of the region’s largest and most respected companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton.</p>
                    </div>
                </div>

                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="ul-project-details-infos">
                        <h4 class="ul-project-details-infos-title">Project Information</h4>
                        <ul class="ul-project-details-infos-list">
                            <li><span class="key">Category</span>:<span class="value">Business, Marketing</span></li>
                            <li><span class="key">Author</span>:<span class="value">Athena Jones</span></li>
                            <li><span class="key">Start Date</span>:<span class="value">1 January 2025</span></li>
                            <li><span class="key">End Date</span>:<span class="value">20 May 2025</span></li>
                        </ul>

                        <div class="ul-footer-socials ul-project-details-infos-shares">
                            <a href="#"><i class="flaticon-facebook-app-symbol"></i></a>
                            <a href="#"><i class="flaticon-twitter-1"></i></a>
                            <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ul-project-details-nav">
                <a href="project-details.html"><i class="flaticon-back"></i> <span>Previous Project</span></a>
                <a href="project-details.html"><i class="flaticon-next-1"></i> <span>Next Project</span></a>
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

        <!-- footer middle -->
        <div class="ul-footer-middle">
            <div class="ul-container">
                <div class="ul-footer-middle-wrapper wow animate__fadeInUp">
                    <div class="ul-footer-about">
                        <h3 class="ul-footer-widget-title">About Us</h3>
                        <p class="ul-footer-about-txt">It is a long established fact that a reader will be distracted the road readable content of a page when looking at layout.</p>
                        <a href="contact.html" class="ul-footer-about-btn">Contact us <i class="flaticon-top-right"></i></a>
                    </div>

                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">Our Best Service</h3>

                        <div class="ul-footer-widget-links">
                            <a href="service-details.html">IT Management</a>
                            <a href="service-details.html">SEO Optimization</a>
                            <a href="service-details.html">Web Development</a>
                            <a href="service-details.html">Cyber Security</a>
                            <a href="service-details.html">Data Security</a>
                        </div>
                    </div>

                    <div class="ul-footer-widget ul-footer-recent-posts">
                        <h3 class="ul-footer-widget-title">Important Quick Link</h3>

                        <div class="ul-footer-widget-links">
                            <a href="about.html">About Us</a>
                            <a href="services.html">Our Services</a>
                            <a href="blog.html">Our Blogs</a>
                            <a href="faq.html">FAQ'S</a>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>

                    <div class="ul-footer-widget ul-nwsltr-widget">
                        <h3 class="ul-footer-widget-title">Contact Us</h3>
                        <div class="ul-footer-widget-links">
                            <span>Monday – Friday : <span class="colored">8am – 4pm</span></span>
                            <span>Saturday : <span class="colored">8am – 12am</span></span>
                        </div>
                        <form action="#" class="ul-nwsltr-form">
                            <div class="top">
                                <input type="email" name="email" id="nwsltr-email" placeholder="Your Email Address" class="ul-nwsltr-input">
                                <button type="submit"><i class="flaticon-next-1"></i></button>
                            </div>

                            <div class="agreement">
                                <label for="nwsltr-agreement" class="ul-checkbox-wrapper">
                                    <input type="checkbox" name="agreement" id="nwsltr-agreement" hidden>
                                    <span class="ul-checkbox"><i class="flaticon-check-1"></i></span>
                                    <span class="ul-checkbox-txt">I agree with the <a href="#">Privacy Policy</a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 @endsection