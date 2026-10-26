@extends('admin.layout')

@section('title', 'Home Page Control Center')
@section('page_title', 'Home Page Management')
@section('page_subtitle', 'Configure hero headlines, YouTube / MP4 video media, action buttons, and speaker card')

@section('top_actions')
    <a href="{{ route('home') }}" target="_blank" class="btn-pill-white text-xs px-4 py-2 inline-flex items-center gap-2">
        <i class="fa-solid fa-arrow-up-right-from-square text-xs text-[#df3243]"></i>
        <span>View Live Website</span>
    </a>
@endsection

@section('content')
    <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8 max-w-6xl">
        @csrf

        <!-- ======================================================== -->
        <!-- 1. HERO VIDEO & MEDIA SHOWCASE (PRIMARY USER REQUIREMENT) -->
        <!-- ======================================================== -->
        <div class="glass-card rounded-2xl p-6 sm:p-8 border border-red-500/20 shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-80 h-80 bg-[#df3243]/10 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-gray-800 gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-[#df3243] to-[#ff8421] flex items-center justify-center text-white text-xl shadow-lg shadow-red-950/50">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <div>
                        <h2 class="font-oswald text-xl font-bold uppercase text-white tracking-wide">Hero Video &amp; Speaker Card</h2>
                        <p class="text-xs text-gray-400">Control the interactive video modal (YouTube or uploaded MP4) and speaker profile card.</p>
                    </div>
                </div>

                <div class="inline-flex p-1 bg-[#090b10] rounded-xl border border-gray-800 text-xs font-semibold">
                    <label class="flex items-center gap-2 px-3 py-1.5 rounded-lg cursor-pointer transition {{ ($settings['hero_video_type'] ?? 'youtube') === 'youtube' ? 'bg-[#df3243] text-white' : 'text-gray-400 hover:text-white' }}">
                        <input type="radio" name="hero_video_type" value="youtube" class="hidden" {{ ($settings['hero_video_type'] ?? 'youtube') === 'youtube' ? 'checked' : '' }} onchange="toggleVideoType('youtube')">
                        <i class="fa-brands fa-youtube"></i>
                        <span>YouTube Video</span>
                    </label>
                    <label class="flex items-center gap-2 px-3 py-1.5 rounded-lg cursor-pointer transition {{ ($settings['hero_video_type'] ?? 'youtube') === 'upload' ? 'bg-[#df3243] text-white' : 'text-gray-400 hover:text-white' }}">
                        <input type="radio" name="hero_video_type" value="upload" class="hidden" {{ ($settings['hero_video_type'] ?? 'youtube') === 'upload' ? 'checked' : '' }} onchange="toggleVideoType('upload')">
                        <i class="fa-solid fa-file-video"></i>
                        <span>Upload MP4 File</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-6">
                
                <!-- Left Video Config -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- YouTube Configuration Panel -->
                    <div id="youtube-config-panel" class="{{ ($settings['hero_video_type'] ?? 'youtube') === 'upload' ? 'hidden' : '' }} space-y-4">
                        <div>
                            <label for="hero_video_youtube_url" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                                <i class="fa-brands fa-youtube text-red-500 mr-1"></i> YouTube Video URL or Video ID
                            </label>
                            <input type="text" id="hero_video_youtube_url" name="hero_video_youtube_url"
                                value="{{ old('hero_video_youtube_url', $settings['hero_video_youtube_url'] ?? 'https://www.youtube.com/watch?v=8GExpo8Y2gQ') }}"
                                placeholder="https://www.youtube.com/watch?v=... or https://youtu.be/..."
                                class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243] focus:ring-1 focus:ring-[#df3243] transition">
                            <p class="text-[11px] text-gray-400 mt-1.5">
                                Supports standard watch links, share links (<code class="text-amber-400">youtu.be/...</code>), Shorts, or direct 11-character video IDs.
                            </p>
                        </div>

                        <!-- Current YouTube Preview -->
                        @php
                            $ytUrl = $settings['hero_video_youtube_url'] ?? 'https://www.youtube.com/watch?v=8GExpo8Y2gQ';
                            $embedUrl = \App\Models\SiteSetting::formatYouTubeEmbedUrl($ytUrl);
                        @endphp
                        <div class="bg-[#090b10] rounded-xl p-3 border border-gray-800">
                            <span class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider block mb-2">
                                <i class="fa-solid fa-eye text-[#df3243] mr-1"></i> Current YouTube Video Preview
                            </span>
                            <div class="aspect-video w-full rounded-lg overflow-hidden border border-gray-800 bg-black">
                                <iframe src="{{ str_replace('?autoplay=1', '', $embedUrl) }}" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- MP4 File Upload Panel -->
                    <div id="upload-config-panel" class="{{ ($settings['hero_video_type'] ?? 'youtube') === 'youtube' ? 'hidden' : '' }} space-y-4">
                        <div>
                            <label for="hero_video_file" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                                <i class="fa-solid fa-cloud-arrow-up text-[#ff8421] mr-1"></i> Upload MP4 Video File
                            </label>
                            
                            <div class="border-2 border-dashed border-gray-700 hover:border-[#df3243] rounded-2xl p-6 text-center bg-[#090b10] transition group cursor-pointer relative">
                                <input type="file" id="hero_video_file" name="hero_video_file" accept="video/mp4,video/quicktime,video/webm"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="previewVideoUpload(this)">
                                <div class="space-y-2 pointer-events-none">
                                    <div class="w-12 h-12 mx-auto rounded-full bg-white/5 flex items-center justify-center text-gray-400 group-hover:text-[#df3243] group-hover:scale-110 transition">
                                        <i class="fa-solid fa-film text-xl"></i>
                                    </div>
                                    <div class="text-xs text-gray-300 font-semibold">
                                        <span class="text-[#df3243]">Click to choose MP4 file</span> or drag and drop
                                    </div>
                                    <p class="text-[11px] text-gray-500">MP4, MOV, or WebM format</p>
                                </div>
                            </div>
                            <span id="selected-video-filename" class="text-xs text-emerald-400 font-mono mt-2 block hidden"></span>
                        </div>

                        <!-- Current Uploaded Video Preview -->
                        @if (!empty($settings['hero_video_file']) && \Illuminate\Support\Facades\Storage::disk('public')->exists($settings['hero_video_file']))
                            <div class="bg-[#090b10] rounded-xl p-4 border border-gray-800 space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-semibold text-emerald-400 flex items-center gap-1.5">
                                        <i class="fa-solid fa-circle-check"></i> Active Uploaded Video
                                    </span>
                                    <button type="button" onclick="document.getElementById('remove-video-form').submit()"
                                        class="text-xs text-red-400 hover:text-red-300 flex items-center gap-1 transition">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <span>Remove Video</span>
                                    </button>
                                </div>

                                <video controls class="w-full rounded-lg max-h-52 bg-black border border-gray-800">
                                    <source src="{{ asset('storage/' . $settings['hero_video_file']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="text-[11px] text-gray-400 font-mono truncate">
                                    Path: storage/{{ $settings['hero_video_file'] }}
                                </div>
                            </div>
                        @else
                            <div class="bg-gray-900/50 rounded-xl p-3 border border-gray-800 text-xs text-gray-400 flex items-center gap-2">
                                <i class="fa-solid fa-circle-info text-amber-400"></i>
                                <span>No MP4 video file currently uploaded. Choose a file above to upload, or switch to YouTube.</span>
                            </div>
                        @endif
                    </div>

                    <!-- Video Card Meta Overlay Fields -->
                    <div class="pt-4 border-t border-gray-800/80 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label for="hero_video_title" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Video Title</label>
                            <input type="text" id="hero_video_title" name="hero_video_title"
                                value="{{ old('hero_video_title', $settings['hero_video_title'] ?? 'How To 10x Your Life & Career') }}"
                                class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-white focus:outline-none focus:border-[#df3243]">
                        </div>
                        <div>
                            <label for="hero_video_duration" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Duration Badge</label>
                            <input type="text" id="hero_video_duration" name="hero_video_duration"
                                value="{{ old('hero_video_duration', $settings['hero_video_duration'] ?? '2 min') }}"
                                placeholder="e.g. 2 min"
                                class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-white focus:outline-none focus:border-[#df3243]">
                        </div>
                        <div>
                            <label for="hero_video_label" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Watch Label</label>
                            <input type="text" id="hero_video_label" name="hero_video_label"
                                value="{{ old('hero_video_label', $settings['hero_video_label'] ?? 'Watch Message') }}"
                                placeholder="e.g. Watch Message"
                                class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-white focus:outline-none focus:border-[#df3243]">
                        </div>
                    </div>

                </div>

                <!-- Right Speaker Profile Card Config -->
                <div class="lg:col-span-5 space-y-5 bg-[#090b10] rounded-2xl p-5 border border-gray-800">
                    <h3 class="font-oswald text-base font-bold uppercase text-white flex items-center gap-2">
                        <i class="fa-solid fa-id-badge text-[#ff8421]"></i>
                        <span>Speaker Card Visuals</span>
                    </h3>

                    <div>
                        <label for="hero_speaker_name" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Speaker Name</label>
                        <input type="text" id="hero_speaker_name" name="hero_speaker_name"
                            value="{{ old('hero_speaker_name', $settings['hero_speaker_name'] ?? 'OSMAN GANI') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>

                    <div>
                        <label for="hero_speaker_title" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Subtitle / Designation</label>
                        <input type="text" id="hero_speaker_title" name="hero_speaker_title"
                            value="{{ old('hero_speaker_title', $settings['hero_speaker_title'] ?? '#1 High Performance Coach') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>

                    <div>
                        <label for="hero_speaker_badge" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Badge / Achievement Tag</label>
                        <input type="text" id="hero_speaker_badge" name="hero_speaker_badge"
                            value="{{ old('hero_speaker_badge', $settings['hero_speaker_badge'] ?? 'Bestselling Author of 5+ Books') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>

                    <!-- Custom Photo Upload -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-1.5">Speaker Custom Photo (Optional)</label>
                        
                        <div class="flex items-center gap-4">
                            @if (!empty($settings['hero_speaker_image']) && \Illuminate\Support\Facades\Storage::disk('public')->exists($settings['hero_speaker_image']))
                                <div class="relative w-16 h-16 rounded-full overflow-hidden border-2 border-[#df3243] shrink-0">
                                    <img src="{{ asset('storage/' . $settings['hero_speaker_image']) }}" class="w-full h-full object-cover" alt="Speaker Photo">
                                </div>
                                <div class="space-y-1">
                                    <button type="button" onclick="document.getElementById('remove-speaker-form').submit()"
                                        class="text-xs text-red-400 hover:text-red-300 flex items-center gap-1 transition">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <span>Remove Photo</span>
                                    </button>
                                    <span class="text-[10px] text-gray-400 block">Revert to default OG initial circle</span>
                                </div>
                            @else
                                <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-[#df3243] to-[#ff8421] p-0.5 shrink-0 flex items-center justify-center">
                                    <div class="w-full h-full rounded-full bg-[#121520] flex items-center justify-center text-white font-oswald text-lg font-bold">
                                        OG
                                    </div>
                                </div>
                                <div class="text-[11px] text-gray-400">
                                    Default graphic active. Upload a portrait image to display a real speaker photo.
                                </div>
                            @endif
                        </div>

                        <input type="file" name="hero_speaker_image" accept="image/*"
                            class="mt-3 block w-full text-xs text-gray-400 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-white/10 file:text-white hover:file:bg-white/20 cursor-pointer">
                    </div>

                </div>

            </div>
        </div>


        <!-- ======================================================== -->
        <!-- 2. HERO HEADLINES & MAIN COPY -->
        <!-- ======================================================== -->
        <div class="glass-card rounded-2xl p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3 pb-5 border-b border-gray-800">
                <div class="w-10 h-10 rounded-xl bg-red-600/10 text-[#df3243] flex items-center justify-center text-lg">
                    <i class="fa-solid fa-heading"></i>
                </div>
                <div>
                    <h2 class="font-oswald text-xl font-bold uppercase text-white tracking-wide">Hero Headlines &amp; Tagline</h2>
                    <p class="text-xs text-gray-400">Customize the main hero title, gradient highlight words, and lead paragraph.</p>
                </div>
            </div>

            <!-- Top Badge Text -->
            <div>
                <label for="hero_badge" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Top Pill Badge Text</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-[#df3243] text-xs">
                        <i class="fa-solid fa-circle-dot"></i>
                    </span>
                    <input type="text" id="hero_badge" name="hero_badge"
                        value="{{ old('hero_badge', $settings['hero_badge'] ?? 'Global Transformation & Business Mastery') }}"
                        class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl pl-9 pr-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                </div>
            </div>

            <!-- Two-Part Dynamic Headline with Gradient Highlight Words -->
            <div class="space-y-4 bg-[#090b10] rounded-2xl p-5 border border-gray-800">
                <div class="text-xs font-semibold text-gray-300 uppercase tracking-wider">Headline Composition (Supports 2 Vibrant Gradient Highlights)</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="hero_heading_line1" class="block text-xs text-gray-400 mb-1">Part 1 Prefix Text</label>
                        <input type="text" id="hero_heading_line1" name="hero_heading_line1"
                            value="{{ old('hero_heading_line1', $settings['hero_heading_line1'] ?? 'Transform Your') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#df3243]"
                            oninput="updateHeadlinePreview()">
                    </div>
                    <div>
                        <label for="hero_heading_highlight1" class="block text-xs text-red-400 font-semibold mb-1">
                            <i class="fa-solid fa-wand-magic-sparkles mr-1"></i> Highlight 1 (Red/Orange Gradient)
                        </label>
                        <input type="text" id="hero_heading_highlight1" name="hero_heading_highlight1"
                            value="{{ old('hero_heading_highlight1', $settings['hero_heading_highlight1'] ?? 'Mindset') }}"
                            class="w-full bg-[#0d1017] border border-red-500/50 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#df3243]"
                            oninput="updateHeadlinePreview()">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="hero_heading_line2" class="block text-xs text-gray-400 mb-1">Part 2 Middle Text</label>
                        <input type="text" id="hero_heading_line2" name="hero_heading_line2"
                            value="{{ old('hero_heading_line2', $settings['hero_heading_line2'] ?? ', Multiply Your') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#df3243]"
                            oninput="updateHeadlinePreview()">
                    </div>
                    <div>
                        <label for="hero_heading_highlight2" class="block text-xs text-amber-400 font-semibold mb-1">
                            <i class="fa-solid fa-wand-magic-sparkles mr-1"></i> Highlight 2 (Orange/Gold Gradient)
                        </label>
                        <input type="text" id="hero_heading_highlight2" name="hero_heading_highlight2"
                            value="{{ old('hero_heading_highlight2', $settings['hero_heading_highlight2'] ?? 'Business') }}"
                            class="w-full bg-[#0d1017] border border-amber-500/50 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#df3243]"
                            oninput="updateHeadlinePreview()">
                    </div>
                </div>

                <!-- Live Preview of Headline -->
                <div class="pt-3 border-t border-gray-800">
                    <span class="text-[11px] font-semibold uppercase text-gray-500 block mb-1">Live Headline Preview:</span>
                    <div id="headline-preview" class="text-xl sm:text-2xl font-oswald font-extrabold uppercase text-white tracking-wide">
                        <span id="preview-line1">{{ $settings['hero_heading_line1'] ?? 'Transform Your' }}</span>
                        <span id="preview-hl1" class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff4757] via-[#ff6b81] to-[#ff8421]">{{ $settings['hero_heading_highlight1'] ?? 'Mindset' }}</span>
                        <span id="preview-line2">{{ $settings['hero_heading_line2'] ?? ', Multiply Your' }}</span>
                        <span id="preview-hl2" class="text-transparent bg-clip-text bg-gradient-to-r from-[#ff8421] to-[#ffa502]">{{ $settings['hero_heading_highlight2'] ?? 'Business' }}</span>
                    </div>
                </div>
            </div>

            <!-- Hero Description / Tagline -->
            <div>
                <label for="hero_tagline" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Hero Description Paragraph</label>
                <textarea id="hero_tagline" name="hero_tagline" rows="3"
                    class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243]">{{ old('hero_tagline', $settings['hero_tagline'] ?? '') }}</textarea>
            </div>

            <!-- Motto Banner Text -->
            <div>
                <label for="hero_motto_text" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">
                    <i class="fa-solid fa-ribbon text-[#df3243] mr-1"></i> Under-Hero Motto Banner Line
                </label>
                <input type="text" id="hero_motto_text" name="hero_motto_text"
                    value="{{ old('hero_motto_text', $settings['hero_motto_text'] ?? 'Results | Happiness | Success | Career Growth | Business Multiplication | Leadership') }}"
                    class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                <p class="text-[11px] text-gray-500 mt-1">Separate keywords using the pipe character (<code class="text-white">|</code>).</p>
            </div>

        </div>


        <!-- ======================================================== -->
        <!-- 3. CALL-TO-ACTION BUTTONS -->
        <!-- ======================================================== -->
        <div class="glass-card rounded-2xl p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3 pb-5 border-b border-gray-800">
                <div class="w-10 h-10 rounded-xl bg-amber-600/10 text-[#ff8421] flex items-center justify-center text-lg">
                    <i class="fa-solid fa-mouse-pointer"></i>
                </div>
                <div>
                    <h2 class="font-oswald text-xl font-bold uppercase text-white tracking-wide">Call-To-Action Buttons</h2>
                    <p class="text-xs text-gray-400">Configure labels and target destination URLs for hero primary and secondary buttons.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Primary Button -->
                <div class="bg-[#090b10] rounded-2xl p-5 border border-red-500/30 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#df3243]"></span>
                        <h3 class="font-oswald text-sm font-bold uppercase text-white">Primary Action Button (Red Filled)</h3>
                    </div>
                    <div>
                        <label for="hero_btn_primary_text" class="block text-xs text-gray-400 mb-1">Button Label</label>
                        <input type="text" id="hero_btn_primary_text" name="hero_btn_primary_text"
                            value="{{ old('hero_btn_primary_text', $settings['hero_btn_primary_text'] ?? 'Explore Courses & Books') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label for="hero_btn_primary_url" class="block text-xs text-gray-400 mb-1">Target Link URL</label>
                        <input type="text" id="hero_btn_primary_url" name="hero_btn_primary_url"
                            value="{{ old('hero_btn_primary_url', $settings['hero_btn_primary_url'] ?? '/courses') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>

                <!-- Secondary Button -->
                <div class="bg-[#090b10] rounded-2xl p-5 border border-gray-700/80 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-white"></span>
                        <h3 class="font-oswald text-sm font-bold uppercase text-white">Secondary Action Button (Outline)</h3>
                    </div>
                    <div>
                        <label for="hero_btn_secondary_text" class="block text-xs text-gray-400 mb-1">Button Label</label>
                        <input type="text" id="hero_btn_secondary_text" name="hero_btn_secondary_text"
                            value="{{ old('hero_btn_secondary_text', $settings['hero_btn_secondary_text'] ?? 'Invite For Keynote') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label for="hero_btn_secondary_url" class="block text-xs text-gray-400 mb-1">Target Link URL</label>
                        <input type="text" id="hero_btn_secondary_url" name="hero_btn_secondary_url"
                            value="{{ old('hero_btn_secondary_url', $settings['hero_btn_secondary_url'] ?? '/speaking') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2.5 text-xs text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>
            </div>
        </div>


        <!-- ======================================================== -->
        <!-- 4. TRUST STATS & METRICS -->
        <!-- ======================================================== -->
        <div class="glass-card rounded-2xl p-6 sm:p-8 space-y-6">
            <div class="flex items-center gap-3 pb-5 border-b border-gray-800">
                <div class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <h2 class="font-oswald text-xl font-bold uppercase text-white tracking-wide">Trust Statistics &amp; Metrics</h2>
                    <p class="text-xs text-gray-400">The 3 high-impact trust counters displayed directly underneath the call-to-action buttons.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <!-- Stat 1 -->
                <div class="bg-[#090b10] rounded-xl p-4 border border-gray-800 space-y-3">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest block">Statistic 1</span>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Value</label>
                        <input type="text" name="hero_stat1_value" value="{{ old('hero_stat1_value', $settings['hero_stat1_value'] ?? '500K+') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs font-bold text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Label</label>
                        <input type="text" name="hero_stat1_label" value="{{ old('hero_stat1_label', $settings['hero_stat1_label'] ?? 'People Mentored') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-gray-300 focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="bg-[#090b10] rounded-xl p-4 border border-gray-800 space-y-3">
                    <span class="text-[10px] font-bold text-[#ff8421] uppercase tracking-widest block">Statistic 2 (Highlighted)</span>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Value</label>
                        <input type="text" name="hero_stat2_value" value="{{ old('hero_stat2_value', $settings['hero_stat2_value'] ?? '1 Billion+') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs font-bold text-[#ff8421] focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Label</label>
                        <input type="text" name="hero_stat2_label" value="{{ old('hero_stat2_label', $settings['hero_stat2_label'] ?? 'Digital Views') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-gray-300 focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="bg-[#090b10] rounded-xl p-4 border border-gray-800 space-y-3">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest block">Statistic 3</span>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Value</label>
                        <input type="text" name="hero_stat3_value" value="{{ old('hero_stat3_value', $settings['hero_stat3_value'] ?? '4.9 / 5.0') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs font-bold text-white focus:outline-none focus:border-[#df3243]">
                    </div>
                    <div>
                        <label class="block text-[11px] text-gray-400 mb-1">Metric Label</label>
                        <input type="text" name="hero_stat3_label" value="{{ old('hero_stat3_label', $settings['hero_stat3_label'] ?? 'Student Rating ★★★★★') }}"
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl px-3 py-2 text-xs text-gray-300 focus:outline-none focus:border-[#df3243]">
                    </div>
                </div>
            </div>
        </div>


        <!-- Sticky Actions Bottom Bar -->
        <div class="sticky bottom-4 z-30 bg-[#0d1017]/90 backdrop-blur-xl border border-gray-700/80 rounded-2xl p-4 flex items-center justify-between shadow-2xl">
            <div class="text-xs text-gray-400 flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-emerald-400"></i>
                <span>Changes update immediately on the live homepage.</span>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}" class="btn-pill-white text-xs px-5 py-2.5">
                    Cancel
                </a>
                <button type="submit" class="btn-pill-filled-red text-xs px-8 py-3 shadow-lg shadow-red-600/30">
                    <i class="fa-solid fa-floppy-disk mr-1.5"></i>
                    <span>Save Home Page Changes</span>
                </button>
            </div>
        </div>

    </form>

    <!-- Hidden standalone form to delete uploaded MP4 video -->
    <form id="remove-video-form" action="{{ route('admin.homepage.remove-video') }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <!-- Hidden standalone form to delete uploaded speaker image -->
    <form id="remove-speaker-form" action="{{ route('admin.homepage.remove-speaker-image') }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    @push('scripts')
    <script>
        function toggleVideoType(type) {
            const ytPanel = document.getElementById('youtube-config-panel');
            const uploadPanel = document.getElementById('upload-config-panel');

            if (type === 'upload') {
                ytPanel.classList.add('hidden');
                uploadPanel.classList.remove('hidden');
            } else {
                uploadPanel.classList.add('hidden');
                ytPanel.classList.remove('hidden');
            }
        }

        function previewVideoUpload(input) {
            const label = document.getElementById('selected-video-filename');
            if (input.files && input.files[0]) {
                const file = input.files[0];
                const sizeMb = (file.size / (1024 * 1024)).toFixed(2);
                label.textContent = `Selected: ${file.name} (${sizeMb} MB) - Ready to save!`;
                label.classList.remove('hidden');
            }
        }

        function updateHeadlinePreview() {
            const line1 = document.getElementById('hero_heading_line1').value;
            const hl1 = document.getElementById('hero_heading_highlight1').value;
            const line2 = document.getElementById('hero_heading_line2').value;
            const hl2 = document.getElementById('hero_heading_highlight2').value;

            document.getElementById('preview-line1').textContent = line1 ? line1 + ' ' : '';
            document.getElementById('preview-hl1').textContent = hl1;
            document.getElementById('preview-line2').textContent = line2 ? line2 + ' ' : '';
            document.getElementById('preview-hl2').textContent = hl2;
        }
    </script>
    @endpush
@endsection
