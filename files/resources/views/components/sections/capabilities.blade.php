@props([
    'eyebrow' => 'What Reply does',
    'heading' => 'Three jobs, taken off your team.',
    'body' => 'Not a bot bolted onto the side of your inbox. A teammate that reads what you have written, answers what it can, and knows exactly where its judgement runs out.',
    'items' => [],
])
<!--
    Three photographic cards. Each is a field photograph with a small floating
    chip on it — the chip is what stops the images reading as decoration and
    ties them back to the product. Heading block is left-aligned against a
    right-hand paragraph, so the section does not centre like every other
    three-up on the internet.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] lg:items-end lg:gap-16">
            <div>
                <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
                <h2 data-reveal class="reveal-1 mt-5 max-w-lg font-display font-normal text-ink display-section">{{ $heading }}</h2>
            </div>
            <p data-reveal class="reveal-2 max-w-lg text-muted lede lg:pb-2">{{ $body }}</p>
        </div>

        <div class="mt-14 grid gap-8 md:mt-16 md:grid-cols-3 md:gap-6 lg:gap-8">
            @foreach ($items as $item)
                <div data-reveal class="reveal-{{ $loop->iteration }}">
                    <div class="frame">
                        <div class="relative">
                            <img src="{{ $item->image }}" alt="{{ $item->imageAlt }}" width="1000" height="746" class="aspect-[4/3] w-full object-cover" loading="lazy">
                            <span class="absolute bottom-3 left-3 inline-flex items-center gap-2 rounded-full bg-panel/90 px-3 py-1.5 text-[0.6875rem] font-medium text-ink backdrop-blur-sm">
                                <span class="text-faint">{{ $item->chipLabel }}</span>
                                <span class="font-semibold">{{ $item->chipDetail }}</span>
                            </span>
                        </div>
                    </div>
                    <h3 class="mt-7 font-display font-semibold text-ink display-card">{{ $item->title }}</h3>
                    <p class="mt-3 text-[0.9375rem] leading-relaxed text-muted">{{ $item->body }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
