@extends('layouts.layouts')

@section('content')
    <div class="container">
        <div>
            <h4>Submitted Interests</h4>
        </div>

        @if ($interests->isEmpty())
            <div style="min-height: 40vh; display: flex; justify-content: center; align-items: center;">
                <p class="text-center" style="color: red;">
                    <i class="bi bi-exclamation-triangle-fill" style="font-size: 2rem;"></i>
                    No Requests!
                </p>
            </div>
        @else
            <table class="table" style="min-height: 40vh;">
                <thead>
                    <tr>
                        <th style="background-color: red; color: #ffffff;">Full Name</th>
                        <th style="background-color: red; color: #ffffff;">Phone</th>
                        <th style="background-color: red; color: #ffffff;">Interested On</th>
                        <th style="background-color: red; color: #ffffff;">Email</th>
                        <th style="background-color: red; color: #ffffff;">Message</th>
                        <th style="background-color: red; color: #ffffff;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($interests as $interest)
                        <tr>
                            <td>{{ $interest->fullName }}</td>
                            <td>{{ $interest->phone }}</td>
                            <td>{{ $interest->interestedOn }}</td>
                            <td>{{ $interest->email }}</td>
                            <td>{{ $interest->message }}</td>
                            <td>
                                <!-- Delete Button with Icon -->
                                <form action="{{ route('interests.destroy', $interest->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this entry?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
