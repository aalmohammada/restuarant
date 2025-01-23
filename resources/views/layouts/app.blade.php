<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Damascino - @yield('title')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-[#0A0F1E] text-white antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300" id="mainNav">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-4 group">
                    <div class="w-12 h-12 relative overflow-hidden rounded-full">
                        <img src="/images/damascino-logo.svg" alt="Damascino" 
                             class="w-full h-full transform transition-transform group-hover:scale-110">
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
                    <a href="/" class="nav-link group">
                        <span class="relative">
                            Home
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
                        </span>
                    </a>
                    <a href="/menu" class="nav-link group">
                        <span class="relative">
                            Menu
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
                        </span>
                    </a>
                    <a href="/book-table" class="nav-link group">
                        <span class="relative">
                            Book a Table
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
                        </span>
                    </a>
                    <a href="/contact" class="nav-link group">
                        <span class="relative">
                            Contact
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" id="mobileMenuButton">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobileMenu">
            <div class="px-4 py-3 space-y-1 bg-black/90 backdrop-blur-lg">
                <a href="/" class="block px-3 py-2 rounded-lg hover:bg-amber-500/10 transition-colors">Home</a>
                <a href="/menu" class="block px-3 py-2 rounded-lg hover:bg-amber-500/10 transition-colors">Menu</a>
                <a href="/book-table" class="block px-3 py-2 rounded-lg hover:bg-amber-500/10 transition-colors">Book a Table</a>
                <a href="/contact" class="block px-3 py-2 rounded-lg hover:bg-amber-500/10 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black/50 border-t border-white/10 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-playfair font-bold text-white mb-4">Damascino</h3>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Experience authentic Syrian cuisine in an elegant atmosphere.
                    </p>
                </div>

                <!-- Hours -->
                <div>
                    <h4 class="text-white font-medium mb-4">Hours</h4>
                    <div class="space-y-2 text-sm text-gray-400">
                        <p>Tue - Fri: 11:30 AM - 10:30 PM</p>
                        <p>Sat - Sun: 10:00 AM - 11:00 PM</p>
                        <p class="text-amber-500">Monday: Closed</p>
                    </div>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-medium mb-4">Contact</h4>
                    <div class="space-y-2 text-sm text-gray-400">
                        <p>123 Restaurant Street</p>
                        <p>City, State 12345</p>
                        <p class="text-amber-500">+1 (555) 123-4567</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div>
                    <h4 class="text-white font-medium mb-4">Follow Us</h4>
                    <div class="flex items-center gap-2">
                        <!-- Facebook -->
                        <a href="#" class="group">
                            <div class="w-7 h-7 flex items-center justify-center rounded-full border border-gray-600 
                                        hover:border-amber-500 transition-colors duration-300">
                                <svg class="w-3 h-3 text-gray-400 group-hover:text-amber-500 transition-colors duration-300" 
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z"/>
                                </svg>
                            </div>
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="group">
                            <div class="w-7 h-7 flex items-center justify-center rounded-full border border-gray-600 
                                        hover:border-amber-500 transition-colors duration-300">
                                <svg class="w-3 h-3 text-gray-400 group-hover:text-amber-500 transition-colors duration-300" 
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </div>
                        </a>

                        <!-- Instagram -->
                        <a href="#" class="group">
                            <div class="w-7 h-7 flex items-center justify-center rounded-full border border-gray-600 
                                        hover:border-amber-500 transition-colors duration-300">
                                <svg class="w-3 h-3 text-gray-400 group-hover:text-amber-500 transition-colors duration-300" 
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0 2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 3.675a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-10.905a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-12 pt-8 border-t border-white/10 text-center text-sm text-gray-400">
                <p>&copy; 2024 Damascino Restaurant. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
    <script>
        // Navigation scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('bg-black/90', 'backdrop-blur-lg');
            } else {
                nav.classList.remove('bg-black/90', 'backdrop-blur-lg');
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html> 