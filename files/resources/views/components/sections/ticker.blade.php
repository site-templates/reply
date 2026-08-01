@props([
    'eyebrow' => 'Watch it work',
    'heading' => 'A question at 2am, answered at 2am.',
    'body' => 'This is a real shape of conversation, at real speed. Nobody was awake for it.',
    'channelLabel' => 'Live chat',
    'customerName' => 'Anika Lubin',
    'customerInitials' => 'AL',
    'question' => "My order arrived with a cracked lid.",
    'agentName' => 'Reply',
    'answer' => 'I can see order #2847 — sorry about that. A replacement lid is on its way and arrives Thursday; there is nothing to send back. I have also flagged the batch for the packaging team.',
    'stampText' => 'Resolved in 4 seconds',
    'stampNote' => 'No agent touched this conversation',
    'ctaText' => 'See what it would clear for you',
    'ctaLink' => '/pricing',
])
<!--
    THE RESOLUTION TICKER — the second signature, and the only dark band on the
    site. main.js adds .is-running when the section scrolls into view, which
    fires the staged animation in site.css: the question types itself, the
    answer rises in, then the stamp lands. Under prefers-reduced-motion the
    whole thing paints its finished state instantly, so it always reads as a
    completed conversation rather than an empty box.

    Its colours are derived from the canvas rather than fixed, so on a dark
    palette the band simply inverts along with everything else.
-->
<section data-ticker class="bg-ink py-20 text-canvas md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">

        <div class="mx-auto max-w-2xl text-center">
            <p data-reveal class="eyebrow mx-auto text-ink-muted">{{ $eyebrow }}</p>
            <h2 data-reveal class="reveal-1 mt-5 font-display font-normal text-canvas display-section">{{ $heading }}</h2>
            <p data-reveal class="reveal-2 mx-auto mt-5 max-w-lg text-ink-muted lede">{{ $body }}</p>
        </div>

        <div data-reveal class="reveal-3 mx-auto mt-14 max-w-2xl overflow-hidden rounded-3xl border border-ink-line bg-ink-soft md:mt-16">

            <div class="flex items-center gap-2.5 border-b border-ink-line px-5 py-3.5">
                <span class="size-2 rounded-full bg-accent-lift" aria-hidden="true"></span>
                <span class="text-xs font-medium uppercase tracking-[0.11em] text-ink-muted">{{ $channelLabel }}</span>
            </div>

            <div class="space-y-6 px-5 py-7 sm:px-8 sm:py-9">

                <div class="ticker-stage flex gap-3" style="--stage-delay: 150ms">
                    <span class="mt-0.5 flex size-8 shrink-0 items-center justify-center rounded-full bg-ink-line text-[0.6875rem] font-semibold text-canvas">{{ $customerInitials }}</span>
                    <div class="min-w-0">
                        <p class="text-[0.8125rem] font-semibold text-canvas">{{ $customerName }}</p>
                        <p class="mt-1.5 text-[0.9375rem] leading-relaxed text-canvas"><span class="ticker-type" style="--stage-delay: 350ms">{{ $question }}</span></p>
                    </div>
                </div>

                <div class="ticker-stage flex gap-3" style="--stage-delay: 1900ms">
                    <span class="mt-0.5 flex size-8 shrink-0 items-center justify-center rounded-full bg-canvas text-ink">
                        <svg viewBox="0 0 32 32" class="size-4" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5ZM11 15A1.5 1.5 0 1 1 8 15A1.5 1.5 0 1 1 11 15ZM17 15A2 2 0 1 1 13 15A2 2 0 1 1 17 15ZM24 15A2.5 2.5 0 1 1 19 15A2.5 2.5 0 1 1 24 15Z"/></svg>
                    </span>
                    <div class="min-w-0">
                        <p class="text-[0.8125rem] font-semibold text-canvas">{{ $agentName }}</p>
                        <p class="mt-1.5 rounded-2xl rounded-tl-md bg-ink-line px-4 py-3 text-[0.9375rem] leading-relaxed text-canvas">{{ $answer }}</p>
                    </div>
                </div>

                <div class="ticker-stamp flex flex-wrap items-center gap-x-4 gap-y-2 border-t border-ink-line pt-6" style="--stage-delay: 2700ms">
                    <span class="inline-flex items-center gap-2 rounded-full bg-canvas px-3.5 py-1.5 text-[0.8125rem] font-semibold text-ink">
                        <svg viewBox="0 0 16 16" class="size-3.5" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-6"/></svg>
                        {{ $stampText }}
                    </span>
                    <span class="text-[0.8125rem] text-ink-muted">{{ $stampNote }}</span>
                </div>

            </div>
        </div>

        <p data-reveal class="reveal-4 mt-10 text-center">
            <a href="{{ $ctaLink }}" class="group inline-flex items-center gap-2 text-[0.9375rem] font-semibold text-canvas underline decoration-ink-muted underline-offset-[6px] transition-colors duration-200 hover:decoration-canvas">
                {{ $ctaText }}
                <svg viewBox="0 0 16 16" class="size-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
            </a>
        </p>

    </div>
</section>
