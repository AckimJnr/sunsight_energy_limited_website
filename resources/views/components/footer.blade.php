{{-- ── Footer ─────────────────────────────────────────────────────────────────── --}}
<footer class="w-full bg-neutral-200 dark:bg-neutral-900 border-t border-neutral-300 dark:border-neutral-800">
    <div class="mx-auto max-w-[85rem] px-4 py-12 sm:px-6 lg:px-16 lg:pt-16">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-5">

            {{-- Brand --}}
            <div class="col-span-full lg:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center gap-2" aria-label="SunSight Energy">
                    <svg class="h-9 w-9 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1Zm0 16a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1ZM2 12a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Zm18 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1Zm-2.636-7.364a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0ZM6.343 17.657a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0ZM4.929 4.929a1 1 0 0 1 1.414 0l.707.707A1 1 0 1 1 5.636 7.05l-.707-.707a1 1 0 0 1 0-1.414Zm12.728 12.728a1 1 0 0 1 1.414 0l.707.707a1 1 0 1 1-1.414 1.414l-.707-.707a1 1 0 0 1 0-1.414ZM12 7a5 5 0 1 0 0 10A5 5 0 0 0 12 7Z"/>
                    </svg>
                    <span class="font-bold text-neutral-800 dark:text-neutral-100">SunSight <span class="text-yellow-500">Energy</span></span>
                </a>
                <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-400">Premium solar solutions for homes &amp; businesses.</p>
            </div>

            {{-- Solutions --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Solutions</h3>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Residential Solar</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Commercial Solar</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Battery Storage</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Smart Monitoring</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Company</h3>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">About Us</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Case Studies</a></li>
                    <li>
                        <a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Careers</a>
                        <span class="ml-1 inline rounded-lg bg-orange-500 px-2 py-0.5 text-xs font-bold text-white">Hiring!</span>
                    </li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Blog</a></li>
                </ul>
            </div>

            {{-- Support --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Support</h3>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="{{ url('/contact') }}" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Contact Us</a></li>
                    <li><a href="#faq" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">FAQ</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Warranty Info</a></li>
                    <li><a href="#" class="text-neutral-600 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition">Maintenance</a></li>
                </ul>
            </div>

            {{-- Newsletter --}}
            <div class="col-span-2 lg:col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Stay up to date</h3>
                <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">Get the latest solar news and exclusive offers.</p>
                <form class="mt-3 flex gap-2" onsubmit="return false;">
                    <input
                        type="email"
                        placeholder="your@email.com"
                        class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-800 placeholder-neutral-400 outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/30 dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:border-yellow-500 transition"
                    >
                    <button type="submit" class="rounded-lg bg-yellow-500 px-4 py-2 text-sm font-semibold text-white hover:bg-yellow-400 transition shrink-0">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-neutral-300 pt-6 dark:border-neutral-800 sm:flex-row">
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
                &copy; <span id="footer-year"></span> SunSight Energy Ltd. All rights reserved.
            </p>
            {{-- Social icons --}}
            <div class="flex gap-4">
                <a href="#" class="text-neutral-500 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition" aria-label="Facebook">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5.04 3.66 9.22 8.44 9.93v-7.02H7.9v-2.91h2.54V9.85c0-2.52 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.89h2.77l-.44 2.91h-2.33V22C18.34 21.29 22 17.11 22 12.07z"/></svg>
                </a>
                <a href="#" class="text-neutral-500 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition" aria-label="X / Twitter">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#" class="text-neutral-500 hover:text-yellow-600 dark:text-neutral-400 dark:hover:text-yellow-400 transition" aria-label="LinkedIn">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('footer-year').textContent = new Date().getFullYear();
    </script>
</footer>
