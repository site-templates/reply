@props(['title' => 'Home', 'description' => '', 'current' => '/', 'showFooter' => '1'])
<!doctype html>
<html lang="en" class="scroll-smooth {{ $site->theme->appearance_class ?? '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Fraunces sets every heading; Hanken Grotesk carries the body copy. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ $site->theme->fonts_url ?? 'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..640;1,9..144,400..640&family=Hanken+Grotesk:wght@400..700&family=DM+Mono:wght@400;500&display=swap' }}" rel="stylesheet">

    <!-- Tailwind, then the theme tokens, then the aliases and motion in site.css -->
    @vite(['resources/css/theme.css', 'resources/css/site.css'])

    <!-- Flag JS support before first paint so scroll reveals never flash (see main.js) -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-[1.0625rem] leading-[1.65] text-ink antialiased">

    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:rounded-full focus:bg-accent focus:px-5 focus:py-3 focus:text-sm focus:font-semibold focus:text-accent-ink">Skip to content</a>

    <x-nav :links="$site->nav_links" :current="$current"/>

    <main id="main" class="relative">
        {{ $slot }}
    </main>

    @if ($showFooter)
        <x-footer :product="$site->footer_product" :company="$site->footer_company" :social="$site->social_links"/>
    @endif

</body>
</html>
