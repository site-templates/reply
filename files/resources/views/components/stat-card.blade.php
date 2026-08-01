@props([
    'title' => '',
    'oneFigure' => '',
    'oneLabel' => '',
    'oneDelta' => '',
    'twoFigure' => '',
    'twoLabel' => '',
    'twoDelta' => '',
])
<!-- The small floating panel over a split row's painting. Two figures, each
     with its label and change line. Built in markup so it stays crisp and
     restyles with the palette. -->
<div>
    <p class="text-[0.6875rem] font-semibold uppercase tracking-[0.12em] text-faint">{{ $title }}</p>
    <div class="mt-3.5 grid grid-cols-2 gap-3">
        <div class="rounded-xl bg-raised px-3 py-2.5">
            <p class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $oneFigure }}</p>
            <p class="mt-0.5 text-[0.6875rem] leading-tight text-muted">{{ $oneLabel }}</p>
            @if ($oneDelta)
                <p class="mt-2 text-[0.625rem] font-medium text-ink/70">{{ $oneDelta }}</p>
            @endif
        </div>
        <div class="rounded-xl bg-raised px-3 py-2.5">
            <p class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $twoFigure }}</p>
            <p class="mt-0.5 text-[0.6875rem] leading-tight text-muted">{{ $twoLabel }}</p>
            @if ($twoDelta)
                <p class="mt-2 text-[0.625rem] font-medium text-ink/70">{{ $twoDelta }}</p>
            @endif
        </div>
    </div>
</div>
