@extends('layouts.layouts')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog Post</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>Blog Post</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">


                            @foreach ($blogs as $blog)
                                <div>
                                    <div class="entry-img">
                                        <img src="{{ asset('uploads/' . $blog->image) }}" alt="{{ $blog->name }}"
                                            class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="/blog">{{ $blog->title }}</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p href="/blog">{{ $blog->content }}</p>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="/blog">airfox tours</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="/blog"><time
                                                        datetime="2020-01-01">{{ $blog->created_at }}</time></a>
                                            </li>
                                            {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="/blog">Comments</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            @endforeach



                        </article><!-- End blog entry -->



                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">


                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="/">General <span></span></a></li>
                                    <li><a href="/visa">Tours <span></span></a></li>
                                    <li><a href="/visa">Travel <span></span></a></li>
                                    <li><a href="#">Investment <span></span></a></li>
                                    <li><a href="#">Car Rental <span></span></a></li>
                                    <li><a href="#">Consultation <span></span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($tours as $tour)
                                    <div class="post-item clearfix">
                                        <img src="{{ asset('uploads/' . $tour->image) }}"
                                            style="height: 60px; object-fit: cover;" alt="{{ $tour->title }}">
                                        <h4><a
                                                href="{{ route('consultationform', ['image' => basename($tour->image)]) }}">{{ $tour->title }}</a>
                                        </h4>
                                        <time datetime="2020-01-01">{{ $tour->create_at }}</time>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Visa</a></li>
                                    <li><a href="#">Abroad</a></li>
                                    <li><a href="#">Tours</a></li>
                                    <li><a href="#">Job</a></li>
                                    <li><a href="#">Rents</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Opportunities</a></li>
                                    <li><a href="#">Consultation</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Passport</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main>
@endsection
