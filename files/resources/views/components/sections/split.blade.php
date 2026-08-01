@props([
    'align' => 'left',
    'eyebrow' => 'Why Reply',
    'heading' => 'It gets sharper with every ticket it sees.',
    'body' => 'Every conversation your team resolves becomes a worked example. Reply picks up the edge cases, the exceptions, and the phrases your customers actually use, so the answers get more accurate the longer it runs.',
    'pointOne' => 'Learns from resolved tickets, not just documentation',
    'pointTwo' => 'Flags the questions your help centre cannot answer',
    'pointThree' => '',
    'ctaText' => 'Read a customer story',
    'ctaLink' => '/customers',
    'showCta' => '1',
    'image' => '/images/learn.jpg',
    'imageAlt' => 'Painterly wild grasses bending in the wind against a soft teal sky',
    'showCard' => '1',
    'cardTitle' => 'Performance',
    'statOneFigure' => '92%',
    'statOneLabel' => 'Resolution rate',
    'statOneDelta' => '+12% this quarter',
    'statTwoFigure' => '8,420',
    'statTwoLabel' => 'Tickets resolved',
    'statTwoDelta' => '+18% this quarter',
])
<!--
    The editorial feature row. The painting runs off the page edge on the side
    it sits on, which is what keeps the page from turning into a column of
    identical centred cards, and a small stat card floats over its inner
    corner. Alternate `align` between instances so the rhythm reads.
-->
<section class="overflow-hidden py-16 md:py-24 lg:py-28">
    <div class="mx-auto grid w-full max-w-[100rem] items-center gap-12 lg:grid-cols-2 lg:gap-16">

        @if ($align == 'left')
            <div data-reveal class="relative px-5 sm:px-8 lg:order-1 lg:px-0">
                <div class="relative overflow-hidden rounded-3xl lg:rounded-l-none lg:rounded-r-[2rem]">
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="929" class="aspect-[4/3] w-full object-cover lg:aspect-[10/9]" loading="lazy">
                </div>
                @if ($showCard)
                    <div class="absolute bottom-9 left-9 right-9 max-w-xs rounded-2xl border border-line bg-panel p-4 shadow-xl shadow-ink/10 sm:left-14 sm:right-auto sm:w-72">
                        <x-stat-card :title="$cardTitle" :oneFigure="$statOneFigure" :oneLabel="$statOneLabel" :oneDelta="$statOneDelta" :twoFigure="$statTwoFigure" :twoLabel="$statTwoLabel" :twoDelta="$statTwoDelta"/>
                    </div>
                @endif
            </div>
            <div data-reveal class="reveal-1 max-w-xl px-5 sm:px-8 lg:order-2 lg:px-12 xl:px-16">
                <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
            </div>
        @endif

        @if ($align != 'left')
            <div data-reveal class="reveal-1 max-w-xl px-5 sm:px-8 lg:order-1 lg:ml-auto lg:px-12 xl:px-16">
                <x-split-copy :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta"/>
            </div>
            <div data-reveal class="relative px-5 sm:px-8 lg:order-2 lg:px-0">
                <div class="relative overflow-hidden rounded-3xl lg:rounded-l-[2rem] lg:rounded-r-none">
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="929" class="aspect-[4/3] w-full object-cover lg:aspect-[10/9]" loading="lazy">
                </div>
                @if ($showCard)
                    <div class="absolute bottom-9 left-9 right-9 max-w-xs rounded-2xl border border-line bg-panel p-4 shadow-xl shadow-ink/10 sm:left-auto sm:right-14 sm:w-72">
                        <x-stat-card :title="$cardTitle" :oneFigure="$statOneFigure" :oneLabel="$statOneLabel" :oneDelta="$statOneDelta" :twoFigure="$statTwoFigure" :twoLabel="$statTwoLabel" :twoDelta="$statTwoDelta"/>
                    </div>
                @endif
            </div>
        @endif

    </div>
</section>
