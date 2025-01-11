@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="relative h-[60vh] bg-cover bg-center bg-fixed overflow-hidden" 
         style="background-image: url('/images/damascino-contact-hero.jpg')">
    <!-- Decorative Pattern Overlay -->
    <div class="absolute inset-0 bg-[url('/images/arabic-pattern.svg')] opacity-20"></div>
    
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent">
        <!-- Animated Shapes -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-secondary-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="container-custom h-full flex items-center">
            <div class="max-w-2xl" data-aos="fade-right">
                <!-- Decorative Element -->
                <div class="w-20 h-1 bg-primary-500 mb-8"></div>
                
                <span class="section-subtitle text-primary-400 font-arabic">تواصل معنا</span>
                <h1 class="text-5xl md:text-7xl font-playfair font-bold mb-6 text-white leading-tight">
                    Contact Us
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed max-w-xl">
                    Experience the warmth of Syrian hospitality. We're here to assist you with any inquiries about our authentic cuisine and services.
                </p>
                
                <!-- Decorative Scroll Indicator -->
                <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce">
                    <span class="text-white/60 text-sm uppercase tracking-widest mb-2">Scroll</span>
                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white relative">
    <div class="absolute inset-0 bg-texture opacity-5"></div>
    <div class="container-custom relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div class="space-y-12" data-aos="fade-up">
                <!-- Quick Contact -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="card group">
                        <div class="w-14 h-14 mb-6 rounded-full bg-primary-100 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-500">
                            <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Call Us</h3>
                        <p class="text-neutral-600 mb-4">Available 7 days a week</p>
                        <a href="tel:+15551234567" class="text-primary-600 hover:text-primary-700 font-medium">
                            +1 (555) 123-4567
                        </a>
                    </div>

                    <div class="card group">
                        <div class="w-14 h-14 mb-6 rounded-full bg-primary-100 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-500">
                            <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Email Us</h3>
                        <p class="text-neutral-600 mb-4">We'll respond within 24h</p>
                        <a href="mailto:info@restaurant.com" class="text-primary-600 hover:text-primary-700 font-medium">
                            info@restaurant.com
                        </a>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="card">
                    <h3 class="text-2xl font-bold mb-6">Opening Hours</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-4 border-b border-neutral-100">
                            <span class="text-neutral-600">Monday</span>
                            <span class="text-primary-600 font-medium">Closed</span>
                        </div>
                        <div class="flex justify-between items-center pb-4 border-b border-neutral-100">
                            <span class="text-neutral-600">Tuesday - Friday</span>
                            <span class="font-medium">11:30 AM - 10:30 PM</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-neutral-600">Saturday - Sunday</span>
                            <span class="font-medium">10:00 AM - 11:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div class="card">
                    <h3 class="text-2xl font-bold mb-6">Location</h3>
                    <p class="text-neutral-600 mb-4">
                        123 Gourmet Street<br>
                        New York, NY 10001
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <h3 class="text-2xl font-bold mb-8">Send us a Message</h3>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        @if(session('success'))
                            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                                <p class="text-green-700">{{ session('success') }}</p>
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-neutral-600 mb-2">Full Name</label>
                                <input type="text" id="name" name="name" required class="input-primary" placeholder="John Doe">
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-neutral-600 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" required class="input-primary" placeholder="john@example.com">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-neutral-600 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required class="input-primary" placeholder="Your subject">
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-neutral-600 mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" required class="input-primary" placeholder="Your message"></textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="h-[500px] relative">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30596073366!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647043435129!5m2!1sen!2s"
        class="w-full h-full"
        style="border:0;"
        allowfullscreen=""
        loading="lazy">
    </iframe>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endpush 