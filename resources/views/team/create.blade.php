@extends('layouts.layouts')

@section('content')
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="mb-1"></div>
            <div class="col-lg-9 text-center justify-content-center">
                <h3>Upload <span>Fuad Travels and Tours Team Member</span> !</h3>
                <p>User can Explore the world with Fuad Travels and Tours Tours - Please upload Team Members of Fuad Travels
                    and
                    Tours Tours</p>
            </div>
            <div class="mb-3"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Team Member') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="position">{{ __('Position') }} </label>
                                <input id="position" type="text"
                                    class="form-control @error('position') is-invalid @enderror" name="position"
                                    value="{{ old('position') }}" required>
                                @error('position')
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
                                {{ __('Add Team Member') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
