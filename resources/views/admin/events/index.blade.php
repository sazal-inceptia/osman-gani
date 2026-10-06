@extends('admin.layout')

@section('title', 'Manage Events')
@section('page_title', 'Live Events & Bootcamps Management')
@section('page_subtitle', 'Schedule workshops, speaking keynotes, and masterminds')

@section('top_actions')
    <a href="{{ route('admin.events.create') }}" class="btn-pill-filled-red text-xs px-4 py-2">
        <i class="fa-solid fa-plus mr-1"></i> Add New Event
    </a>
@endsection

@section('content')
    <div class="glass-card rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-gray-800/80 flex items-center justify-between">
            <h3 class="font-oswald text-lg font-bold uppercase text-white">All Events ({{ $events->count() }})</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-white/[0.02] text-gray-400 border-b border-gray-800 uppercase text-[10px] tracking-wider">
                        <th class="p-4">Title &amp; Type</th>
                        <th class="p-4">Date String</th>
                        <th class="p-4">Location</th>
                        <th class="p-4">Pricing</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/40">
                    @forelse ($events as $event)
                        <tr class="hover:bg-white/[0.02] transition">
                            <td class="p-4">
                                <div class="font-bold text-white font-oswald text-base tracking-wide">{{ $event->title }}</div>
                                <div class="text-amber-400 text-[11px] font-semibold">{{ $event->event_type }}</div>
                            </td>
                            <td class="p-4 font-mono text-gray-300">{{ $event->date_string }}</td>
                            <td class="p-4 text-gray-300">{{ $event->location }}</td>
                            <td class="p-4 font-mono font-semibold text-emerald-400">{{ $event->pricing ?? 'Free' }}</td>
                            <td class="p-4">
                                @if ($event->is_upcoming)
                                    <span class="bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase">
                                        Upcoming
                                    </span>
                                @else
                                    <span class="bg-gray-800 text-gray-400 px-2.5 py-0.5 rounded-full text-[10px]">Archived</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.events.edit', $event) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1.5 rounded-lg text-xs transition">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600/20 hover:bg-red-600 text-red-300 hover:text-white px-3 py-1.5 rounded-lg text-xs transition border border-red-500/30">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-500">No events found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
