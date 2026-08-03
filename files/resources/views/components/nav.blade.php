@props([
    'brand' => 'Reply',
    'links' => [],
    'current' => '/',
    'statusText' => 'Answering now',
    'showStatus' => '1',
    'signInText' => 'Sign in',
    'signInLink' => 'mailto:hello@reply.support',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
])
<!--
    THE HEADER — a floating glass capsule rather than a bar pinned to the top
    edge. It sits off the top of the page, tightens as you scroll (see #header
    in site.css), and carries a live status chip, because a support product's
    header should look like something is happening.

    The wordmark's three dots run a typing sequence on hover: the mark IS a
    speech bubble mid-reply, so the animation is the logo explaining itself.
-->
<header id="header" class="fixed inset-x-0 top-0 z-50 px-3 pt-3 sm:px-5 sm:pt-4">
    <div class="header-shell mx-auto flex h-[3.75rem] w-full max-w-[76rem] items-center justify-between gap-6 rounded-full px-3 pl-5 sm:h-16 sm:pl-6 sm:pr-3">

        <a href="/" class="brand group flex items-center gap-2.5 text-ink" aria-label="{{ $brand }} — homepage">
            <svg viewBox="0 0 32 32" class="size-[1.5rem] shrink-0" fill="currentColor" aria-hidden="true">
                <path d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5Z"/>
                <circle class="brand-dot" cx="9.5" cy="15" r="1.5" fill="var(--color-canvas)"/>
                <circle class="brand-dot" cx="15" cy="15" r="2" fill="var(--color-canvas)"/>
                <circle class="brand-dot" cx="21.5" cy="15" r="2.5" fill="var(--color-canvas)"/>
            </svg>
            <span class="font-display text-[1.3125rem] font-semibold tracking-tight">{{ $brand }}</span>
        </a>

        <nav class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-7 md:flex" aria-label="Main">
            @foreach ($links as $link)
                @if ($link->url == $current)
                    <a href="{{ $link->url }}" data-current aria-current="page" class="nav-link text-[0.9375rem] font-medium text-ink">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                    <a href="{{ $link->url }}" class="nav-link text-[0.9375rem] font-medium text-muted hover:text-ink">{{ $link->text }}</a>
                @endif
            @endforeach
        </nav>

        <div class="flex items-center gap-1.5">
            @if ($showStatus)
                <span class="mr-1.5 hidden items-center gap-2 rounded-full border border-line px-3 py-1.5 text-[0.75rem] font-medium text-muted lg:inline-flex">
                    <span class="status-pip" aria-hidden="true"></span>
                    {{ $statusText }}
                </span>
            @endif

            <a href="{{ $signInLink }}" class="hidden rounded-full px-4 py-2.5 text-[0.9375rem] font-medium text-muted transition-colors duration-200 hover:text-ink sm:inline-flex">{{ $signInText }}</a>
            <a href="{{ $ctaLink }}" class="inline-flex min-h-11 items-center rounded-full bg-accent px-5 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>

            <button
                type="button"
                data-menu-button
                aria-expanded="false"
                aria-controls="site-menu"
                aria-label="Open the menu"
                class="inline-flex size-11 items-center justify-center rounded-full text-ink transition-colors duration-200 hover:bg-raised md:hidden"
            >
                <span class="menu-glyph" aria-hidden="true">
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                </span>
            </button>
        </div>

    </div>

    <div id="site-menu" data-menu-panel aria-hidden="true" class="mx-auto mt-2 w-full max-w-[76rem] rounded-3xl border border-line bg-panel p-3 md:hidden">
        <nav class="flex flex-col" aria-label="Main, mobile">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-2xl px-4 py-3.5 font-display text-lg font-medium text-ink transition-colors duration-200 hover:bg-raised">{{ $link->text }}</a>
            @endforeach
            <a href="{{ $signInLink }}" class="rounded-2xl px-4 py-3.5 font-display text-lg font-medium text-muted transition-colors duration-200 hover:bg-raised">{{ $signInText }}</a>
        </nav>
    </div>
</header>
