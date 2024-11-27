@extends('layouts.adminLayout')

@section('adminLayout')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg">
        <!-- Header -->
        <div class="p-4 flex justify-between items-center border-b">
            <h1 class="text-xl font-bold">All users</h1>         
        </div>

        <!-- Search and Actions -->              
        <div class="p-4">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search for users"
                    class="w-full bg-gray-50 border rounded-lg px-10 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                />
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Position</th>
                        <th class="px-4 py-2">Country</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <!-- Row 1 -->
                    <tr>
                        <td class="px-4 py-3 flex items-center">
                            <img src="https://via.placeholder.com/40" alt="User avatar" class="w-10 h-10 rounded-full mr-3" />
                            <div>
                                <p class="font-bold">Neil Sims</p>
                                <p class="text-sm text-gray-500">neil.sims@flowbite.com</p>
                            </div>
                        </td>
                        <td class="px-4 py-3">Front-end developer</td>
                        <td class="px-4 py-3">United States</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm">Active</span>
                        </td>
                        <td class="px-4 py-3 flex space-x-2">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0 0h1m0-4h1v4h-1m-4 0v8h8m-1-8V7m0-4v4m0 8v4m0-8h-4" />
                                </svg>
                                Edit user
                            </button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                </svg>
                                Delete user
                            </button>
                        </td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
