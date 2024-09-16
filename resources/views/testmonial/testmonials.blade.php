@extends('layouts.layouts')
@section('content')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container justify-content-center">

                <div class="row mt-8 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-9 text-center justify-content-center">
                        <h3>Upload <span style="color:red">Testimonials</span> !</h3>
                        <p>Please upload testimonials to be seen by clients by attaching an </br> image along with the
                            testimonial message.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                {{ __('Add Testimonial') }}
                            </div>
                            <div class="card-body">
                                <form action="{{ route('testimonial.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Location:</label>
                                        <input type="text" name="location" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Testimonial Message:</label>
                                        <textarea name="message" class="form-control" required></textarea>
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="form-group">
                                        <label>Image:</label>
                                        <input type="file" name="image" class="form-control-file" required>
                                    </div>
                                    <div class="mb-3"></div>
                                    <button type="submit" class="btn btn-primary"
                                        style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
