@vite('resources/css/app.css')
@extends('layouts.navbar')
    @section('navbar')

            <div class="flex flex-wrap text-slate-800">
                <div class="relative hidden h-screen select-none flex-col justify-center bg-slate-600 text-center md:flex md:w-1/3">
                <img class="mx-auto w-56 max-w-lg rounded-lg object-cover" src=" {{ asset('images/banner-booking-page.jpg') }} " alt="Ferry" />
                <div class="mx-auto py-16 px-8 text-white">
                    <p class="my-6 text-4xl font-bold leading-10">Let us take you to your <span class="truncate border-b-8 border-blue-400 font-bold text-blue-400">destination</span></p>
                    <p class="mb-4 text-lg font-medium">Booking a ferry trip has never been easier</p>
                </div>
                </div>
                <div class="flex w-full flex-col md:w-2/3">
                <div class="flex justify-center pt-12 md:justify-start md:pl-12">
                    <a href="#" class="text-2xl font-bold text-white bg-gray-800 px-2 py-1"> EasyTrip Booking </a>
                </div>
                <div class="my-auto flex max-w-screen-md flex-col justify-center px-6 md:pl-12 pt-8 sm:pt-0 md:justify-start">
                    <p class="text-center text-3xl font-bold md:text-left">Book your Ferry Trip Today</p>
            
                    <form class="flex flex-col items-stretch pt-3 pb-8 md:pt-8" method="POST" action="">
                    <div class="grid gap-x-4 gap-y-3 sm:grid-cols-2">
                        <label class="block" for="origin">
                        <p class="mb-1 mt-2 text-sm text-gray-600">Origin</p>
                        <select class="w-full rounded-md border bg-white py-2 px-2 outline-none ring-gray-500 focus:ring-2" type="text" placeholder="Select ferry">
                            <option value="standard">Standard Ferry</option>
                            <option value="luxury">Luxury Ferry</option>
                        </select>
                        </label>
                        <label class="block" for="Destination">
                        <p class="mb-1 mt-2 text-sm text-gray-600">Destination</p>
                        <select class="w-full rounded-md border bg-white py-2 px-2 outline-none ring-gray-500 focus:ring-2" type="text" placeholder="Select ferry">
                            <option value="standard">Standard Ferry</option>
                            <option value="luxury">Luxury Ferry</option>
                        </select>
                        </label>
                        <label class="block" for="adult">
                        <p class="mb-1 mt-2 text-sm text-gray-600">Adult/Child</p>
                        <select class="w-full rounded-md border bg-white py-2 px-2 outline-none ring-gray-500 focus:ring-2" type="text" aria-placeholder="Passenger 2 years old and above">
                            <option disabled selected>Passenger 2 years old and above</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        </label>
                        <label class="block" for="departure date">
                        <p class="mb-1 mt-2 text-sm text-gray-600">Departure Date</p>
                        <select class="w-full rounded-md border bg-white py-2 px-2 outline-none ring-gray-500 focus:ring-2" type="text" placeholder="Select ferry">
                            <option value="standard">Standard Ferry</option>
                            <option value="luxury">Luxury Ferry</option>
                        </select>
                        </label>
                        
                    </div>
                    <div class="block">
                        <label class="inline-block text-sm text-gray-500" for=""> By book submit, you agree to the 
                            <a class="underline" href="#">Terms and Conditions</a></label>
                    </div>
                    <button type="submit" class="mt-6 rounded-full bg-blue-400 text-white px-4 py-2 text-center text-base font-semibold font-shadow-md outline-none ring-blue-500 ring-offset-2 transition hover:bg-blue-400 focus:ring-2 md:w-40">Book</button>
                    </form>
                </div>
                </div>
            </div>
        
    @endsection
