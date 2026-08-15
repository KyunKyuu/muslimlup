<section class="relative min-h-[85vh] sm:min-h-screen bg-[#EAE6DF] text-slate-900 overflow-hidden border-t border-slate-400/30 flex flex-col justify-between pt-16 sm:pt-24 pb-0">
    
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

    <!-- Top Content Container: Pure Quote Text -->
    <div class="relative z-20 max-w-7xl mx-auto px-8 sm:px-24 w-full flex-grow flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center w-full">
            
            <!-- Left Side: Pure Quote Text -->
            <div class="lg:col-span-7 space-y-6 pr-0 lg:pr-6">
                <div class="max-w-lg">
                    <p class="font-serif-custom text-2xl sm:text-4xl text-slate-950 italic leading-relaxed">
                        "Jika kamu percaya bahwa ada yang seharusnya bergerak mengisi ruang ini — maka kamu sedang membaca undangan untuk menjadi bagian dari yang bergerak."
                    </p>
                </div>
            </div>

            <!-- Right Side Spacer for desktop layout -->
            <div class="lg:col-span-5 hidden lg:block"></div>

        </div>
    </div>

    <!-- Person Image Cutout FLUSH AT BOTTOM BORDER (Zero Floating Gap) -->
    <div class="relative z-20 w-full flex justify-center lg:justify-end lg:absolute lg:bottom-0 lg:right-24 lg:w-auto pointer-events-none mt-6 lg:mt-0 pb-0 leading-none">
        <img src="{{ asset('images/orang_pena_remove.png') }}" 
             alt="MLUP Undangan Gerakan" 
             class="h-auto max-h-[360px] sm:max-h-[500px] lg:max-h-[750px] w-auto object-contain object-bottom block align-bottom">
    </div>
</section>
