<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media &amp; Events | Osman Gani - Keynote Moments, Awards &amp; Press</title>
    <meta name="description" content="Explore media features, national press coverage, prestigious awards, stadium conventions, and book launch events of Osman Gani.">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Media &amp; Events | Osman Gani">
    <meta property="og:description" content="Prestigious honors, media highlights, and keynote moments from stadium conventions worldwide.">
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
                <a href="{{ route('home') }}#newsletter" class="hidden sm:inline-flex items-center gap-1.5 text-xs text-amber-400 font-medium hover:text-amber-300 transition">
                    <i class="fa-solid fa-gift"></i>
                    <span>Claim Free Masterclass</span>
                </a>
                <a href="{{ route('home') }}#courses" class="inline-flex items-center gap-1.5 bg-white text-black hover:bg-[#df3243] hover:text-white px-3.5 py-1 rounded-full text-xs font-semibold uppercase tracking-wider transition-all duration-200 shadow-sm">
                    <span>Student Login</span>
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
                    
                    <!-- ABOUT Dropdown (Active for Media & Events) -->
                    <div class="relative group">
                        <button class="text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>ABOUT</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-[#df3243] group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-56 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('about.osman-gani') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition">OSMAN GANI</a>
                            <a href="{{ route('about.media-events') }}" class="block px-4 py-2.5 text-xs font-semibold text-[#df3243] bg-red-50 hover:bg-red-100 transition">MEDIA &amp; EVENTS</a>
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
                <a href="{{ route('about.media-events') }}" class="text-[#df3243] py-1 border-b border-gray-800/60">MEDIA &amp; EVENTS</a>
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
    <!-- 3. PAGE HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-br from-[#050608] via-[#0e121d] to-[#050608] text-white pt-16 pb-20 overflow-hidden border-b border-gray-800 text-center">
        <!-- Ambient Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#df3243]/15 rounded-full blur-[130px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-5">
            <!-- Breadcrumbs -->
            <div class="inline-flex items-center gap-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-gray-600"></i>
                <span class="text-gray-400">About</span>
                <i class="fa-solid fa-chevron-right text-[9px] text-gray-600"></i>
                <span class="text-[#df3243]">Media &amp; Events</span>
            </div>

            <div class="space-y-3 max-w-3xl mx-auto">
                <span class="inline-block px-3.5 py-1 rounded-full bg-red-600/20 text-red-400 border border-red-500/30 text-xs font-bold uppercase tracking-wider">
                    Gallery &amp; Press Room
                </span>
                <h1 class="font-oswald text-4xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-white leading-tight">
                    Media <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b81] to-[#ff8421]">And Events</span>
                </h1>
                <p class="font-ubuntu text-base sm:text-lg text-gray-300 font-light leading-relaxed">
                    Celebrating national honors, international press coverage, stadium keynotes, author book launch ceremonies, and high-impact corporate retreats.
                </p>
            </div>

            <!-- Quick Metrics Row -->
            <div class="pt-6 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                    <div class="font-oswald text-3xl font-extrabold text-[#ff8421]">50+</div>
                    <div class="text-xs text-gray-300 font-ubuntu">Awards &amp; Honors</div>
                </div>
                <div class="bg-white/5 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                    <div class="font-oswald text-3xl font-extrabold text-white">500+</div>
                    <div class="text-xs text-gray-300 font-ubuntu">Keynote Events</div>
                </div>
                <div class="bg-white/5 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                    <div class="font-oswald text-3xl font-extrabold text-[#df3243]">100+</div>
                    <div class="text-xs text-gray-300 font-ubuntu">Press Publications</div>
                </div>
                <div class="bg-white/5 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                    <div class="font-oswald text-3xl font-extrabold text-amber-400">1B+</div>
                    <div class="text-xs text-gray-300 font-ubuntu">Media Impressions</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================================================== -->
    <!-- 4. CATEGORY FILTER TABS -->
    <!-- ======================================================== -->
    <section class="bg-white border-b border-gray-200 sticky top-20 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 overflow-x-auto">
            <div class="flex items-center justify-start md:justify-center gap-2 min-w-max">
                <button class="filter-btn active-filter px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider transition duration-200" data-filter="all">
                    ALL MOMENTS
                </button>
                <button class="filter-btn px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider text-gray-600 hover:text-black hover:bg-gray-100 transition duration-200" data-filter="awards">
                    <i class="fa-solid fa-trophy mr-1 text-[#ff8421]"></i> AWARDS
                </button>
                <button class="filter-btn px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider text-gray-600 hover:text-black hover:bg-gray-100 transition duration-200" data-filter="press">
                    <i class="fa-solid fa-newspaper mr-1 text-[#df3243]"></i> PRESS &amp; NEWS
                </button>
                <button class="filter-btn px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider text-gray-600 hover:text-black hover:bg-gray-100 transition duration-200" data-filter="stadiums">
                    <i class="fa-solid fa-users mr-1 text-blue-600"></i> STADIUM EVENTS
                </button>
                <button class="filter-btn px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider text-gray-600 hover:text-black hover:bg-gray-100 transition duration-200" data-filter="corporate">
                    <i class="fa-solid fa-briefcase mr-1 text-purple-600"></i> CORPORATE
                </button>
                <button class="filter-btn px-4 py-2 rounded-full font-oswald text-sm font-semibold tracking-wider text-gray-600 hover:text-black hover:bg-gray-100 transition duration-200" data-filter="books">
                    <i class="fa-solid fa-book mr-1 text-emerald-600"></i> BOOK LAUNCHES
                </button>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 5. FEATURED AWARDS & HONORS SHOWCASE (deepakbajaj.biz style) -->
    <!-- ======================================================== -->
    <section id="sec-awards" class="py-16 bg-gradient-to-b from-gray-50 to-white border-b border-gray-200 gallery-section" data-category="awards">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-center justify-between mb-10 border-b border-gray-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Recognitions</span>
                    <h2 class="font-oswald text-3xl sm:text-4xl font-extrabold uppercase text-gray-950">
                        Prestigious Awards &amp; Industry Honors
                    </h2>
                </div>
                <div class="hidden sm:flex items-center gap-2 text-amber-500 text-xl">
                    <i class="fa-solid fa-award"></i>
                    <i class="fa-solid fa-trophy"></i>
                    <i class="fa-solid fa-medal"></i>
                </div>
            </div>

            <!-- Awards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Award 1 -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="bg-gradient-to-br from-amber-500 to-amber-700 rounded-xl p-6 text-white text-center aspect-[16/10] flex flex-col justify-center items-center shadow-md relative overflow-hidden group-hover:scale-102 transition">
                            <i class="fa-solid fa-trophy text-5xl text-amber-200 mb-2"></i>
                            <span class="font-oswald text-xl font-bold uppercase tracking-wide">Trainer &amp; Coach of the Year</span>
                            <span class="text-xs text-amber-100 font-semibold mt-1">National Leadership Conclave</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900 group-hover:text-[#df3243] transition">
                            Best Entrepreneurship Trainer &amp; Coach
                        </h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            Conferred by leading corporate apex bodies in recognition of pioneering transformative business multiplication frameworks.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                        <span>Conferred in New Delhi</span>
                        <span class="font-bold text-[#df3243]">National Award</span>
                    </div>
                </div>

                <!-- Award 2 -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="bg-gradient-to-br from-red-600 to-rose-800 rounded-xl p-6 text-white text-center aspect-[16/10] flex flex-col justify-center items-center shadow-md relative overflow-hidden group-hover:scale-102 transition">
                            <i class="fa-solid fa-award text-5xl text-red-200 mb-2"></i>
                            <span class="font-oswald text-xl font-bold uppercase tracking-wide">Top Elite Authors Award</span>
                            <span class="text-xs text-red-100 font-semibold mt-1">Global Book Council</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900 group-hover:text-[#df3243] transition">
                            Recognized Among Top Elite Authors of the World
                        </h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            For authoring 5 bestselling titles translated into 9 languages with over 500,000+ copies sold worldwide.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                        <span>Literary Excellence</span>
                        <span class="font-bold text-[#df3243]">Global Edition</span>
                    </div>
                </div>

                <!-- Award 3 -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-xl hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="bg-gradient-to-br from-indigo-800 to-purple-900 rounded-xl p-6 text-white text-center aspect-[16/10] flex flex-col justify-center items-center shadow-md relative overflow-hidden group-hover:scale-102 transition">
                            <i class="fa-solid fa-medal text-5xl text-purple-200 mb-2"></i>
                            <span class="font-oswald text-xl font-bold uppercase tracking-wide">Top 5 Industry Contributors</span>
                            <span class="text-xs text-purple-100 font-semibold mt-1">National Association Summit</span>
                        </div>
                        <h3 class="font-oswald text-xl font-bold text-gray-900 group-hover:text-[#df3243] transition">
                            Top Direct Sales &amp; Business Contributor
                        </h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            Honored for mentoring over 500,000+ professionals to achieve financial autonomy and leadership excellence.
                        </p>
                    </div>
                    <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                        <span>Presented by Ministers</span>
                        <span class="font-bold text-[#df3243]">Lifetime Impact</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 6. PRESS & NEWSPAPER COVERAGE GALLERY (deepakbajaj.biz style) -->
    <!-- ======================================================== -->
    <section id="sec-press" class="py-16 bg-white border-b border-gray-200 gallery-section" data-category="press">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-center justify-between mb-10 border-b border-gray-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Media Clippings</span>
                    <h2 class="font-oswald text-3xl sm:text-4xl font-extrabold uppercase text-gray-950">
                        Press &amp; National Publications
                    </h2>
                </div>
                <div class="hidden sm:flex items-center gap-2 text-gray-400 font-oswald text-sm font-bold uppercase">
                    <span>Forbes • Hindustan Times • Punjab Kesari • Zee News</span>
                </div>
            </div>

            <!-- Press Articles Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Press 1 -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-5 shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="bg-gray-900 text-white rounded-xl p-4 aspect-[4/3] flex flex-col justify-between relative overflow-hidden">
                            <span class="text-[10px] font-bold text-[#df3243] uppercase tracking-wider bg-black/40 px-2 py-0.5 rounded w-fit">Hindustan Times</span>
                            <div class="font-oswald text-lg font-bold leading-tight">
                                "Osman Gani Empowering Millions with New Age Mindset"
                            </div>
                            <span class="text-[11px] text-gray-400">Front Page Feature</span>
                        </div>
                        <h4 class="font-oswald text-base font-bold text-gray-900">National Daily Feature</h4>
                        <p class="text-xs text-gray-600 font-ubuntu">
                            Detailed editorial on how Osman's frameworks are reshaping corporate sales.
                        </p>
                    </div>
                </div>

                <!-- Press 2 -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-5 shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="bg-gray-900 text-white rounded-xl p-4 aspect-[4/3] flex flex-col justify-between relative overflow-hidden">
                            <span class="text-[10px] font-bold text-amber-400 uppercase tracking-wider bg-black/40 px-2 py-0.5 rounded w-fit">Punjab Kesari</span>
                            <div class="font-oswald text-lg font-bold leading-tight">
                                "3rd Bestselling Book Breaks All Record Sales"
                            </div>
                            <span class="text-[11px] text-gray-400">Literary Spotlight</span>
                        </div>
                        <h4 class="font-oswald text-base font-bold text-gray-900">Book Launch Release</h4>
                        <p class="text-xs text-gray-600 font-ubuntu">
                            Massive reader turnout celebrating the multi-lingual release.
                        </p>
                    </div>
                </div>

                <!-- Press 3 -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-5 shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="bg-gray-900 text-white rounded-xl p-4 aspect-[4/3] flex flex-col justify-between relative overflow-hidden">
                            <span class="text-[10px] font-bold text-rose-400 uppercase tracking-wider bg-black/40 px-2 py-0.5 rounded w-fit">TEDx Official</span>
                            <div class="font-oswald text-lg font-bold leading-tight">
                                "Unlocking The Warrior Spirit In The AI Era"
                            </div>
                            <span class="text-[11px] text-gray-400">Keynote Address</span>
                        </div>
                        <h4 class="font-oswald text-base font-bold text-gray-900">TEDx Keynote Coverage</h4>
                        <p class="text-xs text-gray-600 font-ubuntu">
                            Standing ovation talk on cognitive rewiring and peak resilience.
                        </p>
                    </div>
                </div>

                <!-- Press 4 -->
                <div class="bg-gray-50 rounded-2xl border border-gray-200 p-5 shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-3">
                        <div class="bg-gray-900 text-white rounded-xl p-4 aspect-[4/3] flex flex-col justify-between relative overflow-hidden">
                            <span class="text-[10px] font-bold text-cyan-400 uppercase tracking-wider bg-black/40 px-2 py-0.5 rounded w-fit">Industry Today</span>
                            <div class="font-oswald text-lg font-bold leading-tight">
                                "Special Cover Story: The Architect of Modern Sales"
                            </div>
                            <span class="text-[11px] text-gray-400">Monthly Edition</span>
                        </div>
                        <h4 class="font-oswald text-base font-bold text-gray-900">Cover Story Special</h4>
                        <p class="text-xs text-gray-600 font-ubuntu">
                            Comprehensive 8-page interview on future business trends.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 7. MEGA STADIUM & PUBLIC CONVENTIONS (deepakbajaj.biz style) -->
    <!-- ======================================================== -->
    <section id="sec-stadiums" class="py-16 bg-gray-900 text-white border-b border-gray-800 gallery-section" data-category="stadiums">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-center justify-between mb-10 border-b border-gray-800 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#ff8421]">Arena Keynotes</span>
                    <h2 class="font-oswald text-3xl sm:text-4xl font-extrabold uppercase text-white">
                        Mega Stadiums &amp; Live Conventions
                    </h2>
                </div>
                <div class="hidden sm:flex items-center gap-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                    <i class="fa-solid fa-users text-[#df3243]"></i>
                    <span>20,000+ Live Attendees Per Arena</span>
                </div>
            </div>

            <!-- Stadium Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-[#121520] rounded-2xl border border-white/10 p-6 shadow-2xl hover:border-red-500/40 transition duration-300 space-y-4">
                    <div class="relative bg-gradient-to-br from-red-950 via-gray-900 to-black rounded-xl aspect-[16/10] p-6 flex flex-col justify-between overflow-hidden">
                        <span class="bg-[#df3243] text-white text-[10px] font-bold uppercase px-2.5 py-0.5 rounded-full w-fit">Delhi Stadium</span>
                        <div>
                            <div class="font-oswald text-2xl font-bold uppercase text-white">Mega Annual Conclave</div>
                            <div class="text-xs text-gray-300">18,500 Attendees in Full Electrifying Energy</div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 font-ubuntu">
                        A 3-day transformational immersion taking delegates through extreme breakthrough firewalks and identity transformation.
                    </p>
                </div>

                <div class="bg-[#121520] rounded-2xl border border-white/10 p-6 shadow-2xl hover:border-red-500/40 transition duration-300 space-y-4">
                    <div class="relative bg-gradient-to-br from-amber-950 via-gray-900 to-black rounded-xl aspect-[16/10] p-6 flex flex-col justify-between overflow-hidden">
                        <span class="bg-[#ff8421] text-white text-[10px] font-bold uppercase px-2.5 py-0.5 rounded-full w-fit">Mumbai Indoor Arena</span>
                        <div>
                            <div class="font-oswald text-2xl font-bold uppercase text-white">Unleash The Champion</div>
                            <div class="text-xs text-gray-300">22,000+ Young Leaders &amp; Founders</div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 font-ubuntu">
                        Power-packed session on unlocking unstoppable inner grit, personal mastery, and exponential business growth.
                    </p>
                </div>

                <div class="bg-[#121520] rounded-2xl border border-white/10 p-6 shadow-2xl hover:border-red-500/40 transition duration-300 space-y-4">
                    <div class="relative bg-gradient-to-br from-blue-950 via-gray-900 to-black rounded-xl aspect-[16/10] p-6 flex flex-col justify-between overflow-hidden">
                        <span class="bg-blue-600 text-white text-[10px] font-bold uppercase px-2.5 py-0.5 rounded-full w-fit">Bangkok International</span>
                        <div>
                            <div class="font-oswald text-2xl font-bold uppercase text-white">Asia-Pacific Summit</div>
                            <div class="text-xs text-gray-300">Delegates from 25+ Nations</div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 font-ubuntu">
                        Global keynote delivered in English on creating multi-generational wealth and international business expansion.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 8. CORPORATE TRAININGS & BOOK LAUNCH CEREMONIES -->
    <!-- ======================================================== -->
    <section id="sec-corporate" class="py-16 bg-white border-b border-gray-200 gallery-section" data-category="corporate">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid lg:grid-cols-2 gap-12">
                
                <!-- Corporate Trainings Column -->
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-3">
                        <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">B2B Excellence</span>
                        <h3 class="font-oswald text-3xl font-extrabold uppercase text-gray-950">Corporate Leadership Summits</h3>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200 flex items-start gap-4 hover:border-[#df3243] transition">
                            <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center text-[#df3243] text-xl font-bold flex-shrink-0">
                                <i class="fa-solid fa-building-user"></i>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-gray-900">Executive Leadership Retreats</h4>
                                <p class="text-xs text-gray-600 font-ubuntu mt-1">
                                    Intensive 2-day alignment workshops for C-suite executives, VP leaders, and department heads.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200 flex items-start gap-4 hover:border-[#df3243] transition">
                            <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center text-[#ff8421] text-xl font-bold flex-shrink-0">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-gray-900">Sales Multiplication Bootcamps</h4>
                                <p class="text-xs text-gray-600 font-ubuntu mt-1">
                                    Equipping national sales forces with psychological closing formulas and objection mastery.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200 flex items-start gap-4 hover:border-[#df3243] transition">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 text-xl font-bold flex-shrink-0">
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div>
                                <h4 class="font-oswald text-lg font-bold text-gray-900">Public Speaking &amp; Persuasion</h4>
                                <p class="text-xs text-gray-600 font-ubuntu mt-1">
                                    Transforming corporate spokespersons and founders into charismatic, high-impact communicators.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book Launch Column (data-category="books") -->
                <div id="sec-books" class="space-y-6 gallery-section" data-category="books">
                    <div class="border-b border-gray-200 pb-3">
                        <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Author Moments</span>
                        <h3 class="font-oswald text-3xl font-extrabold uppercase text-gray-950">Book Launches &amp; VIP Signings</h3>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gradient-to-br from-gray-900 to-black text-white rounded-2xl p-6 border border-gray-800 space-y-3">
                            <div class="flex items-center justify-between text-amber-400 text-xs font-bold uppercase">
                                <span>National Grand Launch</span>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h4 class="font-oswald text-xl font-bold">"Achieve More Every Day" Launch Ceremony</h4>
                            <p class="text-xs text-gray-300 font-ubuntu">
                                Unveiled in the presence of Union Ministers, Celebrity CEOs, and thousands of eager readers in New Delhi.
                            </p>
                        </div>

                        <div class="bg-gradient-to-br from-red-950 to-black text-white rounded-2xl p-6 border border-gray-800 space-y-3">
                            <div class="flex items-center justify-between text-red-400 text-xs font-bold uppercase">
                                <span>9-Language Tour</span>
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h4 class="font-oswald text-xl font-bold">"Social Media Millionaire" Global Tour</h4>
                            <p class="text-xs text-gray-300 font-ubuntu">
                                Multi-city book tours across Kolkata, Mumbai, Dhaka, Dubai, and Singapore with live masterclasses.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 9. CALL TO ACTION / MEDIA INQUIRIES & PRESS KIT -->
    <!-- ======================================================== -->
    <section class="py-20 bg-gradient-to-r from-red-700 via-rose-800 to-red-950 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md text-amber-300 text-xs font-bold uppercase tracking-wider border border-white/20">
                Press &amp; Event Booking Inquiries
            </span>
            <h2 class="font-oswald text-3xl sm:text-4xl md:text-5xl font-extrabold uppercase tracking-tight">
                Invite Osman Gani For Your Next Big Event
            </h2>
            <p class="font-ubuntu text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
                Connect directly with our Media &amp; Keynote Management desk to discuss conference dates, TV/Podcast appearances, or corporate masterclasses.
            </p>
            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <a href="tel:+8801700000000" class="btn-pill-filled-red text-lg px-8 py-3.5 bg-amber-400 hover:bg-amber-300 text-gray-950 border-amber-400 shadow-2xl">
                    <i class="fa-solid fa-phone"></i> Call +880 1700-000000
                </a>
                <a href="https://api.whatsapp.com/send?phone=8801700000000" target="_blank" class="inline-flex items-center gap-2 font-oswald font-medium text-lg px-8 py-3.5 rounded-full border-2 border-white/40 hover:border-white text-white hover:bg-white/10 transition">
                    <i class="fa-brands fa-whatsapp text-emerald-400"></i> WhatsApp Us
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 10. COMPREHENSIVE FOOTER (Deep Black with Red/Gold Accents) -->
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
                        <li><a href="{{ route('about.osman-gani') }}" class="hover:text-white transition block py-1">About Osman Gani</a></li>
                        <li><a href="{{ route('about.media-events') }}" class="text-[#df3243] font-semibold block py-1">Media &amp; Press Events</a></li>
                        <li><a href="{{ route('about.life-mission') }}" class="hover:text-white transition block py-1">Life Mission &amp; Vision</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-white transition block py-1">Speaking &amp; Keynotes</a></li>
                        <li><a href="{{ route('about.osman-gani') }}#testimonials" class="hover:text-white transition block py-1">Client Testimonials &amp; Success</a></li>
                    </ul>
                </div>

                <!-- Col 3: Programs & Books -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Programs &amp; Books</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('books') }}" class="hover:text-white transition block py-1">Bestselling Books</a></li>
                        <li><a href="{{ route('courses') }}" class="hover:text-white transition block py-1">All Online Masterclasses</a></li>
                        <li><a href="{{ route('courses') }}#course-ai" class="hover:text-white transition block py-1">AI Mastery Program</a></li>
                        <li><a href="{{ route('courses') }}#course-sm" class="hover:text-white transition block py-1">Social Media Accelerator</a></li>
                        <li><a href="{{ route('events') }}" class="hover:text-white transition block py-1">Train The Trainer Bootcamp</a></li>
                        <li><a href="{{ route('events') }}#unleash-champion" class="hover:text-white transition block py-1">Executive 1-on-1 Mentorship</a></li>
                    </ul>
                </div>

                <!-- Col 4: Quick Links & Legal -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Resources &amp; Support</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('resources.free-videos') }}" class="hover:text-white transition block py-1">Free Video Library</a></li>
                        <li><a href="{{ route('resources.ebooks') }}" class="hover:text-white transition block py-1">Free E-Books &amp; Guides</a></li>
                        <li><a href="{{ route('resources.tools') }}" class="hover:text-white transition block py-1">Productivity &amp; Growth Tools</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="hover:text-white transition block py-1">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-of-usage') }}" class="hover:text-white transition block py-1">Terms of Service</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition block py-1">Contact Office</a></li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright & Disclaimer -->
            <div class="pt-8 border-t border-gray-800/80 text-center space-y-3">
                <p class="text-xs text-gray-500 font-ubuntu">
                    © {{ date('Y') }} Osman Gani. All Rights Reserved. Built with excellence.
                </p>
            </div>
        </div>
    </footer>

    <!-- ======================================================== -->
    <!-- 11. CLIENT SCRIPTS (Filter tabs, Mobile menu) -->
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

            // Category Filter Buttons
            const filterBtns = document.querySelectorAll('.filter-btn');
            const gallerySections = document.querySelectorAll('.gallery-section');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    filterBtns.forEach(b => {
                        b.classList.remove('active-filter', 'bg-[#df3243]', 'text-white');
                        b.classList.add('text-gray-600');
                    });

                    this.classList.add('active-filter', 'bg-[#df3243]', 'text-white');
                    this.classList.remove('text-gray-600');

                    const filter = this.getAttribute('data-filter');

                    gallerySections.forEach(section => {
                        const category = section.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });
                });
            });

            // Set initial filter active style
            const defaultFilterBtn = document.querySelector('.filter-btn[data-filter="all"]');
            if (defaultFilterBtn) {
                defaultFilterBtn.classList.add('bg-[#df3243]', 'text-white');
            }
        });
    </script>
</body>
</html>
