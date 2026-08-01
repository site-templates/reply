@props([
    'eyebrow' => 'Connections',
    'heading' => 'It plugs into the stack you already argue about.',
    'body' => 'Reply reads the order, the charge, and the account from wherever they live, so an answer can be specific instead of apologetic.',
    'footnote' => 'Missing something? Everything here is also available over a documented REST API.',
    'items' => [],
])
<!--
    A dense hairline grid — cells divided by borders rather than gaps, so it
    reads as one plate instead of twelve floating cards. No fake vendor logos:
    a wall of mismatched grey wordmarks is the fastest way to cheapen a page.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">

        <div class="max-w-2xl">
            <p data-reveal class="eyebrow text-muted">{{ $eyebrow }}</p>
            <h2 data-reveal class="reveal-1 mt-5 font-display font-normal text-ink display-section">{{ $heading }}</h2>
            <p data-reveal class="reveal-2 mt-5 max-w-lg text-muted lede">{{ $body }}</p>
        </div>

        <div data-reveal class="reveal-1 mt-14 overflow-hidden rounded-2xl border border-line md:mt-16">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($items as $item)
                    <div class="border-b border-r border-line p-6 transition-colors duration-200 last:border-b-0 hover:bg-panel sm:p-7">
                        <div class="flex items-baseline gap-3">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-ink">{{ $item->name }}</h3>
                            <span class="text-[0.6875rem] font-semibold uppercase tracking-[0.1em] text-faint">{{ $item->category }}</span>
                        </div>
                        <p class="mt-2 text-[0.875rem] leading-relaxed text-muted">{{ $item->note }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <p data-reveal class="reveal-2 mt-6 text-sm text-faint">{{ $footnote }}</p>

    </div>
</section>
