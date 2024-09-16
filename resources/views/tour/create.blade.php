@extends('layouts.layouts')
@section('content')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container justify-content-center">


                <div class="row mt-8 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-9 text-center justify-content-center">
                        <h3>Fuad Travels and Tours <span>Admin Panels</span> !</h3>
                        <p>User can Explore the world with Fuad Travels and Tours - Please upload Tours to be seen by
                            clients by
                            attaching image or Poster of the tours area</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                {{ __('Add Tours Post') }}
                            </div>
                            <div class="card-body">
                                <form action="{{ route('tour.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price ($):</label>
                                        <input type="number" name="price" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <textarea name="description" class="form-control" required></textarea>
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
