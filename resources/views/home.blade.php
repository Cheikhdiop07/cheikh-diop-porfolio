<x-layout>
    {{-- Hero --}}
    <section class="relative overflow-hidden px-6 pb-20 pt-20 lg:px-8 lg:pb-28 lg:pt-28">
        <div class="mx-auto max-w-6xl">
            <p class="inline-flex items-center gap-2 rounded-full border border-border px-4 py-1.5 text-sm font-medium text-secondary">
                <span class="h-2 w-2 rounded-full bg-accent"></span>
                Ouvert aux stages, à l'alternance et aux projets freelance
            </p>

            <h1 class="mt-8 max-w-3xl font-display text-4xl font-semibold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                Je conçois et développe des produits numériques clairs, utiles et soignés.
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-relaxed text-secondary">
                Développeur Full-Stack & Designer UI/UX tout juste diplômé, je transforme des idées en applications complètes — du design à la mise en production, avec Laravel, Flutter et les fondamentaux du web.
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-4">
                <a href="#travaux" class="inline-flex cursor-pointer items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-medium text-on-primary transition-colors duration-200 hover:bg-accent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    Voir mes projets
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
                </a>
                <a href="#contact" class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-border px-6 py-3 text-sm font-medium text-foreground transition-colors duration-200 hover:border-foreground focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    Me contacter
                </a>
            </div>
        </div>
    </section>

    {{-- Proof / stats --}}
    <section class="border-y border-border bg-muted/40">
        <div class="mx-auto grid max-w-6xl grid-cols-2 gap-8 px-6 py-12 sm:grid-cols-4 lg:px-8">
            @foreach ([
                ['value' => '20 ans', 'label' => 'Sénégal · Maroc'],
                ['value' => 'BTS 2026', 'label' => 'Développement Informatique'],
                ['value' => '4', 'label' => 'projets réalisés'],
                ['value' => '3', 'label' => 'stacks : Laravel, Flutter, JS/PHP'],
            ] as $stat)
                <div data-reveal class="grid-item text-center sm:text-left">
                    <p class="font-display text-3xl font-semibold tracking-tight sm:text-4xl">{{ $stat['value'] }}</p>
                    <p class="mt-1 text-sm text-secondary">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Selected work --}}
    <section id="travaux" class="scroll-mt-24 px-6 py-24 lg:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
                <div data-reveal>
                    <p class="text-sm font-medium uppercase tracking-wider text-accent">Projets sélectionnés</p>
                    <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight sm:text-4xl">Études de cas</h2>
                </div>
                <p data-reveal class="max-w-sm text-sm text-secondary">Chaque projet ci-dessous détaille le contexte, la démarche et ce qui a été livré.</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $slug => $project)
                    <a href="{{ route('projects.show', $slug) }}" data-reveal class="grid-item group block overflow-hidden rounded-2xl border border-border transition-colors duration-300 hover:border-foreground">
                        <div class="aspect-[4/3] w-full overflow-hidden bg-gradient-to-br {{ $project['gradient'] }}">
                            @if (!empty($project['image']))
                                <img src="{{ asset($project['image']) }}" alt="" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @endif
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-medium uppercase tracking-wider text-accent">{{ $project['tag'] }}</p>
                            <h3 class="mt-2 font-display text-xl font-semibold tracking-tight">{{ $project['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-secondary">{{ $project['summary'] }}</p>
                            <span class="mt-4 inline-flex items-center gap-1.5 text-sm font-medium text-foreground">
                                Voir l'étude de cas
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="apropos" class="scroll-mt-24 border-t border-border px-6 py-24 lg:px-8">
        <div class="mx-auto grid max-w-6xl gap-12 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1.2fr)] lg:gap-20">
            <div data-reveal>
                <p class="text-sm font-medium uppercase tracking-wider text-accent">À propos</p>
                <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight sm:text-4xl">Bonjour, je suis Cheikh Abdoulaye Diop.</h2>

                <img
                    src="{{ asset('images/cheikh-diop.jpg') }}"
                    alt="Portrait de Cheikh Abdoulaye Diop"
                    class="mt-8 aspect-[4/5] w-full max-w-xs rounded-2xl border border-border object-cover object-top"
                >
            </div>

            <div data-reveal class="space-y-6 text-lg leading-relaxed text-secondary">
                <p>
                    Développeur Full-Stack de 20 ans, originaire du Sénégal. Je viens d'obtenir mon BTS en Développement Informatique à Omnia School of Business and Technology, à Casablanca.
                </p>
                <p>
                    Je conçois des interfaces soignées autant que je développe les applications qui les font fonctionner — du site vitrine à la plateforme web complète, avec son API et son application mobile.
                </p>

                <div class="flex flex-wrap gap-2 pt-2">
                    @foreach (['Laravel', 'Flutter', 'JavaScript', 'PHP', 'MySQL', 'UI Design', 'HTML/CSS', 'API REST'] as $skill)
                        <span class="rounded-full border border-border px-4 py-1.5 text-sm text-foreground">{{ $skill }}</span>
                    @endforeach
                </div>

                <a href="{{ config('contact.linkedin') }}" target="_blank" rel="noopener noreferrer" class="inline-flex cursor-pointer items-center gap-1.5 text-sm font-medium text-foreground transition-colors duration-200 hover:text-accent">
                    Voir mon parcours complet sur LinkedIn
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA / Contact --}}
    <section id="contact" class="scroll-mt-24 border-t border-border bg-primary px-6 py-24 text-on-primary lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 data-reveal class="font-display text-3xl font-semibold tracking-tight sm:text-4xl">
                Un projet en tête ? Discutons-en.
            </h2>
            <p data-reveal class="mx-auto mt-4 max-w-xl text-lg text-on-primary/70">
                Je suis actuellement disponible pour un stage, une alternance ou des collaborations freelance.
            </p>

            <div data-reveal class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <a href="mailto:{{ config('contact.email') }}" class="inline-flex cursor-pointer items-center gap-2 rounded-full bg-on-primary px-6 py-3 text-sm font-medium text-primary transition-colors duration-200 hover:opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"/></svg>
                    {{ config('contact.email') }}
                </a>

                <a href="{{ config('contact.linkedin') }}" target="_blank" rel="noopener noreferrer" class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-on-primary/30 px-6 py-3 text-sm font-medium text-on-primary transition-colors duration-200 hover:border-on-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8.24h4.53V23H.24V8.24zM8.5 8.24h4.34v2.02h.06c.6-1.14 2.08-2.34 4.28-2.34 4.58 0 5.42 3.02 5.42 6.94V23h-4.53v-6.98c0-1.67-.03-3.81-2.32-3.81-2.33 0-2.69 1.82-2.69 3.7V23H8.5V8.24z"/></svg>
                    LinkedIn
                </a>

                @foreach (config('contact.whatsapp') as $whatsapp)
                    <a href="{{ $whatsapp['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-on-primary/30 px-6 py-3 text-sm font-medium text-on-primary transition-colors duration-200 hover:border-on-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.33 4.95L2.05 22l5.25-1.38a9.9 9.9 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.45 9.9-9.91C21.95 6.45 17.5 2 12.04 2zm5.8 14.13c-.24.68-1.4 1.3-1.93 1.38-.49.08-1.11.11-1.79-.11-.41-.13-.94-.3-1.62-.6-2.84-1.23-4.7-4.1-4.84-4.29-.14-.19-1.16-1.54-1.16-2.94s.73-2.09.99-2.37c.26-.29.56-.36.75-.36.19 0 .37 0 .54.01.17.01.4-.07.63.48.24.57.8 1.98.87 2.12.07.15.12.32.02.51-.1.19-.15.31-.29.48-.15.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.36 1.44.29.15.46.13.63-.05.17-.19.72-.84.91-1.13.19-.29.39-.24.65-.14.27.1 1.68.79 1.97.93.29.14.48.22.55.34.07.13.07.72-.17 1.39z"/></svg>
                        WhatsApp {{ $whatsapp['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
