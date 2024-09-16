@extends('layouts.layouts')

@section('content')
    <div class="container min-vh-100">
        <div class="row justify-content-between mt-5 mb-3">
            <div class="col-lg-9 text-start">
                <h5 class="fw-bold">All Tours / Visa Posts</h5>
            </div>
            <div class="col-lg-3 text-end">
                <a href="{{ route('tour.create') }}" class="btn btn-primary"
                    style="background: linear-gradient(to right, red, rgb(14, 14, 147)); border-radius: 50px; color: white; padding: 10px 20px; border: none; cursor: pointer;">Add
                    Tour</a>
            </div>
        </div>
        <div class="row">
            @foreach ($tours as $tour)
                <div class="col-md-12 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 rounded">
                        <div class="card-body">
                            <div class="row align-content-center align-items-lg-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('uploads/' . $tour->image) }}" width="100" height="100"
                                        alt="{{ $tour->title }}">
                                </div>
                                <div class="col-md-3">
                                    <h5 class="card-title">{{ $tour->title }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text">{{ \Illuminate\Support\Str::words($tour->description, 30) }}</p>
                                </div>
                                <div class="col-md-1 d-flex align-items-center">
                                    <form action="{{ route('tour.destroy', $tour->id) }}" method="POST" class="w-100">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
