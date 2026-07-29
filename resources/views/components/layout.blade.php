<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Cheikh Abdoulaye Diop — Développeur & Designer UI/UX' }}</title>
    <meta name="description" content="{{ $description ?? 'Portfolio de Cheikh Abdoulaye Diop, développeur Full-Stack & designer UI/UX — projets Laravel, Flutter et web.' }}">
    <link rel="icon" href="data:,">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="font-sans antialiased bg-background text-foreground selection:bg-accent selection:text-accent-foreground">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:top-4 focus:left-4 focus:bg-primary focus:text-on-primary focus:px-4 focus:py-2 focus:rounded-md">
        Aller au contenu
    </a>

    @include('partials.nav')

    <main id="main">
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>
</html>
