@props([
    'title' => 'Customer story',
    'description' => '',
    'company' => '',
    'industry' => '',
    'dateFormatted' => '',
    'readTime' => '',
    'image' => '/images/resolve.jpg',
    'imageAlt' => 'A painterly meadow',
    'metricFigure' => '',
    'metricLabel' => '',
    'quote' => '',
    'quoteName' => '',
    'quoteRole' => '',
    'backText' => 'All customer stories',
    'backLink' => '/customers',
    'moreLabel' => 'More stories',
    'more' => [],
])
<x-layouts.main :title="$title" :description="$description" current="/customers">
    <!-- One customer story. Every value here comes from the matched row of the
         stories collection — see pages/customer/[stories.slug].blade.php. -->
    <article>

        <header class="pb-14 pt-32 sm:pt-36 lg:pt-44">
            <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">
                <a href="{{ $backLink }}" class="group inline-flex min-h-11 items-center gap-2 text-[0.875rem] font-medium text-muted transition-colors duration-200 hover:text-ink">
                    <svg viewBox="0 0 16 16" class="size-3.5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 8H3M7 4 3 8l4 4"/></svg>
                    {{ $backText }}
                </a>

                <div class="mt-8 flex flex-wrap items-center gap-x-3 gap-y-1 text-[0.75rem] font-semibold uppercase tracking-[0.11em] text-faint">
                    <span class="text-ink">{{ $company }}</span>
                    <span aria-hidden="true">·</span>
                    <span>{{ $industry }}</span>
                    <span aria-hidden="true">·</span>
                    <span>{{ $dateFormatted }}</span>
                    <span aria-hidden="true">·</span>
                    <span>{{ $readTime }}</span>
                </div>

                <h1 class="mt-5 max-w-3xl font-display font-normal text-ink display-hero">{{ $title }}</h1>
                <p class="mt-6 max-w-xl text-muted lede">{{ $description }}</p>
            </div>
        </header>

        <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">
            <div class="relative overflow-hidden rounded-3xl">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1100" height="821" class="aspect-[16/9] w-full object-cover" loading="eager">
                @if ($metricFigure)
                    <span class="absolute bottom-5 left-5 inline-flex items-baseline gap-2.5 rounded-2xl bg-panel/90 px-5 py-3.5 backdrop-blur-sm">
                        <span class="font-display text-3xl font-semibold tracking-tight text-ink">{{ $metricFigure }}</span>
                        <span class="max-w-36 text-[0.8125rem] leading-tight text-muted">{{ $metricLabel }}</span>
                    </span>
                @endif
            </div>
        </div>

        <div class="mx-auto w-full max-w-[78rem] px-5 py-16 sm:px-8 md:py-20 lg:px-12">
            <div class="grid gap-12 lg:grid-cols-[minmax(0,2.2fr)_minmax(0,1fr)] lg:gap-20">

                <div class="prose">
                    {{ $slot }}
                </div>

                <aside class="lg:sticky lg:top-28 lg:self-start">
                    @if ($quote)
                        <figure class="rounded-2xl border border-line bg-panel p-6">
                            <blockquote class="font-display text-[1.0625rem] leading-relaxed text-ink">“{{ $quote }}”</blockquote>
                            <figcaption class="mt-5 border-t border-line pt-4">
                                <span class="block text-[0.875rem] font-semibold text-ink">{{ $quoteName }}</span>
                                <span class="mt-0.5 block text-[0.8125rem] text-muted">{{ $quoteRole }}</span>
                            </figcaption>
                        </figure>
                    @endif

                    @if ($more)
                        <p class="mt-10 text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $moreLabel }}</p>
                        <ul class="mt-5 space-y-4 border-t border-line pt-5">
                            @foreach ($more as $other)
                                @if ($other->title != $title)
                                    <li>
                                        <a href="{{ $other->link }}" class="group block">
                                            <span class="block text-[0.6875rem] font-semibold uppercase tracking-[0.11em] text-faint">{{ $other->company }}</span>
                                            <span class="mt-1 block font-display text-[1.0625rem] font-medium leading-snug tracking-tight text-ink transition-opacity duration-200 group-hover:opacity-70">{{ $other->title }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </aside>

            </div>
        </div>

    </article>

    <x-sections.cta
        heading="Start your own version of this."
        body="Connect a channel, point Reply at your docs, and see what a week clears. Free on one channel, forever."
        ctaText="Start free"
        secondaryText="Read another story"
        secondaryLink="/customers"
    />
</x-layouts.main>
