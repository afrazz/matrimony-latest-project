
@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
@if (isset($message))
    <p>{{ $message }}</p>
@else
    <ul>
        @foreach ($otherUsersData as $profile)
            <li>{{ $profile->fullname }}</li>
        @endforeach
    </ul>
@endif

@endsection