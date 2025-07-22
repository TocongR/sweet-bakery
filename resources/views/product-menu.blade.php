<x-app-layout>
    <!-- Menu Hero Section -->
    <section class="bg-gradient-to-r from-pink-100 to-orange-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Fresh Daily Menu</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Every item is handcrafted with love using the finest ingredients. Baked fresh daily starting at 4 AM.</p>
        </div>
    </section>

    <!-- Category Filters -->
    <section class="py-8 bg-white border-b border-gray-300">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="filterCategory('all')" class="category-filter bg-pink-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-pink-700 transition">
                    All Items
                </button>
                <button onclick="filterCategory('breads')" class="category-filter bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition">
                    Breads
                </button>
                <button onclick="filterCategory('pastries')" class="category-filter bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition">
                    Pastries
                </button>
                <button onclick="filterCategory('cakes')" class="category-filter bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition">
                    Cakes
                </button>
                <button onclick="filterCategory('seasonal')" class="category-filter bg-gray-200 text-gray-700 px-6 py-3 rounded-full font-semibold hover:bg-gray-300 transition">
                    Seasonal
                </button>
            </div>
        </div>
    </section>

    <!-- Menu Items -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            
            <!-- Breads Section -->
            <div class="mb-16 category-section" data-category="breads">
                <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Artisan Breads</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Sourdough -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Artisan Sourdough" 
                        desc="Three-day fermented sourdough with a perfect crust and tangy flavor." 
                        price="$8.50" 
                        status="Available" 
                    />

                    <!-- Whole Wheat -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1586444248902-2f64eddc13df?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Whole Wheat" 
                        desc="Hearty whole wheat bread with seeds and grains. Perfect for sandwiches and toast." 
                        price="$6.75" 
                        status="Available" 
                    />

                    <!-- French Baguette -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="French Baguette" 
                        desc="Classic French baguette with crispy crust and soft interior. Baked multiple times daily." 
                        price="$4.25" 
                        status="Available" 
                    />

                </div>
            </div>

            <!-- Pastries Section -->
            <div class="mb-16 category-section" data-category="pastries">
                <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Fresh Pastries</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Butter Croissants -->
                    <x-product-card 
                        image="https://butterboyph.com/cdn/shop/files/classic.jpg?v=1714490336" 
                        title="Butter Croissants" 
                        desc="Flaky, buttery layers that rival those found in Paris. Made with European butter." 
                        price="$3.75" 
                        status="Available" 
                    />

                    <!-- Chocolate Croissants -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1555507036-ab794f4eed25?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Pain au Chocolat" 
                        desc="Buttery croissant dough wrapped around rich dark chocolate. A French classic." 
                        price="$4.50" 
                        status="Available" 
                    />

                    <!-- Danish Pastries -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Danish Pastries" 
                        desc="Assorted Danish pastries with fruit, cream cheese, and seasonal fillings." 
                        price="$4.25" 
                        status="Available" 
                    />

                    <!-- Muffins -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1607958996333-41aef7caefaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Fresh Muffins" 
                        desc="Daily selection includes blueberry, chocolate chip, and seasonal flavors." 
                        price="$3.25" 
                        status="Available" 
                    />

                    <!-- Scones -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1571115764595-644a1f56a55c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Artisan Scones" 
                        desc="Buttery scones with cranberries, chocolate chips, or seasonal ingredients." 
                        price="$3.75" 
                        status="Available" 
                    />

                    <!-- Eclairs -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Classic Eclairs" 
                        desc="Choux pastry filled with vanilla cream and topped with chocolate glaze." 
                        price="$5.25" 
                        status="Available" 
                    />

                </div>
            </div>

            <!-- Cakes Section -->
            <div class="mb-16 category-section" data-category="cakes">
                <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Cakes & Desserts</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Celebration Cake -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Celebration Cake" 
                        desc="Custom designed cakes for your special occasions. Available in multiple flavors." 
                        price="From $45" 
                        status="Made to Order"
                    />

                    <!-- Cheesecake -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1533134242443-d4fd215305ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="New York Cheesecake" 
                        desc="Rich and creamy cheesecake with graham cracker crust. Available by slice or whole." 
                        price="$6.50" 
                        status="Available" 
                    />

                    <!-- Chocolate Cake -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Chocolate Layer Cake" 
                        desc="Decadent chocolate cake with rich chocolate buttercream frosting." 
                        price="$5.75" 
                        status="Not Available" 
                    />

                </div>
            </div>

            <!-- Seasonal Section -->
            <div class="mb-16 category-section" data-category="seasonal">
                <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Seasonal Specialties</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Summer Fruit Tarts -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Summer Fruit Tarts" 
                        desc="Fresh seasonal fruit tarts with pastry cream and buttery tart shells." 
                        price="$4.25" 
                        status="Available" 
                    />

                    <!-- Seasonal Cookies -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Seasonal Cookies" 
                        desc="Decorated cookies that celebrate the current season and holidays." 
                        price="$2.75" 
                        status="Available" 
                    />

                    <!-- Seasonal Pies -->
                    <x-product-card 
                        image="https://images.unsplash.com/photo-1621743478914-cc8a86d7e7b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                        title="Seasonal Pies" 
                        desc="Fresh seasonal pies made with locally sourced fruits and ingredients." 
                        price="$18.50" 
                        status="Available" 
                    />

                </div>
            </div>

        </div>
    </section>

    <!-- Order Information Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">How to Order</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Visit Us -->
                    <div class="text-center">
                        <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-store text-2xl text-pink-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-3">Visit Our Store</h4>
                        <p class="text-gray-600">Stop by our bakery to see our full selection and take your favorites home fresh.</p>
                    </div>

                    <!-- Call Ahead -->
                    <div class="text-center">
                        <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone text-2xl text-pink-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-3">Call Ahead</h4>
                        <p class="text-gray-600">Call (555) 123-4567 to reserve your favorites or place a custom order.</p>
                    </div>

                    <!-- Custom Orders -->
                    <div class="text-center">
                        <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-birthday-cake text-2xl text-pink-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-800 mb-3">Custom Orders</h4>
                        <p class="text-gray-600">Need something special? We create custom cakes and large orders for any occasion.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for filtering -->
    <script>
    function filterCategory(category) {
        // Update active button
        const buttons = document.querySelectorAll('.category-filter');
        buttons.forEach(btn => {
            btn.classList.remove('bg-pink-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });
        
        event.target.classList.remove('bg-gray-200', 'text-gray-700');
        event.target.classList.add('bg-pink-600', 'text-white');
        
        // Show/hide sections
        const sections = document.querySelectorAll('.category-section');
        sections.forEach(section => {
            if (category === 'all' || section.dataset.category === category) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });
    }

    // Initialize with all items shown
    document.addEventListener('DOMContentLoaded', function() {
        const allSections = document.querySelectorAll('.category-section');
        allSections.forEach(section => {
            section.style.display = 'block';
        });
    });
    </script>
</x-app-layout>