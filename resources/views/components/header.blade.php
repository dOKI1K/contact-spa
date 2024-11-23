<header class="sticky top-0 z-50 animate__animated animate__fadeInDown bg-gradient-to-r from-primary to-secondary">
    <div class="container z-50 px-5 py-6 mx-auto text-xl font-poppins">
        <div class="flex flex-row items-center justify-between gap-y-4">
            <div>
                <a class="text-2xl" href="{{ route('welcome') }}">
                    <img src="/img/logo/logo-sombra.svg" alt="" class="h-10 md:h-20">
                </a>
            </div>
            <nav class="flex-row hidden font-semibold text-white md:font-bold sm:flex gap-x-4">
                <a href="#home" class="hover:text-slate-200">
                    <p>{{ __('Home') }}</p>
                </a>
                <a href="#about" class="hover:text-slate-200">
                    <p>{{ __('About') }}</p>
                </a>
                <a href="#contact" class="hover:text-slate-200">
                    <p>{{ __('Contact') }}</p>
                </a>
            </nav>
            <div class="items-center sm:hidden gap-x-2">
                <button class="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar2"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>

        <div id="nav-links"
            class="absolute hidden flex-col w-full p-10 text-center bg-white shadow-lg border-t border-primary
        top-[86px] md:hidden font-poppins shadow-gray-200 h-[60vh] gap-y-7 left-0">
            <a href="#home" id="#nav-toggle"
                class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Home') }}</a>
            <a href="#about" id="#nav-toggle"
                class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('About') }}</a>
            <a href="#contact" id="#nav-toggle"
                class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Contact') }}</a>
            <span
                class="justify-center text-sm text-gray-500 align-bottom">&copy;{{ Carbon\Carbon::now()->year }}</span>
        </div>
    </div>
</header>
