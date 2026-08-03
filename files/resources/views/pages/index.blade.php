<x-layouts.main
    title="AI help desk"
    description="Reply is a help desk with an AI teammate built in. It resolves routine customer questions the moment they arrive, and hands your team the ones that need a person."
    current="/"
>
    <x-sections.hero :navItems="$inboxNav" :threads="$inboxThreads" :messages="$inboxMessages"/>

    <x-sections.logos :items="$logos"/>

    <x-sections.capabilities :items="$capabilities"/>

    <x-sections.ticker/>

    <x-sections.insights-row/>

    <x-sections.composer-row/>

    <x-sections.metrics :items="$stats"/>

    <x-sections.faq :items="$faqs"/>

    <x-sections.cta/>
</x-layouts.main>
