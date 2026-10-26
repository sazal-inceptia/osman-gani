@extends('layouts.app')

@section('title', 'Free E-Books & Workbooks | Osman Gani Resources')
@section('meta_description', 'Download free PDF eBooks, goal setting blueprints, and sales guides authored by Osman Gani to accelerate your career and personal growth.')

@section('content')
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Free E-Books</span>
            </div>

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-download text-sm"></i>
                <span>Instant PDF Downloads</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Free E-Books, Action Guides &amp; <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Growth Workbooks</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Unlock proven frameworks, scripts, and diagnostic checklists to jumpstart your breakthroughs today.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- eBook 1 -->
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border border-gray-200 shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-[#c92a2a] rounded-xl p-6 text-white flex flex-col justify-between shadow-sm border border-red-800">
                            <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max border border-white/20">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">The 7-Day Habit Reset</h3>
                                <p class="text-xs text-red-100 mt-1 font-ubuntu">Rewire your daily focus</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-white/90">PDF Download • 45 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-gray-900 uppercase pt-2">The 7-Day Habit Reset Blueprint</h4>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
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
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border border-gray-200 shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-[#1e293b] rounded-xl p-6 text-white flex flex-col justify-between shadow-sm border border-slate-700">
                            <span class="bg-black/30 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max border border-white/20">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">High-Ticket Sales Playbook</h3>
                                <p class="text-xs text-slate-300 mt-1 font-ubuntu">Closing scripts that convert</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-white/90">PDF Download • 60 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-gray-900 uppercase pt-2">The High-Ticket Sales Playbook</h4>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
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
                <div class="bg-white rounded-2xl p-8 flex flex-col justify-between border border-gray-200 shadow-sm hover:shadow-md transition group">
                    <div class="space-y-4">
                        <div class="aspect-[3/4] bg-[#0c0d12] rounded-xl p-6 text-white flex flex-col justify-between shadow-sm border border-gray-800">
                            <span class="bg-white/10 text-[10px] uppercase font-bold tracking-widest px-2.5 py-1 rounded-full w-max text-white">Free Guide</span>
                            <div>
                                <h3 class="font-oswald text-2xl font-bold uppercase">Dreams To Action Map</h3>
                                <p class="text-xs text-gray-300 mt-1 font-ubuntu">Goal deconstruction workbook</p>
                            </div>
                            <span class="font-oswald text-xs uppercase tracking-wider text-gray-300">PDF Download • 35 Pages</span>
                        </div>
                        <h4 class="font-oswald text-xl font-bold text-gray-900 uppercase pt-2">Dreams To Reality Action Map</h4>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
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
