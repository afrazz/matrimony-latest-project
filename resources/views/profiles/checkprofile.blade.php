@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<div class="container profile-card">
    <div class="row">
            <div class="card p-0 w-100">
                <div class="card-header bg-primary text-white ">
                    <h1 class="h3 mb-0 text-center">Profile Details</h1>
                </div>
                <div class="flex justify-center mt-4">
                    @if ($userProfile->profile_pic)
                        <img src="{{ asset('storage/' . $userProfile->profile_pic) }}" style="height: 160px; width: 160px; border-radius: 50%" alt="Profile Picture" class="img-thumbnail profile-picture">
                    @endif
                </div>
                
                <div class="card-body flex justify-center">
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">Full Name: <strong>{{ $userProfile->fullname }}</strong></li>
                            <li class="list-group-item">Gender: <strong>{{ $userProfile->gender }}</strong></li>
                            <li class="list-group-item">Date of Birth: <strong>{{ $userProfile->date_of_birth }}</strong></li>
                            <li class="list-group-item">Height: <strong>{{ $userProfile->height }}</strong></li>
                            <li class="list-group-item">Religion: <strong>{{ $userProfile->religion }}</strong></li>
                            <li class="list-group-item">City: <strong>{{ $userProfile->religion }}</strong></li>
                        </ul>
                    </div>

                    <!-- <div>
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
                    </div> -->
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
