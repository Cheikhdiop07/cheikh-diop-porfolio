<header class="sticky top-0 z-40 border-b border-border/70 bg-background/80 backdrop-blur-md">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="{{ url('/') }}" class="font-display text-lg font-semibold tracking-tight">
            Cheikh Abdoulaye Diop<span class="text-accent">.</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex" aria-label="Navigation principale">
            <a href="{{ url('/#travaux') }}" class="text-sm font-medium text-secondary transition-colors duration-200 hover:text-foreground">Projets</a>
            <a href="{{ url('/#apropos') }}" class="text-sm font-medium text-secondary transition-colors duration-200 hover:text-foreground">À propos</a>
            <a href="{{ url('/#contact') }}" class="text-sm font-medium text-secondary transition-colors duration-200 hover:text-foreground">Contact</a>
        </nav>

        <div class="flex items-center gap-3">
            <button
                type="button"
                data-theme-toggle
                aria-label="Basculer le mode sombre"
                class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-border text-secondary transition-colors duration-200 hover:text-foreground focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
            >
                <svg data-icon-sun xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path>
                </svg>
                <svg data-icon-moon xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>

            <a
                href="{{ url('/#contact') }}"
                class="hidden cursor-pointer items-center rounded-full bg-primary px-5 py-2.5 text-sm font-medium text-on-primary transition-colors duration-200 hover:bg-accent md:inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
            >
                Me contacter
            </a>

            <button
                type="button"
                data-menu-toggle
                aria-label="Ouvrir le menu"
                aria-expanded="false"
                class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-border text-secondary md:hidden"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
            </button>
        </div>
    </div>

    <nav data-mobile-menu class="absolute inset-x-0 top-full hidden border-t border-border bg-background px-6 py-4 shadow-lg md:hidden" aria-label="Navigation mobile">
        <div class="flex flex-col gap-1">
            <a href="{{ url('/#travaux') }}" class="rounded-lg px-3 py-2.5 text-base font-medium text-foreground hover:bg-muted">Projets</a>
            <a href="{{ url('/#apropos') }}" class="rounded-lg px-3 py-2.5 text-base font-medium text-foreground hover:bg-muted">À propos</a>
            <a href="{{ url('/#contact') }}" class="rounded-lg px-3 py-2.5 text-base font-medium text-foreground hover:bg-muted">Contact</a>
        </div>
    </nav>
</header>
