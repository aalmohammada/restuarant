@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen overflow-hidden bg-[#1A0F1E]">
    <!-- Background Layers -->
    <div class="absolute inset-0">
        <!-- Deep Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1A0F1E] via-[#2A1F3E] to-[#241824]"></div>

        <!-- Colored Overlays -->
        <div class="absolute inset-0">
            <!-- Large color areas -->
            <div class="absolute top-0 right-0 w-full h-full bg-gradient-to-bl from-blue-900/30 via-purple-900/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-tr from-amber-900/30 via-red-900/20 to-transparent"></div>
        </div>

        <!-- Glowing Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-20 right-20 w-96 h-96 bg-amber-500/20 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-500/20 rounded-full blur-[100px]"></div>
            <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-red-500/20 rounded-full blur-[100px]"></div>
        </div>

        <!-- Moving Light Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-gradient-to-r from-amber-500/10 to-red-500/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-gradient-to-r from-purple-500/10 to-blue-500/10 rounded-full blur-3xl animate-float-delay"></div>
        </div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('/images/arabic-pattern-gold.svg')] opacity-10 bg-repeat bg-[length:32px_32px]"></div>

        <!-- Vignette -->
        <div class="absolute inset-0 bg-gradient-radial from-transparent via-black/20 to-black/50"></div>
    </div>

    <!-- Content -->
    <div class="relative container-custom h-full flex items-center">
        <div class="max-w-2xl" data-aos="fade-right">
            <!-- Decorative Element -->
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-full border-2 border-primary-500/30 flex items-center justify-center">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                </div>
                <div class="h-[2px] w-20 bg-gradient-to-r from-primary-500 to-transparent"></div>
            </div>

            <!-- Welcome Text -->
            <div class="flex items-center space-x-4 mb-8">
                <span class="text-2xl text-primary-400 font-arabic">أهلاً وسهلاً</span>
                <div class="w-px h-6 bg-gradient-to-b from-primary-500/50 to-transparent"></div>
                <span class="text-sm text-amber-300/80 uppercase tracking-[0.2em]">Welcome</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-playfair font-bold mb-8 text-white leading-tight">
                Authentic <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-primary-500 to-amber-600">Syrian</span> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-400">Cuisine</span>
            </h1>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6">
                <a href="/book-table" 
                   class="group px-8 py-4 bg-gradient-to-r from-amber-600 via-primary-600 to-amber-600 bg-size-200 bg-pos-0 hover:bg-pos-100 text-white rounded-lg font-medium tracking-wider uppercase text-sm hover:shadow-2xl hover:shadow-primary-600/20 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center">
                    Book Your Table
                    <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="/menu" 
                   class="group px-8 py-4 border-2 border-amber-500/20 text-white rounded-lg font-medium tracking-wider uppercase text-sm hover:border-amber-500/40 hover:bg-white/5 transition-all duration-300 flex items-center justify-center">
                    View Menu
                    <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute bottom-10 right-10 hidden lg:flex items-center gap-6">
        <div class="w-2 h-2 rounded-full bg-primary-500 animate-pulse"></div>
        <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse delay-75"></div>
        <div class="w-2 h-2 rounded-full bg-secondary-500 animate-pulse delay-150"></div>
    </div>
</section>
@endsection

@push('styles')
<style>
.bg-size-200 {
    background-size: 200% 100%;
}
.bg-pos-0 {
    background-position: 0% 0%;
}
.bg-pos-100 {
    background-position: 100% 0%;
}

/* Add subtle noise texture */
.bg-noise {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%' height='100%' filter='url(%23noise)'/%3E%3C/svg%3E");
    opacity: 0.05;
    mix-blend-mode: overlay;
}

.bg-radial-vignette {
    background: radial-gradient(
        circle at center,
        transparent 0%,
        rgba(0, 0, 0, 0.2) 60%,
        rgba(0, 0, 0, 0.4) 100%
    );
}

@keyframes pulse {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}

.animate-pulse {
    animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.delay-700 {
    animation-delay: 700ms;
}

.delay-1000 {
    animation-delay: 1000ms;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0) scale(1);
        opacity: 0.3;
    }
    50% {
        transform: translateY(-20px) scale(1.1);
        opacity: 0.5;
    }
}

.animate-float {
    animation: float 8s ease-in-out infinite;
}

.animate-float-delay {
    animation: float 8s ease-in-out infinite;
    animation-delay: -4s;
}

.bg-gradient-radial {
    background: radial-gradient(circle at center, var(--tw-gradient-stops));
}
</style>
@endpush 