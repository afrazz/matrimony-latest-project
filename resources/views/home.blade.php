@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<head>
<script src="https://kit.fontawesome.com/9f4528f967.js" crossorigin="anonymous"></script>
</head>

<h1 class="text-3xl font-bold text-gray-900 mb-4">
    All profiles
</h1>
<main>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($otherUsersData as $userData)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" style="height: 225px; width:100%; object-fit:cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Outdoors-man-portrait_%28cropped%29.jpg/800px-Outdoors-man-portrait_%28cropped%29.jpg" alt="User Image">
                <div class="px-3 py-3">
                    <div class="font-bold text-xl mb-2">{{ $userData->fullname }}</div>
                    <div class="flex justify-between flex-wrap">
                        <div>
                            <i class="fa-solid fa-location-dot"></i> {{ $userData->city }}
                        </div>
                        <div>
                            <i class="fa-solid fa-phone"></i> {{ $userData->mobile_number }}
                        </div>
                    </div>
                    <a href="{{ route('checkprofile', $userData->id) }}" class="mt-3 flex justify-center w-full items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #D20062">
                        Check Profile
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
