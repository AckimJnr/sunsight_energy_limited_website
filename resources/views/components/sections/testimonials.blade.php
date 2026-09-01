{{-- ── Testimonials + Statistics Section ───────────────────────────────────── --}}
<section class="bg-neutral-900 dark:bg-neutral-950 py-16 lg:py-20">
    <div class="mx-auto max-w-[85rem] px-4 sm:px-6 lg:px-8">

        <div class="text-center">
            <h2 class="text-3xl font-bold text-neutral-100 sm:text-4xl">Real Savings. Real People.</h2>
            <p class="mt-3 text-neutral-400">
                Thousands of SunSight customers are already enjoying lower energy bills and a greener future. Here's what they have to say.
            </p>
        </div>

        {{-- Testimonial card --}}
        <div class="mx-auto mt-10 max-w-3xl">
            <div class="relative rounded-2xl bg-neutral-800 p-8 shadow-xl ring-1 ring-neutral-700 lg:p-10">
                {{-- Quote mark --}}
                <svg class="absolute top-6 left-6 h-10 w-10 text-yellow-500/30" fill="currentColor" viewBox="0 0 32 32">
                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                </svg>
                <blockquote class="relative mt-4">
                    <p class="text-lg leading-relaxed text-neutral-300 italic">
                        "Switching to SunSight was the best home investment we have ever made. Our electricity bill dropped by 80% in the first month, and the installation team was professional, fast, and incredibly tidy. Highly recommend!"
                    </p>
                </blockquote>
                <div class="mt-6 flex items-center gap-4">
                    <img
                        src="https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?q=80&w=200&auto=format&fit=facearea&facepad=2"
                        alt="Margaret Collins"
                        class="h-12 w-12 rounded-full object-cover ring-2 ring-yellow-500"
                    >
                    <div>
                        <p class="font-semibold text-neutral-100">Margaret Collins</p>
                        <p class="text-sm text-neutral-400">Homeowner &mdash; Cape Town</p>
                    </div>
                    {{-- Star rating --}}
                    <div class="ml-auto flex gap-0.5">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        {{-- Statistics grid --}}
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['count' => '3,200+',  'description' => 'homes and businesses powered by SunSight solar systems'],
                ['count' => '80%',     'description' => 'average reduction in electricity bills reported by our customers'],
                ['count' => '25yr',    'description' => 'performance warranty on all SunSight solar panels'],
                ['count' => '4–6 wks', 'description' => 'average time from quote to fully operational solar system'],
            ] as $stat)
                <div class="rounded-xl bg-neutral-800 p-6 text-center ring-1 ring-neutral-700 hover:ring-yellow-500/40 transition-all duration-300">
                    <p class="text-4xl font-extrabold text-yellow-400">{{ $stat['count'] }}</p>
                    <p class="mt-2 text-sm text-neutral-400">{{ $stat['description'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
