@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<header class="bg-white shadow mb-4">
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            All profiles
        </h1>
    </div>
</header>
<main>
    <div class="container mx-auto py-6 sm:px-6 lg:px-8">
        <div class="row">
            @foreach($otherUsersData as $userData)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $userData->profile_pic) }}" class="card-img-top" alt="Profile Picture">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{ $userData->fullname }}</h5>
                            <p class="card-text">City: {{ $userData->city }}<br> Phone No: {{ $userData->mobile_number }}</p>
                            <a href="{{ route('checkprofile', $userData->id) }}" class="btn btn-primary">Check Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection