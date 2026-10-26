@extends('layouts.app')

@section('title', 'Articles & Blog Insights | Osman Gani Knowledge Hub')
@section('meta_description', 'Read high-impact articles, leadership breakdowns, time management secrets, and sales strategies by Osman Gani.')

@section('content')
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Articles &amp; Insights</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Practical Wisdom For <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Exponential Business Growth</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Proven essays, management strategies, and tactical ideas curated by Osman Gani.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Article 1 -->
                <article class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-[#0c0d12] relative flex items-center justify-center p-6 text-center">
                            <span class="absolute top-4 left-4 bg-[#c92a2a] text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Mindset</span>
                            <span class="font-oswald text-xl text-gray-200 uppercase font-bold">Goal Architecture</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-500 text-xs font-mono">October 2026 • 6 min read</span>
                            <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                Why 95% of Goal Setting Fails &amp; The Architecture That Actually Works
                            </h3>
                            <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                                Most people set goals based on excitement rather than structural systems. Discover how to create unbreakable commitment mechanisms.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="{{ route('contact') }}" class="text-[#c92a2a] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 font-semibold hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-[#1e293b] relative flex items-center justify-center p-6 text-center">
                            <span class="absolute top-4 left-4 bg-slate-700 text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Sales</span>
                            <span class="font-oswald text-xl text-gray-200 uppercase font-bold">High-Ticket Closing</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-500 text-xs font-mono">September 2026 • 8 min read</span>
                            <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                The High-Ticket Closing Conversation: 4 Questions That Disarm Objections
                            </h3>
                            <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                                Instead of pitching relentlessly, guide prospective clients through value discovery. Master consultative closing.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="{{ route('contact') }}" class="text-[#c92a2a] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 font-semibold hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="reveal-card bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-[#12141c] relative flex items-center justify-center p-6 text-center">
                            <span class="absolute top-4 left-4 bg-emerald-700 text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Productivity</span>
                            <span class="font-oswald text-xl text-gray-200 uppercase font-bold">Focus Protocol</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-500 text-xs font-mono">August 2026 • 5 min read</span>
                            <h3 class="font-oswald text-xl sm:text-2xl font-bold text-gray-900 uppercase group-hover:text-[#c92a2a] transition leading-snug">
                                The 90-90-1 Focus Protocol For Massive Business Output
                            </h3>
                            <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                                Dedicate the first 90 minutes of your workday for the next 90 days to your single highest commercial opportunity.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="{{ route('contact') }}" class="text-[#c92a2a] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 font-semibold hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>
@endsection
