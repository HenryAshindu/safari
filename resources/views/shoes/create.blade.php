<x-layout>
    

    <div class="container mx-auto max-w-lg bg-white rounded-lg shadow-lg p-8 mt-10 mb-10">
        <h2 class="text-2xl font-bold mb-6 text-center">Add New Shoe Item</h2>

        
        <form action="{{ route('shoes.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')

            
            <div class="mb-4">
                <label for="shoe_name" class="block text-gray-700 font-medium mb-2">Shoe Name</label>
                <input type="text" id="shoe_name" name="shoe_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter shoe name" required>
            </div>

        
            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-medium mb-2">Category</label>
                <select id="category" name="category" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    <option value="">Select category</option>
                    <option value="Men's Running Shoes">Men's Running Shoes</option>
                    <option value="Women's Running Shoes">Women's Runnning shoes</option>
                    <option value="Casual Shoes">Casual Shoes</option>
                    <option value="Retro Shoes">Retro Shoes</option>
                </select>
            </div>

            
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                <input type="text" id="price" name="price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ksh. " required>
            </div>

            
            <div class="mb-4">
                <label for="size" class="block text-gray-700 font-medium mb-2">Size</label>
                <select id="size" name="size" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    <option value="">Select size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="X-Large">X-Large</option>
                </select>
            </div>

            
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            
            <div class="text-center">
                <button type="submit" class="bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Add Item</button>
            </div>
        </form>
    </div>

</x-layout>