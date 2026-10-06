@extends('admin.layout')

@section('title', 'Manage Courses')
@section('page_title', 'Master Courses Management')
@section('page_subtitle', 'Manage online masterclasses, curriculum, pricing, and enroll links')

@section('top_actions')
    <a href="{{ route('admin.courses.create') }}" class="btn-pill-filled-red text-xs px-4 py-2">
        <i class="fa-solid fa-plus mr-1"></i> Add New Course
    </a>
@endsection

@section('content')
    <div class="glass-card rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-gray-800/80 flex items-center justify-between">
            <h3 class="font-oswald text-lg font-bold uppercase text-white">All Masterclasses ({{ $courses->count() }})</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-white/[0.02] text-gray-400 border-b border-gray-800 uppercase text-[10px] tracking-wider">
                        <th class="p-4">Title &amp; Badge</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Duration &amp; Modules</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Order</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/40">
                    @forelse ($courses as $course)
                        <tr class="hover:bg-white/[0.02] transition">
                            <td class="p-4">
                                <div class="font-bold text-white font-oswald text-base tracking-wide flex items-center gap-2">
                                    <span>{{ $course->title }}</span>
                                    @if ($course->badge)
                                        <span class="bg-amber-500/20 text-amber-400 border border-amber-500/30 px-2 py-0.5 rounded text-[10px] font-bold">
                                            {{ $course->badge }}
                                        </span>
                                    @endif
                                </div>
                                <div class="text-gray-400 text-xs line-clamp-1">{{ $course->tagline }}</div>
                            </td>
                            <td class="p-4 font-mono font-semibold text-emerald-400">{{ $course->price ?? 'Free' }}</td>
                            <td class="p-4 text-gray-300">{{ $course->duration }} • {{ $course->modules_count }}</td>
                            <td class="p-4">
                                @if ($course->is_popular)
                                    <span class="bg-red-600/20 text-[#df3243] border border-red-500/30 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                        ★ Highlighted
                                    </span>
                                @else
                                    <span class="bg-gray-800 text-gray-400 px-2.5 py-0.5 rounded-full text-[10px]">Normal</span>
                                @endif
                            </td>
                            <td class="p-4 font-mono text-gray-400">{{ $course->sort_order }}</td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.courses.edit', $course) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1.5 rounded-lg text-xs transition">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this course?');">
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
                            <td colspan="6" class="p-8 text-center text-gray-500">No masterclasses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
