<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#050608]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Osman Gani</title>

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
        
        .glass-panel {
            background: rgba(18, 22, 32, 0.85);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body class="h-full text-gray-200 font-ubuntu antialiased flex items-center justify-center p-4 relative overflow-hidden bg-radial from-[#151a26] via-[#080a0f] to-[#030406]">

    <!-- Background Atmospheric Glows -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#df3243]/20 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#ff8421]/15 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10 space-y-6">
        
        <!-- Header Brand -->
        <div class="text-center space-y-2">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#df3243] to-[#800d18] flex items-center justify-center text-white shadow-xl shadow-red-950/60 font-oswald text-2xl font-bold border border-red-400/30 group-hover:scale-105 transition duration-300">
                    OG
                </div>
                <div class="text-left">
                    <span class="text-white font-oswald text-2xl tracking-wider font-bold block leading-none">OSMAN GANI</span>
                    <span class="text-[10px] uppercase font-semibold text-gray-400 tracking-[0.2em]">Management Portal</span>
                </div>
            </a>
            <h1 class="font-oswald text-2xl font-bold uppercase text-white tracking-wide pt-2">Sign In</h1>
            <p class="text-xs text-gray-400">Enter your credentials to access the management portal.</p>
        </div>

        <!-- Login Card -->
        <div class="glass-panel rounded-3xl p-8 border border-gray-800/80">
            
            @if (session('success'))
                <div class="mb-5 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 px-4 py-3 rounded-xl text-xs flex items-center gap-2">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-5 bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-xl text-xs flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-xl text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-xmark"></i>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Email Address</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-500 text-sm">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" value="{{ old('email', 'admin@osmangani.com') }}" required autofocus
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl pl-10 pr-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243] focus:ring-1 focus:ring-[#df3243] transition">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider">Password</label>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-gray-500 text-sm">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" value="password123" required
                            class="w-full bg-[#0d1017] border border-gray-700/80 rounded-xl pl-10 pr-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#df3243] focus:ring-1 focus:ring-[#df3243] transition">
                    </div>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-[#0d1017] border-gray-700 text-[#df3243] focus:ring-0">
                        <span class="text-xs text-gray-400">Remember session</span>
                    </label>
                </div>

                <button type="submit" class="w-full btn-pill-filled-red text-sm font-semibold justify-center py-3.5 mt-2 shadow-lg shadow-red-600/30">
                    <span>Sign In</span>
                    <i class="fa-solid fa-arrow-right-long text-xs ml-1"></i>
                </button>
            </form>

            <!-- Quick Demo Credentials Hint -->
            <div class="mt-6 pt-5 border-t border-gray-800/80 text-center">
                <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-left space-y-1">
                    <div class="text-[11px] font-bold text-amber-400 uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-solid fa-key"></i> Default Administrator Credentials
                    </div>
                    <div class="text-xs text-gray-300 font-mono">Email: <span class="text-white select-all">admin@osmangani.com</span></div>
                    <div class="text-xs text-gray-300 font-mono">Password: <span class="text-white select-all">password123</span></div>
                </div>
            </div>

        </div>

        <!-- Back to Website -->
        <div class="text-center">
            <a href="{{ route('home') }}" class="text-xs text-gray-400 hover:text-white inline-flex items-center gap-1.5 transition">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Return to Public Website</span>
            </a>
        </div>

    </div>

</body>
</html>
