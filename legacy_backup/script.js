// ===== DOM ELEMENTS =====
const navbar = document.getElementById('navbar');
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.getElementById('menu-icon');
const closeIcon = document.getElementById('close-icon');

// ===== NAVBAR SCROLL EFFECT =====
if (navbar) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('bg-white/95', 'backdrop-blur', 'shadow-sm', 'border-slate-200', 'py-3');
            navbar.classList.remove('py-5', 'border-transparent');
        } else {
            navbar.classList.add('py-5', 'border-transparent');
            navbar.classList.remove('bg-white/95', 'backdrop-blur', 'shadow-sm', 'border-slate-200', 'py-3');
        }
    });
}

// ===== MOBILE MENU TOGGLE =====
if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        if (menuIcon) menuIcon.classList.toggle('hidden');
        if (closeIcon) closeIcon.classList.toggle('hidden');
    });
}

// ===== SMOOTH SCROLL FUNCTION =====
function scrollToSection(id) {
    // Close mobile menu if open
    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
        if (menuIcon) menuIcon.classList.remove('hidden');
        if (closeIcon) closeIcon.classList.add('hidden');
    }

    const element = document.getElementById(id);
    if (element) {
        const navbarHeight = navbar ? navbar.offsetHeight : 0;
        const elementPosition = element.getBoundingClientRect().top + window.scrollY;
        const offsetPosition = elementPosition - navbarHeight;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    }
}

// ===== SCROLL ANIMATION OBSERVER =====
const animateOnScrollElements = document.querySelectorAll('.animate-on-scroll, .animate-fade-in-left, .animate-fade-in-right, .animate-scale-in');

const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const animationObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animated');
        }
    });
}, observerOptions);

animateOnScrollElements.forEach(el => {
    animationObserver.observe(el);
});

// ===== STAGGER ANIMATION FOR CARDS =====
function addStaggerAnimation(selector, delayIncrement = 100) {
    const elements = document.querySelectorAll(selector);
    elements.forEach((el, index) => {
        el.classList.add('animate-on-scroll');
        el.style.transitionDelay = `${index * delayIncrement}ms`;
        animationObserver.observe(el);
    });
}

// Apply stagger to service cards
addStaggerAnimation('#services .grid > div', 150);
addStaggerAnimation('.service-card, .grid.md\\:grid-cols-3 > div', 150);

// Apply stagger to stats and problem items
addStaggerAnimation('#about .grid-cols-2 > div', 100);
addStaggerAnimation('.problem-item', 100);

// ===== COUNTER ANIMATION FOR STATS =====
function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            clearInterval(timer);
            current = target;
        }
        element.textContent = Math.floor(current);
    }, 16);
}

// Observe stats section for counter animation
const statsSection = document.getElementById('about');
if (statsSection) {
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = statsSection.querySelectorAll('.text-3xl.font-bold.text-blue-400');
                statNumbers.forEach(stat => {
                    const text = stat.textContent;
                    const number = parseInt(text.replace(/\D/g, ''));
                    if (!isNaN(number) && number > 0) {
                        const suffix = text.replace(/[0-9]/g, '');
                        animateCounter(stat, number, 1500);
                        stat.dataset.suffix = suffix;
                    }
                });
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    statsObserver.observe(statsSection);
}

// ===== SMOOTH PARALLAX EFFECT =====
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;

    // Hero parallax
    const hero = document.getElementById('hero');
    if (hero) {
        const heroImage = hero.querySelector('.lg\\:w-1\\/2.relative');
        if (heroImage && scrolled < window.innerHeight) {
            heroImage.style.transform = `translateY(${scrolled * 0.1}px)`;
        }
    }

    // Hero section background accents (for sistemasi-bisnis page)
    const heroSection = document.querySelector('section.bg-slate-900');
    if (heroSection && scrolled < window.innerHeight) {
        const bgAccents = heroSection.querySelectorAll('.blur-3xl');
        bgAccents.forEach((accent, i) => {
            accent.style.transform = `translateY(${scrolled * (0.1 + i * 0.05)}px)`;
        });
    }
});

// ===== MAGNETIC BUTTON EFFECT =====
document.querySelectorAll('.btn-ripple').forEach(button => {
    button.addEventListener('mousemove', (e) => {
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
    });

    button.addEventListener('mouseleave', () => {
        button.style.transform = 'translate(0, 0)';
    });
});

// ===== FORM INPUT ANIMATION =====
document.querySelectorAll('input, select, textarea').forEach(input => {
    input.classList.add('input-animate');
});

// 3D tilt effect removed per user request
