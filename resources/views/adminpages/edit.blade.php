@extends('layouts.app')

@section('title', 'Edit Profile')

@section('contents')
<div class="container">
    <h1>Edit User Profile</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.updateprofiles', $userProfile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $userProfile->fullname }}">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" value="{{ old('gender', $userProfile->gender) }}">
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth', $userProfile->date_of_birth) }}">
        </div>

        <div class="form-group">
            <label for="height">Height</label>
            <input type="number" name="height" id="height" class="form-control" value="{{ old('height', $userProfile->height) }}">
        </div>

        <div class="form-group">
            <label for="religion">Religion</label>
            <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion', $userProfile->religion) }}">
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $userProfile->city) }}">
        </div>

        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="{{ old('mobile_number', $userProfile->mobile_number) }}">
        </div>

        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" name="education" id="education" class="form-control" value="{{ old('education', $userProfile->education) }}">
        </div>

        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" class="form-control" value="{{ old('occupation', $userProfile->occupation) }}">
        </div>

        <div class="form-group">
            <label for="annual_income">Annual Income</label>
            <input type="number" name="annual_income" id="annual_income" class="form-control" value="{{ old('annual_income', $userProfile->annual_income) }}">
        </div>

        <div class="form-group">
            <label for="Payment">Payment</label>
            <input type="text" name="Payment" id="Payment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('Payment', $userProfile->Payment) }}">
        </div>

        <div class="form-group">
            <label for="profile_pic">Profile Picture</label>
            <input type="file" name="profile_pic" id="profile_pic" class="form-control">
            @if($userProfile->profile_pic)
                <img src="{{ asset('storage/' . $userProfile->profile_pic) }}" alt="Profile Picture" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
