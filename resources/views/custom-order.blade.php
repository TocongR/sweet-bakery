<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-pink-100 to-orange-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Custom Orders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Let us create something special for your event! From wedding cakes to corporate catering, 
                    we'll work with you to bring your vision to life.
                </p>
            </div>
        </div>
    </section>

    <!-- Order Types Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">What We Can Create For You</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Wedding Cakes -->
                <div class="text-center">
                    <div class="bg-pink-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-pink-600 text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Wedding Cakes</h4>
                    <p class="text-gray-600">Beautiful multi-tier cakes designed to make your special day unforgettable.</p>
                </div>

                <!-- Custom Cakes -->
                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-birthday-cake text-orange-600 text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Custom Cakes</h4>
                    <p class="text-gray-600">Personalized cakes for birthdays, anniversaries, and special celebrations.</p>
                </div>

                <!-- Catering -->
                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-purple-600 text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Catering</h4>
                    <p class="text-gray-600">Corporate events, parties, and gatherings with fresh breads and pastries.</p>
                </div>

                <!-- Bulk Orders -->
                <div class="text-center">
                    <div class="bg-green-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-box text-green-600 text-3xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Bulk Orders</h4>
                    <p class="text-gray-600">Large quantities of our regular menu items for events and gatherings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-3xl font-bold text-gray-800 mb-2 text-center">Place Your Custom Order</h3>
                    <p class="text-gray-600 text-center mb-8">Fill out the form below and we'll get back to you within 24 hours with pricing and availability.</p>
                    
                    <form class="space-y-6">
                        <!-- Customer Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="customer_name" name="customer_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                            </div>
                            <div>
                                <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="customer_email" name="customer_email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                            </div>
                        </div>

                        <div>
                            <label for="customer_phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="customer_phone" name="customer_phone" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        </div>

                        <!-- Order Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="order_type" class="block text-sm font-medium text-gray-700 mb-2">
                                    Order Type <span class="text-red-500">*</span>
                                </label>
                                <select id="order_type" name="order_type" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                                    <option value="">Select Order Type</option>
                                    <option value="wedding_cake">Wedding Cake</option>
                                    <option value="custom_cake">Custom Cake</option>
                                    <option value="catering">Catering</option>
                                    <option value="bulk_order">Bulk Order (Regular Menu Items)</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="event_date" class="block text-sm font-medium text-gray-700 mb-2">
                                    Event Date
                                </label>
                                <input type="date" id="event_date" name="event_date" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                            </div>
                        </div>

                        <div>
                            <label for="guest_count" class="block text-sm font-medium text-gray-700 mb-2">
                                Number of Guests/Servings
                            </label>
                            <input type="number" id="guest_count" name="guest_count" min="1" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                                   placeholder="How many people will this serve?">
                        </div>

                        <!-- Order Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                Order Description <span class="text-red-500">*</span>
                            </label>
                            <textarea id="description" name="description" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                                      placeholder="Please describe your order in detail. Include flavors, design preferences, dietary restrictions, quantities, and any special requests."></textarea>
                        </div>

                        <!-- Budget Range -->
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                                Budget Range (Optional)
                            </label>
                            <select id="budget" name="budget" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                                <option value="">Select Budget Range</option>
                                <option value="under_50">Under $50</option>
                                <option value="50_100">$50 - $100</option>
                                <option value="100_200">$100 - $200</option>
                                <option value="200_500">$200 - $500</option>
                                <option value="500_plus">$500+</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" 
                                    class="bg-pink-600 hover:bg-pink-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Submit Order Request
                            </button>
                        </div>

                        <div class="text-center text-sm text-gray-600">
                            <p>We'll respond within 24 hours with pricing and availability.</p>
                            <p>For urgent requests, please call us at <span class="font-semibold text-pink-600">(555) 123-4567</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Guidelines Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Pricing Guidelines</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Custom Cakes</h4>
                    <p class="text-gray-600 mb-2">Starting at $45</p>
                    <p class="text-sm text-gray-500">Price varies by size, design complexity, and flavors</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Wedding Cakes</h4>
                    <p class="text-gray-600 mb-2">Starting at $150</p>
                    <p class="text-sm text-gray-500">Multi-tier cakes with custom design and flavors</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Catering</h4>
                    <p class="text-gray-600 mb-2">$8-15 per person</p>
                    <p class="text-sm text-gray-500">Assorted breads, pastries, and refreshments</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">Bulk Orders</h4>
                    <p class="text-gray-600 mb-2">10% discount</p>
                    <p class="text-sm text-gray-500">Orders of 20+ items from our regular menu</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>