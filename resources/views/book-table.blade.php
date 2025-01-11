@extends('layouts.app')

@section('title', 'Book a Table')

@section('content')
<!-- Hero Section -->
<section class="relative h-[50vh] bg-cover bg-center bg-fixed" style="background-image: url('/images/booking-hero.jpg')">
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/40">
        <div class="container-custom h-full flex items-center">
            <div class="max-w-2xl" data-aos="fade-right">
                <span class="section-subtitle text-primary-400">Reservations</span>
                <h1 class="text-5xl md:text-6xl font-playfair font-bold mb-6 text-white leading-tight">
                    Book a Table
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed">
                    Reserve your table for an unforgettable dining experience
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section class="py-20 bg-white relative">
    <div class="absolute inset-0 bg-texture opacity-5"></div>
    <div class="container-custom relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Booking Form -->
            <div data-aos="fade-up">
                <div class="card">
                    <h3 class="text-2xl font-bold mb-8">Make a Reservation</h3>
                    <form action="{{ route('book-table.store') }}" method="POST" class="space-y-6">
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

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-neutral-600 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" required class="input-primary" placeholder="+1 (555) 000-0000">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="guests" class="block text-sm font-medium text-neutral-600 mb-2">Number of Guests</label>
                                <select id="guests" name="guests" required class="input-primary">
                                    @for($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }} {{ $i === 1 ? 'Guest' : 'Guests' }}</option>
                                    @endfor
                                </select>
                                @error('guests')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="date" class="block text-sm font-medium text-neutral-600 mb-2">Date</label>
                                <input type="date" id="date" name="date" required class="input-primary" min="{{ date('Y-m-d') }}">
                                @error('date')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="time" class="block text-sm font-medium text-neutral-600 mb-2">Time</label>
                                <select id="time" name="time" required class="input-primary">
                                    @foreach(['11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00'] as $time)
                                        <option value="{{ $time }}">{{ $time }}</option>
                                    @endforeach
                                </select>
                                @error('time')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="special_requests" class="block text-sm font-medium text-neutral-600 mb-2">Special Requests</label>
                            <textarea id="special_requests" name="special_requests" rows="4" class="input-primary" placeholder="Any special requests or dietary requirements?"></textarea>
                            @error('special_requests')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn-primary w-full justify-center">
                            Confirm Reservation
                        </button>
                    </form>
                </div>
            </div>

            <!-- Information -->
            <div class="space-y-12" data-aos="fade-up" data-aos-delay="200">
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

                <!-- Booking Information -->
                <div class="card">
                    <h3 class="text-2xl font-bold mb-6">Booking Information</h3>
                    <div class="space-y-4 text-neutral-600">
                        <p>• Reservations are recommended, especially for dinner and weekends</p>
                        <p>• Maximum group size without special arrangement: 10 people</p>
                        <p>• For larger groups, please contact us directly</p>
                        <p>• We hold reservations for 15 minutes past the booking time</p>
                        <p>• Special requests are subject to availability</p>
                    </div>
                </div>

                <!-- Contact -->
                <div class="card">
                    <h3 class="text-2xl font-bold mb-6">Need Help?</h3>
                    <p class="text-neutral-600 mb-4">For immediate assistance or special arrangements, please contact us:</p>
                    <div class="space-y-2">
                        <a href="tel:+15551234567" class="flex items-center text-primary-600 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +1 (555) 123-4567
                        </a>
                        <a href="mailto:bookings@restaurant.com" class="flex items-center text-primary-600 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            bookings@restaurant.com
                        </a>
                    </div>
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
        duration: 1000,
        once: true,
    });
</script>
@endpush 