@props(['label' => '', 'percent' => '0'])
<!-- One row of the Insights breakdown. The bar's width is the percentage
     itself, so the chart can never disagree with the number beside it. -->
<div class="flex items-center gap-3">
    <span class="w-32 shrink-0 truncate text-[0.75rem] text-ink/80 sm:w-36">{{ $label }}</span>
    <span class="h-1.5 flex-1 overflow-hidden rounded-full bg-raised">
        <span class="block h-full rounded-full bg-ink/70" style="width: {{ $percent }}%"></span>
    </span>
    <span class="w-8 shrink-0 text-right text-[0.75rem] font-medium tabular-nums text-muted">{{ $percent }}%</span>
</div>
