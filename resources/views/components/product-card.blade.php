@props(['image', 'title', 'desc', 'price', 'status'])

<div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 product-item">
    <div class="aspect-[4/3] overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
    </div>
    <div class="p-6">
        <h4 class="text-xl font-semibold text-gray-800 mb-2">{{ $title }}</h4>
        <p class="text-gray-600 mb-4">{{ $desc }}</p>
        <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-pink-600">{{ $price }}</span>
            @switch($status)
                @case('Available')
                    <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $status }}</span>
                    @break
                @case('Made to Order')
                    <span class="bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $status }}</span>
                    @break
                @case('Not Available')
                    <span class="bg-red-100 text-red-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $status }}</span>
                    @break
            @endswitch
        </div>
    </div>
</div>
