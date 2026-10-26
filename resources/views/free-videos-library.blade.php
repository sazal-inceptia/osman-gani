@extends('layouts.app')

@section('title', 'Free Video Library | Osman Gani - 1000+ Transformational Videos')
@section('meta_description', 'Access Osman Gani’s 24x7 free online learning library with 1,000+ transformational video lessons on sales, leadership, productivity, and mindset.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Free Video Library</span>
            </div>

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-brands fa-youtube text-sm"></i>
                <span>200+ Million Video Views Across Platforms</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Your 24x7 Free Learning Academy With <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">1,000+ Video Lessons</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Discover actionable tips, mindset shifts, and business growth strategies completely free. Subscribe and never miss a weekly episode.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="https://youtube.com" target="_blank" class="btn-pill-filled-red text-sm">
                    <i class="fa-brands fa-youtube"></i>
                    <span>Subscribe On YouTube</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. VIDEO CATEGORIES & GALLERY -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Category 1: Most Watched Videos -->
            <div>
                <div class="section-header flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 border-b border-gray-200 pb-4">
                    <div>
                        <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block">Trending Masterclasses</span>
                        <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide text-gray-900">Most Watched Videos</h2>
                    </div>
                    <a href="https://youtube.com" target="_blank" class="btn-pill-outline-dark text-xs">
                        <span>View All On YouTube</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Video Card 1 -->
                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#0c0d12] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">18:42</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#c92a2a] uppercase">Peak Performance</span>
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                7 Daily Habits of High-Income Performers
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">4.2M Views • 150K Likes</p>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#1e293b] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">24:15</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#c92a2a] uppercase">Sales Psychology</span>
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                How to Handle Any Sales Objection in 60 Seconds
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">3.8M Views • 120K Likes</p>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#12141c] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">31:08</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#c92a2a] uppercase">Leadership</span>
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                How to Build a Loyal, High-Output Team
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">2.9M Views • 95K Likes</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Category 2: Time Management & Focus -->
            <div>
                <div class="section-header flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 border-b border-gray-200 pb-4">
                    <div>
                        <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block">Productivity &amp; Habits</span>
                        <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide text-gray-900">Time Mastery Lessons</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#0c0d12] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                Stop Procrastinating: The 5-Minute Momentum Rule
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">1.6M Views</p>
                        </div>
                    </div>

                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#1e293b] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                How to Design Your Ideal Weekly Schedule
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">1.1M Views</p>
                        </div>
                    </div>

                    <div class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition group">
                        <div class="aspect-video bg-[#12141c] relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-md group-hover:scale-110 transition duration-200">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                The Science of Deep Focus: Elimination of Distractions
                            </h3>
                            <p class="text-gray-500 text-xs font-ubuntu">980K Views</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
