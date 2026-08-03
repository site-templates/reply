@props([
    'align' => 'left',
    'eyebrow' => '',
    'heading' => '',
    'body' => '',
    'pointOne' => '',
    'pointTwo' => '',
    'pointThree' => '',
    'ctaText' => '',
    'ctaLink' => '/',
    'showCta' => '1',
])
<!--
    The editorial product row: a real screen of the software on one side, the
    argument for it on the other. The grid drops its gutter at lg, so the stage
    already runs to the page edge — do not add a negative margin on top of
    that, it pushes the glass panel itself off-screen.
-->
<section class="overflow-hidden py-16 md:py-24 lg:py-28">
    <div class="mx-auto grid w-full max-w-[100rem] items-center gap-12 lg:grid-cols-2 lg:gap-16">

        @if ($align == 'left')
            <div data-reveal class="px-5 sm:px-8 lg:order-1 lg:px-0">
                {{ $slot }}
            </div>
            <div data-reveal class="reveal-1 max-w-xl px-5 sm:px-8 lg:order-2 lg:px-12 xl:px-16">
                <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
            </div>
        @endif

        @if ($align != 'left')
            <div data-reveal class="reveal-1 max-w-xl px-5 sm:px-8 lg:order-1 lg:ml-auto lg:px-12 xl:px-16">
                <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
            </div>
            <div data-reveal class="px-5 sm:px-8 lg:order-2 lg:px-0">
                {{ $slot }}
            </div>
        @endif

    </div>
</section>
