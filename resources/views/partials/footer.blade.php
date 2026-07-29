<footer class="border-t border-border">
    <div class="mx-auto max-w-6xl px-6 py-12 lg:px-8">
        <div class="flex flex-col items-start justify-between gap-8 md:flex-row md:items-center">
            <div>
                <p class="font-display text-lg font-semibold">Cheikh Diop<span class="text-accent">.</span></p>
                <p class="mt-2 max-w-sm text-sm text-secondary">Développeur & Designer UI/UX — je conçois et développe des produits numériques clairs, utilisables et soignés.</p>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ config('contact.linkedin') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-border text-secondary transition-colors duration-200 hover:text-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.24 8.24h4.53V23H.24V8.24zM8.5 8.24h4.34v2.02h.06c.6-1.14 2.08-2.34 4.28-2.34 4.58 0 5.42 3.02 5.42 6.94V23h-4.53v-6.98c0-1.67-.03-3.81-2.32-3.81-2.33 0-2.69 1.82-2.69 3.7V23H8.5V8.24z"/></svg>
                </a>
                <a href="{{ config('contact.whatsapp.0.url') }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp ({{ config('contact.whatsapp.0.label') }})" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-border text-secondary transition-colors duration-200 hover:text-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.33 4.95L2.05 22l5.25-1.38a9.9 9.9 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.45 9.9-9.91C21.95 6.45 17.5 2 12.04 2zm5.8 14.13c-.24.68-1.4 1.3-1.93 1.38-.49.08-1.11.11-1.79-.11-.41-.13-.94-.3-1.62-.6-2.84-1.23-4.7-4.1-4.84-4.29-.14-.19-1.16-1.54-1.16-2.94s.73-2.09.99-2.37c.26-.29.56-.36.75-.36.19 0 .37 0 .54.01.17.01.4-.07.63.48.24.57.8 1.98.87 2.12.07.15.12.32.02.51-.1.19-.15.31-.29.48-.15.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.36 1.44.29.15.46.13.63-.05.17-.19.72-.84.91-1.13.19-.29.39-.24.65-.14.27.1 1.68.79 1.97.93.29.14.48.22.55.34.07.13.07.72-.17 1.39z"/></svg>
                </a>
                <a href="mailto:{{ config('contact.email') }}" aria-label="Email" class="inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-border text-secondary transition-colors duration-200 hover:text-foreground">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"/></svg>
                </a>
            </div>
        </div>

        <div class="mt-10 flex flex-col-reverse items-start justify-between gap-4 border-t border-border pt-6 text-sm text-secondary md:flex-row md:items-center">
            <p>&copy; {{ now()->year }} Cheikh Diop. Tous droits réservés.</p>
            <p>Conçu &amp; développé avec Laravel + Tailwind.</p>
        </div>
    </div>
</footer>
