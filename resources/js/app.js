import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Theme toggle
const themeToggle = document.querySelector('[data-theme-toggle]');
const sunIcon = document.querySelector('[data-icon-sun]');
const moonIcon = document.querySelector('[data-icon-moon]');

function syncThemeIcon() {
    const isDark = document.documentElement.classList.contains('dark');
    sunIcon?.classList.toggle('hidden', isDark);
    moonIcon?.classList.toggle('hidden', !isDark);
}

syncThemeIcon();

themeToggle?.addEventListener('click', () => {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.theme = isDark ? 'dark' : 'light';
    syncThemeIcon();
});

// Mobile menu
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

menuToggle?.addEventListener('click', () => {
    const isOpen = !mobileMenu.classList.contains('hidden');
    mobileMenu.classList.toggle('hidden');
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
});

mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuToggle?.setAttribute('aria-expanded', 'false');
    });
});

// Scroll reveal
if (!prefersReducedMotion) {
    document.querySelectorAll('[data-reveal]').forEach((el, index) => {
        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: 'power2.out',
            delay: (index % 4) * 0.05,
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true,
            },
        });
    });
} else {
    document.querySelectorAll('[data-reveal]').forEach((el) => {
        el.style.opacity = 1;
        el.style.transform = 'none';
    });
}
