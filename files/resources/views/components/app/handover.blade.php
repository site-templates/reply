@props([
    'title' => 'Handover',
    'meta' => 'Below threshold',
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
<!--
    The Handover screen: what Reply passes to a person when it decides not to
    answer. The point of the shot is that the agent inherits a decision, not a
    transcript, so the summary and the reason lead.
-->
<div>
    <div class="flex items-center justify-between gap-3 border-b border-hairline px-4 py-3">
        <span class="font-display text-[0.875rem] font-semibold tracking-tight text-ink">{{ $title }}</span>
        <span class="rounded-full bg-raised/70 px-2.5 py-1 text-[0.6875rem] text-muted">{{ $meta }}</span>
    </div>

    <div class="flex items-center gap-2.5 border-b border-hairline px-4 py-3.5">
        <span class="flex size-7 shrink-0 items-center justify-center rounded-full bg-raised text-[0.625rem] font-semibold text-muted">{{ $customerInitials }}</span>
        <span class="min-w-0">
            <span class="block truncate text-[0.8125rem] font-semibold text-ink">{{ $customerName }}</span>
            <span class="block truncate text-[0.6875rem] text-faint">{{ $customerMeta }}</span>
        </span>
    </div>

    <div class="space-y-4 px-4 py-4">
        <div>
            <p class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $summaryLabel }}</p>
            <p class="mt-1.5 text-[0.8125rem] leading-relaxed text-ink/85">{{ $summary }}</p>
        </div>

        <div class="grid grid-cols-2 gap-3">
            <div class="rounded-xl bg-raised/60 px-3 py-2.5">
                <p class="text-[0.625rem] uppercase tracking-[0.1em] text-faint">{{ $reasonLabel }}</p>
                <p class="mt-1 text-[0.75rem] leading-snug text-ink">{{ $reason }}</p>
            </div>
            <div class="rounded-xl bg-raised/60 px-3 py-2.5">
                <p class="text-[0.625rem] uppercase tracking-[0.1em] text-faint">{{ $confidenceLabel }}</p>
                <p class="mt-1 font-display text-lg font-semibold leading-none tracking-tight text-ink">{{ $confidenceValue }}</p>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-2.5 border-t border-hairline px-4 py-3">
        <span class="text-[0.6875rem] uppercase tracking-[0.11em] text-faint">{{ $assignedLabel }}</span>
        <span class="flex size-6 shrink-0 items-center justify-center rounded-full bg-accent text-[0.5625rem] font-semibold text-accent-ink">{{ $assignedInitials }}</span>
        <span class="text-[0.75rem] font-medium text-ink">{{ $assignedName }}</span>
        <span class="text-[0.6875rem] text-faint">{{ $assignedRole }}</span>
    </div>
</div>
