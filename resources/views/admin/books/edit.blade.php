@extends('admin.layout')

@section('title', 'Edit Book')
@section('page_title', 'Edit Book')
@section('page_subtitle', 'Update book information, pricing, and purchase links')

@section('content')
    <div class="max-w-4xl glass-card rounded-2xl p-8">
        <form action="{{ route('admin.books.update', $book) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Book Title *</label>
                    <input type="text" name="title" value="{{ old('title', $book->title) }}" required
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Subtitle / Tagline</label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $book->subtitle) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Price Display</label>
                    <input type="text" name="price" value="{{ old('price', $book->price) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Languages</label>
                    <input type="text" name="languages" value="{{ old('languages', $book->languages) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Amazon / Buy Link URL</label>
                    <input type="url" name="buy_link" value="{{ old('buy_link', $book->buy_link) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Display Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $book->sort_order) }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('description', $book->description) }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_bestseller" value="1" {{ old('is_bestseller', $book->is_bestseller) ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#0d1017] border-gray-700 text-[#df3243]">
                        <span class="text-xs text-gray-300 font-semibold">Mark as Bestseller badge</span>
                    </label>
                </div>

            </div>

            <div class="pt-6 border-t border-gray-800 flex items-center justify-end gap-3">
                <a href="{{ route('admin.books.index') }}" class="btn-pill-white text-xs px-5 py-2.5">Cancel</a>
                <button type="submit" class="btn-pill-filled-red text-xs px-6 py-2.5">
                    <i class="fa-solid fa-save mr-1"></i> Update Book
                </button>
            </div>
        </form>
    </div>
@endsection
