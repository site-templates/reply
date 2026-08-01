@props([
    'note' => 'Answering for 1,200 support teams',
    'showNote' => '1',
    'items' => [],
])
<!--
    A full-bleed hairline band. The names scroll as one seamless marquee: the
    track holds the row, and main.js clones it so the -50% slide lands exactly
    where it started. Hover pauses it; reduced motion stops it outright.
-->
<section class="border-y border-line bg-canvas py-10 sm:py-12">
    @if ($showNote)
        <p class="mb-8 text-center text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $note }}</p>
    @endif

    <div class="marquee overflow-hidden">
        <div class="marquee-track flex items-center gap-12 sm:gap-16" data-marquee-track>
            @foreach ($items as $item)
                <span class="shrink-0 whitespace-nowrap font-display text-xl font-medium tracking-tight text-ink/45 sm:text-2xl">{{ $item->name }}</span>
            @endforeach
        </div>
    </div>
</section>
