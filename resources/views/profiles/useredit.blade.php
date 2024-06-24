@extends('layouts.user')

@section('title', 'UserProfile')

@section('contents')

<div class="container">
    <h1>Edit Your Profile</h1>
    <form action="{{ route('updateuserprofile', ['id' => $userProfile->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname', $userProfile->fullname) }}">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $userProfile->gender) }}">
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $userProfile->date_of_birth) }}">
        </div>

        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height" value="{{ old('height', $userProfile->height) }}">
        </div>

        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion', $userProfile->religion) }}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $userProfile->city) }}">
        </div>

        <div class="mb-3">
            <label for="mobile_number" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ old('mobile_number', $userProfile->mobile_number) }}">
        </div>

        <div class="mb-3">
            <label for="education" class="form-label">Education</label>
            <input type="text" class="form-control" id="education" name="education" value="{{ old('education', $userProfile->education) }}">
        </div>

        <div class="mb-3">
            <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" value="{{ old('occupation', $userProfile->occupation) }}">
        </div>

        <div class="mb-3">
            <label for="annual_income" class="form-label">Annual Income</label>
            <input type="number" class="form-control" id="annual_income" name="annual_income" value="{{ old('annual_income', $userProfile->annual_income) }}">
        </div>

        <div class="mb-3">
            <label for="profile_pic" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile_pic" name="profile_pic">
            @if ($userProfile->profile_pic)
                <img src="{{ asset('storage/' . $userProfile->profile_pic) }}" alt="Profile Picture" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection