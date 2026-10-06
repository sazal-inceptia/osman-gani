@extends('admin.layout')

@section('title', 'Overview Dashboard')
@section('page_title', 'Administrative Overview')
@section('page_subtitle', 'Real-time metrics, active programs, and recent user communications')

@section('top_actions')
    <a href="{{ route('admin.articles.create') }}" class="btn-pill-filled-red text-xs px-4 py-2">
        <i class="fa-solid fa-plus mr-1"></i> New Article
    </a>
@endsection

@section('content')
    <!-- ======================================================== -->
    <!-- 1. STATS METRICS GRID -->
    <!-- ======================================================== -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <!-- Books Stat -->
        <a href="{{ route('admin.books.index') }}" class="glass-card rounded-2xl p-5 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Published Books</span>
                <div class="w-10 h-10 rounded-xl bg-red-600/10 text-[#df3243] flex items-center justify-center text-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-book-open"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="text-3xl font-oswald font-bold text-white">{{ $stats['books_count'] }}</div>
                <div class="text-[11px] text-gray-400 mt-1 flex items-center gap-1">
                    <span>Manage catalog &amp; purchase links</span>
                    <i class="fa-solid fa-arrow-right text-[9px] text-[#df3243]"></i>
                </div>
            </div>
        </a>

        <!-- Courses Stat -->
        <a href="{{ route('admin.courses.index') }}" class="glass-card rounded-2xl p-5 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Master Courses</span>
                <div class="w-10 h-10 rounded-xl bg-amber-600/10 text-[#ff8421] flex items-center justify-center text-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="text-3xl font-oswald font-bold text-white">{{ $stats['courses_count'] }}</div>
                <div class="text-[11px] text-gray-400 mt-1 flex items-center gap-1">
                    <span>Online business &amp; AI programs</span>
                    <i class="fa-solid fa-arrow-right text-[9px] text-[#ff8421]"></i>
                </div>
            </div>
        </a>

        <!-- Events Stat -->
        <a href="{{ route('admin.events.index') }}" class="glass-card rounded-2xl p-5 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Live Bootcamps</span>
                <div class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-400 flex items-center justify-center text-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="text-3xl font-oswald font-bold text-white">{{ $stats['events_count'] }}</div>
                <div class="text-[11px] text-gray-400 mt-1 flex items-center gap-1">
                    <span>Keynote seminars &amp; masterminds</span>
                    <i class="fa-solid fa-arrow-right text-[9px] text-emerald-400"></i>
                </div>
            </div>
        </a>

        <!-- Messages Stat -->
        <a href="{{ route('admin.messages.index') }}" class="glass-card rounded-2xl p-5 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Client Inquiries</span>
                <div class="w-10 h-10 rounded-xl bg-blue-600/10 text-blue-400 flex items-center justify-center text-lg group-hover:scale-110 transition">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
            </div>
            <div class="mt-4">
                <div class="text-3xl font-oswald font-bold text-white flex items-center gap-2">
                    <span>{{ $stats['messages_count'] }}</span>
                    @if ($stats['unread_messages_count'] > 0)
                        <span class="text-xs bg-[#df3243] text-white px-2 py-0.5 rounded-full font-normal">
                            {{ $stats['unread_messages_count'] }} New
                        </span>
                    @endif
                </div>
                <div class="text-[11px] text-gray-400 mt-1 flex items-center gap-1">
                    <span>Executive speaking &amp; booking forms</span>
                    <i class="fa-solid fa-arrow-right text-[9px] text-blue-400"></i>
                </div>
            </div>
        </a>

    </div>

    <!-- ======================================================== -->
    <!-- 2. RECENT MESSAGES & RECENT ARTICLES -->
    <!-- ======================================================== -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Recent Inquiries (2 cols) -->
        <div class="lg:col-span-2 glass-card rounded-2xl p-6">
            <div class="flex items-center justify-between pb-4 border-b border-gray-800">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-envelope text-[#df3243]"></i>
                    <h3 class="font-oswald text-lg font-bold uppercase text-white">Recent Website Inquiries</h3>
                </div>
                <a href="{{ route('admin.messages.index') }}" class="text-xs text-[#df3243] hover:underline">View All &rarr;</a>
            </div>

            <div class="mt-4 overflow-x-auto">
                @if ($recentMessages->count() > 0)
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-gray-400 border-b border-gray-800/60 uppercase text-[10px] tracking-wider">
                                <th class="pb-3">Sender</th>
                                <th class="pb-3">Inquiry Type</th>
                                <th class="pb-3">Date</th>
                                <th class="pb-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800/40">
                            @foreach ($recentMessages as $msg)
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="py-3.5">
                                        <div class="font-semibold text-white flex items-center gap-2">
                                            @if (! $msg->is_read)
                                                <span class="w-2 h-2 rounded-full bg-[#df3243]"></span>
                                            @endif
                                            <span>{{ $msg->name }}</span>
                                        </div>
                                        <div class="text-[11px] text-gray-400">{{ $msg->email }}</div>
                                    </td>
                                    <td class="py-3.5">
                                        <span class="bg-white/5 border border-white/10 px-2.5 py-1 rounded text-[11px] text-gray-300">
                                            {{ $msg->inquiry_type }}
                                        </span>
                                    </td>
                                    <td class="py-3.5 text-gray-400">{{ $msg->created_at->diffForHumans() }}</td>
                                    <td class="py-3.5 text-right">
                                        <a href="{{ route('admin.messages.show', $msg) }}" class="text-gray-300 hover:text-white bg-white/10 hover:bg-white/20 px-3 py-1.5 rounded-lg transition text-[11px]">
                                            Open
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="py-12 text-center text-gray-500 text-xs">
                        <i class="fa-solid fa-inbox text-3xl mb-2 text-gray-600 block"></i>
                        No contact inquiries received yet. When visitors fill the Contact form, they appear here.
                    </div>
                @endif
            </div>
        </div>

        <!-- Quick Content Actions (1 col) -->
        <div class="space-y-6">
            
            <div class="glass-card rounded-2xl p-6 space-y-4">
                <h3 class="font-oswald text-lg font-bold uppercase text-white flex items-center gap-2 pb-3 border-b border-gray-800">
                    <i class="fa-solid fa-bolt text-amber-400"></i> Quick Management
                </h3>
                
                <div class="grid grid-cols-1 gap-2.5">
                    <a href="{{ route('admin.books.create') }}" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-red-600/20 border border-white/10 hover:border-red-500/30 transition text-xs font-semibold text-gray-200">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-plus text-[#df3243]"></i> Add New Book</span>
                        <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
                    </a>
                    
                    <a href="{{ route('admin.courses.create') }}" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-amber-600/20 border border-white/10 hover:border-amber-500/30 transition text-xs font-semibold text-gray-200">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-plus text-[#ff8421]"></i> Add New Course</span>
                        <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
                    </a>

                    <a href="{{ route('admin.events.create') }}" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-emerald-600/20 border border-white/10 hover:border-emerald-500/30 transition text-xs font-semibold text-gray-200">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-plus text-emerald-400"></i> Schedule New Event</span>
                        <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
                    </a>

                    <a href="{{ route('admin.settings.index') }}" class="flex items-center justify-between p-3 rounded-xl bg-white/5 hover:bg-blue-600/20 border border-white/10 hover:border-blue-500/30 transition text-xs font-semibold text-gray-200">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-sliders text-blue-400"></i> Edit Brand &amp; Contacts</span>
                        <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
                    </a>
                </div>
            </div>

            <!-- Published Articles Quick List -->
            <div class="glass-card rounded-2xl p-6">
                <div class="flex items-center justify-between pb-3 border-b border-gray-800 mb-3">
                    <h4 class="font-oswald text-base font-bold uppercase text-white">Articles &amp; Blog</h4>
                    <a href="{{ route('admin.articles.index') }}" class="text-[11px] text-[#df3243] hover:underline">Manage</a>
                </div>
                <div class="space-y-3">
                    @foreach ($recentArticles as $art)
                        <div class="text-xs">
                            <a href="{{ route('admin.articles.edit', $art) }}" class="font-semibold text-gray-200 hover:text-[#df3243] transition line-clamp-1">
                                {{ $art->title }}
                            </a>
                            <span class="text-[10px] text-gray-500 font-mono">{{ $art->category }} • {{ $art->created_at->format('M d, Y') }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
@endsection
