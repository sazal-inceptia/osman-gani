@extends('layouts.app')

@section('title', 'Free E-Books & Workbooks | Osman Gani Resources')
@section('meta_description', 'Download free PDF eBooks, goal setting blueprints, and sales guides authored by Osman Gani to accelerate your career and personal growth.')

@section('content')
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Free E-Books</span>
            </div>

            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-red-950/60 border border-red-500/30 text-[#df3243] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-download text-sm"></i>
                <span>Instant PDF Downloads</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                Free E-Books, Action Guides &amp; <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    Growth Workbooks
                </span>
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Unlock proven frameworks, scripts, and diagnostic checklists to jumpstart your breakthroughs today.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#050608] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- eBook 1 -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between border-2 border-red-900/30 group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#df3243] to-[#5e0911] rounded-2xl p-6 text-white flex flex-col justify-between shadow-xl border-2 border-white/20">
                            <span class="bg-black/40 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">The 7-Day Habit Reset</h3>
                                <p class="text-xs text-red-200 mt-1 font-ubuntu">Rewire your subconscious focus</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-white/80">PDF Download • 45 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-white uppercase pt-2">The 7-Day Habit Reset Blueprint</h4>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            A step-by-step practical guide to destroying friction, eliminating distractions, and designing a bulletproof daily routine.
                        </p>
                    </div>
                    <div class="pt-6">
                        <button onclick="alert('Your free copy has been sent to your email address!');" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            <i class="fa-solid fa-download mr-1"></i> Download Free PDF
                        </button>
                    </div>
                </div>

                <!-- eBook 2 -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between border-2 border-red-900/30 group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#1b5f8c] to-[#0a283c] rounded-2xl p-6 text-white flex flex-col justify-between shadow-xl border-2 border-white/20">
                            <span class="bg-black/40 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">High-Ticket Sales Playbook</h3>
                                <p class="text-xs text-sky-200 mt-1 font-ubuntu">Closing scripts that convert</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-white/80">PDF Download • 60 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-white uppercase pt-2">The High-Ticket Sales Playbook</h4>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            Verbatim word-for-word scripts and questions to handle skepticism and close premium clients smoothly.
                        </p>
                    </div>
                    <div class="pt-6">
                        <button onclick="alert('Your free copy has been sent to your email address!');" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            <i class="fa-solid fa-download mr-1"></i> Download Free PDF
                        </button>
                    </div>
                </div>

                <!-- eBook 3 -->
                <div class="glass-card rounded-3xl p-8 flex flex-col justify-between border-2 border-red-900/30 group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#fbca3e] to-[#785906] rounded-2xl p-6 text-zinc-950 flex flex-col justify-between shadow-xl border-2 border-black/20">
                            <span class="bg-black/20 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max text-black font-semibold">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">Dreams To Action Map</h3>
                                <p class="text-xs text-zinc-900 mt-1 font-ubuntu font-semibold">Goal deconstruction workbook</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-zinc-900 font-semibold">PDF Download • 35 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-white uppercase pt-2">Dreams To Reality Action Map</h4>
                        <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                            A clear quarterly goal framework with milestone trackers and weekly accountability checklists.
                        </p>
                    </div>
                    <div class="pt-6">
                        <button onclick="alert('Your free copy has been sent to your email address!');" class="w-full btn-pill-filled-red text-xs justify-center py-2.5">
                            <i class="fa-solid fa-download mr-1"></i> Download Free PDF
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
