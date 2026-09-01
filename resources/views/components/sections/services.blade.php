{{-- ── Services Section ─────────────────────────────────────────────────────── --}}
<section id="services" class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">

    {{-- Section header --}}
    <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
        <h2 class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200">Our Services</h2>
        <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
            Comprehensive solar energy solutions for residential, commercial, and industrial applications.
        </p>
        <div class="mt-3 mx-auto h-1 w-16 rounded-full bg-yellow-400"></div>
    </div>

    {{-- Services grid --}}
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ([
            [
                'emoji' => '☀️',
                'name'  => 'Solar Mini-Grid Systems',
                'desc'  => '10KW – 550KW systems for communities and businesses',
            ],
            [
                'emoji' => '💧',
                'name'  => 'Solar Water Pumping Systems',
                'desc'  => 'Portable and fixed systems with water reticulation',
            ],
            [
                'emoji' => '🏢',
                'name'  => 'On-Grid Solar Systems',
                'desc'  => '5KW – 990KW grid-tied solar solutions',
            ],
            [
                'emoji' => '🏠',
                'name'  => 'Off-Grid Solar Systems',
                'desc'  => '5KW – 990KW independent power solutions',
            ],
            [
                'emoji' => '🌟',
                'name'  => 'Solar Water Heating',
                'desc'  => 'Efficient solar thermal systems for hot water',
            ],
            [
                'emoji' => '🚜',
                'name'  => 'Borehole Drilling',
                'desc'  => 'Complete water development solutions',
            ],
            [
                'emoji' => '📊',
                'name'  => 'Energy Auditing',
                'desc'  => 'Comprehensive energy efficiency assessments',
            ],
            [
                'emoji' => '🧑‍💼',
                'name'  => 'Consultancy Services',
                'desc'  => 'Expert solar energy consulting',
            ],
        ] as $service)
            <div class="flex flex-col items-center rounded-2xl border border-neutral-200 bg-white p-6 text-center shadow-sm transition duration-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-900">
                <span class="mb-4 text-4xl" role="img" aria-label="{{ $service['name'] }}">{{ $service['emoji'] }}</span>
                <h3 class="mb-2 text-base font-bold text-neutral-800 dark:text-neutral-200">{{ $service['name'] }}</h3>
                <p class="mb-6 grow text-sm text-pretty text-neutral-600 dark:text-neutral-400">{{ $service['desc'] }}</p>
                <a
                    href="{{ url('/contact') }}?service={{ urlencode($service['name']) }}"
                    class="inline-flex items-center justify-center gap-x-1.5 rounded-lg border border-transparent bg-yellow-500 px-4 py-2 text-sm font-bold text-neutral-900 transition duration-300 hover:bg-yellow-400 active:bg-yellow-500"
                >
                    Get a Quote
                    <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>

</section>
