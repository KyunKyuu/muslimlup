<header x-data="{ mobileOpen: false, scrolled: false, dropdownOpen: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'backdrop-blur-md bg-slate-950/90 border-b border-white/20 py-3 shadow-2xl' : 'backdrop-blur-sm bg-slate-950/70 border-b border-white/15 py-4'"
        class="sticky top-0 z-50 transition-all duration-300 text-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-20">
        <div class="flex items-center justify-between h-12">
            
            <!-- Brand Logo (Matches MLUP.html) -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded-lg bg-white/10 border border-white/25 flex items-center justify-center text-white font-serif-custom font-bold text-sm group-hover:bg-white group-hover:text-slate-950 transition-all shadow-inner">
                    M
                </div>
                <span class="font-serif-custom text-lg tracking-wide text-white">
                    MLUP <span class="italic text-sky-200">Academy</span>
                </span>
            </a>

            <!-- Desktop Nav Menu (Exact Content from MLUP.html) -->
            <nav class="hidden md:flex items-center gap-1 text-sm font-sans font-medium text-white/80">
                <!-- Beranda -->
                <a href="#" class="px-3.5 py-1.5 rounded-lg hover:bg-white/10 hover:text-white transition-all text-white font-semibold">
                    Beranda
                </a>

                <!-- Program Dropdown -->
                <div class="relative" @click.outside="dropdownOpen = false">
                    <button @click="dropdownOpen = !dropdownOpen" 
                            class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg hover:bg-white/10 hover:text-white transition-all">
                        <span>Program</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="dropdownOpen" 
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 mt-2 w-64 rounded-2xl bg-slate-950/95 backdrop-blur-xl border border-white/20 shadow-2xl p-3 space-y-2 z-50">
                        
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
                <a href="#tentang" class="px-3.5 py-1.5 rounded-lg hover:bg-white/10 hover:text-white transition-all">
                    Tentang
                </a>

                <!-- Berita -->
                <a href="#" class="px-3.5 py-1.5 rounded-lg hover:bg-white/10 hover:text-white transition-all">
                    Berita
                </a>

                <!-- Hubungi Kami -->
                <a href="#hubungi" class="px-3.5 py-1.5 rounded-lg hover:bg-white/10 hover:text-white transition-all">
                    Hubungi Kami
                </a>
            </nav>

            <!-- Actions Right (CTA Button from MLUP.html) -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#hubungi" 
                   class="inline-flex items-center gap-1.5 px-5 py-2 text-xs font-bold text-slate-950 bg-white hover:bg-sky-50 rounded-full shadow-lg transition-all hover:scale-105">
                    <span>Bergabung</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileOpen = !mobileOpen" class="p-2 text-white hover:text-sky-200 transition-colors">
                    <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                    <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden mt-3 p-5 rounded-2xl bg-slate-950/95 border border-white/20 space-y-3 shadow-2xl">
            
            <a @click="mobileOpen = false" href="#" class="block text-white font-medium text-sm py-1">Beranda</a>
            
            <div class="space-y-1.5 pl-3 border-l border-white/20 py-1">
                <p class="text-[10px] font-mono text-sky-300 font-bold uppercase">Program</p>
                <a @click="mobileOpen = false" href="https://ramadhanberjaya.com/" target="_blank" class="block text-white/80 text-xs py-1">🌙 Ramadhan Berjaya ↗</a>
                <a @click="mobileOpen = false" href="https://riunganqurban.com/" target="_blank" class="block text-white/80 text-xs py-1">🐑 PARQOUR ↗</a>
                <a @click="mobileOpen = false" href="https://hotline.muslimlup.org/" target="_blank" class="block text-white/80 text-xs py-1">📞 Hotline Akademik ↗</a>
            </div>

            <a @click="mobileOpen = false" href="#tentang" class="block text-white/90 hover:text-white font-medium text-sm py-1">Tentang</a>
            <a @click="mobileOpen = false" href="#" class="block text-white/90 hover:text-white font-medium text-sm py-1">Berita</a>
            <a @click="mobileOpen = false" href="#hubungi" class="block text-white/90 hover:text-white font-medium text-sm py-1">Hubungi Kami</a>
            
            <div class="pt-3 border-t border-white/15">
                <a @click="mobileOpen = false" href="#hubungi" class="w-full text-center block px-4 py-2.5 text-xs font-bold text-slate-950 bg-white rounded-full shadow-md">
                    Bergabung Sekarang
                </a>
            </div>
        </div>
    </div>
</header>
