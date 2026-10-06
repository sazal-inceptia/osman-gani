<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Osman Gani | Bestselling Author, Keynote Speaker & Transformation Coach</title>
    <meta name="description" content="Osman Gani is a world-class Life Coach, Business Transformation Strategist, and Bestselling Author empowering millions across 50+ countries to multiply their income, master leadership, and achieve breakthrough success.">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Osman Gani | Keynote Speaker, Author & Life Coach">
    <meta property="og:description" content="Empowering individuals and organizations for Peak Performance, Business Multiplication & Life Transformation.">
    <meta property="og:type" content="website">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased selection:bg-red-500 selection:text-white">

    <!-- ======================================================== -->
    <!-- 1. TOP UTILITY BAR (Black background, quick contact & login) -->
    <!-- ======================================================== -->
    <div class="bg-[#0b0c10] border-b border-gray-800 text-gray-300 text-xs py-2 px-4 sm:px-8">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
            
            <!-- Left Contact & Social -->
            <div class="flex items-center flex-wrap gap-4 sm:gap-6">
                <a href="tel:+8801700000000" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white px-3 py-1 rounded-full text-xs font-medium transition duration-200 border border-white/10">
                    <i class="fa-solid fa-phone-volume text-[#df3243]"></i>
                    <span>+880 1700-000000</span>
                </a>

                <div class="flex items-center gap-2">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn bg-[#3b5998] hover:bg-[#2d4373]" title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]" title="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn bg-[#c4302b] hover:bg-[#990000]" title="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=8801700000000" target="_blank" rel="noopener noreferrer" class="social-icon-btn bg-[#25D366] hover:bg-[#128C7E]" title="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-icon-btn bg-[#0077b5] hover:bg-[#005582]" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Right Quick Link -->
            <div class="flex items-center gap-4">
                <a href="{{ route('resources.ebooks') }}" class="hidden sm:inline-flex items-center gap-1.5 text-xs text-amber-400 font-medium hover:text-amber-300 transition">
                    <i class="fa-solid fa-gift"></i>
                    <span>Claim Free Masterclass</span>
                </a>
                <a href="{{ route('courses') }}" class="inline-flex items-center gap-1.5 bg-white text-black hover:bg-[#df3243] hover:text-white px-3.5 py-1 rounded-full text-xs font-semibold uppercase tracking-wider transition-all duration-200 shadow-sm">
                    <span>Explore Courses</span>
                    <i class="fa-solid fa-angle-right text-[10px]"></i>
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
                <a href="/" class="flex items-center gap-3 group">
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
                    
                    <!-- ABOUT Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>ABOUT</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-56 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('about.osman-gani') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">OSMAN GANI</a>
                            <a href="{{ route('about.media-events') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">MEDIA &amp; EVENTS</a>
                            <a href="{{ route('about.life-mission') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">LIFE MISSION</a>
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
                <a href="{{ route('about.life-mission') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">LIFE MISSION</a>
                <a href="{{ route('books') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">BOOKS</a>
                <a href="{{ route('speaking') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">SPEAKING</a>
                <a href="{{ route('courses') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">COURSES</a>
                <a href="{{ route('events') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">EVENTS</a>
                <a href="{{ route('resources.free-videos') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">FREE RESOURCES</a>
                <a href="{{ route('contact') }}" class="hover:text-[#df3243] py-1 border-b border-gray-800/60">CONTACT</a>
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
    <!-- 3. HERO SECTION / DYNAMIC VIDEO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#050608] via-[#0d1017] to-[#050608] text-white overflow-hidden py-16 sm:py-24 border-b border-gray-800">
        <!-- Ambient Glow Elements -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#df3243]/15 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -bottom-10 right-10 w-[400px] h-[300px] bg-[#ff8421]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Hero Left Content -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                    
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/30 text-red-400 text-xs sm:text-sm font-semibold uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-[#df3243] animate-pulse"></span>
                        <span>Global Transformation &amp; Business Mastery</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-oswald font-extrabold uppercase tracking-tight text-white leading-tight">
                        Transform Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff4757] via-[#ff6b81] to-[#ff8421]">Mindset</span>, Multiply Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff8421] to-[#ffa502]">Business</span>
                    </h1>

                    <p class="text-base sm:text-lg text-gray-300 font-ubuntu font-light leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        A master of personal and business breakthrough, <strong>Osman Gani</strong> has been inspiring and equipping entrepreneurs, leaders, and youth across 50+ countries to unlock peak potential, lead with authority, and 10x their achievements.
                    </p>

                    <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('courses') }}" class="btn-pill-filled-red text-lg px-8 py-3.5 shadow-lg shadow-red-600/30">
                            <span>Explore Courses &amp; Books</span>
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </a>
                        <a href="{{ route('speaking') }}" class="inline-flex items-center gap-2 font-oswald font-medium text-lg px-6 py-3 rounded-full border-2 border-white/20 hover:border-white text-white hover:bg-white/10 transition">
                            <i class="fa-solid fa-calendar-check text-[#ff8421]"></i>
                            <span>Invite For Keynote</span>
                        </a>
                    </div>

                    <!-- Trust Micro-Badges -->
                    <div class="pt-6 border-t border-gray-800/80 grid grid-cols-3 gap-4 max-w-lg mx-auto lg:mx-0 text-center lg:text-left">
                        <div>
                            <div class="font-oswald text-2xl font-bold text-white">500K+</div>
                            <div class="text-xs text-gray-400">People Mentored</div>
                        </div>
                        <div>
                            <div class="font-oswald text-2xl font-bold text-[#ff8421]">1 Billion+</div>
                            <div class="text-xs text-gray-400">Digital Views</div>
                        </div>
                        <div>
                            <div class="font-oswald text-2xl font-bold text-white">4.9 / 5.0</div>
                            <div class="text-xs text-gray-400">Student Rating ★★★★★</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Right Media Card / Video Frame -->
                <div class="lg:col-span-5">
                    <div class="relative group mx-auto max-w-md lg:max-w-none">
                        
                        <!-- Glowing backdrop frame -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#df3243] to-[#ff8421] rounded-3xl blur-md opacity-40 group-hover:opacity-75 transition duration-500"></div>

                        <div class="relative bg-[#10131c] rounded-2xl overflow-hidden border border-white/10 shadow-2xl aspect-[4/4.8] flex flex-col justify-end p-6">
                            
                            <!-- Stylized Speaker Profile Graphic -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#090b10] via-transparent to-black/30 z-10"></div>
                            
                            <!-- Background Pattern & Illustration Placeholder -->
                            <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-gray-900 via-[#181c29] to-black">
                                <div class="text-center p-8 space-y-4">
                                    <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-1 shadow-2xl">
                                        <div class="w-full h-full rounded-full bg-[#121520] flex items-center justify-center text-white font-oswald text-4xl font-black">
                                            OG
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="font-oswald text-2xl text-white font-bold tracking-wide">OSMAN GANI</div>
                                        <div class="text-xs text-amber-400 font-semibold uppercase tracking-widest">#1 High Performance Coach</div>
                                    </div>
                                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-600/20 text-red-300 rounded-full text-xs">
                                        <i class="fa-solid fa-award"></i>
                                        <span>Bestselling Author of 5+ Books</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Interactive Video Play Trigger Overlay -->
                            <div class="relative z-20 bg-black/60 backdrop-blur-md rounded-xl p-4 border border-white/10 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <button id="open-video-btn" class="w-12 h-12 rounded-full bg-[#df3243] hover:bg-[#b81b2b] text-white flex items-center justify-center shadow-lg shadow-red-600/40 transform hover:scale-110 transition duration-200" aria-label="Play Welcome Video">
                                        <i class="fa-solid fa-play text-sm ml-0.5"></i>
                                    </button>
                                    <div>
                                        <div class="text-xs text-gray-300 uppercase tracking-wider font-semibold">Watch Message</div>
                                        <div class="text-sm font-oswald font-bold text-white">How To 10x Your Life &amp; Career</div>
                                    </div>
                                </div>
                                <span class="text-xs text-amber-400 font-bold bg-amber-400/10 px-2 py-1 rounded">2 min</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 4. CORE MOTTO HEADLINE BANNER (Iconic deepakbajaj.biz style) -->
    <!-- ======================================================== -->
    <section class="bg-black text-white py-6 border-b border-[#df3243]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-oswald font-semibold text-lg sm:text-2xl md:text-3xl tracking-wide uppercase text-white/95">
                Results <span class="text-[#df3243] mx-1 font-black">|</span> 
                Happiness <span class="text-[#df3243] mx-1 font-black">|</span> 
                Success <span class="text-[#df3243] mx-1 font-black">|</span> 
                Career Growth <span class="text-[#df3243] mx-1 font-black">|</span> 
                Business Multiplication <span class="text-[#df3243] mx-1 font-black">|</span> 
                Leadership
            </h2>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 5. KEY STATS & PROVEN TRACK RECORD BAR (5 Column Layout) -->
    <!-- ======================================================== -->
    <section class="py-14 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 text-center">
                
                <!-- Stat 1 -->
                <div class="stat-card group p-4 rounded-xl hover:bg-white hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-2xl bg-red-100 flex items-center justify-center text-[#df3243] text-2xl group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="font-oswald text-4xl font-extrabold text-gray-900">15+</div>
                    <div class="brand-divider"></div>
                    <div class="font-ubuntu text-base font-medium text-gray-700">Years Of Experience</div>
                </div>

                <!-- Stat 2 -->
                <div class="stat-card group p-4 rounded-xl hover:bg-white hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-2xl bg-amber-100 flex items-center justify-center text-[#ff8421] text-2xl group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="font-oswald text-4xl font-extrabold text-gray-900">500,000+</div>
                    <div class="brand-divider"></div>
                    <div class="font-ubuntu text-base font-medium text-gray-700">Students &amp; Attendees</div>
                </div>

                <!-- Stat 3 -->
                <div class="stat-card group p-4 rounded-xl hover:bg-white hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-2xl bg-red-100 flex items-center justify-center text-[#df3243] text-2xl group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <div class="font-oswald text-4xl font-extrabold text-gray-900">1B+</div>
                    <div class="brand-divider"></div>
                    <div class="font-ubuntu text-base font-medium text-gray-700">Social Media Views</div>
                </div>

                <!-- Stat 4 -->
                <div class="stat-card group p-4 rounded-xl hover:bg-white hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600 text-2xl group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="font-oswald text-4xl font-extrabold text-gray-900">50+</div>
                    <div class="brand-divider"></div>
                    <div class="font-ubuntu text-base font-medium text-gray-700">Countries Impacted</div>
                </div>

                <!-- Stat 5 -->
                <div class="stat-card group p-4 rounded-xl hover:bg-white hover:shadow-lg transition duration-300 col-span-2 md:col-span-1">
                    <div class="w-16 h-16 mx-auto mb-3 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600 text-2xl group-hover:scale-110 transition duration-300">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <div class="font-oswald text-4xl font-extrabold text-gray-900">9+</div>
                    <div class="brand-divider"></div>
                    <div class="font-ubuntu text-base font-medium text-gray-700">Languages Available</div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 6. HERE'S HOW OSMAN CAN HELP YOU & YOUR TEAM (5 Pillars) -->
    <!-- ======================================================== -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Customized Transformation Solutions</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-950 uppercase">
                    Here's How Osman Can Help You &amp; Your Team
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                
                <!-- Pillar 1: Books -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-lg shadow-gray-100/70 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-24 h-32 mx-auto bg-gradient-to-br from-red-600 to-amber-700 rounded-lg shadow-md flex items-center justify-center text-white text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Books</h3>
                        <p class="font-ubuntu text-sm text-gray-600 leading-relaxed">
                            #1 Bestselling books in 9 languages for Total Life, Sales &amp; Business Breakthrough.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('books') }}" class="btn-pill-red w-full text-sm">
                            <span>Order Now</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 2: Speaking -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-lg shadow-gray-100/70 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-24 h-32 mx-auto bg-gradient-to-br from-gray-900 to-red-900 rounded-lg shadow-md flex items-center justify-center text-amber-400 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-microphone-lines"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Speaking</h3>
                        <p class="font-ubuntu text-sm text-gray-600 leading-relaxed">
                            Invite Osman at your next conference or corporate event to empower your team for 10x Results.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('speaking') }}" class="btn-pill-red w-full text-sm">
                            <span>Book Osman</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 3: Courses -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-lg shadow-gray-100/70 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-24 h-32 mx-auto bg-gradient-to-br from-indigo-900 to-purple-900 rounded-lg shadow-md flex items-center justify-center text-cyan-300 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Courses</h3>
                        <p class="font-ubuntu text-sm text-gray-600 leading-relaxed">
                            Learn anytime, anywhere on your mobile from practical, result-oriented masterclasses.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('courses') }}" class="btn-pill-red w-full text-sm">
                            <span>Browse Courses</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 4: Events -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-lg shadow-gray-100/70 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-24 h-32 mx-auto bg-gradient-to-br from-emerald-900 to-teal-900 rounded-lg shadow-md flex items-center justify-center text-emerald-300 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Events</h3>
                        <p class="font-ubuntu text-sm text-gray-600 leading-relaxed">
                            Attend high-energy live bootcamps and workshops for instant breakthrough and lasting change.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('events') }}" class="btn-pill-red w-full text-sm">
                            <span>Upcoming Events</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 5: Free Videos -->
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-lg shadow-gray-100/70 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-24 h-32 mx-auto bg-gradient-to-br from-red-800 to-rose-950 rounded-lg shadow-md flex items-center justify-center text-white text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-circle-play"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Free Videos</h3>
                        <p class="font-ubuntu text-sm text-gray-600 leading-relaxed">
                            1000+ Free video lessons for instant tips, actionable tactics &amp; life growth strategies.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('resources.free-videos') }}" class="btn-pill-red w-full text-sm">
                            <span>Latest Videos</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 7. FEATURED IN / MEDIA & PRESS MARQUEE -->
    <!-- ======================================================== -->
    <section class="py-12 bg-gray-900 text-white overflow-hidden border-y border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 text-center">
            <h3 class="font-oswald text-xl sm:text-2xl font-bold uppercase tracking-wider text-gray-400">
                Featured In Leading Media &amp; Publications
            </h3>
        </div>

        <!-- Marquee Ticker -->
        <div class="relative w-full overflow-hidden flex items-center py-4">
            <div class="animate-marquee flex items-center gap-12 sm:gap-20 text-gray-400 font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wider opacity-80">
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-newspaper text-red-500"></i> FORBES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-tv text-amber-500"></i> HINDUSTAN TIMES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-chart-line text-blue-500"></i> ECONOMIC TIMES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-microphone text-purple-500"></i> TEDx</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-globe text-emerald-500"></i> BUSINESS STANDARD</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-broadcast-tower text-rose-500"></i> ZEE NEWS</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-book-open-reader text-yellow-500"></i> OUTLOOK INDIA</span>

                <!-- Duplicate for seamless loop -->
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-newspaper text-red-500"></i> FORBES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-tv text-amber-500"></i> HINDUSTAN TIMES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-chart-line text-blue-500"></i> ECONOMIC TIMES</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-microphone text-purple-500"></i> TEDx</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-globe text-emerald-500"></i> BUSINESS STANDARD</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-broadcast-tower text-rose-500"></i> ZEE NEWS</span>
                <span class="hover:text-white transition flex items-center gap-3"><i class="fa-solid fa-book-open-reader text-yellow-500"></i> OUTLOOK INDIA</span>
            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 8. BESTSELLING BOOKS SHOWCASE SECTION -->
    <!-- ======================================================== -->
    <section id="books" class="py-20 bg-gradient-to-b from-white to-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-4xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">National &amp; Global Bestsellers</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 uppercase">
                    Upgrade Your Skills &amp; Multiply Your Income With Osman's Bestselling Books
                </h2>
                <p class="font-ubuntu text-base text-gray-600 max-w-2xl mx-auto">
                    Translated into 9 languages with over 500,000+ copies sold worldwide. Available on Amazon, Flipkart, and leading bookstores.
                </p>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Book 1 -->
                <div class="book-card-3d bg-white rounded-2xl p-6 border border-gray-200 shadow-xl flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-48 h-64 mx-auto rounded-xl bg-gradient-to-br from-[#df3243] via-[#8c1421] to-[#3a060d] text-white p-5 flex flex-col justify-between shadow-2xl relative overflow-hidden border-2 border-red-300/30 mb-6 group-hover:scale-105 transition duration-300">
                            <div class="text-left text-[10px] font-bold tracking-widest uppercase text-amber-300">#1 Bestseller</div>
                            <div class="space-y-1 my-auto">
                                <div class="font-oswald text-2xl font-black uppercase leading-tight tracking-wide">ACHIEVE MORE</div>
                                <div class="text-[11px] text-gray-200">High Performance Blueprint</div>
                            </div>
                            <div class="text-right text-xs font-bold text-white/90">OSMAN GANI</div>
                        </div>

                        <div class="flex items-center justify-center gap-1 text-amber-500 text-xs mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-600 font-semibold ml-1">(4.9/5.0)</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900">Achieve More Every Day</h3>
                        <p class="text-xs text-gray-600 mt-2 font-ubuntu">
                            Master daily discipline, eliminate distraction, and crush your biggest career goals.
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="https://amazon.com" target="_blank" rel="noopener noreferrer" class="btn-pill-filled-red w-full text-sm">
                            <i class="fa-brands fa-amazon mr-1"></i> Order on Amazon
                        </a>
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="book-card-3d bg-white rounded-2xl p-6 border border-gray-200 shadow-xl flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-48 h-64 mx-auto rounded-xl bg-gradient-to-br from-amber-600 via-orange-700 to-gray-900 text-white p-5 flex flex-col justify-between shadow-2xl relative overflow-hidden border-2 border-amber-300/30 mb-6 group-hover:scale-105 transition duration-300">
                            <div class="text-left text-[10px] font-bold tracking-widest uppercase text-yellow-300">Global Edition</div>
                            <div class="space-y-1 my-auto">
                                <div class="font-oswald text-2xl font-black uppercase leading-tight tracking-wide">SOCIAL MEDIA MILLIONAIRE</div>
                                <div class="text-[11px] text-gray-200">Online Business Mastery</div>
                            </div>
                            <div class="text-right text-xs font-bold text-white/90">OSMAN GANI</div>
                        </div>

                        <div class="flex items-center justify-center gap-1 text-amber-500 text-xs mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-600 font-semibold ml-1">(4.9/5.0)</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900">Social Media Millionaire</h3>
                        <p class="text-xs text-gray-600 mt-2 font-ubuntu">
                            Build an authentic personal brand, generate hyper-qualified leads, and scale digitally.
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="https://amazon.com" target="_blank" rel="noopener noreferrer" class="btn-pill-filled-red w-full text-sm">
                            <i class="fa-brands fa-amazon mr-1"></i> Order on Amazon
                        </a>
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="book-card-3d bg-white rounded-2xl p-6 border border-gray-200 shadow-xl flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-48 h-64 mx-auto rounded-xl bg-gradient-to-br from-blue-900 via-indigo-900 to-black text-white p-5 flex flex-col justify-between shadow-2xl relative overflow-hidden border-2 border-blue-300/30 mb-6 group-hover:scale-105 transition duration-300">
                            <div class="text-left text-[10px] font-bold tracking-widest uppercase text-cyan-300">Must Read</div>
                            <div class="space-y-1 my-auto">
                                <div class="font-oswald text-2xl font-black uppercase leading-tight tracking-wide">BE A CHAMPION</div>
                                <div class="text-[11px] text-gray-200">Unstoppable Confidence</div>
                            </div>
                            <div class="text-right text-xs font-bold text-white/90">OSMAN GANI</div>
                        </div>

                        <div class="flex items-center justify-center gap-1 text-amber-500 text-xs mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-600 font-semibold ml-1">(5.0/5.0)</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900">Be A Champion In Life</h3>
                        <p class="text-xs text-gray-600 mt-2 font-ubuntu">
                            Break self-limiting beliefs, unlock warrior resilience, and thrive against all odds.
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="https://amazon.com" target="_blank" rel="noopener noreferrer" class="btn-pill-filled-red w-full text-sm">
                            <i class="fa-brands fa-amazon mr-1"></i> Order on Amazon
                        </a>
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="book-card-3d bg-white rounded-2xl p-6 border border-gray-200 shadow-xl flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-48 h-64 mx-auto rounded-xl bg-gradient-to-br from-emerald-800 via-teal-900 to-gray-950 text-white p-5 flex flex-col justify-between shadow-2xl relative overflow-hidden border-2 border-emerald-300/30 mb-6 group-hover:scale-105 transition duration-300">
                            <div class="text-left text-[10px] font-bold tracking-widest uppercase text-emerald-300">Top Rated</div>
                            <div class="space-y-1 my-auto">
                                <div class="font-oswald text-2xl font-black uppercase leading-tight tracking-wide">TIME MASTERY</div>
                                <div class="text-[11px] text-gray-200">10x Productivity Secret</div>
                            </div>
                            <div class="text-right text-xs font-bold text-white/90">OSMAN GANI</div>
                        </div>

                        <div class="flex items-center justify-center gap-1 text-amber-500 text-xs mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-600 font-semibold ml-1">(4.9/5.0)</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900">Time Multiplication Formula</h3>
                        <p class="text-xs text-gray-600 mt-2 font-ubuntu">
                            Achieve in 4 hours what takes others an entire week with high-leverage workflows.
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="https://amazon.com" target="_blank" rel="noopener noreferrer" class="btn-pill-filled-red w-full text-sm">
                            <i class="fa-brands fa-amazon mr-1"></i> Order on Amazon
                        </a>
                    </div>
                </div>

            </div>

            <!-- Explore All Books Button -->
            <div class="text-center mt-12">
                <a href="{{ route('books') }}" class="btn-pill-red text-lg px-8 py-3">
                    <span>Explore All 5+ Books &amp; Audiobooks</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 9. PRAISE & TESTIMONIALS (Dark Luxury Section like reference) -->
    <!-- ======================================================== -->
    <section class="py-24 bg-[#090b10] text-white border-b border-gray-800 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#df3243]/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#ff8421]">Industry Endorsements</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold uppercase text-white tracking-wide">
                    Praise For Osman Gani's Work
                </h2>
                <p class="font-ubuntu text-gray-400 text-base">
                    Recognized by Ministers, Business Leaders, Media Icons, and Corporate Executives worldwide.
                </p>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Top Row: Prominent Quotes -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                
                <!-- Testimonial 1 -->
                <div class="testimonial-card-dark p-8 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-0.5 shadow-lg">
                                <div class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center text-white font-oswald text-xl font-bold">
                                    HT
                                </div>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-white">NATIONAL DAILY</h4>
                                <p class="text-xs text-[#ff8421] font-semibold">Leading Publication</p>
                            </div>
                        </div>
                        <p class="font-ubuntu text-sm text-gray-300 italic leading-relaxed">
                            "Osman Gani's trainings and books are packed with practical frameworks, high-impact strategies, and psychological clarity that empower anyone to break boundaries and build extraordinary lives."
                        </p>
                    </div>
                    <div class="pt-6 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
                        <span>Editorial Review</span>
                        <span class="text-amber-400">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card-dark p-8 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-0.5 shadow-lg">
                                <div class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center text-white font-oswald text-xl font-bold">
                                    GV
                                </div>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-white">GAURAV VATSAYA</h4>
                                <p class="text-xs text-[#ff8421] font-semibold">Managing Partner, Gourmet LLP</p>
                            </div>
                        </div>
                        <p class="font-ubuntu text-sm text-gray-300 italic leading-relaxed">
                            "I was mesmerized when I heard Osman live on stage. He is extraordinarily passionate, authentic, and laser-focused on delivering real business solutions. Blessed are those mentored by him."
                        </p>
                    </div>
                    <div class="pt-6 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
                        <span>Keynote Attendee</span>
                        <span class="text-amber-400">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card-dark p-8 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-0.5 shadow-lg">
                                <div class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center text-white font-oswald text-xl font-bold">
                                    SP
                                </div>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-white">MINISTER OF COMMERCE</h4>
                                <p class="text-xs text-[#ff8421] font-semibold">Govt. Representative</p>
                            </div>
                        </div>
                        <p class="font-ubuntu text-sm text-gray-300 italic leading-relaxed">
                            "Osman Gani is an inspiring mentor and visionary trainer. His work is showing thousands of ambitious youth and entrepreneurs the authentic path to financial independence."
                        </p>
                    </div>
                    <div class="pt-6 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
                        <span>Official Address</span>
                        <span class="text-amber-400">★★★★★</span>
                    </div>
                </div>

            </div>

            <!-- Bottom Row: Video Testimonials with Play Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Video Testimonial 1 -->
                <div class="testimonial-card-dark p-6 space-y-4">
                    <div class="relative rounded-xl overflow-hidden bg-gray-800 aspect-video flex items-center justify-center group cursor-pointer border border-white/10">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                        <div class="w-12 h-12 rounded-full bg-[#df3243] text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                            <i class="fa-solid fa-play ml-0.5"></i>
                        </div>
                        <div class="absolute bottom-3 left-3 text-left">
                            <div class="text-xs font-bold text-white">SURENDER VATS</div>
                            <div class="text-[11px] text-gray-300">Veteran Direct Selling Leader</div>
                        </div>
                    </div>
                    <h5 class="font-oswald text-lg font-bold text-white">"How Osman Doubled Our Team's Sales"</h5>
                </div>

                <!-- Video Testimonial 2 -->
                <div class="testimonial-card-dark p-6 space-y-4">
                    <div class="relative rounded-xl overflow-hidden bg-gray-800 aspect-video flex items-center justify-center group cursor-pointer border border-white/10">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                        <div class="w-12 h-12 rounded-full bg-[#df3243] text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                            <i class="fa-solid fa-play ml-0.5"></i>
                        </div>
                        <div class="absolute bottom-3 left-3 text-left">
                            <div class="text-xs font-bold text-white">PAYAL KOTHARI</div>
                            <div class="text-[11px] text-gray-300">Integrative Coach &amp; Author</div>
                        </div>
                    </div>
                    <h5 class="font-oswald text-lg font-bold text-white">"Mindset Shift That Transformed Everything"</h5>
                </div>

                <!-- Video Testimonial 3 -->
                <div class="testimonial-card-dark p-6 space-y-4">
                    <div class="relative rounded-xl overflow-hidden bg-gray-800 aspect-video flex items-center justify-center group cursor-pointer border border-white/10">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                        <div class="w-12 h-12 rounded-full bg-[#df3243] text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                            <i class="fa-solid fa-play ml-0.5"></i>
                        </div>
                        <div class="absolute bottom-3 left-3 text-left">
                            <div class="text-xs font-bold text-white">JANHVI SINGH</div>
                            <div class="text-[11px] text-gray-300">Social Media Influencer</div>
                        </div>
                    </div>
                    <h5 class="font-oswald text-lg font-bold text-white">"From Zero to 1M Followers in 12 Months"</h5>
                </div>

            </div>

        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 10. LATEST COURSES & UPCOMING EVENTS -->
    <!-- ======================================================== -->
    <section id="courses" class="py-24 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">World-Class Online Learning</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold uppercase text-gray-950">
                    Latest Courses &amp; Upcoming Masterclasses
                </h2>
                <p class="font-ubuntu text-gray-600 text-base">
                    Step-by-step frameworks designed for instant execution and guaranteed personal ROI.
                </p>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Course Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Course 1: Time Mastery -->
                <div id="course-time" class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative bg-gradient-to-r from-emerald-700 to-teal-900 p-8 text-white aspect-[16/10] flex flex-col justify-between">
                            <span class="inline-block bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider w-fit">
                                Productivity Mastery
                            </span>
                            <div>
                                <h3 class="font-oswald text-3xl font-bold uppercase">Time &amp; Focus Mastery</h3>
                                <p class="text-xs text-emerald-200">Crush Procrastination &amp; 10x Daily Output</p>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <ul class="space-y-2.5 text-xs sm:text-sm text-gray-700 font-ubuntu">
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i>
                                    <span>Take total charge of your day with time-blocking</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i>
                                    <span>Kill procrastination and finish your to-do list daily</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i>
                                    <span>Lifetime access + downloadable action templates</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-emerald-600 mt-1"></i>
                                    <span>Available in English &amp; Bengali / Hindi</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <div class="flex items-center justify-between py-3 border-t border-gray-100 mb-4">
                            <span class="text-xs text-gray-500 font-semibold">Self-Paced • 12 Modules</span>
                            <span class="text-lg font-oswald font-bold text-gray-900">$49 / ৳4,990</span>
                        </div>
                        <a href="{{ route('courses') }}" class="btn-pill-filled-red w-full text-center justify-center">
                            Enroll Now <i class="fa-solid fa-arrow-right-long text-xs ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 2: AI Mastery (Highlighted) -->
                <div id="course-ai" class="bg-white rounded-2xl border-2 border-[#df3243] overflow-hidden shadow-2xl hover:shadow-red-500/20 hover:-translate-y-2 transition duration-300 flex flex-col justify-between relative">
                    
                    <div class="absolute top-3 right-3 z-10 bg-[#df3243] text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-md">
                        ★ Most Popular
                    </div>

                    <div>
                        <div class="relative bg-gradient-to-r from-red-700 via-rose-800 to-amber-800 p-8 text-white aspect-[16/10] flex flex-col justify-between">
                            <span class="inline-block bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider w-fit">
                                Future-Proof Skills
                            </span>
                            <div>
                                <h3 class="font-oswald text-3xl font-bold uppercase">AI Mastery Blueprint</h3>
                                <p class="text-xs text-red-200">15+ AI Tools for Business &amp; Career</p>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <ul class="space-y-2.5 text-xs sm:text-sm text-gray-700 font-ubuntu">
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-[#df3243] mt-1"></i>
                                    <span>Master ChatGPT, Midjourney, Claude &amp; Agent Automations</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-[#df3243] mt-1"></i>
                                    <span>Step-by-step prompt libraries for marketing &amp; sales</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-[#df3243] mt-1"></i>
                                    <span>No coding or prior tech background required</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-[#df3243] mt-1"></i>
                                    <span>Certificate of Completion + VIP Community Access</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <div class="flex items-center justify-between py-3 border-t border-gray-100 mb-4">
                            <span class="text-xs text-gray-500 font-semibold">Video Course • Lifetime</span>
                            <span class="text-xl font-oswald font-black text-[#df3243]">$99 / ৳9,990</span>
                        </div>
                        <a href="{{ route('courses') }}" class="btn-pill-filled-red w-full text-center justify-center text-lg shadow-lg shadow-red-600/40">
                            Enroll In AI Mastery <i class="fa-solid fa-bolt text-amber-300 ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 3: Social Media & Online Business -->
                <div id="course-sm" class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-xl hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="relative bg-gradient-to-r from-blue-800 to-indigo-950 p-8 text-white aspect-[16/10] flex flex-col justify-between">
                            <span class="inline-block bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider w-fit">
                                Growth &amp; Monetization
                            </span>
                            <div>
                                <h3 class="font-oswald text-3xl font-bold uppercase">Online Business Mastery</h3>
                                <p class="text-xs text-blue-200">Scale Your Audience &amp; Inbound Sales</p>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <ul class="space-y-2.5 text-xs sm:text-sm text-gray-700 font-ubuntu">
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                                    <span>23-Day Action sprint with practical daily assignments</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                                    <span>Create viral content, hooks, reels &amp; video funnels</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                                    <span>High-converting offer creation and closing strategy</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                                    <span>Weekly live Q&amp;A sessions with Osman Gani</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <div class="flex items-center justify-between py-3 border-t border-gray-100 mb-4">
                            <span class="text-xs text-gray-500 font-semibold">23 Days • Live Support</span>
                            <span class="text-lg font-oswald font-bold text-gray-900">$79 / ৳7,990</span>
                        </div>
                        <a href="{{ route('courses') }}" class="btn-pill-filled-red w-full text-center justify-center">
                            Enroll Now <i class="fa-solid fa-arrow-right-long text-xs ml-1"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 11. LEAD MAGNET / FREE MASTERCLASS NEWSLETTER OPTIN -->
    <!-- ======================================================== -->
    <section id="newsletter" class="py-20 bg-gradient-to-r from-red-700 via-rose-800 to-red-950 text-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md text-amber-300 text-xs font-bold uppercase tracking-wider border border-white/20">
                <i class="fa-solid fa-gift text-sm"></i>
                <span>Exclusive Free Gift ($197 Value)</span>
            </div>

            <h2 class="font-oswald text-3xl sm:text-4xl md:text-5xl font-extrabold uppercase tracking-tight">
                Get Osman's 7-Day Life &amp; Business Breakthrough Masterclass Free
            </h2>

            <p class="font-ubuntu text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
                Join over 250,000+ ambitious achievers who receive Osman Gani's weekly strategies, mental models, and step-by-step growth tactics directly in their inbox.
            </p>

            <form id="lead-form" class="max-w-xl mx-auto flex flex-col sm:flex-row gap-3 pt-4">
                <input 
                    type="email" 
                    required 
                    placeholder="Enter your best email address..." 
                    class="flex-1 px-5 py-3.5 rounded-full text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-amber-400 font-ubuntu text-sm shadow-xl"
                />
                <button type="submit" class="bg-amber-400 hover:bg-amber-300 text-gray-950 font-oswald text-lg font-bold px-8 py-3.5 rounded-full uppercase tracking-wider transition duration-200 shadow-xl shadow-black/30">
                    Get Free Access
                </button>
            </form>

            <div id="form-success" class="hidden text-amber-300 font-semibold text-sm bg-black/40 py-2 px-4 rounded-full max-w-md mx-auto">
                <i class="fa-solid fa-check-circle mr-1"></i> Success! Please check your inbox for the masterclass links.
            </div>

            <p class="text-xs text-red-200">
                🔒 We respect your privacy. No spam ever. Unsubscribe with 1-click anytime.
            </p>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 12. COMPREHENSIVE FOOTER (Deep Black with Red/Gold Accents) -->
    <!-- ======================================================== -->
    <footer class="bg-[#050608] text-gray-300 pt-16 pb-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                
                <!-- Col 1: Contact Us & Brand -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#df3243] flex items-center justify-center text-white font-oswald text-xl font-bold">
                            OG
                        </div>
                        <span class="font-oswald text-2xl font-bold text-white tracking-wider">OSMAN GANI</span>
                    </div>
                    <p class="text-xs text-gray-400 font-ubuntu leading-relaxed">
                        Transforming lives, elevating mindset, and creating high-performance leaders across the globe.
                    </p>

                    <h4 class="font-oswald text-lg text-[#df3243] font-bold pt-2 uppercase">Contact Us</h4>
                    <ul class="space-y-2.5 text-xs text-gray-300 font-ubuntu">
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-envelope text-red-500 w-4"></i>
                            <a href="mailto:support@osmangani.biz" class="hover:text-white transition">support@osmangani.biz</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-phone-volume text-red-500 w-4"></i>
                            <a href="tel:+8801700000000" class="hover:text-white transition">+880 1700-000000</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-brands fa-whatsapp text-emerald-500 w-4"></i>
                            <a href="https://api.whatsapp.com/send?phone=8801700000000" target="_blank" class="hover:text-white transition">+880 1700-000000 (WhatsApp)</a>
                        </li>
                    </ul>

                    <!-- Socials -->
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
                        <li><a href="{{ route('about.osman-gani') }}" class="text-[#df3243] hover:text-white transition block py-1 font-semibold">About Osman Gani</a></li>
                        <li><a href="{{ route('about.media-events') }}" class="hover:text-white transition block py-1">Media &amp; Press Events</a></li>
                        <li><a href="{{ route('about.life-mission') }}" class="hover:text-white transition block py-1">Life Mission &amp; Vision</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-white transition block py-1">Speaking &amp; Keynotes</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition block py-1">Contact Office</a></li>
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

                <!-- Col 4: Quick Links & Legal -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Resources &amp; Support</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('resources.free-videos') }}" class="hover:text-white transition block py-1">Free Video Library</a></li>
                        <li><a href="{{ route('resources.ebooks') }}" class="hover:text-white transition block py-1">Free E-Books &amp; Guides</a></li>
                        <li><a href="{{ route('resources.tools') }}" class="hover:text-white transition block py-1">Productivity &amp; Growth Tools</a></li>
                        <li><a href="{{ route('resources.blog') }}" class="hover:text-white transition block py-1">Articles &amp; Blog</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="hover:text-white transition block py-1">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-of-usage') }}" class="hover:text-white transition block py-1">Terms of Usage</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-gray-500 hover:text-[#df3243] transition block py-1"><i class="fa-solid fa-user text-[10px] mr-1"></i> Login</a></li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright & Disclaimer -->
            <div class="pt-8 border-t border-gray-800/80 text-center space-y-3">
                <p class="text-xs text-gray-500 font-ubuntu">
                    © {{ date('Y') }} Osman Gani. All Rights Reserved. Built with excellence.
                </p>
                <p class="text-[11px] text-gray-600 max-w-3xl mx-auto font-ubuntu">
                    Disclaimer: Results, earnings, and transformations shared on this site are based on genuine student work and commitment. Individual outcomes vary depending on dedication, skill execution, and market conditions.
                </p>
            </div>
        </div>
    </footer>

    <!-- ======================================================== -->
    <!-- 13. INTERACTIVE VIDEO MODAL -->
    <!-- ======================================================== -->
    <div id="video-modal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative w-full max-w-4xl bg-black rounded-2xl overflow-hidden shadow-2xl border border-gray-800">
            <button id="close-video-btn" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/20 hover:bg-white text-white hover:text-black flex items-center justify-center transition" aria-label="Close Video">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <div class="aspect-video w-full">
                <iframe id="modal-video-iframe" class="w-full h-full" src="" title="Osman Gani Welcome Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- ======================================================== -->
    <!-- 14. CLIENT SCRIPTS (Navigation, Video Modal, Form) -->
    <!-- ======================================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Video Modal Handlers
            const openVideoBtn = document.getElementById('open-video-btn');
            const closeVideoBtn = document.getElementById('close-video-btn');
            const videoModal = document.getElementById('video-modal');
            const videoIframe = document.getElementById('modal-video-iframe');

            const videoUrl = "https://www.youtube.com/embed/8GExpo8Y2gQ?autoplay=1";

            if (openVideoBtn && videoModal && videoIframe) {
                openVideoBtn.addEventListener('click', function () {
                    videoIframe.src = videoUrl;
                    videoModal.classList.remove('hidden');
                });
            }

            if (closeVideoBtn && videoModal && videoIframe) {
                closeVideoBtn.addEventListener('click', function () {
                    videoIframe.src = "";
                    videoModal.classList.add('hidden');
                });
            }

            if (videoModal && videoIframe) {
                videoModal.addEventListener('click', function (e) {
                    if (e.target === videoModal) {
                        videoIframe.src = "";
                        videoModal.classList.add('hidden');
                    }
                });
            }

            // Newsletter / Lead Magnet Form Submission
            const leadForm = document.getElementById('lead-form');
            const formSuccess = document.getElementById('form-success');

            if (leadForm && formSuccess) {
                leadForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    leadForm.reset();
                    formSuccess.classList.remove('hidden');
                    setTimeout(() => {
                        formSuccess.classList.add('hidden');
                    }, 5000);
                });
            }
        });
    </script>
</body>
</html>
