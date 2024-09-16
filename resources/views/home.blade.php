@extends('layouts.layouts')
@section('content')
    <main id="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h1>Explore the World with Fuad Travels</h1>
                        <p>Your trusted partner for visa applications, hotel bookings, flight bookings, and investment
                            opportunities.
                        </p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Visit now</a>

                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('assets/img/hero-img.png') }}" height="1000" width="800"
                            class="img-fluid animated" alt="Fuad Travels">
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

                </div>

            </div>

        </section><!-- /Featured Services Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>About Us<br></span>
                <h2>About </h2>
                <p>Your gateway to the world, providing exceptional travel and investment opportunities. At Fuad Travels and
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
                            alt="About Fuad Travels and Tours">
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Your Trusted Partner in Travel and Investment</h3>
                        <p class="fst-italic">
                            At Fuad Travels and Tours, we are committed to providing exceptional services that make your
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
                            <li><i class="bi bi-check2-all"></i> <span>24/7 customer support for all your travel and booking
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
                            investment opportunities, Fuad Travels and Tours is your trusted partner every step of the way.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- ======= Services Section ======= -->
        <div>
            @include('components.services')
        </div>
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

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Meet Our <strong>Team</strong></h2>
                    <hr class="title-line">
                    <p>Meet the Driving Force Behind Airfox Tours: <b style="color:red"> <i>Our Dedicated Team!</i></b>
                        At Airfox Tours, we take pride in our diverse and talented team. Together, we are committed to
                        providing you with exceptional travel experiences. Get to know the faces behind the scenes!</p>
                </div>

                <div class="row">
                    @include('team-members', ['teamMembers' => $teamMembers])
                </div>
            </div>
        </section><!-- End Our Team Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Ready to Explore the World?</h3>
                            <p>Take the first step towards your next adventure with Fuad Travels and Tours. Whether you're
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
