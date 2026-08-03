@props([
    'noticeLabel' => 'New',
    'noticeText' => 'Auto-resolution is live on every plan',
    'noticeLink' => '/changelog',
    'showNotice' => '1',
    'heading' => 'Support that answers before you wake up.',
    'body' => 'Reply is a help desk with an AI teammate built in. It resolves the routine questions the moment they arrive — and hands you the ones that actually need a person.',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'secondaryText' => 'See how it works',
    'secondaryLink' => '/features',
    'footnote' => 'Free forever on one channel. No card, no sales call.',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'White cosmos flowers against a pale blue summer sky',
    'inboxTitle' => 'Inbox',
    'searchPlaceholder' => 'Search conversations',
    'threadSubject' => 'Order #2847 · Replacement',
    'threadBadge' => 'Resolved by Reply',
    'resolvedNote' => 'Resolved in 4s',
    'sourcesNote' => 'Warranty policy · Returns',
    'navItems' => [],
    'threads' => [],
    'messages' => [],
])
<!--
    THE HERO — and Reply's signature, the inbox canvas.

    The interface on the right is drawn entirely in markup and theme tokens:
    no screenshot, so it stays sharp at any size, weighs nothing, and every
    palette swap restyles it. It floats on a real photograph of a meadow at
    golden hour, which is what lets the cream page carry saturated imagery
    without the two fighting.

    The canvas sheds columns as the viewport narrows — the rail goes first,
    then the conversation list — so a phone gets the conversation itself rather
    than a squashed three-pane app.
-->
<section class="relative overflow-hidden pb-16 pt-28 sm:pb-20 sm:pt-32 lg:pb-28 lg:pt-40">
    <div class="grid w-full items-center gap-14 px-5 sm:px-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.05fr)] lg:gap-14 lg:px-0">

        <div class="gutter-left lg:pr-8">
            <div class="max-w-xl">
            @if ($showNotice)
                <a href="{{ $noticeLink }}" data-reveal class="group inline-flex items-center gap-2.5 rounded-full border border-line bg-panel/70 py-1.5 pl-1.5 pr-4 text-sm text-muted transition-colors duration-200 hover:border-ink/25 hover:text-ink">
                    <span class="rounded-full bg-accent px-2.5 py-1 text-[0.6875rem] font-semibold uppercase tracking-[0.09em] text-accent-ink">{{ $noticeLabel }}</span>
                    <span>{{ $noticeText }}</span>
                    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                </a>
            @endif

            <h1 data-reveal class="reveal-1 mt-7 font-display font-normal text-ink display-hero">{{ $heading }}</h1>

            <p data-reveal class="reveal-2 mt-6 max-w-lg text-muted lede">{{ $body }}</p>

            <div data-reveal class="reveal-3 mt-9 flex flex-wrap items-center gap-3">
                <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center rounded-full bg-accent px-7 text-[0.9375rem] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-hover">{{ $ctaText }}</a>
                <a href="{{ $secondaryLink }}" class="inline-flex min-h-12 items-center rounded-full border border-line px-7 text-[0.9375rem] font-semibold text-ink transition-colors duration-200 hover:border-ink/25 hover:bg-panel">{{ $secondaryText }}</a>
            </div>

            <p data-reveal class="reveal-4 mt-6 text-sm text-faint">{{ $footnote }}</p>
            </div>
        </div>

        <!-- The canvas runs past the container's right edge on wide screens.
             The photograph is the frame here — no mat — so the field reads as a
             window the interface is floating in front of. -->
        <div data-reveal class="reveal-2">
            <div class="relative">
                <div class="stage relative isolate overflow-hidden rounded-[1.75rem]">
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="904" class="absolute inset-0 -z-10 size-full object-cover object-top" loading="eager">

                    <div class="p-4 sm:p-8 lg:p-11">
                        <div class="canvas-glass overflow-hidden rounded-2xl">

                            <!-- Canvas chrome -->
                            <div class="flex items-center gap-3 border-b border-hairline px-3 py-2.5 sm:px-4">
                                <span class="flex items-center gap-2 text-ink">
                                    <svg viewBox="0 0 32 32" class="size-4 shrink-0" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5ZM11 15A1.5 1.5 0 1 1 8 15A1.5 1.5 0 1 1 11 15ZM17 15A2 2 0 1 1 13 15A2 2 0 1 1 17 15ZM24 15A2.5 2.5 0 1 1 19 15A2.5 2.5 0 1 1 24 15Z"/></svg>
                                    <span class="font-display text-[0.8125rem] font-semibold tracking-tight">{{ $inboxTitle }}</span>
                                </span>
                                <span class="ml-auto hidden min-w-0 flex-1 items-center gap-2 rounded-full bg-raised/70 px-3 py-1.5 text-[0.6875rem] text-faint sm:flex sm:max-w-52">
                                    <svg viewBox="0 0 16 16" class="size-3 shrink-0" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="7" cy="7" r="4.25"/><path d="m10.2 10.2 3 3" stroke-linecap="round"/></svg>
                                    <span class="truncate">{{ $searchPlaceholder }}</span>
                                </span>
                            </div>

                            <div class="flex min-h-[19rem] sm:min-h-[23rem] lg:min-h-[26rem]">

                                <!-- Rail -->
                                <nav class="hidden w-32 shrink-0 border-r border-hairline p-2 lg:block" aria-label="Inbox sections">
                                    @foreach ($navItems as $item)
                                        @if ($item->active)
                                            <span class="mb-0.5 flex items-center gap-2.5 rounded-lg bg-raised px-2.5 py-2 text-[0.75rem] font-medium text-ink">
                                                <x-inbox-icon :name="$item->icon"/>
                                                <span class="truncate">{{ $item->label }}</span>
                                                @if ($item->badge)
                                                    <span class="ml-auto rounded-full bg-accent px-1.5 py-px text-[0.625rem] font-semibold text-accent-ink">{{ $item->badge }}</span>
                                                @endif
                                            </span>
                                        @endif
                                        @if (! $item->active)
                                            <span class="mb-0.5 flex items-center gap-2.5 rounded-lg px-2.5 py-2 text-[0.75rem] text-muted">
                                                <x-inbox-icon :name="$item->icon"/>
                                                <span class="truncate">{{ $item->label }}</span>
                                            </span>
                                        @endif
                                    @endforeach
                                </nav>

                                <!-- Conversation list -->
                                <div class="hidden w-48 shrink-0 border-r border-hairline sm:block lg:w-52">
                                    @foreach ($threads as $thread)
                                        <span class="thread-row flex items-start gap-2.5 border-b border-hairline px-3 py-2.5 last:border-b-0">
                                            <span class="mt-px flex size-6 shrink-0 items-center justify-center rounded-full bg-raised text-[0.5625rem] font-semibold tracking-wide text-muted">{{ $thread->initials }}</span>
                                            <span class="min-w-0 flex-1">
                                                <span class="flex items-baseline gap-2">
                                                    @if ($thread->active)
                                                        <span class="truncate text-[0.75rem] font-semibold text-ink">{{ $thread->name }}</span>
                                                    @endif
                                                    @if (! $thread->active)
                                                        <span class="truncate text-[0.75rem] font-medium text-ink/80">{{ $thread->name }}</span>
                                                    @endif
                                                    <span class="ml-auto shrink-0 text-[0.625rem] text-faint">{{ $thread->time }}</span>
                                                </span>
                                                <span class="mt-0.5 block truncate text-[0.6875rem] text-faint">{{ $thread->snippet }}</span>
                                            </span>
                                            @if ($thread->state == 'live')
                                                <span class="mt-1.5 size-1.5 shrink-0 rounded-full bg-accent" aria-hidden="true"></span>
                                            @endif
                                        </span>
                                    @endforeach
                                </div>

                                <!-- The conversation itself -->
                                <div class="flex min-w-0 flex-1 flex-col">
                                    <div class="flex items-center gap-2 border-b border-hairline px-3 py-2.5 sm:px-4">
                                        <span class="min-w-0 truncate font-display text-[0.8125rem] font-semibold tracking-tight text-ink">{{ $threadSubject }}</span>
                                        <span class="ml-auto hidden shrink-0 items-center gap-1.5 rounded-full bg-raised px-2.5 py-1 text-[0.625rem] font-medium text-muted sm:inline-flex">
                                            <svg viewBox="0 0 16 16" class="size-3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3.5 8.5 3 3 6-6"/></svg>
                                            {{ $threadBadge }}
                                        </span>
                                    </div>

                                    <div class="flex-1 space-y-3 p-3 sm:p-4">
                                        @foreach ($messages as $message)
                                            @if ($message->side == 'agent')
                                                <span class="flex gap-2.5">
                                                    <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-accent text-accent-ink">
                                                        <svg viewBox="0 0 32 32" class="size-3.5" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 5H22.5A7 7 0 0 1 29.5 12V18A7 7 0 0 1 22.5 25H4.5A2 2 0 0 1 2.5 23V12A7 7 0 0 1 9.5 5ZM11 15A1.5 1.5 0 1 1 8 15A1.5 1.5 0 1 1 11 15ZM17 15A2 2 0 1 1 13 15A2 2 0 1 1 17 15ZM24 15A2.5 2.5 0 1 1 19 15A2.5 2.5 0 1 1 24 15Z"/></svg>
                                                    </span>
                                                    <span class="min-w-0 flex-1">
                                                        <span class="flex items-baseline gap-2">
                                                            <span class="text-[0.75rem] font-semibold text-ink">{{ $message->author }}</span>
                                                            <span class="text-[0.625rem] text-faint">{{ $message->time }}</span>
                                                        </span>
                                                        <span class="mt-1 block rounded-xl rounded-tl-sm bg-raised px-3 py-2 text-[0.75rem] leading-relaxed text-ink/85">{{ $message->body }}</span>
                                                    </span>
                                                </span>
                                            @endif
                                            @if ($message->side != 'agent')
                                                <span class="flex gap-2.5">
                                                    <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-raised text-[0.5625rem] font-semibold text-muted">{{ $message->initials }}</span>
                                                    <span class="min-w-0 flex-1">
                                                        <span class="flex items-baseline gap-2">
                                                            <span class="text-[0.75rem] font-semibold text-ink">{{ $message->author }}</span>
                                                            <span class="text-[0.625rem] text-faint">{{ $message->time }}</span>
                                                        </span>
                                                        <span class="mt-1 block text-[0.75rem] leading-relaxed text-ink/75">{{ $message->body }}</span>
                                                    </span>
                                                </span>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1 border-t border-hairline px-3 py-2.5 text-[0.625rem] sm:px-4">
                                        <span class="inline-flex items-center gap-1.5 font-medium text-ink">
                                            <svg viewBox="0 0 16 16" class="size-3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.6 1.8 3.2 9.2h4L7 14.2l5.6-7.6h-4z"/></svg>
                                            {{ $resolvedNote }}
                                        </span>
                                        <span class="text-faint">{{ $sourcesNote }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
