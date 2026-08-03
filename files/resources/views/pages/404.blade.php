<x-layouts.main
    title="Page not found"
    description="That page has moved or never existed."
    current="/"
>
    <section class="mx-auto flex min-h-[70vh] w-full max-w-5xl flex-col items-start justify-center px-5 py-32 sm:px-8">
        <p class="eyebrow text-muted">Error 404</p>
        <h1 class="mt-5 max-w-2xl font-display font-normal text-ink display-hero">This one we could not answer.</h1>
        <p class="mt-6 max-w-md text-muted lede">The page has moved or never existed. The inbox, at least, is still where you left it.</p>

        <div class="mt-9 flex flex-wrap items-center gap-3">
            <a href="/" class="inline-flex min-h-12 items-center rounded-full bg-accent px-7 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">Back to the homepage</a>
            <a href="/features" class="inline-flex min-h-12 items-center rounded-full border border-line px-7 text-[0.9375rem] font-semibold text-ink transition-colors duration-200 hover:border-ink/25 hover:bg-panel">See the features</a>
        </div>
    </section>
</x-layouts.main>
