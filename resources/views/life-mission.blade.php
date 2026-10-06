<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Life Mission &amp; Journey | Osman Gani - Author, Speaker &amp; Business Coach</title>
    
    <!-- Meta SEO Tags -->
    <meta name="description" content="Discover Osman Gani's inspiring life journey, humble beginnings, corporate rise, and lifelong mission to empower millions to achieve greatness.">
    <meta name="keywords" content="Osman Gani Life Mission, Life Journey, Motivational Speaker Bangladesh, Business Coach, Author Osman Gani">
    <meta name="author" content="Osman Gani">
    
    <!-- Favicon & Brand Icons -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🔥</text></svg>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-oswald { font-family: 'Oswald', sans-serif; }
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .font-ubuntu { font-family: 'Ubuntu', sans-serif; }

        .dropdown-menu-custom {
            visibility: hidden;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .group:hover .dropdown-menu-custom {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .social-icon-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        .social-icon-btn:hover {
            transform: scale(1.15);
            opacity: 0.95;
        }

        /* Ambient glowing gradient cards */
        .glass-card {
            background: rgba(18, 22, 32, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            border-color: rgba(223, 50, 67, 0.4);
            transform: translateY(-4px);
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body class="bg-[#050608] text-gray-200 font-ubuntu antialiased selection:bg-[#df3243] selection:text-white">

    <!-- ======================================================== -->
    <!-- 1. TOP ANNOUNCEMENT / UTILITY BAR -->
    <!-- ======================================================== -->
    <div class="bg-[#000000] border-b border-gray-800 text-white text-xs font-montserrat">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2.5 flex flex-col md:flex-row items-center justify-between gap-3">
            
            <!-- Direct Contact & Social Links -->
            <div class="flex items-center gap-4">
                <a href="tel:+8801700000000" class="inline-flex items-center gap-1.5 font-medium hover:text-[#df3243] transition">
                    <i class="fa-solid fa-phone text-[#df3243]"></i>
                    <span>+880 1700-000000</span>
                </a>
                <span class="text-gray-600 hidden sm:inline">|</span>
                <a href="mailto:support@osmangani.com" class="inline-flex items-center gap-1.5 font-medium hover:text-[#df3243] transition">
                    <i class="fa-solid fa-envelope text-[#df3243]"></i>
                    <span class="hidden sm:inline">support@osmangani.com</span>
                </a>
                
                <div class="flex items-center gap-2 pl-2">
                    <a href="https://facebook.com" target="_blank" class="social-icon-btn bg-[#3b5998]" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://instagram.com" target="_blank" class="social-icon-btn bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://youtube.com" target="_blank" class="social-icon-btn bg-[#c4302b]" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://whatsapp.com" target="_blank" class="social-icon-btn bg-[#25d366]" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Highlights / Notification Banner -->
            <div class="text-center md:text-left flex items-center gap-2">
                <span class="bg-[#df3243] text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider animate-pulse">Life Mission</span>
                <span class="font-semibold text-gray-200">
                    "Inspiring &amp; Empowering 10 Million Lives Worldwide"
                </span>
            </div>

            <!-- Login / Support Link -->
            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-1 text-gray-300 hover:text-white border border-gray-700 hover:border-[#df3243] px-3 py-1 rounded-md text-xs transition">
                    <i class="fa-solid fa-headset text-[10px]"></i>
                    <span>Contact Support</span>
                    <i class="fa-solid fa-chevron-right text-[9px] text-[#df3243]"></i>
                </a>
            </div>
        </div>
    </div>


    <!-- ======================================================== -->
    <!-- 2. STICKY MAIN HEADER & NAVIGATION -->
    <!-- ======================================================== -->
    <header class="sticky top-0 z-50 bg-[#000000] border-b-2 border-[#df3243] shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Signature Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-[#df3243] to-[#800d18] flex items-center justify-center text-white shadow-lg shadow-red-950/60 font-oswald text-2xl font-bold border border-red-400/30 group-hover:scale-105 transition duration-300">
                        OG
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-oswald text-2xl tracking-wider font-bold group-hover:text-[#df3243] transition">
                            OSMAN GANI
                        </span>
                        <span class="text-[10px] uppercase font-semibold text-gray-400 tracking-[0.2em] -mt-1">
                            Author • Speaker • Coach
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-1 font-montserrat text-[13px] font-bold tracking-wider">
                    
                    <!-- ABOUT Dropdown (Active) -->
                    <div class="relative group">
                        <button class="text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>ABOUT</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-[#df3243] group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-56 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('about.osman-gani') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">OSMAN GANI</a>
                            <a href="{{ route('about.media-events') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">MEDIA &amp; EVENTS</a>
                            <a href="{{ route('about.life-mission') }}" class="block px-4 py-2.5 text-xs font-semibold text-[#df3243] bg-red-50/80 transition">LIFE MISSION</a>
                        </div>
                    </div>

                    <a href="{{ route('books') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition">BOOKS</a>
                    <a href="{{ route('speaking') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition">SPEAKING</a>

                    <!-- COURSES Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>COURSES</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-72 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('courses') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">ALL MASTER COURSES</a>
                            <a href="{{ route('courses') }}#course-ai" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">AI MASTERY PROGRAM</a>
                            <a href="{{ route('courses') }}#course-sm" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">SOCIAL MEDIA &amp; BUSINESS</a>
                            <a href="{{ route('courses') }}#course-time" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">TIME &amp; PRODUCTIVITY MASTERY</a>
                        </div>
                    </div>

                    <!-- EVENTS Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>EVENTS</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-72 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('events') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">ALL UPCOMING EVENTS</a>
                            <a href="{{ route('events') }}#trainer-bootcamp" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">TRAIN THE TRAINER BOOTCAMP</a>
                            <a href="{{ route('events') }}#unleash-champion" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">UNLEASH THE CHAMPION IN YOU</a>
                            <a href="{{ route('events') }}#public-speaking" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">PUBLIC SPEAKING &amp; INFLUENCE</a>
                        </div>
                    </div>

                    <!-- RESOURCES Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>RESOURCES</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-60 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('resources.free-videos') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">FREE VIDEO LIBRARY</a>
                            <a href="{{ route('resources.ebooks') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">FREE E-BOOKS &amp; GUIDES</a>
                            <a href="{{ route('resources.tools') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">PRODUCTIVITY TOOLS</a>
                            <a href="{{ route('resources.blog') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">ARTICLES &amp; BLOG</a>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition">CONTACT</a>
                </nav>

                <!-- Action Button & Mobile Toggle -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('speaking') }}" class="hidden sm:inline-flex btn-pill-filled-red text-sm tracking-normal">
                        <span>Book Keynote</span>
                        <i class="fa-solid fa-arrow-right-long text-xs"></i>
                    </a>

                    <!-- Mobile Hamburger Button -->
                    <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 rounded-lg text-white hover:text-[#df3243] hover:bg-white/10 focus:outline-none" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-[#090b10] border-t border-gray-800 px-5 py-6 space-y-4">
            <div class="flex flex-col space-y-3 font-montserrat text-sm font-semibold text-gray-200">
                <a href="{{ route('about.osman-gani') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">ABOUT OSMAN GANI</a>
                <a href="{{ route('about.media-events') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">MEDIA &amp; EVENTS</a>
                <a href="{{ route('about.life-mission') }}" class="text-[#df3243] py-1 border-b border-gray-800/60">LIFE MISSION</a>
                <a href="{{ route('books') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">BOOKS</a>
                <a href="{{ route('speaking') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">SPEAKING</a>
                <a href="{{ route('courses') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">COURSES</a>
                <a href="{{ route('events') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">EVENTS</a>
                <a href="{{ route('resources.free-videos') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">FREE RESOURCES</a>
                <a href="{{ route('contact') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">CONTACT US</a>
            </div>
            <div class="pt-4 flex flex-col gap-3">
                <a href="{{ route('speaking') }}" class="btn-pill-filled-red text-center justify-center w-full">Book Keynote Session</a>
                <a href="tel:+8801700000000" class="btn-pill-white text-center justify-center w-full text-sm">
                    <i class="fa-solid fa-phone"></i> +880 1700-000000
                </a>
            </div>
        </div>
    </header>


    <!-- ======================================================== -->
    <!-- 3. HERO PHILOSOPHY BANNER (Deepak Bajaj Style Quote Header) -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#10141d] to-[#050608] text-white overflow-hidden py-20 sm:py-28 border-b border-gray-800">
        <!-- Ambient Atmospheric Lights -->
        <div class="absolute top-0 right-1/4 w-[600px] h-[350px] bg-[#df3243]/15 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-10 w-[450px] h-[350px] bg-[#ff8421]/10 rounded-full blur-[120px] pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-8">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-gray-400">About</span>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Life Mission</span>
            </div>

            <!-- Quote Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider mb-6">
                <i class="fa-solid fa-quote-left text-sm"></i>
                <span>Guiding Life Philosophy</span>
            </div>

            <!-- Inspiring Main Quote Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight sm:leading-none text-white max-w-5xl mx-auto drop-shadow-lg">
                "This Life Is God’s Gift To Us &amp; <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    What We Do With This Life
                </span> 
                Is Our Gift To God."
            </h1>

            <p class="font-oswald text-xl sm:text-2xl text-gray-300 font-normal uppercase tracking-wider mt-6 max-w-3xl mx-auto">
                So Let’s Do The Best We Can, With The Best We Have &amp; <span class="text-[#ff8421] font-semibold">Keep Shining.</span>
            </p>

            <div class="mt-8 flex justify-center">
                <div class="w-24 h-1.5 bg-gradient-to-r from-transparent via-[#df3243] to-transparent rounded-full"></div>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 4. LIFE SUMMARY INTRODUCTION -->
    <!-- ======================================================== -->
    <section class="py-16 sm:py-20 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Portrait / Visual Brand Box -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden border-2 border-red-900/40 shadow-2xl bg-gradient-to-br from-[#131620] to-[#0a0c12] p-2 group">
                        <div class="aspect-[4/5] rounded-2xl overflow-hidden relative bg-gradient-to-t from-black via-zinc-900 to-zinc-800 flex items-center justify-center">
                            <!-- High Energy Speaker Silhouette / Illustration -->
                            <div class="w-full h-full flex flex-col items-center justify-center text-center p-8 bg-gradient-to-b from-[#1a0507]/40 via-black to-[#0a0c12]">
                                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-[#df3243] to-[#800d18] flex items-center justify-center shadow-2xl shadow-red-900/60 border-4 border-white/20 mb-6 group-hover:scale-105 transition duration-500">
                                    <span class="font-oswald text-6xl font-bold text-white tracking-tighter">OG</span>
                                </div>
                                <h3 class="font-oswald text-3xl font-bold text-white tracking-wide uppercase">OSMAN GANI</h3>
                                <p class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest mt-1">Author • Speaker • Life Coach</p>
                                <div class="mt-6 flex flex-wrap justify-center gap-2">
                                    <span class="px-3 py-1 bg-white/10 rounded-full text-[11px] font-semibold text-gray-300">5 Bestselling Books</span>
                                    <span class="px-3 py-1 bg-white/10 rounded-full text-[11px] font-semibold text-gray-300">2.1M+ Lives Touched</span>
                                </div>
                            </div>
                        </div>

                        <!-- Badge on bottom -->
                        <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 whitespace-nowrap bg-gradient-to-r from-[#df3243] to-[#b81b2b] text-white px-6 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider shadow-lg border border-red-400/30">
                            ★ LIVING WITH ONE SINGLE MISSION ★
                        </div>
                    </div>
                </div>

                <!-- Right: Story Narrative -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="border-l-4 border-[#df3243] pl-6 py-1">
                        <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-1">
                            An Authentic Journey
                        </span>
                        <h2 class="font-oswald text-3xl sm:text-4xl text-white font-bold uppercase tracking-wide leading-tight">
                            A Simple Story Fueled By Relentless Determination
                        </h2>
                    </div>

                    <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed">
                        I have a very simple and straightforward life story. Born and raised in humble circumstances, navigated through unexpected challenges early in life, and whole-heartedly faced every hurdle life threw at me.
                    </p>

                    <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                        Through dedication and self-discipline, I completed my higher management education and spent years in high-performing corporate leadership positions with multinational organizations. But deep inside, a persistent calling told me there was a greater purpose waiting.
                    </p>

                    <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                        In 2007, I took the monumental leap into entrepreneurship. What started with uncertainty evolved into authoring <strong class="text-white">bestselling transformational books</strong>, producing content viewed over <strong class="text-white">200 Million times</strong>, and conducting high-voltage workshops for over <strong class="text-white">2.1 Million people</strong> across 50+ nations.
                    </p>

                    <div class="pt-4 flex flex-wrap items-center gap-4">
                        <a href="#timeline-journey" class="btn-pill-filled-red text-sm">
                            <span>Explore Life Journey</span>
                            <i class="fa-solid fa-arrow-down-long text-xs"></i>
                        </a>
                        <a href="{{ route('home') }}#speaking" class="btn-pill-white text-sm">
                            <span>Invite Osman To Speak</span>
                            <i class="fa-solid fa-microphone text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 5. CHRONOLOGICAL LIFE JOURNEY & TIMELINE -->
    <!-- ======================================================== -->
    <section id="timeline-journey" class="py-20 sm:py-28 bg-[#090b10] border-b border-gray-800 relative">
        <!-- Ambient Top Right Glow -->
        <div class="absolute top-1/3 left-0 w-[500px] h-[400px] bg-[#df3243]/10 rounded-full blur-[150px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24">
                <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Chronicles Of Transformation
                </span>
                <h2 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">
                    Life Journey &amp; Mission
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto mt-4 mb-4"></div>
                <p class="text-gray-400 font-ubuntu text-sm sm:text-base">
                    Every milestone, challenge, and breakthrough that shaped the philosophies and systems Osman Gani teaches worldwide today.
                </p>
            </div>

            <!-- Timeline Alternating / Two-Sided Cards -->
            <div class="space-y-12 sm:space-y-16">

                <!-- STEP 1: CHILDHOOD -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#4cadad] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-teal-100 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 01</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">CHILDHOOD</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-seedling"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#4cadad]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Born into a modest, humble family in a quiet rural township. Raised by hard-working parents who instilled sacred values of honesty, persistence, and service to humanity.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            When tragedy struck and the family anchor passed away early, life became a severe test of survival. Navigating through acute financial hardship taught an unforgettable lesson: <span class="text-white font-semibold">adversity is not a life sentence, but the forge where inner champions are built.</span>
                        </p>
                    </div>
                </div>

                <!-- STEP 2: TEENAGE & EARLY RESILIENCE -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#41516c] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-slate-200 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 02</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">TEENAGE YEARS</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#41516c]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Relocating to a new city to support family responsibilities while completing schooling. Balancing domestic duties alongside academic rigor built supreme discipline.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Learning early on to manage time, solve practical problems without excuses, and cultivate an unshakeable belief that personal willpower can overcome any starting handicap.
                        </p>
                    </div>
                </div>

                <!-- STEP 3: HIGHER EDUCATION & CORPORATE LEADERSHIP -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#e24a68] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-rose-100 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 03</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">CORPORATE MASTERY</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#e24a68]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Entered premier management studies facing massive language hurdles, public speaking phobias, and computer skill gaps. Refused to surrender; practiced relentlessly every single night.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Secured a top corporate posting with a prominent multinational corporation. By delivering 100% of expectations plus something extra every single day, rose to become one of the <span class="text-white font-semibold">youngest Area Business Managers</span> in the organization's history at just 25 years old.
                        </p>
                    </div>
                </div>

                <!-- STEP 4: MY OWN TRAINING & LIFELONG STUDENT -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#fbca3e] text-black rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-yellow-900 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 04</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide text-zinc-900">PERSONAL GROWTH</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-black/10 flex items-center justify-center text-xl shrink-0 text-black">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#fbca3e]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Reading hundreds of books on human psychology, leadership, wealth creation, and high-performance strategy. Never missing an opportunity to invest in top-tier global mentors.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Consistently attending elite international training programs to sharpen tools and master cutting-edge methodologies, ensuring that students always receive world-class knowledge.
                        </p>
                    </div>
                </div>

                <!-- STEP 5: ENTREPRENEURSHIP & RISK-TAKING -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#a2267e] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-fuchsia-200 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 05</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">ENTREPRENEURSHIP</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#a2267e]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Took the daring decision to resign from lucrative corporate security to build scalable business ventures from scratch with complete faith in the vision.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Enduring early financial strain, surviving through uncertainty, and eventually building high-performance sales distribution networks numbering tens of thousands of active entrepreneurs.
                        </p>
                    </div>
                </div>

                <!-- STEP 6: AUTHOR & CONTENT CREATOR -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#1b5f8c] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-sky-200 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 06</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">AUTHOR &amp; CREATOR</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-feather-pointed"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#1b5f8c]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            Realized that all human beings carry seeds of greatness inside them; they simply require the right spark, guidance, and nourishment to unleash it.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Authored foundational bestsellers that quickly went viral across multiple editions, published in <span class="text-white font-semibold">9 different languages</span> with widespread critical acclaim from corporate titans and industry leaders.
                        </p>
                    </div>
                </div>

                <!-- STEP 7: MOTIVATIONAL SPEAKER & ONLINE EDUCATOR -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-[#df3243] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-red-200 text-xs font-montserrat font-bold tracking-widest uppercase block">Chapter 07</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">GLOBAL EDUCATOR</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-bullhorn"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 glass-card rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#df3243]">
                        <p class="text-gray-300 font-ubuntu text-base sm:text-lg leading-relaxed mb-3">
                            What started as a modest calling has transformed into an international education powerhouse, impacting over <span class="text-white font-semibold">2.1 Million lives</span> worldwide.
                        </p>
                        <p class="text-gray-400 font-ubuntu text-sm sm:text-base leading-relaxed">
                            Organizing mega-capacity stadium conventions, corporate leadership retreats, and comprehensive digital academies that empower professionals to scale their careers and businesses.
                        </p>
                    </div>
                </div>

                <!-- STEP 8: THE GRAND LIFE MISSION -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8 items-stretch">
                    <!-- Left Capsule Header Badge -->
                    <div class="md:col-span-4 flex flex-col justify-center">
                        <div class="bg-gradient-to-br from-[#df3243] via-[#ff6b6b] to-[#ff8421] rounded-2xl md:rounded-r-none md:rounded-l-3xl p-6 sm:p-8 text-white shadow-2xl flex items-center justify-between md:justify-start gap-4 h-full">
                            <div>
                                <span class="text-white text-xs font-montserrat font-bold tracking-widest uppercase block">Ultimate Vision</span>
                                <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide">LIFE MISSION</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-black/20 flex items-center justify-center text-xl shrink-0">
                                <i class="fa-solid fa-flag-checkered"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Right Detail Description -->
                    <div class="md:col-span-8 bg-gradient-to-r from-red-950/40 via-zinc-900 to-black rounded-2xl md:rounded-l-none md:rounded-r-3xl p-6 sm:p-8 border-l-4 border-[#ff8421] shadow-2xl">
                        <p class="text-white font-oswald text-xl sm:text-2xl font-bold tracking-wide uppercase leading-snug mb-3">
                            "Living With One Single Mission — To Inspire &amp; Empower People To Be The Best They Can Be."
                        </p>
                        <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                            To continue engineering cutting-edge frameworks, practical actionable tools, and transformational environments so that extraordinary success is faster, easier, and accessible to everyone.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 6. HOW OSMAN CAN HELP YOU & YOUR TEAM (5 Core Pillars) -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Solutions &amp; Offerings
                </span>
                <h2 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">
                    Here’s How Osman Can Help You &amp; Your Team
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto mt-4 mb-4"></div>
                <p class="text-gray-400 font-ubuntu text-sm sm:text-base">
                    Comprehensive avenues engineered to deliver tangible breakthroughs for individuals, sales teams, and corporate organizations.
                </p>
            </div>

            <!-- 5 Columns / Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

                <!-- Card 1: Books -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-red-950/60 border border-red-500/30 text-[#df3243] flex items-center justify-center text-2xl mx-auto group-hover:bg-[#df3243] group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-book"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase tracking-wider">Books</h3>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            5 Bestselling books in 9 languages for Total Life &amp; Business Transformation.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#books" class="w-full btn-pill-white text-xs justify-center py-2.5">
                            Order Now
                        </a>
                    </div>
                </div>

                <!-- Card 2: Speaking -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between text-center group border-red-500/40 shadow-red-950/40">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-[#df3243] text-white flex items-center justify-center text-2xl mx-auto shadow-lg shadow-red-900/50 transition duration-300">
                            <i class="fa-solid fa-microphone-lines"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase tracking-wider">Speaking</h3>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            Invite Osman to your next keynote summit to empower your team for massive results.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#speaking" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            Book Keynote
                        </a>
                    </div>
                </div>

                <!-- Card 3: Courses -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-red-950/60 border border-red-500/30 text-[#df3243] flex items-center justify-center text-2xl mx-auto group-hover:bg-[#df3243] group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase tracking-wider">Courses</h3>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            Learn anytime, anywhere on your mobile from results-oriented digital masterclasses.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#courses" class="w-full btn-pill-white text-xs justify-center py-2.5">
                            Browse Courses
                        </a>
                    </div>
                </div>

                <!-- Card 4: Events -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-red-950/60 border border-red-500/30 text-[#df3243] flex items-center justify-center text-2xl mx-auto group-hover:bg-[#df3243] group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-users-rays"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase tracking-wider">Events</h3>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            Attend Osman’s live stadium conventions for instant change &amp; lasting empowerment.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('about.media-events') }}" class="w-full btn-pill-white text-xs justify-center py-2.5">
                            Upcoming Events
                        </a>
                    </div>
                </div>

                <!-- Card 5: Free Resources -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-16 h-16 rounded-2xl bg-red-950/60 border border-red-500/30 text-[#df3243] flex items-center justify-center text-2xl mx-auto group-hover:bg-[#df3243] group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase tracking-wider">Free Videos</h3>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            1,000+ Free videos for instant actionable tips in life, leadership, and sales mastery.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#resources" class="w-full btn-pill-white text-xs justify-center py-2.5">
                            Latest Videos
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 7. MISSION MANIFESTO CALL TO ACTION -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-24 bg-gradient-to-r from-[#120306] via-[#1f060a] to-[#0a0c14] border-b border-gray-800 relative overflow-hidden text-center">
        <!-- Ambient Radial Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(223,50,67,0.15)_0,transparent_70%)] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-8">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-900/40 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-heart-pulse"></i>
                Join The Movement
            </span>

            <h2 class="font-oswald text-3xl sm:text-5xl font-bold text-white uppercase tracking-wide leading-tight">
                Are You Ready To Step Into Your Highest Potential?
            </h2>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Whether you wish to transform your sales organization, empower your corporate executives, or attend our life-changing masterclasses, your breakthrough starts today.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="{{ route('home') }}#speaking" class="btn-pill-filled-red text-base px-8 py-3">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Book Keynote Engagement</span>
                </a>
                <a href="tel:+8801700000000" class="btn-pill-white text-base px-8 py-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>Contact Mission Office</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 8. FOOTER -->
    <!-- ======================================================== -->
    <footer class="bg-[#000000] text-gray-400 text-sm border-t-2 border-[#df3243] pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                
                <!-- Col 1: Brand & Bio -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#df3243] flex items-center justify-center text-white font-oswald text-xl font-bold">
                            OG
                        </div>
                        <span class="text-white font-oswald text-2xl tracking-wider font-bold">OSMAN GANI</span>
                    </div>
                    <p class="text-xs text-gray-400 leading-relaxed font-ubuntu">
                        Empowering millions worldwide through bestselling books, dynamic keynote addresses, and high-impact business masterclasses.
                    </p>
                    <div class="flex items-center gap-2 pt-2">
                        <a href="https://facebook.com" target="_blank" class="social-icon-btn bg-[#3b5998] hover:bg-[#2d4373]"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" class="social-icon-btn bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://youtube.com" target="_blank" class="social-icon-btn bg-[#c4302b] hover:bg-[#990000]"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://linkedin.com" target="_blank" class="social-icon-btn bg-[#0077b5] hover:bg-[#005582]"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Col 2: About Us -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">About Us</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('about.osman-gani') }}" class="hover:text-white transition block py-1">About Osman Gani</a></li>
                        <li><a href="{{ route('about.media-events') }}" class="hover:text-white transition block py-1">Media &amp; Press Events</a></li>
                        <li><a href="{{ route('about.life-mission') }}" class="text-[#df3243] hover:text-white transition block py-1 font-semibold">Life Mission &amp; Vision</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-white transition block py-1">Speaking &amp; Keynotes</a></li>
                        <li><a href="{{ route('about.osman-gani') }}#testimonials" class="hover:text-white transition block py-1">Client Testimonials</a></li>
                    </ul>
                </div>

                <!-- Col 3: Products & Services -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Programs &amp; Books</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('books') }}" class="hover:text-white transition block py-1">Bestselling Books</a></li>
                        <li><a href="{{ route('courses') }}" class="hover:text-white transition block py-1">All Online Masterclasses</a></li>
                        <li><a href="{{ route('courses') }}#course-ai" class="hover:text-white transition block py-1">AI Mastery Program</a></li>
                        <li><a href="{{ route('courses') }}#course-sm" class="hover:text-white transition block py-1">Social Media Accelerator</a></li>
                        <li><a href="{{ route('events') }}" class="hover:text-white transition block py-1">Train The Trainer Bootcamp</a></li>
                    </ul>
                </div>

                <!-- Col 4: Newsletter -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Stay Connected</h4>
                    <p class="text-xs text-gray-400 font-ubuntu">
                        Subscribe for weekly insights, exclusive masterclass invitations, and free tools.
                    </p>
                    <form action="#" method="POST" class="space-y-2" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Osman Gani insights!');">
                        <input type="email" placeholder="Your Email Address" required class="w-full bg-[#111319] border border-gray-700 rounded-lg px-3 py-2 text-xs text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                        <button type="submit" class="w-full btn-pill-filled-red text-xs justify-center py-2">
                            Subscribe Now
                        </button>
                    </form>
                </div>

            </div>

            <!-- Copyright & Legal -->
            <div class="border-t border-gray-800 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-400 gap-4">
                <p>&copy; 2007-{{ date('Y') }} Osman Gani. All Rights Reserved.</p>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('privacy-policy') }}" class="hover:text-white transition">Privacy Policy</a>
                    <a href="{{ route('terms-of-usage') }}" class="hover:text-white transition">Terms Of Usage</a>
                    <a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Drawer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
