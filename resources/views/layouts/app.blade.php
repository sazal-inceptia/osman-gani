<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Osman Gani | Author • Motivational Speaker • Business Coach')</title>
    
    <!-- Meta SEO Tags -->
    <meta name="description" content="@yield('meta_description', 'Osman Gani is a globally renowned author, keynote motivational speaker, and executive business coach helping millions unleash their full potential.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Osman Gani, Motivational Speaker, Bestselling Author, Business Coach, Keynote Speaker, Corporate Trainer')">
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
    @stack('styles')
</head>
<body class="bg-[#050608] text-gray-200 font-ubuntu antialiased selection:bg-[#df3243] selection:text-white flex flex-col min-h-screen">

    <!-- ======================================================== -->
    <!-- 1. TOP UTILITY BAR -->
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

            <!-- Highlights Banner -->
            <div class="text-center md:text-left flex items-center gap-2">
                <span class="bg-[#df3243] text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider animate-pulse">Official Portal</span>
                <span class="font-semibold text-gray-200">
                    Bestselling Books • Live Keynotes • Online Masterclasses
                </span>
            </div>

            <!-- Support Link -->
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
                    
                    <!-- ABOUT Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition {{ request()->routeIs('about.*') ? 'text-[#df3243]' : '' }}">
                            <span>ABOUT</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-56 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('about.osman-gani') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('about.osman-gani') ? 'text-[#df3243] bg-red-50' : '' }}">OSMAN GANI</a>
                            <a href="{{ route('about.media-events') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('about.media-events') ? 'text-[#df3243] bg-red-50' : '' }}">MEDIA &amp; EVENTS</a>
                            <a href="{{ route('about.life-mission') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('about.life-mission') ? 'text-[#df3243] bg-red-50' : '' }}">LIFE MISSION</a>
                        </div>
                    </div>

                    <a href="{{ route('books') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition {{ request()->routeIs('books') ? 'text-[#df3243]' : '' }}">BOOKS</a>
                    <a href="{{ route('speaking') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition {{ request()->routeIs('speaking') ? 'text-[#df3243]' : '' }}">SPEAKING</a>

                    <!-- COURSES Dropdown -->
                    <div class="relative group">
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition {{ request()->routeIs('courses') ? 'text-[#df3243]' : '' }}">
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
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition {{ request()->routeIs('events') ? 'text-[#df3243]' : '' }}">
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
                        <button class="text-white hover:text-[#df3243] py-7 px-3 inline-flex items-center gap-1 transition {{ request()->routeIs('resources.*') ? 'text-[#df3243]' : '' }}">
                            <span>RESOURCES</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:rotate-180 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu-custom absolute left-0 top-full w-60 bg-white rounded-b-xl shadow-2xl border-t-2 border-[#df3243] py-2 z-50">
                            <a href="{{ route('resources.free-videos') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('resources.free-videos') ? 'text-[#df3243] bg-red-50' : '' }}">FREE VIDEO LIBRARY</a>
                            <a href="{{ route('resources.ebooks') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('resources.ebooks') ? 'text-[#df3243] bg-red-50' : '' }}">FREE E-BOOKS &amp; GUIDES</a>
                            <a href="{{ route('resources.tools') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('resources.tools') ? 'text-[#df3243] bg-red-50' : '' }}">PRODUCTIVITY TOOLS</a>
                            <a href="{{ route('resources.blog') }}" class="block px-4 py-2.5 text-xs font-semibold text-gray-800 hover:bg-red-50 hover:text-[#df3243] transition {{ request()->routeIs('resources.blog') ? 'text-[#df3243] bg-red-50' : '' }}">ARTICLES &amp; BLOG</a>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="text-white hover:text-[#df3243] py-7 px-3 transition {{ request()->routeIs('contact') ? 'text-[#df3243]' : '' }}">CONTACT</a>
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

    <!-- Main Content Yield -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- ======================================================== -->
    <!-- FOOTER -->
    <!-- ======================================================== -->
    <footer class="bg-[#000000] text-gray-400 text-sm border-t-2 border-[#df3243] pt-16 pb-12 mt-auto">
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
                        <a href="https://facebook.com" target="_blank" class="social-icon-btn bg-[#3b5998] hover:bg-[#2d4373]" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" class="social-icon-btn bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888]" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://youtube.com" target="_blank" class="social-icon-btn bg-[#c4302b] hover:bg-[#990000]" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://whatsapp.com" target="_blank" class="social-icon-btn bg-[#25d366]" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Col 2: About Us -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">About Us</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('about.osman-gani') }}" class="hover:text-white transition block py-1">About Osman Gani</a></li>
                        <li><a href="{{ route('about.media-events') }}" class="hover:text-white transition block py-1">Media &amp; Press Events</a></li>
                        <li><a href="{{ route('about.life-mission') }}" class="hover:text-white transition block py-1">Life Mission &amp; Vision</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-white transition block py-1">Speaking &amp; Keynotes</a></li>
                        <li><a href="{{ route('home') }}#testimonials" class="hover:text-white transition block py-1">Client Testimonials</a></li>
                    </ul>
                </div>

                <!-- Col 3: Programs & Books -->
                <div class="space-y-4">
                    <h4 class="font-oswald text-xl text-[#df3243] font-bold uppercase">Programs &amp; Books</h4>
                    <ul class="space-y-2 text-xs font-ubuntu">
                        <li><a href="{{ route('books') }}" class="hover:text-white transition block py-1">Bestselling Books</a></li>
                        <li><a href="{{ route('courses') }}" class="hover:text-white transition block py-1">All Online Masterclasses</a></li>
                        <li><a href="{{ route('events') }}" class="hover:text-white transition block py-1">Train The Trainer Bootcamp</a></li>
                        <li><a href="{{ route('resources.free-videos') }}" class="hover:text-white transition block py-1">Free Video Library</a></li>
                        <li><a href="{{ route('resources.ebooks') }}" class="hover:text-white transition block py-1">Free E-Books &amp; Tools</a></li>
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
                    <a href="{{ route('admin.login') }}" class="text-gray-500 hover:text-[#df3243] transition flex items-center gap-1">
                        <i class="fa-solid fa-user text-[9px]"></i> Login
                    </a>
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
    @stack('scripts')
</body>
</html>
