@props([
    'eyebrow' => 'Questions',
    'heading' => 'The things people ask before they trust it.',
    'contactText' => 'Something else on your mind?',
    'contactLinkText' => 'Ask us directly',
    'contactLink' => 'mailto:hello@reply.support',
    'showContact' => '1',
    'items' => [],
])
<!--
    A narrow single column, left-aligned and deliberately not centred — the FAQ
    is the one place on the page where somebody is actually reading rather than
    scanning. Native <details> so it works with JavaScript off; the open/close
    easing is CSS in site.css.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">
        <div class="grid gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.15fr)] lg:gap-20">

            <div class="lg:sticky lg:top-28 lg:self-start">
                <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
                <h2 data-reveal class="reveal-1 mt-5 max-w-md font-display font-normal text-ink display-section">{{ $heading }}</h2>
                @if ($showContact)
                    <p data-reveal class="reveal-2 mt-8 text-[0.9375rem] text-muted">
                        {{ $contactText }}
                        <a href="{{ $contactLink }}" class="font-medium text-ink underline decoration-line decoration-2 underline-offset-4 transition-colors duration-200 hover:decoration-ink">{{ $contactLinkText }}</a>
                    </p>
                @endif
            </div>

            <div data-reveal class="reveal-1 border-t border-line">
                @foreach ($items as $item)
                    <details class="faq-item group border-b border-line">
                        <summary class="flex cursor-pointer list-none items-start gap-6 py-6 text-left">
                            <span class="flex-1 font-display text-[1.125rem] font-medium leading-snug tracking-tight text-ink transition-opacity duration-200 group-hover:opacity-70 sm:text-[1.1875rem]">{{ $item->question }}</span>
                            <span class="faq-sign mt-1 shrink-0 text-muted" aria-hidden="true">
                                <svg viewBox="0 0 16 16" class="size-4" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M8 3v10M3 8h10"/></svg>
                            </span>
                        </summary>
                        <p class="max-w-2xl pb-7 pr-10 text-[0.9375rem] leading-relaxed text-muted">{{ $item->answer }}</p>
                    </details>
                @endforeach
            </div>

        </div>
    </div>
</section>
