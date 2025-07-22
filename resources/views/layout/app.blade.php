<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto lg:px-12">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <i class="fas fa-birthday-cake text-pink-600 text-2xl mr-3"></i>
                    <h1 class="text-2xl font-bold text-gray-800">Sweet Dreams Bakery</h1>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a 
                        href="{{ route('home' )}}" 
                        class="{{ request()->routeIs('home') ? 'text-pink-700' : 'text-gray-700' }} font-semibold hover:text-pink-700 transition">Home</a>
                    <a 
                        href="{{ route('menu') }}" 
                        class="{{ request()->routeIs('menu') ? 'text-pink-700' : 'text-gray-700' }} hover:text-pink-600 transition">Menu</a>
                    <a 
                        href="{{ route('about') }}" 
                        class="{{ request()->routeIs('about') ? 'text-pink-700' : 'text-gray-700' }} hover:text-pink-600 transition">About</a>
                    <a 
                        href="{{ route('custom.order') }}" 
                        class="{{ request()->routeIs('custom.order') ? 'text-pink-700' : 'text-gray-700' }} hover:text-pink-600 transition">Custom Orders</a>
                    <a 
                        href="{{ route('contact') }}" 
                        class="{{ request()->routeIs('contact') ? 'text-pink-700' : 'text-gray-700' }} hover:text-pink-600 transition">Contact</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="md:hidden text-gray-700 hover:text-pink-600 transition-colors duration-200"
                    :class="{ 'text-pink-600': mobileMenuOpen }"
                >
                    <i class="fas fa-bars text-xl" x-show="!mobileMenuOpen"></i>
                    <i class="fas fa-times text-xl" x-show="mobileMenuOpen"></i>
                </button>
            </div>

            <!-- Mobile Navigation Menu -->
            <div 
                x-show="mobileMenuOpen" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="md:hidden bg-white border-t border-gray-200 py-4"
            >
                <nav class="flex flex-col space-y-2">
                    <a href="/" 
                       @click="mobileMenuOpen = false"
                       class="text-pink-600 font-semibold hover:text-pink-700 transition px-4 py-2 hover:bg-pink-50 rounded">
                        Home
                    </a>
                    <a href="/menu" 
                       @click="mobileMenuOpen = false"
                       class="text-gray-700 hover:text-pink-600 transition px-4 py-2 hover:bg-pink-50 rounded">
                        Menu
                    </a>
                    <a href="/about" 
                       @click="mobileMenuOpen = false"
                       class="text-gray-700 hover:text-pink-600 transition px-4 py-2 hover:bg-pink-50 rounded">
                        About
                    </a>
                    <a href="/custom-orders" 
                       @click="mobileMenuOpen = false"
                       class="text-gray-700 hover:text-pink-600 transition px-4 py-2 hover:bg-pink-50 rounded">
                        Custom Orders
                    </a>
                    <a href="/contact" 
                       @click="mobileMenuOpen = false"
                       class="text-gray-700 hover:text-pink-600 transition px-4 py-2 hover:bg-pink-50 rounded">
                        Contact
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-birthday-cake text-pink-600 text-2xl mr-3"></i>
                        <h4 class="text-2xl font-bold">Sweet Dreams Bakery</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Fresh artisan breads, pastries, and custom cakes made daily with love and the finest ingredients.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-pink-600 transition">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-pink-600 transition">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-pink-600 transition">
                            <i class="fab fa-google text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div>
                    <h5 class="text-lg font-semibold mb-4">Contact Info</h5>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>123 Main Street</p>
                        <p><i class="fas fa-phone mr-2"></i>(555) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@sweetdreamsbakery.com</p>
                    </div>
                </div>

                <!-- Hours -->
                <div>
                    <h5 class="text-lg font-semibold mb-4">Hours</h5>
                    <div class="space-y-2 text-gray-300">
                        <p>Tue - Sun: 6:00 AM - 6:00 PM</p>
                        <p>Monday: Closed</p>
                        <p class="text-pink-600 text-sm">Fresh baking starts at 4 AM</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 Sweet Dreams Bakery. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>