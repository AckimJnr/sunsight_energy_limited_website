{{-- ── FAQ Section ──────────────────────────────────────────────────────────── --}}
<section id="faq" class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
    <div class="grid gap-10 md:grid-cols-5">

        {{-- Heading column --}}
        <div class="md:col-span-2">
            <div class="max-w-xs">
                <h2 class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200">
                    Frequently<br>asked questions
                </h2>
                <p class="mt-1 hidden text-neutral-600 md:block dark:text-neutral-400">
                    Have questions about going solar? We have answers.
                </p>
            </div>
        </div>

        {{-- FAQ accordion items --}}
        <div class="md:col-span-3">
            <div class="divide-y divide-neutral-200 dark:divide-neutral-700">

                @foreach ([
                    [
                        'question' => 'How much can I save on my electricity bill with solar panels?',
                        'answer'   => 'Most homeowners see a 50–90% reduction in their monthly electricity bills after installing a SunSight solar system. The exact savings depend on your energy consumption, local utility rates, and system size. Our free energy assessment gives you a personalised projection.',
                    ],
                    [
                        'question' => 'How long does the installation process take?',
                        'answer'   => 'A typical residential installation is completed within 1–2 days once permits are approved. Our team handles all paperwork, council approvals, and grid connection applications, so the entire process from sign-off to switch-on usually takes 4–6 weeks.',
                    ],
                    [
                        'question' => 'What warranty do your solar panels and systems come with?',
                        'answer'   => 'Our solar panels carry a 25-year performance warranty guaranteeing at least 80% output, and a 12-year product warranty. Inverters come with a 10-year warranty. All installations are backed by our 5-year workmanship guarantee.',
                    ],
                    [
                        'question' => 'Do I need a battery storage system?',
                        'answer'   => 'A battery storage system lets you store excess solar energy to use at night or during grid outages, maximising your self-sufficiency. While not required, it dramatically increases your energy independence. We offer flexible packages with and without battery storage to suit your budget and goals.',
                    ],
                    [
                        'question' => 'Can my roof handle solar panels?',
                        'answer'   => 'Most roof types — including tile, metal, and flat roofs — are suitable for solar. During our free site assessment, our engineers will evaluate your roof\'s orientation, pitch, shading, and structural integrity to ensure a safe, optimised installation.',
                    ],
                    [
                        'question' => 'Do you offer commercial solar solutions?',
                        'answer'   => 'Absolutely. Our commercial division designs and installs large-scale solar systems for businesses, warehouses, farms, and industrial facilities. We provide detailed ROI analysis, bespoke system design, and ongoing monitoring through our smart dashboard.',
                    ],
                ] as $index => $item)
                    <div class="faq-item {{ $index === 0 ? 'pb-3 open' : 'pt-6 pb-3' }}">
                        <button
                            type="button"
                            class="faq-trigger group inline-flex w-full items-center justify-between gap-x-3 rounded-lg pb-3 text-start font-bold text-balance text-neutral-800 ring-zinc-500 outline-hidden transition hover:text-neutral-500 focus-visible:ring-3 md:text-lg dark:text-neutral-200 dark:ring-zinc-200 dark:hover:text-neutral-400 dark:focus:outline-hidden cursor-pointer"
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-controls="faq-answer-{{ $index }}"
                            id="faq-trigger-{{ $index }}"
                        >
                            {{ $item['question'] }}
                            {{-- Arrow down icon (inactive) --}}
                            <svg class="faq-icon-inactive {{ $index === 0 ? 'hidden' : 'block' }} size-6 text-neutral-600 group-hover:text-neutral-500 dark:text-neutral-400 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                            {{-- Arrow up icon (active) --}}
                            <svg class="faq-icon-active {{ $index === 0 ? 'block' : 'hidden' }} size-6 text-neutral-600 group-hover:text-neutral-500 dark:text-neutral-400 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6"/>
                            </svg>
                        </button>
                        <div
                            id="faq-answer-{{ $index }}"
                            class="faq-answer {{ $index === 0 ? 'open' : '' }}"
                            role="region"
                            aria-labelledby="faq-trigger-{{ $index }}"
                        >
                            <p class="text-pretty text-neutral-600 dark:text-neutral-400">
                                {{ $item['answer'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
