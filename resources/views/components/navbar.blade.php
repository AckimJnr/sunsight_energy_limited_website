{{-- ── Sticky Navbar ────────────────────────────────────────────────────────── --}}
<header class="sticky inset-x-0 top-4 z-50 flex w-full flex-wrap text-sm md:flex-nowrap md:justify-start">
    <nav
        class="relative mx-2 w-full rounded-[36px] border border-yellow-100/40 bg-yellow-50/70 px-4 py-3 backdrop-blur-md md:flex md:items-center md:justify-between md:px-6 md:py-0 lg:px-8 xl:mx-auto dark:border-neutral-700/40 dark:bg-neutral-800/80"
        aria-label="Global"
    >
        <div class="flex items-center justify-between">
            {{-- Brand --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2 rounded-lg ring-zinc-500 outline-hidden focus-visible:ring-2 dark:ring-zinc-200" aria-label="SunSight Energy">
                {{-- Sun icon + wordmark --}}
                <svg class="h-8 w-8 text-yellow-500" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1Zm0 16a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1ZM2 12a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm18 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1Zm-2.636-7.364a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0ZM6.343 17.657a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0ZM4.929 4.929a1 1 0 0 1 1.414 0l.707.707A1 1 0 1 1 5.636 7.05l-.707-.707a1 1 0 0 1 0-1.414Zm12.728 12.728a1 1 0 0 1 1.414 0l.707.707a1 1 0 1 1-1.414 1.414l-.707-.707a1 1 0 0 1 0-1.414ZM12 7a5 5 0 1 0 0 10A5 5 0 0 0 12 7Z"/>
                </svg>
                <span class="text-lg font-bold tracking-tight text-neutral-800 dark:text-neutral-100">SunSight <span class="text-yellow-500">Energy</span></span>
            </a>

            {{-- Mobile controls --}}
            <div class="ml-auto flex items-center gap-2 md:hidden">
                {{-- Theme toggle (mobile) --}}
                <button onclick="window.__toggleTheme()" class="flex h-8 w-8 items-center justify-center rounded-full text-neutral-600 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 transition" aria-label="Toggle theme">
                    <svg data-theme-icon-sun class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    <svg data-theme-icon-moon class="h-4 w-4 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                </button>
                {{-- Hamburger --}}
                <button
                    type="button"
                    data-collapse-toggle="navbar-menu"
                    class="flex h-8 w-8 items-center justify-center rounded-full text-neutral-600 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 transition"
                    aria-label="Toggle navigation"
                >
                    <svg data-collapse-icon class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/>
                    </svg>
                    <svg data-collapse-icon class="h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Nav links --}}
        <div id="navbar-menu" class="hidden grow basis-full overflow-hidden md:block" data-open="false">
            <div class="mt-4 flex flex-col gap-y-3 pb-3 md:mt-0 md:flex-row md:items-center md:justify-end md:gap-x-6 md:gap-y-0 md:pb-0 md:ps-7 lg:gap-x-8">
                <a href="{{ url('/') }}" class="font-medium text-neutral-700 hover:text-yellow-600 transition dark:text-neutral-300 dark:hover:text-yellow-400">Home</a>
                <a href="#features" class="font-medium text-neutral-700 hover:text-yellow-600 transition dark:text-neutral-300 dark:hover:text-yellow-400">Features</a>
                <a href="#pricing" class="font-medium text-neutral-700 hover:text-yellow-600 transition dark:text-neutral-300 dark:hover:text-yellow-400">Pricing</a>
                <a href="#faq" class="font-medium text-neutral-700 hover:text-yellow-600 transition dark:text-neutral-300 dark:hover:text-yellow-400">FAQ</a>
                <a href="{{ url('/contact') }}" class="inline-flex items-center rounded-full bg-yellow-500 px-5 py-2 font-semibold text-white shadow-sm hover:bg-yellow-400 transition">
                    Get a Free Quote
                </a>

                {{-- Theme toggle (desktop) --}}
                <button onclick="window.__toggleTheme()" class="hidden md:flex h-8 w-8 items-center justify-center rounded-full text-neutral-600 hover:bg-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 transition" aria-label="Toggle theme">
                    <svg data-theme-icon-sun class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    <svg data-theme-icon-moon class="h-4 w-4 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                </button>
            </div>
        </div>
    </nav>
</header>
