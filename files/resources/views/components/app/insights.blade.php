@props([
    'title' => 'Insights',
    'meta' => 'Last 30 days',
    'rateFigure' => '92%',
    'rateLabel' => 'Resolved without an agent',
    'rateDelta' => '+12',
    'volumeFigure' => '8,420',
    'volumeLabel' => 'Conversations closed',
    'volumeDelta' => '+18',
    'breakdownLabel' => 'By topic',
    'topicOne' => 'Order status',
    'topicOnePercent' => '34',
    'topicTwo' => 'Returns and refunds',
    'topicTwoPercent' => '26',
    'topicThree' => 'Account and login',
    'topicThreePercent' => '18',
    'topicFour' => 'Billing',
    'topicFourPercent' => '12',
])
<!--
    The Insights screen. Bars are drawn with inline widths off each topic's
    percentage, so editing the number in the inspector actually moves the bar —
    nothing here is a picture of a chart.
-->
<div>
    <div class="flex items-center justify-between gap-3 border-b border-hairline px-4 py-3">
        <span class="font-display text-[0.875rem] font-semibold tracking-tight text-ink">{{ $title }}</span>
        <span class="rounded-full bg-raised/70 px-2.5 py-1 text-[0.6875rem] text-muted">{{ $meta }}</span>
    </div>

    <div class="grid grid-cols-2 gap-px bg-hairline">
        <div class="bg-panel/40 px-4 py-5">
            <p class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $rateLabel }}</p>
            <p class="mt-2 flex items-baseline gap-2">
                <span class="font-display text-[2rem] font-normal leading-none tracking-tight text-ink">{{ $rateFigure }}</span>
                <span class="text-[0.6875rem] font-semibold text-ink/70">{{ $rateDelta }}</span>
            </p>
        </div>
        <div class="bg-panel/40 px-4 py-5">
            <p class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $volumeLabel }}</p>
            <p class="mt-2 flex items-baseline gap-2">
                <span class="font-display text-[2rem] font-normal leading-none tracking-tight text-ink">{{ $volumeFigure }}</span>
                <span class="text-[0.6875rem] font-semibold text-ink/70">{{ $volumeDelta }}</span>
            </p>
        </div>
    </div>

    <div class="border-t border-hairline px-4 py-5">
        <p class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $breakdownLabel }}</p>
        <div class="mt-4 space-y-3.5">
            <x-app.topic-bar :label="$topicOne" :percent="$topicOnePercent"/>
            <x-app.topic-bar :label="$topicTwo" :percent="$topicTwoPercent"/>
            <x-app.topic-bar :label="$topicThree" :percent="$topicThreePercent"/>
            <x-app.topic-bar :label="$topicFour" :percent="$topicFourPercent"/>
        </div>
    </div>
</div>
