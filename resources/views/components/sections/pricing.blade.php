{{-- ── Pricing Section ──────────────────────────────────────────────────────── --}}
<section id="pricing" class="mx-auto max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-20 2xl:max-w-full">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-neutral-800 dark:text-neutral-200">Simple, Transparent Solar Packages</h2>
        <p class="mt-3 text-neutral-600 dark:text-neutral-400">Choose the plan that fits your home or business — no hidden costs, ever.</p>
    </div>

    <div class="mt-12 grid gap-8 lg:grid-cols-3">

        {{-- Starter Plan --}}
        <div class="relative flex flex-col rounded-2xl border border-neutral-200 bg-white p-8 shadow-sm dark:border-neutral-700 dark:bg-neutral-800 hover:shadow-md transition-shadow">
            <h3 class="text-lg font-semibold text-neutral-800 dark:text-neutral-200">Residential Starter</h3>
            <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">Perfect for small homes &amp; apartments</p>
            <div class="mt-5 flex items-end gap-1">
                <span class="text-sm font-medium text-neutral-600 dark:text-neutral-400">USD</span>
                <span class="text-5xl font-extrabold text-neutral-800 dark:text-neutral-100">4,999</span>
                <span class="mb-1 text-sm text-neutral-500 dark:text-neutral-400">/ full system</span>
            </div>
            <ul class="mt-8 space-y-3 flex-1">
                @foreach (['3kW solar panel system', 'Professional installation', 'Smart energy monitoring app', '25-year panel warranty', 'Grid connection support'] as $feature)
                    <li class="flex items-center gap-3 text-sm text-neutral-700 dark:text-neutral-300">
                        <svg class="h-5 w-5 shrink-0 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                        </svg>
                        {{ $feature }}
                    </li>
                @endforeach
            </ul>
            <a href="{{ url('/contact') }}" id="pricing-starter-cta" class="mt-8 block rounded-full border border-neutral-300 px-6 py-3 text-center font-semibold text-neutral-800 hover:border-yellow-400 hover:bg-yellow-50 transition dark:border-neutral-600 dark:text-neutral-200 dark:hover:border-yellow-500 dark:hover:bg-yellow-900/20">
                Get Started
            </a>
        </div>

        {{-- Premium Plan (featured) --}}
        <div class="relative flex flex-col rounded-2xl border-2 border-yellow-400 bg-white p-8 shadow-xl dark:bg-neutral-800">
            <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                <span class="rounded-full bg-yellow-500 px-4 py-1 text-xs font-bold uppercase tracking-wide text-neutral-900 shadow-md">Most Popular</span>
            </div>
            <h3 class="text-lg font-semibold text-neutral-800 dark:text-neutral-200">Premium Home</h3>
            <p class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">Ideal for larger homes &amp; maximum savings</p>
            <div class="mt-5 flex items-end gap-1">
                <span class="text-sm font-medium text-neutral-600 dark:text-neutral-400">USD</span>
                <span class="text-5xl font-extrabold text-yellow-500">9,499</span>
                <span class="mb-1 text-sm text-neutral-500 dark:text-neutral-400">/ full system</span>
            </div>
            <ul class="mt-8 space-y-3 flex-1">
                @foreach (['6kW solar panel system', '10kWh battery storage', 'Professional installation', 'Smart energy monitoring app', 'Priority support & maintenance', '25-year panel warranty', 'Grid connection & export support'] as $feature)
                    <li class="flex items-center gap-3 text-sm text-neutral-700 dark:text-neutral-300">
                        <svg class="h-5 w-5 shrink-0 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/>
                        </svg>
                        {{ $feature }}
                    </li>
                @endforeach
            </ul>
            <a href="{{ url('/contact') }}" id="pricing-premium-cta" class="mt-8 block rounded-full bg-yellow-500 px-6 py-3 text-center font-bold text-neutral-900 shadow hover:bg-yellow-400 transition">
                Go Premium
            </a>
        </div>

        {{-- Custom / Commercial --}}
        <div class="flex flex-col items-center justify-center rounded-2xl border border-dashed border-neutral-300 bg-neutral-50 p-8 text-center dark:border-neutral-600 dark:bg-neutral-800/50">
            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-900/40">
                <svg class="h-7 w-7 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z"/>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-neutral-800 dark:text-neutral-200">Large-Scale or Commercial Project?</h3>
            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
                We design bespoke solar systems for businesses, farms, and industrial facilities. Get a custom ROI analysis and tailored quote.
            </p>
            <a href="{{ url('/contact') }}" id="pricing-commercial-cta" class="mt-6 inline-flex items-center gap-2 rounded-full border border-neutral-300 px-6 py-2.5 text-sm font-semibold text-neutral-800 hover:border-yellow-400 hover:bg-yellow-50 transition dark:border-neutral-600 dark:text-neutral-200 dark:hover:border-yellow-500">
                Get a Custom Quote
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>
