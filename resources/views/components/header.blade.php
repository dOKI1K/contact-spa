<header class="sticky z-50 pt-5 bg-white -top-5 animate__animated animate__fadeInDown">
    <div class="container z-50 px-5 py-3 mx-auto text-xl bg-white font-poppins">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-800" href="{{ route('welcome') }}">Brand</a>
            </div>
            <nav class="space-x-4 text-sm text-gray-800">
                <a href="#home" class="hover:text-gray-600">Home</a>
                <a href="#about" class="hover:text-gray-600">About</a>
                <a href="#contact" class="hover:text-gray-600">Contact</a>
            </nav>

            <div class="flex flex-row items-center gap-x-2 md:hidden">
                <div>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <a href="{{ route('locale.set', $lang) }}"
                                class="flex flex-row items-center text-sm gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                                </svg>
                            </a>
                        @endif
                    @endforeach
                </div>

                <button class="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar2"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="nav-links"
        class="absolute hidden flex-col w-full p-10 text-center bg-white shadow-lg border-t border-primary
top-[96px] md:hidden font-poppins shadow-gray-200 h-[60vh] gap-y-7">
        <a href="#about-us" id="#nav-toggle"
            class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Quienes somos') }}</a>
        <a href="#bariatric-surgery-program" id="#nav-toggle"
            class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Programa de cirugia bariatrica') }}</a>
        <a href="#nutrition-and-health" id="#nav-toggle"
            class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Nutricion y Salud') }}</a>
        <a href="#contact-us" id="#nav-toggle"
            class="text-xl font-semibold transition-all ease-in-out hover:text-primary">{{ __('Contactanos') }}</a>

        <span class="justify-center text-sm text-gray-500 align-bottom">&copy;{{ Carbon\Carbon::now()->year }}</span>
    </div>
</header>
