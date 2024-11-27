@vite('resoures/css/app.css')
@extends('layouts.adminLayout')

@section('adminLayout')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Create New Post</h2>
                @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                    <span class="font-semibold">{{ session('success') }}</span>
                    <button class="text-white ml-4" onclick="this.parentElement.style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                @endif
        <form id="postForm" class="grid grid-cols-1 md:grid-cols-2 gap-6" method="POST" action=" {{ route('admin.post') }} ">
            @csrf
            <!-- Company Name -->
            <div>
                <label for="company-name" class="block text-sm font-medium text-gray-600">Company Name</label>
                <input 
                    type="text" 
                    id="company-name" 
                    name="company-name" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter company name" 
                    required
                />
            </div>

            <!-- Vessel Type -->
            <div>
                <label for="vessel-type" class="block text-sm font-medium text-gray-600">Vessel Type</label>
                <input 
                    type="text" 
                    id="vessel-type" 
                    name="vessel-type" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter vessel type" 
                    required
                />
            </div>

            <!-- Contact -->
            <div>
                <label for="contact" class="block text-sm font-medium text-gray-600">Contact</label>
                <input 
                    type="text" 
                    id="contact" 
                    name="contact" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter contact details" 
                    required
                />
            </div>

            <!-- Origin -->
            <div>
                <label for="origin" class="block text-sm font-medium text-gray-600">Origin</label>
                <input 
                    type="text" 
                    id="origin" 
                    name="origin" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter origin" 
                    required
                />
            </div>

            <!-- Destination -->
            <div>
                <label for="destination" class="block text-sm font-medium text-gray-600">Destination</label>
                <input 
                    type="text" 
                    id="destination" 
                    name="destination" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter destination" 
                    required
                />
            </div>

            <!-- Schedule/Departure Date -->
            <div>
                <label for="schedule" class="block text-sm font-medium text-gray-600">Schedule / Departure Date</label>
                <input 
                    type="text" 
                    id="schedule" 
                    name="schedule_departure" 
                    placeholder="Enter schedule & date"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" 
                    required
                />
            </div>

             <!-- Capacity -->
            <div>
                <label for="capacity" class="block text-sm font-medium text-gray-600">Vessel Capacity</label>
                <input 
                    type="text" 
                    id="capacity" 
                    name="capacity" 
                    placeholder="Enter vessel capacity"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" 
                    required
                />
            </div>

            <!-- Fees -->
            <div>
                <label for="fees" class="block text-sm font-medium text-gray-600">Fees</label>
                <input 
                    type="text" 
                    id="fees" 
                    name="fees" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"
                    placeholder="Enter fees" 
                    min="0" 
                    required
                />
            </div>

            <!-- Submit Button -->
            <div class="md:col-span-2 mt-4">
                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>


@endsection
