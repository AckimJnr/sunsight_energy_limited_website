{{-- ── Announcement Banner ──────────────────────────────────────────────────── --}}
<div id="announcement-banner" role="alert" class="bg-yellow-500 px-4 py-3 text-center text-sm font-medium text-neutral-900">
    <div class="mx-auto flex max-w-[85rem] items-center justify-between gap-4">
        <span class="flex-1 text-center">
            ☀️ <strong>Limited Time:</strong> Get a FREE site assessment when you book before month end.
            <a href="{{ url('/contact') }}" id="banner-cta-btn" class="ml-2 inline-flex items-center rounded-full bg-neutral-900 px-4 py-1 text-xs font-semibold text-yellow-400 hover:bg-neutral-800 transition">
                Get Your Free Solar Quote Today &rarr;
            </a>
        </span>
        <button id="dismiss-announcement" class="shrink-0 text-neutral-700 hover:text-neutral-900 transition" aria-label="Dismiss announcement">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
</div>
