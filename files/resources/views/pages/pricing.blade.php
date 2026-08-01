<x-layouts.main
    title="Pricing"
    description="Free on one channel, $49 a month for a full support team, custom above that. Billed on resolutions, never on seats."
    current="/pricing"
>
    <x-sections.page-header
        align="center"
        eyebrow="Pricing"
        heading="Priced on work done, not seats filled."
        body="You pay for the conversations Reply closes on its own. Invite the whole company — it will not cost you anything extra."
    />

    <x-sections.pricing :items="$plans"/>

    <x-sections.compare :items="$compare"/>

    <x-sections.faq
        eyebrow="Billing"
        heading="The money questions, answered plainly."
        contactText="Need a purchase order, an invoice, or a security review first?"
        contactLinkText="Talk to us"
        :items="$pricingFaqs"
    />

    <x-sections.cta
        heading="Start on the free plan. Stay if it works."
        body="One channel, a hundred resolutions a month, forever. No card, and nobody will call you."
        ctaText="Start free"
        showSecondary="0"
        footnote="Upgrade or cancel in one click. Nothing is re-imported."
    />
</x-layouts.main>
