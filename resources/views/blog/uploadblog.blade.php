@extends('layouts.layouts')

@section('content')
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="mb-1"></div>
            <div class="col-lg-9 text-center justify-content-center">
                <h3>Upload <span style="color:red">Blogs Post</span> !</h3>
                <p>User can Explore the world with Airfox Tours - Please upload Blogs Post of Airfox Tours</p>
            </div>
            <div class="mb-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Post to Blogs') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input id="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title') }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea id="content" class="form-control @error('description') is-invalid @enderror" name="content" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3"></div>
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <input id="image" type="file"
                                    class="form-control-file @error('image') is-invalid @enderror" name="image" required>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3"></div>

                            <button type="submit" class="btn btn-primary"
                                style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                                {{ __('Publish') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
