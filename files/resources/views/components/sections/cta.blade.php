@props([
    'heading' => 'Give your team their mornings back.',
    'body' => 'Connect an inbox, point Reply at your help centre, and watch what a week looks like. Nothing to build, no card, no sales call.',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'secondaryText' => 'Talk to a human',
    'secondaryLink' => 'mailto:hello@reply.support',
    'showSecondary' => '1',
    'footnote' => 'Set up in about ten minutes. Cancel in one click.',
    'image' => '/images/bloom.jpg',
    'imageAlt' => 'A painterly stand of white wildflowers rising through sage grasses',
])
<!--
    The closing invitation, set over a full-bleed painting with a heavy canvas
    scrim so the type stays legible whatever the photograph is doing. The scrim
    is mixed from the canvas token, so on a dark palette it darkens instead of
    lightening and the section keeps working.
-->
<section class="relative isolate overflow-hidden">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="820" height="1235" class="absolute inset-0 -z-20 size-full object-cover object-center" loading="lazy">
    <span class="absolute inset-0 -z-10 bg-canvas/[0.74] backdrop-blur-[2px]" aria-hidden="true"></span>

    <div class="mx-auto w-full max-w-[78rem] px-5 py-24 text-center sm:px-8 md:py-32 lg:px-12 lg:py-40">
        <h2 data-reveal class="mx-auto max-w-3xl font-display font-normal text-ink display-hero">{{ $heading }}</h2>
        <p data-reveal class="reveal-1 mx-auto mt-6 max-w-lg text-muted lede">{{ $body }}</p>

        <div data-reveal class="reveal-2 mt-10 flex flex-wrap items-center justify-center gap-3">
            <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center rounded-full bg-accent px-8 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>
            @if ($showSecondary)
                <a href="{{ $secondaryLink }}" class="inline-flex min-h-12 items-center rounded-full border border-line bg-panel/60 px-8 text-[0.9375rem] font-semibold text-ink transition-colors duration-200 hover:border-ink/25 hover:bg-panel">{{ $secondaryText }}</a>
            @endif
        </div>

        <p data-reveal class="reveal-3 mt-6 text-sm text-faint">{{ $footnote }}</p>
    </div>
</section>
