@extends('layouts.user')

@section('title', 'Contact Us')

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
<h1 class="text-5xl font-bold text-gray-900 text-white">Contact Us</h1>
</header>

<div class="container">
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-5 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      
    <div class="flex justify-between flex-wrap">
        <div class="block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <i class="fas fa-map-marker-alt mr-3" style="color: #D20062; font-size: 20px"></i>123 Matrimony Lane, City, Country
        </div>
        <div class="block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <i class="fas fa-phone-alt mr-3" style="color: #D20062; font-size: 20px"></i> +123 456 7890
        </div>
        <div class="block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <i class="fas fa-envelope mr-3" style="color: #D20062; font-size: 20px"></i> support@matrimonysite.com
        </div>
    </div>
    
      
      



      <!-- <li><i class="fas fa-phone-alt"></i> Phone: +123 456 7890</li> -->
      <!-- <li><i class="fas fa-envelope"></i> Email: </li>     -->
      <!-- <div class="block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <i class="fas fa-map-marker-alt mr-3" style="color: #D20062; font-size: 20px"></i>123 Matrimony Lane, City, Country
        </div>
      </div> -->
      
      <form action="#" class="space-y-8 mt-6">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800" style="background: #D20062">Send message</button>
      </form>
  </div>
</section>


   

    <!-- <header class="bg-white shadow mb-4">
        <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
        </div>
    </header> -->
    <!-- <h1 class="text-3xl font-bold text-gray-900 mb-10">Contact Us</h1>

    <div class="grid grid-cols-2 gap-4 w-100">
    <div class="flex">
        <div class="block flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Get In Touch</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">If you have any questions or need assistance, feel free to reach out to us. We're here to help you find your perfect match.</p>
        </div>
    </div>
    <div class="flex">
        <div class="block flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Contact Information</h5>
            <ul class="list-unstyled">
                <li><i class="fas fa-map-marker-alt"></i> Address: 123 Matrimony Lane, City, Country</li>
                <li><i class="fas fa-phone-alt"></i> Phone: +123 456 7890</li>
                <li><i class="fas fa-envelope"></i> Email: support@matrimonysite.com</li>
            </ul>
            </div>
        </div>
    </div> -->

    
    <!-- <section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">If you have any questions or need assistance, feel free to reach out to us. We're here to help you find your perfect match.</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">Send message</button>
      </form>
  </div>
</section> -->

   


     
            <!-- <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-primary">Send Us a Message</h2>
                    <form>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div> -->
</div>

<style>
    .lead {
        font-size: 1.25rem;
    }
    .text-primary {
        color: #007bff !important;
    }
    .list-unstyled li {
        margin-bottom: 10px;
    }
    .list-unstyled i {
        margin-right: 10px;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
@endsection
