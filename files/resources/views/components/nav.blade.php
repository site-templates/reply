@props([
    'brand' => 'Reply',
    'links' => [],
    'current' => '/',
    'signInText' => 'Sign in',
    'signInLink' => 'mailto:hello@reply.support',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
])
<!--
    The header. Flat and transparent over the hero, then it takes a hairline
    and a wash of canvas once the page scrolls (see #header in site.css). Below
    the medium breakpoint the links fold into a panel that slides out of the
    header; the toggle lives in public/js/main.js.
-->
<header id="header" class="fixed inset-x-0 top-0 z-50">
    <div class="mx-auto flex h-[4.5rem] w-full max-w-[78rem] items-center justify-between gap-6 px-5 sm:px-8 lg:px-12">

        <a href="/" class="flex items-center gap-2.5 text-ink transition-opacity duration-200 hover:opacity-70" aria-label="{{ $brand }} — homepage">
            <svg viewBox="0 0 32 32" class="size-[1.625rem] shrink-0" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5ZM11 15A1.5 1.5 0 1 1 8 15A1.5 1.5 0 1 1 11 15ZM17 15A2 2 0 1 1 13 15A2 2 0 1 1 17 15ZM24 15A2.5 2.5 0 1 1 19 15A2.5 2.5 0 1 1 24 15Z"/></svg>
            <span class="font-display text-[1.375rem] font-semibold tracking-tight">{{ $brand }}</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex" aria-label="Main">
            @foreach ($links as $link)
                @if ($link->url == $current)
                    <a href="{{ $link->url }}" data-current aria-current="page" class="nav-link text-[0.9375rem] font-medium text-ink">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                    <a href="{{ $link->url }}" class="nav-link text-[0.9375rem] font-medium text-muted hover:text-ink">{{ $link->text }}</a>
                @endif
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <a href="{{ $signInLink }}" class="hidden rounded-full px-4 py-2.5 text-[0.9375rem] font-medium text-muted transition-colors duration-200 hover:text-ink sm:inline-flex">{{ $signInText }}</a>
            <a href="{{ $ctaLink }}" class="inline-flex min-h-11 items-center rounded-full bg-accent px-5 py-2.5 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>

            <button
                type="button"
                data-menu-button
                aria-expanded="false"
                aria-controls="site-menu"
                aria-label="Open the menu"
                class="ml-1 inline-flex size-11 items-center justify-center rounded-full text-ink transition-colors duration-200 hover:bg-raised md:hidden"
            >
                <span class="menu-glyph" aria-hidden="true">
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                </span>
            </button>
        </div>

    </div>

    <div id="site-menu" data-menu-panel aria-hidden="true" class="absolute inset-x-0 top-full mx-3 rounded-2xl border border-line bg-panel p-3 shadow-xl shadow-ink/10 md:hidden">
        <nav class="flex flex-col" aria-label="Main, mobile">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-xl px-4 py-3.5 font-display text-lg font-medium text-ink transition-colors duration-200 hover:bg-raised">{{ $link->text }}</a>
            @endforeach
            <a href="{{ $signInLink }}" class="rounded-xl px-4 py-3.5 font-display text-lg font-medium text-muted transition-colors duration-200 hover:bg-raised">{{ $signInText }}</a>
        </nav>
    </div>
</header>
