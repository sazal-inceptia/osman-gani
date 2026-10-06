@extends('layouts.app')

@section('title', 'Live Events & Bootcamps | Osman Gani Transformation Summits')
@section('meta_description', 'Experience life-changing live summits with Osman Gani: Train The Trainer, Unleash The Champion In You, Public Speaking Bootcamp, and Business Breakthrough.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#151926] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <!-- Ambient Glow -->
        <div class="absolute top-0 right-1/4 w-[600px] h-[350px] bg-[#df3243]/15 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-10 w-[450px] h-[350px] bg-[#ff8421]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Live Events &amp; Bootcamps</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-fire text-sm"></i>
                <span>High-Voltage In-Person Transformations</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                "Every Successful Person Had A Breakthrough Moment <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    After Which Life Was Totally Different."
                </span>
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Step into an immersive environment of peak state, tactical mastery, and energetic community. Find your breakthrough in Osman Gani's upcoming live events.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="#events-list" class="btn-pill-filled-red text-sm">
                    <i class="fa-solid fa-ticket"></i>
                    <span>Browse Upcoming Events</span>
                </a>
                <a href="{{ route('speaking') }}" class="btn-pill-white text-sm">
                    <i class="fa-solid fa-microphone"></i>
                    <span>Book Private Corporate Summit</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. LIVE EVENTS LISTING -->
    <!-- ======================================================== -->
    <section id="events-list" class="py-20 sm:py-28 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Signature Workshops
                </span>
                <h2 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">
                    Flagship Transformation Programs
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto mt-4 mb-4"></div>
            </div>

            <div class="space-y-12">

                <!-- EVENT 1: TRAIN THE TRAINER BOOTCAMP -->
                <div id="trainer-bootcamp" class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-500/40 shadow-2xl relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-2xl bg-gradient-to-br from-[#df3243] via-[#8c101d] to-[#240306] p-8 flex flex-col justify-between text-white border-2 border-white/20 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/50 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">3-Day Certification</span>
                                    <i class="fa-solid fa-chalkboard-user text-2xl text-yellow-400"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">TRAIN THE TRAINER</h3>
                                    <p class="text-xs text-red-200 mt-1 font-ubuntu">Become a Master Speaker &amp; Leader</p>
                                </div>
                                <div class="text-xs text-white/80 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ Live In-Person Intensive</span>
                                    <span>Limited 50 Seats</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-950/80 border border-red-500/40 text-[#df3243] rounded-full text-xs font-bold font-montserrat">Flagship Certification</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">Dhaka &amp; International Venues</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Train The Trainer 3-Day Certification Bootcamp
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                A career-defining 3-day experiential bootcamp that elevates your presentation, stage presence, crowd management, story-crafting, and closing abilities to world-class standards. Learn how to train and lead teams that generate exponential sales.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-300 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Stage Psychology &amp; Audience Anchoring</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> High-Stakes Closing from Stage</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Workshop Design &amp; Curriculum Engineering</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Official Certification from Osman Gani Academy</div>
                            </div>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="{{ route('contact') }}" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-ticket"></i>
                                    <span>Reserve Your Seat Now</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn-pill-white text-sm">
                                    <span>Download Event Brochure</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- EVENT 2: UNLEASH THE CHAMPION IN YOU -->
                <div id="unleash-champion" class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/30 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-2xl bg-gradient-to-br from-[#1b5f8c] via-[#0f3d5c] to-[#041724] p-8 flex flex-col justify-between text-white border-2 border-white/20 shadow-xl">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/50 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Mega Convention</span>
                                    <i class="fa-solid fa-trophy text-2xl text-yellow-400"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">UNLEASH THE CHAMPION</h3>
                                    <p class="text-xs text-sky-200 mt-1 font-ubuntu">Mega Arena Transformation Event</p>
                                </div>
                                <div class="text-xs text-white/80 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ 2,000+ Delegates</span>
                                    <span>Live Sound &amp; Lights</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-sky-950/80 border border-sky-500/40 text-sky-400 rounded-full text-xs font-bold font-montserrat">Mega Arena Summit</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">Annual Convention</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Unleash The Champion In You (UCY)
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                The premier life &amp; business transformation summit uniting over 2,000 delegates from across the region. 2 full days of deep activity-based drills for transforming your team's mindset, capabilities, and execution speed.
                            </p>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="{{ route('contact') }}" class="btn-pill-filled-red text-sm">
                                    <span>Register for UCY Convention</span>
                                </a>
                                <a href="{{ route('about.media-events') }}" class="btn-pill-white text-sm">
                                    <span>View Past Event Highlights</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
