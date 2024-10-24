<x-layout>
    <x-page-heading>Available Shoes</x-page-heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10 mb-10 mx-auto ml-8 mr-8">
        @foreach($shoes as $shoe)
        <x-product-card :$shoe />
        @endforeach
    </div>

    <div class="mt-4 mb-4 flex justify-center">
        <a href="{{ route('shoes.index') }}" class="text-blue-500 hover:text-blue-800">Back to shoes</a>
    </div>
    
</x-layout>