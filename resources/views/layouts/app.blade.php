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
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="flex items-center space-x-2" :class="{ 'text-white': !isScrolled, 'text-neutral-800': isScrolled }">
                    <img src="/images/damascino-logo.svg" alt="Damascino" class="h-16 w-auto">
                    <span class="text-2xl font-playfair font-bold">
                        <span class="text-primary-600">Damascino</span>
                        <span class="text-sm uppercase tracking-[0.2em] block font-sans">Fine Syrian Cuisine</span>
                    </span>
                </a>
                
                <div class="flex items-center space-x-12">
                    <a href="/" class="nav-link" :class="{ 'text-white': !isScrolled }">Home</a>
                    <a href="/menu" class="nav-link" :class="{ 'text-white': !isScrolled }">Menu</a>
                    <a href="/book-table" class="nav-link" :class="{ 'text-white': !isScrolled }">Book a Table</a>
                    <a href="/contact" class="nav-link" :class="{ 'text-white': !isScrolled }">Contact</a>
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