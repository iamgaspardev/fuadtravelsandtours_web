@extends('layouts.layouts')
@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Get More here</h4>
                        <div class="services-list">
                            <a href="/about" class="active"><i class="bi bi-arrow-right-circle"></i><span> About
                                    Tours</span></a>
                            <a href="/investments"><i class="bi bi-arrow-right-circle"></i><span>Investments</span></a>
                            <a href="/blog"><i class="bi bi-arrow-right-circle"></i><span>Blogs</span></a>
                            <a href="/visa"><i class="bi bi-arrow-right-circle"></i><span>Tourisms</span></a>
                            <a href="/contact"><i class="bi bi-arrow-right-circle"></i><span>Consultation</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="service-box">
                        <h4>Download Documents</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Company Profile PDF</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Investment Guidline</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+255 761
                                555 535</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:contact@example.com">info@fuadtravelandtours.com</a></p>
                    </div>

                </div>
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($blogs as $blog)
                        <img src="{{ asset('uploads/' . $blog->image) }}" alt="{{ $blog->name }}"
                            class="img-fluid services-img">

                        <h3>{{ $blog->title }}
                        </h3>
                        <p>
                            {{ $blog->content }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>{{ $blog->title }}</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>{{ $blog->created_at }}
                                </span></li>
                        </ul>
                    @endforeach
                </div>

            </div>

        </div>

    </section>
@endsection
