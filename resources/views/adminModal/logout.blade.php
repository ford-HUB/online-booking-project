@vite('resources/css/app.css')
@extends('layout.adminLayout')

    @section('adminLayout')
        <!-- Logout Modal -->
        <div id="logoutModal" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-semibold text-gray-700">Are you sure you want to log out?</h2>
                <div class="mt-4 flex justify-between">
                    <button id="cancelButton" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Log Out</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trigger Button -->
        <button onclick="document.getElementById('logoutModal').classList.remove('hidden')" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            Log Out
        </button>

        <script>
            // Close the modal when clicking the cancel button
            document.getElementById('cancelButton').onclick = function() {
                document.getElementById('logoutModal').classList.add('hidden');
            }
        </script>

    @endsection
