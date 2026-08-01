@props([
    'eyebrow' => 'Security',
    'heading' => 'Built to survive your security review.',
    'body' => 'We have been through enough of them to know what your compliance team is going to ask. The answers are all yes, and the evidence is ready.',
    'ctaText' => 'Request the SOC 2 report',
    'ctaLink' => 'mailto:hello@reply.support',
    'showCta' => '1',
    'items' => [],
])
<!--
    The second ink band on the site, and the counterweight to the ticker: two
    columns, copy left and a hairline-divided list of guarantees right. Its
    colours come from the canvas token, so it inverts cleanly on a dark palette.
-->
<section class="bg-ink py-20 text-canvas md:py-28 lg:py-32">
    <div class="mx-auto grid w-full max-w-[78rem] gap-12 px-5 sm:px-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.15fr)] lg:gap-20 lg:px-12">

        <div class="lg:sticky lg:top-28 lg:self-start">
            <p data-reveal class="eyebrow text-ink-muted">{{ $eyebrow }}</p>
            <h2 data-reveal class="reveal-1 mt-5 max-w-md font-display font-normal text-canvas display-section">{{ $heading }}</h2>
            <p data-reveal class="reveal-2 mt-5 max-w-md text-ink-muted lede">{{ $body }}</p>
            @if ($showCta)
                <p data-reveal class="reveal-3 mt-8">
                    <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center rounded-full bg-canvas px-7 text-[0.9375rem] font-semibold text-ink transition-opacity duration-200 hover:opacity-85">{{ $ctaText }}</a>
                </p>
            @endif
        </div>

        <dl data-reveal class="reveal-1 border-t border-ink-line">
            @foreach ($items as $item)
                <div class="border-b border-ink-line py-7">
                    <dt class="flex items-center gap-3 font-display text-lg font-semibold tracking-tight text-canvas">
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 text-accent-lift" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 1.8 2.8 4v3.6c0 3 2.2 5.6 5.2 6.6 3-1 5.2-3.6 5.2-6.6V4Z"/><path d="m5.9 8.1 1.5 1.5 3-3.2"/></svg>
                        {{ $item->title }}
                    </dt>
                    <dd class="mt-2.5 max-w-lg pl-7 text-[0.9375rem] leading-relaxed text-ink-muted">{{ $item->body }}</dd>
                </div>
            @endforeach
        </dl>

    </div>
</section>
