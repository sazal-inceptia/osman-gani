@extends('admin.layout')

@section('title', 'Manage Books')
@section('page_title', 'Books Catalog Management')
@section('page_subtitle', 'Add, edit, reorder, and configure purchase links for all published books')

@section('top_actions')
    <a href="{{ route('admin.books.create') }}" class="btn-pill-filled-red text-xs px-4 py-2">
        <i class="fa-solid fa-plus mr-1"></i> Add New Book
    </a>
@endsection

@section('content')
    <div class="glass-card rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-gray-800/80 flex items-center justify-between">
            <h3 class="font-oswald text-lg font-bold uppercase text-white">All Books ({{ $books->count() }})</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-white/[0.02] text-gray-400 border-b border-gray-800 uppercase text-[10px] tracking-wider">
                        <th class="p-4">Title &amp; Subtitle</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Languages</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Order</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/40">
                    @forelse ($books as $book)
                        <tr class="hover:bg-white/[0.02] transition">
                            <td class="p-4">
                                <div class="font-bold text-white font-oswald text-base tracking-wide">{{ $book->title }}</div>
                                <div class="text-gray-400 text-xs line-clamp-1">{{ $book->subtitle }}</div>
                            </td>
                            <td class="p-4 font-mono font-semibold text-amber-400">{{ $book->price ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-300">{{ $book->languages }}</td>
                            <td class="p-4">
                                @if ($book->is_bestseller)
                                    <span class="bg-red-600/20 text-[#df3243] border border-red-500/30 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                        ★ Bestseller
                                    </span>
                                @else
                                    <span class="bg-gray-800 text-gray-400 px-2.5 py-0.5 rounded-full text-[10px]">Standard</span>
                                @endif
                            </td>
                            <td class="p-4 font-mono text-gray-400">{{ $book->sort_order }}</td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.books.edit', $book) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1.5 rounded-lg text-xs transition">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this book?');">
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
                            <td colspan="6" class="p-8 text-center text-gray-500">No books found in the catalog.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
