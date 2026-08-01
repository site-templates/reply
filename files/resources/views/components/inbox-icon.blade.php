@props(['name' => 'inbox'])
<!-- The five rail glyphs for the inbox canvas, picked by name. currentColor
     everywhere so they follow whatever text tier the row is using. -->
@if ($name == 'inbox')
    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 9.5V4.2A1.2 1.2 0 0 1 3.2 3h9.6A1.2 1.2 0 0 1 14 4.2v5.3M2 9.5h3l1 1.8h4l1-1.8h3M2 9.5v2.3A1.2 1.2 0 0 0 3.2 13h9.6a1.2 1.2 0 0 0 1.2-1.2V9.5"/></svg>
@endif
@if ($name == 'ticket')
    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 6.2V4.4A1.4 1.4 0 0 1 3.4 3h9.2A1.4 1.4 0 0 1 14 4.4v1.8a1.8 1.8 0 0 0 0 3.6v1.8A1.4 1.4 0 0 1 12.6 13H3.4A1.4 1.4 0 0 1 2 11.6V9.8a1.8 1.8 0 0 0 0-3.6Z"/><path d="M9.5 3v1.6M9.5 7.2v1.6M9.5 11.4V13"/></svg>
@endif
@if ($name == 'book')
    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 4.4C6.9 3.5 5.5 3 4 3H2.6v8.6H4c1.5 0 2.9.5 4 1.4 1.1-.9 2.5-1.4 4-1.4h1.4V3H12c-1.5 0-2.9.5-4 1.4Z"/><path d="M8 4.4V13"/></svg>
@endif
@if ($name == 'chart')
    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.5 13h11M4.6 10.6V7.4M7.5 10.6V4M10.4 10.6V8.6M13.3 10.6V5.6"/></svg>
@endif
@if ($name == 'gear')
    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="8" cy="8" r="2"/><path d="M8 1.8v1.6M8 12.6v1.6M2.6 8H1M15 8h-1.6M4.2 4.2 3 3M13 13l-1.2-1.2M11.8 4.2 13 3M3 13l1.2-1.2"/></svg>
@endif
