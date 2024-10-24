<x-layout>
    <div class="container mx-auto p-8">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md overflow-hidden">
            <img src="{{ asset('storage/' . $shoe->image) }}" alt="{{ $shoe->shoe_name }}" class="w-full h-64 object-cover">
            
            <div class="p-4">
                <h1 class="text-2xl font-bold">{{ $shoe->shoe_name }}</h1>
                <p class="text-gray-600">Category: {{ $shoe->category }}</p>
                <p class="text-gray-600">Price: {{ $shoe->price }}</p>
                <p class="text-gray-600">Size: {{ $shoe->size }}</p>
            </div>

            <div class="flex justify-between m-6">
                <a href="{{ route('shoes.edit', $shoe->id) }}" class="rounded-lg border border-transparent font-bold hover:bg-blue-900 bg-blue-800 py-4 px-8 text-sm">Edit</a>
                
                <form action="{{ route('shoes.destroy', $shoe->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')

                    <button class="rounded-lg border border-transparent font-bold hover:bg-red-900 bg-red-800 py-4 px-8 text-sm">Remove</button>
                </form>
            </div>
        
        </div>



        <div class="mt-4">
            <a href="{{ route('shoes.index') }}" class="text-blue-500 hover:underline">Back to shoes</a>
        </div>
    </div>
</x-layout>