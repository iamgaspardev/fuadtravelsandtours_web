@extends('layouts.layouts')
@section('content')
    <main id="main">

        <div class="container section-title" data-aos="fade-up">
            <span>Customers Says</span>
            <h2>Review from Customers</h2>
            <p>Look the review from our valuable customers saved by Fuad Travel and Tours Company LTD , <br>Do you wish to
                be
                the part of our valuable review !</p>
        </div><!-- End Section Title -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials-section">
            <div class="container">
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="testimonial-card">
                                <div class="testimonial-img-wrapper">
                                    <img src="{{ asset('uploads/' . $testimonial->image) }}" class="testimonial-img"
                                        alt="{{ $testimonial->name }}">
                                </div>
                                <div class="testimonial-content">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <h4>{{ $testimonial->location }}</h4>
                                    <p class="testimonial-message">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $testimonial->message }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <style>
            /* Modern Testimonials Section */
            .testimonials-section {
                padding: 60px 0;
                background-color: #f7f9fc;
            }

            .testimonial-card {
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                padding: 20px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                position: relative;
            }

            .testimonial-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            }

            .testimonial-img-wrapper {
                width: 80px;
                height: 80px;
                margin: 0 auto 15px;
                border-radius: 50%;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .testimonial-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .testimonial-content {
                text-align: center;
                padding: 20px 10px;
            }

            .testimonial-content h3 {
                font-size: 18px;
                font-weight: 700;
                color: #333;
                margin-bottom: 5px;
            }

            .testimonial-content h4 {
                font-size: 14px;
                font-weight: 500;
                color: #777;
                margin-bottom: 15px;
            }

            .testimonial-message {
                font-size: 15px;
                line-height: 1.6;
                color: #555;
                background-color: #f0f0f0;
                padding: 15px;
                border-radius: 8px;
                font-style: italic;
                position: relative;
            }

            .testimonial-message i {
                color: #ffbc00;
            }

            .quote-icon-left {
                position: absolute;
                top: -10px;
                left: -10px;
            }

            .quote-icon-right {
                position: absolute;
                bottom: -10px;
                right: -10px;
            }

            /* Mobile Responsiveness */
            @media (max-width: 768px) {
                .testimonial-card {
                    margin-bottom: 30px;
                }
            }
        </style>
    </main>
@endsection
