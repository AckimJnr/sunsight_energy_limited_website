{{-- ── Hero Section ─────────────────────────────────────────────────────────── --}}
<section class="mx-auto grid max-w-[85rem] gap-4 px-4 py-14 sm:px-6 md:grid-cols-2 md:items-center md:gap-8 lg:px-8 2xl:max-w-full">

    {{-- Title and description --}}
    <div>
        <h1 class="block text-3xl font-bold tracking-tight text-balance text-neutral-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
            Power Your Future with <span class="text-yellow-500 dark:text-yellow-400">SunSight Energy</span>
        </h1>
        <p class="mt-3 text-lg leading-relaxed text-pretty text-neutral-700 lg:w-4/5 dark:text-neutral-400">
            Premium solar panel systems, professional installation, and smart energy monitoring — for homes and businesses ready to go solar.
        </p>

        {{-- Action Button Section: PrimaryCTA and SecondaryCTA --}}
        <div class="mt-7 grid w-full gap-3 sm:inline-flex">
            <a
                href="{{ url('/contact') }}"
                id="hero-primary-cta"
                class="group inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-yellow-500 px-4 py-3 text-sm font-bold text-neutral-900 ring-zinc-500 transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 outline-hidden active:bg-yellow-500 2xl:text-base dark:ring-zinc-200 dark:focus:outline-hidden"
            >
                Get a Free Quote
                <svg class="size-4 shrink-0 transition duration-300 group-hover:translate-x-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </a>
            <a
                href="#features"
                id="hero-secondary-cta"
                class="group inline-flex items-center justify-center gap-x-2 rounded-lg border border-neutral-300 bg-neutral-100 px-4 py-3 text-center text-sm font-medium text-neutral-600 shadow-xs outline-hidden ring-zinc-500 transition duration-300 hover:bg-neutral-200 hover:text-neutral-700 focus-visible:ring-3 active:bg-neutral-200 active:text-neutral-700 disabled:pointer-events-none disabled:opacity-50 2xl:text-base dark:border-neutral-700 dark:bg-neutral-700/60 dark:text-neutral-300 dark:ring-zinc-200 dark:hover:bg-neutral-600 dark:hover:text-white dark:focus:outline-hidden"
            >
                Explore Our Solutions
            </a>
        </div>

        {{-- Review Section --}}
        <div class="mt-6 flex sm:items-center gap-x-2 sm:gap-x-5">
            <div class="flex -space-x-2">
                @foreach ([
                    'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80',
                    'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
                ] as $avatar)
                    <img src="{{ $avatar }}" alt="Happy customer avatar" class="inline-block size-8 rounded-full ring-2 ring-white dark:ring-neutral-900 object-cover">
                @endforeach
            </div>
            <div class="text-sm font-bold text-neutral-800 dark:text-neutral-200">
                <div class="flex items-center gap-x-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                    <span class="ms-1 font-bold text-neutral-800 dark:text-neutral-200">4.9 / 5</span>
                </div>
                <div class="text-xs font-normal text-neutral-500 dark:text-neutral-400">
                    From Over <span class="font-bold">3,200</span> Happy Customers
                </div>
            </div>
        </div>
    </div>

    {{-- Hero Image Section --}}
    <div class="flex w-full">
        <div class="top-12 overflow-hidden">
            <img
                src="{{ asset('images/hero-image.avif') }}"
                alt="Solar panels installed on a modern home rooftop under a bright sunny sky"
                class="h-full w-full scale-110 object-cover object-center"
                loading="eager"
            >
        </div>
    </div>
</section>
