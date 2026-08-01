@props([
    'quote' => 'We stopped hiring for the queue. Reply cleared the overnight backlog in the first week, and my team spends their mornings on the conversations that actually need them.',
    'name' => 'Maya Ellis',
    'role' => 'Head of Support, Fernwood',
    'linkText' => 'Read the Fernwood story',
    'linkUrl' => '/customer/fernwood',
    'showLink' => '1',
    'items' => [],
])
<!--
    One large pull quote set in the display face, then three figures on a
    hairline rule beneath it. Deliberately not a card grid — the rules do the
    dividing, so the section stays quiet next to the ink band above it.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">

        <figure class="mx-auto max-w-4xl text-center">
            <blockquote data-reveal class="font-display text-[1.75rem] font-normal leading-[1.28] tracking-[-0.015em] text-ink sm:text-[2.125rem] lg:text-[2.5rem]">“{{ $quote }}”</blockquote>
            <figcaption data-reveal class="reveal-1 mt-8 flex flex-wrap items-center justify-center gap-x-3 gap-y-1 text-[0.9375rem]">
                <span class="font-semibold text-ink">{{ $name }}</span>
                <span class="text-faint" aria-hidden="true">·</span>
                <span class="text-muted">{{ $role }}</span>
            </figcaption>
            @if ($showLink)
                <p data-reveal class="reveal-2 mt-5">
                    <a href="{{ $linkUrl }}" class="group inline-flex min-h-11 items-center gap-2 text-[0.9375rem] font-medium text-muted transition-colors duration-200 hover:text-ink">
                        {{ $linkText }}
                        <svg viewBox="0 0 16 16" class="size-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
                </p>
            @endif
        </figure>

        <dl class="mt-16 grid gap-10 border-t border-line pt-12 sm:grid-cols-3 sm:gap-8 md:mt-20">
            @foreach ($items as $item)
                <div data-reveal class="reveal-{{ $loop->iteration }} text-center sm:text-left">
                    <dt class="sr-only">{{ $item->label }}</dt>
                    <dd>
                        <span class="block font-display font-normal text-ink display-figure">{{ $item->figure }}</span>
                        <span class="mt-3 block max-w-56 text-[0.9375rem] leading-snug text-ink/80 max-sm:mx-auto">{{ $item->label }}</span>
                        <span class="mt-2 block text-[0.8125rem] text-faint">{{ $item->note }}</span>
                    </dd>
                </div>
            @endforeach
        </dl>

    </div>
</section>
