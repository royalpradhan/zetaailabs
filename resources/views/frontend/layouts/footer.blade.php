<!-- FOOTER SECTION START -->
<footer class="ul-footer">
    <!-- footer top -->
    <div class="ul-footer-top">
        <div class="ul-container">
            <div class="ul-footer-top-contact-infos">
                <!-- single info -->
                <div class="ul-footer-top-logo">
                    <a href="index.php"><img src="{{url('frontend/img/logo.png')}}" alt="logo" width="80px"></a>
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
                        <span class="ul-footer-top-contact-info-label">Call
                            Now</span>
                        <h5 class="ul-footer-top-contact-info-address"><a href="tel:20866660112">+91 93372 87145</a></h5>
                    </div>
                </div>

                <!-- single info -->
                <div class="ul-footer-top-contact-info">
                    <!-- icon -->
                    <div class="ul-footer-top-contact-info-icon"><i class="flaticon-mail"></i></div>
                    <!-- txt -->
                    <div class="ul-footer-top-contact-info-txt">
                        <span class="ul-footer-top-contact-info-label">Email
                            Us</span>
                        <h5 class="ul-footer-top-contact-info-address"><a
                                href="mailto:info@exmple.com">info@zetaailabs.com</a></h5>
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
                    <p class="ul-footer-about-txt">It is a long
                        established fact that a reader will be
                        distracted the road readable content of a page
                        when looking at layout.</p>
                    <a href="contact.php" class="ul-footer-about-btn">Contact us <i class="flaticon-top-right"></i></a>
                </div>

                <div class="ul-footer-widget">
                    <h3 class="ul-footer-widget-title">Our Best
                        Service</h3>

                    <div class="ul-footer-widget-links">
                        <a href="service-details.html">IT Management</a>
                        <a href="service-details.html">SEO
                            Optimization</a>
                        <a href="service-details.html">Web
                            Development</a>
                        <a href="service-details.html">Cyber
                            Security</a>
                        <a href="service-details.html">Data Security</a>
                    </div>
                </div>

                <div class="ul-footer-widget ul-footer-recent-posts">
                    <h3 class="ul-footer-widget-title">Important Quick
                        Link</h3>

                    <div class="ul-footer-widget-links">
                        <a href="about.php">About Us</a>
                        <a href="services.html">Our Services</a>
                        <a href="blog.html">Our Blogs</a>
                        <a href="faq.html">FAQ'S</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>

                <div class="ul-footer-widget ul-nwsltr-widget">
                    <h3 class="ul-footer-widget-title">Contact Us</h3>
                    <div class="ul-footer-widget-links">
                        <span>Monday – Friday : <span class="colored">10am – 6pm</span></span>
                        <span>Saturday : <span class="colored">10am –
                                3pm</span></span>
                    </div>
                    <form action="#" class="ul-nwsltr-form">
                        <div class="top">
                            <input type="email" name="email" id="nwsltr-email" placeholder="Your Email Address"
                                class="ul-nwsltr-input">
                            <button type="submit"><i class="flaticon-next-1"></i></button>
                        </div>

                        <div class="agreement">
                            <label for="nwsltr-agreement" class="ul-checkbox-wrapper">
                                <input type="checkbox" name="agreement" id="nwsltr-agreement" hidden>
                                <span class="ul-checkbox"><i class="flaticon-check-1"></i></span>
                                <span class="ul-checkbox-txt">I agree
                                    with the <a href="#">Privacy
                                        Policy</a></span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer bottom -->
    <div class="ul-container">
        <div class="ul-footer-bottom">
            <div class="ul-footer-bottom-wrapper justify-content-center">
                <p class="copyright-txt">Copyright &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <!-- vector -->
    <div class="ul-footer-vectors">
        <img src="{{url('frontend/img/footer-vector-1.svg')}}" alt="Footer Image" class="ul-footer-vector-1">
        <img src="{{url('frontend/img/footer-vector-2.svg')}}" alt="Footer Image" class="ul-footer-vector-2">
    </div>
</footer>
<!-- FOOTER SECTION END -->

<!-- Modal Popup -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Demo
                    Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="video-container">
                    <video src="your-video.mp4" controls></video>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- libraries JS -->
<script src="{{url('frontend/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/vendor/splide/splide.min.js')}}"></script>
<script src="{{url('frontend/vendor/splide/splide-extension-auto-scroll.min.js')}}"></script>
<script src="{{url('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('frontend/vendor/animate-wow/wow.min.js')}}"></script>
<script src="{{url('frontend/vendor/fslightbox/fslightbox.js')}}"></script>
<script src="{{url('frontend/vendor/scrollspy/simple-scrollspy.min.js')}}"></script>

<!-- custom JS -->
<script src="{{url('frontend/js/main.js')}}"></script>
<script src="{{url('frontend/js/tab.js')}}"></script>
<script src="{{url('frontend/js/accordion.js')}}"></script>
<script src="{{url('frontend/js/progressbar.js')}}"></script>
<script src="{{url('frontend/js/about-tab-1.js')}}"></script>
</body>

</html>