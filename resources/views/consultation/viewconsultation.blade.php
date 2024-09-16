@extends('layouts.layouts')

@section('content')
    <div class="container mt-5">
        <div class="card col-lg-12 p-2 text-lg-left mb-5">
            <b>
                <h6>Your Gateway to Seamless <span style="color:red">Travel Experiences</span> !</h6>
            </b>
        </div>
        <div class="row">
            @foreach ($consultations as $consultation)
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header"
                            style="background-image: linear-gradient(to right, red, rgb(14, 14, 147)); color: white;">
                            {{ $consultation->name }}
                        </div>

                        <div class="card-body">
                            <p>Email: {{ $consultation->email }}</p>
                            <p>Phone: {{ $consultation->phone }}</p>
                            <p>Message: {{ $consultation->message }}</p>
                            <p>Date: {{ $consultation->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
