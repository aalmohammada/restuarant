@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-12">Our Menu</h1>
        
        <div class="max-w-4xl mx-auto">
            <!-- Starters -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-yellow-600">Starters</h2>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-medium">Bruschetta</h3>
                            <p class="text-gray-600">Toasted bread with tomatoes, garlic, and fresh basil</p>
                        </div>
                        <span class="font-semibold">$8.99</span>
                    </div>
                    <!-- Add more starters -->
                </div>
            </div>

            <!-- Main Courses -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-yellow-600">Main Courses</h2>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-medium">Grilled Salmon</h3>
                            <p class="text-gray-600">Fresh salmon with seasonal vegetables</p>
                        </div>
                        <span class="font-semibold">$24.99</span>
                    </div>
                    <!-- Add more main courses -->
                </div>
            </div>

            <!-- Desserts -->
            <div>
                <h2 class="text-2xl font-semibold mb-6 text-yellow-600">Desserts</h2>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-medium">Tiramisu</h3>
                            <p class="text-gray-600">Classic Italian dessert with coffee and mascarpone</p>
                        </div>
                        <span class="font-semibold">$7.99</span>
                    </div>
                    <!-- Add more desserts -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 