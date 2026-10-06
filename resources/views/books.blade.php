@extends('layouts.app')

@section('title', 'Bestselling Books | Osman Gani - Personal & Business Transformation')
@section('meta_description', 'Explore 5 bestselling books in 9 languages by Osman Gani. Achieve More, Succeed Faster, Build Wealth and Unleash Your True Potential.')

@section('content')
    <!-- ======================================================== -->
    <!-- 1. HERO BANNER -->
    <!-- ======================================================== -->
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <!-- Ambient Atmospheric Glows -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-[#df3243]/15 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-10 w-[450px] h-[350px] bg-[#ff8421]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            
            <!-- Breadcrumbs -->
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Books &amp; Workbooks</span>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-award text-sm"></i>
                <span>Over 15,000+ 5-Star Reviews Worldwide</span>
            </div>

            <!-- Main Heading -->
            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                With 5 Bestselling Books In 9 Languages, <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    Osman Gani Is The Leading Author
                </span> 
                For Personal &amp; Business Transformation
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
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
    <section class="bg-[#000000] border-b border-gray-800 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4 border-r border-gray-800 last:border-0">
                    <span class="font-oswald text-3xl sm:text-4xl font-bold text-[#df3243] block">5</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Bestselling Titles</span>
                </div>
                <div class="p-4 border-r border-gray-800 last:border-0">
                    <span class="font-oswald text-3xl sm:text-4xl font-bold text-white block">9+</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Languages Published</span>
                </div>
                <div class="p-4 border-r border-gray-800 last:border-0">
                    <span class="font-oswald text-3xl sm:text-4xl font-bold text-[#ff8421] block">500,000+</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Copies Sold</span>
                </div>
                <div class="p-4">
                    <span class="font-oswald text-3xl sm:text-4xl font-bold text-white block">4.9 / 5</span>
                    <span class="text-gray-400 text-xs uppercase font-montserrat tracking-wider">Reader Rating</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================== -->
    <!-- 3. COMPLETE BOOK CATALOGUE -->
    <!-- ======================================================== -->
    <section id="books-catalog" class="py-20 sm:py-28 bg-[#050608] border-b border-gray-800 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#df3243] font-montserrat text-xs font-bold uppercase tracking-widest block mb-2">
                    Mastery Collection
                </span>
                <h2 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">
                    Books, Workbooks &amp; Growth Journals
                </h2>
                <div class="w-20 h-1 bg-[#df3243] mx-auto mt-4 mb-4"></div>
                <p class="text-gray-400 font-ubuntu text-sm sm:text-base">
                    Actionable strategies, habit architectures, and sales psychology tested across thousands of businesses.
                </p>
            </div>

            <div class="space-y-16">

                <!-- BOOK 1: ACHIEVE MORE SUCCEED FASTER -->
                <div class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/40 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- 3D Book Cover Visual -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-72 aspect-[3/4] bg-gradient-to-br from-[#df3243] to-[#730a14] rounded-2xl shadow-2xl p-6 text-white flex flex-col justify-between border-4 border-white/20 transform group-hover:-translate-y-2 group-hover:rotate-1 transition duration-500">
                                <div>
                                    <span class="bg-black/40 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">International Bestseller</span>
                                    <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide mt-4 leading-tight">ACHIEVE MORE SUCCEED FASTER</h3>
                                    <p class="text-xs text-red-200 mt-2 font-ubuntu">Practical Rules for Proven Breakthroughs</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-red-950/80 border border-red-500/40 text-[#df3243] rounded-full text-xs font-bold font-montserrat">#1 Bestseller</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">English • Bengali • Hindi</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Achieve More, Succeed Faster
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                This definitive masterpiece decodes the high-performance rituals, decision frameworks, and acceleration strategies used by top 1% achievers worldwide. Learn how to crush procrastination, construct unstoppable momentum, and scale your personal impact.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-300 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> 52 Actionable Weekly Execution Blueprints</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> High-Stakes Time Management Architecture</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Psychological Triggers of Peak Focus</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Goal Deconstruction Worksheets</div>
                            </div>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order on Rokomari</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-white text-sm">
                                    <i class="fa-brands fa-amazon"></i>
                                    <span>Order on Amazon</span>
                                </a>
                                <a href="#bulk-orders" class="btn-pill-white text-sm">
                                    <span>Corporate Bulk Order</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- BOOK 2: BE A SOCIAL MEDIA & ONLINE BUSINESS MILLIONAIRE -->
                <div class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/40 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- 3D Book Cover Visual -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-72 aspect-[3/4] bg-gradient-to-br from-[#1b5f8c] to-[#0d2f47] rounded-2xl shadow-2xl p-6 text-white flex flex-col justify-between border-4 border-white/20 transform group-hover:-translate-y-2 group-hover:-rotate-1 transition duration-500">
                                <div>
                                    <span class="bg-black/40 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Digital Accelerator</span>
                                    <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide mt-4 leading-tight">BE A SOCIAL MEDIA MILLIONAIRE</h3>
                                    <p class="text-xs text-sky-200 mt-2 font-ubuntu">Turn Followers Into High-Paying Clients</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-sky-950/80 border border-sky-500/40 text-sky-400 rounded-full text-xs font-bold font-montserrat">Digital Authority</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">English • Bengali</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Be A Social Media Millionaire
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                Stop wasting endless hours scrolling. Discover the exact organic monetization formulas, viral content algorithms, and high-ticket sales funnel mechanisms to turn your knowledge into an automated digital enterprise.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-gray-300 font-ubuntu pt-2">
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Organic Lead Magnet Blueprints</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Short-Form Video Virality Formulas</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> High-Ticket Conversion DM Scripts</div>
                                <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#df3243]"></i> Personal Brand Authority System</div>
                            </div>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order on Rokomari</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-white text-sm">
                                    <i class="fa-brands fa-amazon"></i>
                                    <span>Order on Amazon</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- BOOK 3: DREAMS TO REALITY IN 5 STEPS -->
                <div class="glass-card rounded-3xl p-8 sm:p-12 border-2 border-red-900/40 relative overflow-hidden group">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        
                        <!-- 3D Book Cover Visual -->
                        <div class="lg:col-span-4 text-center relative flex justify-center">
                            <div class="w-60 sm:w-72 aspect-[3/4] bg-gradient-to-br from-[#a2267e] to-[#4d0c39] rounded-2xl shadow-2xl p-6 text-white flex flex-col justify-between border-4 border-white/20 transform group-hover:-translate-y-2 group-hover:rotate-1 transition duration-500">
                                <div>
                                    <span class="bg-black/40 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full border border-white/20">Life Architecture</span>
                                    <h3 class="font-oswald text-2xl sm:text-3xl font-bold uppercase tracking-wide mt-4 leading-tight">DREAMS TO REALITY IN 5 STEPS</h3>
                                    <p class="text-xs text-fuchsia-200 mt-2 font-ubuntu">The Practical Science of Manifestation</p>
                                </div>
                                <div class="border-t border-white/20 pt-4 flex items-center justify-between">
                                    <span class="font-oswald text-sm font-semibold tracking-wider">OSMAN GANI</span>
                                    <i class="fa-solid fa-star text-yellow-400 text-xs"> 4.9</i>
                                </div>
                            </div>
                        </div>

                        <!-- Details & Order Options -->
                        <div class="lg:col-span-8 space-y-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 bg-fuchsia-950/80 border border-fuchsia-500/40 text-fuchsia-400 rounded-full text-xs font-bold font-montserrat">Mindset &amp; Vision</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium text-gray-300">English • Bengali</span>
                            </div>

                            <h3 class="font-oswald text-3xl sm:text-4xl font-bold text-white uppercase tracking-wide">
                                Dreams To Reality In 5 Steps (With Action Workbook)
                            </h3>

                            <p class="text-gray-300 font-ubuntu text-sm sm:text-base leading-relaxed">
                                An empowering 5-stage transformation roadmap bridging the divide between ambition and tangible, quantifiable reality. Complete with a daily reflection journal and execution checklists.
                            </p>

                            <div class="pt-4 flex flex-wrap items-center gap-4">
                                <a href="https://rokomari.com" target="_blank" class="btn-pill-filled-red text-sm">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Order Book + Workbook</span>
                                </a>
                                <a href="https://amazon.com" target="_blank" class="btn-pill-white text-sm">
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
    <section id="bulk-orders" class="py-20 sm:py-24 bg-gradient-to-r from-[#120306] via-[#1a0508] to-[#0a0c14] border-b border-gray-800 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-8">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-900/40 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-truck-ramp-box"></i>
                Bulk Orders &amp; Custom Gifting
            </span>

            <h2 class="font-oswald text-3xl sm:text-5xl font-bold text-white uppercase tracking-wide">
                Equip Your Entire Organization For Excellence
            </h2>

            <p class="text-gray-300 font-ubuntu text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Organizations, colleges, and sales teams ordering 50+ copies receive custom corporate branding, author signed bookplates, and complimentary keynotes.
            </p>

            <form action="#" method="POST" class="glass-card p-8 rounded-3xl text-left space-y-4 max-w-2xl mx-auto" onsubmit="event.preventDefault(); alert('Thank you! Our bulk orders desk will contact you within 24 hours with custom discounts.');">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Your Full Name</label>
                        <input type="text" required placeholder="e.g. Tanvir Ahmed" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Company / Organization</label>
                        <input type="text" required placeholder="e.g. Apex Global Corp" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Email Address</label>
                        <input type="email" required placeholder="name@company.com" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-1">Quantity Required</label>
                        <select class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
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
