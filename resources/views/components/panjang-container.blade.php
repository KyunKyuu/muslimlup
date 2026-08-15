<div id="panjang-parallax-section" 
     x-data="{ 
         scrollProgress: 0,
         updateScroll() {
             const el = $el;
             const rect = el.getBoundingClientRect();
             const totalHeight = el.offsetHeight - window.innerHeight;
             if (totalHeight > 0) {
                 const raw = -rect.top / totalHeight;
                 this.scrollProgress = Math.max(0, Math.min(100, Math.round(raw * 100)));
             }
         }
     }"
     @scroll.window="updateScroll()"
     x-init="updateScroll()"
     class="relative min-h-[250vh] text-white overflow-hidden border-t border-white/20 bg-[#0B4A8F]">
    
    <!-- Background Image panjang.png STRICTLY NATURAL VIBRANT BLUE (NO DARK OVERLAY) -->
    <div class="absolute inset-0 pointer-events-none z-0 opacity-100"
         :style="'background-image: url({{ asset('images/panjang.png') }}); background-size: cover; background-position: center ' + scrollProgress + '%; transition: background-position 0.1s ease-out;'"></div>

    <!-- Blueprint Grid Lines & Dividers (Pear Blueprint Framework) -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <!-- Left Vertical Margin Line -->
        <div class="absolute top-0 bottom-0 left-12 sm:left-20 border-r border-white/25"></div>

        <!-- 42% Vertical Blueprint Dividing Line (Left artwork / Right text split) -->
        <div class="absolute top-0 bottom-0 left-[42%] sm:left-[40%] lg:left-[42%] border-r border-white/25 hidden md:block"></div>

        <!-- Right Vertical Line -->
        <div class="absolute top-0 bottom-0 right-8 sm:right-16 border-l border-white/25"></div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="relative z-20 max-w-[1400px] mx-auto px-6 sm:px-20 py-12">
        
        <!-- SECTION 1: PROGRAM / TIGA LINI GERAK (Text Focused on Right Panel) -->
        <section id="program" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-14 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 03 PROGRAM
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            PROGRAM UTAMA
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Tiga lini gerak <span class="italic text-sky-200">MLUP.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            Satu arah, tiga cara bergerak — ekosistem yang dirancang untuk menjawab kebutuhan mahasiswa muslim secara utuh.
                        </p>
                    </div>

                    <!-- Clean List Items with Clickable Program Live URL Links -->
                    <div class="space-y-6 pt-4 border-t border-white/20">
                        <!-- Lini Sosial -->
                        <div class="flex items-start gap-4">
                            <span class="text-xl shrink-0 mt-0.5">⚡</span>
                            <div class="space-y-2">
                                <h4 class="font-bold text-white text-base">Lini Sosial</h4>
                                <p class="text-white/85 text-xs sm:text-sm leading-relaxed">Mengumpulkan dan menyalurkan kebaikan secara nyata — memastikan tidak ada yang berhenti karena tidak mampu.</p>
                                
                                <!-- Program Links -->
                                <div class="flex flex-wrap gap-2 pt-1">
                                    <a href="https://ramadhanberjaya.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-white/10 hover:bg-white/25 border border-white/30 text-xs font-semibold text-white transition-all hover:translate-x-0.5 group shadow-sm">
                                        <span>🌙 Ramadhan Berjaya</span>
                                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-amber-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                                    </a>
                                    <a href="https://riunganqurban.com/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-white/10 hover:bg-white/25 border border-white/30 text-xs font-semibold text-white transition-all hover:translate-x-0.5 group shadow-sm">
                                        <span>🐑 PARQOUR</span>
                                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-amber-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Lini Akademik -->
                        <div class="flex items-start gap-4 pt-4 border-t border-white/15">
                            <span class="text-xl shrink-0 mt-0.5">📚</span>
                            <div class="space-y-2">
                                <h4 class="font-bold text-white text-base">Lini Akademik</h4>
                                <p class="text-white/85 text-xs sm:text-sm leading-relaxed">Pendampingan perjalanan mahasiswa — dari bimbingan akademik, bantuan UKT, hingga kolaborasi lintas kampus.</p>
                                
                                <!-- Program Links -->
                                <div class="flex flex-wrap gap-2 pt-1">
                                    <a href="https://hotline.muslimlup.org/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg bg-white/10 hover:bg-white/25 border border-white/30 text-xs font-semibold text-white transition-all hover:translate-x-0.5 group shadow-sm">
                                        <span>📞 Hotline Akademik</span>
                                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5 text-sky-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                                    </a>
                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/5 border border-white/15 text-xs font-medium text-white/50 cursor-not-allowed">
                                        🔗 LINTAS — Segera Hadir
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Lini Keprofesian -->
                        <div class="flex items-start gap-4 pt-4 border-t border-white/15">
                            <span class="text-xl shrink-0 mt-0.5">💼</span>
                            <div class="space-y-2">
                                <h4 class="font-bold text-white text-base">Lini Keprofesian</h4>
                                <p class="text-white/85 text-xs sm:text-sm leading-relaxed">Ilmu yang terus bergerak — webinar mingguan rutin & gratis, workshop profesional, dan penerbitan untuk generasi siap berkarier.</p>
                                
                                <!-- Program Links -->
                                <div class="flex flex-wrap gap-2 pt-1">
                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/10 border border-white/25 text-xs font-semibold text-white">
                                        📡 Webinar Series <span class="text-[10px] font-mono text-emerald-300 ml-1">Rutin · Gratis</span>
                                    </span>
                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white/5 border border-white/15 text-xs font-medium text-white/50 cursor-not-allowed">
                                        🛠 Workshop — Segera Hadir
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 2: EKOSISTEM & MITRA (Text Focused on Right Panel) -->
        <section id="mitra" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-14 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 07 EKOSISTEM & MITRA
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            EKOSISTEM & MITRA
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Bergerak bersama, <span class="italic text-sky-200">bukan sendiri.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            Tujuh komunitas partner aktif yang bersama-sama menjangkau lebih dari 1.000 anggota aktif. Seluruhnya volunteer-driven.
                        </p>
                    </div>

                    <!-- Clean List of Partners (NO HEAVY CARDS) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-white/20 text-sm font-sans">
                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">01</span>
                            <div>
                                <p class="font-bold text-white">Bliss Community</p>
                                <p class="text-xs text-white/70 font-mono">@bliss.community.bdg</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">02</span>
                            <div>
                                <p class="font-bold text-white">Gemusi</p>
                                <p class="text-xs text-white/70 font-mono">@gemusiii</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">03</span>
                            <div>
                                <p class="font-bold text-white">Ruang Alara</p>
                                <p class="text-xs text-white/70 font-mono">@ruang.alara</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">04</span>
                            <div>
                                <p class="font-bold text-white">Gen Ufairah</p>
                                <p class="text-xs text-white/70 font-mono">@gen.ufairah</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">05</span>
                            <div>
                                <p class="font-bold text-white">Craftiva</p>
                                <p class="text-xs text-white/70 font-mono">@craftiva.bdg</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3">
                            <span class="font-mono text-xs text-sky-200 font-bold">06</span>
                            <div>
                                <p class="font-bold text-white">Rest Area</p>
                                <p class="text-xs text-white/70 font-mono">@thisis_restarea</p>
                            </div>
                        </div>

                        <div class="py-2 border-b border-white/15 flex items-center gap-3 sm:col-span-2">
                            <span class="font-mono text-xs text-sky-200 font-bold">07</span>
                            <div>
                                <p class="font-bold text-white">Hawa Community</p>
                                <p class="text-xs text-white/70 font-mono">@hawacommunity_</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 3: ROADMAP 1448 H (Text Focused on Right Panel) -->
        <section id="roadmap" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-14 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 09 ROADMAP 1448 H
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            ROADMAP 1448 H
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Tahun ini, MLUP membangun <span class="italic text-sky-200">lini akademiknya.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            Segera menghadirkan program Hotline Akademik dan Beasiswa Akademik MLUP. Satu langkah terukur untuk turut serta hadir menanggulangi problematika akademik di Indonesia.
                        </p>
                    </div>

                    <!-- Clean Blueprint Step List (NO HEAVY CARDS) -->
                    <div class="space-y-4 pt-4 border-t border-white/20">
                        <div class="flex items-start gap-4 py-2 border-b border-white/15">
                            <span class="font-mono text-xs font-bold text-sky-200 bg-white/10 w-7 h-7 rounded flex items-center justify-center shrink-0">1</span>
                            <div>
                                <h4 class="font-bold text-white text-base">Hotline Akademik</h4>
                                <p class="text-white/80 text-xs sm:text-sm mt-0.5">Membuka kanal pengaduan dan database kebutuhan mahasiswa secara individual.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 py-2 border-b border-white/15">
                            <span class="font-mono text-xs font-bold text-sky-200 bg-white/10 w-7 h-7 rounded flex items-center justify-center shrink-0">2</span>
                            <div>
                                <h4 class="font-bold text-white text-base">Donatur Akademik</h4>
                                <p class="text-white/80 text-xs sm:text-sm mt-0.5">Menghubungkan donatur dengan mahasiswa yang membutuhkan — terukur dan amanah.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 py-2 border-b border-white/15">
                            <span class="font-mono text-xs font-bold text-sky-200 bg-white/10 w-7 h-7 rounded flex items-center justify-center shrink-0">3</span>
                            <div>
                                <h4 class="font-bold text-white text-base">Penyaluran & Pendampingan</h4>
                                <p class="text-white/80 text-xs sm:text-sm mt-0.5">Bimbingan dan dana disalurkan bersama POKSI — profesional, doktoral, dan profesor mitra MLUP.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 py-2 border-b border-white/15">
                            <span class="font-mono text-xs font-bold text-sky-200 bg-white/10 w-7 h-7 rounded flex items-center justify-center shrink-0">4</span>
                            <div>
                                <h4 class="font-bold text-white text-base">Pendanaan Berkelanjutan</h4>
                                <p class="text-white/80 text-xs sm:text-sm mt-0.5">Crowdfunding dan sponsorship lewat proposal proyek dari mahasiswa dan POKSI.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 4: KOLABORASI (Text Focused on Right Panel) -->
        <section id="kolaborasi" class="min-h-screen relative flex items-center py-24">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-14 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 10 KOLABORASI
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            RUANG KOLABORASI
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Ada banyak cara untuk <span class="italic text-sky-200">bergabung.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            MLUP adalah ekosistem terbuka. Sesuai kapasitas dan niat masing-masing.
                        </p>
                    </div>

                    <!-- Clean 4 Points (NO HEAVY CARDS) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-white/20">
                        <div class="space-y-1">
                            <h4 class="font-bold text-white text-base flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span> Donatur
                            </h4>
                            <p class="text-white/80 text-xs sm:text-sm leading-relaxed">Donasi ke program sosial (Ramadhan Berjaya, PARQOUR) & akademik (Beasiswa MLUP). Setiap rupiah tercatat & dilaporkan secara transparan.</p>
                        </div>

                        <div class="space-y-1">
                            <h4 class="font-bold text-white text-base flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Sponsor
                            </h4>
                            <p class="text-white/80 text-xs sm:text-sm leading-relaxed">Jadikan nama atau lembagamu bagian dari program MLUP — workshop, LINTAS, dan program lainnya dengan dampak nyata.</p>
                        </div>

                        <div class="space-y-1">
                            <h4 class="font-bold text-white text-base flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Volunteer
                            </h4>
                            <p class="text-white/80 text-xs sm:text-sm leading-relaxed">Bergabung sebagai volunteer per-event maupun volunteer tetap. Semua yang bergerak di MLUP adalah volunteer.</p>
                        </div>

                        <div class="space-y-1">
                            <h4 class="font-bold text-white text-base flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-purple-400"></span> Komunitas & Kampus
                            </h4>
                            <p class="text-white/80 text-xs sm:text-sm leading-relaxed">Buka ruang kolaborasi bersama MLUP — co-host program, distribusi informasi, atau mitra program akademik & sosial.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
