@extends('layouts.layouts')
@section('content')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container justify-content-center">
                <div class="row mt-8 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                {{ __('Manage Testimonials') }}
                            </div>
                            <div class="card-body">
                                <a href="{{ route('testimonial.create') }}" class="btn btn-primary mb-3"
                                    style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">Add
                                    Testimonial</a>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Message</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonial)
                                            <tr>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->location }}</td>
                                                <td>{{ $testimonial->message }}</td>
                                                <td><img src="{{ asset('uploads/' . $testimonial->image) }}"
                                                        width="100" /></td>
                                                <td>
                                                    <!-- Delete Button without Modal -->
                                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
