<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Osman Gani | Life &amp; Business Transformation Coach, Bestselling Author</title>
    <meta name="description" content="Learn about Osman Gani - Bestselling Author, Motivational Speaker, Corporate Trainer, and Life & Business Transformation Coach with 15+ years of global experience.">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="About Osman Gani | Author, Speaker & Coach">
    <meta property="og:description" content="A master of personal and business breakthrough with 15+ years of empowering 500K+ individuals across 50+ countries.">
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
                    
                    <!-- ABOUT Dropdown (Active) -->
                    <div class="relative group">
                        <button class="text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition">
                            <span>ABOUT</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-[#df3243] group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-56 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('about.osman-gani') }}" class="block px-4 py-2.5 text-xs font-semibold text-[#df3243] bg-red-50 hover:bg-red-100 transition">OSMAN GANI</a>
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
                <a href="{{ route('about.osman-gani') }}" class="text-[#df3243] py-1 border-b border-gray-800/60">ABOUT OSMAN GANI</a>
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
    <!-- 3. PAGE HERO BANNER WITH CURVED BOTTOM (deepakbajaj.biz style) -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-br from-[#06070a] via-[#10141f] to-[#06070a] text-white pt-16 pb-24 overflow-hidden border-b border-gray-800">
        <!-- Ambient Glow -->
        <div class="absolute -top-10 left-1/3 w-[500px] h-[300px] bg-[#df3243]/20 rounded-full blur-[130px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-2 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-gray-600"></i>
                <span class="text-gray-400">About</span>
                <i class="fa-solid fa-chevron-right text-[9px] text-gray-600"></i>
                <span class="text-[#df3243]">Osman Gani</span>
            </div>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3.5 py-1 rounded-full bg-red-600/20 text-red-400 border border-red-500/30 text-xs font-bold uppercase tracking-wider">
                    Author • Speaker • Transformation Coach
                </span>
                <h1 class="font-oswald text-4xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-white leading-tight">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b81] to-[#ff8421]">Osman Gani</span>
                </h1>
                <p class="font-ubuntu text-base sm:text-lg text-gray-300 font-light leading-relaxed">
                    A transformative journey of relentless resilience, human potential, leadership mastery, and touching over 500,000+ lives globally.
                </p>
            </div>
        </div>

        <!-- Curved Bottom Divider SVG -->
        <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none z-10">
            <svg class="relative block w-full h-8 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,60 C650,160 900,10 1200,40 L1200,120 L0,120 Z" fill="currentColor"></path>
            </svg>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 4. DETAILED BIOGRAPHY & STORY (Deepak Bajaj Style Split) -->
    <!-- ======================================================== -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Row 1: Intro & Portrait Card -->
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Details -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="space-y-3">
                        <h2 class="font-oswald text-4xl sm:text-5xl font-black text-gray-950 uppercase tracking-tight">
                            OSMAN GANI
                        </h2>
                        
                        <!-- Red Left Border Tagline matching deepakbajaj.biz -->
                        <div class="border-l-4 border-[#df3243] pl-5 py-1">
                            <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 leading-snug">
                                Life &amp; Business Transformation Coach<br>
                                <span class="text-[#df3243]">Bestselling Author – 5+ Books in 9 Languages</span><br>
                                Motivational Speaker &amp; Corporate Trainer
                            </h3>
                        </div>
                    </div>

                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        A master of personal and business breakthrough, <strong>Osman Gani</strong> has been on an unwavering mission to inspire, educate, and empower people to achieve the highest version of themselves for over 15+ years.
                    </p>
                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        Countless individuals and corporate teams across <strong>50+ countries</strong> have accelerated their success with his bestselling books, live stadium events, keynote addresses, online courses, and executive masterminds. He is recognized among the most awarded coaches in the industry, with his digital content surpassing <strong>1+ billion views</strong> across social media platforms.
                    </p>
                </div>

                <!-- Right Profile Highlight Badge Card -->
                <div class="lg:col-span-5">
                    <div class="relative max-w-md mx-auto bg-gradient-to-b from-gray-900 to-black text-white p-8 rounded-3xl border-2 border-red-500/20 shadow-2xl text-center space-y-5">
                        
                        <div class="w-36 h-36 mx-auto rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-1.5 shadow-2xl shadow-red-950/80">
                            <div class="w-full h-full rounded-full bg-[#121520] flex items-center justify-center text-white font-oswald text-5xl font-black">
                                OG
                            </div>
                        </div>

                        <div class="space-y-1">
                            <h4 class="font-oswald text-2xl font-bold text-white tracking-wide">OSMAN GANI</h4>
                            <p class="text-xs text-amber-400 font-semibold uppercase tracking-wider">Motivational Speaker • Trainer • Author</p>
                        </div>

                        <div class="pt-2 pb-1 border-t border-white/10 space-y-2 text-xs text-gray-300">
                            <div class="flex items-center justify-center gap-2">
                                <i class="fa-solid fa-phone text-[#df3243]"></i>
                                <span class="font-semibold text-white">Direct Hotline: +880 1700-000000</span>
                            </div>
                            <div class="flex items-center justify-center gap-2">
                                <i class="fa-solid fa-envelope text-[#df3243]"></i>
                                <span>support@osmangani.biz</span>
                            </div>
                        </div>

                        <a href="{{ route('home') }}#speaking" class="btn-pill-filled-red w-full text-center justify-center text-base">
                            Invite Osman for Event <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Row 2: Origin & Upbringing Story -->
            <div class="grid lg:grid-cols-12 gap-12 items-center pt-8 border-t border-gray-100">
                
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-red-900 via-gray-900 to-black rounded-3xl p-8 text-white shadow-xl aspect-[4/3] flex flex-col justify-between border border-red-500/20">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-widest text-amber-400">The Humble Beginning</span>
                            <i class="fa-solid fa-seedling text-2xl text-emerald-400"></i>
                        </div>
                        <div class="space-y-2">
                            <div class="font-oswald text-3xl font-bold uppercase">From Adversity to Authority</div>
                            <p class="text-xs text-gray-300 leading-relaxed font-ubuntu">
                                Facing steep financial hardships and educational limitations, Osman proved that belief, relentless work ethic, and clarity can rewrite any destiny.
                            </p>
                        </div>
                        <div class="text-[11px] text-gray-400 font-semibold uppercase tracking-wider">
                            #OvercomingHurdles • #UnstoppableSpirit
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2 space-y-4">
                    <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase">
                        From Ground Zero to Global Impact
                    </h3>
                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        Born with limited financial resources and educated in humble institutions, Osman faced severe monetary and emotional hurdles during his early years. Rather than surrendering to circumstance, he completed his higher studies through merit scholarships, self-funded education, and burning determination.
                    </p>
                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        He embraced every setback as a stepping stone to master human psychology, sales leadership, and high-performance execution — rising to become a multi-million dollar business builder, internationally acclaimed keynote trainer, and trusted counselor to thousands of leaders.
                    </p>
                </div>

            </div>

            <!-- Row 3: Psychology & Corporate Expertise -->
            <div class="grid lg:grid-cols-12 gap-12 items-center pt-8 border-t border-gray-100">
                
                <div class="lg:col-span-7 space-y-4">
                    <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase">
                        Success Psychology &amp; Behavioral Transformation
                    </h3>
                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        Osman is a regular keynote speaker at annual corporate conventions, international leadership summits, universities, and industry conferences. His unique blend of corporate discipline, business scaling acumen, and deep immersion with world-class masters makes every keynote unforgettable.
                    </p>
                    <p class="font-ubuntu text-base sm:text-lg text-gray-700 leading-relaxed font-light">
                        Unlike traditional theoretical speakers, Osman operates at the intersection of <strong>emotional rewire, cognitive habit loops, and practical execution frameworks</strong>. He doesn’t just teach tactics — he shifts identity, dismantles self-limiting beliefs, and produces instant behavioral breakthroughs with measurable ROI.
                    </p>
                </div>

                <div class="lg:col-span-5">
                    <div class="bg-gradient-to-br from-gray-900 via-indigo-950 to-black rounded-3xl p-8 text-white shadow-xl aspect-[4/3] flex flex-col justify-between border border-blue-500/20">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400">Peak Performance</span>
                            <i class="fa-solid fa-brain text-2xl text-cyan-400"></i>
                        </div>
                        <div class="space-y-2">
                            <div class="font-oswald text-3xl font-bold uppercase">Proven Behavioral Systems</div>
                            <p class="text-xs text-gray-300 leading-relaxed font-ubuntu">
                                Working deeply on human belief architecture to replace fear, hesitation, and self-doubt with decisive leadership and relentless momentum.
                            </p>
                        </div>
                        <div class="text-[11px] text-gray-400 font-semibold uppercase tracking-wider">
                            #LeadershipMindset • #PeakPerformance
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 5. WHAT MAKES OSMAN THE 1ST CHOICE (7 Key Factors) -->
    <!-- ======================================================== -->
    <section class="py-20 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Stylized Badge Graphic -->
                <div class="lg:col-span-5 text-center lg:text-left">
                    <div class="bg-white rounded-3xl p-8 border border-gray-200 shadow-xl space-y-6">
                        <div class="w-24 h-24 mx-auto lg:mx-0 rounded-2xl bg-gradient-to-tr from-[#df3243] to-[#ff8421] text-white flex items-center justify-center text-4xl shadow-lg">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="space-y-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Unrivaled Credentials</span>
                            <h3 class="font-oswald text-3xl sm:text-4xl font-black text-gray-900 leading-tight">
                                Delivering Guaranteed Transformation
                            </h3>
                            <p class="font-ubuntu text-sm text-gray-600">
                                When organizations want real audience engagement, high energy, and permanent performance upgrades, Osman Gani is their definitive choice.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-semibold">
                            <span>15+ Years Track Record</span>
                            <span class="text-[#df3243] font-bold">500,000+ Alumni</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 7 Bullets with Double Red Arrows -->
                <div class="lg:col-span-7 space-y-6">
                    <h2 class="font-oswald text-2xl sm:text-4xl font-extrabold text-gray-950 uppercase">
                        What Makes Osman The 1st Choice For Any Training Events?
                    </h2>

                    <div class="space-y-4 font-ubuntu text-sm sm:text-base text-gray-700">
                        
                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">15+ Years of Proven Training Experience</strong> in Sales Multiplication, Executive Leadership, Success Psychology, and Time Mastery.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">Trained Over 500,000+ People</strong> across 50+ countries through stadium conventions, bootcamps, and virtual summits.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">1+ Billion Views</strong> on digital media and social channels, creating a loyal global community of high achievers.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">Best Leadership &amp; Business Coach of the Year</strong> award recipient at premier corporate forums.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">Keynote Speaker &amp; Guest Lecturer</strong> at top universities, management institutes, and corporate summits.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">#1 Bestselling Author of 5+ Books</strong> translated into 9 languages with over 500,000+ print copies sold.
                            </div>
                        </div>

                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:border-[#df3243] transition">
                            <i class="fa-solid fa-angles-right text-[#df3243] text-lg mt-0.5"></i>
                            <div>
                                <strong class="text-gray-950 font-bold">Trusted Strategic Advisor</strong> to emerging startups, direct sales enterprises, and Fortune 500 leadership circles.
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 6. MOMENTS OF IMPACT & KEYNOTE HIGHLIGHTS GALLERY -->
    <!-- ======================================================== -->
    <section class="py-20 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Moments of Global Impact</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold uppercase text-gray-950">
                    Empowering Audiences Worldwide
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <!-- 4 Column Impact Highlights -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-xl group border border-gray-800">
                    <div class="p-6 bg-gradient-to-br from-red-900 to-black text-white aspect-[4/3] flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-red-400">
                            <i class="fa-solid fa-users-viewfinder text-lg"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="font-oswald text-2xl font-bold uppercase">Stadium Conventions</div>
                            <p class="text-xs text-gray-300">Over 20,000+ live energetic attendees per mega event.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-xl group border border-gray-800">
                    <div class="p-6 bg-gradient-to-br from-amber-900 to-black text-white aspect-[4/3] flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-amber-400">
                            <i class="fa-solid fa-handshake-angle text-lg"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="font-oswald text-2xl font-bold uppercase">Corporate Retreats</div>
                            <p class="text-xs text-gray-300">Executive level team alignment, sales mastery &amp; strategy.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-xl group border border-gray-800">
                    <div class="p-6 bg-gradient-to-br from-indigo-900 to-black text-white aspect-[4/3] flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-cyan-400">
                            <i class="fa-solid fa-book-bookmark text-lg"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="font-oswald text-2xl font-bold uppercase">Author Signings</div>
                            <p class="text-xs text-gray-300">National book release tours &amp; masterclasses.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 rounded-2xl overflow-hidden shadow-xl group border border-gray-800">
                    <div class="p-6 bg-gradient-to-br from-emerald-900 to-black text-white aspect-[4/3] flex flex-col justify-between">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-emerald-400">
                            <i class="fa-solid fa-trophy text-lg"></i>
                        </div>
                        <div class="space-y-1">
                            <div class="font-oswald text-2xl font-bold uppercase">National Awards</div>
                            <p class="text-xs text-gray-300">Recognized by Ministers and global industry titans.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 7. HERE'S HOW OSMAN CAN HELP YOU & YOUR TEAM (5 Pillars) -->
    <!-- ======================================================== -->
    <section class="py-20 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-[#df3243]">Core Solutions</span>
                <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-950 uppercase">
                    Here's How Osman Can Help You &amp; Your Team
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                
                <!-- Pillar 1: Books -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-20 h-28 mx-auto bg-gradient-to-br from-red-600 to-amber-700 rounded-lg shadow-md flex items-center justify-center text-white text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Books</h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            #1 Bestselling books in 9 languages for Total Life, Sales &amp; Business Breakthrough.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#books" class="btn-pill-red w-full text-xs">
                            <span>Order Now</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 2: Speaking -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-20 h-28 mx-auto bg-gradient-to-br from-gray-900 to-red-900 rounded-lg shadow-md flex items-center justify-center text-amber-400 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-microphone-lines"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Speaking</h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            Invite Osman at your next conference or event to empower your team for 10x Results.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#speaking" class="btn-pill-red w-full text-xs">
                            <span>Book Osman</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 3: Courses -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-20 h-28 mx-auto bg-gradient-to-br from-indigo-900 to-purple-900 rounded-lg shadow-md flex items-center justify-center text-cyan-300 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Courses</h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            Learn anytime, anywhere on your mobile from practical, result-oriented masterclasses.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#courses" class="btn-pill-red w-full text-xs">
                            <span>Browse Courses</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 4: Events -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-20 h-28 mx-auto bg-gradient-to-br from-emerald-900 to-teal-900 rounded-lg shadow-md flex items-center justify-center text-emerald-300 text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Events</h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            Attend high-energy live bootcamps and workshops for instant breakthrough and lasting change.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#events" class="btn-pill-red w-full text-xs">
                            <span>Upcoming Events</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Pillar 5: Free Videos -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between text-center group">
                    <div class="space-y-4">
                        <div class="w-20 h-28 mx-auto bg-gradient-to-br from-red-800 to-rose-950 rounded-lg shadow-md flex items-center justify-center text-white text-3xl font-oswald font-bold border-2 border-white">
                            <i class="fa-solid fa-circle-play"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 group-hover:text-[#df3243] transition">Free Videos</h3>
                        <p class="font-ubuntu text-xs text-gray-600 leading-relaxed">
                            1000+ Free video lessons for instant tips, actionable tactics &amp; life growth strategies.
                        </p>
                    </div>
                    <div class="pt-6">
                        <a href="{{ route('home') }}#free-videos" class="btn-pill-red w-full text-xs">
                            <span>Latest Videos</span>
                            <i class="fa-solid fa-angles-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 8. CALL TO ACTION / BOOK OSMAN GANI -->
    <!-- ======================================================== -->
    <section class="py-20 bg-gradient-to-r from-red-700 via-rose-800 to-red-950 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md text-amber-300 text-xs font-bold uppercase tracking-wider border border-white/20">
                Book A High-Impact Keynote
            </span>
            <h2 class="font-oswald text-3xl sm:text-4xl md:text-5xl font-extrabold uppercase tracking-tight">
                Ready to Elevate Your Organization to Peak Performance?
            </h2>
            <p class="font-ubuntu text-base sm:text-lg text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
                Connect directly with Osman Gani's team to check keynote availability for your upcoming annual convention, conference, or corporate retreat.
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
    <!-- 9. COMPREHENSIVE FOOTER (Deep Black with Red/Gold Accents) -->
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
                        <li><a href="{{ route('about.osman-gani') }}" class="text-[#df3243] font-semibold block py-1">About Osman Gani</a></li>
                        <li><a href="{{ route('about.media-events') }}" class="hover:text-white transition block py-1">Media &amp; Press Events</a></li>
                        <li><a href="{{ route('about.life-mission') }}" class="hover:text-white transition block py-1">Life Mission &amp; Vision</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-white transition block py-1">Speaking &amp; Keynotes</a></li>
                        <li><a href="{{ route('about.osman-gani') }}#testimonials" class="hover:text-white transition block py-1">Client Testimonials &amp; Success</a></li>
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
    <!-- 10. CLIENT SCRIPTS -->
    <!-- ======================================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
