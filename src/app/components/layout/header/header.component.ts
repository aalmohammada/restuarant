import { Component } from '@angular/core';
import { RouterLink, RouterLinkActive } from '@angular/router';
import { NgFor } from '@angular/common';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [RouterLink, RouterLinkActive, NgFor],
  template: `
    <header class="fixed w-full z-50 bg-[#0A0F1E]/95 backdrop-blur-sm">
      <nav class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
          <!-- Logo -->
          <a routerLink="/" class="flex items-center space-x-4 group">
            <div class="w-12 h-12 relative overflow-hidden rounded-full">
              <img 
                src="images/damascino-logo.jpg" 
                alt="Damascino" 
                class="w-full h-full object-cover transform transition-transform group-hover:scale-110"
              />
            </div>
            <div>
              <span class="text-2xl font-playfair font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-amber-600">
                Damascino
              </span>
              <span class="block text-xs uppercase tracking-[0.2em] text-gray-400">
                Fine Syrian Cuisine
              </span>
            </div>
          </a>

          <!-- Navigation Links -->
          <div class="hidden md:flex items-center space-x-8">
            <a *ngFor="let item of navItems" 
               [routerLink]="item.path"
               routerLinkActive="text-amber-500"
               class="nav-link group">
              <span class="relative">
                {{item.label}}
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 transition-transform group-hover:scale-x-100"></span>
              </span>
            </a>
          </div>

          <!-- Mobile Menu Button -->
          <button class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </nav>
    </header>
  `,
  styles: [`
    :host {
      display: block;
    }
  `]
})
export class HeaderComponent {
  navItems = [
    { path: '/', label: 'Home' },
    { path: '/menu', label: 'Menu' },
    { path: '/book-table', label: 'Book Table' },
    { path: '/contact', label: 'Contact' }
  ];
} 