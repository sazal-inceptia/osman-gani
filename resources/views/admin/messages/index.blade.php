@extends('admin.layout')

@section('title', 'Client Inquiries')
@section('page_title', 'Client Inquiries & Booking Requests')
@section('page_subtitle', 'Review incoming messages from keynote invitations, executive coaching, and bulk book inquiries')

@section('content')
    <div class="glass-card rounded-2xl overflow-hidden">
        <div class="p-6 border-b border-gray-800/80 flex items-center justify-between">
            <h3 class="font-oswald text-lg font-bold uppercase text-white">All Inquiries ({{ $messages->total() }})</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-white/[0.02] text-gray-400 border-b border-gray-800 uppercase text-[10px] tracking-wider">
                        <th class="p-4">Sender</th>
                        <th class="p-4">Phone / Org</th>
                        <th class="p-4">Inquiry Category</th>
                        <th class="p-4">Date Received</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800/40">
                    @forelse ($messages as $msg)
                        <tr class="hover:bg-white/[0.02] transition {{ ! $msg->is_read ? 'bg-red-500/[0.03]' : '' }}">
                            <td class="p-4">
                                <div class="font-bold text-white text-sm flex items-center gap-2">
                                    @if (! $msg->is_read)
                                        <span class="w-2 h-2 rounded-full bg-[#df3243]"></span>
                                    @endif
                                    <span>{{ $msg->name }}</span>
                                </div>
                                <div class="text-gray-400 text-xs">{{ $msg->email }}</div>
                            </td>
                            <td class="p-4 font-mono text-gray-300">
                                <div>{{ $msg->phone ?? '-' }}</div>
                                <div class="text-[11px] text-gray-500">{{ $msg->organization ?? '' }}</div>
                            </td>
                            <td class="p-4">
                                <span class="bg-white/10 text-gray-200 border border-white/10 px-2.5 py-1 rounded text-[11px] font-semibold">
                                    {{ $msg->inquiry_type }}
                                </span>
                            </td>
                            <td class="p-4 text-gray-400 font-mono">{{ $msg->created_at->format('M d, Y h:i A') }}</td>
                            <td class="p-4">
                                @if (! $msg->is_read)
                                    <span class="bg-[#df3243] text-white px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider">
                                        Unread
                                    </span>
                                @else
                                    <span class="text-gray-500 text-[11px]">Read</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <a href="{{ route('admin.messages.show', $msg) }}" class="bg-white/10 hover:bg-white/20 text-white px-3 py-1.5 rounded-lg text-xs transition">
                                    <i class="fa-solid fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this message?');">
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
                            <td colspan="6" class="p-8 text-center text-gray-500">No client messages received yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($messages->hasPages())
            <div class="p-4 border-t border-gray-800">
                {{ $messages->links() }}
            </div>
        @endif
    </div>
@endsection
