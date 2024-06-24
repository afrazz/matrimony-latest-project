@extends('layouts.user')

@section('title', 'UserProfile')

@section('contents')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">Your Profile</h1>
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
                        <p><strong>Profile Picture:</strong> <img src="{{ asset('storage/' . $userProfile->profile_pic) }}" alt="Profile Picture" class="img-thumbnail" width="100"></p>
                    @endif
                    <a href="{{ route('edituserprofile', $userProfile->id) }}" class="btn btn-primary mt-3">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
