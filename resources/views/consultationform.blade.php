@extends('layouts.layouts')

@section('content')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-12">
                        <!-- Consultation form -->
                        <form action="{{ route('consultation.request') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf <!-- Add CSRF token field -->
                            <div class="row">
                                <div class="col-md-5">
                                    <!-- Display the image -->
                                    <img src="{{ asset('uploads/uploads/' . $image) }}" class="img-fluid"
                                        style="height: 400px;width:400px; object-fit: cover;" alt="Image">
                                </div>
                                <div class="col-md-7 col ">
                                    <div class=" form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-12 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="col-md-12 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Your WhatsApp Number/Phone Number" required>
                                    </div>
                                    <div class="col-md-12 form-group mt-3 mt-md-0">
                                        <textarea class="form-control" name="message" id="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Request</button></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <style>
            /* Custom CSS */
            .php-email-form {
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Add space between inputs */
            .form-group {
                margin-bottom: 20px;
            }

            /* Add rounded corners to the image */
            .img-fluid.rounded {
                border-radius: 15px;
                /* Rounded corners */
            }

            /* Button styles */
            .php-email-form button[type="submit"] {
                padding: 12px 20px;
                background-color: #28a745;
                color: #fff;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .php-email-form button[type="submit"]:hover {
                background-color: #218838;
            }
        </style>
    </main>
@endsection
