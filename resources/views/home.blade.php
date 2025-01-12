@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Background Video with Multiple Layers -->
    <div class="absolute inset-0">
        <!-- Main Background Image (Fallback and Initial Load) -->
        <div class="absolute inset-0">
            <img src="/images/hero-bg.jpg" alt="Damascino Restaurant" 
                 class="object-cover w-full h-full"
                 loading="eager">
        </div>

        <!-- Video Background -->
        <video class="object-cover w-full h-full opacity-90" 
               autoplay loop muted playsinline 
               poster="/images/hero-bg.jpg">
            <source src="/videos/damascino-ambience.mp4" type="video/mp4">
        </video>
        
        <!-- Decorative Patterns -->
        <div class="absolute inset-0">
            <!-- Traditional Arabic Pattern -->
            <div class="absolute inset-0 bg-[url('/images/arabic-pattern.svg')] opacity-15 bg-repeat"></div>
            
            <!-- Radial Gradient for Depth -->
            <div class="absolute inset-0 bg-gradient-radial from-black/0 via-black/50 to-black/90"></div>
        </div>
        
        <!-- Main Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/95 via-black/85 to-transparent">
            <!-- Animated Light Effects -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-[300px] h-[300px] bg-primary-500/10 rounded-full mix-blend-overlay filter blur-2xl animate-pulse"></div>
                <div class="absolute bottom-1/4 right-1/4 w-[250px] h-[250px] bg-secondary-500/10 rounded-full mix-blend-overlay filter blur-2xl animate-pulse animation-delay-2000"></div>
            </div>
            
            <!-- Subtle Texture Overlay -->
            <div class="absolute inset-0 bg-texture opacity-5 mix-blend-overlay"></div>
        </div>
    </div>

    <!-- Content Container -->
    <div class="relative container-custom h-full flex items-center">
        <div class="max-w-4xl" data-aos="fade-right">
            <!-- Decorative Line -->
            <div class="w-24 h-1 bg-primary-500 mb-8"></div>
            
            <!-- Arabic Welcome -->
            <span class="text-xl text-primary-400 font-arabic mb-4 block">أهلاً وسهلاً</span>
            
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-playfair font-bold mb-8 text-white leading-tight">
                Authentic <span class="text-primary-400">Syrian</span><br/>
                Culinary Experience
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-300 mb-12 leading-relaxed max-w-2xl">
                Discover the rich flavors and traditions of Damascus cuisine, 
                where every dish tells a story of heritage and passion
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6">
                <a href="/book-table" class="btn-primary group">
                    <span class="relative z-10">Book Your Table</span>
                    <svg class="w-5 h-5 ml-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="/menu" class="btn-outline group">
                    <span class="relative z-10">Explore Menu</span>
                    <svg class="w-5 h-5 ml-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce">
                <span class="text-white/60 text-sm uppercase tracking-widest mb-2">Scroll</span>
                <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-1/2 right-10 transform -translate-y-1/2 hidden lg:block">
            <div class="space-y-8">
                <!-- Opening Hours -->
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-lg border border-white/20 text-white">
                    <h3 class="text-lg font-medium mb-2">Opening Hours</h3>
                    <p class="text-sm text-gray-300">Tue - Sun: 11:30 AM - 11:00 PM</p>
                    <p class="text-sm text-primary-400">Closed on Mondays</p>
                </div>
                
                <!-- Quick Contact -->
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-lg border border-white/20 text-white">
                    <h3 class="text-lg font-medium mb-2">Reservations</h3>
                    <a href="tel:+15551234567" class="text-sm text-gray-300 hover:text-primary-400 transition-colors">
                        +1 (555) 123-4567
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Section -->
<section class="py-24 bg-neutral-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Opening Hours', 'text' => 'Tue - Sun: 11:30 AM - 11:00 PM'],
                ['icon' => 'M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z', 'title' => 'Fine Dining', 'text' => 'Authentic Syrian Cuisine'],
                ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'title' => 'Reservations', 'text' => 'Book Your Experience']
            ] as $feature)
            <div class="group p-8 bg-white shadow-md hover:shadow-xl transition-all duration-500" data-aos="fade-up">
                <div class="w-12 h-12 mb-6 rounded-full bg-primary-100 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-500">
                    <svg class="w-5 h-5 text-primary-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">{{ $feature['title'] }}</h3>
                <p class="text-neutral-600">{{ $feature['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
<section class="relative py-32">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative" data-aos="fade-right">
                <img src="/images/chef-cooking.jpg" alt="Chef Preparing Dish" class="w-full h-[600px] object-cover">
                <div class="absolute -bottom-8 -right-8 bg-white p-8 shadow-xl">
                    <p class="text-3xl font-playfair font-bold text-gold-600">25+</p>
                    <p class="text-neutral-600">Years of Excellence</p>
                </div>
            </div>
            <div class="space-y-6" data-aos="fade-left">
                <span class="section-subtitle">Our Story</span>
                <h2 class="section-title">A Legacy of Culinary Excellence</h2>
                <p class="text-neutral-600 leading-relaxed">
                    For over two decades, we've been crafting unforgettable dining experiences that combine traditional 
                    techniques with modern innovation. Our commitment to excellence is reflected in every dish we serve.
                </p>
                <div class="grid grid-cols-2 gap-8 mt-12">
                    <div class="text-center p-6 bg-neutral-50">
                        <p class="text-3xl font-bold text-gold-600 mb-2">4.9</p>
                        <p class="text-sm text-neutral-600 uppercase tracking-wider">Customer Rating</p>
                    </div>
                    <div class="text-center p-6 bg-neutral-50">
                        <p class="text-3xl font-bold text-gold-600 mb-2">150+</p>
                        <p class="text-sm text-neutral-600 uppercase tracking-wider">Wine Selection</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Preview -->
<section class="py-24 bg-neutral-900 text-white">
    <div class="container-custom">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-subtitle">Our Specialties</span>
            <h2 class="section-title">Signature Dishes</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                [
                    'name' => 'Wagyu A5 Ribeye',
                    'price' => '$120',
                    'description' => 'Japanese A5 Wagyu with truffle butter and seasonal vegetables',
                    'image' => 'wagyu.jpg'
                ],
                [
                    'name' => 'Maine Lobster',
                    'price' => '$85',
                    'description' => 'Poached Maine lobster with caviar and champagne sauce',
                    'image' => 'lobster.jpg'
                ],
                [
                    'name' => 'Duck à l\'Orange',
                    'price' => '$65',
                    'description' => 'Classic French duck with orange glaze and wild mushrooms',
                    'image' => 'duck.jpg'
                ]
            ] as $dish)
                <div class="group relative overflow-hidden rounded-2xl" data-aos="fade-up">
                    <div class="aspect-w-16 aspect-h-12">
                        <img src="/images/dishes/{{ $dish['image'] }}" 
                             alt="{{ $dish['name'] }}" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold">{{ $dish['name'] }}</h3>
                                <span class="text-gold-400">{{ $dish['price'] }}</span>
                            </div>
                            <p class="text-gray-300">{{ $dish['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="/menu" class="btn-primary">
                View Full Menu
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-neutral-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title">What Our Guests Say</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['text' => 'An unforgettable dining experience. The attention to detail and service is impeccable.', 'author' => 'Emily Thompson', 'role' => 'Food Critic'],
                ['text' => 'The wine pairing suggestions were perfect. A truly memorable evening.', 'author' => 'Michael Chen', 'role' => 'Wine Enthusiast'],
                ['text' => 'Every dish was a masterpiece. The ambiance is perfect for special occasions.', 'author' => 'Sarah Williams', 'role' => 'Regular Guest']
            ] as $testimonial)
            <div class="bg-white p-8 shadow-lg" data-aos="fade-up">
                <svg class="w-10 h-10 text-gold-400 mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <p class="text-neutral-600 mb-6 leading-relaxed">{{ $testimonial['text'] }}</p>
                <div class="flex items-center">
                    <div class="ml-4">
                        <p class="font-semibold">{{ $testimonial['author'] }}</p>
                        <p class="text-sm text-neutral-500">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 bg-cover bg-center" style="background-image: url('/images/restaurant-interior.jpg')">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container mx-auto px-6 relative">
        <div class="max-w-3xl mx-auto text-center text-white" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Experience Fine Dining</h2>
            <p class="text-xl mb-8 text-gray-300">Reserve your table today and embark on a culinary journey</p>
            <a href="/reservations" class="btn-primary">Make a Reservation</a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endpush 