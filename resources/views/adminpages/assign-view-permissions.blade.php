@extends('layouts.app')
 
@section('title', 'Assign')
 
@section('contents')

<h1>Assign View Permissions for User Profile</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div>
        <h2>User Profile Details</h2>
        <p><strong>User ID:</strong> {{ $userProfile->user_id }}</p>
        <p><strong>Name:</strong> {{ $userProfile->fullname }}</p>
        <p><strong>Gender:</strong> {{ $userProfile->gender }}</p>
        <!-- Add more user profile fields as needed -->
    </div>

    <div>
        <h2>Assign View Permissions to Other Users</h2>
        <form action="{{ route('admin.assignViewPermissions', ['userId' => $userProfile->user_id]) }}" method="POST">
            @csrf
            <label for="viewableProfiles">Select Users to Assign Permissions:</label>
            <select name="viewable_user_ids[]" id="viewableProfiles" multiple>
                
                @foreach($allUsers as $user)
                
                    <option value="{{ $user->user_id }}">{{ $user->name }} (ID: {{ $user->user_id }})</option>
                @endforeach
            </select>
            <button type="submit">Assign Permissions</button>
        </form>
        
    </div>

@endsection
