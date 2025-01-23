import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CommonModule, RouterLink],
  template: `
    <!-- Hero Section -->
    <section class="hero-section relative h-screen">
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="container mx-auto px-4 relative z-10 h-full flex flex-col justify-center">
        <div class="text-center mx-auto max-w-4xl pt-20">
          <h1 class="text-5xl md:text-7xl font-playfair font-bold text-white mb-6">
            Welcome to Damascino
          </h1>
          <p class="text-xl text-gray-200 mb-10">
            Experience authentic Syrian cuisine in an elegant atmosphere
          </p>
          <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a routerLink="/menu" 
               class="px-8 py-4 bg-amber-500 text-white rounded-lg hover:bg-amber-600 
                      transition-colors transform hover:-translate-y-0.5">
              View Menu
            </a>
            <a routerLink="/book-table" 
               class="px-8 py-4 border-2 border-white/30 text-white rounded-lg 
                      hover:bg-white/10 transition-all">
              Book a Table
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-[#0A0F1E]">
      <div class="container mx-auto px-4">
        <!-- Fresh Ingredients -->
        <div class="mb-20">
          <h2 class="text-4xl font-playfair font-bold text-white mb-4">Fresh Ingredients</h2>
          <p class="text-xl text-gray-300">Quality ingredients for authentic flavors</p>
        </div>

        <!-- Traditional Recipes -->
        <div class="mb-20">
          <h2 class="text-4xl font-playfair font-bold text-white mb-4">Traditional Recipes</h2>
          <p class="text-xl text-gray-300">Time-honored Syrian recipes</p>
        </div>
      </div>
    </section>
  `,
  styles: [`
    .hero-section {
      background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/hero-bg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  `]
})
export class HomeComponent {} 