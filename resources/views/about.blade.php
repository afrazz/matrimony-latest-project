@extends('layouts.user')

@section('title', 'About Us')

@section('contents')

<head>
    <style>
        @layer utilities {
            .bg-half-image {
                background-image: linear-gradient(rgba(210, 0, 98, 0.8), rgba(210, 0, 98, 0.8)), url('./bg-section.jpg');
                background-size: cover;
                background-position: center;
                height: 40vh;
            }
        }
    </style>

    <script src="https://kit.fontawesome.com/9f4528f967.js" crossorigin="anonymous"></script>
</head>


<header class="bg-half-image flex items-center justify-center">
    <h1 class="text-5xl font-bold text-gray-900 text-white">About Us</h1>
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
    <p class="mb-5 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
</header>


<div class="container mt-5">
    <!-- <header class="bg-white shadow mb-4">
        <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">About Us</h1>
        </div>
    </header> -->
    <h1 class="text-3xl font-bold text-gray-900">About Us</h1>

    <main>
        <section class="mb-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-primary">Our Mission</h2>
                    <p class="lead">At My Matrimony, we are dedicated to helping you find your perfect match. Our mission is to provide a safe and trustworthy platform for individuals to connect and build meaningful relationships.</p>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-primary">Our Values</h2>
                    <ul class="list-unstyled">
                        <li><strong>Trust:</strong> We prioritize the safety and security of our users.</li>
                        <li><strong>Respect:</strong> We foster a respectful and inclusive community.</li>
                        <li><strong>Privacy:</strong> We are committed to protecting your personal information.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-primary">Features</h2>
                    <p class="lead">Our platform offers a variety of features designed to help you find your ideal partner:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-search"></i> Advanced search filters to find matches based on your preferences.</li>
                        <li><i class="fas fa-shield-alt"></i> Profile verification to ensure genuine connections.</li>
                        <li><i class="fas fa-heart"></i> Compatibility matching to help you find the perfect match.</li>
                        <li><i class="fas fa-comments"></i> Secure messaging to communicate with potential partners.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
