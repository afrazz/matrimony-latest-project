@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<div class="container profile-card">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">Profile Details</h1>
                </div>
                <div class="card-body">
                    <p><strong>Full Name:</strong> {{ $userProfile->fullname }}</p>
                    <p><strong>Gender:</strong> {{ $userProfile->gender }}</p>
                    <p><strong>Date of Birth:</strong> {{ $userProfile->date_of_birth }}</p>
                    <p><strong>Height:</strong> {{ $userProfile->height }}</p>
                    <p><strong>Religion:</strong> {{ $userProfile->religion }}</p>
                    <p><strong>City:</strong> {{ $userProfile->city }}</p>
                    <p><strong>Mobile Number:</strong> {{ $userProfile->mobile_number }}</p>
                    <p><strong>Education:</strong> {{ $userProfile->education }}</p>
                    <p><strong>Occupation:</strong> {{ $userProfile->occupation }}</p>
                    <p><strong>Annual Income:</strong> {{ $userProfile->annual_income }}</p>
                    @if ($userProfile->profile_pic)
                        <p><strong>Profile Picture:</strong> <img src="{{ asset('storage/' . $userProfile->profile_pic) }}" alt="Profile Picture" class="img-thumbnail profile-picture"></p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-card {
        margin-top: 50px;
    }
    .profile-picture {
        width: 100px;
        height: 100px;
    }
</style>
@endsection
