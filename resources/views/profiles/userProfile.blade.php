@extends('layouts.user')

@section('title', 'UserProfile')

@section('contents')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    </head>

    <body>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    Register
                    <p>Email: {{ $email }}</p>
                    <p></p>
                </div>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700" style="margin-top:250px">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8" >
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Edit Your Account account
                        </h1>
                        <form action="{{ route('userprofile.save') }}" method="POST" class="" enctype="multipart/form-data" >
                            @csrf
                            
                            <div>
                                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                                <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name: {{ $name }}" value="{{ old('fullname', session('name')) }}">
                                @error('fullname')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                <input type="text" name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Gender" required>
                                @error('gender')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Date of Birth" required>
                                @error('dob')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height</label>
                                <input type="number" name="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Height" required>
                                @error('height')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</label>
                                <input type="text" name="religion" id="religion" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Religion" required>
                                @error('religion')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="City" required>
                                @error('city')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="mobile_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile Number</label>
                                <input type="text" name="mobile_number" id="mobile_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mobile Number" required>
                                @error('mobile_number')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="education" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Education</label>
                                <input type="text" name="education" id="education" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Education" required>
                                @error('education')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="occupation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
                                <input type="text" name="occupation" id="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Occupation" required>
                                @error('occupation')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="annual_income" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Annual Income</label>
                                <input type="number" name="annual_income" id="annual_income" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Annual Income" required>
                                @error('annual_income')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div>
                                <label for="profile_pic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Picture</label>
                                <input type="file" name="profile_pic" id="profile_pic" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" accept="image/*" required>
                                @error('profile_pic')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Upload Profile</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
@endsection
