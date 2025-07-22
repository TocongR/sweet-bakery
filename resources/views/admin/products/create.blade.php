<x-admin-layout>
    <div class="p-6">
        <!-- Page Header -->
        <div class="mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Create New Product</h1>
                    <p class="text-gray-600">Add a new product to your bakery inventory</p>
                </div>
                <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Products
                </a>
            </div>
        </div>

        <!-- Product Create Form -->
        <div class="bg-white rounded-lg shadow-md">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <!-- Product Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Product Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500" 
                                   placeholder="e.g., Chocolate Birthday Cake"
                            >
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Category <span class="text-red-500">*</span>
                            </label>
                            <select id="category_id" 
                                    name="category_id" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                            >
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                                Price (₱) <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-3 top-2 text-gray-500">₱</span>
                                <input type="number" 
                                       id="price" 
                                       name="price" 
                                       value="{{ old('price') }}" 
                                       step="0.01" 
                                       min="0"
                                       class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500" 
                                       placeholder="0.00"
                                >
                            </div>
                            @error('price')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                                Status
                            </label>
                            <select id="status" 
                                    name="status" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                                <option value="Available" {{ old('status') == 'Available' ? 'selected' : '' }}>Available</option>
                                <option value="Not Available" {{ old('status') == 'Not Available' ? 'selected' : '' }}>Not Available</option>
                                <option value="Made to Order" {{ old('status') == 'Made to Order' ? 'selected' : '' }}>Made to order</option>
                            </select>
                            @error('status')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <!-- Product Image -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                                Product Image
                            </label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-pink-500 transition-colors">
                                <div id="image-preview" class="hidden">
                                    <img id="preview-img" src="" alt="Preview" class="mx-auto h-32 w-32 object-cover rounded-lg mb-4">
                                </div>
                                <div id="upload-placeholder">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                    <p class="text-gray-600 mb-2">Click to upload or drag and drop</p>
                                    <p class="text-sm text-gray-500">PNG, JPG, JPEG up to 5MB</p>
                                </div>
                                <input type="file" 
                                       id="image" 
                                       name="image" 
                                       accept="image/*" 
                                       class="hidden"
                                       onchange="previewImage(this)">
                            </div>
                            @error('image')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                Description
                            </label>
                            <textarea id="description" 
                                      name="description" 
                                      rows="6" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 resize-none" 
                                      placeholder="Describe your product...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200 mt-6">
                    <div class="flex items-center">
                        <input type="hidden" name="isFeatured" value="0">
                        <input type="checkbox" 
                               id="isFeatured" 
                               name="isFeatured" 
                               value="1" 
                               {{ old('isFeatured') ? 'checked' : '' }}
                               class="w-4 h-4 text-pink-600 border-gray-300 rounded focus:ring-pink-500">
                        <label for="isFeatured" class="ml-2 text-sm text-gray-700">
                            Feature this product
                        </label>
                    </div>
                    
                    <div class="flex space-x-4">
                        <a href="{{ route('products.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 flex items-center">
                            <i class="fas fa-save mr-2"></i>
                            Create Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Image preview functionality
        function previewImage(input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-img').src = e.target.result;
                    document.getElementById('image-preview').classList.remove('hidden');
                    document.getElementById('upload-placeholder').classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        // Click handler for upload area
        document.addEventListener('DOMContentLoaded', function() {
            const uploadArea = document.querySelector('.border-dashed');
            const fileInput = document.getElementById('image');
            
            uploadArea.addEventListener('click', function() {
                fileInput.click();
            });

            // Drag and drop functionality
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.classList.add('border-pink-500');
            });

            uploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('border-pink-500');
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('border-pink-500');
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    previewImage(fileInput);
                }
            });
        });
    </script>
</x-admin-layout>