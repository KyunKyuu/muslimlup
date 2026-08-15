<section id="showcase" class="py-24 bg-slate-900 text-white relative overflow-hidden" x-data="{ activeTab: 'analytics' }">
    <!-- Ambient Glow behind showcase -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-indigo-600/20 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-12">
            <span class="px-3 py-1 rounded-full bg-indigo-500/20 border border-indigo-500/30 text-indigo-400 text-xs font-bold uppercase tracking-wider">
                Showcase Produk
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                Lihat Bagaimana Mlup Bekerja Dalam
                <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Aksi Nyata
                </span>
            </h2>
            <p class="text-slate-400 text-base sm:text-lg">
                Pilih modul di bawah ini untuk menjelajahi antarmuka interaktif platform kami.
            </p>
        </div>

        <!-- Interactive Tabs Navigation -->
        <div class="flex items-center justify-center gap-2 sm:gap-4 mb-10 overflow-x-auto p-1.5 max-w-2xl mx-auto bg-slate-800/80 rounded-2xl border border-slate-700/80 backdrop-blur-md">
            <button @click="activeTab = 'analytics'"
                    :class="activeTab === 'analytics' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white'"
                    class="px-5 py-3 rounded-xl font-semibold text-sm transition-all duration-300 flex items-center gap-2 whitespace-nowrap">
                <i data-lucide="line-chart" class="w-4 h-4"></i>
                Analisis Real-Time
            </button>

            <button @click="activeTab = 'automation'"
                    :class="activeTab === 'automation' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white'"
                    class="px-5 py-3 rounded-xl font-semibold text-sm transition-all duration-300 flex items-center gap-2 whitespace-nowrap">
                <i data-lucide="workflow" class="w-4 h-4"></i>
                Otomasi Visual
            </button>

            <button @click="activeTab = 'team'"
                    :class="activeTab === 'team' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white'"
                    class="px-5 py-3 rounded-xl font-semibold text-sm transition-all duration-300 flex items-center gap-2 whitespace-nowrap">
                <i data-lucide="users" class="w-4 h-4"></i>
                Kolaborasi Tim
            </button>
        </div>

        <!-- Tab Content 1: Analytics -->
        <div x-show="activeTab === 'analytics'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/50 rounded-3xl p-6 sm:p-10 border border-slate-700/60 backdrop-blur-xl">
            <div class="lg:col-span-5 space-y-6">
                <span class="px-3 py-1 rounded-md bg-indigo-500/20 text-indigo-400 text-xs font-mono font-semibold">Live Analytics</span>
                <h3 class="text-2xl sm:text-3xl font-bold">Dasbor Pemantauan Pertumbuhan</h3>
                <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                    Lacak konversi penjualan, retensi pengguna, dan aliran pendapatan dalam satu tampilan grafis yang elegan. Dilengkapi dengan filter periode waktu dan fitur ekspor PDF/Excel secara instan.
                </p>
                <ul class="space-y-3 text-sm text-slate-300">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-400"></i> Metrik konversi waktu nyata (Latency &lt; 100ms)
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-400"></i> Notifikasi otomatis jika ada lonjakan traffic
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-400"></i> Kustomisasi widget dasbor tanpa batas
                    </li>
                </ul>
            </div>
            
            <div class="lg:col-span-7 rounded-2xl bg-slate-900 border border-slate-700 p-6 space-y-6 shadow-2xl">
                <div class="flex justify-between items-center pb-4 border-b border-slate-800">
                    <span class="text-sm font-bold text-slate-200">Revenue Growth Monitor</span>
                    <span class="text-xs text-emerald-400 bg-emerald-950/60 px-2.5 py-1 rounded-full border border-emerald-800">Live Updating</span>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between text-xs text-slate-400">
                        <span>Target Bulanan: Rp 500M</span>
                        <span class="text-indigo-400 font-bold">84% Tercapai</span>
                    </div>
                    <div class="w-full bg-slate-800 h-3 rounded-full overflow-hidden">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-500 h-full w-[84%]"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                        <p class="text-xs text-slate-400">Pelanggan Baru</p>
                        <p class="text-xl font-bold text-white mt-1">+1.240</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700">
                        <p class="text-xs text-slate-400">Conversion Rate</p>
                        <p class="text-xl font-bold text-white mt-1">4.82%</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 col-span-2 sm:col-span-1">
                        <p class="text-xs text-slate-400">Churn Rate</p>
                        <p class="text-xl font-bold text-emerald-400 mt-1">0.4% (Rendah)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content 2: Automation -->
        <div x-show="activeTab === 'automation'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/50 rounded-3xl p-6 sm:p-10 border border-slate-700/60 backdrop-blur-xl">
            <div class="lg:col-span-5 space-y-6">
                <span class="px-3 py-1 rounded-md bg-purple-500/20 text-purple-400 text-xs font-mono font-semibold">Visual Builder</span>
                <h3 class="text-2xl sm:text-3xl font-bold">Rangkai Workflow Seperti Puzzle</h3>
                <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                    Buat aturan bisnis otomatis hanya dengan sistem drag-and-drop. Tidak membutuhkan keahlian koding untuk menghubungkan aplikasi dan trigger.
                </p>
                <ul class="space-y-3 text-sm text-slate-300">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-purple-400"></i> Visual Node Editor yang intuitif
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-purple-400"></i> 50+ Template workflow siap pakai
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-purple-400"></i> Penanganan error dan retry otomatis
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-7 rounded-2xl bg-slate-900 border border-slate-700 p-6 space-y-4 shadow-2xl">
                <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs text-slate-400">
                    <span>Workflow Canvas: Lead Qualification Engine</span>
                    <span class="text-purple-400 font-semibold">Active Pipeline</span>
                </div>
                <!-- Workflow Nodes Simulation -->
                <div class="space-y-3">
                    <div class="p-4 rounded-xl bg-slate-800/90 border border-indigo-500/40 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center">
                                <i data-lucide="arrow-down-right" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-white">Trigger: Form Registration Submitted</p>
                                <p class="text-[11px] text-slate-400">Source: Website Landing Page</p>
                            </div>
                        </div>
                        <span class="text-xs text-emerald-400 bg-emerald-950/50 px-2 py-0.5 rounded">Success</span>
                    </div>

                    <div class="w-0.5 h-4 bg-indigo-500/50 mx-auto"></div>

                    <div class="p-4 rounded-xl bg-slate-800/90 border border-purple-500/40 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center">
                                <i data-lucide="filter" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-white">Action: Filter Leads & Score Priority</p>
                                <p class="text-[11px] text-slate-400">Score &gt; 80 == Priority Lead</p>
                            </div>
                        </div>
                        <span class="text-xs text-emerald-400 bg-emerald-950/50 px-2 py-0.5 rounded">Success</span>
                    </div>

                    <div class="w-0.5 h-4 bg-indigo-500/50 mx-auto"></div>

                    <div class="p-4 rounded-xl bg-slate-800/90 border border-pink-500/40 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-pink-500/20 text-pink-400 flex items-center justify-center">
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-white">Destination: Send Slack Alert to Sales Team</p>
                                <p class="text-[11px] text-slate-400">Channel: #sales-hot-leads</p>
                            </div>
                        </div>
                        <span class="text-xs text-emerald-400 bg-emerald-950/50 px-2 py-0.5 rounded">Done</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content 3: Team -->
        <div x-show="activeTab === 'team'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/50 rounded-3xl p-6 sm:p-10 border border-slate-700/60 backdrop-blur-xl">
            <div class="lg:col-span-5 space-y-6">
                <span class="px-3 py-1 rounded-md bg-pink-500/20 text-pink-400 text-xs font-mono font-semibold">Team Collaboration</span>
                <h3 class="text-2xl sm:text-3xl font-bold">Kolaborasi Lintas Tim Tanpa Hambatan</h3>
                <p class="text-slate-300 leading-relaxed text-sm sm:text-base">
                    Kelola hak akses anggota tim, tetapkan peran khusus, dan lihat siapa yang sedang mengerjakan task secara real-time.
                </p>
                <ul class="space-y-3 text-sm text-slate-300">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-pink-400"></i> Role-Based Access Control (Admin, Manager, Viewer)
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-pink-400"></i> Audit log aktivitas pengguna terlengkap
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-pink-400"></i> Single Sign-On (SSO) Google & SAML
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-7 rounded-2xl bg-slate-900 border border-slate-700 p-6 space-y-4 shadow-2xl">
                <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs text-slate-400">
                    <span>Anggota Tim Aktif (4 Online)</span>
                    <span class="text-indigo-400 font-semibold">+ Tambah Anggota</span>
                </div>
                <div class="space-y-3">
                    <div class="p-3 rounded-xl bg-slate-800/70 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-indigo-600 font-bold text-white flex items-center justify-center">AR</div>
                            <div>
                                <p class="font-semibold text-white">Ahmad Rizky</p>
                                <p class="text-slate-400">rizky@perusahaan.id</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-indigo-950 text-indigo-300 font-mono">Owner / Admin</span>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-800/70 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-purple-600 font-bold text-white flex items-center justify-center">SD</div>
                            <div>
                                <p class="font-semibold text-white">Siti Dewi</p>
                                <p class="text-slate-400">dewi@perusahaan.id</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-purple-950 text-purple-300 font-mono">Product Lead</span>
                    </div>

                    <div class="p-3 rounded-xl bg-slate-800/70 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-600 font-bold text-white flex items-center justify-center">BP</div>
                            <div>
                                <p class="font-semibold text-white">Budi Pratama</p>
                                <p class="text-slate-400">budi@perusahaan.id</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-emerald-950 text-emerald-300 font-mono">Developer</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
