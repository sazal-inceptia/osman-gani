@extends('layouts.app')

@section('title', 'Articles & Blog Insights | Osman Gani Knowledge Hub')
@section('meta_description', 'Read high-impact articles, leadership breakdowns, time management secrets, and sales strategies by Osman Gani.')

@section('content')
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Articles &amp; Insights</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                Practical Wisdom For <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    Exponential Business Growth
                </span>
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Proven essays, management strategies, and tactical ideas curated by Osman Gani.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#050608] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Article 1 -->
                <article class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative">
                            <span class="absolute top-4 left-4 bg-[#df3243] text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Mindset</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-400 text-xs font-mono">October 2026 • 6 min read</span>
                            <h3 class="font-oswald text-2xl font-bold text-white uppercase group-hover:text-[#df3243] transition">
                                Why 95% of Goal Setting Fails &amp; The Architecture That Actually Works
                            </h3>
                            <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                                Most people set goals based on excitement rather than structural systems. Discover how to create unbreakable commitment mechanisms.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#" class="text-[#df3243] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative">
                            <span class="absolute top-4 left-4 bg-[#ff8421] text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Sales</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-400 text-xs font-mono">September 2026 • 8 min read</span>
                            <h3 class="font-oswald text-2xl font-bold text-white uppercase group-hover:text-[#ff8421] transition">
                                The High-Ticket Closing Conversation: 4 Questions That Disarm Objections
                            </h3>
                            <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                                Instead of pitching relentlessly, guide prospective clients through value discovery. Master consultative closing.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#" class="text-[#ff8421] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="glass-card rounded-3xl overflow-hidden flex flex-col justify-between group">
                    <div>
                        <div class="aspect-video bg-gradient-to-br from-zinc-800 to-black relative">
                            <span class="absolute top-4 left-4 bg-[#4cadad] text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded">Productivity</span>
                        </div>
                        <div class="p-6 space-y-3">
                            <span class="text-gray-400 text-xs font-mono">August 2026 • 5 min read</span>
                            <h3 class="font-oswald text-2xl font-bold text-white uppercase group-hover:text-[#4cadad] transition">
                                The 90-90-1 Focus Protocol For Massive Business Output
                            </h3>
                            <p class="text-gray-400 font-ubuntu text-xs leading-relaxed">
                                Dedicate the first 90 minutes of your workday for the next 90 days to your single highest commercial opportunity.
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="#" class="text-[#4cadad] font-oswald text-sm uppercase tracking-wider inline-flex items-center gap-1 hover:underline">
                            Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>
@endsection
