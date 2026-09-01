{{-- ── Hero Section ─────────────────────────────────────────────────────────── --}}
<section class="mx-auto grid max-w-[85rem] gap-6 px-4 py-14 sm:px-6 md:grid-cols-2 md:items-center md:gap-10 lg:px-8 lg:py-20 2xl:max-w-full">

    {{-- Text Column --}}
    <div>
        <h1 class="block text-3xl font-bold tracking-tight text-balance text-neutral-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
            Power Your Future with <span class="text-yellow-500 dark:text-yellow-400">SunSight Energy</span>
        </h1>
        <p class="mt-4 text-lg leading-relaxed text-pretty text-neutral-700 lg:w-4/5 dark:text-neutral-400">
            Premium solar panel systems, professional installation, and smart energy monitoring — for homes and businesses ready to go solar.
        </p>

        {{-- CTAs --}}
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ url('/contact') }}" id="hero-primary-cta" class="inline-flex items-center gap-2 rounded-full bg-yellow-500 px-7 py-3 font-semibold text-neutral-900 shadow-md hover:bg-yellow-400 transition-all duration-200">
                Get a Free Quote
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="#features" id="hero-secondary-cta" class="inline-flex items-center gap-2 rounded-full border border-neutral-300 bg-white/60 px-7 py-3 font-medium text-neutral-800 backdrop-blur hover:border-neutral-400 hover:bg-white transition-all duration-200 dark:border-neutral-700 dark:bg-neutral-800/60 dark:text-neutral-200 dark:hover:border-neutral-600">
                Explore Our Solutions
            </a>
        </div>

        {{-- Review strip --}}
        <div class="mt-8 flex items-center gap-4">
            <div class="flex -space-x-2">
                @foreach ([
                    'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                ] as $avatar)
                    <img src="{{ $avatar }}" alt="Happy customer" class="h-9 w-9 rounded-full border-2 border-white dark:border-neutral-900 object-cover">
                @endforeach
            </div>
            <div>
                <div class="flex items-center gap-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-sm text-neutral-600 dark:text-neutral-400">
                    <span class="font-bold">4.9</span> / 5 &nbsp;·&nbsp; From Over <span class="font-bold">3,200</span> Happy Customers
                </p>
            </div>
        </div>
    </div>

    {{-- Image Column --}}
    <div class="overflow-hidden rounded-2xl shadow-2xl">
        <img
            src="{{ asset('images/hero-image.avif') }}"
            alt="Solar panels installed on a modern home rooftop under a bright sunny sky"
            class="h-full w-full scale-105 object-cover object-center transition-transform duration-700 hover:scale-100"
            loading="eager"
        >
    </div>
</section>
