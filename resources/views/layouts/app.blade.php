<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLUP Academy — Muslim Level Up Academy</title>
    <meta name="description" content="MLUP Academy: ruang kebaikan untuk pejuang akademik muslim Indonesia. Belajar, tumbuh, dan memberi dampak nyata.">

    <!-- Open Graph / Meta -->
    <meta property="og:title" content="MLUP Academy — Platform Pejuang Akademik Muslim">
    <meta property="og:description" content="Ruang kebaikan untuk pejuang akademik muslim Indonesia. Belajar, tumbuh, dan memberi dampak nyata.">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-950 text-slate-100 transition-colors duration-300 selection:bg-indigo-500 selection:text-white overflow-x-hidden">

    <!-- Flash Alert -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
            class="fixed bottom-6 right-6 z-50 flex items-center gap-3 px-5 py-4 bg-emerald-600 text-white rounded-2xl shadow-2xl shadow-emerald-500/30 border border-emerald-400/30 backdrop-blur-md animate-bounce">
            <i data-lucide="check-circle-2" class="w-6 h-6"></i>
            <div>
                <p class="font-semibold text-sm">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="ml-auto text-emerald-200 hover:text-white">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
    @endif

    <div class="relative min-h-screen flex flex-col">
        <!-- Main Content -->
        <main class="flex-grow z-10">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-footer />
    </div>

</body>
</html>
