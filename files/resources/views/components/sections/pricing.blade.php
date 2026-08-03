@props([
    'monthlyLabel' => 'Monthly',
    'yearlyLabel' => 'Yearly',
    'saveLabel' => 'save 15%',
    'showToggle' => '1',
    'includesLabel' => 'Includes',
    'featureImage' => '/images/bloom.jpg',
    'featureImageAlt' => 'White cosmos blooms rising through soft green stems',
    'items' => [],
])
<!--
    Three plans. The featured one is the only card carrying a photograph — it
    bleeds up the right edge behind the feature list, which is what marks it
    out instead of a coloured border and a shouty badge.

    The billing toggle is one checkbox and a :has() rule in site.css, so it
    works with JavaScript switched off.
-->
<section class="pricing py-16 md:py-20 lg:py-24">
    <div class="mx-auto w-full max-w-[78rem] px-5 sm:px-8 lg:px-12">

        @if ($showToggle)
            <div class="flex justify-center">
                <input type="checkbox" id="term" class="peer sr-only">
                <label for="term" class="inline-flex cursor-pointer items-center gap-3 rounded-full border border-line bg-panel px-4 py-2.5 text-[0.9375rem] peer-focus-visible:outline peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-[--ring]">
                    <span class="font-medium text-ink">{{ $monthlyLabel }}</span>
                    <span class="relative inline-flex h-6 w-12 shrink-0 items-center rounded-full bg-raised" aria-hidden="true">
                        <span class="term-knob absolute left-0.5 size-5 rounded-full bg-accent"></span>
                    </span>
                    <span class="font-medium text-ink">{{ $yearlyLabel }}</span>
                    <span class="rounded-full bg-raised px-2.5 py-1 text-[0.6875rem] font-semibold uppercase tracking-[0.08em] text-muted">{{ $saveLabel }}</span>
                </label>
            </div>
        @endif

        <div class="mt-12 grid gap-6 md:mt-14 lg:grid-cols-3">
            @foreach ($items as $plan)
                @if ($plan->featured)
                    <div data-reveal class="reveal-{{ $loop->iteration }} relative isolate flex flex-col overflow-hidden rounded-3xl border border-ink/25 bg-panel p-7 sm:p-8">
                        <!-- The photograph is a wash along the card's foot, faded out
                             upward with a mask so it never collides with the type. -->
                        <img src="{{ $featureImage }}" alt="{{ $featureImageAlt }}" width="820" height="1235" class="pointer-events-none absolute inset-x-0 bottom-0 -z-10 h-56 w-full object-cover opacity-40 [-webkit-mask-image:linear-gradient(to_top,black,transparent)] [mask-image:linear-gradient(to_top,black,transparent)]" loading="lazy">
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $plan->name }}</h3>
                            <span class="rounded-full bg-accent px-3 py-1 text-[0.6875rem] font-semibold uppercase tracking-[0.08em] text-accent-ink">{{ $plan->ribbon }}</span>
                        </div>
                        <x-plan-body :plan="$plan" :includesLabel="$includesLabel"/>
                        <a href="{{ $plan->ctaLink }}" class="mt-8 flex min-h-12 items-center justify-center rounded-full bg-accent px-6 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $plan->ctaText }}</a>
                    </div>
                @endif

                @if (! $plan->featured)
                    <div data-reveal class="reveal-{{ $loop->iteration }} lift flex flex-col rounded-3xl border border-line bg-canvas p-7 sm:p-8">
                        <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $plan->name }}</h3>
                        <x-plan-body :plan="$plan" :includesLabel="$includesLabel"/>
                        <a href="{{ $plan->ctaLink }}" class="mt-8 flex min-h-12 items-center justify-center rounded-full border border-line px-6 text-[0.9375rem] font-semibold text-ink transition-colors duration-200 hover:border-ink/25 hover:bg-panel">{{ $plan->ctaText }}</a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</section>
