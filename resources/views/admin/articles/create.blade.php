@extends('admin.layout')

@section('title', 'Write New Article')
@section('page_title', 'Write New Thought Article')
@section('page_subtitle', 'Draft and publish practical insights for entrepreneurs and leaders')

@section('content')
    <div class="max-w-4xl glass-card rounded-2xl p-8">
        <form action="{{ route('admin.articles.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Article Headline / Title *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required placeholder="e.g. Why 95% of Goal Setting Fails & The Architecture That Works"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Category *</label>
                    <input type="text" name="category" value="{{ old('category', 'Mindset') }}" required placeholder="e.g. Sales, Mindset, Leadership, Productivity"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Estimated Read Time</label>
                    <input type="text" name="read_time" value="{{ old('read_time', '5 min read') }}" placeholder="e.g. 6 min read"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Author Name</label>
                    <input type="text" name="author" value="{{ old('author', 'Osman Gani') }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Custom URL Slug (Optional)</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" placeholder="auto-generated-if-blank"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Short Summary / Excerpt</label>
                    <textarea name="excerpt" rows="2" placeholder="One or two sentences highlighting the core message of this article..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('excerpt') }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Full Article Body Content</label>
                    <textarea name="content" rows="8" placeholder="Write full article markdown or paragraphs here..."
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('content') }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', 1) ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#0d1017] border-gray-700 text-[#df3243]">
                        <span class="text-xs text-gray-300 font-semibold">Featured on home &amp; blog feeds</span>
                    </label>
                </div>

            </div>

            <div class="pt-6 border-t border-gray-800 flex items-center justify-end gap-3">
                <a href="{{ route('admin.articles.index') }}" class="btn-pill-white text-xs px-5 py-2.5">Cancel</a>
                <button type="submit" class="btn-pill-filled-red text-xs px-6 py-2.5">
                    <i class="fa-solid fa-paper-plane mr-1"></i> Publish Article
                </button>
            </div>
        </form>
    </div>
@endsection
