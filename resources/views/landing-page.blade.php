<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SaaSpal - SaaS and Software Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= header start ========================= -->
    <header class="header">
        <div class="navbar-area">
            <div class="container relative">
                <div class="row items-center">
                    <div class="w-full">
                        <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                            <a class="navbar-brand mr-5" href="index.html">
                                {{-- <img src="{{ asset('img/logo/logo.svg') }}" alt="Logo" /> --}}
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button"
                                data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent lg:shadow-none"
                                id="navbarOne">
                                <ul id="nav"
                                    class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>

                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#why">Why</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#testimonials">Clients</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11 bg-slate-400 p-2 rounded">
                                        <a class="page-scroll" href="{{ route('login') }}">Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section relative bg-no-repeat bg-top z-10 pt-200 pb-13 lg:pb-200 2xl:pb-120"
        style="background-image: url({{ asset('img/hero/hero-bg.svg') }})">
        <div class="container">
            <div class="row flex items-center relative">
                <div class="w-full lg:w-1/2">
                    <div class="hero-content mb-0 lg:mb-6">
                        <h1
                            class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">
                            Get Ready For Your Ride!</h1>
                        <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
                            Designed to push you to the limit in challenging off-road, yet reactive and maneuverable on
                            road
                        </p>
                        <a href="javascript:void(0)" class="main-btn border-btn btn-hover mb-2">Get Started</a>
                        <a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="hero-img pt-8 lg:pt-0">
                        <img src="{{ asset('img/hero/hero-motor.jpg') }}" alt=""
                            class="w-0.5 lg:w-auto rounded-md drop-shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    <section id="features" class="feature-section pt-120">
        <div class="container">
            <div class="row flex justify-center">
                @foreach ($products as $product)
                    <div class="w-full md:w-8/12 lg:w-4/12">
                        <div class="text-center px-3 2xl:px-10 py-8">
                            <div class="feature-icon">
                                <i class="lni lni-bootstrap"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">{{ $product->name }}</h3>
                                <p class="text-lg">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= about-section start ========================= -->
    <section id="about" class="about-section relative z-10 pt-150">
        <div class="container">
            <div class="row flex items-center">
                <div class="w-full lg:w-1/2">
                    <div class="about-img relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
                        <img src="{{ asset('img/hero/hero-motor-bg.jpg') }}" alt=""
                            class="w-11/12 rounded-lg mr-5">
                        <img src="{{ asset('img/about/about-left-shape.svg') }}" alt="" class="shape-1">
                        <img src="{{ asset('img/about/left-dots.svg') }}" alt="" class="shape shape-2">
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="about-content">
                        <div class="section-title mb-8">
                            <h3 class="mb-10">We have a long history of product innovation, developing mechanical and
                                electronic solutions that have improved the motorcycle riding experience. Over time we
                                have been able to take the relationship between the rider and the bike to higher levels,
                                creating an increasingly "connected" experience between the two sides. .</p>
                        </div>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn ">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about-section end ========================= -->

    <!-- ========================= about2-section start ========================= -->
    <section id="about" class="about-section pt-150">
        <div class="container">
            <div class="row flex items-center">
                <div class="w-full lg:w-1/2">
                    <div class="about-content">
                        <div class="section-title mb-8">
                            <h1 class="mb-6 text-4xl md:text-5xl lg:text-4xl xl:text-5xl 2xl:text-6xl">Easy to Use with
                                Tons of Awesome Features</h1>
                            <p class="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                        <ul class="about-feature">
                            <li>Quick Access</li>
                            <li>Easily to Manage</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn ">Learn More</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 order-first lg:order-last">
                    <div class="about-img-2 relative z-10 pt-19 pb-19 mb-18 lg:mb-0">
                        <img src="{{ asset('img/about/about-2.png') }}" alt="" class="w-100">
                        <img src="{{ asset('img/about/about-right-shape.svg') }}" alt=""
                            class="shape shape-1">
                        <img src="{{ asset('img/about/right-dots.svg') }}" alt="" class="shape shape-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about2-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    <section id="why" class="feature-extended-section pt-25">
        <div class="feature-extended-wrapper py-18 bg-theme-color bg-opacity-10">
            <div class="container">
                <div class="row flex justify-center">
                    <div class="w-full md:w-9/12 lg:w-8/12 xl:w-6/12">
                        <div class="section-title text-center mb-15">
                            <h1 class="mb-6">Why Choose SaaSpal</h1>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>

                <div class="row flex flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-display"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">SaaS Focused</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-leaf"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">Awesome Design</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-grid-alt"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">Ready to Use</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-javascript"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">Vanilla JS</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">Essential Sections</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-4/12">
                        <div class="p-8 lg:px-3">
                            <div class="feature-icon-2 mb-8 text-theme-color leading-none">
                                <i class="lni lni-rocket"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-5">Highly Optimized</h3>
                                <p class="text-lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= testimonial-section start ========================= -->
    <section id="testimonials" class="testimonial-section pt-8 pb-25 sm:p-0 lg:py-170">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="mb-8">What our customers says</h1>
            </div>
            <div class="testimonial-active-wrapper relative">

                <div class="shapes">
                    <img src="{{ asset('img/testimonial/testimonial-shape.svg') }}" alt=""
                        class="shape shape-1 hidden lg:block -left-25 top-1/2 transform -translate-y-1/2">
                    <img src="{{ asset('img/testimonial/testimonial-dots.svg') }}" alt=""
                        class="shape shape-2 hidden lg:block left-150 -bottom-110 lg:-bottom-13 lg:w-1/4 xl:w-max">
                </div>

                <div class="testimonial-active">

                    <!-- single testimonial -->
                    <div class="single-testimonial">
                        <div class="row flex">
                            <div class="w-full lg:w-5/12">
                                <div
                                    class="testimonial-img inline-block lg:block text-left lg:text-right relative mb-8 lg:mb-0">
                                    <img src="{{ asset('img/testimonial/testimonial-1.png') }}" alt=""
                                        class="lg:ml-auto">
                                    <div class="quote">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-0 lg:w-1/12"></div>
                            <div class="lg:w-6/12">
                                <div class="content-wrapper">
                                    <div class="content">
                                        <p class="text-lg leading-7 mb-8">Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                            Lorem.</p>
                                    </div>
                                    <div class="info">
                                        <h4 class="mb-3">Jonathon Smith</h4>
                                        <p>Developer and Youtuber</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single testimonial -->
                    <div class="single-testimonial">
                        <div class="row flex">
                            <div class="w-full lg:w-5/12">
                                <div
                                    class="testimonial-img inline-block lg:block text-left lg:text-right relative mb-8 lg:mb-0">
                                    <img src="{{ asset('img/testimonial/testimonial-2.png') }}" alt=""
                                        class="lg:ml-auto">
                                    <div class="quote">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="w-0 lg:w-1/12"></div>
                            <div class="lg:w-6/12">
                                <div class="content-wrapper">
                                    <div class="content">
                                        <p class="text-lg leading-7 mb-8">Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                            Lorem.</p>
                                    </div>
                                    <div class="info">
                                        <h4 class="mb-3">Gray Simon</h4>
                                        <p>UIX Designer and Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================= testimonial-section end ========================= -->

    <!-- ========================= subscribe-section start ========================= -->
    <section id="contact" class="subscribe-section pt-120">
        <div class="container">
            <div class="subscribe-wrapper bg-no-repeat bg-center bg-cover rounded-3xl pt-16 pb-13 px-8 md:px-13"
                style="background-image: url({{ asset('img/subscribe/subscribe-bg.svg') }});">
                <div class="row flex items-center">
                    <div class="w-full lg:w-7/12 xl:w-6/12">
                        <div class="section-title mb-4">
                            <h1 class="text-white mb-6">Subscribe Our Newsletter</h1>
                            <p class="text-white pr-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 xl:w-6/12">
                        <form action="#" class="subscribe-form relative mb-4">
                            <input type="email" name="subs-email" id="subs-email" placeholder="Your Email"
                                class="w-full py-5 px-8 rounded-2xl bg-white text-body-color border solid border-transparent transition duration-300 focus:shadow-xl">
                            <button type="submit" class="main-btn btn-hover">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= subscribe-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer
        class="footer bg-cover bg-no-repeat bg-right-top pt-120 mt-25 bg-theme-color md:bg-transparent md:pt-260 lg:pt-260"
        style="background-image: url({{ asset('img/footer/footer-bg.svg') }});">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">

                    <div class="w-full md:w-6/12 lg:w-4/12">
                        <div class="footer-widget mb-10 mx-3">
                            <div class="logo mb-8">
                                <a href="index.html"> <img src="{{ asset('img/logo/logo.svg') }}" alt="">
                                </a>
                            </div>
                            <p class="mb-8 text-white sm:pr-13 md:pr-0 2xl:pr-25">Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt.</p>
                            <ul class="socials flex items-center">
                                <li class="mr-5">
                                    <a href="jvascript:void(0)"> <i class="lni lni-facebook-original"></i> </a>
                                </li>
                                <li class="mr-5">
                                    <a href="jvascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
                                </li>
                                <li class="mr-5">
                                    <a href="jvascript:void(0)"> <i class="lni lni-instagram-original"></i> </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-2/12">
                        <div class="footer-widget mb-10 mx-3">
                            <h3 class="mb-6 text-white">About Us</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Home</a> </li>
                                <li> <a href="javascript:void(0)">Feature</a> </li>
                                <li> <a href="javascript:void(0)">About</a> </li>
                                <li> <a href="javascript:void(0)">Testimonials</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-3/12">
                        <div class="footer-widget mb-10 mx-3">
                            <h3 class="mb-6 text-white">Features</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">How it works</a> </li>
                                <li> <a href="javascript:void(0)">Privacy policy</a> </li>
                                <li> <a href="javascript:void(0)">Terms of service</a> </li>
                                <li> <a href="javascript:void(0)">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-3/12">
                        <div class="footer-widget mb-10 mx-3">
                            <h3 class="mb-6 text-white">Other Products</h3>
                            <ul class="links">
                                <li> <a href="jvascript:void(0)">Accounting Software</a> </li>
                                <li> <a href="jvascript:void(0)">Billing Software</a> </li>
                                <li> <a href="jvascript:void(0)">Booking System</a> </li>
                                <li> <a href="jvascript:void(0)">Tracking System</a> </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
