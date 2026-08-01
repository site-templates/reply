<x-layouts.main
    title="Customers"
    description="Support teams at Fernwood, Halcyon, and Northbank on what actually changed after they connected Reply."
    current="/customers"
>
    <x-sections.page-header
        eyebrow="Customers"
        heading="1,200 teams, and nobody added a seat."
        body="The numbers below are self-reported and unglamorous, which is the only kind worth printing. The stories behind them are more useful than the averages."
    />

    <x-sections.story-grid :items="$stories"/>

    <x-sections.metrics
        quote="Retention on the support team is the highest it has ever been. I would like to tell you that is a sophisticated management achievement. It is mostly that people have their weekends."
        name="Ines Okonkwo"
        role="Support Manager, Northbank"
        linkText="Read the Northbank story"
        linkUrl="/customer/northbank"
        :items="$stats"
    />

    <x-sections.quote-wall :items="$quotes"/>

    <x-sections.cta
        heading="Your version of this story."
        body="Most teams know within a week. Connect a channel, watch what it clears, and decide from there."
        ctaText="Start free"
        secondaryText="Talk to a customer"
    />
</x-layouts.main>
