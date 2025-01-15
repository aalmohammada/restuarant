<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0A0F1E] text-white antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gradient-to-b from-black/90 to-black/0">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-4">
                    <div class="w-12 h-12">
                        <img src="/images/damascino-logo.svg" alt="Damascino" class="w-full h-full">
                    </div>
                    <div>
                        <span class="text-2xl font-playfair font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-600">
                            Damascino
                        </span>
                        <span class="block text-xs uppercase tracking-[0.2em] text-gray-400">Fine Syrian Cuisine</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/menu" class="nav-link">Menu</a>
                    <a href="/book-table" class="nav-link">Book a Table</a>
                    <a href="/contact" class="nav-link">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black/90 text-gray-400">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-xl font-playfair font-bold text-white mb-4">Damascino</h3>
                    <p class="text-sm leading-relaxed">Experience authentic Syrian cuisine in an elegant atmosphere.</p>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Hours</h4>
                    <div class="space-y-2 text-sm">
                        <p>Tue - Fri: 11:30 AM - 10:30 PM</p>
                        <p>Sat - Sun: 10:00 AM - 11:00 PM</p>
                        <p class="text-amber-500">Monday: Closed</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Contact</h4>
                    <div class="space-y-2 text-sm">
                        <p>123 Restaurant Street</p>
                        <p>City, State 12345</p>
                        <p class="text-amber-500">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-amber-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="hover:text-amber-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-sm">
                <p>&copy; {{ date('Y') }} Damascino. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html> 