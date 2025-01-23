@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen">
    <!-- Background -->
    <div class="absolute inset-0 bg-[#0A0F1E]">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 opacity-40">
            <div class="absolute top-0 right-0 w-1/2 h-1/2 bg-amber-600/20 rounded-full filter blur-[120px]"></div>
            <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-amber-500/20 rounded-full filter blur-[120px]"></div>
        </div>
    </div>

    <!-- Content -->
    <div class="relative h-screen flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto text-center" data-aos="fade-up">
                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    <span class="block text-white mb-2">Welcome to</span>
                    <span class="text-amber-500">Damascino</span>
                </h1>

                <p class="text-gray-300 mb-10">
                    Experience authentic Syrian cuisine in an elegant atmosphere
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/menu" 
                       class="px-8 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors">
                        View Menu
                    </a>
                    <a href="/book-table" 
                       class="px-8 py-3 border border-amber-600/30 text-white rounded-lg hover:bg-white/5 transition-colors">
                        Book a Table
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-black/40">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6" data-aos="fade-up">
                <h3 class="text-lg font-bold text-white mb-2">Fresh Ingredients</h3>
                <p class="text-gray-400 text-sm">Quality ingredients for authentic flavors</p>
            </div>

            <div class="text-center p-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-lg font-bold text-white mb-2">Traditional Recipes</h3>
                <p class="text-gray-400 text-sm">Time-honored Syrian recipes</p>
            </div>

            <div class="text-center p-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-bold text-white mb-2">Expert Chefs</h3>
                <p class="text-gray-400 text-sm">Skilled in Syrian cuisine</p>
            </div>
        </div>
    </div>
</section>

<!-- Hours Section -->
<section class="py-16 bg-[#0A0F1E]">
    <div class="container mx-auto px-4">
        <div class="max-w-lg mx-auto text-center">
            <h2 class="text-2xl font-playfair font-bold text-white mb-8">Opening Hours</h2>
            <div class="space-y-4">
                <div class="flex justify-between items-center py-2 border-b border-amber-500/20">
                    <span class="text-gray-400">Monday</span>
                    <span class="text-amber-500">Closed</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-amber-500/20">
                    <span class="text-gray-400">Tuesday - Friday</span>
                    <span class="text-white">11:30 AM - 10:30 PM</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-400">Saturday - Sunday</span>
                    <span class="text-white">10:00 AM - 11:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
</script>
@endpush 