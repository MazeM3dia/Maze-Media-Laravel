<footer class="bg-dark-950 border-t border-light-50/10">
    <div class="container mx-auto px-4 lg:px-6 xl:px-8 pt-12 pb-20 lg:pb-16 text-light-700">

        {{-- Main grid: logo + nav columns --}}
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8">

            {{-- Logo --}}
            <div class="col-span-2">
                <x-reusables.logo height="h-4.5 lg:h-5.5" :hoverShift="true" />
                <p class="text-lg lg:text-2xl mt-4 text-light-400">{{ config('app.name') }} - {{ config('app.tagline') }}</p>
            </div>

            {{-- Maze Media Core --}}
            <div class="col-span-2 lg:col-span-1">
                <h3 class="font-heading font-semibold uppercase tracking-widest text-light-100 text-base lg:text-xl mb-4">Maze Media Core</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('mz-charts') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            MZ Charts
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mz-gameplays') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            MZ Gameplays
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Projects --}}
            <div>
                <h3 class="font-heading font-semibold uppercase tracking-widest text-light-100 text-base lg:text-xl mb-4">Projects</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('live-tv') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            Live TV
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            All Projects
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Extra --}}
            <div>
                <h3 class="font-heading font-semibold uppercase tracking-widest text-light-100 text-base lg:text-xl mb-4">Extra
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('blog') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-sm lg:text-base underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Divider --}}
        <hr class="border-light-50/10 my-8" />

        {{-- Copyright --}}
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 text-center lg:text-start">
            <div class="space-y-1">
                <p class="text-sm lg:text-base">
                    &copy; {{ date('Y') }}
                    <a href="{{ route('home') }}" class="text-light-400 underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                        {{ config('app.name') }}.
                    </a>
                </p>
                <p class="text-xs lg:text-sm">
                    {{ config('app.name') }} is a part of
                    <a href="https://usoppii.my/" target="_blank" rel="noopener noreferrer"
                        class="text-light-500 underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                        usoppii.my
                    </a>
                </p>
            </div>

            {{-- Legal links --}}
            <div class="flex items-center justify-center lg:justify-end gap-4">
                <a href="{{ route('terms') }}"
                    class="text-xs lg:text-sm underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                    Terms of Use
                </a>
                <a href="{{ route('privacy') }}"
                    class="text-xs lg:text-sm underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                    Privacy Policy
                </a>
                <a href="{{ route('cookie-policy') }}"
                    class="text-xs lg:text-sm underline underline-offset-4 hover:no-underline hover:text-light-100 active:no-underline active:text-light-100 transition-all">
                    Cookie Policy
                </a>
            </div>
        </div>

    </div>
</footer>
