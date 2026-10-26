@extends('layouts.app')

@section('title', 'Live Events & Bootcamps | Osman Gani Transformation Summits')
@section('meta_description', 'Experience life-changing live summits with Osman Gani: Train The Trainer, Unleash The Champion In You, Public Speaking Bootcamp, and Business Breakthrough.')

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
                <span class="text-[#c92a2a] font-bold">Live Events &amp; Bootcamps</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-fire text-sm"></i>
                <span>High-Impact In-Person Experiences</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                "Every Successful Person Had A Breakthrough Moment <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">After Which Life Was Totally Different."</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
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
    <section id="events-list" class="py-20 sm:py-28 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="section-header text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Signature Workshops
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase tracking-wide text-gray-900">
                    Flagship Transformation Programs
                </h2>
                <div class="w-16 h-1 bg-[#c92a2a] mx-auto mt-3 mb-4 rounded-full"></div>
            </div>

            <div class="space-y-12">

                <!-- EVENT 1: TRAIN THE TRAINER BOOTCAMP -->
                <div id="trainer-bootcamp" class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-xl bg-[#c92a2a] p-8 flex flex-col justify-between text-white border border-red-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">3-Day Certification</span>
                                    <i class="fa-solid fa-chalkboard-user text-2xl text-amber-300"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide">TRAIN THE TRAINER</h3>
                                    <p class="text-xs text-red-100 mt-1 font-ubuntu">Become a Master Speaker &amp; Leader</p>
                                </div>
                                <div class="text-xs text-white/90 border-t border-white/20 pt-3 flex justify-between">
                                    <span>★ Live In-Person Intensive</span>
                                    <span>Limited 50 Seats</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-50 border border-red-200 text-[#c92a2a] rounded-full text-xs font-bold font-montserrat">Flagship Certification</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Dhaka &amp; International Venues</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Train The Trainer 3-Day Certification Bootcamp
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                A career-defining 3-day experiential bootcamp that elevates your presentation, stage presence, crowd management, story-crafting, and closing abilities to world-class standards. Learn how to train and lead teams that generate exponential sales.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-700 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Stage Psychology &amp; Audience Anchoring</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> High-Stakes Closing from Stage</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Workshop Design &amp; Curriculum Engineering</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Official Certification from Osman Gani Academy</div>
                            </div>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="{{ route('contact') }}" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-ticket"></i>
                                    <span>Reserve Your Seat Now</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn-pill-outline-dark text-sm">
                                    <span>Inquire Event Schedule</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- EVENT 2: UNLEASH THE CHAMPION IN YOU -->
                <div id="unleash-champion" class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <div class="lg:col-span-4">
                            <div class="w-full aspect-video sm:aspect-square rounded-xl bg-[#0c0d12] p-8 flex flex-col justify-between text-white border border-gray-800 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="bg-white/10 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Mega Convention</span>
                                    <i class="fa-solid fa-trophy text-2xl text-amber-300"></i>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-3xl font-bold uppercase tracking-wide text-white">UNLEASH THE CHAMPION</h3>
                                    <p class="text-xs text-gray-300 mt-1 font-ubuntu">Mega Arena Transformation Event</p>
                                </div>
                                <div class="text-xs text-gray-300 border-t border-gray-800 pt-3 flex justify-between">
                                    <span>★ 2,000+ Delegates</span>
                                    <span>Live Sound &amp; Production</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-gray-100 border border-gray-200 text-gray-800 rounded-full text-xs font-bold font-montserrat">Mega Arena Summit</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Annual Convention</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Unleash The Champion In You (UCY)
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                The premier life &amp; business transformation summit uniting over 2,000 delegates from across the region. 2 full days of deep activity-based drills for transforming your team's mindset, capabilities, and execution speed.
                            </p>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="{{ route('contact') }}" class="btn-pill-filled-red text-sm">
                                    <span>Register for UCY Convention</span>
                                </a>
                                <a href="{{ route('about.media-events') }}" class="btn-pill-outline-dark text-sm">
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
