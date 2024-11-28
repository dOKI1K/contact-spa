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
            <div class="flex flex-row items-center sm:hidden gap-x-4">
                <a href="#contact" class="hover:text-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#ffffff" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                </a>

                <button class="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar2"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>

        <div id="nav-links"
            class="absolute hidden flex-col w-full p-10 text-center bg-white shadow-lg border-t border-primary
        top-[86px] md:hidden font-poppins shadow-gray-700 h-[60vh] gap-y-7 left-0">
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
