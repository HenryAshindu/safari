<x-layout>
    <!-- Hero Section -->
    <section id="home" class="relative bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=1412&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-4">Step Into Style</h1>
                <p class="text-lg mb-8">Discover the latest trends in footwear</p>
                <a href="/shop" class="bg-blue-600 hover:bg-blue-800 text-white py-2 px-4 rounded-lg">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="shop" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($shoes as $shoe)
                 <!-- Product Card 1 -->
                 <x-product-card :$shoe/>
                @endforeach
            </div>
        </div>
        <!-- Submit Button -->
        <div class="text-center">
            <a href="/shop">
                <input type="submit" class="rounded-lg border border-transparent font-bold bg-blue-600 py-4 px-8 mt-6 text-white hover:bg-blue-700 transition-colors" value="View All">
            </a>                        
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-200">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-gray-700">We offer a wide variety of shoes for every occasion, from athletic footwear to casual and formal designs. Our mission is to provide comfort and style to our customers.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Get in Touch</h2>
            <p class="text-gray-700">Have any questions? Feel free to reach out to us at <a href="mailto:info@shoestore.com" class="text-blue-600 hover:underline">info@shoestore.com</a>.</p>
        </div>
    </section>
</x-layout>