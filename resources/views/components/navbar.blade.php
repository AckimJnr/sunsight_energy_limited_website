{{-- ── Sticky Navbar ────────────────────────────────────────────────────────── --}}
<header class="sticky inset-x-0 top-4 z-50 flex w-full flex-wrap text-sm md:flex-nowrap md:justify-start">
    <nav
        class="relative mx-2 w-full rounded-[36px] border border-yellow-100/40 bg-yellow-50/60 px-4 py-3 backdrop-blur-md md:flex md:items-center md:justify-between md:px-6 md:py-0 lg:px-8 xl:mx-auto dark:border-neutral-700/40 dark:bg-neutral-800/80 dark:backdrop-blur-md"
        aria-label="Global"
    >
        <div class="flex items-center justify-between">
            {{-- Brand --}}
            <a href="{{ url('/') }}" class="flex items-center rounded-lg ring-zinc-500 outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden" aria-label="SunSight Energy">
                <img src="{{ asset('images/logoblue.png') }}" alt="SunSight Energy" class="h-10 w-auto object-contain md:h-12 py-1">
            </a>

            {{-- Mobile controls --}}
            <div class="mr-5 ml-auto flex items-center gap-2 md:hidden">
                {{-- Hamburger --}}
                <button
                    type="button"
                    data-collapse-toggle="navbar-menu"
                    class="flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold text-neutral-600 transition duration-300 hover:bg-neutral-200 disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:outline-hidden"
                    aria-label="Toggle navigation"
                >
                    <svg data-collapse-icon class="h-[1.25rem] w-[1.25rem] shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/>
                    </svg>
                    <svg data-collapse-icon class="hidden h-[1.25rem] w-[1.25rem] shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
            {{-- Theme toggle (mobile) --}}
            <span class="inline-block md:hidden">
                <button onclick="window.__toggleTheme()" class="flex h-8 w-8 items-center justify-center rounded-full text-neutral-600 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 transition" aria-label="Toggle theme">
                    <svg data-theme-icon-sun class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    <svg data-theme-icon-moon class="h-4 w-4 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                </button>
            </span>
        </div>

        {{-- Nav links --}}
        <div id="navbar-menu" class="hidden grow basis-full overflow-hidden transition-all duration-300 md:block" data-open="false">
            <div class="mt-5 flex flex-col gap-x-0 gap-y-4 md:mt-0 md:flex-row md:items-center md:justify-end md:gap-x-4 md:gap-y-0 md:ps-7 lg:gap-x-7">
                <a href="{{ url('/') }}" class="rounded-lg text-base font-medium text-neutral-600 outline-hidden ring-zinc-500 hover:text-neutral-500 focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Home</a>
                <a href="#features" class="rounded-lg text-base font-medium text-neutral-600 outline-hidden ring-zinc-500 hover:text-neutral-500 focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Features</a>
                <a href="#pricing" class="rounded-lg text-base font-medium text-neutral-600 outline-hidden ring-zinc-500 hover:text-neutral-500 focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Pricing</a>
                <a href="#faq" class="rounded-lg text-base font-medium text-neutral-600 outline-hidden ring-zinc-500 hover:text-neutral-500 focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">FAQ</a>
                <a href="{{ url('/contact') }}" class="group inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-yellow-500 px-4 py-3 text-sm font-bold text-neutral-900 ring-zinc-500 transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 outline-hidden active:bg-yellow-500 2xl:text-base dark:ring-zinc-200 dark:focus:outline-hidden">
                    Get a Free Quote
                </a>

                {{-- Theme toggle (desktop) --}}
                <span class="hidden md:inline-block">
                    <button onclick="window.__toggleTheme()" class="flex h-8 w-8 items-center justify-center rounded-full text-neutral-600 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 transition" aria-label="Toggle theme">
                        <svg data-theme-icon-sun class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                        <svg data-theme-icon-moon class="h-4 w-4 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                    </button>
                </span>
            </div>
        </div>
    </nav>
</header>
