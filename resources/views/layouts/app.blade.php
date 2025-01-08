<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-white shadow">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="/" class="text-xl font-bold">Restaurant Name</a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="hover:text-gray-700">Home</a>
                    <a href="/menu" class="hover:text-gray-700">Menu</a>
                    <a href="/reservations" class="hover:text-gray-700">Reservations</a>
                    <a href="/contact" class="hover:text-gray-700">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <p>&copy; {{ date('Y') }} Restaurant Name. All rights reserved.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-300">Facebook</a>
                    <a href="#" class="hover:text-gray-300">Instagram</a>
                    <a href="#" class="hover:text-gray-300">Twitter</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 