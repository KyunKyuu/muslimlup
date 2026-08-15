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
        <div class="absolute top-0 bottom-0 left-5 sm:left-20 border-r border-white/25"></div>

        <!-- 42% Vertical Blueprint Dividing Line (Left artwork / Right text split) -->
        <div class="absolute top-0 bottom-0 left-[42%] sm:left-[40%] lg:left-[42%] border-r border-white/25 hidden md:block"></div>

        <!-- Right Vertical Line -->
        <div class="absolute top-0 bottom-0 right-5 sm:right-16 border-l border-white/25"></div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="relative z-20 max-w-[1400px] mx-auto px-8 sm:px-20 py-12">
        
        <!-- SECTION 1: PROGRAM / TIGA LINI GERAK (Text Focused on Right Panel) -->
        <section id="program" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-10 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
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
                                </div>
                            </div>
                        </div>

                        <!-- Lini Keprofesian & Bisnis -->
                        <div class="flex items-start gap-4 pt-4 border-t border-white/15">
                            <span class="text-xl shrink-0 mt-0.5">💼</span>
                            <div class="space-y-2">
                                <h4 class="font-bold text-white text-base">Lini Keprofesian & Bisnis</h4>
                                <p class="text-white/85 text-xs sm:text-sm leading-relaxed">Menyiapkan mahasiswa muslim menjadi profesional dan pengusaha yang relevan, berintegritas, dan mandiri secara finansial.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 2: MITRA / POKSI & EKOSISTEM (Text Focused on Right Panel) -->
        <section id="mitra" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-10 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 04 MITRA & EKOSISTEM
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            EKOSISTEM MLUP
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Jejaring pakar & <span class="italic text-sky-200">mitra gerakan.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            MLUP bergerak bersama akademisi, praktisi, dan jaringan komunitas untuk memastikan setiap program didampingi oleh orang-orang yang berkompeten.
                        </p>
                    </div>

                    <!-- Clean Content Grid for Mobile & Desktop -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-white/20">
                        <div class="space-y-2">
                            <span class="text-[10px] font-mono text-sky-200 tracking-widest uppercase font-semibold">POKSI</span>
                            <h4 class="font-bold text-white text-base">Pokja Akademik & Doktoral</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Tim pengarah dan mentor akademis yang terdiri dari dosen, peneliti, dan profesional muslim berkualifikasi.</p>
                        </div>

                        <div class="space-y-2">
                            <span class="text-[10px] font-mono text-sky-200 tracking-widest uppercase font-semibold">KOMUNITAS</span>
                            <h4 class="font-bold text-white text-base">Jaringan Kampus & Pemuda</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Kolaborasi lintas kampus di Bandung dan seluruh Indonesia untuk mendistribusikan dampak secara merata.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 3: ROADMAP 1448 H (Text Focused on Right Panel) -->
        <section id="roadmap" class="min-h-screen relative flex items-center py-24 border-b border-white/20">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-10 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 05 ROADMAP 1448 H
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

                    <!-- Numbered Steps -->
                    <div class="space-y-4 pt-4 border-t border-white/20">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/20 border border-white/30 flex items-center justify-center font-mono text-xs font-bold text-white shrink-0">1</div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-white text-sm">Hotline Akademik</h4>
                                <p class="text-white/80 text-xs leading-relaxed">Membuka kanal pengaduan dan database kebutuhan mahasiswa secara individual.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/20 border border-white/30 flex items-center justify-center font-mono text-xs font-bold text-white shrink-0">2</div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-white text-sm">Donatur Akademik</h4>
                                <p class="text-white/80 text-xs leading-relaxed">Menghubungkan donatur dengan mahasiswa yang membutuhkan — terukur dan amanah.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/20 border border-white/30 flex items-center justify-center font-mono text-xs font-bold text-white shrink-0">3</div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-white text-sm">Penyaluran & Pendampingan</h4>
                                <p class="text-white/80 text-xs leading-relaxed">Bimbingan dan dana disalurkan bersama POKSI — profesional, doktoral, dan profesor mitra MLUP.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/20 border border-white/30 flex items-center justify-center font-mono text-xs font-bold text-white shrink-0">4</div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-white text-sm">Pendanaan Berkelanjutan</h4>
                                <p class="text-white/80 text-xs leading-relaxed">Crowdfunding dan sponsorship lewat proposal proyek dari mahasiswa dan POKSI.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 4: KOLABORASI (Text Focused on Right Panel) -->
        <section id="kolaborasi" class="min-h-screen relative flex items-center py-24">
            <!-- Blueprint Section Indicator -->
            <div class="absolute left-10 sm:left-24 top-8 text-xs font-mono text-white/70 hidden sm:block">
                — 06 KOLABORASI
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Left Panel (5 cols): Clear Space for Floating Cloud Artwork of panjang.png -->
                <div class="lg:col-span-5 hidden lg:block"></div>

                <!-- Right Panel (7 cols): Main Text & Content Aligned to Right -->
                <div class="lg:col-span-7 space-y-8 pl-0 lg:pl-8">
                    
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded border border-white/30 text-[10px] font-mono tracking-widest uppercase text-sky-100 bg-black/30 backdrop-blur-sm">
                            KOLABORASI
                        </span>

                        <h2 class="font-serif-custom text-4xl sm:text-6xl font-normal tracking-tight text-white leading-[1.1] drop-shadow">
                            Ada banyak cara untuk <span class="italic text-sky-200">bergabung.</span>
                        </h2>

                        <p class="text-white/90 text-base sm:text-lg font-sans leading-relaxed drop-shadow-sm">
                            MLUP adalah ekosistem terbuka. Sesuai kapasitas dan niat masing-masing.
                        </p>
                    </div>

                    <!-- Collab Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div class="p-5 rounded-xl bg-black/30 backdrop-blur-md border border-white/20 space-y-2">
                            <h4 class="font-bold text-amber-300 text-sm">Donatur</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Donasi ke program sosial (Ramadhan Berjaya, PARQOUR) maupun program akademik (Beasiswa MLUP). Setiap penyaluran dilaporkan secara transparan.</p>
                        </div>

                        <div class="p-5 rounded-xl bg-black/30 backdrop-blur-md border border-white/20 space-y-2">
                            <h4 class="font-bold text-sky-300 text-sm">Sponsor</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Jadikan nama atau lembagamu bagian dari program MLUP — workshop, LINTAS, dan program lainnya membuka ruang sponsorship yang berdampak.</p>
                        </div>

                        <div class="p-5 rounded-xl bg-black/30 backdrop-blur-md border border-white/20 space-y-2">
                            <h4 class="font-bold text-emerald-300 text-sm">Volunteer</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Bergabung sebagai volunteer per-event maupun volunteer tetap. Semua yang bergerak di MLUP adalah volunteer — dan kami bangga dengan itu.</p>
                        </div>

                        <div class="p-5 rounded-xl bg-black/30 backdrop-blur-md border border-white/20 space-y-2">
                            <h4 class="font-bold text-indigo-300 text-sm">Komunitas & Kampus</h4>
                            <p class="text-white/80 text-xs leading-relaxed">Buka ruang kolaborasi bersama MLUP — co-host program, distribusi informasi, atau menjadi mitra dalam program akademik dan sosial.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

</div>
