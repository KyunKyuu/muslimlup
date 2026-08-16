<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — MLUP Academy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#EAE6DF] text-slate-950 font-sans min-h-screen flex items-center justify-center p-4">

    <!-- Blueprint Grid Lines -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-0 bottom-0 left-8 sm:left-20 border-r border-slate-400/30"></div>
        <div class="absolute top-0 bottom-0 right-8 sm:right-20 border-l border-slate-400/30"></div>
    </div>

    <div class="relative z-10 w-full max-w-md p-8 sm:p-10 rounded-2xl bg-white/95 backdrop-blur-xl border border-slate-300 shadow-2xl space-y-6">
        
        <!-- Header -->
        <div class="text-center space-y-2">
            <div class="w-12 h-12 mx-auto rounded-full overflow-hidden border border-slate-300 shadow-md flex items-center justify-center bg-white">
                <img src="{{ asset('images/logo_mlup.jpg') }}" alt="MLUP Logo" class="w-full h-full object-cover">
            </div>
            <h1 class="font-serif-custom text-2xl font-normal tracking-tight text-slate-950">
                Admin <span class="italic text-slate-700">MLUP Academy</span>
            </h1>
            <p class="text-xs text-slate-600 font-sans">Masuk untuk mengelola Kontributor & Data Impact</p>
        </div>

        <!-- Session Alert -->
        @if ($errors->any())
            <div class="p-3 rounded-lg bg-rose-50 border border-rose-200 text-xs text-rose-700 space-y-1">
                @foreach ($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf
            
            <div class="space-y-1">
                <label for="email" class="text-xs font-mono font-bold uppercase tracking-wider text-slate-700">Email Admin</label>
                <input type="email" id="email" name="email" value="{{ old('email', 'admin@muslimlup.org') }}" required
                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-950 text-sm focus:outline-none focus:ring-2 focus:ring-slate-950 transition-all">
            </div>

            <div class="space-y-1">
                <label for="password" class="text-xs font-mono font-bold uppercase tracking-wider text-slate-700">Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••"
                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-300 text-slate-950 text-sm focus:outline-none focus:ring-2 focus:ring-slate-950 transition-all">
            </div>

            <div class="pt-2">
                <button type="submit" 
                        class="w-full py-3.5 px-6 rounded-xl bg-slate-950 hover:bg-slate-800 text-white font-bold text-xs uppercase tracking-widest transition-all shadow-xl">
                    MASUK DASHBOARD →
                </button>
            </div>
        </form>

        <div class="pt-2 text-center">
            <a href="{{ url('/') }}" class="text-xs text-slate-500 hover:text-slate-950 transition-colors">
                ← Kembali ke Website MLUP
            </a>
        </div>

    </div>

</body>
</html>
