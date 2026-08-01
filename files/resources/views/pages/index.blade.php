<x-layouts.main
    title="AI help desk"
    description="Reply is a help desk with an AI teammate built in. It resolves routine customer questions the moment they arrive, and hands your team the ones that need a person."
    current="/"
>
    <x-sections.hero :navItems="$inboxNav" :threads="$inboxThreads" :messages="$inboxMessages"/>

    <x-sections.logos :items="$logos"/>

    <x-sections.capabilities :items="$capabilities"/>

    <x-sections.ticker/>

    <x-sections.split align="left"/>

    <x-sections.split
        align="right"
        eyebrow="Your voice"
        heading="It sounds like whoever wrote your help centre."
        body="Reply learns tone from the replies your team has already sent, not from a style guide. The result reads like your best agent on a good day — which is exactly who it learned from."
        pointOne="Trained on your own replies, not a generic corpus"
        pointTwo="Every answer cites the document behind it"
        pointThree="Flag a reply and it adjusts across the workspace"
        ctaText="See every feature"
        ctaLink="/features"
        image="/images/voice.jpg"
        imageAlt="Close-up painterly cream and blush cosmos petals"
        cardTitle="Tone check"
        statOneFigure="96%"
        statOneLabel="On-brand score"
        statOneDelta="reviewed weekly"
        statTwoFigure="0"
        statTwoLabel="Off-voice flags"
        statTwoDelta="last 30 days"
    />

    <x-sections.metrics :items="$stats"/>

    <x-sections.faq :items="$faqs"/>

    <x-sections.cta/>
</x-layouts.main>
