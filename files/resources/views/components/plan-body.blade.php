@props(['plan', 'includesLabel' => 'Includes'])
<!-- The shared middle of a pricing card: price, summary, and feature list.
     Both the featured and plain branches of sections/pricing render this, so
     the two cards can never drift apart. The two price spans are swapped by
     the .pricing:has(#term:checked) rules in site.css. -->
<div class="flex-1">
    <p class="mt-6 flex items-baseline gap-1.5">
        <span class="font-display font-normal tracking-tight text-ink display-figure">
            <span class="term-monthly">{{ $plan->priceMonthly }}</span><span class="term-yearly">{{ $plan->priceYearly }}</span>
        </span>
        <span class="text-sm text-faint">{{ $plan->period }}</span>
    </p>

    <p class="mt-4 min-h-12 text-[0.9375rem] leading-relaxed text-muted">{{ $plan->summary }}</p>

    <p class="mt-7 text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $includesLabel }}</p>
    <ul class="mt-4 space-y-3">
        <x-split-point :text="$plan->featureOne"/>
        <x-split-point :text="$plan->featureTwo"/>
        <x-split-point :text="$plan->featureThree"/>
        <x-split-point :text="$plan->featureFour"/>
        <x-split-point :text="$plan->featureFive"/>
        @if ($plan->featureSix)
            <x-split-point :text="$plan->featureSix"/>
        @endif
    </ul>
</div>
