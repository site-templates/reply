@props(['image' => '/images/insight.jpg', 'imageAlt' => 'A meadow at golden hour'])
<!--
    The stage every product view sits on: a real photograph, and a pane of
    glass over it carrying the interface. Same construction as the hero's
    inbox canvas, so the whole site reads as one idea — the software, shown
    against the morning it gives you back.

    No shadow anywhere. The glass has a bright inner edge instead, which is
    what real glass does and what a drop shadow only pretends to do.
-->
<div class="stage relative isolate overflow-hidden rounded-[1.75rem]">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="797" class="absolute inset-0 -z-10 size-full object-cover" loading="lazy">
    <div class="p-4 sm:p-7 lg:p-9">
        <div class="canvas-glass overflow-hidden rounded-2xl">
            {{ $slot }}
        </div>
    </div>
</div>
