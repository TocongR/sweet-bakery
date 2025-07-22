<x-admin-layout>
    <div class="p-6">
        <!-- Page Header -->
        <div class="mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Products</h1>
                    <p class="text-gray-600">Manage your bakery products</p>
                </div>
                <a href="{{ route('products.create') }}" class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Add New Product
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-4 px-4 py-3 rounded-lg bg-green-100 border border-green-300 text-green-800 text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-pink-100 rounded-full">
                        <i class="fas fa-bread-slice text-pink-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-800">24</h3>
                        <p class="text-sm text-gray-600">Total Products</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-full">
                        <i class="fas fa-check-circle text-green-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-800">21</h3>
                        <p class="text-sm text-gray-600">Available Products</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center">
                    <div class="p-3 bg-yellow-100 rounded-full">
                        <i class="fas fa-star text-yellow-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-800">8</h3>
                        <p class="text-sm text-gray-600">Featured Products</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white rounded-lg shadow mb-6">
            <div class="p-4 border-b border-gray-200">
                
                <form action="{{ route('products.index')}}"  method="GET" class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                    <div class="flex items-center space-x-4">
                    
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}" class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 w-64">
                        </div>
                        <select name="category" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                            <option value="" disabled selected>All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <select name="status" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                            <option value="" selected>All Status</option>
                            <option value="Available" {{ request('status') == 'Available' ? 'selected' : ''}}>Available</option>
                            <option value="Not Available" {{ request('status') == 'Not Available' ? 'selected' : ''}}>Not Available</option>
                            <option value="Made to Order" {{ request('status') == 'Made to Order' ? 'selected' : ''}}>Made to Order</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="submit" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 flex items-center">
                            <i class="fas fa-filter mr-2"></i>
                            Filter
                        </button>
                        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 flex items-center">
                            <i class="fas fa-download mr-2"></i>
                            Export
                        </button>
                    </div>
                        
                </form>
               
            </div>
        </div>

        <!-- Products Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Featured</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Product Rows -->
                        @foreach ($products as $product)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @if ($product->image)
                                            <img class="h-16 w-16 rounded-lg" src="{{ asset('storage/' . $product->image) }}" alt="">
                                        @else
                                            <div class="h-16 w-16 rounded-lg bg-gray-200 flex items-center justify-center">
                                                <i class="fas fa-birthday-cake text-pink-600 text-xl"></i>
                                            </div>
                                        @endif
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $product->description }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        {{ $product->category->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱{{ number_format($product->price, 2) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @switch($product->status)
                                        @case('Available')
                                            <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $product->status }}</span>
                                            @break
                                        @case('Made to Order')
                                            <span class="bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $product->status }}</span>
                                            @break
                                        @case('Not Available')
                                            <span class="bg-red-100 text-red-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $product->status }}</span>
                                        @break
                                    @endswitch
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($product->isFeatured)
                                        <i class="fas fa-star text-yellow-500"></i>
                                    @else
                                        <i class="fas fa-star text-gray-500"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center space-x-4">                                  
                                        <a href="{{ route('products.edit', $product) }}" class="text-green-600 hover:text-green-900">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        {{ $products->links() }}

    </div>
</x-admin-layout>