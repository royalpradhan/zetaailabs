<!-- START HEADER -->
@extends('frontend.layouts.main')
@section('main-container')
<!--END HEADER SECTION-- >
<!-- BREADCRUMBS SECTION START -->
<section class="ul-breadcrumb ul-section-spacing">
    <div class="ul-container">
        <ul class="ul-breadcrumb-nav">
            <li> <a href="{{url('/')}}" >Home</a></li>
            <li><span class="separator"><i class="flaticon-right"></i></span></li>
            <li>About Us</li>
        </ul>
        <h2 class="ul-breadcrumb-title">About Us</h2>
    </div>
</section>
<!-- BREADCRUMBS SECTION END -->
<!-- ABOUT SECTION START -->
<!-- <section class="ul-inner-about ul-section-spacing pb-0 wow animate__fadeInUp">
        <div class="ul-container">
            txt -->
<!-- <div class="row row-cols-md-2 row-cols-1 align-items-start gy-4 ul-inner-about-row">
                <div class="col">
                    <div class="ul-inner-about-txt-left">
                        <span class="ul-section-sub-title">About us</span>
                        <h2 class="ul-section-title">Expertise That Drives Digital Success</h2>

                        <div class="ul-inner-about-stats">
                            <div class="ul-inner-about-stat">
                                <h3 class="stat-number">+98%</h3>
                                <p class="stat-text">By optimizing your website for search engines.</p>
                            </div>
                            <div class="ul-inner-about-stat">
                                <h3 class="stat-number">+67%</h3>
                                <p class="stat-text">Rise in revenue as more visitors convert into paying.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ul-inner-about-points">
                        <div class="ul-inner-about-point">
                            <img src="assets/img/about-point-icon-1.png" alt="Icon" class="ul-inner-about-point-icon">
                            <div>
                                <h4 class="ul-inner-about-point-title">Community & Industry Involvement</h4>
                                <p class="ul-inner-about-point-descr">Our e-commerce solutions are designed to create
                                    seamless online shopping experiences. From user-friendly website design to secure
                                    payment processing and inventory management.</p>
                            </div>
                        </div>
                        <div class="ul-inner-about-point">
                            <img src="assets/img/about-point-icon-2.png" alt="Icon" class="ul-inner-about-point-icon">
                            <div>
                                <h4 class="ul-inner-about-point-title">Awards & Recognition</h4>
                                <p class="ul-inner-about-point-descr">Our e-commerce solutions are designed to create
                                    seamless online shopping experiences. From user-friendly website design to secure
                                    payment processing and inventory management.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="ul-inner-about-img">
                <img src="assets/img/about-img.jpg" alt="Image">
            </div>
        </div>
    </section> -->
<section class="things-differently gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="heading">
                    <h6>We Dream Digital</h6>
                    <h2>We do<br>things differently</h2>
                    <img alt="line" src="{{url('frontend/img/headingline.png')}}">
                    <img alt="dots" class="dots" src="{{url('frontend//img/dots.png')}}">
                </div>
            </div>
            <div class="col-xl-5">
                <div class="signature">
                    <p>
                        At our core, we believe in transforming ideas into impactful digital experiences. We don’t just
                        build websites or apps — we craft solutions that connect, inspire, and drive results. Our
                        process blends creativity, technology, and strategy to help brands stand out in a crowded
                        digital landscape.
                        <br><br>
                        From seamless user experiences to innovative design and scalable development, we partner with
                        our clients every step of the way. Whether you're launching a new brand, reimagining your online
                        presence, or scaling your digital infrastructure — we're here to make it happen, differently.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="hoverstyle">
    <figure>
        <img alt="img" class="w-100" src="{{url('frontend//img/about.jpg')}}">
    </figure>
</div>
<!-- ABOUT SECTION END -->
<!-- WORK PROCESS SECTION START -->
<section class="ul-work-process ul-section-spacing overflow-hidden wow animate__fadeInUp">
    <div class="ul-container">
        <div class="ul-section-heading text-center justify-content-center">
            <div class="left">
                <span class="ul-section-sub-title">Work Process</span>
                <h2 class="ul-section-title">Our Development Process</h2>
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
                        <h3 class="ul-work-process-single-title">Define Requirements</h3>
                        <p class="ul-work-process-single-descr">In a free hour, when our power of choice is
                            untrammelled and when nothing prevents dolor sit amet, consectetur</p>
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
                        <h3 class="ul-work-process-single-title">Design & Prototyping</h3>
                        <p class="ul-work-process-single-descr">In a free hour, when our power of choice is
                            untrammelled and when nothing prevents dolor sit amet, consectetur</p>
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
                        <h3 class="ul-work-process-single-title">Final Solution</h3>
                        <p class="ul-work-process-single-descr">In a free hour, when our power of choice is
                            untrammelled and when nothing prevents dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WORK PROCESS SECTION END -->
<!--WE DELIVER SECTION START-->
<section class="we-deliver-results gap" style="background-color: #f2edf5;">
    <div class="container">
        <div class="heading two">
            <h2>We Deliver Results</h2>
            <img alt="line" src="{{url('frontend/img/headingline.png')}}">
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m33 19v-2h3v-3c0-1.654-1.346-3-3-3h-2c-.552 0-1-.449-1-1v-1h3c.552 0 1 .449 1 1h2c0-1.654-1.346-3-3-3v-2h-2v2h-3v3c0 1.654 1.346 3 3 3h2c.552 0 1 .449 1 1v1h-3c-.552 0-1-.449-1-1h-2c0 1.654 1.346 3 3 3v2z">
                            </path>
                            <path
                                d="m62.618 47-5-10h-13.974c2.044-1.651 3.356-4.174 3.356-7v-1h-7c-2.826 0-5.349 1.312-7 3.356v-9.406c5.598-.508 10-5.222 10-10.95 0-6.065-4.935-11-11-11s-11 4.935-11 11c0 5.728 4.402 10.442 10 10.949v5.406c-1.651-2.043-4.174-3.355-7-3.355h-7v1c0 4.962 4.037 9 9 9h5v2h-1.382-3.236-20l-5 10h3.618v16h52v-16zm-36.618-14c-3.521 0-6.442-2.612-6.929-6h4.929c3.521 0 6.442 2.612 6.929 6zm14-2h4.929c-.486 3.388-3.408 6-6.929 6h-4.929c.487-3.388 3.408-6 6.929-6zm-17-19c0-4.962 4.037-9 9-9s9 4.038 9 9-4.037 9-9 9-9-4.038-9-9zm8 27h7 18.382l3 6h-26.764l-3-6zm-23.382 0h18.764l-3 6h-18.764zm-.618 8h17.618l2.382-4.764v18.764h-20zm48 14h-26v-18.764l2.382 4.764h23.618z">
                            </path>
                            <path d="m53 53h-15v6h15zm-2 4h-11v-2h11z"></path>
                            <path d="m9 53h2v2h-2z"></path>
                            <path d="m9 57h2v2h-2z"></path>
                            <path d="m9 49h2v2h-2z"></path>
                            <path
                                d="m49 33h2v-19h-2.233l4.233-7.056 4.233 7.056h-2.233v9h2v-7h3.767l-7.767-12.944-7.767 12.944h3.767z">
                            </path>
                            <path d="m55 25h2v2h-2z"></path>
                            <path d="m55 29h2v2h-2z"></path>
                            <path
                                d="m6 23h2v-9h-2.233l4.233-7.056 4.233 7.056h-2.233v19h2v-17h3.767l-7.767-12.944-7.767 12.944h3.767z">
                            </path>
                            <path d="m6 25h2v2h-2z"></path>
                            <path d="m6 29h2v2h-2z"></path>
                            <path d="m46 41h2v2h-2z"></path>
                            <path d="m50 41h2v2h-2z"></path>
                            <path d="m54 41h2v2h-2z"></path>
                            <path d="m8 41h2v2h-2z"></path>
                            <path d="m12 41h2v2h-2z"></path>
                            <path d="m16 41h2v2h-2z"></path>
                        </svg>
                    </i>
                    <h4>Performance Marketing</h4>
                    <p>
                        ROI-focused strategies using data-driven ads and real-time optimization to boost traffic and
                        conversions.
                    </p>


                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg id="Ecommerce" enable-background="new 0 0 48 48" height="512" viewBox="0 0 48 48"
                            width="512" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m25 7.03c0-.552-.447-1-1-1-5.514 0-10 4.486-10 10 0 .552.447 1 1 1s1-.448 1-1c0-4.411 3.589-8 8-8 .553 0 1-.448 1-1z">
                                </path>
                                <path
                                    d="m22.246 45.79h1.754 1.754c1.652 0 2.999-1.345 3-3v-1.099c1.032-.475 1.755-1.512 1.755-2.721v-3.72c.176-.382.281-.802.281-1.25 0-1.016.226-2 .671-2.927.441-.919 1.086-1.752 1.864-2.409 3.746-3.165 5.709-7.989 5.25-12.909-.7-7.375-6.813-13.189-14.265-13.525l-.31-.01-.354.011c-7.408.335-13.521 6.149-14.222 13.526-.458 4.917 1.505 9.742 5.251 12.906.778.658 1.423 1.491 1.864 2.41.445.927.671 1.911.671 2.927 0 .447.105.868.281 1.25v3.721c0 1.209.722 2.247 1.755 2.721v1.1c.001 1.653 1.348 2.998 3 2.998zm4.508-3c0 .552-.449 1-1 1h-1.754-1.754c-.551 0-1-.449-1-1v-.82h2.754 2.754zm1.755-3.819c0 .551-.448 1-1 1h-3.509-3.509c-.552 0-1-.449-1-1v-2.068c.232.058.47.097.719.097h3.79 3.79c.249 0 .487-.039.719-.097zm-9.299-4.971c0-1.318-.292-2.595-.868-3.793-.563-1.171-1.385-2.233-2.376-3.071-3.247-2.742-4.948-6.926-4.551-11.191.607-6.389 5.903-11.426 12.275-11.715l.31-.01.265.009c6.417.29 11.713 5.327 12.319 11.714.398 4.267-1.303 8.451-4.55 11.193-.991.838-1.813 1.9-2.376 3.071-.576 1.198-.868 2.475-.868 3.793 0 .551-.448 1-1 1h-3.79-3.79c-.552 0-1-.449-1-1z">
                                </path>
                            </g>
                        </svg>
                    </i>
                    <h4>Creative Concepts &amp; Ideas</h4>
                    <p>
                        We craft fresh, smart ideas that make your brand stand out. From catchy visuals to unique
                        messages, we help bring creativity .
                    </p>


                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 60.07 60.07" style="enable-background:new 0 0 60.07 60.07;"
                            xml:space="preserve">
                            <path d="M59.921,27.964C58.908,13.099,46.934,1.124,32.068,0.11L31,0.038v28.994h28.994L59.921,27.964z M33,27.032V2.199
                    c2.475,0.265,4.854,0.859,7.097,1.732c-0.004,0.035-0.02,0.065-0.02,0.101c0,0.552,0.448,1,1,1c0.301,0,0.562-0.14,0.746-0.35
                    c4.937,2.317,9.089,6.035,11.952,10.637c-0.18-0.177-0.426-0.287-0.698-0.287c-0.552,0-1,0.448-1,1s0.448,1,1,1s1-0.448,1-1
                    c0-0.129-0.029-0.25-0.073-0.363c0.512,0.85,0.969,1.735,1.39,2.64c-0.193,0.182-0.317,0.437-0.317,0.723c0,0.552,0.448,1,1,1
                    c0.021,0,0.039-0.011,0.061-0.012c0.855,2.218,1.434,4.569,1.696,7.012H33z"></path>
                            <path d="M31.318,31.032l20.097,20.097l0.706-0.766c4.618-5.008,7.415-11.494,7.876-18.263l0.073-1.068H31.318z M51.343,48.229
                    L36.146,33.032h21.762C57.308,38.616,55.007,43.942,51.343,48.229z"></path>
                            <circle cx="35.076" cy="4.032" r="1"></circle>
                            <circle cx="35.076" cy="10.032" r="1"></circle>
                            <circle cx="38.076" cy="7.032" r="1"></circle>
                            <circle cx="44.076" cy="7.032" r="1"></circle>
                            <circle cx="41.076" cy="10.032" r="1"></circle>
                            <circle cx="47.076" cy="10.032" r="1"></circle>
                            <circle cx="50.076" cy="13.032" r="1"></circle>
                            <circle cx="38.076" cy="13.032" r="1"></circle>
                            <circle cx="44.076" cy="13.032" r="1"></circle>
                            <circle cx="50.076" cy="19.032" r="1"></circle>
                            <circle cx="53.076" cy="22.032" r="1"></circle>
                            <circle cx="35.076" cy="16.032" r="1"></circle>
                            <circle cx="35.076" cy="22.032" r="1"></circle>
                            <circle cx="38.076" cy="19.032" r="1"></circle>
                            <circle cx="44.076" cy="19.032" r="1"></circle>
                            <circle cx="41.076" cy="16.032" r="1"></circle>
                            <circle cx="47.076" cy="16.032" r="1"></circle>
                            <circle cx="41.076" cy="22.032" r="1"></circle>
                            <circle cx="47.076" cy="22.032" r="1"></circle>
                            <circle cx="56.076" cy="25.032" r="1"></circle>
                            <circle cx="50.076" cy="25.032" r="1"></circle>
                            <circle cx="38.076" cy="25.032" r="1"></circle>
                            <circle cx="44.076" cy="25.032" r="1"></circle>
                            <path d="M29,0.038L27.932,0.11C12.269,1.179,0,14.321,0,30.032c0,7.239,2.621,14.233,7.38,19.695l0.704,0.808L29,29.618V0.038z
                     M27,28.79L8.199,47.591C4.194,42.623,2,36.43,2,30.032C2,15.729,12.896,3.705,27,2.199V28.79z">
                            </path>
                            <path d="M9.498,51.948l0.808,0.704c5.461,4.759,12.456,7.38,19.694,7.38c6.927,0,13.687-2.425,19.037-6.826l0.851-0.7
                    L29.414,32.032L9.498,51.948z M29.414,34.86l1.101,1.101L13.707,52.768c-0.426-0.306-0.856-0.604-1.266-0.934L29.414,34.86z
                     M21.198,56.592c-0.695-0.231-1.379-0.491-2.053-0.776l15.613-15.613l1.414,1.414L21.198,56.592z M37.586,43.032L39,44.446
                    L25.756,57.691c-0.795-0.122-1.583-0.277-2.362-0.467L37.586,43.032z M17.219,54.914c-0.616-0.316-1.218-0.657-1.81-1.019
                    l16.52-16.52l1.415,1.415L17.219,54.914z M28.315,57.96l12.099-12.1l1.414,1.414L31.117,57.986
                    c-0.372,0.015-0.743,0.046-1.117,0.046C29.436,58.032,28.876,57.994,28.315,57.96z M43.242,48.689l1.415,1.415l-6.763,6.763
                    c-1.2,0.354-2.419,0.639-3.659,0.83L43.242,48.689z M42.56,55.029l3.512-3.512l0.828,0.828
                    C45.536,53.38,44.077,54.266,42.56,55.029z"></path>
                        </svg>
                    </i>
                    <h4>Branding</h4>
                    <p>
                        We build bold brand identities that connect and stick — from logo to voice, everything tells
                        your story.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" id="Слой_1" data-name="Слой 1" viewBox="0 0 128 128"
                            width="512" height="512">
                            <path
                                d="M14,50c.4,0,.79,0,1.18-.06L16,54.38A2,2,0,0,0,20,53.62L19.08,49a14,14,0,0,0,8.28-17.22L54.21,18.92a12.15,12.15,0,0,0,2.18,2.35l-22,31.59a2,2,0,0,0,3.28,2.28L59.89,23.26a11.29,11.29,0,0,0,2.11.56V41a2,2,0,0,0,4,0V23.82a11.29,11.29,0,0,0,2.11-.56L90.36,55.14a2,2,0,1,0,3.28-2.28l-22-31.59a12.15,12.15,0,0,0,2.18-2.35l26.85,12.89A14,14,0,0,0,108.92,49L108,53.62a2,2,0,1,0,3.92.76l.86-4.44c.39,0,.78.06,1.18.06a14,14,0,1,0-11.62-21.8L75.52,15.31A11.67,11.67,0,0,0,76,12a12,12,0,0,0-24,0,11.67,11.67,0,0,0,.48,3.31L25.62,28.2A14,14,0,1,0,14,50ZM114,26a10,10,0,1,1-10,10A10,10,0,0,1,114,26ZM64,4a8,8,0,1,1-8,8A8,8,0,0,1,64,4ZM14,26A10,10,0,1,1,4,36,10,10,0,0,1,14,26Z">
                            </path>
                            <path
                                d="M110.71,94.45A12.67,12.67,0,0,0,116,84V67a6.85,6.85,0,0,0-7-7H96a6.85,6.85,0,0,0-7,7V84a12.65,12.65,0,0,0,5.24,10.41,24.91,24.91,0,0,0-3.78,1.66,2,2,0,1,0,1.92,3.51A20.9,20.9,0,0,1,102.51,97C114.16,97,124,107.08,124,119a2,2,0,0,0,4,0A26.37,26.37,0,0,0,110.71,94.45ZM93,67a2.84,2.84,0,0,1,3-3h13a2.84,2.84,0,0,1,3,3v5H93Zm0,17V76h19v8c0,5.13-4.08,9-9.49,9S93,89.13,93,84Z">
                            </path>
                            <path
                                d="M34.86,99.26a2,2,0,0,0,1.81-3.57c-.48-.25-2.44-1.08-2.94-1.26A12.65,12.65,0,0,0,39,84V67a6.85,6.85,0,0,0-7-7H19a6.85,6.85,0,0,0-7,7V84a12.65,12.65,0,0,0,5.24,10.41A26,26,0,0,0,0,119a2,2,0,0,0,4,0A21.78,21.78,0,0,1,25.51,97,20.69,20.69,0,0,1,34.86,99.26ZM16,67a2.84,2.84,0,0,1,3-3H32a2.84,2.84,0,0,1,3,3v5H16Zm0,17V76H35v8c0,5.13-4.08,9-9.49,9S16,89.13,16,84Z">
                            </path>
                            <path
                                d="M73.5,93.8A17.31,17.31,0,0,0,82,79V56a9,9,0,0,0-9-9H55a9,9,0,0,0-9,9V79a17.45,17.45,0,0,0,8.61,14.72A33.14,33.14,0,0,0,30.5,126a2,2,0,0,0,4,0A29.23,29.23,0,0,1,64,96.42,29.57,29.57,0,0,1,93.5,126a2,2,0,0,0,4,0A33.63,33.63,0,0,0,73.5,93.8ZM50,56a5,5,0,0,1,5-5H73a5,5,0,0,1,5,5v7H50Zm0,23V67H78V79c0,7.27-6.35,13.42-13.88,13.42S50,86.27,50,79Z">
                            </path>
                        </svg>
                    </i>
                    <h4>Ecommerce</h4>
                    <p>
                        We craft seamless online stores that convert clicks into customers and elevate your digital
                        sales journey.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg enable-background="new 0 0 418.945 418.945" height="512" viewBox="0 0 418.945 418.945"
                            width="512" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m9.213 397.61h401.004c4.849 0 8.728-3.879 8.728-8.728s-3.879-8.728-8.728-8.728h-25.214v-233.232c0-4.849-3.879-8.243-8.728-8.728h-55.762c-4.849 0-8.728 3.879-8.728 8.728v233.717h-16.486v-188.623c0-4.849-3.879-8.728-8.728-8.728h-56.247c-4.849 0-8.728 3.879-8.728 8.728v188.622h-16.486v-141.102c0-4.849-3.879-8.728-8.728-8.728h-56.247c-4.849 0-8.728 3.879-8.728 8.728v141.103h-16.486v-90.19c0-4.849-3.879-8.728-8.728-8.728h-56.249c-4.849 0-8.728 3.879-8.728 8.728v90.19h-23.76v-350.576c0-4.849-3.879-8.728-8.728-8.728s-8.728 3.879-8.728 8.728v358.819c.97 4.849 4.849 8.728 9.213 8.728zm319.542-241.96h39.761v224.989h-39.761zm-90.189 44.61h39.761v180.379h-39.761zm-90.19 48.004h39.761v132.375h-39.761zm-89.704 50.913h39.761v81.462h-39.761z">
                                </path>
                                <path
                                    d="m136.739 172.136 110.555-68.369-3.879 16.486c-.97 4.364 1.455 9.213 6.304 10.183 4.364.97 9.213-1.455 10.183-6.304l9.213-36.367c.97-4.849-.485-8.243-6.304-10.183l-36.367-9.213c-4.364-.97-9.213 1.455-10.183 6.304-.97 4.364 1.455 9.213 6.304 10.183l16.971 4.364-111.525 68.369c-3.879 2.424-5.334 7.758-2.909 11.637 3.394 4.85 8.728 4.85 11.637 2.91z">
                                </path>
                            </g>
                        </svg>
                    </i>
                    <h4>UX &amp; UI Design &amp; Analysis</h4>
                    <p>
                        We design intuitive interfaces backed by user behavior insights to enhance experience and boost
                        engagement.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="makes-us-different-text">
                    <i>
                        <svg height="512" viewBox="0 0 91 91" width="512" xmlns="http://www.w3.org/2000/svg"
                            data-name="Layer 1">
                            <g fill="rgb(0,0,0)">
                                <path
                                    d="m58.67 28.94c-8.85-13.02-20.67-19.94-26.86-15.7a7.14 7.14 0 0 0 -1.75 1.76c0 .05-14.33 29.05-14.33 29.05l-8 5.42a11.3 11.3 0 0 0 -3 15.7l.36.53a11.32 11.32 0 0 0 15.63 3l12.85 18.93c1.89 2.33 5.52 4.65 10 1.92a6.77 6.77 0 0 0 3-4.6 7.16 7.16 0 0 0 -1.11-5.4l-11.32-16.7s26.76-2.13 26.86-2.17a6.41 6.41 0 0 0 2.33-1c3.18-2.16 4.32-6.69 3.22-12.76-.99-5.59-3.8-11.92-7.88-17.98zm-50.67 34.79-.36-.53a7.79 7.79 0 0 1 2.08-10.83l6.91-4.7 9.12 13.43-6.91 4.7a7.8 7.8 0 0 1 -10.84-2.07zm34.58 17.79a3.7 3.7 0 0 1 -1 5.13 3.71 3.71 0 0 1 -5.14-1l-12.81-18.87 5.15-3.5 1.36-.11zm-13.52-21.78-9.94-14.64 9.48-19.33c.92 5.43 3.61 11.88 7.91 18.21s9.3 11.21 14 14.07zm29.5-2.33c-4.78-.31-12.56-5.7-19.15-15.41s-8.73-18.9-7.26-23.47a4.26 4.26 0 0 1 4-3c4.74 0 12.81 5.42 19.59 15.41 3.82 5.62 6.6 11.5 7.36 16.64 1.49 9.83-4.54 9.83-4.54 9.83z">
                                </path>
                                <path
                                    d="m46.17 29.31a9.39 9.39 0 0 0 -7.12 1.47 1.75 1.75 0 1 0 2 2.89 6 6 0 1 1 6.74 9.93 1.75 1.75 0 0 0 1 3.19 1.71 1.71 0 0 0 1-.3 9.49 9.49 0 0 0 -3.55-17.18z">
                                </path>
                                <path
                                    d="m60.83 16.77h.17a1.75 1.75 0 0 0 1.74-1.57l1.35-13.12a1.75 1.75 0 1 0 -3.48-.36l-1.34 13.13a1.75 1.75 0 0 0 1.56 1.92z">
                                </path>
                                <path
                                    d="m83.45 14.07a1.76 1.76 0 0 0 -2.43-.5l-12.19 8a1.75 1.75 0 0 0 1 3.21 1.78 1.78 0 0 0 1-.28l12.19-8a1.75 1.75 0 0 0 .43-2.43z">
                                </path>
                                <path
                                    d="m87.18 35.43-14.18-2.55a1.75 1.75 0 0 0 -.62 3.45l14.17 2.55h.31a1.75 1.75 0 0 0 .31-3.48z">
                                </path>
                            </g>
                        </svg>
                    </i>
                    <h4>Digital Advertising</h4>
                    <p>
                        Targeted ads that drive clicks, conversions, and measurable growth across all digital platforms.
                    </p>

                </div>
            </div>
        </div>
        <div class="btugap">
            <!-- <a href="services.html" class="themebtu">More Services</a> -->
        </div>
    </div>
</section>
<!--WE DELIVER SECTION END-->
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
<section class="gap no-bottom video-section" style="background-color: #f2edf5;">
  <div class="container text-center">
    <div class="heading-border two">
      <h2 class="hero-heading">
        Let’s Start On Your<br>
        Case <span class="underline">Together</span>
      </h2>
      <p class="hero-subtext">.</p>
    </div>
    <!-- Keep rest of the video and form layout unchanged -->

    <div class="row">
      <div class="offset-xl-1 col-xl-10">
        <div class="video-img">
          <img class="w-100" alt="img" src="{{url('frontend/img/video.jpg')}}">
          <a data-fancybox="" href="https://www.youtube.com/watch?v=1La4QzGeaaQ">
            <i class="fa-solid fa-play"></i>
          </a>
        </div>
      </div>
     
    </div>
  </div>
  
</section>

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
@endsection
<!--END FOOTER SECTION -->