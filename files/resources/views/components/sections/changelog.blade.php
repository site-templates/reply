@props([
    'subscribeText' => 'Every release, in your inbox, once a month.',
    'subscribeLinkText' => 'Subscribe',
    'subscribeLink' => 'mailto:hello@reply.support',
    'showSubscribe' => '1',
    'items' => [],
])
<!--
    A dated left-rail timeline. The version and date stick to the left column
    on wide screens and the entry runs beside them, so the page scans as a
    history rather than a stack of cards.
-->
<section class="pb-20 pt-14 md:pb-28 md:pt-16 lg:pb-32 lg:pt-20">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        @if ($showSubscribe)
            <p data-reveal class="mb-14 text-[0.9375rem] text-muted md:mb-16">
                {{ $subscribeText }}
                <a href="{{ $subscribeLink }}" class="font-medium text-ink underline decoration-line decoration-2 underline-offset-4 transition-colors duration-200 hover:decoration-ink">{{ $subscribeLinkText }}</a>
            </p>
        @endif

        <div class="border-t border-line">
            @foreach ($items as $release)
                <article data-reveal class="grid gap-4 border-b border-line py-10 md:grid-cols-[12rem_minmax(0,1fr)] md:gap-12 md:py-12">
                    <div class="flex items-baseline gap-3 md:block">
                        <p class="font-display text-lg font-semibold tracking-tight text-ink">{{ $release->version }}</p>
                        <p class="text-[0.8125rem] text-faint md:mt-1.5">{{ $release->dateFormatted }}</p>
                    </div>
                    <div class="max-w-2xl">
                        <div class="flex flex-wrap items-center gap-3">
                            <h2 class="font-display text-xl font-semibold tracking-tight text-ink sm:text-[1.375rem]">{{ $release->title }}</h2>
                            <span class="rounded-full bg-raised px-2.5 py-1 text-[0.625rem] font-semibold uppercase tracking-[0.1em] text-muted">{{ $release->tag }}</span>
                        </div>
                        <p class="mt-3 text-[0.9375rem] leading-relaxed text-muted">{{ $release->body }}</p>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
