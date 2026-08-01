@props(['text' => ''])
<!-- One ticked bullet in a split row's list. -->
<li class="flex gap-3 text-[0.9375rem] leading-relaxed text-ink/80">
    <svg viewBox="0 0 16 16" class="mt-1 size-4 shrink-0 text-ink" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.2 8.4 3.2 3.2 6.4-7.2"/></svg>
    <span>{{ $text }}</span>
</li>
