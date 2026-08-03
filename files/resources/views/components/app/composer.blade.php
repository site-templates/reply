@props([
    'title' => 'Draft reply',
    'meta' => 'Tone matched',
    'customerName' => 'Priya Raman',
    'customerLine' => 'Hi! Is the walnut finish still available in the 180cm?',
    'draft' => "Hi Priya — good timing. The walnut is back in the 180cm as of Tuesday, and it's the last run before we switch to the oiled finish in the autumn. Want me to hold one for you for 48 hours?",
    'toneLabel' => 'Voice',
    'toneValue' => 'Matches your help centre',
    'sourceLabel' => 'Cited',
    'sourceOne' => 'Finishes and materials',
    'sourceTwo' => 'Stock: SKU 4471',
    'primaryAction' => 'Send',
    'secondaryAction' => 'Rewrite',
])
<!--
    The Draft reply screen — the answer Reply wrote, the sources it used, and
    the two buttons an agent actually presses. Drawn in markup, so the palette
    reaches into the product shot the same way it reaches into the page.
-->
<div>
    <div class="flex items-center justify-between gap-3 border-b border-hairline px-4 py-3">
        <span class="font-display text-[0.875rem] font-semibold tracking-tight text-ink">{{ $title }}</span>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-raised/70 px-2.5 py-1 text-[0.6875rem] text-muted">
            <svg viewBox="0 0 16 16" class="size-3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-6"/></svg>
            {{ $meta }}
        </span>
    </div>

    <div class="border-b border-hairline px-4 py-3.5">
        <p class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $customerName }}</p>
        <p class="mt-1.5 text-[0.8125rem] leading-relaxed text-ink/70">{{ $customerLine }}</p>
    </div>

    <div class="px-4 py-4">
        <p class="rounded-xl bg-raised/60 px-3.5 py-3 text-[0.8125rem] leading-relaxed text-ink">{{ $draft }}</p>

        <div class="mt-4 flex flex-wrap items-center gap-2">
            <span class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $toneLabel }}</span>
            <span class="rounded-full border border-line px-2.5 py-1 text-[0.6875rem] text-ink/80">{{ $toneValue }}</span>
        </div>

        <div class="mt-2.5 flex flex-wrap items-center gap-2">
            <span class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $sourceLabel }}</span>
            <span class="rounded-full border border-line px-2.5 py-1 text-[0.6875rem] text-ink/80">{{ $sourceOne }}</span>
            <span class="rounded-full border border-line px-2.5 py-1 text-[0.6875rem] text-ink/80">{{ $sourceTwo }}</span>
        </div>
    </div>

    <div class="flex items-center gap-2 border-t border-hairline px-4 py-3">
        <span class="rounded-full bg-accent px-4 py-2 text-[0.75rem] font-semibold text-accent-ink">{{ $primaryAction }}</span>
        <span class="rounded-full border border-line px-4 py-2 text-[0.75rem] font-medium text-ink">{{ $secondaryAction }}</span>
    </div>
</div>
