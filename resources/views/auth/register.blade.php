@extends('layouts.layouts')
@section('content')

<main id="main">
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-6">
                    <form action="{{ route('register') }}" method="post" role="form" class="col-md-6 php-email-form">
                        @csrf <!-- Add CSRF token field -->
                        <div class="rowsignIn">
                            <div class="info mt-4 mt-lg-0">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>
                            <h4 class="info"><b>Register</b></h4>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Your Password" required>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation" placeholder="Confirm Password" required>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Register</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main>
@endsection
