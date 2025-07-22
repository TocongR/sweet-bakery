<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 shadow-lg ">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-birthday-cake text-white text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <h2 class="text-lg font-bold text-white">Sweet Dreams</h2>
                        <p class="text-sm text-gray-200">Admin Panel</p>
                    </div>
                </div>
            </div>
            
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 {{ request()->routeIs('admin.dashboard') ? 
                            'bg-pink-50 border-r-4 border-pink-600 text-pink-700' : 
                            'text-white hover:text-gray-800 hover:bg-gray-300' 
                        }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="#orders" class="flex items-center px-6 py-3 text-white hover:text-gray-800 hover:bg-gray-300">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    Orders
                    <span class="ml-auto bg-pink-600 text-white text-xs px-2 py-1 rounded-full">12</span>
                </a>
                <a href="{{ route('products.index') }}" 
                    class="flex items-center px-6 py-3 
                        {{ request()->routeIs('products.index') ? 
                            'bg-pink-50 border-r-4 border-pink-600 text-pink-700' : 
                            'text-white hover:text-gray-800 hover:bg-gray-300' 
                        }}"
                >
                    <i class="fas fa-bread-slice mr-3"></i>
                    Products
                </a>
                <a href="#settings" class="flex items-center px-6 py-3 text-white hover:text-gray-800 hover:bg-gray-300">
                    <i class="fas fa-cog mr-3"></i>
                    Settings
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-6 py-3 text-white hover:text-gray-800 hover:bg-gray-300 cursor-pointer">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        Logout
                    </button>
                </form>              
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Top Bar -->
            <div class="bg-white shadow-sm p-4">
                <div class="flex items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                        <p class="text-gray-600">Welcome back, Admin!</p>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

   
</body>
</html>