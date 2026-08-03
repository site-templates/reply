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
    THE HEADER — invisible at rest, an inverted pill once you move.

    At the top of the page there is no header chrome at all: no background, no
    border, no blur. The wordmark and the links simply sit on the canvas, on
    the same 64rem measure as every section below them.

    The moment the page scrolls, main.js flags it and the whole bar condenses
    into a near-black pill and inverts — ink surface, canvas type, and the call
    to action flips from a dark pill to a light one. Every colour comes from
    the --nav-* variables in site.css, so one rule inverts the entire header and
    the palette still drives it.

    The wordmark's three dots run a typing sequence on hover: the mark IS a
    speech bubble mid-reply, so the animation is the logo explaining itself.
-->
<header id="header" class="fixed inset-x-0 top-0 z-50 px-3 pt-3 sm:px-5 sm:pt-4">
    <div class="header-shell mx-auto flex h-14 w-full max-w-5xl items-center justify-between gap-6 rounded-full pl-1 pr-1 sm:h-[3.75rem]">

        <a href="/" class="brand nav-fg group flex items-center gap-2.5 rounded-full pl-3 pr-2 sm:pl-4" aria-label="{{ $brand }} — homepage">
            <svg viewBox="0 0 32 32" class="size-[1.4375rem] shrink-0" fill="currentColor" aria-hidden="true">
                <path d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5Z"/>
                <circle class="brand-dot" cx="9.5" cy="15" r="1.5"/>
                <circle class="brand-dot" cx="15" cy="15" r="2"/>
                <circle class="brand-dot" cx="21.5" cy="15" r="2.5"/>
            </svg>
            <span class="font-display text-[1.3125rem] font-semibold tracking-tight">{{ $brand }}</span>
        </a>

        <nav class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-7 md:flex" aria-label="Main">
            @foreach ($links as $link)
                @if ($link->url == $current)
                    <a href="{{ $link->url }}" data-current aria-current="page" class="nav-link nav-fg text-[0.9375rem] font-medium">{{ $link->text }}</a>
                @endif
                @if ($link->url != $current)
                    <a href="{{ $link->url }}" class="nav-link nav-dim text-[0.9375rem] font-medium">{{ $link->text }}</a>
                @endif
            @endforeach
        </nav>

        <div class="flex items-center gap-1">
            @if ($showStatus)
                <span class="nav-chip mr-1.5 hidden items-center gap-2 rounded-full border px-3 py-1.5 text-[0.75rem] font-medium lg:inline-flex">
                    <span class="status-pip" aria-hidden="true"></span>
                    {{ $statusText }}
                </span>
            @endif

            <a href="{{ $signInLink }}" class="nav-dim hidden rounded-full px-4 py-2.5 text-[0.9375rem] font-medium sm:inline-flex">{{ $signInText }}</a>
            <a href="{{ $ctaLink }}" class="nav-btn inline-flex min-h-10 items-center rounded-full px-5 text-[0.9375rem] font-semibold">{{ $ctaText }}</a>

            <button
                type="button"
                data-menu-button
                aria-expanded="false"
                aria-controls="site-menu"
                aria-label="Open the menu"
                class="nav-fg ml-0.5 inline-flex size-10 items-center justify-center rounded-full md:hidden"
            >
                <span class="menu-glyph" aria-hidden="true">
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                </span>
            </button>
        </div>

    </div>

    <div id="site-menu" data-menu-panel aria-hidden="true" class="nav-panel mx-auto mt-2 w-full max-w-5xl rounded-3xl border p-2 md:hidden">
        <nav class="flex flex-col" aria-label="Main, mobile">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="nav-fg rounded-2xl px-4 py-3.5 font-display text-lg font-medium">{{ $link->text }}</a>
            @endforeach
            <a href="{{ $signInLink }}" class="nav-dim rounded-2xl px-4 py-3.5 font-display text-lg font-medium">{{ $signInText }}</a>
        </nav>
    </div>
</header>
