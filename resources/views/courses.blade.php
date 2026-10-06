@extends('layouts.app')

@section('title', 'Online Masterclasses & Courses | Osman Gani Academy')
@section('meta_description', 'Learn anytime, anywhere from Osman Gani’s result-oriented online programs: AI Mastery, Time Mastery, Social Media Business, and Sales Excellence.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <!-- Ambient Glow Elements -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-[#df3243]/15 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-10 w-[450px] h-[350px] bg-[#ff8421]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Online Masterclasses</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-graduation-cap text-sm"></i>
                <span>Over 120,000+ Enrolled Students Across 50+ Nations</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                Learn Anytime, Anywhere On Your Mobile <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    With Osman Gani's Revolutionary
                </span> 
                Online Programs
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Step-by-step video lessons, downloadable workbook blueprints, interactive community support, and lifetime access to high-income skill sets.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="#all-courses" class="btn-pill-filled-red text-sm">
                    <i class="fa-solid fa-play"></i>
                    <span>Explore Master Courses</span>
                </a>
                <a href="#portal" class="btn-pill-white text-sm">
                    <i class="fa-solid fa-lock"></i>
                    <span>Student Portal Login</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. MASTER COURSES LISTING -->
    <!-- ======================================================== -->
    <section id="all-courses" class="py-20 sm:py-28 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Flagship Academies
                </span>
                <h2 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">
                    Explore All Master Courses
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto mt-4 mb-4"></div>
            </div>

            <div class="space-y-12">

                <!-- COURSE 1: AI MASTERY PROGRAM -->
                <div id="course-ai" class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-500/40 shadow-2xl relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-2xl bg-gradient-to-br from-[#df3243] via-[#a81c2a] to-[#260509] p-8 flex flex-col justify-between text-white border-2 border-white/20 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/50 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Featured Course</span>
                                    <i class="fa-solid fa-microchip text-2xl text-yellow-400"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">AI MASTERY</h3>
                                    <p class="text-xs text-red-200 mt-1 font-ubuntu">15+ Practical Skills • No Code</p>
                                </div>
                                <div class="text-xs text-white/80 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ 4.9 (4,800+ Ratings)</span>
                                    <span>24 Video Modules</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-950/80 border border-red-500/40 text-[#df3243] rounded-full text-xs font-bold font-montserrat">High Income Skill</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">Lifetime Access • Mobile App</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                AI Mastery Program for Business &amp; Content
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Master 15+ powerful artificial intelligence tools with step-by-step guided video tutorials you can apply instantly. Launch your automated online enterprise, build high-converting landing pages, create viral content, and generate clients without technical coding or large teams.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-300 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> AI Copywriting &amp; Prompt Engineering</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Automated Video Creation Workflows</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> AI-Powered Lead Funnels &amp; Landing Pages</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> 100+ Ready-to-use Prompt Templates</div>
                            </div>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-bolt"></i>
                                    <span>Enroll Now (Special Offer)</span>
                                </a>
                                <a href="#portal" class="btn-pill-white text-sm">
                                    <span>View Curriculum Syllabus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- COURSE 2: TIME & PRODUCTIVITY MASTERY -->
                <div id="course-time" class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/30 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-2xl bg-gradient-to-br from-[#fbca3e] via-[#c49216] to-[#453102] p-8 flex flex-col justify-between text-zinc-950 border-2 border-white/20 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/20 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-black/20 text-black">Bestselling</span>
                                    <i class="fa-solid fa-clock text-2xl text-zinc-950"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide text-zinc-950">TIME MASTERY</h3>
                                    <p class="text-xs text-zinc-800 mt-1 font-ubuntu font-semibold">10X Daily Productivity Blueprint</p>
                                </div>
                                <div class="text-xs text-zinc-900 border-t border-black/20 pt-3 flex justify-between font-semibold">
                                    <span>★ 4.95 (6,200+ Reviews)</span>
                                    <span>30 Day Challenge</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-yellow-950/80 border border-yellow-500/40 text-yellow-400 rounded-full text-xs font-bold font-montserrat">Peak Performance</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">Habit Architecture • Daily Planner</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Time Mastery &amp; Procrastination Elimination
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Take radical control over your calendar. Learn the daily ritual engineering system to eliminate mental fatigue, crush your to-do list before noon, and build deep focus blocks that yield 10X commercial results.
                            </p>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <span>Enroll in Time Mastery</span>
                                </a>
                                <a href="#portal" class="btn-pill-white text-sm">
                                    <span>Download Course Sample</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- COURSE 3: SOCIAL MEDIA & BUSINESS MASTERY -->
                <div id="course-sm" class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/30 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-2xl bg-gradient-to-br from-[#1b5f8c] via-[#103d5c] to-[#041624] p-8 flex flex-col justify-between text-white border-2 border-white/20 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/50 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Digital Scale</span>
                                    <i class="fa-solid fa-hashtag text-2xl text-sky-400"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">SOCIAL MEDIA MASTERY</h3>
                                    <p class="text-xs text-sky-200 mt-1 font-ubuntu">Turn Followers Into Revenue</p>
                                </div>
                                <div class="text-xs text-white/80 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ 4.9 (8,100+ Enrolled)</span>
                                    <span>Full Digital Academy</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-sky-950/80 border border-sky-500/40 text-sky-400 rounded-full text-xs font-bold font-montserrat">Authority Branding</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">Organic Growth • Conversion Funnels</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Social Media &amp; Online Business Mastery
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Build an authentic, magnetic personal brand that attracts high-caliber clients on auto-pilot. Master short-form video scripting, organic lead pipelines, and community monetization without spending fortunes on paid ads.
                            </p>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <span>Enroll in Social Media Mastery</span>
                                </a>
                                <a href="#portal" class="btn-pill-white text-sm">
                                    <span>Explore Syllabus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
