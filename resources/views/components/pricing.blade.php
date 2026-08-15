<section id="harga" class="py-24 relative" x-data="{ annual: true }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-12">
            <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                Investasi Bisnis
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                Pilih Paket Yang Sesuai Dengan
                <span class="bg-gradient-to-r from-indigo-600 to-pink-500 bg-clip-text text-transparent">
                    Kebutuhan Anda
                </span>
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                Tanpa biaya tersembunyi. Batalkan kapan saja tanpa komitmen jangka panjang.
            </p>

            <!-- Billing Switcher (Monthly vs Annual) -->
            <div class="pt-6 flex items-center justify-center gap-4">
                <span class="text-sm font-semibold" :class="!annual ? 'text-slate-900 dark:text-white' : 'text-slate-500'">Bulanan</span>
                
                <button @click="annual = !annual" 
                        class="relative w-14 h-8 rounded-full bg-slate-300 dark:bg-slate-700 p-1 transition-colors duration-300 focus:outline-none"
                        :class="{ 'bg-indigo-600 dark:bg-indigo-600': annual }">
                    <div class="w-6 h-6 rounded-full bg-white shadow-md transform transition-transform duration-300"
                         :class="{ 'translate-x-6': annual }"></div>
                </button>

                <span class="text-sm font-semibold flex items-center gap-1.5" :class="annual ? 'text-slate-900 dark:text-white' : 'text-slate-500'">
                    Tahunan
                    <span class="px-2 py-0.5 rounded-full bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20 text-xs font-bold">
                        Hemat 20%
                    </span>
                </span>
            </div>
        </div>

        <!-- Pricing Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            <!-- Tier 1: Starter -->
            <div class="rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">Starter</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Cocok untuk perorangan dan tim kecil yang baru mulai.</p>
                    </div>

                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-slate-900 dark:text-white" x-text="annual ? 'Rp 119rb' : 'Rp 149rb'"></span>
                        <span class="text-slate-500 text-xs">/ bulan</span>
                    </div>

                    <ul class="space-y-3 pt-4 border-t border-slate-200/60 dark:border-slate-800/60 text-sm text-slate-600 dark:text-slate-300">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> 3 Alur Kerja Otomatis
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Up to 5.000 eksekusi/bulan
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> 2 Anggota Tim
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Retensi data 30 hari
                        </li>
                        <li class="flex items-center gap-3 text-slate-400 dark:text-slate-600">
                            <i data-lucide="x" class="w-5 h-5 shrink-0"></i> Integrasi Webhook Kustom
                        </li>
                    </ul>
                </div>

                <div class="pt-8">
                    <a href="#cta" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors">
                        Pilih Starter
                    </a>
                </div>
            </div>

            <!-- Tier 2: Pro (Featured) -->
            <div class="relative rounded-3xl glass-card p-8 border-2 border-indigo-500 dark:border-indigo-500 flex flex-col justify-between shadow-2xl shadow-indigo-500/20 scale-105 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs font-bold shadow-md">
                    ⭐ Paling Populer
                </div>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">Pro Professional</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Untuk bisnis berkembang yang butuh efisiensi maksimal.</p>
                    </div>

                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-slate-900 dark:text-white" x-text="annual ? 'Rp 319rb' : 'Rp 399rb'"></span>
                        <span class="text-slate-500 text-xs">/ bulan</span>
                    </div>

                    <ul class="space-y-3 pt-4 border-t border-slate-200/60 dark:border-slate-800/60 text-sm text-slate-600 dark:text-slate-300">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-500 shrink-0"></i> Unlimited Alur Kerja Otomatis
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-500 shrink-0"></i> Up to 100.000 eksekusi/bulan
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-500 shrink-0"></i> 10 Anggota Tim & Roles
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-500 shrink-0"></i> Integrasi Webhook & API Latency Rendah
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-indigo-500 shrink-0"></i> Dukungan Prioritas 24/7
                        </li>
                    </ul>
                </div>

                <div class="pt-8">
                    <a href="#cta" class="w-full inline-flex items-center justify-center px-6 py-3.5 text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 rounded-xl shadow-lg shadow-indigo-600/30 transition-all hover:scale-[1.02]">
                        Mulai Coba 14 Hari Gratis
                    </a>
                </div>
            </div>

            <!-- Tier 3: Enterprise -->
            <div class="rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">Enterprise</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Kebutuhan infrastruktur khusus dan keamanan skala besar.</p>
                    </div>

                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-extrabold text-slate-900 dark:text-white" x-text="annual ? 'Rp 719rb' : 'Rp 899rb'"></span>
                        <span class="text-slate-500 text-xs">/ bulan</span>
                    </div>

                    <ul class="space-y-3 pt-4 border-t border-slate-200/60 dark:border-slate-800/60 text-sm text-slate-600 dark:text-slate-300">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Quota Eksekusi Kustom
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Anggota Tim Tanpa Batas (SSO)
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> SLA 99.99% Guaranteed
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Dedicated Account Manager
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-indigo-500 shrink-0"></i> Custom On-Premise Deployment Option
                        </li>
                    </ul>
                </div>

                <div class="pt-8">
                    <a href="#cta" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-xl transition-colors">
                        Hubungi Tim Sales
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
