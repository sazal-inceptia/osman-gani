@extends('layouts.app')

@section('title', 'Bestselling Books | Osman Gani - Personal & Business Transformation')
@section('meta_description', 'Explore 5 bestselling books in 9 languages by Osman Gani. Achieve More, Succeed Faster, Build Wealth and Unleash Your True Potential.')

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
                <span class="text-[#c92a2a] font-bold">Books &amp; Workbooks</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-award text-sm"></i>
                <span>Over 15,000+ 5-Star Reviews Worldwide</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                5 Bestselling Books In 9 Languages By <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Osman Gani</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Upgrade your skills, multiply your income, and discover proven blueprints to unlock peak performance with Osman Gani’s international bestsellers.
            </p>

            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <a href="#books-catalog" class="btn-pill-filled-red text-sm">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <span>Explore Complete Library</span>
                </a>
                <a href="#bulk-orders" class="btn-pill-white text-sm">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span>Corporate Bulk Orders</span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 2. QUICK STATS BANNER -->
    <!-- ======================================================== -->
    <section class="stats-section bg-[#12141c] border-b border-gray-800 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="stat-card p-4 border-r border-gray-800/80 last:border-0">
                    <span class="stat-number font-oswald text-3xl sm:text-4xl font-bold text-[#c92a2a] block" data-target="5">5</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Bestselling Titles</span>
                </div>
                <div class="stat-card p-4 border-r border-gray-800/80 last:border-0">
                    <span class="stat-number font-oswald text-3xl sm:text-4xl font-bold text-white block" data-target="9" data-suffix="+">9+</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Languages Published</span>
                </div>
                <div class="stat-card p-4 border-r border-gray-800/80 last:border-0">
                    <span class="stat-number font-oswald text-3xl sm:text-4xl font-bold text-white block" data-target="500000" data-suffix="+" data-comma="true">500,000+</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Copies Sold</span>
                </div>
                <div class="stat-card p-4">
                    <span class="stat-number font-oswald text-3xl sm:text-4xl font-bold text-[#c92a2a] block" data-target="4.9" data-suffix=" / 5">4.9 / 5</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Reader Rating</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 3. COMPLETE BOOK CATALOGUE -->
    <!-- ======================================================== -->
    <section id="books-catalog" class="py-20 sm:py-28 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="section-header text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#c92a2a] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Mastery Collection
                </span>
                <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase tracking-wide text-gray-900">
                    Books, Workbooks &amp; Growth Journals
                </h2>
                <div class="w-16 h-1 bg-[#c92a2a] mx-auto mt-3 mb-4 rounded-full"></div>
                <p class="text-gray-600 font-ubuntu text-sm sm:text-base">
                    Actionable strategies, habit architectures, and sales psychology tested across thousands of businesses.
                </p>
            </div>

            <div class="space-y-12">

                <!-- BOOK 1: ACHIEVE MORE SUCCEED FASTER -->
                <div class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- Book Visual Card -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-68 aspect-[3/4] bg-[#c92a2a] rounded-xl shadow-md p-6 text-white flex flex-col justify-between border border-red-800 transform group-hover:-translate-y-1 transition duration-300">
                                <div>
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">International Bestseller</span>
                                    <h3 class="font-oswald text-2xl font-bold uppercase tracking-wide mt-4 leading-tight">ACHIEVE MORE SUCCEED FASTER</h3>
                                    <p class="text-xs text-red-100 mt-2 font-ubuntu">Practical Rules for Proven Breakthroughs</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-amber-300 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-50 border border-red-200 text-[#c92a2a] rounded-full text-xs font-bold font-montserrat">#1 Bestseller</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">English • Bengali • Hindi</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Achieve More, Succeed Faster
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                This definitive masterpiece decodes the high-performance rituals, decision frameworks, and acceleration strategies used by top 1% achievers worldwide. Learn how to crush procrastination, construct unstoppable momentum, and scale your personal impact.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-700 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> 52 Actionable Weekly Execution Blueprints</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> High-Stakes Time Management Architecture</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Psychological Triggers of Peak Focus</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Goal Deconstruction Worksheets</div>
                            </div>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order on Rokomari</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-outline-dark text-sm">
                                    <i class="fa-brands fa-amazon"></i>
                                    <span>Order on Amazon</span>
                                </a>
                                <a href="#bulk-orders" class="btn-pill-outline-dark text-sm">
                                    <span>Corporate Bulk Order</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- BOOK 2: BE A SOCIAL MEDIA & ONLINE BUSINESS MILLIONAIRE -->
                <div class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- Book Visual Card -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-68 aspect-[3/4] bg-[#1e293b] rounded-xl shadow-md p-6 text-white flex flex-col justify-between border border-slate-700 transform group-hover:-translate-y-1 transition duration-300">
                                <div>
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Digital Accelerator</span>
                                    <h3 class="font-oswald text-2xl font-bold uppercase tracking-wide mt-4 leading-tight">BE A SOCIAL MEDIA MILLIONAIRE</h3>
                                    <p class="text-xs text-slate-300 mt-2 font-ubuntu">Turn Followers Into High-Paying Clients</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-amber-300 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-slate-100 border border-slate-200 text-slate-800 rounded-full text-xs font-bold font-montserrat">Digital Authority</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">English • Bengali</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Be A Social Media Millionaire
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Stop wasting endless hours scrolling. Discover the exact organic monetization formulas, viral content algorithms, and high-ticket sales funnel mechanisms to turn your knowledge into an automated digital enterprise.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-700 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Organic Lead Magnet Blueprints</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Short-Form Video Virality Formulas</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> High-Ticket Conversion DM Scripts</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#c92a2a]"></i> Personal Brand Authority System</div>
                            </div>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order on Rokomari</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-outline-dark text-sm">
                                    <i class="fa-brands fa-amazon"></i>
                                    <span>Order on Amazon</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- BOOK 3: DREAMS TO REALITY IN 5 STEPS -->
                <div class="reveal-card bg-white rounded-2xl p-8 sm:p-12 border border-gray-200 shadow-sm relative overflow-hidden group hover:shadow-md transition">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- Book Visual Card -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-68 aspect-[3/4] bg-[#0c0d12] rounded-xl shadow-md p-6 text-white flex flex-col justify-between border border-gray-800 transform group-hover:-translate-y-1 transition duration-300">
                                <div>
                                    <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Life Architecture</span>
                                    <h3 class="font-oswald text-2xl font-bold uppercase tracking-wide mt-4 leading-tight">DREAMS TO REALITY IN 5 STEPS</h3>
                                    <p class="text-xs text-gray-300 mt-2 font-ubuntu">The Practical Science of Manifestation</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-amber-300 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-gray-100 border border-gray-200 text-gray-800 rounded-full text-xs font-bold font-montserrat">Mindset &amp; Vision</span>
                                <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-700">English • Bengali</span>
                            </div>

                            <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                                Dreams To Reality In 5 Steps (With Action Workbook)
                            </h3>

                            <p class="text-gray-600 font-ubuntu text-sm sm:text-base leading-relaxed">
                                An empowering 5-stage transformation roadmap bridging the divide between ambition and tangible, quantifiable reality. Complete with a daily reflection journal and execution checklists.
                            </p>

                            <div class="pt-3 flex flex-wrap items-center gap-3">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order Book + Workbook</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-outline-dark text-sm">
                                    <i class="fa-brands fa-amazon"></i>
                                    <span>Order on Amazon</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 4. CORPORATE & BULK ORDERS INQUIRY FORM -->
    <!-- ======================================================== -->
    <section id="bulk-orders" class="py-20 sm:py-24 bg-[#0c0d12] border-b border-gray-800 relative">
        <div class="section-header max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-truck-ramp-box"></i>
                Bulk Orders &amp; Custom Gifting
            </span>

            <h2 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                Equip Your Entire Organization For Excellence
            </h2>

            <p class="text-gray-300 font-ubuntu text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Organizations, colleges, and sales teams ordering 50+ copies receive custom corporate branding, author signed bookplates, and complimentary keynotes.
            </p>

            <form action="#" method="POST" class="reveal-block bg-[#12141c] border border-gray-800 p-8 rounded-2xl text-left space-y-4 max-w-2xl mx-auto shadow-xl" onsubmit="event.preventDefault(); alert('Thank you! Our bulk orders desk will contact you within 24 hours with custom discounts.');">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Your Full Name</label>
                        <input type="text" required placeholder="e.g. Tanvir Ahmed" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Company / Organization</label>
                        <input type="text" required placeholder="e.g. Apex Global Corp" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Email Address</label>
                        <input type="email" required placeholder="name@company.com" class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Quantity Required</label>
                        <select class="w-full bg-[#1e2230] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#c92a2a]">
                            <option>50 - 100 Copies (15% Discount)</option>
                            <option>100 - 500 Copies (25% Discount)</option>
                            <option>500+ Copies (Custom Author Package)</option>
                        </select>
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full btn-pill-filled-red justify-center py-3 text-base">
                        Request Bulk Quote &amp; Delivery Schedule
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
