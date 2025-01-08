@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="relative">
    <div class="h-[600px] bg-cover bg-center" style="background-image: url('/images/hero.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-50">
            <div class="container mx-auto px-6 h-full flex items-center">
                <div class="text-white">
                    <h1 class="text-5xl font-bold mb-4">Welcome to Our Restaurant</h1>
                    <p class="text-xl mb-8">Experience the finest dining in town</p>
                    <a href="/reservations" class="bg-yellow-600 text-white px-8 py-3 rounded-lg hover:bg-yellow-700">
                        Make a Reservation
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Specialties</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <img src="/images/dish1.jpg" alt="Special Dish 1" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Signature Dish 1</h3>
                <p class="text-gray-600">Description of our amazing signature dish</p>
            </div>
            <div class="text-center">
                <img src="/images/dish2.jpg" alt="Special Dish 2" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Signature Dish 2</h3>
                <p class="text-gray-600">Description of our amazing signature dish</p>
            </div>
            <div class="text-center">
                <img src="/images/dish3.jpg" alt="Special Dish 3" class="w-full h-64 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Signature Dish 3</h3>
                <p class="text-gray-600">Description of our amazing signature dish</p>
            </div>
        </div>
    </div>
</section>
@endsection 