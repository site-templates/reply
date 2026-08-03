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
    argument for it on the other.

    The copy column is padded with .gutter-left / .gutter-right (site.css) so
    its outer edge lands exactly on the site's 64rem measure — the same line
    every other section starts on — while the screen carries on to the viewport
    edge. That is what lets a row break the container without looking like it
    escaped it. Do not add a negative margin on top of the gutter; it pushes
    the glass panel itself off-screen.
-->
<section class="overflow-hidden py-16 md:py-24 lg:py-28">
    <div class="grid w-full items-center gap-12 lg:grid-cols-2 lg:gap-14">

        @if ($align == 'left')
            <div data-reveal class="px-5 sm:px-8 lg:order-1 lg:px-0">
                {{ $slot }}
            </div>
            <div data-reveal class="reveal-1 gutter-right px-5 sm:px-8 lg:order-2 lg:pl-0">
                <div class="max-w-xl">
                    <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
                </div>
            </div>
        @endif

        @if ($align != 'left')
            <div data-reveal class="reveal-1 gutter-left px-5 sm:px-8 lg:order-1 lg:pr-0">
                <div class="max-w-xl">
                    <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
                </div>
            </div>
            <div data-reveal class="px-5 sm:px-8 lg:order-2 lg:px-0">
                {{ $slot }}
            </div>
        @endif

    </div>
</section>
