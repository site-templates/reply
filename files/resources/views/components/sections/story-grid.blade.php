@props([
    'eyebrow' => 'Case studies',
    'heading' => 'Three teams, in detail.',
    'readLabel' => 'Read the story',
    'items' => [],
])
<!--
    The case-study cards. Each links to /customer/{slug}, served by the single
    dynamic page pages/customer/[stories.slug].blade.php — there is no page
    file per story. The whole card is one anchor, so the inner elements are
    spans rather than nested links.
-->
<section class="pb-20 pt-14 md:pb-28 md:pt-16 lg:pb-32 lg:pt-20">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        <div class="max-w-2xl">
            <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
            <h2 data-reveal class="reveal-1 mt-5 font-display font-normal text-ink display-section">{{ $heading }}</h2>
        </div>

        <div class="mt-14 grid gap-8 md:mt-16 md:grid-cols-3 md:gap-6 lg:gap-8">
            @foreach ($items as $story)
                <a href="{{ $story->link }}" data-reveal class="reveal-{{ $loop->iteration }} group flex flex-col">
                    <span class="frame block">
                        <span class="relative block">
                            <img src="{{ $story->image }}" alt="{{ $story->imageAlt }}" width="1000" height="746" class="aspect-[4/3] w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" loading="lazy">
                            <span class="absolute bottom-3 left-3 inline-flex items-baseline gap-2 rounded-full bg-panel/90 px-3 py-1.5 backdrop-blur-sm">
                                <span class="font-display text-base font-semibold tracking-tight text-ink">{{ $story->metricFigure }}</span>
                                <span class="text-[0.6875rem] text-muted">{{ $story->metricLabel }}</span>
                            </span>
                        </span>
                    </span>
                    <span class="mt-6 flex items-center gap-2.5 text-[0.75rem] font-semibold uppercase tracking-[0.11em] text-faint">
                        <span>{{ $story->company }}</span>
                        <span aria-hidden="true">·</span>
                        <span>{{ $story->industry }}</span>
                    </span>
                    <span class="mt-3 block font-display font-semibold text-ink transition-opacity duration-200 group-hover:opacity-70 display-card">{{ $story->title }}</span>
                    <span class="mt-3 block flex-1 text-[0.9375rem] leading-relaxed text-muted">{{ $story->description }}</span>
                    <span class="mt-5 inline-flex items-center gap-2 self-start pt-1 text-[0.875rem] font-semibold text-ink">
                        {{ $readLabel }}
                        <svg viewBox="0 0 16 16" class="size-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </span>
                </a>
            @endforeach
        </div>

    </div>
</section>
