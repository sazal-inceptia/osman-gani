import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

/* ===================================================================
   OSMAN GANI - JAVASCRIPT & GSAP SCROLL CONTROLLER
   Replicated exactly from reference architecture (http://127.0.0.1:8001/)
   =================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    initHeroAnimations();
    initGsapScrollAnimations();
    initStickyHeader();
    initScrollProgressBar();
    initAmbientOrbs();
});

// Refresh ScrollTrigger when all assets/images are fully loaded
window.addEventListener('load', () => {
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
    }
});

/* ---------------- 1. Hero Entrance Animations ---------------- */
function initHeroAnimations() {
    const heroSec = document.querySelector('.hero-section');
    if (!heroSec) return;

    // Left column items stagger entrance on load
    const heroLeft = heroSec.querySelector('.hero-left-content');
    if (heroLeft && heroLeft.children.length) {
        gsap.fromTo(
            Array.from(heroLeft.children),
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.12,
                ease: 'power3.out',
            }
        );
    }

    // Right column video frame entrance on load
    const heroRight = heroSec.querySelector('.hero-right-media');
    if (heroRight) {
        gsap.fromTo(
            heroRight,
            { opacity: 0, scale: 0.92, y: 40 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 0.9,
                delay: 0.2,
                ease: 'power3.out',
            }
        );
    }
}

/* ---------------- 2. GSAP ScrollTrigger Animations (Continuous / Every Scroll) ---------------- */
function initGsapScrollAnimations() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded');
        return;
    }

    // A. Section Headers (Fade and slide up on every scroll)
    const sectionHeaders = document.querySelectorAll('.section-header');
    sectionHeaders.forEach((header) => {
        gsap.fromTo(
            header,
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: header,
                    start: 'top 88%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    });

    // B. Stats Section (Smooth Hardware-Accelerated Scroll Trigger)
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        gsap.fromTo(
            '.stat-card, .stat-box, .stat-item',
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: statsSection,
                    start: 'top 85%',
                    once: true,
                    onEnter: runStatsCounters,
                },
            }
        );
    }

    // C. 5 Pillars Section ("Here's How Osman Can Help You & Your Team")
    const pillarsSection = document.querySelector('.pillars-section');
    if (pillarsSection && document.querySelectorAll('.pillar-card').length) {
        gsap.fromTo(
            '.pillar-card',
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: pillarsSection,
                    start: 'top 88%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // D. Featured In / Media & Press Marquee Section
    const mediaSection = document.querySelector('.media-press-section');
    if (mediaSection) {
        gsap.fromTo(
            mediaSection,
            { y: 30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: mediaSection,
                    start: 'top 92%',
                    end: 'bottom 10%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // E. Bestselling Books Grid Cards
    const booksSection = document.querySelector('.books-section');
    if (booksSection && document.querySelectorAll('.book-card-3d').length) {
        gsap.fromTo(
            '.book-card-3d',
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: booksSection,
                    start: 'top 85%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // F. Praise & Testimonials Grid
    const testimonialsSection = document.querySelector('.testimonials-section');
    if (testimonialsSection && document.querySelectorAll('.testimonial-card-dark').length) {
        gsap.fromTo(
            '.testimonial-card-dark',
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                stagger: 0.15,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: testimonialsSection,
                    start: 'top 85%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // G. Latest Courses Grid Cards
    const coursesSection = document.querySelector('.courses-section');
    if (coursesSection && document.querySelectorAll('.course-card').length) {
        gsap.fromTo(
            '.course-card',
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.7,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: coursesSection,
                    start: 'top 85%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // H. Newsletter / Lead Magnet CTA Section
    const newsletterSection = document.querySelector('.newsletter-section');
    if (newsletterSection) {
        gsap.fromTo(
            '.newsletter-content',
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: newsletterSection,
                    start: 'top 85%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    }

    // I. Subpage Glass Cards (Books, Courses, Events, Speaking, Life Mission, Free Tools/Videos)
    const glassCards = document.querySelectorAll('.glass-card');
    if (glassCards.length) {
        const processedContainers = new Set();
        glassCards.forEach((card) => {
            const container = card.closest('section, main, .grid') || card.parentElement;
            if (container && !processedContainers.has(container)) {
                processedContainers.add(container);
                const cardsInContainer = container.querySelectorAll('.glass-card');
                gsap.fromTo(
                    cardsInContainer,
                    { y: 40, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        duration: 0.7,
                        stagger: 0.12,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: container,
                            start: 'top 85%',
                            end: 'bottom 15%',
                            toggleActions: 'play reverse play reverse',
                        },
                    }
                );
            }
        });
    }
}

/* ---------------- 3. Stats Counter (GSAP Tweened, 60fps silky smooth) ---------------- */
function runStatsCounters() {
    const counters = document.querySelectorAll('.stat-number');
    if (!counters.length) return;

    counters.forEach((counter) => {
        if (counter.dataset.hasAnimated === 'true') return;
        counter.dataset.hasAnimated = 'true';

        const target = +counter.getAttribute('data-target') || 0;
        const suffix = counter.getAttribute('data-suffix') || '';
        const isComma = counter.getAttribute('data-comma') === 'true';
        const isB = counter.getAttribute('data-b') === 'true';

        const countObj = { val: 0 };
        gsap.to(countObj, {
            val: target,
            duration: 1.8,
            ease: 'power2.out',
            onUpdate: () => {
                if (isB) {
                    counter.innerText = Math.round(countObj.val) + suffix;
                } else if (isComma) {
                    counter.innerText = Math.round(countObj.val).toLocaleString() + suffix;
                } else {
                    counter.innerText = Math.round(countObj.val) + suffix;
                }
            },
            onComplete: () => {
                if (isComma) {
                    counter.innerText = target.toLocaleString() + suffix;
                } else {
                    counter.innerText = target + suffix;
                }
            },
        });
    });
}

/* ---------------- 4. Sticky Header Elevation ---------------- */
function initStickyHeader() {
    const header = document.querySelector('header.sticky');
    if (!header) return;

    ScrollTrigger.create({
        start: 'top -40',
        onUpdate: (self) => {
            if (self.progress > 0) {
                header.classList.add('shadow-2xl', 'backdrop-blur-md', 'bg-black/95');
                header.classList.remove('bg-[#000000]');
            } else {
                header.classList.remove('shadow-2xl', 'backdrop-blur-md', 'bg-black/95');
                header.classList.add('bg-[#000000]');
            }
        },
    });
}

/* ---------------- 5. Global Scroll Progress Bar ---------------- */
function initScrollProgressBar() {
    let progressBar = document.getElementById('scroll-progress-bar');
    if (!progressBar) {
        progressBar = document.createElement('div');
        progressBar.id = 'scroll-progress-bar';
        document.body.prepend(progressBar);
    }

    ScrollTrigger.create({
        start: 'top top',
        end: 'bottom bottom',
        onUpdate: (self) => {
            progressBar.style.width = `${Math.min(100, Math.max(0, self.progress * 100)).toFixed(2)}%`;
        },
    });
}

/* ---------------- 6. Ambient Floating Glowing Orbs ---------------- */
function initAmbientOrbs() {
    const glowOrbs = document.querySelectorAll(
        '.bg-\\[\\#df3243\\]\\/15, .bg-\\[\\#ff8421\\]\\/10, .bg-\\[\\#df3243\\]\\/20'
    );

    glowOrbs.forEach((orb, index) => {
        gsap.to(orb, {
            y: index % 2 === 0 ? -20 : 18,
            x: index % 2 === 0 ? 12 : -12,
            duration: 6 + index * 1.5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
        });
    });
}
