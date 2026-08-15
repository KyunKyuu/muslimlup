<section class="relative min-h-screen w-full bg-cover bg-center bg-no-repeat text-white flex flex-col justify-between overflow-hidden" 
         style="background-image: url('{{ asset('images/heropage.png') }}');">
    
    <!-- Architectural Blueprint Grid Overlay Lines (Responsive Mobile Position) -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <!-- Top Horizontal Line (under nav) -->
        <div class="absolute top-20 left-0 right-0 border-b border-white/30"></div>

        <!-- Bottom Horizontal Line (above footer text block) -->
        <div class="absolute bottom-44 left-0 right-0 border-b border-white/30"></div>

        <!-- Left Vertical Line -->
        <div class="absolute top-0 bottom-0 left-5 sm:left-20 border-r border-white/30"></div>

        <!-- Right Vertical Line -->
        <div class="absolute top-0 bottom-0 right-5 sm:right-20 border-l border-white/30"></div>

        <!-- Intersection Sparkle/Crosshair (✦) Icons -->
        <div class="absolute top-20 left-5 sm:left-20 -translate-x-1/2 -translate-y-1/2 text-white text-sm font-light select-none">✦</div>
        <div class="absolute top-20 right-5 sm:right-20 translate-x-1/2 -translate-y-1/2 text-white text-sm font-light select-none">✦</div>
        <div class="absolute bottom-44 left-5 sm:left-20 -translate-x-1/2 translate-y-1/2 text-white text-sm font-light select-none">✦</div>
        <div class="absolute bottom-44 right-5 sm:right-20 translate-x-1/2 translate-y-1/2 text-white text-sm font-light select-none">✦</div>
    </div>

    <!-- 1. Top Integrated Blueprint Navigation Header (using logo_mlup.jpg) -->
    <header x-data="{ dropdownOpen: false, mobileOpen: false }" class="relative z-30 h-20 flex items-center justify-between px-6 sm:px-24">
        
        <!-- Brand Logo (Left Grid Alignment using logo_mlup.jpg) -->
        <a href="#" class="flex items-center gap-3 group">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full overflow-hidden border border-white/40 shadow-md group-hover:scale-105 transition-transform flex items-center justify-center bg-white">
                <img src="{{ asset('images/logo_mlup.jpg') }}" alt="MLUP Logo" class="w-full h-full object-cover">
            </div>
            <span class="font-serif-custom text-lg sm:text-xl font-normal tracking-wide text-white drop-shadow">
                MLUP<span class="italic text-sky-200">.Academy</span>
            </span>
        </a>

        <!-- Desktop Menu Links (Center Alignment, content from MLUP.html) -->
        <nav class="hidden md:flex items-center gap-2 text-sm font-sans font-medium text-white/90">
            <!-- Beranda -->
            <a href="#" class="px-3.5 py-1.5 rounded-lg hover:bg-white/15 hover:text-white transition-all font-semibold drop-shadow">
                Beranda
            </a>

            <!-- Program Dropdown -->
            <div class="relative" @click.outside="dropdownOpen = false">
                <button @click="dropdownOpen = !dropdownOpen" 
                        class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg hover:bg-white/15 hover:text-white transition-all drop-shadow">
                    <span>Program</span>
                    <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }"></i>
                </button>

                <!-- Dropdown Card -->
                <div x-show="dropdownOpen" 
                     x-transition:enter="transition ease-out duration-150"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-100"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute top-full left-0 mt-2 w-64 rounded-2xl bg-slate-950/95 backdrop-blur-xl border border-white/25 shadow-2xl p-3 space-y-2 text-left z-50">
                    
                    <!-- Sosial -->
                    <div class="px-2 pt-1 pb-1 text-[10px] font-mono font-bold tracking-widest text-sky-300 uppercase">
                        Sosial
                    </div>
                    <a href="https://ramadhanberjaya.com/" target="_blank" rel="noopener" class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-white/10 text-xs text-white/90 hover:text-white transition-colors">
                        <span class="flex items-center gap-2">🌙 Ramadhan Berjaya</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3 text-amber-300"></i>
                    </a>
                    <a href="https://riunganqurban.com/" target="_blank" rel="noopener" class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-white/10 text-xs text-white/90 hover:text-white transition-colors">
                        <span class="flex items-center gap-2">🐑 PARQOUR</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3 text-amber-300"></i>
                    </a>

                    <div class="border-t border-white/15 my-1"></div>

                    <!-- Akademik -->
                    <div class="px-2 pt-1 pb-1 text-[10px] font-mono font-bold tracking-widest text-sky-300 uppercase">
                        Akademik
                    </div>
                    <a href="https://hotline.muslimlup.org/" target="_blank" rel="noopener" class="flex items-center justify-between px-3 py-2 rounded-lg hover:bg-white/10 text-xs text-white/90 hover:text-white transition-colors">
                        <span class="flex items-center gap-2">📞 Hotline Akademik</span>
                        <i data-lucide="arrow-up-right" class="w-3 h-3 text-sky-300"></i>
                    </a>

                    <div class="border-t border-white/15 my-1"></div>

                    <!-- Keprofesian -->
                    <div class="px-2 pt-1 pb-1 text-[10px] font-mono font-bold tracking-widest text-sky-300 uppercase">
                        Keprofesian
                    </div>
                    <div class="flex items-center justify-between px-3 py-1.5 text-xs text-white/80">
                        <span>📡 Webinar Series</span>
                        <span class="text-[9px] font-mono text-emerald-300 bg-emerald-500/20 border border-emerald-400/30 px-1.5 py-0.5 rounded">Rutin</span>
                    </div>
                    <div class="flex items-center justify-between px-3 py-1.5 text-xs text-white/40">
                        <span>🛠 Workshop</span>
                        <span class="text-[9px] font-mono text-white/40 border border-white/10 px-1.5 py-0.5 rounded">Segera</span>
                    </div>

                    <div class="border-t border-white/15 my-1"></div>

                    <!-- Bisnis -->
                    <div class="px-2 pt-1 pb-1 text-[10px] font-mono font-bold tracking-widest text-sky-300 uppercase">
                        Bisnis
                    </div>
                    <div class="flex items-center justify-between px-3 py-1.5 text-xs text-white/40">
                        <span>🛍 Pojok Bisnis</span>
                        <span class="text-[9px] font-mono text-white/40 border border-white/10 px-1.5 py-0.5 rounded">Segera</span>
                    </div>
                </div>
            </div>

            <!-- Tentang -->
            <a href="#tentang" class="px-3.5 py-1.5 rounded-lg hover:bg-white/15 hover:text-white transition-all drop-shadow">
                Tentang
            </a>

            <!-- Berita -->
            <a href="#" class="px-3.5 py-1.5 rounded-lg hover:bg-white/15 hover:text-white transition-all drop-shadow">
                Berita
            </a>

            <!-- Hubungi Kami -->
            <a href="#hubungi" class="px-3.5 py-1.5 rounded-lg hover:bg-white/15 hover:text-white transition-all drop-shadow">
                Hubungi Kami
            </a>
        </nav>

        <!-- Top Right Action Button -->
        <div class="flex items-center gap-3">
            <a href="#hubungi" class="inline-flex items-center gap-2 px-3.5 py-1.5 sm:px-5 sm:py-2 rounded-md bg-black/80 hover:bg-black text-white text-[10px] sm:text-[11px] font-bold tracking-widest uppercase border border-white/30 backdrop-blur-md transition-all hover:scale-105 shadow-xl">
                BERGABUNG
                <i data-lucide="arrow-right" class="w-3 h-3 sm:w-3.5 sm:h-3.5 text-white"></i>
            </a>

            <!-- Mobile Menu Toggle -->
            <button @click="mobileOpen = !mobileOpen" class="p-2 text-white md:hidden">
                <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileOpen" 
             x-transition
             class="md:hidden absolute top-full left-5 right-5 mt-2 p-5 rounded-2xl bg-slate-950/95 border border-white/20 shadow-2xl space-y-3 z-50 text-left">
            <a @click="mobileOpen = false" href="#" class="block text-white font-medium text-sm">Beranda</a>
            <div class="space-y-1 pl-3 border-l border-white/20">
                <p class="text-[10px] font-mono text-sky-300 font-bold uppercase">Program</p>
                <a @click="mobileOpen = false" href="https://ramadhanberjaya.com/" target="_blank" class="block text-white/80 text-xs py-1">🌙 Ramadhan Berjaya ↗</a>
                <a @click="mobileOpen = false" href="https://riunganqurban.com/" target="_blank" class="block text-white/80 text-xs py-1">🐑 PARQOUR ↗</a>
                <a @click="mobileOpen = false" href="https://hotline.muslimlup.org/" target="_blank" class="block text-white/80 text-xs py-1">📞 Hotline Akademik ↗</a>
            </div>
            <a @click="mobileOpen = false" href="#tentang" class="block text-white/90 text-sm">Tentang</a>
            <a @click="mobileOpen = false" href="#" class="block text-white/90 text-sm">Berita</a>
            <a @click="mobileOpen = false" href="#hubungi" class="block text-white/90 text-sm">Hubungi Kami</a>
        </div>

    </header>

    <!-- 2. Main Hero Content Area -->
    <div class="relative z-20 flex-grow flex flex-col justify-center px-8 sm:px-28 py-12">
        <div class="max-w-3xl space-y-6">
            
            <!-- Main Title -->
            <h1 class="font-serif-custom text-4xl sm:text-6xl lg:text-7xl font-normal tracking-tight text-white leading-[1.08] drop-shadow-lg">
                Ruang kebaikan untuk <span class="italic font-light text-sky-100">pejuang akademik</span> muslim Indonesia.
            </h1>

            <!-- Subtitle Lead -->
            <p class="text-white text-base sm:text-xl font-sans font-normal leading-relaxed max-w-xl drop-shadow-md">
                Belajar, tumbuh, dan memberi dampak nyata. MLUP Academy hadir agar tidak ada yang harus memilih antara menjadi unggul secara akademik dan kuat secara keislaman.
            </p>

            <!-- CTA Request Button -->
            <div class="pt-4">
                <a href="#program" class="inline-flex items-center gap-3 px-6 py-3.5 bg-black/90 hover:bg-black text-white text-xs font-bold tracking-widest uppercase rounded-lg border border-white/30 backdrop-blur-md shadow-2xl transition-all hover:translate-x-1 group">
                    <span>LIHAT PROGRAM</span>
                    <span class="w-5 h-5 rounded bg-white/20 flex items-center justify-center group-hover:translate-x-0.5 transition-transform">
                        <i data-lucide="arrow-right" class="w-3 h-3 text-white"></i>
                    </span>
                </a>
            </div>

        </div>
    </div>

    <!-- 3. Bottom Blueprint Information Panel -->
    <div class="relative z-20 h-44 flex items-center justify-between px-8 sm:px-28 border-t border-white/30">
        <div class="w-full flex items-center justify-between">
            
            <!-- Bottom Left Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded border border-white/40 text-[11px] font-mono tracking-widest uppercase text-white bg-black/40 backdrop-blur-md">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                AT YOUR SERVICE
            </div>

        </div>
    </div>

</section>
