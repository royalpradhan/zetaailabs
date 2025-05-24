<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZETA AI LAB</title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="{{url('frontend/icon/flaticon_digicom.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/splide/splide.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/animate-wow/animate.min.css')}}">

    <!-- custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index.blade.php">
                    <img src="{{url('frontend/img/logo.png')}}" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close-1"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

        <!-- sidebar footer -->
        <div class="ul-sidebar-footer">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="#"><i class="flaticon-facebook"></i></a>
                <a href="#"><i class="flaticon-twitter"></i></a>
                <a href="#"><i class="flaticon-instagram"></i></a>
                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR SECTION END -->

    <!-- SEARCH MODAL SECTION START -->
    <!-- <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close-1"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div> -->
    <!-- SEARCH MODAL SECTION END -->

    <!-- HEADER SECTION START -->
    <header class="ul-header">
        <div class="ul-header-bottom to-be-sticky wow animate__slideInDown">
            <div class="ul-header-bottom-wrapper ">
                <div class="ul-header-container">
                    <div class="logo-container d-flex justify-content-center align-items-center ">
                        <a href="{{url('/')}}" class="d-inline-block"><img src="{{url('frontend/img/logo.png')}}" alt="logo"
                                class="logo"></a>
                        <a href="index.blade.php">
                            <h3 class="logo_text pl-3">AI
                                LABS</h3>
                        </a>
                    </div>

                    <div class="ul-header-bottom-right">
                        <!-- header nav -->
                        <div class="ul-header-nav-wrapper">
                            <div class="to-go-to-sidebar-in-mobile">
                                <nav class="ul-header-nav">
                                    <div class="has-sub-menu active">
                                        <a role="button">Home</a>

                                        <div class="ul-header-submenu">
                                            <ul>
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <!-- <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{url('/about')}}">About</a>
                                    <div class="has-sub-menu">
                                        <a role="button">Services</a>

                                        <div class="ul-header-submenu">
                                            <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="service-details.html">Service
                                                        Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="has-sub-menu">
                                        <a role="button">Pages</a>

                                        <div class="ul-header-submenu">
                                            <ul>
                                                <li><a href="projects.html">Projects</a></li>
                                                <li><a href="project-details.html">Project
                                                        Details</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team
                                                        Member
                                                        Details</a></li>
                                                <li><a href="pricing.html">Pricing
                                                        Plans</a></li>
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
                                                <li><a href="blog-2.html">Blogs
                                                        Layout 2</a></li>
                                                <li><a href="blog-details.html">Blog
                                                        Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{url('/contact')}}">Contact</a>
                                </nav>
                            </div>
                        </div>

                        <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                        <a href="contact.blade.php" class="ul-btn d-sm-inline-flex d-xxs-none"><span>Get
                                in Touch <i class="flaticon-top-right"></i></span></a>
                        <button class="ul-header-sidebar-opener d-lg-none d-inline-flex"><i
                                class="flaticon-right-arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".ul-header-bottom");

            if (window.scrollY > 50) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        });
    </script>

    <!-- HEADER SECTION END -->