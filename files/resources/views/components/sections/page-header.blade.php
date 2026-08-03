@props([
    'eyebrow' => 'Features',
    'heading' => 'Everything Reply does, in one quiet inbox.',
    'body' => '',
    'ctaText' => '',
    'ctaLink' => '/pricing',
    'showCta' => '0',
    'align' => 'left',
])
<!--
    The opening block on an inner page. Left-aligned by default so inner pages
    do not all start with the same centred stack the home page ends on; the
    centre variant is there for the pages that earn it (pricing).
-->
<section class="border-b border-line pb-14 pt-32 sm:pb-16 sm:pt-36 lg:pb-20 lg:pt-44">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">
        @if ($align == 'center')
            <div class="mx-auto max-w-2xl text-center">
                <p data-reveal class="eyebrow mx-auto text-muted">{{ $eyebrow }}</p>
                <h1 data-reveal class="reveal-1 mt-5 font-display font-normal text-ink display-hero">{{ $heading }}</h1>
                @if ($body)
                    <p data-reveal class="reveal-2 mx-auto mt-6 max-w-xl text-muted lede">{{ $body }}</p>
                @endif
                @if ($showCta)
                    <p data-reveal class="reveal-3 mt-9">
                        <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center rounded-full bg-accent px-7 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>
                    </p>
                @endif
            </div>
        @endif

        @if ($align != 'center')
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1fr)] lg:items-end lg:gap-16">
                <div>
                    <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
                    <h1 data-reveal class="reveal-1 mt-5 max-w-2xl font-display font-normal text-ink display-hero">{{ $heading }}</h1>
                </div>
                <div class="lg:pb-3">
                    @if ($body)
                        <p data-reveal class="reveal-2 max-w-lg text-muted lede">{{ $body }}</p>
                    @endif
                    @if ($showCta)
                        <p data-reveal class="reveal-3 mt-7">
                            <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center rounded-full bg-accent px-7 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>
                        </p>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
