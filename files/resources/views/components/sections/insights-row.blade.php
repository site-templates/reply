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
    'image' => '/images/insight.jpg',
    'imageAlt' => 'Morning sun through tall meadow grasses',
    'appTitle' => 'Insights',
    'appMeta' => 'Last 30 days',
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
<x-showcase-row :align="$align" :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta">
    <x-app-stage :image="$image" :imageAlt="$imageAlt">
        <x-app.insights
            :title="$appTitle" :meta="$appMeta"
            :rateFigure="$rateFigure" :rateLabel="$rateLabel" :rateDelta="$rateDelta"
            :volumeFigure="$volumeFigure" :volumeLabel="$volumeLabel" :volumeDelta="$volumeDelta"
            :breakdownLabel="$breakdownLabel"
            :topicOne="$topicOne" :topicOnePercent="$topicOnePercent"
            :topicTwo="$topicTwo" :topicTwoPercent="$topicTwoPercent"
            :topicThree="$topicThree" :topicThreePercent="$topicThreePercent"
            :topicFour="$topicFour" :topicFourPercent="$topicFourPercent"/>
    </x-app-stage>
</x-showcase-row>
