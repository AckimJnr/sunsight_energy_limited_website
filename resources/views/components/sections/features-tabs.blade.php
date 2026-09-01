{{-- ── Features Tabs Section ────────────────────────────────────────────────── --}}
<section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16 2xl:max-w-full">
    <div class="relative rounded-2xl bg-neutral-100 p-6 dark:bg-white/[.075] md:p-14">
        <div class="relative z-10 lg:grid lg:grid-cols-12 lg:items-start lg:gap-16">

            {{-- Tab nav column (right on lg) --}}
            <div class="mb-10 lg:order-2 lg:col-span-6 lg:col-start-7 lg:mb-0">
                <h2 class="text-2xl font-bold text-neutral-800 sm:text-3xl dark:text-neutral-200">
                    Discover how <span class="text-yellow-500 dark:text-yellow-400">SunSight Energy</span> tailors every solar solution to your unique needs.
                </h2>

                <nav class="mt-6 grid gap-3 md:mt-10" aria-label="Feature tabs" role="tablist">

                    @foreach ([
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z"/>',
                            'heading' => 'High-Performance Panels',
                            'content' => "Harness more energy with SunSight's premium monocrystalline solar panels. Engineered for maximum efficiency even in low-light conditions, our panels deliver exceptional output year-round.",
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
                            'heading' => 'Smart Energy Dashboard',
                            'content' => "Monitor your solar production, home consumption, battery levels, and grid exports in real time. Our intuitive app puts full visibility of your energy system right in your pocket.",
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>',
                            'heading' => 'Battery Storage & Backup',
                            'content' => "Store your solar energy for use at night or during outages. SunSight battery storage systems keep your home powered around the clock, maximising your independence from the grid.",
                        ],
                    ] as $index => $tab)
                        <button
                            type="button"
                            id="tab-btn-{{ $index }}"
                            role="tab"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-controls="tab-panel-{{ $index }}"
                            class="tab-nav-btn group flex cursor-pointer items-start gap-4 rounded-xl p-4 text-left transition-all duration-200 hover:bg-white/80 dark:hover:bg-neutral-700/50"
                        >
                            <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-yellow-100 group-[.active]:bg-yellow-500 dark:bg-yellow-900/30 dark:group-[.active]:bg-yellow-500 transition-colors">
                                <svg class="h-5 w-5 text-yellow-600 group-[.active]:text-white dark:text-yellow-400 dark:group-[.active]:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    {!! $tab['icon'] !!}
                                </svg>
                            </div>
                            <div>
                                <h3 class="tab-heading font-semibold text-neutral-700 dark:text-neutral-300">{{ $tab['heading'] }}</h3>
                                <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">{{ $tab['content'] }}</p>
                            </div>
                        </button>
                    @endforeach

                </nav>
            </div>

            {{-- Tab image panels (left on lg) --}}
            <div class="lg:col-span-6">
                @foreach ([
                    ['src' => 'automated-tools.avif', 'alt' => 'Solar panels on a rooftop catching sunlight'],
                    ['src' => 'dashboard-image.avif',  'alt' => 'Smart energy monitoring dashboard on a tablet screen'],
                    ['src' => 'construction-image.avif','alt' => 'Home battery storage unit installed in a garage'],
                ] as $index => $panel)
                    <div
                        id="tab-panel-{{ $index }}"
                        role="tabpanel"
                        aria-labelledby="tab-btn-{{ $index }}"
                        class="tab-panel overflow-hidden rounded-2xl shadow-lg"
                    >
                        <img
                            src="{{ asset('images/' . $panel['src']) }}"
                            alt="{{ $panel['alt'] }}"
                            class="h-full w-full object-cover object-center"
                            loading="lazy"
                        >
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
