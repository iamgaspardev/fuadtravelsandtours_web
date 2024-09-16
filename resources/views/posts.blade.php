@extends('layouts.layouts')
@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>TOURS EVENTS</span>
                <h2>OUR DAILY POST</h2>
                <p>Explore the world with confidence through our travel services, including visa applications, hotel
                    bookings,
                    and more.
                </p>
            </div><!-- End Section Title -->

            <div class="row portfolio-container" data-aos="fade-up">
                <div class="row">
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
@endsection
