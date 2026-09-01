{{-- ── FAQ Section ──────────────────────────────────────────────────────────── --}}
<section id="faq" class="mx-auto max-w-[85rem] px-4 py-16 sm:px-6 lg:px-8 lg:py-20 2xl:max-w-full">
    <div class="grid gap-10 lg:grid-cols-5">

        {{-- Heading column --}}
        <div class="lg:col-span-2">
            <div class="sticky top-28">
                <h2 class="text-4xl font-bold tracking-tight text-neutral-800 dark:text-neutral-200 lg:text-5xl">
                    Frequently<br>asked questions
                </h2>
                <p class="mt-4 text-neutral-600 dark:text-neutral-400">
                    Have questions about going solar? We have answers.
                </p>
                <p class="mt-6 text-sm text-neutral-500 dark:text-neutral-500">
                    Still have questions? <a href="{{ url('/contact') }}" class="font-medium text-yellow-600 hover:text-yellow-500 dark:text-yellow-400 dark:hover:text-yellow-300 underline underline-offset-2 transition">Get in touch</a> — we're happy to help.
                </p>
            </div>
        </div>

        {{-- Accordion column --}}
        <div class="lg:col-span-3">
            <div class="space-y-3">

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
                    <div class="faq-item rounded-xl border border-neutral-200 bg-white dark:border-neutral-700 dark:bg-neutral-800">
                        <button
                            type="button"
                            class="faq-trigger flex w-full items-center justify-between gap-4 px-6 py-5 text-left"
                            aria-expanded="false"
                            aria-controls="faq-answer-{{ $index }}"
                            id="faq-trigger-{{ $index }}"
                        >
                            <span class="font-medium text-neutral-800 dark:text-neutral-200">{{ $item['question'] }}</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-neutral-500 dark:text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19 9-7 7-7-7"/>
                            </svg>
                        </button>
                        <div
                            id="faq-answer-{{ $index }}"
                            class="faq-answer"
                            role="region"
                            aria-labelledby="faq-trigger-{{ $index }}"
                        >
                            <p class="px-6 pb-5 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
                                {{ $item['answer'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
