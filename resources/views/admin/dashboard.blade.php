<x-admin-layout>
    <div class="p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600">Today's Sales</p>
                        <p class="text-2xl font-bold text-gray-800">$1,247</p>
                        <p class="text-sm text-green-600">+12% from yesterday</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-dollar-sign text-green-600 text-lg"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600">Orders Today</p>
                        <p class="text-2xl font-bold text-gray-800">23</p>
                        <p class="text-sm text-blue-600">+5 new orders</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-blue-600 text-lg"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600">Products Sold</p>
                        <p class="text-2xl font-bold text-gray-800">156</p>
                        <p class="text-sm text-purple-600">Top: Croissants</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-bread-slice text-purple-600 text-lg"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600">Customers</p>
                        <p class="text-2xl font-bold text-gray-800">342</p>
                        <p class="text-sm text-pink-600">+8 new today</p>
                    </div>
                    <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-pink-600 text-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-admin-layout>