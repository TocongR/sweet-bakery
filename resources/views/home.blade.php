<x-app-layout>
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-pink-100 to-orange-100 py-20">
            <div class="container px-4">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-10 lg:mb-0">
                        <h2 class="text-5xl font-bold text-gray-800 mb-6">Fresh Artisan Breads & Pastries Daily</h2>
                        <p class="text-xl text-gray-600 mb-8">Handcrafted with love since 2021. Every loaf, every pastry, every cake made fresh daily starting at 4 AM.</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/menu" class="bg-pink-600 hover:bg-pink-700 text-white px-8 py-3 rounded-lg font-semibold transition text-center">
                                View Our Menu
                            </a>
                            <a href="/custom-orders" class="border border-pink-600 text-pink-600 hover:bg-pink-600 hover:text-white px-8 py-3 rounded-lg font-semibold transition text-center">
                                Order Custom Cake
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="https://img.texasmonthly.com/2024/09/instagram-bakers-1.jpg?auto=compress&crop=faces&fit=fit&fm=jpg&h=0&ixlib=php-3.3.1&q=45&w=1250" 
                            alt="Fresh baked goods" 
                            class="rounded-lg shadow-2xl w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Today's Fresh Favorites</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Discover our signature items, baked fresh daily with the finest ingredients and traditional techniques.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Product 1 -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Artisan Sourdough" 
                        desc="Three-day fermented sourdough with a perfect crust and tangy flavor." 
                        price="$8.50" 
                        status="Available" 
                    />
    
                    <!-- Product 2 -->
                    <x-product-card 
                        image="https://butterboyph.com/cdn/shop/files/classic.jpg?v=1714490336" 
                        title="Butter Croissants" 
                        desc="Flaky, buttery layers that rival those found in Paris. Made with European butter." 
                        price="$3.75" 
                        status="Available" 
                    />
    
                    <!-- Product 3 -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Celebration Cake" 
                        desc="Custom designed cakes for your special occasions. Available in multiple flavors." 
                        price="From $45" 
                        status="Made to Order"
                    />
    
                    <!-- Product 4 -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Danish Pastries" 
                        desc="Assorted Danish pastries with fruit, cream cheese, and seasonal fillings." 
                        price="$4.25" 
                        status="Available" 
                    />
                </div>
    
                <div class="text-center mt-12">
                    <a href="{{ route('menu') }}" class="bg-pink-600 hover:bg-pink-700 text-white px-8 py-3 rounded-lg font-semibold transition inline-block">
                        See Full Menu
                    </a>
                </div>
            </div>
        </section>
    
        <!-- Quick Info Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Hours -->
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <i class="fas fa-clock text-4xl text-pink-600 mb-4"></i>
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Hours</h4>
                        <div class="text-gray-600 space-y-2">
                            <p>Tuesday - Sunday: 6:00 AM - 6:00 PM</p>
                            <p>Monday: Closed</p>
                            <p class="text-sm text-pink-600 font-semibold">Fresh baking starts at 4 AM daily</p>
                        </div>
                    </div>
    
                    <!-- Location -->
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <i class="fas fa-map-marker-alt text-4xl text-pink-600 mb-4"></i>
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Location</h4>
                        <div class="text-gray-600 space-y-2">
                            <p>123 Main Street</p>
                            <p>Your City, State 12345</p>
                            <p class="text-pink-600 font-semibold">(555) 123-4567</p>
                        </div>
                    </div>
    
                    <!-- Custom Orders -->
                    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                        <i class="fas fa-birthday-cake text-4xl text-pink-600 mb-4"></i>
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Custom Orders</h4>
                        <div class="text-gray-600 space-y-2 mb-4">
                            <p>Wedding Cakes</p>
                            <p>Special Events</p>
                            <p>Corporate Catering</p>
                        </div>
                        <a href="{{ route('custom.order') }}" class="bg-pink-600 hover:bg-pink-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- About Preview Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                        <h3 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Sweet Dreams Bakery has been serving our community with love and passion since 2021. What started as a dream to bring authentic artisan breads and pastries to our neighborhood has grown into a beloved local institution.
                        </p>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Every morning at 4 AM, our skilled bakers begin the day by hand-crafting each loaf of bread and every pastry with the finest ingredients and traditional techniques passed down through generations.
                        </p>
                        <a href="/about" class="text-pink-600 hover:text-pink-700 font-semibold">
                            Learn More About Us <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="https://bittersweetpastry.com/cdn/shop/files/099A9693_4b04daf5-f954-41f6-8cd9-56a96628bcad.jpg?v=1722788891&width=1024" 
                             alt="Baker at work" 
                             class="rounded-lg shadow-2xl w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>