              <!-- Product Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:border-blue-500 border">
                    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $shoe->image)}}" alt="{{ $shoe->shoe_name }}">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $shoe->shoe_name }}</h3>
                        <p class="text-gray-500">{{ $shoe->category }}</p>
                        <p class="text-gray-500">{{ $shoe->size }}</p>
                        <div class="mt-3 flex justify-between items-center">
                            <span class="text-xl font-bold text-gray-800">Ksh. {{ $shoe->price }}</span>
                            <a href="{{ route('shoes.show', $shoe->id) }}" class="text-blue-600 hover:text-blue-800">View Details</a>
                        </div>
                    </div>
                </div>
