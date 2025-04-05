<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ShoeStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Background image and welcome message -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <!-- Overlay for darkened effect -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-6xl font-extrabold mb-4">Welcome to ShoeStore</h1>
                <p class="text-xl mb-8">Discover premium footwear for every occasion</p>
                <a href="{{ url('/shoes')}}" class="bg-white text-gray-800 font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-gray-200 transition">Explore Collection</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-6">
        <div class="max-w-7xl mx-auto text-center text-white">
            <p>&copy; 2025 ShoeStore. Crafted with care and style.</p>
        </div>
    </footer>
</body>
</html>
