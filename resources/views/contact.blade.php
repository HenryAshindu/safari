<x-layout>
    <x-page-heading>Contact Us</x-page-heading>

    <div class="flex justify-center items-center min-h-screen bg-gray-900 text-white py-10" style="background-image: url('https://images.unsplash.com/photo-1545483655-6d8c92f772f8?ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
        <div class="bg-black/70 backdrop-blur-sm p-10 rounded-lg shadow-lg max-w-3xl w-full">
            <h1 class="text-5xl font-bold text-center mb-6">We'd Love to Hear From You</h1>
            <p class="text-lg text-center mb-8">
                If you have any questions or would like to know more about our products, feel free to reach out. Simply fill out the form below or email us directly at <a href="mailto:info@shoestore.com" class="text-blue-400 hover:underline">info@shoestore.com</a>.
            </p>

            <form action="/contact" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-lg font-bold mb-2">Name</label>
                    <input type="text" name="name" class="w-full p-4 rounded-lg bg-gray-100 text-gray-900 focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Name">
                </div>

                <div>
                    <label for="email" class="block text-lg font-bold mb-2">Email</label>
                    <input type="email" name="email" class="w-full p-4 rounded-lg bg-gray-100 text-gray-900 focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Email">
                </div>

                <div>
                    <label for="message" class="block text-lg font-bold mb-2">Message</label>
                    <textarea name="message" rows="4" class="w-full p-4 rounded-lg bg-gray-100 text-gray-900 focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Message"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white py-4 px-8 rounded-lg font-bold">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
