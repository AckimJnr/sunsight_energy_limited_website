{{-- ── Bottom CTA / Hero Alt Section ───────────────────────────────────────── --}}
<section class="relative overflow-hidden bg-yellow-500 py-20">
    {{-- Decorative SVG shapes --}}
    <div class="pointer-events-none absolute top-[55%] left-0 scale-90 opacity-30 md:top-[20%] xl:top-[25%] xl:left-[8%]">
        <svg width="72" height="72" fill="none" stroke-width="1.5" viewBox="0 0 24 24" color="#1a1a1a">
            <path fill="#1a1a1a" stroke="#1a1a1a" stroke-linecap="round" stroke-linejoin="round" d="M12 23a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM3 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM3 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
            <path stroke="#1a1a1a" stroke-linecap="round" stroke-linejoin="round" d="M21 7.353v9.294a.6.6 0 0 1-.309.525l-8.4 4.666a.6.6 0 0 1-.582 0l-8.4-4.666A.6.6 0 0 1 3 16.647V7.353a.6.6 0 0 1 .309-.524l8.4-4.667a.6.6 0 0 1 .582 0l8.4 4.667a.6.6 0 0 1 .309.524Z"/>
        </svg>
    </div>
    <div class="pointer-events-none absolute top-0 right-[5%] scale-75 opacity-20">
        <svg width="72" height="72" fill="none" stroke-width="1.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="#1a1a1a" stroke-width="1.5"/>
            <path stroke="#1a1a1a" stroke-linecap="round" stroke-width="1.5" d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
        </svg>
    </div>

    <div class="relative mx-auto max-w-2xl px-4 text-center sm:px-6">
        <h2 class="text-4xl font-bold tracking-tight text-neutral-900 md:text-5xl lg:text-6xl">
            Ready to Make the Switch?
        </h2>
        <p class="mt-5 text-lg text-neutral-800/80">
            Join thousands of SunSight customers already saving money and reducing their carbon footprint. Get your personalised solar quote — it's free, fast, and obligation-free.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}" id="hero-alt-cta" class="inline-flex items-center gap-2 rounded-full bg-neutral-900 px-8 py-4 font-bold text-yellow-400 shadow-lg hover:bg-neutral-800 transition">
                Get a Free Quote
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="#features" class="inline-flex items-center gap-2 rounded-full border-2 border-neutral-900/30 px-8 py-4 font-semibold text-neutral-900 hover:border-neutral-900 transition">
                See How It Works
            </a>
        </div>
    </div>
</section>
