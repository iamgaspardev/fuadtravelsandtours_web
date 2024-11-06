@extends('layouts.layouts')
@section('content')
    <main id="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h1>Explore the World with Fuad Travel</h1>
                        <p>Your trusted partner for visa applications, hotel bookings, flight bookings, and investment
                            opportunities.
                        </p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Visit now</a>

                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('assets/img/hero-img.png') }}" height="1000" width="800"
                            class="img-fluid animated" alt="Fuad Travel">
                    </div>
                </div>
            </div>

        </section>

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-globe icon"></i></div>
                            <h4><a href="" class="stretched-link">Visa Application</a></h4>
                            <p>Seamlessly navigate your visa application process with our expert guidance and support.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-building icon"></i></div>
                            <h4><a href="" class="stretched-link">Hotel Booking</a></h4>
                            <p>Book the best hotels at competitive rates, tailored to meet your travel needs.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-airplane icon"></i></div>
                            <h4><a href="" class="stretched-link">Flight Booking</a></h4>
                            <p>Get the best deals on flights with our easy and efficient booking services.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bar-chart-line icon"></i></div>
                            <h4><a href="" class="stretched-link">Investment Opportunities</a></h4>
                            <p>Explore lucrative investment opportunities tailored for savvy investors.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-car-front icon"></i></div>
                            <h4><a href="" class="stretched-link">Car Rentals</a></h4>
                            <p>Rent a car with ease and flexibility for your travel needs.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar2-event icon"></i></div>
                            <h4><a href="" class="stretched-link">Holiday Packages</a></h4>
                            <p>Discover the best holiday deals with tailored packages for every destination.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-geo-alt icon"></i></div>
                            <h4><a href="" class="stretched-link">Airport Transport</a></h4>
                            <p>Enjoy hassle-free airport transfers with our reliable transport services.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="800">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-shield-check icon"></i></div>
                            <h4><a href="" class="stretched-link">Travel Insurance</a></h4>
                            <p>Travel with peace of mind with our comprehensive travel insurance packages.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="900">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-briefcase icon"></i></div>
                            <h4><a href="" class="stretched-link">Abroad Consultation</a></h4>
                            <p>Receive expert advice on moving, studying, or working abroad.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>About Us<br></span>
                <h2>About </h2>
                <p>Your gateway to the world, providing exceptional travel and investment opportunities. At Fuad Travel and
                    Tours, we
                    believe in making every journey a seamless and enriching experience. From assisting with complex visa
                    processes to
                    securing the best accommodations and flights, we ensure that your travel plans are effortless and
                    enjoyable.
                    Beyond
                    travel, we open doors to lucrative investment opportunities, helping you grow your wealth while
                    exploring new
                    horizons. Our commitment to excellence and personalized service makes us a trusted partner in your
                    global
                    adventures
                    and financial growth.</p>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/about.png') }}" class="img-fluid" height="200"
                            alt="About Fuad Travel and Tours">
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Your Trusted Partner in Travel and Investment</h3>
                        <p class="fst-italic">
                            At Fuad Travel and Tours, we are committed to providing exceptional services that make your
                            travel and
                            investment dreams a reality.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Comprehensive visa application assistance for
                                    hassle-free
                                    travel.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Exclusive hotel and flight bookings at competitive
                                    rates.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Opportunities for profitable investments tailored to
                                    your
                                    needs.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Personalized travel itineraries to ensure a seamless
                                    travel
                                    experience.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>24/7 customer support for all your travel and
                                    booking
                                    inquiries.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Access to exclusive travel deals and
                                    discounts.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Expert consultation for selecting the best travel
                                    insurance.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Guidance on local and international travel
                                    regulations.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Customized group travel packages for businesses and
                                    families.</span></li>
                        </ul>


                        <p>
                            Our dedicated team is here to ensure that every aspect of your journey is taken care of with the
                            highest
                            level
                            of professionalism and attention to detail. Whether you are traveling for leisure or business,
                            or looking
                            for
                            investment opportunities, Fuad Travel and Tours is your trusted partner every step of the way.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- ======= Why choose us Section ======= -->
        {{-- <div>
            @include('components.services')
        </div> --}}
        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="why-choose-us section light-background">

            <div class="container section-title text-center" data-aos="fade-up">
                <span>Why Choose Us</span>
                <h2>Why Fuad Travel and Tours Company LTD?</h2>
                <p>Discover what sets us apart and why we are the trusted partner for all your travel and investment needs.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <!-- Reason 1: Expert Visa Assistance -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-primary">
                                <i class="bi bi-card-checklist"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Expert Visa Assistance</h3>
                                <p>With our deep understanding of visa processes, we ensure that your visa application is
                                    seamless and successful, providing guidance at every step.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 1 -->

                    <!-- Reason 2: Tailored Hotel Booking -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-warning">
                                <i class="bi bi-hotel"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Tailored Hotel Booking</h3>
                                <p>We partner with leading hotels globally, offering customized bookings to meet your
                                    specific needs, ensuring comfort and quality during your travels.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 2 -->

                    <!-- Reason 3: Reliable Flight Booking -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-success">
                                <i class="bi bi-airplane"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Reliable Flight Booking</h3>
                                <p>We provide flight options that suit your preferences and budget, ensuring you enjoy
                                    stress-free travel planning and the best flight deals available.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 3 -->

                    <!-- Reason 4: Strategic Investment Guidance -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-danger">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Strategic Investment Guidance</h3>
                                <p>Our knowledgeable team helps you identify and seize the best investment opportunities,
                                    ensuring your financial success and long-term growth.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 4 -->

                    <!-- Additional Reason 5: 24/7 Customer Support -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-info">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>24/7 Customer Support</h3>
                                <p>Our dedicated team is always available to help you with any queries or travel needs,
                                    offering round-the-clock support to ensure a smooth experience.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 5 -->

                    <!-- Additional Reason 6: Global Travel Expertise -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-secondary">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Global Travel Expertise</h3>
                                <p>With years of experience in international travel, we provide expert advice and
                                    recommendations, ensuring your trip is safe, comfortable, and enjoyable.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 6 -->

                    <!-- Additional Reason 7: Secure Payment Options -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-dark">
                                <i class="bi bi-lock"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Secure Payment Options</h3>
                                <p>We offer multiple secure payment methods, ensuring that your transactions are safe,
                                    reliable, and protected every step of the way.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 7 -->

                    <!-- Additional Reason 8: Personalized Travel Itineraries -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="800">
                        <div class="service-item d-flex align-items-start position-relative">
                            <div class="icon text-purple">
                                <i class="bi bi-map"></i>
                            </div>
                            <div class="service-content ms-3">
                                <h3>Personalized Travel Itineraries</h3>
                                <p>We customize your travel plans to suit your preferences, providing you with tailored
                                    itineraries for a unique and unforgettable travel experience.</p>
                            </div>
                        </div>
                    </div><!-- End Reason 8 -->

                </div>
            </div>

        </section><!-- /Why Choose Us Section -->

        <!-- End Services Section -->

        <div>
            {{-- @include('components.whyus') --}}
        </div>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>TOURS EVENTS</span>
                <h2>OUR DAILY POST</h2>
                <p>Explore the world with confidence through our travel services, including visa applications, hotel
                    bookings,
                    and more.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($tours as $tour)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="card" style="min-height: 500px;">
                                    <img src="{{ asset('uploads/' . $tour->image) }}" class="img-fluid card-img-top"
                                        alt="{{ $tour->title }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body col">
                                        <h4 class="card-title">{{ $tour->title }}</h4>

                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($tour->description, 100) }}
                                        </p>
                                        <a style=" color: red; border-color: #007c9b;fontweight:bolder">
                                            Price: {{ $tour->price }}$
                                        </a></br>
                                        <a href="{{ route('consultationform', ['image' => basename($tour->image)]) }}"
                                            class="btn btn-primary mt-2"
                                            style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">Consult
                                            Us Now</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>

        </section>



        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Ready to Explore the World?</h3>
                            <p>Take the first step towards your next adventure with Fuad Travel and Tours. Whether you're
                                planning a
                                dream vacation, a business trip, or seeking new investment opportunities, we're here to make
                                it happen.
                                Let
                                us handle the details while you focus on enjoying the journey. Your adventure begins here.
                            </p>
                            <a class="cta-btn" href="#">Get Started Today</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Meet Our <strong>Team</strong></h2>
                    <hr class="title-line">
                    <p>Meet the Driving Force Behind Fuad Tours and Travels: <b style="color:red">
                            <i>Our
                                Dedicated Team!</i></b>
                        At Fuad Tours and Travels, we take pride in our diverse and talented team. Together, we are
                        committed
                        to
                        providing you with exceptional travel experiences. Get to know the faces behind the scenes!</p>
                </div>

                <div class="row">
                    @include('team-members', ['teamMembers' => $teamMembers])
                </div>
            </div>
        </section><!-- End Our Team Section -->
        {{-- <section>
            <div class="row">
                @include('components.partners')
            </div>
        </section> --}}
    </main>
@endsection
