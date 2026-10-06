@extends('admin.layout')

@section('title', 'Add New Course')
@section('page_title', 'Add New Masterclass')
@section('page_subtitle', 'Publish a new online course and configure syllabus')

@section('content')
    <div class="max-w-4xl glass-card rounded-2xl p-8">
        <form action="{{ route('admin.courses.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Course Title *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required placeholder="e.g. AI Mastery Blueprint"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Short Tagline</label>
                    <input type="text" name="tagline" value="{{ old('tagline') }}" placeholder="e.g. 15+ AI Tools for Business & Career"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Price Display</label>
                    <input type="text" name="price" value="{{ old('price', '$99 / ৳9,990') }}" placeholder="e.g. $99 / ৳9,990"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Original / Slashed Price</label>
                    <input type="text" name="original_price" value="{{ old('original_price', '$299') }}" placeholder="e.g. $299"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Duration</label>
                    <input type="text" name="duration" value="{{ old('duration', 'Lifetime Access') }}" placeholder="e.g. 23 Days, Self-Paced"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Modules Count</label>
                    <input type="text" name="modules_count" value="{{ old('modules_count', '18 Video Modules') }}" placeholder="e.g. 12 Modules"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Ribbon / Badge Text</label>
                    <input type="text" name="badge" value="{{ old('badge', '★ Most Popular') }}" placeholder="e.g. ★ Most Popular"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Enrollment Link URL</label>
                    <input type="url" name="enroll_link" value="{{ old('enroll_link', 'https://osmangani.com') }}" placeholder="https://..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Key Takeaways / Bullet Points (One per line)</label>
                    <textarea name="key_takeaways_raw" rows="4" placeholder="Master ChatGPT, Midjourney, Claude & Automation Agents&#10;Step-by-step prompt libraries for marketing&#10;No coding required"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('key_takeaways_raw') }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Full Description</label>
                    <textarea name="description" rows="3" placeholder="Detailed masterclass overview..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('description') }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 1) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="flex items-center pt-6">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_popular" value="1" {{ old('is_popular') ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#0d1017] border-gray-700 text-[#df3243]">
                        <span class="text-xs text-gray-300 font-semibold">Highlight on homepage</span>
                    </label>
                </div>

            </div>

            <div class="pt-6 border-t border-gray-800 flex items-center justify-end gap-3">
                <a href="{{ route('admin.courses.index') }}" class="btn-pill-white text-xs px-5 py-2.5">Cancel</a>
                <button type="submit" class="btn-pill-filled-red text-xs px-6 py-2.5">
                    <i class="fa-solid fa-save mr-1"></i> Save Course
                </button>
            </div>
        </form>
    </div>
@endsection
