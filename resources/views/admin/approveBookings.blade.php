@vite('resources/css/app.css')
@extends('layouts.adminLayout')
    @section('adminLayout')
           
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Approval Bookings</h2>
    
        <!-- Booking List -->
        <div class="space-y-4">
            <!-- Example Booking Item -->
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm">
                <div class="flex space-x-6 w-full">
                    <!-- Company Name -->
                    <p class="text-sm font-medium text-gray-600">Company: <span class="font-semibold text-gray-800">Company A</span></p>
    
                    <!-- Vessel Type -->
                    <p class="text-sm font-medium text-gray-600">Vessel: <span class="font-semibold text-gray-800">Cruise Ship</span></p>
    
                    <!-- Date & Time Schedule -->
                    <p class="text-xs font-medium text-gray-600">Date & Time: 
                        <span class="font-semibold text-gray-800">2024-12-25 <br> 10:00 AM</span>
                    </p>
    
                    <!-- Total Fee -->
                    <p class="text-sm font-medium text-gray-600">Fee: <span class="font-semibold text-gray-800">$150.00</span></p>
    
                    <!-- User Email -->
                    <p class="text-sm font-medium text-gray-600">User Email: <span class="font-semibold text-gray-800">user@example.com</span></p>
                </div>
    
                <!-- Action Buttons -->
                <div class="flex space-x-3 ml-6">
                    <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
                        View
                    </a>
                    <a href="#" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500">
                        Approve
                    </a>
                    <a href="#" class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500">
                        Decline
                    </a>
                </div>
            </div>
    
            <!-- Another Booking Item -->
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm">
                <div class="flex space-x-6 w-full">
                    <p class="text-sm font-medium text-gray-600">Company: <span class="font-semibold text-gray-800">Company B</span></p>
                    <p class="text-sm font-medium text-gray-600">Vessel: <span class="font-semibold text-gray-800">Cargo Ship</span></p>
                    <p class="text-xs font-medium text-gray-600">Date & Time: 
                        <span class="font-semibold text-gray-800">2024-12-30 <br> 02:00 PM</span>
                    </p>
                    <p class="text-sm font-medium text-gray-600">Fee: <span class="font-semibold text-gray-800">$200.00</span></p>
                    <p class="text-sm font-medium text-gray-600">User Email: <span class="font-semibold text-gray-800">anotheruser@example.com</span></p>
                </div>
    
                <div class="flex space-x-3 ml-6">
                    <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
                        View
                    </a>
                    <a href="#" class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500">
                        Approve
                    </a>
                    <a href="#" class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500">
                        Decline
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    
    @endsection