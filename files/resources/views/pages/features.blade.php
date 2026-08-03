<x-layouts.main
    title="Features"
    description="Triage, knowledge, escalation, reporting, and every channel — what Reply actually does once it is connected to your inbox."
    current="/features"
>
    <x-sections.page-header
        eyebrow="Features"
        heading="Everything Reply does, in one quiet inbox."
        body="No modules to buy, no add-ons. Connect a channel and the whole thing is on — the triage, the knowledge, the handovers, and the numbers to prove it worked."
        showCta="1"
        ctaText="Start free"
        ctaLink="/pricing"
    />

    <x-sections.use-cases :items="$useCases"/>

    <x-sections.handover-row/>

    <x-sections.integrations :items="$integrations"/>

    <x-sections.security :items="$safeguards"/>

    <x-sections.cta
        heading="See it on your own tickets."
        body="Connect one channel and point Reply at your help centre. It will tell you what it could have resolved this week before you commit to anything."
        ctaText="Start free"
        secondaryText="Book a walkthrough"
    />
</x-layouts.main>
