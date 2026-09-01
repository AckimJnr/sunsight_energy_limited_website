{{-- ── Pricing Section ──────────────────────────────────────────────────────── --}}
<section id="pricing" class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
    {{-- Section heading and sub-heading --}}
    <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
        <h2 class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200">
            Simple, Transparent Solar Packages
        </h2>
        <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
            Choose the plan that fits your home or business — no hidden costs, ever.
        </p>
    </div>

    {{-- Contains two main product blocks --}}
    <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-0">

        {{-- Residential Starter product details --}}
        <div class="w-full rounded-xl bg-gray-800 p-6 sm:w-1/2 sm:rounded-r-none sm:p-8 lg:w-1/3">
            <div class="mb-4">
                <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
                    Residential Starter
                </h3>
                <p class="text-indigo-300">Perfect for small homes &amp; apartments</p>
            </div>

            <div class="mb-4">
                <span class="text-4xl font-bold text-neutral-200">4,999</span>
                <span class="text-lg font-bold text-neutral-300">.00</span>
                <span class="ms-3 text-sm text-indigo-200">USD / full system</span>
            </div>

            {{-- Features list --}}
            <ul class="mb-6 space-y-2 text-neutral-300">
                @foreach ([
                    '3kW solar panel system',
                    'Professional installation',
                    'Smart energy monitoring app',
                    '25-year panel warranty',
                    'Grid connection support'
                ] as $feature)
                    <li class="flex items-center gap-1.5">
                        <svg class="size-4 shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>

            {{-- CTA for purchasing the product --}}
            <a
                href="{{ url('/contact') }}"
                id="pricing-starter-cta"
                class="block rounded-lg bg-gray-500 px-8 py-3 text-center text-sm font-bold text-gray-100 ring-indigo-300 outline-hidden transition duration-100 hover:bg-gray-600 focus-visible:ring-3 active:text-gray-300 md:text-base"
            >
                Get Started
            </a>
        </div>

        {{-- Premium Home product details --}}
        <div class="w-full rounded-xl bg-gradient-to-tr from-[#FF512F] to-[#F09819] p-6 shadow-xl sm:w-1/2 sm:p-8">
            <div class="mb-4 flex flex-col items-start justify-between gap-4 lg:flex-row">
                <div>
                    <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
                        Premium Home
                    </h3>
                    <p class="text-orange-200">
                        Ideal for larger homes &amp; maximum savings
                    </p>
                </div>

                <span class="bg-opacity-50 order-first inline-block rounded-full bg-orange-200/60 px-3 py-1 text-center text-xs font-bold tracking-wider text-orange-600 uppercase lg:order-none">
                    Most Popular
                </span>
            </div>

            <div class="mb-4">
                <span class="text-6xl font-bold text-neutral-100">9,499</span>
                <span class="text-lg font-bold text-orange-100">.00</span>
                <span class="ms-3 text-orange-200">USD / full system</span>
            </div>

            {{-- Features list --}}
            <ul class="mb-6 space-y-2 text-orange-100">
                @foreach ([
                    '6kW solar panel system',
                    '10kWh battery storage',
                    'Professional installation',
                    'Smart energy monitoring app',
                    'Priority support & maintenance',
                    '25-year panel warranty',
                    'Grid connection & export support'
                ] as $feature)
                    <li class="flex items-center gap-1.5">
                        <svg class="size-4 shrink-0 text-orange-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>

            {{-- CTA for purchasing the product --}}
            <a
                href="{{ url('/contact') }}"
                id="pricing-premium-cta"
                class="bg-opacity-50 block rounded-lg bg-orange-200/40 px-8 py-3 text-center text-sm font-bold text-neutral-100 ring-orange-300 outline-hidden transition duration-300 hover:bg-orange-300 focus-visible:ring-3 active:bg-orange-400 md:text-base"
            >
                Go Premium
            </a>
        </div>

    </div>

    {{-- Call to action for Enterprise / Custom Solutions --}}
    <div class="mt-8 flex items-center justify-center gap-x-3 md:mt-12">
        <p class="text-sm text-neutral-600 dark:text-neutral-400">
            Large-Scale or Commercial Project?
        </p>

        <a
            href="{{ url('/contact') }}"
            id="pricing-commercial-cta"
            class="group inline-flex items-center justify-center gap-x-2 rounded-lg border border-neutral-300 bg-neutral-100 px-4 py-3 text-center text-sm font-medium text-neutral-600 shadow-xs outline-hidden ring-zinc-500 transition duration-300 hover:bg-neutral-200 hover:text-neutral-700 focus-visible:ring-3 active:bg-neutral-200 active:text-neutral-700 disabled:pointer-events-none disabled:opacity-50 2xl:text-base dark:border-neutral-700 dark:bg-neutral-700/60 dark:text-neutral-300 dark:ring-zinc-200 dark:hover:bg-neutral-600 dark:hover:text-white dark:focus:outline-hidden"
        >
            Get a Custom Quote
        </a>
    </div>
</section>
