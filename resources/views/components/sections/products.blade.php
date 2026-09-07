<section id="products" class="w-full bg-neutral-50 dark:bg-neutral-900">
    <div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
        <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
            <p class="text-sm font-bold tracking-wide text-yellow-600 uppercase dark:text-yellow-400">Available now</p>
            <h2 class="mt-2 text-2xl font-bold text-balance text-neutral-800 md:text-4xl dark:text-neutral-200">Solar products ready for your next project</h2>
            <p class="mt-3 text-pretty text-neutral-600 dark:text-neutral-400">Order tier-one solar modules and genuine PV cable directly from SunSight Energy.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([
            [
                'name' => '710W Tier 1 Solar Module',
                'price' => 'K550,000',
                'description' => 'High-output tier-one solar module for larger residential and commercial systems.',
                'image' => 'images/automated-tools.avif',
                'alt' => 'Solar panels installed on a rooftop',
            ],
            [
                'name' => '455W Class A Solar Module',
                'price' => 'K365,000',
                'description' => 'Class A, tier-one solar module that generates more power and performs in low light.',
                'image' => 'images/features-image.avif',
                'alt' => 'Solar panels on a house roof',
            ],
            [
                'name' => '420W Tier 1 Solar Module',
                'price' => 'K385,000',
                'description' => 'Reliable tier-one solar module for efficient everyday energy production.',
                'image' => 'images/hero-image.avif',
                'alt' => 'Solar panels under a bright sky',
            ],
            [
                'name' => '6mm Genuine PV Cable',
                'price' => 'K6,500 / metre',
                'description' => 'Weather-resistant, flame-retardant and tensile-resistant cable for solar installations.',
                'image' => 'images/construction-image.avif',
                'alt' => 'Solar installation equipment',
            ],
            [
                'name' => '4mm Genuine PV Cable',
                'price' => 'K5,500 / metre',
                'description' => 'Durable solar cable engineered for dependable connections in PV systems.',
                'image' => 'images/dashboard-image.avif',
                'alt' => 'Solar energy system display',
            ],
            [
                'name' => '455W Tier 1 Solar Module',
                'price' => 'K365,000',
                'description' => 'A durable, corrosion-resistant 455W panel built to deliver clean energy for years.',
                'image' => 'images/automated-tools.avif',
                'alt' => 'Solar panels on a rooftop',
            ],
        ] as $product)
                <article class="group flex h-full flex-col overflow-hidden rounded-lg border border-neutral-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-neutral-700 dark:bg-neutral-800">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="h-56 w-full object-cover" loading="lazy">

                    <div class="flex flex-1 flex-col p-5">
                        <p class="text-sm font-bold text-yellow-600 dark:text-yellow-400">{{ $product['price'] }}</p>
                        <h3 class="mt-2 text-xl font-bold text-neutral-800 dark:text-neutral-100">{{ $product['name'] }}</h3>
                        <p class="mt-2 grow text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">{{ $product['description'] }}</p>
                        <a href="https://wa.me/265993614876?text={{ rawurlencode('Hello SunSight Energy, I would like to order the '.$product['name'].'.') }}" target="_blank" rel="noopener noreferrer" class="mt-5 inline-flex items-center justify-center gap-x-2 rounded-lg bg-yellow-500 px-4 py-3 text-sm font-bold text-neutral-900 outline-hidden ring-zinc-500 transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 dark:ring-zinc-200">
                            Order Now
                            <svg class="size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m9 18 6-6-6-6"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>