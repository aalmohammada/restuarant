@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="relative h-[40vh] bg-cover bg-center" style="background-image: url('/images/contact-hero.jpg')">
    <div class="absolute inset-0 bg-black/60">
        <div class="container mx-auto px-6 h-full flex items-center">
            <div class="text-white" data-aos="fade-up">
                <h1 class="text-5xl font-playfair font-bold mb-4">Contact Us</h1>
                <p class="text-xl text-gray-200">We'd love to hear from you</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-neutral-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div class="space-y-8" data-aos="fade-right">
                <div>
                    <span class="section-subtitle">Get in Touch</span>
                    <h2 class="section-title">Contact Information</h2>
                    <p class="text-neutral-600 mt-4">
                        For reservations, inquiries, or any questions, please don't hesitate to contact us.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-full bg-gold-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Address</h3>
                            <p class="text-neutral-600">123 Gourmet Street</p>
                            <p class="text-neutral-600">New York, NY 10001</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-full bg-gold-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Phone</h3>
                            <p class="text-neutral-600">+1 (555) 123-4567</p>
                            <p class="text-neutral-600">+1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-full bg-gold-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Email</h3>
                            <p class="text-neutral-600">info@lartisan.com</p>
                            <p class="text-neutral-600">reservations@lartisan.com</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8">
                    <h3 class="text-lg font-semibold mb-4">Opening Hours</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-neutral-600">Monday</span>
                            <span class="text-gold-600">Closed</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-neutral-600">Tuesday - Friday</span>
                            <span>11:30 AM - 10:30 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-neutral-600">Saturday - Sunday</span>
                            <span>10:00 AM - 11:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 shadow-lg" data-aos="fade-left">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral-600 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500"
                               placeholder="John Doe">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-600 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500"
                               placeholder="john@example.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-neutral-600 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" required
                               class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500"
                               placeholder="Your subject">
                        @error('subject')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-600 mb-1">Message</label>
                        <textarea id="message" name="message" rows="6" required
                                  class="w-full px-4 py-2 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-gold-500 focus:border-gold-500"
                                  placeholder="Your message"></textarea>
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
</section>

<!-- Map Section -->
<section class="h-[400px] relative">
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