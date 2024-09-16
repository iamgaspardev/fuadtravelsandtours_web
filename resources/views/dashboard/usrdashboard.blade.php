@extends('layouts.layouts')
@section('content')
    <main id="main">

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <div class="col-lg-9 text-center text-lg-left">
                            <h3>Welcome to the <span>Airfox Tours</span>!</h3>
                            <p>Start making bookings with us now.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="/consultations"
                            style="background-image: linear-gradient(to right, red, rgb(14, 14, 147)); color: white;">View
                            Messages Consultations</a>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection

@section('styles')
    <style>
        /* Custom CSS for the CTA Section */
        #cta {
            background: linear-gradient(to right, #00aaff, #0044ff);
            color: white;
            padding: 60px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #cta h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        #cta h3 span {
            color: #ffdd00;
        }

        #cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-btn-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta-btn {
            background: #ffdd00;
            color: #0044ff;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 1.1rem;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, color 0.3s;
        }

        .cta-btn:hover {
            background-color: #0044ff;
            color: #ffdd00;
        }

        @media (max-width: 768px) {
            #cta h3 {
                font-size: 2rem;
            }

            #cta p {
                font-size: 1rem;
            }

            .cta-btn {
                font-size: 1rem;
            }
        }
    </style>
@endsection
