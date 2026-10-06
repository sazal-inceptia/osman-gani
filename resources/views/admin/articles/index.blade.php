@extends('admin.layout')

@section('title', 'Manage Articles')
@section('page_title', 'Articles & Blog Management')
@section('page_subtitle', 'Write and publish thought leadership, sales advice, and mindset articles')

@section('top_actions')
    <a href="{{ route('admin.articles.create') }}" class="btn-pill-filled-red text-xs px-4 py-2">
        <i class="fa-solid fa-plus mr-1"></i> Write New Article
    </a>
@endsection

@section('content')
    <div class="glass-card rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-gray-800/80 flex items-center justify-between">
            <h3 class="font-oswald text-lg font-bold uppercase text-white">All Published Articles ({{ $articles->count() }})</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-white/[0.02] text-gray-400 border-b border-gray-800 uppercase text-[10px] tracking-wider">
                        <th class="p-4">Title &amp; Excerpt</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Read Time</th>
                        <th class="p-4">Published Date</th>
                        <th class="p-4">Featured</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/40">
                    @forelse ($articles as $article)
                        <tr class="hover:bg-white/[0.02] transition">
                            <td class="p-4 max-w-md">
                                <div class="font-bold text-white font-oswald text-base tracking-wide">{{ $article->title }}</div>
                                <div class="text-gray-400 text-xs line-clamp-1">{{ $article->excerpt }}</div>
                            </td>
                            <td class="p-4">
                                <span class="bg-white/10 text-gray-200 px-2.5 py-1 rounded text-[11px] font-semibold font-mono">
                                    {{ $article->category }}
                                </span>
                            </td>
                            <td class="p-4 text-gray-400 font-mono">{{ $article->read_time }}</td>
                            <td class="p-4 text-gray-400 font-mono">{{ $article->published_at ? $article->published_at->format('M d, Y') : 'Draft' }}</td>
                            <td class="p-4">
                                @if ($article->is_featured)
                                    <span class="bg-red-600/20 text-[#df3243] border border-red-500/30 px-2.5 py-0.5 rounded-full text-[10px] font-bold">
                                        ★ Featured
                                    </span>
                                @else
                                    <span class="text-gray-500 text-[11px]">-</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1.5 rounded-lg text-xs transition">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
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
                            <td colspan="6" class="p-8 text-center text-gray-500">No articles published yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
