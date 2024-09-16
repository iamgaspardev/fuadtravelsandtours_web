@extends('layouts.layouts')
@section('content')
    <main id="main">

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
                        <img src="assets/img/about.png" class="img-fluid" height="200" alt="About Fuad Travels and Tours">
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

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
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


    </main>
@endsection
