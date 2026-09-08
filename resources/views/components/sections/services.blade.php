{{-- ── Services Page ────────────────────────────────────────────────────────── --}}
<section id="services" class="mx-auto mt-10 max-w-[85rem] px-4 py-10 sm:px-6 sm:py-16 lg:px-8 lg:py-14 2xl:max-w-full">
    <div class="max-w-3xl">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200">
            Comprehensive Solar Energy Solutions
        </h1>
        <p class="mb-8 max-w-prose text-pretty font-normal text-neutral-600 sm:text-xl dark:text-neutral-400">
            From dependable solar installations to long-term energy planning, our experienced team delivers practical solutions that help homes, businesses, and communities access clean, reliable power.
        </p>
        <a
            href="{{ url('/contact') }}"
            class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-yellow-500 px-5 py-3 text-sm font-bold text-neutral-900 transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 focus-visible:ring-yellow-500 focus-visible:outline-hidden"
        >
            Schedule a Consultation
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</section>

@foreach ([
    [
        'title' => 'Solar Systems Designed for Your Energy Needs',
        'description' => 'We design and install on-grid, off-grid, and mini-grid systems for homes, businesses, and communities. Every solution is planned around your energy demand, available space, and long-term goals so you can depend on clean power every day.',
        'image_one' => 'images/hero-image.avif',
        'image_one_alt' => 'Solar panels installed for reliable renewable energy',
        'image_two' => 'images/features-image.avif',
        'image_two_alt' => 'Solar energy system supporting a modern home',
    ],
    [
        'title' => 'Reliable Solar Water Solutions',
        'description' => 'Our solar water pumping and heating systems make essential water services more dependable while reducing operating costs. We provide complete solutions for homes, farms, institutions, and commercial properties.',
        'image' => 'images/services/home.png',
        'image_alt' => 'Solar water and energy services for homes and businesses',
        'button' => true,
    ],
    [
        'title' => 'Professional Installation and Project Delivery',
        'description' => 'From initial assessment to commissioning, our team manages each project with care and precision. We coordinate equipment selection, installation, testing, and handover to deliver safe systems that perform as expected.',
        'image_one' => 'images/construction-image.avif',
        'image_one_alt' => 'Professionals installing a solar energy system',
        'image_two' => 'images/automated-tools.avif',
        'image_two_alt' => 'Technical tools used during solar installation',
    ],
    [
        'title' => 'Energy Auditing and Efficiency Planning',
        'description' => 'Our energy audits identify where power is being used, where it is being lost, and how your system can work more efficiently. We turn those findings into clear recommendations for smarter energy investment.',
        'image' => 'images/dashboard-image.avif',
        'image_alt' => 'Energy monitoring dashboard for tracking solar performance',
    ],
    [
        'title' => 'Consultancy, Maintenance, and Ongoing Support',
        'description' => 'Our relationship continues after installation. We provide expert consultancy, system monitoring, maintenance, and responsive support to help your solar investment deliver value for years to come.',
        'image_one' => 'images/features-image.avif',
        'image_one_alt' => 'Solar energy system providing ongoing power',
        'image_two' => 'images/dashboard-image.avif',
        'image_two_alt' => 'Monitoring solar energy production and consumption',
        'button' => true,
    ],
] as $index => $service)
    <section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="{{ $index % 2 === 1 ? 'lg:order-2' : '' }}">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200">
                    {{ $service['title'] }}
                </h2>
                <p class="max-w-prose text-pretty text-neutral-600 sm:text-lg dark:text-neutral-400">
                    {{ $service['description'] }}
                </p>
                @if (!empty($service['button']))
                    <a
                        href="{{ url('/contact') }}"
                        class="mt-8 inline-flex items-center justify-center gap-x-2 rounded-lg bg-yellow-500 px-5 py-3 text-sm font-bold text-neutral-900 transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 focus-visible:ring-yellow-500 focus-visible:outline-hidden"
                    >
                        Learn More
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                @endif
            </div>

            <div class="{{ $index % 2 === 1 ? 'lg:order-1' : '' }} {{ isset($service['image_one']) ? 'grid grid-cols-2 gap-4' : '' }}">
                @if (isset($service['image_one']))
                    <img src="{{ asset($service['image_one']) }}" alt="{{ $service['image_one_alt'] }}" class="h-full min-h-56 w-full rounded-xl object-cover shadow-lg shadow-neutral-200 dark:shadow-neutral-950/30">
                    <img src="{{ asset($service['image_two']) }}" alt="{{ $service['image_two_alt'] }}" class="mt-8 h-full min-h-56 w-full rounded-xl object-cover shadow-lg shadow-neutral-200 dark:shadow-neutral-950/30">
                @else
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['image_alt'] }}" class="aspect-video w-full rounded-xl object-cover shadow-lg shadow-neutral-200 dark:shadow-neutral-950/30 lg:aspect-[4/3]">
                @endif
            </div>
        </div>
    </section>
@endforeach

<section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
    <div class="max-w-3xl">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200">By the Numbers</h2>
        <p class="mb-12 max-w-prose text-pretty text-neutral-600 sm:text-lg dark:text-neutral-400">
            Our commitment to quality, professionalism, and reliable service supports every solar project we deliver.
        </p>
    </div>
    <div class="grid items-center gap-8 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-4">
            <p class="text-6xl font-extrabold tracking-tight text-yellow-500">100%</p>
            <p class="mt-2 text-lg text-neutral-600 dark:text-neutral-400">commitment to dependable solar solutions</p>
        </div>
        <div class="grid gap-8 border-neutral-300 sm:grid-cols-3 lg:col-span-8 lg:border-s lg:ps-12 dark:border-neutral-700">
            @foreach ([
                ['stat' => '3', 'description' => 'core values guiding our work'],
                ['stat' => '24/7', 'description' => 'clean energy potential with the right system'],
                ['stat' => '1', 'description' => 'trusted partner from design to support'],
            ] as $stat)
                <div>
                    <p class="text-3xl font-bold text-neutral-900 dark:text-white">{{ $stat['stat'] }}</p>
                    <p class="mt-2 text-neutral-600 dark:text-neutral-400">{{ $stat['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
