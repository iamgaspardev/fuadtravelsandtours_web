@extends('layouts.layouts')
@section('content')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-12">
                        <form action="{{ route('login') }}" method="post" class="col-md-6 login-form">
                            @csrf
                            <div class="rowsignIn">
                                <div class="info mt-4 mt-lg-0">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                                <h4 class="info"><b>Sign In</b></h4>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Your Password" required>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div class="text-center"><button type="submit"
                                    style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">Sign
                                    In</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        /* Custom CSS */
        .login-form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-form button[type="submit"] {
            padding: 12px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button[type="submit"]:hover {
            background-color: #218838;
        }

        .rowsignIn {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .rowsignIn i {
            font-size: 24px;
            color: #333;
            margin-right: 10px;
        }

        h4.info {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .my-3 .loading,
        .my-3 .error-message,
        .my-3 .sent-message {
            text-align: center;
            margin-top: 10px;
        }

        .my-3 .loading {
            color: #ffc107;
        }

        .my-3 .error-message {
            color: #dc3545;
        }

        .my-3 .sent-message {
            color: #28a745;
        }
    </style>
@endsection
