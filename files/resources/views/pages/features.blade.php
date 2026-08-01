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

    <x-sections.split
        align="right"
        eyebrow="Handovers"
        heading="The conversation arrives already read."
        body="When Reply steps back, your agent does not inherit a wall of scrollback. They get two lines of summary, the order and account already open, and a suggested reply to accept, edit, or throw away."
        pointOne="Two-line summary and the full history behind it"
        pointTwo="A draft reply your agent owns, never sends automatically"
        pointThree="Confidence thresholds set per queue, not per workspace"
        ctaText="See how teams use it"
        ctaLink="/customers"
        image="/images/escalate.jpg"
        imageAlt="Painterly sage grasses bending in the wind"
        cardTitle="Handover"
        statOneFigure="3.1"
        statOneLabel="Escalations per day"
        statOneDelta="down from 11"
        statTwoFigure="82%"
        statTwoLabel="Drafts accepted"
        statTwoDelta="edited or sent as-is"
    />

    <x-sections.integrations :items="$integrations"/>

    <x-sections.security :items="$safeguards"/>

    <x-sections.cta
        heading="See it on your own tickets."
        body="Connect one channel and point Reply at your help centre. It will tell you what it could have resolved this week before you commit to anything."
        ctaText="Start free"
        secondaryText="Book a walkthrough"
    />
</x-layouts.main>
