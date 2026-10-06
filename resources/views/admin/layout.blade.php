<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#07090e]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') | Osman Gani Management Portal</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Oswald:wght@300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-oswald { font-family: 'Oswald', sans-serif; }
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
        .font-ubuntu { font-family: 'Ubuntu', sans-serif; }

        .glass-card {
            background: rgba(18, 22, 32, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.25s ease;
        }
        .glass-card:hover {
            border-color: rgba(223, 50, 67, 0.3);
        }

        .nav-link-active {
            background: linear-gradient(90deg, rgba(223, 50, 67, 0.2) 0%, rgba(223, 50, 67, 0.05) 100%);
            color: #ffffff;
            border-left: 3px solid #df3243;
        }
    </style>
    @stack('styles')
</head>
<body class="h-full text-gray-200 font-ubuntu antialiased selection:bg-[#df3243] selection:text-white flex overflow-hidden">

    <!-- ======================================================== -->
    <!-- SIDEBAR NAVIGATION -->
    <!-- ======================================================== -->
    <aside class="w-64 bg-[#0a0d14] border-r border-gray-800/80 flex flex-col justify-between shrink-0 h-full z-20">
        
        <!-- Brand & Nav Links -->
        <div class="overflow-y-auto">
            
            <!-- Brand Logo -->
            <div class="h-20 px-6 flex items-center border-b border-gray-800/80">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#df3243] to-[#800d18] flex items-center justify-center text-white font-oswald text-xl font-bold border border-red-400/30">
                        OG
                    </div>
                    <div>
                        <span class="text-white font-oswald text-xl tracking-wider font-bold block leading-none">OSMAN GANI</span>
                        <span class="text-[9px] uppercase font-semibold text-gray-400 tracking-[0.2em]">Admin Console</span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1 text-xs font-montserrat font-bold tracking-wider">
                
                <div class="px-3 py-2 text-[10px] text-gray-500 uppercase tracking-widest font-semibold">Core Management</div>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.dashboard') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-gauge w-5 text-center {{ request()->routeIs('admin.dashboard') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.books.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.books.*') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-book-open w-5 text-center {{ request()->routeIs('admin.books.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Books</span>
                </a>

                <a href="{{ route('admin.courses.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.courses.*') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-laptop-code w-5 text-center {{ request()->routeIs('admin.courses.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Courses</span>
                </a>

                <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.events.*') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-calendar-check w-5 text-center {{ request()->routeIs('admin.events.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Events</span>
                </a>

                <a href="{{ route('admin.articles.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.articles.*') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-newspaper w-5 text-center {{ request()->routeIs('admin.articles.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Articles / Blog</span>
                </a>

                <div class="pt-4 px-3 py-2 text-[10px] text-gray-500 uppercase tracking-widest font-semibold">Communications</div>

                <a href="{{ route('admin.messages.index') }}" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.messages.*') ? 'nav-link-active text-white' : '' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope-open-text w-5 text-center {{ request()->routeIs('admin.messages.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                        <span>Inquiries</span>
                    </div>
                    @php $unread = \App\Models\ContactMessage::where('is_read', false)->count(); @endphp
                    @if ($unread > 0)
                        <span class="bg-[#df3243] text-white text-[10px] font-bold px-2 py-0.5 rounded-full">{{ $unread }}</span>
                    @endif
                </a>

                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition {{ request()->routeIs('admin.settings.*') ? 'nav-link-active text-white' : '' }}">
                    <i class="fa-solid fa-sliders w-5 text-center {{ request()->routeIs('admin.settings.*') ? 'text-[#df3243]' : 'text-gray-400' }}"></i>
                    <span>Site Settings</span>
                </a>

            </nav>
        </div>

        <!-- Footer / User & Logout -->
        <div class="p-4 border-t border-gray-800/80 bg-[#06080c] space-y-3">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-[#df3243]/20 border border-[#df3243]/40 flex items-center justify-center text-xs text-[#df3243] font-bold">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold text-white truncate">{{ auth()->user()->name ?? 'Administrator' }}</p>
                    <p class="text-[10px] text-gray-400 truncate">{{ auth()->user()->email ?? 'admin@osmangani.com' }}</p>
                </div>
            </div>

            <div class="flex items-center gap-2 pt-1">
                <a href="{{ route('home') }}" target="_blank" class="flex-1 inline-flex items-center justify-center gap-1.5 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white text-xs py-2 rounded-lg transition border border-white/10">
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    <span>View Site</span>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center text-red-400 hover:text-white hover:bg-red-600/30 p-2 rounded-lg transition border border-red-500/20" title="Sign Out">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- ======================================================== -->
    <!-- MAIN CONTENT AREA -->
    <!-- ======================================================== -->
    <div class="flex-1 flex flex-col h-full overflow-hidden bg-[#07090e]">
        
        <!-- Top Utility Bar -->
        <header class="h-20 bg-[#0a0d14]/90 backdrop-blur-md border-b border-gray-800/80 px-6 sm:px-8 flex items-center justify-between shrink-0 z-10">
            <div>
                <h2 class="font-oswald text-2xl font-bold uppercase tracking-wide text-white">
                    @yield('page_title', 'Dashboard')
                </h2>
                <p class="text-xs text-gray-400">@yield('page_subtitle', 'Manage and update live website content')</p>
            </div>

            <div class="flex items-center gap-3">
                @yield('top_actions')

                <a href="{{ route('home') }}" target="_blank" class="btn-pill-white text-xs px-4 py-2">
                    <i class="fa-solid fa-globe mr-1"></i> Live Site
                </a>
            </div>
        </header>

        <!-- Scrollable Main Content -->
        <main class="flex-1 overflow-y-auto p-6 sm:p-8 space-y-6">
            
            <!-- Global Flash Alerts -->
            @if (session('success'))
                <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 px-4 py-3 rounded-2xl text-xs flex items-center justify-between animate-fadeIn">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-emerald-400 text-sm"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white">&times;</button>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-2xl text-xs flex items-center justify-between animate-fadeIn">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-triangle-exclamation text-red-400 text-sm"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-red-400 hover:text-white">&times;</button>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500/30 text-red-400 p-4 rounded-2xl text-xs space-y-1">
                    <div class="font-bold flex items-center gap-1.5 mb-1">
                        <i class="fa-solid fa-circle-xmark"></i> Please correct the following errors:
                    </div>
                    <ul class="list-disc list-inside space-y-1 text-red-300">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>

    </div>

    @stack('scripts')
</body>
</html>
