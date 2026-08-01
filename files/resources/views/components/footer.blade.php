@props([
    'brand' => 'Reply',
    'blurb' => 'A help desk with an AI teammate built in. Answers the routine questions the moment they arrive, and hands you the ones that need a person.',
    'productLabel' => 'Product',
    'product' => [],
    'companyLabel' => 'Company',
    'company' => [],
    'socialLabel' => 'Elsewhere',
    'social' => [],
    'note' => '© 2026 Reply. Built for people who would rather be doing something else.',
])
<footer class="border-t border-line bg-canvas">
    <div class="mx-auto w-full max-w-[78rem] px-5 py-16 sm:px-8 md:py-20 lg:px-12">

        <div class="grid gap-12 md:grid-cols-[minmax(0,1.4fr)_repeat(3,minmax(0,1fr))] md:gap-8">

            <div class="max-w-sm">
                <a href="/" class="inline-flex items-center gap-2.5 text-ink transition-opacity duration-200 hover:opacity-70" aria-label="{{ $brand }} — homepage">
                    <svg viewBox="0 0 32 32" class="size-[1.5rem] shrink-0" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5ZM11 15A1.5 1.5 0 1 1 8 15A1.5 1.5 0 1 1 11 15ZM17 15A2 2 0 1 1 13 15A2 2 0 1 1 17 15ZM24 15A2.5 2.5 0 1 1 19 15A2.5 2.5 0 1 1 24 15Z"/></svg>
                    <span class="font-display text-xl font-semibold tracking-tight">{{ $brand }}</span>
                </a>
                <p class="mt-5 text-[0.9375rem] leading-relaxed text-muted">{{ $blurb }}</p>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $productLabel }}</p>
                <ul class="mt-5 space-y-3">
                    @foreach ($product as $link)
                        <li><a href="{{ $link->url }}" class="text-[0.9375rem] text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $companyLabel }}</p>
                <ul class="mt-5 space-y-3">
                    @foreach ($company as $link)
                        <li><a href="{{ $link->url }}" class="text-[0.9375rem] text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.13em] text-faint">{{ $socialLabel }}</p>
                <ul class="mt-5 space-y-3">
                    @foreach ($social as $link)
                        <li><a href="{{ $link->url }}" class="text-[0.9375rem] text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>

        <p class="mt-16 border-t border-line pt-8 text-sm text-faint">{{ $note }}</p>

    </div>
</footer>
