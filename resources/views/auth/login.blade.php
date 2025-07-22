<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-100 to-orange-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-pink-600 rounded-full mb-4 shadow-lg">
                <i class="fas fa-birthday-cake text-white text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Sweet Dreams Bakery</h1>
            <p class="text-gray-600">Admin Dashboard Access</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            @error('failed')
                <div class="mb-4 px-4 py-3 rounded-lg bg-red-100 border border-red-300 text-red-800 text-sm font-medium">
                    {{ $message }}
                </div>
            @enderror
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-user mr-2 text-pink-600"></i>Email
                    </label>
                    <input 
                        type="text" 
                        name="email" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-200 @error('email') border-red-500 @enderror"  
                        placeholder="Enter your email"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2 text-pink-600"></i>Password
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            name="password"
                            id="password" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 transition-all duration-200 pr-12 @error('password') border-red-500 @enderror"
                            placeholder="Enter your password"
                        >
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <button 
                            type="button" 
                            id="togglePassword"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-pink-600 transition-colors"
                        >
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="w-4 h-4 text-pink-600 border-gray-300 rounded focus:ring-pink-500"
                        >
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="w-full bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 transform hover:scale-105 hover:shadow-lg"
                >
                    <i class="fas fa-sign-in-alt mr-2"></i>Sign In to Dashboard
                </button>
            </form>

            <!-- Additional Info -->
            <div class="mt-6 pt-6 border-t border-gray-200">
                <p class="text-xs text-gray-500 text-center">
                    <i class="fas fa-shield-alt mr-1"></i>
                    Secure admin access only. Unauthorized access is prohibited.
                </p>
            </div>
        </div>

    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            if (type === 'password') {
                eyeIcon.className = 'fas fa-eye';
            } else {
                eyeIcon.className = 'fas fa-eye-slash';
            }
        });

    </script>
</body>
</html>