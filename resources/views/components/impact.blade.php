@props(['impactStats' => null])

@php
    if (is_null($impactStats) || $impactStats->isEmpty()) {
        $impactStats = \App\Models\ImpactStat::orderBy('order', 'asc')->get();
    }
@endphp

<section class="relative py-20 sm:py-24 bg-[#EAE6DF] text-slate-950 border-t border-slate-400/30">
    <!-- Blueprint Grid Lines (Matching Section 2 Cream Style) -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <div class="absolute top-0 bottom-0 left-5 sm:left-20 border-r border-slate-400/30"></div>
        <div class="absolute top-0 bottom-0 right-5 sm:right-20 border-l border-slate-400/30"></div>
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-8 sm:px-28">
        <div class="grid grid-cols-1 md:grid-cols-{{ max(1, min(4, $impactStats->count())) }} gap-10 sm:gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-400/30">
            
            @foreach ($impactStats as $stat)
                <div class="{{ $loop->first ? 'pt-2 md:pt-0' : 'pt-8 md:pt-0' }} md:px-6 space-y-2">
                    <p class="font-serif-custom text-4xl sm:text-5xl font-normal text-slate-950">{{ $stat->value }}</p>
                    <p class="text-xs sm:text-sm text-slate-700 font-sans font-medium max-w-xs mx-auto">{{ $stat->label }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
