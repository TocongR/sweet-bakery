<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-pink-100 to-orange-100 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Get in Touch</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We'd love to hear from you. Visit us, call us, or send us a message!</p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Phone -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Phone</h3>
                    <p class="text-gray-600">(555) 123-4567</p>
                </div>

                <!-- Email -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600">hello@sweetdreamsbakery.com</p>
                </div>

                <!-- Address -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Address</h3>
                    <p class="text-gray-600">123 Main Street<br>Your City, State 12345</p>
                </div>

                <!-- Hours -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Hours</h3>
                    <p class="text-gray-600">Tue-Sun: 6AM-6PM<br>Monday: Closed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Send Us a Message</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-gray-700 font-semibold mb-2">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                            </div>
                            <div>
                                <label for="last_name" class="block text-gray-700 font-semibold mb-2">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
                            <select id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="custom_order">Custom Order Request</option>
                                <option value="catering">Catering Request</option>
                                <option value="feedback">Feedback</option>
                                <option value="employment">Employment Inquiry</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-pink-600 hover:bg-pink-700 text-white px-8 py-3 rounded-lg font-semibold transition">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Visit Our Bakery</h2>
                    
                    <div class="space-y-8">
                        <!-- Address -->
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-2xl text-pink-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Address</h3>
                                <p class="text-gray-600">123 Main Street<br>Your City, State 12345</p>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex items-start">
                            <i class="fas fa-phone text-2xl text-pink-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+15551234567" class="text-pink-600 hover:text-pink-700">(555) 123-4567</a>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-2xl text-pink-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:hello@sweetdreamsbakery.com" class="text-pink-600 hover:text-pink-700">hello@sweetdreamsbakery.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Hours -->
                        <div class="flex items-start">
                            <i class="fas fa-clock text-2xl text-pink-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Hours</h3>
                                <div class="text-gray-600 space-y-1">
                                    <p>Tuesday - Sunday: 6:00 AM - 6:00 PM</p>
                                    <p>Monday: Closed</p>
                                    <p class="text-sm text-pink-600 font-semibold mt-2">Fresh baking starts at 4 AM daily</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="flex items-start">
                            <i class="fas fa-share-alt text-2xl text-pink-600 mt-1 mr-4"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-pink-600 hover:text-pink-700 text-2xl">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#" class="text-pink-600 hover:text-pink-700 text-2xl">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" class="text-pink-600 hover:text-pink-700 text-2xl">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section>
        <div class="h-96">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7890186485865!2d100.50176581531857!3d13.756330990354797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ec46b0f1e1d%3A0x9a5092a4d18b41d0!2s123+Main+Street%2C+Your+City%2C+State!5e0!3m2!1sen!2sph!4v1610000000000"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full">
            </iframe>
        </div>        
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Frequently Asked Questions</h2>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do you take custom cake orders?</h3>
                    <p class="text-gray-600">Yes! We specialize in custom cakes for all occasions. Please give us at least 48 hours notice for custom orders, and a week for elaborate wedding cakes.</p>
                </div>
                
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do you offer catering services?</h3>
                    <p class="text-gray-600">Absolutely! We provide catering for corporate events, parties, and special occasions. Contact us for a custom quote based on your needs.</p>
                </div>
                
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What time do you start baking?</h3>
                    <p class="text-gray-600">Our bakers start at 4 AM every morning to ensure everything is fresh when we open at 6 AM. This is what makes our bread and pastries so special!</p>
                </div>
                
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do you have gluten-free options?</h3>
                    <p class="text-gray-600">Yes, we offer a selection of gluten-free breads and pastries. Please call ahead to check availability, as these items are made in limited quantities.</p>
                </div>
                
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Can I place orders online?</h3>
                    <p class="text-gray-600">Currently, we take orders by phone or in person. We're working on an online ordering system that will be available soon!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-pink-100 to-orange-100">
        <div class="container mx-auto px-4 text-center max-w-7xl">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Ready to Order?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Give us a call or stop by the bakery. We're always happy to help you find the perfect treats for any occasion.
            </p>
        </div>
    </section>
</x-app-layout>