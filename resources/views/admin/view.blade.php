@extends('layouts.adminLayout')

@section('adminLayout')
    <h1 class="text-xl font-semibold text-gray-800 mb-4">Post Line</h1>

    @foreach ($company as $comItems)
        <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <!-- Post Details -->
            <div class="flex items-center space-x-6">
                <!-- Company Name -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Company Name:</p>
                    <p class="text-gray-800 font-semibold" id="company-name">{{ $comItems->name }}</p>
                </div>

                <!-- Vessel Type -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Vessel Type:</p>
                    <p class="text-gray-800 font-semibold" id="vessel-type">{{ $comItems->vessel }}</p>
                </div>

                <!-- Schedule / Departure -->
                <div>
                    <p class="text-sm font-medium text-gray-600">Schedule / Departure:</p>
                    <p class="text-gray-800 font-semibold" id="schedule-destination">{{ $comItems->schedule }}</p>
                </div>
            </div>

            <!-- Buttons (Edit, Delete, View) -->
            <div class="space-x-4">
                <!-- Edit Button -->
                <button onclick="showEditModal({{ $comItems->id }})" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
                    Edit
                </button>

                <!-- Delete Button -->
                <button onclick="showDeleteModal({{ $comItems->id }})" class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-red-500">
                    Delete
                </button>

                <!-- View Button -->
                <button class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-500">
                    View
                </button>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal-{{ $comItems->id }}" class="fixed inset-0 z-10 hidden bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-96">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-700">Confirm Delete</h2>
                    <p class="text-gray-600 mt-2">Are you sure you want to delete this item? This action cannot be undone.</p>
                </div>
                <div class="flex justify-end px-3 space-x-2">
                    <!-- Cancel Button -->
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 h-10" onclick="closeDeleteModal({{ $comItems->id }})">
                        Cancel
                    </button>
                    
                    <!-- Delete Form -->
                    <form id="deleteForm-{{ $comItems->id }}" action="{{ route('admin.edit.delete', $comItems->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal for Editing -->
        <div id="editModal-{{ $comItems->id }}" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Post</h2>

                <form id="editForm" class="space-y-4" method="POST" action="{{ route('admin.edit.update', $comItems->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Company Name -->
                    <div>
                        <label for="edit-company-name-{{ $comItems->id }}" class="block text-sm font-medium text-gray-600">Company Name</label>
                        <input type="text" id="edit-company{{ $comItems->id }}" name="edit-company" value="{{ old('edit-company', $comItems->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Enter company name" required />
                    </div>

                    <!-- Vessel Type -->
                    <div>
                        <label for="edit-vessel-type-{{ $comItems->id }}" class="block text-sm font-medium text-gray-600">Vessel Type</label>
                        <input type="text" id="edit-vessel{{ $comItems->id }}" name="edit-vessel" value="{{ old('edit-vessel', $comItems->vessel) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" placeholder="Enter vessel type" required />
                    </div>

                    <!-- Schedule / Departure Date -->
                    <div>
                        <label for="schedule-{{ $comItems->id }}" class="block text-sm font-medium text-gray-600">Schedule / Departure Date</label>
                        <input type="text" id="schedule{{ $comItems->id }}" name="edit-schedule" value="{{ old('edit-schedule', $comItems->schedule) }}" placeholder="Enter schedule & date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3" required />
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between">
                        <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md" onclick="closeEditModal({{ $comItems->id }})">Cancel</button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save</button>
                    </div>
                </form>
            </div>
        </div>

    @endforeach
@endsection

<script>
    // Show the delete modal
    function showDeleteModal(postId) {
        document.getElementById('deleteModal-' + postId).classList.remove('hidden');
    }

    // Close the delete modal when clicking cancel
    function closeDeleteModal(postId) {
        document.getElementById('deleteModal-' + postId).classList.add('hidden');
    }

    // Close edit modal
    function showEditModal(postId) {
        document.getElementById('editModal-' + postId).classList.remove('hidden');
    }

    // Close the edit modal
    function closeEditModal(postId) {
        document.getElementById('editModal-' + postId).classList.add('hidden');
    }

    window.addEventListener('click', function (e) {
    const modals = document.querySelectorAll('.fixed'); // All modals
    modals.forEach((modal) => {
        // Check if the clicked target is not inside the modal content
        if (modal.contains(e.target) && !e.target.closest('.bg-white')) {
            modal.classList.add('hidden');
        }
    });
    });
</script>
