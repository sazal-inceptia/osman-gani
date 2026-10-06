@extends('admin.layout')

@section('title', 'Site Settings')
@section('page_title', 'Brand & Website Settings')
@section('page_subtitle', 'Configure live contact info, social links, support hotlines, and hero text')

@section('content')
    <div class="max-w-4xl glass-card rounded-2xl p-8">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-8">
            @csrf

            @foreach ($settings as $group => $items)
                <div class="space-y-4 pt-6 first:pt-0 border-t first:border-t-0 border-gray-800">
                    <h3 class="font-oswald text-lg font-bold uppercase text-[#df3243] flex items-center gap-2">
                        <i class="fa-solid fa-gear text-sm"></i>
                        <span>{{ ucfirst($group) }} Configuration</span>
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($items as $setting)
                            <div class="{{ in_array($setting->type, ['textarea']) ? 'sm:col-span-2' : '' }}">
                                <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                                    {{ $setting->label ?? $setting->key }}
                                </label>

                                @if ($setting->type === 'textarea')
                                    <textarea name="settings[{{ $setting->key }}]" rows="3"
                                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('settings.'.$setting->key, $setting->value) }}</textarea>
                                @else
                                    <input type="{{ $setting->type }}" name="settings[{{ $setting->key }}]" value="{{ old('settings.'.$setting->key, $setting->value) }}"
                                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">
                                @endif
                                <span class="text-[10px] text-gray-500 font-mono mt-1 block">Key: {{ $setting->key }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="pt-6 border-t border-gray-800 flex items-center justify-end gap-3">
                <button type="submit" class="btn-pill-filled-red text-xs px-8 py-3 font-semibold shadow-lg shadow-red-600/30">
                    <i class="fa-solid fa-floppy-disk mr-1.5"></i> Save Site Settings
                </button>
            </div>
        </form>
    </div>
@endsection
