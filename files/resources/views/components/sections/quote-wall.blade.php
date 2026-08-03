@props([
    'eyebrow' => 'In their words',
    'heading' => 'What changed, according to the people it changed for.',
    'items' => [],
])
<!--
    A masonry wall via CSS columns, so the quotes keep their natural length
    instead of being padded out to a uniform card height. Short and long
    quotes side by side is what makes it read as testimony rather than copy.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        <div class="max-w-2xl">
            <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
            <h2 data-reveal class="reveal-1 mt-5 font-display font-normal text-ink display-section">{{ $heading }}</h2>
        </div>

        <div data-reveal class="reveal-1 mt-14 gap-6 md:mt-16 md:columns-2 lg:columns-3">
            @foreach ($items as $item)
                <figure class="lift mb-6 break-inside-avoid rounded-2xl border border-line bg-panel p-6 sm:p-7">
                    <blockquote class="font-display text-[1.0625rem] font-normal leading-relaxed tracking-[-0.005em] text-ink">“{{ $item->quote }}”</blockquote>
                    <figcaption class="mt-5 border-t border-line pt-4">
                        <span class="block text-[0.875rem] font-semibold text-ink">{{ $item->name }}</span>
                        <span class="mt-0.5 block text-[0.8125rem] text-muted">{{ $item->role }}</span>
                    </figcaption>
                </figure>
            @endforeach
        </div>

    </div>
</section>
