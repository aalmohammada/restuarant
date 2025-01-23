import { Component } from '@angular/core';

@Component({
  selector: 'app-footer',
  template: `
    <footer class="bg-[#0A0F1E] border-t border-white/5">
      <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Contact -->
          <div>
            <h4 class="text-white font-medium mb-4">Contact Us</h4>
            <div class="space-y-2 text-sm text-gray-400">
              <p>123 Restaurant Street</p>
              <p>City, State 12345</p>
              <p class="text-amber-500">+1 (555) 123-4567</p>
            </div>
          </div>

          <!-- Social Links -->
          <div>
            <h4 class="text-white font-medium mb-4">Follow Us</h4>
            <div class="flex items-center gap-2">
              <a *ngFor="let social of socialLinks" 
                 [href]="social.url" 
                 class="w-6 h-6 flex items-center justify-center rounded-full border border-gray-600 
                        hover:border-amber-500 transition-colors duration-300 group">
                <i [class]="social.icon" 
                   class="text-xs text-gray-400 group-hover:text-amber-500 transition-colors duration-300">
                </i>
              </a>
            </div>
          </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 pt-8 border-t border-white/10 text-center text-xs text-gray-400">
          <p>&copy; {{currentYear}} Damascino Restaurant. All rights reserved.</p>
        </div>
      </div>
    </footer>
  `
})
export class FooterComponent {
  currentYear = new Date().getFullYear();
  
  socialLinks = [
    { url: '#', icon: 'fab fa-facebook-f' },
    { url: '#', icon: 'fab fa-twitter' },
    { url: '#', icon: 'fab fa-instagram' }
  ];
} 