<x-layouts.main
    title="Changelog"
    description="What shipped in Reply, most recent first — stale-answer alerts, WhatsApp Business, per-queue confidence thresholds, and draft handovers."
    current="/changelog"
>
    <x-sections.page-header
        eyebrow="Changelog"
        heading="What shipped, and what it changed."
        body="Reply updates continuously; this is the version of that worth reading. Anything that alters how answers are generated gets its own entry."
    />

    <x-sections.changelog :items="$releases"/>

    <x-sections.cta
        heading="Ship this to your queue too."
        body="Everything on this page is already live on every plan, including the free one."
        ctaText="Start free"
        secondaryText="See the features"
        secondaryLink="/features"
        footnote="No migration, no re-training, no downtime."
    />
</x-layouts.main>
