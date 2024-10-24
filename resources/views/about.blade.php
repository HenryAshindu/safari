<x-layout>
    <x-page-heading>About Us</x-page-heading>

    <div class="flex justify-center items-center min-h-screen bg-gray-900 text-white py-10" style="background-image: url('https://images.unsplash.com/photo-1513708924815-c8ce3a9d40b1?ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
        <div class="bg-black/70 backdrop-blur-sm p-10 rounded-lg shadow-lg max-w-4xl text-center">
            <h1 class="text-5xl font-bold mb-6">Our Story</h1>
            <p class="text-lg mb-4 leading-relaxed">
                Welcome to ShoeStore, where style meets comfort! We started our journey with a passion for delivering premium footwear to people all around the world. Our mission is to provide a diverse range of high-quality shoes that reflect individuality, creativity, and timeless fashion.
            </p>
            <p class="text-lg mb-4 leading-relaxed">
                Over the years, we've curated a collection that caters to every occasion—be it formal events, casual outings, or sportswear. Each pair is handpicked to offer not only style but also maximum comfort and durability.
            </p>
            <p class="text-lg leading-relaxed">
                We are committed to sustainability and ethical production practices, ensuring that our shoes leave a minimal environmental footprint while delivering maximum value to our customers.
            </p>
            <a href="{{ url('/contact') }}" class="mt-8 inline-block bg-blue-600 hover:bg-blue-800 text-white py-3 px-6 rounded-lg font-semibold">Get in Touch</a>
        </div>
    </div>
</x-layout>
