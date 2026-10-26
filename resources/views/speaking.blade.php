@extends('layouts.app')

@section('title', 'Invite Osman Gani To Speak | Keynote Motivational Speaker & Corporate Coach')
@section('meta_description', 'Book Osman Gani for your next annual convention, dealers summit, leadership retreat, or stadium keynote. Transform your organization with high-voltage energy.')

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
                <span class="text-[#c92a2a] font-bold">Keynote Speaking &amp; Corporate Summits</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-microphone-lines text-sm"></i>
                <span>1,200+ Keynotes Delivered Worldwide</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                "There Are Speeches Made Out Of Words &amp; <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">There Are Speeches Made Out Of Lives."</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Backed by 18+ years of field experience, 2.1 Million+ delegates trained, and 200 Million+ video views, Osman Gani brings unmatched electrical energy and proven business frameworks to your stage.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="#booking-form" class="btn-pill-filled-red text-base px-8 py-3">
                    <i class="fa-solid fa-calendar-plus"></i>
                    <span>Book Osman For Your Next Event</span>
                </a>
                <a href="#speaking-formats" class="btn-pill-white text-base px-8 py-3">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Explore Program Formats</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. SPEAKING FORMATS -->
    <!-- ======================================================== -->
    <section id="speaking-formats" class="py-20 sm:py-28 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Engagement Models
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase tracking-wide text-gray-900">
                    Different Formats Osman Offers
                </h2>
                <div class="w-16 h-1 bg-[#c92a2a] mx-auto mt-3 mb-4 rounded-full"></div>
                <p class="text-gray-600 font-ubuntu text-sm sm:text-base">
                    Tailored delivery architectures designed for maximum participant retention, behavioral shift, and long-term business ROI.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Format 1: Keynotes -->
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border border-gray-200 shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-xl bg-red-50 border border-red-100 text-[#c92a2a] flex items-center justify-center text-xl group-hover:bg-[#c92a2a] group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                        <span class="text-xs font-montserrat font-bold text-[#c92a2a] uppercase tracking-wider block">Format 01</span>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase tracking-wide">
                            Keynote Speeches
                        </h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            <strong>45 to 90 Minutes:</strong> High-voltage, game-changing addresses designed to ignite passion, shatter psychological self-limits, and align sales forces with organizational vision.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-gray-100 mt-6">
                        <a href="#booking-form" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            Book Keynote Address
                        </a>
                    </div>
                </div>

                <!-- Format 2: Corporate Workshops -->
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border-2 border-[#c92a2a] shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-xl bg-[#c92a2a] text-white flex items-center justify-center text-xl shadow-sm">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <span class="text-xs font-montserrat font-bold text-[#c92a2a] uppercase tracking-wider block">Format 02 • Most Popular</span>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase tracking-wide">
                            Customized Workshops
                        </h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            <strong>Half-Day to 2-Day Intensives:</strong> Hands-on role-playing, deep execution drills, high-ticket closing scripts, and strategic alignment for managers, dealers, and leaders.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-gray-100 mt-6">
                        <a href="#booking-form" class="w-full btn-pill-outline-dark text-xs justify-center py-2.5">
                            Book Custom Workshop
                        </a>
                    </div>
                </div>

                <!-- Format 3: Executive Coaching -->
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border border-gray-200 shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-xl bg-gray-100 border border-gray-200 text-gray-800 flex items-center justify-center text-xl group-hover:bg-[#0c0d12] group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-chess-king"></i>
                        </div>
                        <span class="text-xs font-montserrat font-bold text-gray-700 uppercase tracking-wider block">Format 03</span>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase tracking-wide">
                            High-Performance Coaching
                        </h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            <strong>1-on-1 Strategic Mentorship:</strong> Exclusive advisory sessions for CEOs, enterprise founders, and top corporate executives targeting 10X breakthroughs.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-gray-100 mt-6">
                        <a href="#booking-form" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            Apply For Executive Advisory
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 3. SIGNATURE TOPICS -->
    <!-- ======================================================== -->
    <section class="py-20 sm:py-28 bg-[#ffffff] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Core Keynote Themes
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase tracking-wide text-gray-900">
                    Signature Speaking Topics
                </h2>
                <div class="w-16 h-1 bg-[#c92a2a] mx-auto mt-3 mb-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-[#fbfaf8] rounded-xl p-8 border-l-4 border-[#c92a2a] border-t border-r border-b border-gray-200 shadow-sm">
                    <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase tracking-wide mb-2">
                        1. Achieve More, Succeed Faster (Peak Performance &amp; Mindset)
                    </h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        How elite performers organize their mental clarity, build iron discipline, and execute with relentless speed to outpace market competition.
                    </p>
                </div>

                <div class="bg-[#fbfaf8] rounded-xl p-8 border-l-4 border-slate-700 border-t border-r border-b border-gray-200 shadow-sm">
                    <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase tracking-wide mb-2">
                        2. High-Ticket Sales Mastery &amp; Persuasion Architecture
                    </h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Decoding the non-verbal psychology of closing premium deals, building fierce brand loyalty, and scaling sales pipelines organically.
                    </p>
                </div>

                <div class="bg-[#fbfaf8] rounded-xl p-8 border-l-4 border-emerald-700 border-t border-r border-b border-gray-200 shadow-sm">
                    <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase tracking-wide mb-2">
                        3. Unleash The Champion In You (Team Culture &amp; Leadership)
                    </h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Transforming fragmented groups into hyper-unified, mission-driven teams with zero excuses and radical ownership.
                    </p>
                </div>

                <div class="bg-[#fbfaf8] rounded-xl p-8 border-l-4 border-indigo-700 border-t border-r border-b border-gray-200 shadow-sm">
                    <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase tracking-wide mb-2">
                        4. Future-Proofing Business with AI &amp; Digital Dominance
                    </h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Practical frameworks for traditional businesses to leverage artificial intelligence, automation, and social media authority.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 4. KEYNOTE INQUIRY & BOOKING FORM -->
    <!-- ======================================================== -->
    <section id="booking-form" class="py-20 sm:py-28 bg-[#0c0d12] border-b border-gray-800 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-4">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                    <i class="fa-solid fa-calendar-check"></i>
                    Direct Keynote Booking Desk
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                    Invite Osman Gani To Your Event
                </h2>
                <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                    Please provide your event details below. Our events management desk will review dates and respond within 24 hours.
                </p>
            </div>

            <form action="#" method="POST" class="bg-[#12141c] p-8 sm:p-12 rounded-2xl space-y-6 border border-gray-800 shadow-xl" onsubmit="event.preventDefault(); alert('Thank you! Your keynote request has been received. Our speaker bureau will contact you shortly.');">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Organizer / Contact Name *</label>
                        <input type="text" required placeholder="e.g. Mahfuzur Rahman" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Company / Organization *</label>
                        <input type="text" required placeholder="e.g. Grameen Telecom / Unilever" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Official Email Address *</label>
                        <input type="email" required placeholder="name@company.com" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Direct Phone / WhatsApp *</label>
                        <input type="tel" required placeholder="+880 1700-000000" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Proposed Event Date</label>
                        <input type="date" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Expected Delegates</label>
                        <select class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                            <option>50 - 200 Attendees</option>
                            <option>200 - 1,000 Attendees</option>
                            <option>1,000 - 5,000 Attendees</option>
                            <option>5,000+ Stadium Mega Summit</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Event Location</label>
                        <input type="text" placeholder="e.g. Dhaka, BICC / Singapore" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Brief Event Objectives / Theme</label>
                    <textarea rows="3" placeholder="Tell us about the key goals, audience profile, and desired transformation for this session..." class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]"></textarea>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit" class="btn-pill-filled-red text-base px-10 py-3.5 w-full sm:w-auto">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Submit Keynote Booking Application</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
