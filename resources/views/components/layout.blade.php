<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoe Store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <header>
    <!-- Navbar -->
      <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/">
                <div class="text-2xl font-bold text-gray-800">ShoeStore</div>
            </a>
            <div class="flex space-x-4">
                <a href="/shoes" class="text-gray-700 hover:text-blue-500">Home</a>
                <a href="/shoes/create" class="text-gray-700 hover:text-blue-500">Post</a>
                <a href="/about" class="text-gray-700 hover:text-blue-500">About</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-500">Contact</a>
            </div>

            <div class="space-x-4">
                @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500">Logout</button>
                </form>
                
                @endauth
    
                @guest
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                @endguest
            </div>

        </div>
    </nav>
    </header>

    <main>
        {{ $slot }}
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <p>&copy; 2025 ShoeStore. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>