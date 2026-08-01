@props([
    'eyebrow' => '',
    'heading' => '',
    'body' => '',
    'pointOne' => '',
    'pointTwo' => '',
    'pointThree' => '',
    'ctaText' => '',
    'ctaLink' => '/',
    'showCta' => '1',
])
<!-- The text half of a split row. Lives in its own component so the two
     alignment branches of sections/split share one copy of the markup. -->
<div>
    @if ($eyebrow)
        <p class="eyebrow text-muted">{{ $eyebrow }}</p>
    @endif

    <h2 class="mt-5 font-display font-normal text-ink display-section">{{ $heading }}</h2>
    <p class="mt-5 text-muted lede">{{ $body }}</p>

    @if ($pointOne)
        <ul class="mt-8 space-y-3.5 border-t border-line pt-8">
            <x-split-point :text="$pointOne"/>
            @if ($pointTwo)
                <x-split-point :text="$pointTwo"/>
            @endif
            @if ($pointThree)
                <x-split-point :text="$pointThree"/>
            @endif
        </ul>
    @endif

    @if ($showCta)
        <a href="{{ $ctaLink }}" class="group mt-9 inline-flex min-h-11 items-center gap-2 text-[0.9375rem] font-semibold text-ink underline decoration-line decoration-2 underline-offset-[6px] transition-colors duration-200 hover:decoration-ink">
            {{ $ctaText }}
            <svg viewBox="0 0 16 16" class="size-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
        </a>
    @endif
</div>
