@extends('layouts.app')

@section('title', 'Free Growth Tools & Calculators | Osman Gani Resources')
@section('meta_description', 'Free diagnostic tools, time audit calculators, habit trackers, and sales closing templates engineered by Osman Gani.')

@section('content')
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Free Productivity Tools</span>
            </div>

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[#c92a2a] text-xs font-bold font-montserrat uppercase tracking-wider">
                <i class="fa-solid fa-calculator text-sm"></i>
                <span>Interactive Worksheets &amp; Calculators</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Practical Execution Tools &amp; <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Performance Calculators</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Streamline your daily decisions and quantify your business pipeline with free downloadable templates.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-2xl p-8 space-y-4 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 rounded-xl bg-red-50 text-[#c92a2a] flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-stopwatch"></i>
                    </div>
                    <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">Daily Time Audit Matrix</h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Identify where your highest-leverage hours are lost and restructure your day around peak output blocks.
                    </p>
                    <button onclick="alert('Time Audit Matrix template downloaded!');" class="btn-pill-filled-red text-xs py-2.5 w-full justify-center">
                        <i class="fa-solid fa-file-excel mr-1"></i> Download Sheet (Excel / PDF)
                    </button>
                </div>

                <div class="bg-white rounded-2xl p-8 space-y-4 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 rounded-xl bg-slate-100 text-slate-800 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">Sales Funnel Calculator</h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Calculate exact lead targets, conversion ratios, and average deal sizes needed to reach monthly revenue goals.
                    </p>
                    <button onclick="alert('Sales Funnel Calculator downloaded!');" class="btn-pill-filled-red text-xs py-2.5 w-full justify-center">
                        <i class="fa-solid fa-file-excel mr-1"></i> Download Sheet (Excel / PDF)
                    </button>
                </div>

                <div class="bg-white rounded-2xl p-8 space-y-4 border border-gray-200 shadow-sm hover:shadow-md transition">
                    <div class="w-14 h-14 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-2xl">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">66-Day Habit Tracker</h3>
                    <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                        Visual gamified tracker based on neuroscience principles to lock in high-impact rituals permanently.
                    </p>
                    <button onclick="alert('Habit Tracker template downloaded!');" class="btn-pill-filled-red text-xs py-2.5 w-full justify-center">
                        <i class="fa-solid fa-file-pdf mr-1"></i> Download Printable PDF
                    </button>
                </div>

            </div>
        </div>
    </section>
@endsection
