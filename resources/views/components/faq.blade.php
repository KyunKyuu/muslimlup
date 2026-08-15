<section id="faq" class="py-24 relative" x-data="{ openFaq: 1 }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center space-y-4 mb-16">
            <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-bold uppercase tracking-wider">
                Pertanyaan Umum
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                Sering Ditanyakan (<span class="text-indigo-600 dark:text-indigo-400">FAQ</span>)
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg">
                Punya pertanyaan sebelum memulai? Kami siap membantu menjawabnya.
            </p>
        </div>

        <!-- Accordion List -->
        <div class="space-y-4">
            
            <!-- Item 1 -->
            <div class="rounded-2xl glass-card border border-slate-200/80 dark:border-slate-800/80 overflow-hidden transition-colors">
                <button @click="openFaq = openFaq === 1 ? null : 1" 
                        class="w-full p-6 text-left font-bold text-slate-900 dark:text-white flex items-center justify-between gap-4 focus:outline-none">
                    <span class="text-base sm:text-lg">Apakah ada uji coba gratis tanpa kartu kredit?</span>
                    <i data-lucide="chevron-down" 
                       class="w-5 h-5 text-indigo-500 shrink-0 transform transition-transform duration-300"
                       :class="{ 'rotate-180': openFaq === 1 }"></i>
                </button>
                <div x-show="openFaq === 1" 
                     x-collapse
                     class="px-6 pb-6 text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed border-t border-slate-200/40 dark:border-slate-800/40 pt-4">
                    Ya, tentu saja! Anda mendapatkan akses penuh ke seluruh fitur paket Pro selama 14 hari tanpa perlu memasukkan informasi kartu kredit atau metode pembayaran apapun saat mendaftar.
                </div>
            </div>

            <!-- Item 2 -->
            <div class="rounded-2xl glass-card border border-slate-200/80 dark:border-slate-800/80 overflow-hidden transition-colors">
                <button @click="openFaq = openFaq === 2 ? null : 2" 
                        class="w-full p-6 text-left font-bold text-slate-900 dark:text-white flex items-center justify-between gap-4 focus:outline-none">
                    <span class="text-base sm:text-lg">Berapa lama waktu yang dibutuhkan untuk integrasi?</span>
                    <i data-lucide="chevron-down" 
                       class="w-5 h-5 text-indigo-500 shrink-0 transform transition-transform duration-300"
                       :class="{ 'rotate-180': openFaq === 2 }"></i>
                </button>
                <div x-show="openFaq === 2" 
                     x-collapse
                     class="px-6 pb-6 text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed border-t border-slate-200/40 dark:border-slate-800/40 pt-4">
                    Sebagian besar tim dapat mengonfigurasi alur kerja pertama mereka hanya dalam waktu 5 hingga 10 menit menggunakan visual builder kami. Dokumentasi API dan SDK kami juga sangat lengkap untuk pengembang.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="rounded-2xl glass-card border border-slate-200/80 dark:border-slate-800/80 overflow-hidden transition-colors">
                <button @click="openFaq = openFaq === 3 ? null : 3" 
                        class="w-full p-6 text-left font-bold text-slate-900 dark:text-white flex items-center justify-between gap-4 focus:outline-none">
                    <span class="text-base sm:text-lg">Bagaimana dengan standar keamanan data di Mlup?</span>
                    <i data-lucide="chevron-down" 
                       class="w-5 h-5 text-indigo-500 shrink-0 transform transition-transform duration-300"
                       :class="{ 'rotate-180': openFaq === 3 }"></i>
                </button>
                <div x-show="openFaq === 3" 
                     x-collapse
                     class="px-6 pb-6 text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed border-t border-slate-200/40 dark:border-slate-800/40 pt-4">
                    Keamanan data adalah prioritas utama kami. Semua data dienkripsi saat transit (TLS 1.3) dan saat disimpan (AES-256). Kami juga patuh pada regulasi GDPR dan undang-undang perlindungan data pribadi.
                </div>
            </div>

            <!-- Item 4 -->
            <div class="rounded-2xl glass-card border border-slate-200/80 dark:border-slate-800/80 overflow-hidden transition-colors">
                <button @click="openFaq = openFaq === 4 ? null : 4" 
                        class="w-full p-6 text-left font-bold text-slate-900 dark:text-white flex items-center justify-between gap-4 focus:outline-none">
                    <span class="text-base sm:text-lg">Bisakah saya mengubah atau membatalkan paket sewaktu-waktu?</span>
                    <i data-lucide="chevron-down" 
                       class="w-5 h-5 text-indigo-500 shrink-0 transform transition-transform duration-300"
                       :class="{ 'rotate-180': openFaq === 4 }"></i>
                </button>
                <div x-show="openFaq === 4" 
                     x-collapse
                     class="px-6 pb-6 text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed border-t border-slate-200/40 dark:border-slate-800/40 pt-4">
                    Bisa. Anda bebas menaikkan (upgrade), menurunkan (downgrade), atau membatalkan langganan kapan saja melalui dasbor billing akun Anda tanpa biaya tersembunyi.
                </div>
            </div>

        </div>
    </div>
</section>
