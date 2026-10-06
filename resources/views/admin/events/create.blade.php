@extends('admin.layout')

@section('title', 'Add New Event')
@section('page_title', 'Schedule New Event')
@section('page_subtitle', 'Create a new live bootcamp, corporate workshop, or arena keynote')

@section('content')
    <div class="max-w-4xl glass-card rounded-2xl p-8">
        <form action="{{ route('admin.events.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Event Title *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required placeholder="e.g. TRAIN THE TRAINER BOOTCAMP 2026"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Subtitle / Tagline</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle') }}" placeholder="e.g. 3-Day Immersive Certification For Speakers & Corporate Trainers"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Event Date String *</label>
                    <input type="text" name="date_string" value="{{ old('date_string', 'November 14-16, 2026') }}" required placeholder="e.g. November 14-16, 2026"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Event Format / Type</label>
                    <input type="text" name="event_type" value="{{ old('event_type', 'Certification Bootcamp') }}" placeholder="e.g. Mega Arena Keynote, Mastermind"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Venue / Location</label>
                    <input type="text" name="location" value="{{ old('location', 'Radisson Blu Water Garden, Dhaka & Global Live Stream') }}" placeholder="e.g. Dhaka & Online"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Ticket Pricing</label>
                    <input type="text" name="pricing" value="{{ old('pricing', 'VIP: ৳25,000 | Online: ৳9,900') }}" placeholder="e.g. VIP: ৳25,000"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Registration Link URL</label>
                    <input type="url" name="registration_link" value="{{ old('registration_link', 'https://osmangani.com') }}" placeholder="https://..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 1) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Event Highlights &amp; Overview</label>
                    <textarea name="description" rows="4" placeholder="Overview of speakers, transformation modules, and seating info..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('description') }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_upcoming" value="1" {{ old('is_upcoming', 1) ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#0d1017] border-gray-700 text-[#df3243]">
                        <span class="text-xs text-gray-300 font-semibold">Mark as active upcoming event</span>
                    </label>
                </div>

            </div>

            <div class="pt-6 border-t border-gray-800 flex items-center justify-end gap-3">
                <a href="{{ route('admin.events.index') }}" class="btn-pill-white text-xs px-5 py-2.5">Cancel</a>
                <button type="submit" class="btn-pill-filled-red text-xs px-6 py-2.5">
                    <i class="fa-solid fa-save mr-1"></i> Save Event
                </button>
            </div>
        </form>
    </div>
@endsection
