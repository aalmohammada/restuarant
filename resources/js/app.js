import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

window.Alpine = Alpine;
Alpine.start();

gsap.registerPlugin(ScrollTrigger);

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
    offset: 50,
});

// GSAP Animations
document.addEventListener('DOMContentLoaded', () => {
    // Hero section animation
    gsap.from('.hero-content', {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: 'power3.out',
    });

    // Scroll animations
    gsap.utils.toArray('.animate-on-scroll').forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                toggleActions: 'play none none reverse',
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'power3.out',
        });
    });

    // Parallax effects
    gsap.utils.toArray('.parallax').forEach(element => {
        gsap.to(element, {
            scrollTrigger: {
                trigger: element,
                scrub: true,
                start: 'top bottom',
                end: 'bottom top',
            },
            y: (i, target) => -target.offsetHeight * 0.2,
            ease: 'none',
        });
    });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Mobile menu
const initMobileMenu = () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            body.classList.toggle('overflow-hidden');
        });
    }
};

initMobileMenu();
