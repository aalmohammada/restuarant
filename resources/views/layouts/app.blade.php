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
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <header class="fixed w-full z-50 transition-all duration-300" x-data="{ isScrolled: false }" 
            x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 30 })"
            :class="{ 'glass-effect shadow-lg': isScrolled, 'bg-transparent': !isScrolled }">
        <nav class="container mx-auto px-6 py-6">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-playfair font-bold" :class="{ 'text-white': !isScrolled, 'text-neutral-800': isScrolled }">
                    <span class="text-gold-500">L'Artisan</span> Restaurant
                </a>
                
                <!-- Desktop menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link" :class="{ 'text-white': !isScrolled }">Home</a>
                    <a href="/menu" class="nav-link" :class="{ 'text-white': !isScrolled }">Menu</a>
                    <a href="/reservations" class="nav-link" :class="{ 'text-white': !isScrolled }">Reservations</a>
                    <a href="/contact" class="nav-link" :class="{ 'text-white': !isScrolled }">Contact</a>
                    <a href="/reservations" class="btn-primary">
                        Book a Table
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden" :class="{ 'text-white': !isScrolled }">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 rounded-none bg-white p-6 shadow-xl">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="mobile-nav-link">Home</a>
                    <a href="/menu" class="mobile-nav-link">Menu</a>
                    <a href="/reservations" class="mobile-nav-link">Reservations</a>
                    <a href="/contact" class="mobile-nav-link">Contact</a>
                    <a href="/reservations" class="btn-primary w-full text-center mt-4">
                        Book a Table
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-neutral-850 text-neutral-300">
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="space-y-4">
                    <h3 class="text-2xl font-playfair font-bold text-white">
                        <span class="text-gold-500">L'Artisan</span> Restaurant
                    </h3>
                    <p class="text-neutral-400 leading-relaxed">
                        Experience the art of fine dining in an atmosphere of timeless elegance.
                    </p>
                </div>
                
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-white">Contact</h4>
                    <div class="space-y-3 text-neutral-400">
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            123 Gourmet Street, NY
                        </p>
                        <p class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            (555) 123-4567
                        </p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-white">Hours</h4>
                    <div class="space-y-3 text-neutral-400">
                        <p>Lunch: 11:30 AM - 2:30 PM</p>
                        <p>Dinner: 5:30 PM - 10:30 PM</p>
                        <p class="text-gold-500">Closed on Mondays</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-white">Newsletter</h4>
                    <p class="text-neutral-400">Subscribe for exclusive updates and offers.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" 
                               class="flex-1 px-4 py-2 bg-neutral-800 border border-neutral-700 focus:border-gold-500 focus:ring-1 focus:ring-gold-500 rounded-l-md text-white">
                        <button class="px-4 py-2 bg-gold-600 text-white rounded-r-md hover:bg-gold-700 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mt-12 pt-8 border-t border-neutral-800 text-center text-neutral-400">
                <p>&copy; {{ date('Y') }} L'Artisan Restaurant. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    @stack('scripts')
</body>
</html> 