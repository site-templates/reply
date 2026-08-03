@props([
    'align' => 'right',
    'eyebrow' => 'Your voice',
    'heading' => 'It sounds like whoever wrote your help centre.',
    'body' => 'Reply learns tone from the replies your team has already sent, not from a style guide. The result reads like your best agent on a good day — which is exactly who it learned from.',
    'pointOne' => 'Trained on your own replies, not a generic corpus',
    'pointTwo' => 'Every answer cites the document behind it',
    'pointThree' => 'Flag a reply and it adjusts across the workspace',
    'ctaText' => 'See every feature',
    'ctaLink' => '/features',
    'showCta' => '1',
    'image' => '/images/tone.jpg',
    'imageAlt' => 'Pale wildflowers in soft evening light',
    'appTitle' => 'Draft reply',
    'appMeta' => 'Tone matched',
    'customerName' => 'Priya Raman',
    'customerLine' => 'Hi! Is the walnut finish still available in the 180cm?',
    'draft' => "Hi Priya — good timing. The walnut is back in the 180cm as of Tuesday, and it's the last run before we switch to the oiled finish in the autumn. Want me to hold one for you for 48 hours?",
    'toneLabel' => 'Voice',
    'toneValue' => 'Matches your help centre',
    'sourceLabel' => 'Cited',
    'sourceOne' => 'Finishes and materials',
    'sourceTwo' => 'Stock: SKU 4471',
    'primaryAction' => 'Send',
    'secondaryAction' => 'Rewrite',
])
<x-showcase-row :align="$align" :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta">
    <x-app-stage :image="$image" :imageAlt="$imageAlt">
        <x-app.composer
            :title="$appTitle" :meta="$appMeta"
            :customerName="$customerName" :customerLine="$customerLine" :draft="$draft"
            :toneLabel="$toneLabel" :toneValue="$toneValue"
            :sourceLabel="$sourceLabel" :sourceOne="$sourceOne" :sourceTwo="$sourceTwo"
            :primaryAction="$primaryAction" :secondaryAction="$secondaryAction"/>
    </x-app-stage>
</x-showcase-row>
