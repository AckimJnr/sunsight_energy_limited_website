{{-- ── Features General Section ─────────────────────────────────────────────── --}}
<div class="w-full bg-neutral-50 dark:bg-neutral-900">
<section id="features" class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">

    {{-- Block to display the feature image --}}
    <div class="relative mb-6 overflow-hidden md:mb-8">
        <img
            src="{{ asset('images/features-image.avif') }}"
            alt="SunSight Energy solar panel system on a residential rooftop"
            class="h-full w-full object-cover object-center"
            loading="eager"
        >
    </div>

    {{-- Displaying the main content consisting of title, subtitle, and several IconBlock components --}}
    <div class="mt-5 grid gap-8 lg:mt-16 lg:grid-cols-3 lg:gap-12">
        {{-- Block for title and subtitle --}}
        <div class="lg:col-span-1">
            <h2 class="text-2xl font-bold text-balance text-neutral-800 md:text-3xl dark:text-neutral-200">
                Our services
            </h2>
            <p class="mt-2 text-pretty text-neutral-600 md:mt-4 dark:text-neutral-400">
               We offer comprehensive solar energy solutions for residential, commercial, and industrial applications.
            </p>
            <a href="{{ url('/get-a-free-quote') }}" class="mt-4 inline-block rounded-lg bg-yellow-500 px-4 py-2 text-sm font-medium text-white hover:bg-yellow-600 focus:outline-none focus:ring-3 focus:ring-yellow-300 dark:bg-yellow-400 dark:text-white dark:hover:bg-yellow-500 dark:focus:ring-yellow-200">
                Get a Free Quote
            </a>
        </div>

        {{-- Block to display the IconBlock components --}}
        <div class="lg:col-span-2">
            <div class="grid gap-8 sm:grid-cols-2 md:gap-12">

                @foreach ([
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>',
                        'heading' => 'Expert Installation Teams',
                        'content' => 'Our certified solar engineers handle every aspect of your installation — from site survey to final switch-on — with precision and care, ensuring maximum energy output and a clean finish.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>',
                        'heading' => 'Proven Cost Savings',
                        'content' => 'Dramatically reduce your electricity bills from day one. SunSight systems are engineered for peak efficiency, delivering measurable ROI within years, not decades.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>',
                        'heading' => 'Smart Energy Monitoring',
                        'content' => 'Track your solar production, consumption, and savings in real time through our intuitive app. Know exactly what your system is doing — anytime, anywhere.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>',
                        'heading' => 'Clean, Future-Ready Design',
                        'content' => 'Our sleek, low-profile solar systems complement your property\'s aesthetics while future-proofing your home with battery storage and EV charger compatibility.',
                    ],
                ] as $feature)
                    <div class="flex gap-x-5">
                        <div class="shrink-0">
                            <svg class="h-8 w-8 text-yellow-500 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                {!! $feature['icon'] !!}
                            </svg>
                        </div>
                        <div class="grow">
                            <h3 class="text-balance text-lg font-bold text-neutral-800 dark:text-neutral-200">{{ $feature['heading'] }}</h3>
                            <p class="mt-1 text-pretty text-neutral-700 dark:text-neutral-300">{{ $feature['content'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
</div>
