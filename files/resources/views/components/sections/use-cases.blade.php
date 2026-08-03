@props([
    'eyebrow' => 'The work',
    'heading' => 'Five jobs, done before anyone opens the inbox.',
    'items' => [],
])
<!--
    A numbered editorial list rather than a card grid: each row is a wide
    two-column band divided by a hairline, with the number set large and hollow
    in the display face. It reads as a table of contents for the product.
-->
<section class="pb-20 pt-14 md:pb-28 md:pt-16 lg:pb-32 lg:pt-20">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
        <h2 data-reveal class="reveal-1 mt-5 max-w-2xl font-display font-normal text-ink display-section">{{ $heading }}</h2>

        <div class="mt-14 border-t border-line md:mt-16">
            @foreach ($items as $item)
                <div data-reveal class="grid gap-6 border-b border-line py-10 md:grid-cols-[4rem_minmax(0,1.1fr)_minmax(0,1fr)] md:gap-10 md:py-12 lg:gap-16">

                    <p class="font-display text-3xl font-normal leading-none text-ink/25 md:text-4xl">{{ $loop->iteration }}</p>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $item->eyebrow }}</p>
                        <h3 class="mt-3 max-w-md font-display text-2xl font-normal leading-tight tracking-tight text-ink md:text-[1.75rem]">{{ $item->title }}</h3>
                        <p class="mt-4 max-w-md text-[0.9375rem] leading-relaxed text-muted">{{ $item->body }}</p>
                    </div>

                    <ul class="space-y-3 md:pt-1">
                        <x-split-point :text="$item->pointOne"/>
                        <x-split-point :text="$item->pointTwo"/>
                        <x-split-point :text="$item->pointThree"/>
                    </ul>

                </div>
            @endforeach
        </div>

    </div>
</section>
