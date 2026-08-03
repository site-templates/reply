@props([
    'align' => 'right',
    'eyebrow' => 'Handovers',
    'heading' => 'The conversation arrives already read.',
    'body' => 'When Reply steps back, your agent does not inherit a wall of scrollback. They get the decision — what happened, why it stopped, and who owns it — with the whole thread one click away.',
    'pointOne' => 'A summary and the reason it escalated',
    'pointTwo' => 'A draft reply your agent owns, never sent automatically',
    'pointThree' => 'Confidence thresholds set per queue, not per workspace',
    'ctaText' => 'See how teams use it',
    'ctaLink' => '/customers',
    'showCta' => '1',
    'image' => '/images/escalate.jpg',
    'imageAlt' => 'Backlit barley bending in the wind at sunset',
    'appTitle' => 'Handover',
    'appMeta' => 'Below threshold',
    'customerInitials' => 'AL',
    'customerName' => 'Anika Lubin',
    'customerMeta' => 'Order #2847 · third message',
    'summaryLabel' => 'What happened',
    'summary' => 'Refund requested nine days outside the returns window. Customer has two prior orders and no previous claims.',
    'reasonLabel' => 'Why Reply stopped',
    'reason' => 'Policy exception — needs a person',
    'confidenceLabel' => 'Confidence',
    'confidenceValue' => '41%',
    'assignedLabel' => 'Assigned to',
    'assignedInitials' => 'ME',
    'assignedName' => 'Maya Ellis',
    'assignedRole' => 'Returns queue',
])
<x-showcase-row :align="$align" :eyebrow="$eyebrow" :heading="$heading" :body="$body" :pointOne="$pointOne" :pointTwo="$pointTwo" :pointThree="$pointThree" :ctaText="$ctaText" :ctaLink="$ctaLink" :showCta="$showCta">
    <x-app-stage :image="$image" :imageAlt="$imageAlt">
        <x-app.handover
            :title="$appTitle" :meta="$appMeta"
            :customerInitials="$customerInitials" :customerName="$customerName" :customerMeta="$customerMeta"
            :summaryLabel="$summaryLabel" :summary="$summary"
            :reasonLabel="$reasonLabel" :reason="$reason"
            :confidenceLabel="$confidenceLabel" :confidenceValue="$confidenceValue"
            :assignedLabel="$assignedLabel" :assignedInitials="$assignedInitials" :assignedName="$assignedName" :assignedRole="$assignedRole"/>
    </x-app-stage>
</x-showcase-row>
