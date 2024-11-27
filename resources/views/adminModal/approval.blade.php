@vite('resources/css/app.css')
@extends('layouts/adminLayout')
    @section('adminLayout')
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Approve Booking</h2>
        
        <!-- Booking Details -->
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Customer Name -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Customer Name:</p>
                    <p class="text-gray-800 font-semibold" id="customer-name">John Doe</p>
                </div>
    
                <!-- Vessel Type -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Vessel Type:</p>
                    <p class="text-gray-800 font-semibold" id="vessel-type">Passenger Ferry</p>
                </div>
    
                <!-- Date -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Date:</p>
                    <p class="text-gray-800 font-semibold" id="date">2024-12-01</p>
                </div>
    
                <!-- Origin -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Origin:</p>
                    <p class="text-gray-800 font-semibold" id="origin">Cebu City</p>
                </div>
    
                <!-- Destination -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Destination:</p>
                    <p class="text-gray-800 font-semibold" id="destination">Bohol</p>
                </div>
    
                <!-- Status -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Status:</p>
                    <p class="text-gray-800 font-semibold" id="status">Pending</p>
                </div>
            </div>
        </div>
    
        <!-- Fee Breakdown -->
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Fee Breakdown</h3>
            <div class="space-y-4">
                <!-- Booking Fee -->
                <div class="flex justify-between">
                    <p class="text-sm font-medium text-gray-600">Booking Fee:</p>
                    <p class="text-gray-800 font-semibold" id="booking-fee">$50</p>
                </div>
    
                <!-- Additional Charges -->
                <div class="flex justify-between">
                    <p class="text-sm font-medium text-gray-600">Additional Charges:</p>
                    <p class="text-gray-800 font-semibold" id="additional-charges">$10</p>
                </div>
    
                <!-- Seat Reservation -->
                <div class="flex justify-between">
                    <p class="text-sm font-medium text-gray-600">Seat Reservation Fee:</p>
                    <p class="text-gray-800 font-semibold" id="seat-reservation">$30</p>
                </div>
    
                <!-- Discounts -->
                <div class="flex justify-between">
                    <p class="text-sm font-medium text-gray-600">Discount:</p>
                    <p class="text-gray-800 font-semibold" id="discount">-$15</p>
                </div>
    
                <!-- Total Price -->
                <div class="flex justify-between">
                    <p class="text-sm font-medium text-gray-600">Total Price:</p>
                    <p class="text-gray-800 font-semibold" id="total-price">$75</p>
                </div>
            </div>
        </div>
    
        <!-- More Details (Advanced Booking) -->
        <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">More Details</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Departure Time -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Departure Time:</p>
                    <p class="text-gray-800 font-semibold">2024-12-01 09:00 AM</p>
                </div>
    
                <!-- Seat Type -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Seat Type:</p>
                    <p class="text-gray-800 font-semibold">Business Class</p>
                </div>
    
                <!-- Special Requests -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Special Requests:</p>
                    <p class="text-gray-800 font-semibold">None</p>
                </div>
            </div>
        </div>
    
        <!-- Approve / Cancel Buttons -->
        <div class="flex space-x-4">
            <button 
                onclick="approveBooking()" 
                class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500"
            >
                Approve Booking
            </button>
    
            <button 
                onclick="cancelBooking()" 
                class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500"
            >
                Cancel
            </button>
        </div>
    </div>
    
    <script>
        // Approve function (Placeholder)
        function approveBooking() {
            alert('Booking Approved!');
            // Add your approval logic here (e.g., API call to approve booking)
        }
    
        // Cancel function (Placeholder)
        function cancelBooking() {
            alert('Booking has been canceled.');
            // Add your cancel logic here (e.g., redirect to the previous page)
        }
    </script>
    @endsection
