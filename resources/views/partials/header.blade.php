<nav x-data="{ mobileOpen: false, active: null, mobileActive: null }"
    :class="mobileOpen ? 'fixed inset-0 z-30 bg-dark-950 flex flex-col' : 'fixed top-0 inset-x-0 z-30 bg-dark-950'"
    class="border-b border-light-50/10 text-base"
    aria-label="Main navigation"
    @keydown.escape="active = null; mobileOpen = false"
    @resize.window="if (window.innerWidth >= 768) mobileOpen = false"
    x-effect="document.body.classList.toggle('overflow-hidden', mobileOpen)">

    {{-- Top bar --}}
    <div class="container mx-auto p-4 lg:py-5.5 lg:px-6 xl:px-8 flex items-center justify-between shrink-0">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/assets/logos/mazem3dia-white-logo.png" class="h-5 lg:h-6 w-auto" alt="{{ config('app.name') }}" />
            <span class="sr-only self-center text-xl font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>

        {{-- Desktop nav --}}
        <ul class="hidden md:flex items-center font-medium gap-x-1">
            <li>
                <a href="{{ route('home') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                        'text-lime-300' => request()->routeIs('home')])
                    @if(request()->routeIs('home')) aria-current="page" @endif>
                    Home
                </a>
            </li>
            <li class="relative"
                @mouseenter="active = 'core'" @mouseleave="active = null"
                @focusin="active = 'core'" @focusout="active = null">
                <button type="button" aria-haspopup="true" :aria-expanded="active === 'core'"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 uppercase px-3 py-1.5 rounded-lg flex items-center gap-1 font-medium',
                        'text-lime-300 bg-dark-700' => request()->routeIs('mz-charts', 'mz-gameplays')])>
                    Maze Media Core
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': active === 'core' }"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
                <ul x-show="active === 'core'" x-transition
                    class="absolute top-full right-0 bg-dark-900 border border-light-50/10 rounded-lg shadow-lg w-48 mt-1 p-1">
                    <li>
                        <a href="{{ route('mz-charts') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                                'text-lime-300' => request()->routeIs('mz-charts')])
                            @if(request()->routeIs('mz-charts')) aria-current="page" @endif>
                            MZ Charts
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mz-gameplays') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                                'text-lime-300' => request()->routeIs('mz-gameplays')])
                            @if(request()->routeIs('mz-gameplays')) aria-current="page" @endif>
                            MZ Gameplays
                        </a>
                    </li>
                </ul>
            </li>
            <li class="relative"
                @mouseenter="active = 'projects'" @mouseleave="active = null"
                @focusin="active = 'projects'" @focusout="active = null">
                <button type="button" aria-haspopup="true" :aria-expanded="active === 'projects'"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 uppercase px-3 py-1.5 rounded-lg flex items-center gap-1 font-medium',
                        'text-lime-300 bg-dark-700' => request()->routeIs('live-tv', 'projects')])>
                    Projects
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': active === 'projects' }"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
                <ul x-show="active === 'projects'" x-transition
                    class="absolute top-full right-0 bg-dark-900 border border-light-50/10 rounded-lg shadow-lg w-44 mt-1 p-1">
                    <li>
                        <a href="{{ route('live-tv') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                                'text-lime-300' => request()->routeIs('live-tv')])
                            @if(request()->routeIs('live-tv')) aria-current="page" @endif>
                            Live TV
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                                'text-lime-300' => request()->routeIs('projects')])
                            @if(request()->routeIs('projects')) aria-current="page" @endif>
                            All Projects
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('blog') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                        'text-lime-300' => request()->routeIs('blog')])
                    @if(request()->routeIs('blog')) aria-current="page" @endif>
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-1.5 rounded-lg block',
                        'text-lime-300' => request()->routeIs('contact')])
                    @if(request()->routeIs('contact')) aria-current="page" @endif>
                    Contact
                </a>
            </li>
        </ul>

        {{-- Hamburger (mobile only) --}}
        <button type="button" @click="mobileOpen = !mobileOpen"
            class="inline-flex items-center p-2 w-10 h-10 justify-center rounded-lg md:hidden focus:outline-none focus-visible:ring-2 focus-visible:ring-lime-300 focus-visible:ring-offset-2 active:bg-dark-700"
            :aria-expanded="mobileOpen" aria-controls="mobile-menu">
            <span class="sr-only">Toggle menu</span>
            <svg x-show="!mobileOpen" class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
            <svg x-show="mobileOpen" class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile menu (full remaining height) --}}
    <div id="mobile-menu" x-show="mobileOpen" x-transition class="md:hidden flex-1 overflow-y-auto px-4 py-6">
        <ul class="flex flex-col gap-2 font-medium">
            <li>
                <a href="{{ route('home') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                        'text-lime-300' => request()->routeIs('home')])
                    @if(request()->routeIs('home')) aria-current="page" @endif>
                    Home
                </a>
            </li>
            <li>
                <button type="button" aria-haspopup="true" :aria-expanded="mobileActive === 'core'"
                    @click="mobileActive = mobileActive === 'core' ? null : 'core'"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 uppercase px-3 py-2 rounded-lg flex items-center justify-between w-full font-medium',
                        'text-lime-300 bg-dark-700' => request()->routeIs('mz-charts', 'mz-gameplays')])>
                    Maze Media Core
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': mobileActive === 'core' }"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
                <ul x-show="mobileActive === 'core'" x-transition class="mt-1 ml-4 flex flex-col gap-1">
                    <li>
                        <a href="{{ route('mz-charts') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                                'text-lime-300' => request()->routeIs('mz-charts')])
                            @if(request()->routeIs('mz-charts')) aria-current="page" @endif>
                            MZ Charts
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mz-gameplays') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                                'text-lime-300' => request()->routeIs('mz-gameplays')])
                            @if(request()->routeIs('mz-gameplays')) aria-current="page" @endif>
                            MZ Gameplays
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" aria-haspopup="true" :aria-expanded="mobileActive === 'projects'"
                    @click="mobileActive = mobileActive === 'projects' ? null : 'projects'"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 uppercase px-3 py-2 rounded-lg flex items-center justify-between w-full font-medium',
                        'text-lime-300 bg-dark-700' => request()->routeIs('live-tv', 'projects')])>
                    Projects
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': mobileActive === 'projects' }"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
                <ul x-show="mobileActive === 'projects'" x-transition class="mt-1 ml-4 flex flex-col gap-1">
                    <li>
                        <a href="{{ route('live-tv') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                                'text-lime-300' => request()->routeIs('live-tv')])
                            @if(request()->routeIs('live-tv')) aria-current="page" @endif>
                            Live TV
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}"
                            @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                                'text-lime-300' => request()->routeIs('projects')])
                            @if(request()->routeIs('projects')) aria-current="page" @endif>
                            All Projects
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('blog') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                        'text-lime-300' => request()->routeIs('blog')])
                    @if(request()->routeIs('blog')) aria-current="page" @endif>
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}"
                    @class(['transition-all text-light-700 hover:text-light-100 hover:bg-dark-700 active:text-light-100 active:bg-dark-700 aria-[current=page]:text-lime-300 aria-[current=page]:bg-dark-700 uppercase px-3 py-2 rounded-lg block',
                        'text-lime-300' => request()->routeIs('contact')])
                    @if(request()->routeIs('contact')) aria-current="page" @endif>
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
