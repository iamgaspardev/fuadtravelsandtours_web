<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fuad-Travels-and-Tours</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @auth
                        {{-- <li><a class="active" href="/testimonial/create">Upload Testmony</a></li> --}}
                        <li class="dropdown"><a href="#"><span>Manage Blog</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/blogs/create">Publish on Blog</a></li>
                                <li><a href="/blogs/view">View Blog</a>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Posts</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/tour/create">Upload Post</a></li>
                                <li><a href="/posts/views">View Post</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Testimonials</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/testimonial/create">Uploaded Testimonials</a></li>
                                <li><a href="/testimonials/manage">View Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="/team/create">Add Team Member</a></li>
                        <li><a href="/consultations">View Application</a></li>
                        <li><a href="/admin/investment">Investment Request</a></li>
                    @else
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/service">Our Services</a></li>
                        <li><a href="/investments">Investments</a></li>
                        <li><a href="/visa">Tours</a></li>
                        <li class="dropdown"><a href="#"><span>What we do</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="/visa">Visa Application</a></li>
                                <li><a href="/investments">More About Investments</a></li>
                                <li><a href="#">Consultation</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/testmonials">Testimonials</a></li>
                    @endauth
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                <div class="cta-btn-container text-center">

                </div>
            </nav>

            @auth
                <!-- Show logout button -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="text-center">
                        <button type="submit"
                            style="background-color: transparent; color: red; border: 1px solid red; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-left:10px;">Logout</button>
                    </div>
                </form>
            @else
                <a class="btn-getstarted" href="/signin">Sign In</a>
                {{-- <a class="btn-getstarted" href="/signin">Sign In</a> --}}
            @endauth

        </div>
    </header>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div id="toastMessage" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Thanks for showing interest in Fuad Travels and Tours! We'll get back to you soon.
            </div>
        </div>
    </div>

    @yield('content')

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center me-auto">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" height="40" width="100">
                    </a>
                    <div class="footer-contact pt-3">
                        {{-- <p>Fuad Travel and Tours Limited</p> --}}
                        <p>Mwanamboka Plaza, First Floor, Plot No: 31 B, Morocco Road/ Kawawa Road, Dar es Salaam,
                            Tanzania•</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+255 761 555 535</span></p>
                        <p><strong>Email:</strong> <span>info@fuadtravelsandtours.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/about">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/service">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/about">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/visa">Visa Processing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/visa">Hotel Booking</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/visa">Car Rentals</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/investments">Investment Opportunities</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Follow us to get our daily offer updates from our Website</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FuadTravel&Tours LTD</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits"> Designed by <a href="#">trusttechnology</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
