<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS CDN (যদি ব্যবহার করেন) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <!-- Navigation Bar -->
        <nav class="bg-blue-600 p-4">
            <div class="flex justify-between items-center">
                <h1 class="text-white text-2xl font-bold">Admin Panel</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="bg-white p-6 mt-4 rounded shadow">
            <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>
            <p class="text-gray-700">Welcome, Admin!</p>

            <!-- Additional Content -->
            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-2">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-blue-100 p-4 rounded">
                        <h3 class="text-lg font-bold">Manage Users</h3>
                        <p class="text-gray-700">View and manage all users.</p>
                    </div>
                    <div class="bg-green-100 p-4 rounded">
                        <h3 class="text-lg font-bold">Manage Products</h3>
                        <p class="text-gray-700">View and manage all products.</p>
                    </div>
                    <div class="bg-yellow-100 p-4 rounded">
                        <h3 class="text-lg font-bold">Settings</h3>
                        <p class="text-gray-700">Update system settings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>