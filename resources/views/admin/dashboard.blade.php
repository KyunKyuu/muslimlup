<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin — MLUP Academy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen">

    <!-- Top Admin Header -->
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full overflow-hidden border border-slate-700 bg-white shrink-0">
                    <img src="{{ asset('images/logo_mlup.jpg') }}" alt="MLUP Logo" class="w-full h-full object-cover">
                </div>
                <span class="font-serif-custom text-lg text-white">
                    MLUP <span class="italic text-sky-400">Dashboard</span>
                </span>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" target="_blank" class="text-xs font-mono text-slate-400 hover:text-white transition-colors flex items-center gap-1">
                    <span>Lihat Website</span> ↗
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-3.5 py-1.5 rounded-lg bg-rose-500/20 hover:bg-rose-500/30 text-rose-300 border border-rose-500/30 text-xs font-semibold transition-all">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Dashboard Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-8 py-8 space-y-8" x-data="{ activeTab: 'contributors' }">

        <!-- Flash Success Notification -->
        @if (session('success'))
            <div class="p-4 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-sm flex items-center justify-between">
                <span>✓ {{ session('success') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="p-4 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-300 text-sm space-y-1">
                @foreach ($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Tab Navigation Switcher -->
        <div class="flex items-center gap-2 border-b border-slate-800 pb-4">
            <button @click="activeTab = 'contributors'" 
                    :class="activeTab === 'contributors' ? 'bg-sky-500/20 text-sky-300 border-sky-500/50' : 'bg-slate-900 text-slate-400 border-slate-800 hover:text-white'"
                    class="px-5 py-2.5 rounded-xl border font-mono text-xs font-bold uppercase tracking-wider transition-all">
                📷 Kontributor MLUP ({{ $contributors->count() }})
            </button>
            
            <button @click="activeTab = 'impact'" 
                    :class="activeTab === 'impact' ? 'bg-sky-500/20 text-sky-300 border-sky-500/50' : 'bg-slate-900 text-slate-400 border-slate-800 hover:text-white'"
                    class="px-5 py-2.5 rounded-xl border font-mono text-xs font-bold uppercase tracking-wider transition-all">
                📊 Data Impact ({{ $impactStats->count() }})
            </button>
        </div>

        <!-- TAB 1: KONTRIBUTOR MLUP (PEMATERI SLIDER) -->
        <div x-show="activeTab === 'contributors'" class="space-y-8">
            
            <!-- Upload Form Card -->
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-white">Tambah Foto Kontributor Baru</h3>
                        <p class="text-xs text-slate-400">Upload foto pemateri/kontributor baru. Secara default akan ditambahkan ke urutan paling akhir.</p>
                    </div>
                    <span class="text-xs font-mono text-slate-500">Max {{ ($contributors->max('order') ?? 0) + 1 }}</span>
                </div>

                <form action="{{ route('admin.contributors.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-end">
                    @csrf
                    
                    <!-- File Input -->
                    <div class="sm:col-span-7 space-y-1">
                        <label for="image" class="text-xs font-mono text-slate-400 uppercase font-semibold">Pilih File Gambar</label>
                        <input type="file" id="image" name="image" accept="image/*" required
                               class="w-full px-3 py-2 rounded-xl bg-slate-950 border border-slate-800 text-xs text-slate-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-sky-500/20 file:text-sky-300 hover:file:bg-sky-500/30">
                    </div>

                    <!-- Order Input (Optional, default auto last) -->
                    <div class="sm:col-span-3 space-y-1">
                        <label for="order" class="text-xs font-mono text-slate-400 uppercase font-semibold">Urutan (Opsional)</label>
                        <input type="number" id="order" name="order" min="1" placeholder="Default: {{ ($contributors->max('order') ?? 0) + 1 }}"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-xs focus:outline-none focus:border-sky-500">
                    </div>

                    <!-- Submit Button -->
                    <div class="sm:col-span-2">
                        <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs uppercase tracking-wider transition-all">
                            + UPLOAD
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contributor Grid List -->
            <div class="space-y-4">
                <h4 class="text-sm font-mono font-bold uppercase tracking-wider text-slate-400">Daftar Kontributor Terpasang</h4>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @forelse ($contributors as $contributor)
                        <div class="p-3 rounded-2xl bg-slate-900 border border-slate-800 space-y-3 flex flex-col justify-between group">
                            
                            <!-- Image Thumbnail -->
                            <div class="w-full h-44 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 relative">
                                <img src="{{ asset($contributor->image_path) }}" alt="Kontributor" class="w-full h-full object-cover">
                                <div class="absolute top-2 left-2 px-2 py-0.5 rounded bg-slate-950/80 backdrop-blur-md border border-slate-700 text-[10px] font-mono text-sky-300 font-bold">
                                    #{{ $contributor->order }}
                                </div>
                            </div>

                            <!-- Controls -->
                            <div class="space-y-2 pt-1">
                                <!-- Order Update Form -->
                                <form action="{{ route('admin.contributors.order', $contributor->id) }}" method="POST" class="flex items-center gap-1">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="order" value="{{ $contributor->order }}" min="1" required
                                           class="w-full px-2 py-1 rounded-lg bg-slate-950 border border-slate-800 text-center text-xs text-slate-200">
                                    <button type="submit" title="Simpan Urutan" class="p-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs transition-colors">
                                        ✓
                                    </button>
                                </form>

                                <!-- Delete Form -->
                                <form action="{{ route('admin.contributors.destroy', $contributor->id) }}" method="POST" onsubmit="return confirm('Yakin hapus foto kontributor ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full py-1 rounded-lg bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 text-[11px] font-semibold transition-colors">
                                        Hapus
                                    </button>
                                </form>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-full py-12 text-center text-slate-500 text-sm">
                            Belum ada foto kontributor terpasang. Silakan upload foto baru.
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

        <!-- TAB 2: DATA IMPACT (3 DATA LAPORAN) -->
        <div x-show="activeTab === 'impact'" class="space-y-8" x-cloak>
            
            <!-- Add New Impact Stat Form -->
            <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
                <div>
                    <h3 class="text-lg font-bold text-white">Tambah Data Impact Baru</h3>
                    <p class="text-xs text-slate-400">Tambahkan poin angka laporan statistik yang tampil di homepage.</p>
                </div>

                <form action="{{ route('admin.impact-stats.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-end">
                    @csrf
                    
                    <div class="sm:col-span-4 space-y-1">
                        <label for="stat_value" class="text-xs font-mono text-slate-400 uppercase font-semibold">Angka / Nilai (Teks Besar)</label>
                        <input type="text" id="stat_value" name="value" placeholder="Contoh: Rp 34,2 jt" required
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-sm focus:outline-none focus:border-sky-500">
                    </div>

                    <div class="sm:col-span-5 space-y-1">
                        <label for="stat_label" class="text-xs font-mono text-slate-400 uppercase font-semibold">Keterangan / Deskripsi</label>
                        <input type="text" id="stat_label" name="label" placeholder="Contoh: Dana ZIS tersalurkan — Ramadhan 1447 H" required
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-sm focus:outline-none focus:border-sky-500">
                    </div>

                    <div class="sm:col-span-1 space-y-1">
                        <label for="stat_order" class="text-xs font-mono text-slate-400 uppercase font-semibold">Urutan</label>
                        <input type="number" id="stat_order" name="order" min="1" placeholder="{{ ($impactStats->max('order') ?? 0) + 1 }}"
                               class="w-full px-3 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 text-sm text-center">
                    </div>

                    <div class="sm:col-span-2">
                        <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider transition-all">
                            + TAMBAH DATA
                        </button>
                    </div>
                </form>
            </div>

            <!-- Existing Impact Stats List -->
            <div class="space-y-4">
                <h4 class="text-sm font-mono font-bold uppercase tracking-wider text-slate-400">Daftar Data Impact Aktif</h4>

                <div class="space-y-4">
                    @forelse ($impactStats as $stat)
                        <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800">
                            <form action="{{ route('admin.impact-stats.update', $stat->id) }}" method="POST" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                                @csrf
                                @method('PUT')

                                <!-- Order -->
                                <div class="sm:col-span-1">
                                    <label class="text-[10px] font-mono text-slate-500 uppercase block mb-1">Urutan</label>
                                    <input type="number" name="order" value="{{ $stat->order }}" min="1" required
                                           class="w-full px-2 py-2 rounded-xl bg-slate-950 border border-slate-800 text-center font-mono font-bold text-sky-400 text-sm">
                                </div>

                                <!-- Value -->
                                <div class="sm:col-span-4">
                                    <label class="text-[10px] font-mono text-slate-500 uppercase block mb-1">Angka Laporan</label>
                                    <input type="text" name="value" value="{{ $stat->value }}" required
                                           class="w-full px-4 py-2 rounded-xl bg-slate-950 border border-slate-800 text-white font-serif-custom text-xl font-normal">
                                </div>

                                <!-- Label -->
                                <div class="sm:col-span-5">
                                    <label class="text-[10px] font-mono text-slate-500 uppercase block mb-1">Keterangan / Deskripsi</label>
                                    <input type="text" name="label" value="{{ $stat->label }}" required
                                           class="w-full px-4 py-2 rounded-xl bg-slate-950 border border-slate-800 text-slate-300 text-sm">
                                </div>

                                <!-- Actions -->
                                <div class="sm:col-span-2 flex items-center justify-end gap-2 pt-2 sm:pt-0">
                                    <button type="submit" class="px-3.5 py-2 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold transition-all">
                                        Simpan
                                    </button>

                                    <form action="{{ route('admin.impact-stats.destroy', $stat->id) }}" method="POST" onsubmit="return confirm('Hapus data impact ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3.5 py-2 rounded-xl bg-rose-500/20 hover:bg-rose-500/30 text-rose-300 border border-rose-500/30 text-xs font-semibold transition-all">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    @empty
                        <div class="py-12 text-center text-slate-500 text-sm">
                            Belum ada data impact terpasang.
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

    </main>

</body>
</html>
