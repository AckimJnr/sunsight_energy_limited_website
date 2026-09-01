{{-- ── Footer ─────────────────────────────────────────────────────────────────── --}}
<footer class="w-full bg-neutral-300 dark:bg-neutral-900">
    <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-16 lg:pt-20 2xl:max-w-full">
        <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">

            {{-- Brand Logo --}}
            <div class="col-span-full lg:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center rounded-lg ring-zinc-500 outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden" aria-label="SunSight Energy">
                    <img src="{{ asset('images/logoblue.png') }}" alt="SunSight Energy" class="h-10 w-auto object-contain">
                </a>
            </div>

            {{-- Solutions --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Solutions</h3>
                <ul class="mt-3 grid space-y-3">
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Residential Solar</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Commercial Solar</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Battery Storage</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Smart Monitoring</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Company</h3>
                <ul class="mt-3 grid space-y-3">
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">About Us</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Case Studies</a></li>
                    <li>
                        <a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Careers</a>
                        <span class="ms-1 inline rounded-lg bg-orange-500 px-2 py-1 text-xs font-bold text-neutral-50">We're hiring!</span>
                    </li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Blog</a></li>
                </ul>
            </div>

            {{-- Support --}}
            <div class="col-span-1">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Support</h3>
                <ul class="mt-3 grid space-y-3">
                    <li><a href="{{ url('/contact') }}" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Contact Us</a></li>
                    <li><a href="#faq" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">FAQ</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Warranty Info</a></li>
                    <li><a href="#" class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden">Maintenance</a></li>
                </ul>
            </div>

            {{-- Newsletter Form (EmailFooterInput) --}}
            <div class="col-span-2">
                <h3 class="font-bold text-neutral-800 dark:text-neutral-200">Stay up to date</h3>
                <form onsubmit="return false;">
                    <div class="mt-4 flex flex-col items-center gap-2 rounded-lg bg-neutral-200 p-2 sm:flex-row sm:gap-3 dark:bg-neutral-800">
                        <div class="w-full">
                            <label for="footer-email-input" class="sr-only">Enter your email</label>
                            <input
                                type="email"
                                id="footer-email-input"
                                name="footer-input"
                                class="block w-full rounded-lg border-transparent bg-neutral-100 px-4 py-3 text-sm text-neutral-600 caret-yellow-500 focus:border-yellow-400 focus:ring-yellow-400 disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-neutral-700 dark:text-gray-300 dark:placeholder:text-neutral-300"
                                placeholder="Enter your email"
                            >
                        </div>
                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-yellow-500 p-3 text-sm font-bold whitespace-nowrap text-neutral-900 ring-zinc-500 outline-hidden transition duration-300 hover:bg-yellow-400 focus-visible:ring-3 disabled:pointer-events-none disabled:opacity-50 sm:w-auto dark:ring-zinc-200 dark:focus:ring-1 dark:focus:outline-hidden cursor-pointer"
                        >
                            Subscribe
                        </button>
                    </div>
                    <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-400">
                        Stay updated with the latest solar solutions and exclusive deals.
                    </p>
                </form>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-9 grid gap-y-2 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-y-0">
            <div class="flex items-center justify-between">
                <p class="text-sm text-neutral-600 dark:text-neutral-400">
                    &copy; <span id="footer-year"></span> SunSight Energy Ltd. All rights reserved.
                </p>
            </div>

            {{-- Social Links --}}
            <div class="flex items-center">
                <a class="inline-flex h-10 w-10 items-center justify-center gap-x-2 rounded-lg border border-transparent text-sm font-bold text-neutral-700 outline-hidden ring-zinc-500 hover:bg-neutral-500/10 focus:outline-hidden focus-visible:ring-3 focus-visible:ring-zinc-500 dark:ring-zinc-200 dark:text-neutral-400 dark:hover:bg-neutral-50/10" href="#" rel="noopener noreferrer" aria-label="Facebook">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5.04 3.66 9.22 8.44 9.93v-7.02H7.9v-2.91h2.54V9.85c0-2.52 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.89h2.77l-.44 2.91h-2.33V22C18.34 21.29 22 17.11 22 12.07z"/></svg>
                </a>
                <a class="inline-flex h-10 w-10 items-center justify-center gap-x-2 rounded-lg border border-transparent text-sm font-bold text-neutral-700 outline-hidden ring-zinc-500 hover:bg-neutral-500/10 focus:outline-hidden focus-visible:ring-3 focus-visible:ring-zinc-500 dark:ring-zinc-200 dark:text-neutral-400 dark:hover:bg-neutral-50/10" href="#" rel="noopener noreferrer" aria-label="X / Twitter">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a class="inline-flex h-10 w-10 items-center justify-center gap-x-2 rounded-lg border border-transparent text-sm font-bold text-neutral-700 outline-hidden ring-zinc-500 hover:bg-neutral-500/10 focus:outline-hidden focus-visible:ring-3 focus-visible:ring-zinc-500 dark:ring-zinc-200 dark:text-neutral-400 dark:hover:bg-neutral-50/10" href="#" rel="noopener noreferrer" aria-label="LinkedIn">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('footer-year').textContent = new Date().getFullYear();
    </script>
</footer>
