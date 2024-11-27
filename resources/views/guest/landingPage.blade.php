@vite('resources/css/app.css')

@extends('layouts.navbar')
@section('navbar')
    <section class="pt-12 pb-12 sm:pb-16 lg:pt-8">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid max-w-lg grid-cols-1 mx-auto lg:max-w-full lg:items-center lg:grid-cols-2 gap-y-12 lg:gap-x-16">
                <div>
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl font-bold leading-tight text-gray-900 sm:text-5xl sm:leading-tight lg:leading-tight lg:text-6xl font-pj">Seamless Ferry Booking Made Easy with EasyTrip.</h1>
                        <p class="mt-2 text-lg text-gray-600 sm:mt-8 font-inter">Experience a smooth and efficient way to reserve your ferry tickets today!</p>

                        <form action="#" method="POST" class="mt-8 sm:mt-10">
                            <div class="mt-4 sm:mt-0 flex sm:inset-y-0 sm:right-0 sm:flex sm:items-center sm:pr-2">
                                <button type="submit" class="inline-flex px-6 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 rounded-lg focus:outline-none focus:bg-gray-600 font-pj hover:bg-gray-600">Get Started Now</button>
                            </div>
                        </form>
                    </div>

                    <div class="flex items-center justify-center mt-10 space-x-6 lg:justify-start sm:space-x-8">
                        <div class="flex items-center">
                            <p class="text-3xl font-medium text-gray-900 sm:text-4xl font-pj">Fast & Secure Bookings</p>
                            <p class="ml-3 text-sm text-gray-900 font-pj">Reliable Services Across<br />Destinations</p>
                        </div>

                        <div class="hidden sm:block">
                            <svg class="text-gray-400" width="16" height="39" viewBox="0 0 16 39" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.72265" y1="10.584" x2="15.7226" y2="0.583975"></line>
                                <line x1="0.72265" y1="17.584" x2="15.7226" y2="7.58398"></line>
                                <line x1="0.72265" y1="24.584" x2="15.7226" y2="14.584"></line>
                                <line x1="0.72265" y1="31.584" x2="15.7226" y2="21.584"></line>
                                <line x1="0.72265" y1="38.584" x2="15.7226" y2="28.584"></line>
                            </svg>
                        </div>

                        <div class="flex items-center">
                            <p class="text-3xl font-medium text-gray-900 sm:text-4xl font-pj">🌍</p>
                            <p class="ml-3 text-sm text-gray-900 font-pj">Join Us<br />Smile Across the Seas</p>
                        </div>
                    </div>
                </div>

                <div>
                    <img class="w-full" src="https://i0.wp.com/www.barkota.com/wp-content/uploads/2023/03/background-img-2.png?resize=634%2C899&ssl=1" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection