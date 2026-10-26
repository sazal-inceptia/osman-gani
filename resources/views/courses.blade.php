@extends('layouts.app')

@section('title', 'Online Masterclasses & Courses | Osman Gani Academy')
@section('meta_description', 'Learn anytime, anywhere from Osman Gani’s result-oriented online programs: AI Mastery, Time Mastery, Social Media Business, and Sales Excellence.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Online Masterclasses</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-graduation-cap text-sm"></i>
                <span>Over 120,000+ Enrolled Students Across 50+ Nations</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Practical, High-Impact Online Masterclasses By <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Osman Gani</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Step-by-step video lessons, downloadable workbook blueprints, interactive community support, and lifetime access to high-income skill sets.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="#all-courses" class="btn-pill-filled-red text-sm">
                    <i class="fa-solid fa-play"></i>
                    <span>Explore Master Courses</span>
                </a>
                <a href="{{ route('admin.login') }}" class="btn-pill-white text-sm">
                    <i class="fa-solid fa-lock"></i>
                    <span>Student Portal Login</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. MASTER COURSES LISTING -->
    <!-- ======================================================== -->
    <section id="all-courses" class="py-20 sm:py-28 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="section-header text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Flagship Academies
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase tracking-wide text-gray-900">
                    Explore All Master Courses
                </h2>
                <div class="w-16 h-1 bg-[#c92a2a] mx-auto mt-3 mb-4 rounded-full"></div>
            </div>

            <div class="space-y-12">

                <!-- COURSE 1: AI MASTERY PROGRAM -->
                <div id="course-ai" class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-xl bg-[#c92a2a] p-8 flex flex-col justify-between text-white border border-red-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Featured Course</span>
                                    <i class="fa-solid fa-microchip text-2xl text-amber-300"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">AI MASTERY</h3>
                                    <p class="text-xs text-red-100 mt-1 font-ubuntu">15+ Practical Skills • No Code</p>
                                </div>
                                <div class="text-xs text-white/90 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ 4.9 (4,800+ Ratings)</span>
                                    <span>24 Video Modules</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-50 border border-red-200 text-[#c92a2a] rounded-full text-xs font-bold font-montserrat">High Income Skill</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Lifetime Access • Mobile App</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                AI Mastery Program for Business &amp; Content
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Master 15+ powerful artificial intelligence tools with step-by-step guided video tutorials you can apply instantly. Launch your automated online enterprise, build high-converting landing pages, create viral content, and generate clients without technical coding or large teams.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-700 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> AI Copywriting &amp; Prompt Engineering</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Automated Video Creation Workflows</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> AI-Powered Lead Funnels &amp; Landing Pages</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> 100+ Ready-to-use Prompt Templates</div>
                            </div>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-bolt"></i>
                                    <span>Enroll Now (Special Offer)</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn-pill-outline-dark text-sm">
                                    <span>Inquire Syllabus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- COURSE 2: TIME & PRODUCTIVITY MASTERY -->
                <div id="course-time" class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-xl bg-[#0c0d12] p-8 flex flex-col justify-between text-white border border-gray-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="bg-white/10 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20 text-white">Bestselling</span>
                                    <i class="fa-solid fa-clock text-2xl text-amber-300"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide text-white">TIME MASTERY</h3>
                                    <p class="text-xs text-gray-300 mt-1 font-ubuntu">10X Daily Productivity Blueprint</p>
                                </div>
                                <div class="text-xs text-gray-300 border-t border-gray-800 pt-3 flex justify-between">
                                    <span>★ 4.95 (6,200+ Reviews)</span>
                                    <span>30 Day Challenge</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-amber-50 border border-amber-200 text-amber-800 rounded-full text-xs font-bold font-montserrat">Peak Performance</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Habit Architecture • Daily Planner</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Time Mastery &amp; Procrastination Elimination
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Take radical control over your calendar. Learn the daily ritual engineering system to eliminate mental fatigue, crush your to-do list before noon, and build deep focus blocks that yield 10X commercial results.
                            </p>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <span>Enroll in Time Mastery</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn-pill-outline-dark text-sm">
                                    <span>Download Course Outline</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- COURSE 3: SOCIAL MEDIA & BUSINESS MASTERY -->
                <div id="course-sm" class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-xl bg-[#1e293b] p-8 flex flex-col justify-between text-white border border-slate-700 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Digital Scale</span>
                                    <i class="fa-solid fa-hashtag text-2xl text-sky-300"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">SOCIAL MEDIA MASTERY</h3>
                                    <p class="text-xs text-slate-300 mt-1 font-ubuntu">Turn Followers Into Revenue</p>
                                </div>
                                <div class="text-xs text-white/90 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ 4.9 (8,100+ Enrolled)</span>
                                    <span>Full Digital Academy</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-slate-100 border border-slate-200 text-slate-800 rounded-full text-xs font-bold font-montserrat">Authority Branding</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Organic Growth • Conversion Funnels</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Social Media &amp; Online Business Mastery
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Build an authentic, magnetic personal brand that attracts high-caliber clients on auto-pilot. Master short-form video scripting, organic lead pipelines, and community monetization without spending fortunes on paid ads.
                            </p>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://courses.osmangani.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <span>Enroll in Social Media Mastery</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn-pill-outline-dark text-sm">
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
