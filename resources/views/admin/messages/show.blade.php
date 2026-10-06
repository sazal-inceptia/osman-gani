@extends('admin.layout')

@section('title', 'View Inquiry Details')
@section('page_title', 'Inquiry Details')
@section('page_subtitle', 'Full communication message and sender details')

@section('top_actions')
    <a href="{{ route('admin.messages.index') }}" class="btn-pill-white text-xs px-4 py-2">
        <i class="fa-solid fa-arrow-left mr-1"></i> Back to All Messages
    </a>
@endsection

@section('content')
    <div class="max-w-4xl space-y-6">
        
        <!-- Header Profile Card -->
        <div class="glass-card rounded-2xl p-8 border border-gray-800">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-6 border-b border-gray-800">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#df3243] to-[#800d18] flex items-center justify-center text-white text-2xl font-bold font-oswald shadow-lg shadow-red-950/50">
                        {{ strtoupper(substr($message->name, 0, 1)) }}
                    </div>
                    <div>
                        <h3 class="font-oswald text-2xl font-bold text-white">{{ $message->name }}</h3>
                        <div class="flex flex-wrap items-center gap-3 text-xs text-gray-400 mt-1">
                            <a href="mailto:{{ $message->email }}" class="hover:text-[#df3243] transition flex items-center gap-1 font-mono">
                                <i class="fa-solid fa-envelope text-[#df3243]"></i> {{ $message->email }}
                            </a>
                            @if ($message->phone)
                                <span>•</span>
                                <a href="tel:{{ $message->phone }}" class="hover:text-[#df3243] transition flex items-center gap-1 font-mono">
                                    <i class="fa-solid fa-phone text-[#df3243]"></i> {{ $message->phone }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <form action="{{ route('admin.messages.toggle-read', $message) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-white/10 hover:bg-white/20 text-xs text-white px-4 py-2 rounded-xl transition">
                            {{ $message->is_read ? 'Mark as Unread' : 'Mark as Read' }}
                        </button>
                    </form>

                    <a href="mailto:{{ $message->email }}?subject=Re: {{ urlencode($message->subject ?? 'Your inquiry to Osman Gani') }}" class="btn-pill-filled-red text-xs px-4 py-2">
                        <i class="fa-solid fa-reply mr-1"></i> Reply via Email
                    </a>
                </div>
            </div>

            <!-- Details Meta Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-6 border-b border-gray-800 text-xs">
                <div>
                    <span class="text-gray-500 uppercase text-[10px] font-semibold block mb-1">Inquiry Type</span>
                    <span class="bg-white/10 text-white font-semibold px-3 py-1 rounded-lg border border-white/10 inline-block">
                        {{ $message->inquiry_type }}
                    </span>
                </div>
                <div>
                    <span class="text-gray-500 uppercase text-[10px] font-semibold block mb-1">Organization / Company</span>
                    <span class="text-gray-200 font-medium">{{ $message->organization ?? 'Not specified' }}</span>
                </div>
                <div>
                    <span class="text-gray-500 uppercase text-[10px] font-semibold block mb-1">Received At</span>
                    <span class="text-gray-200 font-mono">{{ $message->created_at->format('F d, Y \a\t h:i A') }}</span>
                </div>
            </div>

            <!-- Message Subject & Body -->
            <div class="pt-6 space-y-4">
                @if ($message->subject)
                    <div class="text-sm font-bold text-amber-400 font-montserrat">
                        Subject: {{ $message->subject }}
                    </div>
                @endif
                <div class="bg-[#0b0e14] p-6 rounded-2xl border border-gray-800/80 text-sm text-gray-200 leading-relaxed font-ubuntu whitespace-pre-wrap">
{{ $message->message }}
                </div>
            </div>
        </div>

    </div>
@endsection
