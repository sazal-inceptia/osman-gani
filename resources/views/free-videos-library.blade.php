@extends('layouts.app')

@section('title', 'Free Video Library | Osman Gani - 1000+ Transformational Videos')
@section('meta_description', 'Access Osman Gani’s 24x7 free online learning library with 1,000+ transformational video lessons on sales, leadership, productivity, and mindset.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <!-- Ambient Atmospheric Lights -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-[#df3243]/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Free Video Library</span>
            </div>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-brands fa-youtube text-sm"></i>
                <span>200+ Million Video Views Across YouTube &amp; Social Media</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                Your 24x7 Free Online Learning Academy <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    Loaded With 1,000+ Masterclass Videos
                </span>
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
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
    <section class="py-20 sm:py-28 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            
            <!-- Category 1: Most Watched Videos -->
            <div>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 border-b border-gray-800 pb-4">
                    <div>
                        <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block">Trending Masterclasses</span>
                        <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide text-white">Most Watched Videos</h2>
                    </div>
                    <a href="https://youtube.com" target="_blank" class="btn-pill-white text-xs">
                        <span>View All On YouTube</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Video Card 1 -->
                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#df3243] text-white flex items-center justify-center text-xl shadow-lg shadow-red-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">18:42</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#df3243] uppercase">Peak Performance</span>
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#df3243] transition">
                                7 Daily Habits of High-Income Performers
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">4.2M Views • 150K Likes</p>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#df3243] text-white flex items-center justify-center text-xl shadow-lg shadow-red-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">24:15</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#df3243] uppercase">Sales Psychology</span>
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#df3243] transition">
                                How to Handle Any Sales Objection in 60 Seconds
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">3.8M Views • 120K Likes</p>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#df3243] text-white flex items-center justify-center text-xl shadow-lg shadow-red-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                            <span class="absolute bottom-3 right-3 bg-black/80 text-[11px] font-mono px-2 py-0.5 rounded text-white">31:08</span>
                        </div>
                        <div class="p-5 space-y-2">
                            <span class="text-[11px] font-montserrat font-bold text-[#df3243] uppercase">Leadership</span>
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#df3243] transition">
                                How to Build a Loyal, High-Output Team
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">2.9M Views • 95K Likes</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Category 2: Time Management & Focus -->
            <div>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 border-b border-gray-800 pb-4">
                    <div>
                        <span class="text-[#ff8421] font-montserrat text-xs font-bold uppercase tracking-widest block">Productivity &amp; Habits</span>
                        <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide text-white">Time Mastery Lessons</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#ff8421] text-white flex items-center justify-center text-xl shadow-lg shadow-orange-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#ff8421] transition">
                                Stop Procrastinating: The 5-Minute Momentum Rule
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">1.6M Views</p>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#ff8421] text-white flex items-center justify-center text-xl shadow-lg shadow-orange-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#ff8421] transition">
                                How to Design Your Ideal Weekly Schedule
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">1.1M Views</p>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl overflow-hidden group">
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-[#ff8421] text-white flex items-center justify-center text-xl shadow-lg shadow-orange-950/80 group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-play ml-0.5"></i>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="font-oswald text-lg font-bold text-white uppercase group-hover:text-[#ff8421] transition">
                                The Science of Deep Focus: Elimination of Distractions
                            </h3>
                            <p class="text-gray-400 text-xs font-ubuntu">980K Views</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
