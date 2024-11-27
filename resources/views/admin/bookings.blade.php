@vite('resources/css/app.css')
@extends('layouts.adminLayout')

    @section('adminLayout')
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Booking List</h2>
            
            <!-- Booking List Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-100 text-gray-600">
                        <tr>
                            <th class="px-4 py-2 text-left">Customer Name</th>
                            <th class="px-4 py-2 text-left">Vessel</th>
                            <th class="px-4 py-2 text-left">Date</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <!-- Example Booking 1 -->
                        <tr>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">Passenger Ferry</td>
                            <td class="px-4 py-2">2024-12-01</td>
                            <td class="px-4 py-2">Confirmed</td>
                            <td class="px-4 py-2">
                                <button 
                                    onclick="viewBooking()" 
                                    class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500"
                                >
                                    View
                                </button>
                                <button 
                                    onclick="editBooking()" 
                                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500"
                                >
                                    Edit
                                </button>
                                <button 
                                    onclick="deleteBooking()" 
                                    class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
        
                        <!-- Example Booking 2 -->
                        <tr>
                            <td class="px-4 py-2">Alice Smith</td>
                            <td class="px-4 py-2">Cargo Ship</td>
                            <td class="px-4 py-2">2024-12-05</td>
                            <td class="px-4 py-2">Pending</td>
                            <td class="px-4 py-2">
                                <button 
                                    onclick="viewBooking()" 
                                    class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500"
                                >
                                    View
                                </button>
                                <button 
                                    onclick="editBooking()" 
                                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500"
                                >
                                    Edit
                                </button>
                                <button 
                                    onclick="deleteBooking()" 
                                    class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
        
                        <!-- Additional bookings can go here -->
                    </tbody>
                </table>
            </div>
        </div>
        
        <script>
            // View function (Placeholder)
            function viewBooking() {
                alert('View booking details functionality is under construction!');
                // You can redirect to a detailed view page or show a modal with the booking information
            }
        
            // Edit function (Placeholder)
            function editBooking() {
                alert('Edit booking functionality is under construction!');
                // You can redirect to an edit page or show a modal for editing booking details
            }
        
            // Delete function (Placeholder)
            function deleteBooking() {
                const confirmation = confirm("Are you sure you want to delete this booking?");
                if (confirmation) {
                    alert('Booking deleted successfully!');
                    // Add your deletion logic here (e.g., API call)
                }
            }
        </script>
    
    @endsection
