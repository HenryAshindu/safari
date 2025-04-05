<x-layout>
    <div class="container p-8 mx-auto">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md shadow-md">
            <img src="{{ asset('storage/' . $shoe->image) }}" alt="{{ $shoe->shoe_name }}" class="object-cover w-full h-64">

            <div class="p-4">
                <h1 class="text-2xl font-bold">{{ $shoe->shoe_name }}</h1>
                <p class="text-gray-600">Category: {{ $shoe->category }}</p>
                <p class="text-gray-600">Price: {{ $shoe->price }}</p>
                <p class="text-gray-600">Size: {{ $shoe->size }}</p>
            </div>

            <div class="flex justify-between m-6">
                <a href="{{ route('shoes.edit', $shoe->id) }}" class="px-8 py-4 text-sm font-bold bg-blue-800 border border-transparent rounded-lg hover:bg-blue-900">Edit</a>

                <form action="{{ route('shoes.destroy', $shoe->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('delete')

                    <button class="px-8 py-4 text-sm font-bold bg-red-800 border border-transparent rounded-lg hover:bg-red-900">Remove</button>
                </form>
            </div>

        </div>



        <div class="mt-4">
            <a href="{{ route('shoes.index') }}" class="text-blue-500 hover:underline">Back to shoes</a>
        </div>
    </div>
</x-layout>