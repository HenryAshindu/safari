<x-layout>
    <x-page-heading>Contact Us</x-page-heading>

    @if(session('success'))
        <div class="p-4 mb-6 text-green-800 bg-green-200 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex items-center justify-center min-h-screen py-10 text-white bg-gray-900" style="background-image: url('https://images.unsplash.com/photo-1545483655-6d8c92f772f8?ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
        <div class="w-full max-w-3xl p-10 rounded-lg shadow-lg bg-black/70 backdrop-blur-sm">
            <h1 class="mb-6 text-5xl font-bold text-center">We'd Love to Hear From You</h1>
            <p class="mb-8 text-lg text-center">
                If you have any questions or would like to know more about our products, feel free to reach out. Simply fill out the form below or email us directly at <a href="mailto:info@shoestore.com" class="text-blue-400 hover:underline">info@shoestore.com</a>.
            </p>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                @method('post')
                <div>
                    <label for="name" class="block mb-2 text-lg font-bold">Name</label>
                    <input type="text" name="name" class="w-full p-4 text-gray-900 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Name">
                </div>

                <div>
                    <label for="email" class="block mb-2 text-lg font-bold">Email</label>
                    <input type="email" name="email" class="w-full p-4 text-gray-900 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Email">
                </div>

                <div>
                    <label for="message" class="block mb-2 text-lg font-bold">Message</label>
                    <textarea name="message" rows="4" class="w-full p-4 text-gray-900 bg-gray-100 rounded-lg focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Your Message"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="px-8 py-4 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-800">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
