import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

/* ===================================================================
   OSMAN GANI - JAVASCRIPT & GSAP SCROLL CONTROLLER
   Full-site Animation Engine (Homepage & All Subpages)
   =================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    initHeroAnimations();
    initGsapScrollAnimations();
    initStickyHeader();
    initScrollProgressBar();
});

// Refresh ScrollTrigger when all assets/images are fully loaded
window.addEventListener('load', () => {
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
    }
});

/* ---------------- 1. Hero Entrance Animations (Homepage & All Subpages) ---------------- */
function initHeroAnimations() {
    // A. Homepage Hero Section
    const homeHero = document.querySelector('.hero-section');
    if (homeHero) {
        const heroLeft = homeHero.querySelector('.hero-left-content');
        if (heroLeft && heroLeft.children.length) {
            gsap.fromTo(
                Array.from(heroLeft.children),
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.85,
                    stagger: 0.12,
                    ease: 'power3.out',
                }
            );
        }

        const heroRight = homeHero.querySelector('.hero-right-media');
        if (heroRight) {
            gsap.fromTo(
                heroRight,
                { opacity: 0, scale: 0.92, y: 40 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.95,
                    delay: 0.2,
                    ease: 'power3.out',
                }
            );
        }
    }

    // B. Subpage Hero Banners (Books, Courses, Events, Speaking, About, Contact, Blog, etc.)
    const subpageHero = document.querySelector(
        'main > section:first-of-type, body > section:first-of-type, .subpage-hero, .hero-banner'
    );

    if (subpageHero && !subpageHero.classList.contains('hero-section')) {
        const container =
            subpageHero.querySelector('.max-w-5xl, .max-w-6xl, .max-w-7xl, .max-w-4xl, .hero-content') ||
            subpageHero.firstElementChild;

        if (container && container.children.length) {
            // Animate breadcrumbs, badge, heading, description, buttons
            gsap.fromTo(
                Array.from(container.children),
                { opacity: 0, y: 28 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: 'power3.out',
                }
            );
        }
    }
}

/* ---------------- 2. GSAP ScrollTrigger Animations (Continuous / Every Scroll) ---------------- */
function initGsapScrollAnimations() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded');
        return;
    }

    // A. Section Headers (Fade and slide up on every scroll)
    const sectionHeaders = document.querySelectorAll(
        '.section-header, .subpage-section-header, [data-section-header]'
    );
    sectionHeaders.forEach((header) => {
        gsap.fromTo(
            header,
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.75,
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

    // B. Stats Sections & Metric Counters
    const statsSections = document.querySelectorAll(
        '.stats-section, .quick-stats-banner, [data-stats-section]'
    );
    statsSections.forEach((section) => {
        const statItems = section.querySelectorAll(
            '.stat-card, .stat-box, .stat-item, .grid > div'
        );
        if (statItems.length) {
            gsap.fromTo(
                statItems,
                { y: 35, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 85%',
                        once: true,
                        onEnter: () => runStatsCounters(section),
                    },
                }
            );
        }
    });

    // C. Card Grids & Interactive Lists across All Pages
    const cardSelectors = [
        '.pillar-card',
        '.book-card-3d',
        '.book-catalog-card',
        '.testimonial-card-dark',
        '.testimonial-card',
        '.course-card',
        '.event-card',
        '.speaking-card',
        '.speaking-format-card',
        '.topic-card',
        '.glass-card',
        '.reveal-card',
        '.article-card',
        'article',
        '.gallery-item',
        '.gallery-card',
        '.media-card',
        '.tool-card',
        '.ebook-card',
        '.video-card-item',
        '.contact-method-card'
    ].join(', ');

    const containers = new Set();
    document.querySelectorAll(cardSelectors).forEach((card) => {
        const parent =
            card.closest('.grid, .space-y-12, .space-y-8, .space-y-10, .testimonials-grid, .courses-grid, .books-grid, .pillars-grid') ||
            card.parentElement;
        if (parent) {
            containers.add(parent);
        }
    });

    containers.forEach((container) => {
        // Collect matching direct child or immediate cards in this container
        const cards = Array.from(container.querySelectorAll(cardSelectors)).filter((c) => {
            const nearestContainer = c.closest(
                '.grid, .space-y-12, .space-y-8, .space-y-10, .testimonials-grid, .courses-grid, .books-grid, .pillars-grid'
            ) || c.parentElement;
            return nearestContainer === container;
        });

        if (cards.length) {
            gsap.fromTo(
                cards,
                { y: 45, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.75,
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

    // D. Timeline Journey Animations (Life Mission & Osman Gani Bio)
    const timelineSteps = document.querySelectorAll(
        '#timeline-journey .space-y-12 > div, #timeline-journey .grid, .timeline-steps > div'
    );
    if (timelineSteps.length) {
        timelineSteps.forEach((step) => {
            gsap.fromTo(
                step,
                { y: 40, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.75,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: step,
                        start: 'top 85%',
                        end: 'bottom 15%',
                        toggleActions: 'play reverse play reverse',
                    },
                }
            );
        });
    }

    // E. Featured In / Media & Press Marquee Section
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

    // F. Standalone Large Feature Blocks & Forms
    const featuredBlocks = document.querySelectorAll(
        '.newsletter-content, #booking-form, #contact-form, #lead-form, .story-narrative-box, .reveal-block'
    );
    featuredBlocks.forEach((block) => {
        gsap.fromTo(
            block,
            { y: 35, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: block,
                    start: 'top 85%',
                    end: 'bottom 15%',
                    toggleActions: 'play reverse play reverse',
                },
            }
        );
    });
}

/* ---------------- 3. Stats Counter (GSAP Tweened, 60fps silky smooth) ---------------- */
function runStatsCounters(scope = document) {
    const counters = scope.querySelectorAll('.stat-number');
    if (!counters.length) return;

    counters.forEach((counter) => {
        if (counter.dataset.hasAnimated === 'true') return;
        counter.dataset.hasAnimated = 'true';

        const target = parseFloat(counter.getAttribute('data-target')) || 0;
        const suffix = counter.getAttribute('data-suffix') || '';
        const prefix = counter.getAttribute('data-prefix') || '';
        const isComma = counter.getAttribute('data-comma') === 'true';
        const isB = counter.getAttribute('data-b') === 'true';
        const isDecimal = String(target).includes('.');

        const countObj = { val: 0 };
        gsap.to(countObj, {
            val: target,
            duration: 1.8,
            ease: 'power2.out',
            onUpdate: () => {
                let formatted;
                if (isDecimal) {
                    formatted = countObj.val.toFixed(1);
                } else if (isB) {
                    formatted = Math.round(countObj.val);
                } else if (isComma) {
                    formatted = Math.round(countObj.val).toLocaleString();
                } else {
                    formatted = Math.round(countObj.val);
                }
                counter.innerText = prefix + formatted + suffix;
            },
            onComplete: () => {
                let finalVal;
                if (isDecimal) {
                    finalVal = target.toFixed(1);
                } else if (isComma) {
                    finalVal = target.toLocaleString();
                } else {
                    finalVal = target;
                }
                counter.innerText = prefix + finalVal + suffix;
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
                header.classList.add('shadow-2xl', 'backdrop-blur-md', 'bg-[#0c0d12]/95');
            } else {
                header.classList.remove('shadow-2xl', 'backdrop-blur-md', 'bg-[#0c0d12]/95');
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
