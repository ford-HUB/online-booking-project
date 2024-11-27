<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <div id="sidebar" class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 sticky top-0 h-screen z-30">
        <div class="text-white text-3xl font-semibold text-center mb-6">
            <a href="{{ url('/admin/home') }}">Admin Panel</a>
        </div>
        <nav class="space-y-4">
            <a href="{{ url('/admin/dashboard') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
            </a>
            <a href="{{ url('/admin/post') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-pencil-alt mr-3"></i> Post
            </a>
            <a href="{{ url('/admin/view post') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-eye mr-3"></i> View Post
            </a>
            <a href="{{ url('/admin/view users') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-users mr-3"></i> Users
            </a>
            <a href="{{ url('/admin/list of bookings') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-book mr-3"></i> Bookings List
            </a>
            <a href="{{ url('/admin/approval bookings') }}" class="flex items-center text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-check-circle mr-3"></i> Approve Bookings
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col w-full overflow-y-auto">

        <!-- Navbar (Sticky Header) -->
        <div class="bg-white shadow-md px-6 py-4 flex justify-between items-center sticky top-0 z-40">
            <div class="flex-1"></div>

            <!-- Notification Icon -->
            <button class="relative mr-6" id="notification-icon">
                <i class="fas fa-bell text-gray-600 text-xl"></i>
                <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs px-2"></span>
            </button>

            <!-- Notification Dropdown -->
            <div id="notification-dropdown" class="absolute top-11 right-10 mt-2 w-48 bg-white shadow-lg rounded-lg hidden z-50">
                <div class="p-4 text-gray-700">
                    <h3 class="text-lg font-semibold">Notifications</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="flex items-center text-sm">
                            <i class="fas fa-check-circle mr-2 text-green-500"></i> New user registered
                        </li>
                        <li class="flex items-center text-sm">
                            <i class="fas fa-comment-alt mr-2 text-blue-500"></i> New comment on post
                        </li>
                        <li class="flex items-center text-sm">
                            <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i> Booking approval pending
                        </li>
                        <li class="flex items-center text-sm">
                            <i class="fas fa-calendar-check mr-2 text-red-500"></i> Appointment scheduled
                        </li>
                        <li class="flex items-center text-sm">
                            <i class="fas fa-users mr-2 text-gray-500"></i> New user added to team
                        </li>
                    </ul>
                </div>
            </div>

            <div class="relative">
                <button class="flex items-center space-x-2 text-gray-600" id="profile-button">
                    <img src="{{ asset('images/administrator-logo.png') }}" alt="Admin" class="items-center rounded-md w-8 h-8">
                    <span>{{ auth()->user()->name }}</span>
                </button>
                <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg hidden" id="profile-dropdown">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                    <a onclick="document.getElementById('logoutModal').classList.remove('hidden')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </div>

        <!-- Logout Modal -->
        <div id="logoutModal" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
            <div class="bg-white p-4 rounded-lg shadow-lg w-64">
                <h2 class="text-lg font-semibold text-gray-700">Are you sure you want to log out?</h2>
                <div class="mt-6 flex space-x-2">
                    <button id="cancelButton" class="bg-gray-300 text-gray-700 px-4 py-1 rounded-md w-32 h-8">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md w-32">Log Out</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="flex-1 p-6">
            @yield('adminLayout')
        </div>
    </div>

    <script>
        document.getElementById('profile-button').addEventListener('click', function() {
            const dropdown = document.getElementById('profile-dropdown');
            dropdown.classList.toggle('hidden');
        });

        document.getElementById('notification-icon').addEventListener('click', function(event) {
            event.stopPropagation();
            const notificationDropdown = document.getElementById('notification-dropdown');
            notificationDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const notificationDropdown = document.getElementById('notification-dropdown');
            const notificationIcon = document.getElementById('notification-icon');
            if (!notificationDropdown.contains(event.target) && !notificationIcon.contains(event.target)) {
                notificationDropdown.classList.add('hidden');
            }
        });

        document.getElementById('cancelButton').onclick = function() {
            document.getElementById('logoutModal').classList.add('hidden');
        }
    </script>

</body>
