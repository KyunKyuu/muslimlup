<section class="relative min-h-[85vh] sm:min-h-screen bg-[#EAE6DF] text-slate-900 overflow-hidden border-t border-slate-400/30 flex items-center">
    
    <!-- Tightly Cropped Person Cutout Image orang_pena_remove.png -->
    <div class="absolute inset-y-0 right-0 z-0 pointer-events-none w-full lg:w-1/2 flex items-end justify-end overflow-hidden">
        <img src="{{ asset('images/orang_pena_remove.png') }}" 
             alt="MLUP Undangan Gerakan" 
             class="h-[65vh] sm:h-[95vh] max-h-[950px] w-auto object-contain object-bottom-right opacity-90 lg:opacity-100">
    </div>

    <!-- Blueprint Grid Overlay Lines -->
    <div class="absolute inset-0 pointer-events-none z-10">
        <div class="absolute top-0 bottom-0 left-5 sm:left-20 border-r border-slate-400/30"></div>
        <div class="absolute top-0 bottom-0 right-5 sm:right-20 border-l border-slate-400/30"></div>

        <!-- Sparkle Crosshairs (✦) -->
        <div class="absolute top-12 left-5 sm:left-20 -translate-x-1/2 text-slate-700 text-sm">✦</div>
        <div class="absolute bottom-12 left-5 sm:left-20 -translate-x-1/2 text-slate-700 text-sm">✦</div>
        <div class="absolute top-12 right-5 sm:right-20 translate-x-1/2 text-slate-700 text-sm">✦</div>
        <div class="absolute bottom-12 right-5 sm:right-20 translate-x-1/2 text-slate-700 text-sm">✦</div>
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-8 sm:px-24 py-16 sm:py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left Side: Pure Quote Text ONLY -->
            <div class="lg:col-span-7 space-y-6 pr-0 lg:pr-6">
                <div class="max-w-lg">
                    <p class="font-serif-custom text-2xl sm:text-4xl text-slate-950 italic leading-relaxed drop-shadow-sm">
                        "Jika kamu percaya bahwa ada yang seharusnya bergerak mengisi ruang ini — maka kamu sedang membaca undangan untuk menjadi bagian dari yang bergerak."
                    </p>
                </div>
            </div>

            <!-- Right Side Spacer -->
            <div class="lg:col-span-5 hidden lg:block"></div>

        </div>
    </div>
</section>
