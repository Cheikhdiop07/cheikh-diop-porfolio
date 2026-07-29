<x-layout :title="$project['title'] . ' — Cheikh Diop'" :description="$project['summary']">
    <article class="px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <a href="{{ route('home') }}#travaux" class="inline-flex cursor-pointer items-center gap-1.5 text-sm font-medium text-secondary transition-colors duration-200 hover:text-foreground">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
                Tous les projets
            </a>

            <p class="mt-8 text-sm font-medium uppercase tracking-wider text-accent">{{ $project['tag'] }}</p>
            <h1 class="mt-3 font-display text-3xl font-semibold leading-tight tracking-tight sm:text-4xl lg:text-5xl">
                {{ $project['title'] }}
            </h1>
            <p class="mt-5 text-lg leading-relaxed text-secondary">{{ $project['summary'] }}</p>

            <dl class="mt-10 grid grid-cols-1 gap-6 border-y border-border py-8 sm:grid-cols-3">
                <div>
                    <dt class="text-xs font-medium uppercase tracking-wider text-secondary">Rôle</dt>
                    <dd class="mt-1.5 text-sm font-medium">{{ $project['role'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-medium uppercase tracking-wider text-secondary">Durée</dt>
                    <dd class="mt-1.5 text-sm font-medium">{{ $project['timeline'] }}</dd>
                </div>
                <div>
                    <dt class="text-xs font-medium uppercase tracking-wider text-secondary">Outils</dt>
                    <dd class="mt-1.5 text-sm font-medium">{{ implode(', ', $project['tools']) }}</dd>
                </div>
            </dl>

            @if (!empty($project['links']))
                <div class="mt-8 flex flex-wrap gap-3">
                    @if (!empty($project['links']['demo']))
                        <a href="{{ $project['links']['demo'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex cursor-pointer items-center gap-2 rounded-full bg-primary px-5 py-2.5 text-sm font-medium text-on-primary transition-colors duration-200 hover:bg-accent">
                            Voir le site en ligne
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
                        </a>
                    @endif
                    @if (!empty($project['links']['github']))
                        <a href="{{ $project['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-border px-5 py-2.5 text-sm font-medium text-foreground transition-colors duration-200 hover:border-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5C5.65.5.5 5.65.5 12a11.5 11.5 0 0 0 7.86 10.93c.57.1.79-.25.79-.55v-1.94c-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.28-1.68-1.28-1.68-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.23-1.28-5.23-5.68 0-1.25.45-2.28 1.18-3.08-.12-.29-.51-1.46.11-3.04 0 0 .97-.31 3.18 1.18a11 11 0 0 1 5.79 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.58.24 2.75.12 3.04.74.8 1.18 1.83 1.18 3.08 0 4.41-2.69 5.38-5.25 5.67.41.36.78 1.06.78 2.14v3.17c0 .3.21.66.8.55A11.5 11.5 0 0 0 23.5 12c0-6.35-5.15-11.5-11.5-11.5Z"/></svg>
                            Voir le code sur GitHub
                        </a>
                    @endif
                </div>
            @endif
        </div>

        <div data-reveal class="mx-auto mt-12 aspect-[16/9] max-w-5xl overflow-hidden rounded-2xl bg-gradient-to-br {{ $project['gradient'] }}">
            @if (!empty($project['image']))
                <img src="{{ asset($project['image']) }}" alt="Capture d'écran — {{ $project['title'] }}" class="h-full w-full object-cover">
            @endif
        </div>

        <div class="mx-auto mt-16 max-w-3xl space-y-12">
            <div data-reveal>
                <h2 class="font-display text-2xl font-semibold tracking-tight">Le problème</h2>
                <p class="mt-4 text-lg leading-relaxed text-secondary">{{ $project['problem'] }}</p>
            </div>

            <div data-reveal>
                <h2 class="font-display text-2xl font-semibold tracking-tight">La démarche</h2>
                <p class="mt-4 text-lg leading-relaxed text-secondary">{{ $project['solution'] }}</p>
            </div>

            <div data-reveal class="rounded-2xl border border-border bg-muted/40 p-8">
                <h2 class="font-display text-2xl font-semibold tracking-tight">Résultats</h2>
                <p class="mt-4 text-lg leading-relaxed text-secondary">{{ $project['outcome'] }}</p>
            </div>
        </div>

        @php
            $slugs = array_keys($projects);
            $currentIndex = array_search($slug, $slugs);
            $nextSlug = $slugs[($currentIndex + 1) % count($slugs)];
            $nextProject = $projects[$nextSlug];
        @endphp

        <div data-reveal class="mx-auto mt-20 max-w-3xl border-t border-border pt-10">
            <p class="text-sm font-medium uppercase tracking-wider text-secondary">Projet suivant</p>
            <a href="{{ route('projects.show', $nextSlug) }}" class="group mt-3 inline-flex items-center gap-2 font-display text-2xl font-semibold tracking-tight transition-colors duration-200 hover:text-accent">
                {{ $nextProject['title'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </article>
</x-layout>
