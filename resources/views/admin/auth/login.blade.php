<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#0c0d12]">
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
    </style>
</head>
<body class="min-h-full text-gray-200 font-ubuntu antialiased flex items-center justify-center p-6 bg-[#0c0d12]">

    <div class="w-full max-w-md relative z-10 space-y-6">
        
        <!-- Header Brand -->
        <div class="text-center space-y-3">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-[#c92a2a] flex items-center justify-center text-white font-oswald text-2xl font-bold shadow-md group-hover:bg-[#a51d24] transition duration-200">
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
        <div class="bg-[#12141c] rounded-2xl p-8 border border-gray-800 shadow-2xl">
            
            @if (session('success'))
                <div class="mb-5 bg-emerald-950/40 border border-emerald-500/30 text-emerald-300 px-4 py-3 rounded-xl text-xs flex items-center gap-2">
                    <i class="fa-solid fa-circle-check text-emerald-400"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-5 bg-red-950/40 border border-red-500/30 text-red-300 px-4 py-3 rounded-xl text-xs flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation text-red-400"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-5 bg-red-950/40 border border-red-500/30 text-red-300 px-4 py-3 rounded-xl text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-xmark text-red-400"></i>
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
                            class="w-full bg-[#0a0b10] border border-gray-800 rounded-xl pl-10 pr-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#c92a2a] focus:ring-1 focus:ring-[#c92a2a] transition">
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
                            class="w-full bg-[#0a0b10] border border-gray-800 rounded-xl pl-10 pr-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-[#c92a2a] focus:ring-1 focus:ring-[#c92a2a] transition">
                    </div>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-[#0a0b10] border-gray-700 text-[#c92a2a] focus:ring-0">
                        <span class="text-xs text-gray-400">Remember session</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-[#c92a2a] hover:bg-[#a51d24] text-white text-sm font-semibold justify-center py-3.5 rounded-full flex items-center gap-2 transition duration-200 mt-2 shadow-md">
                    <span>Sign In</span>
                    <i class="fa-solid fa-arrow-right-long text-xs ml-1"></i>
                </button>
            </form>

            <!-- Quick Demo Credentials Hint -->
            <div class="mt-6 pt-5 border-t border-gray-800 text-center">
                <div class="bg-gray-900/60 border border-gray-800 rounded-xl p-3 text-left space-y-1">
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
