<header class="fixed z-50 w-full pt-5 bg-white md:sticky -top-5 animate__animated animate__fadeInDown">
    <div
        class="relative z-50 flex flex-row items-center justify-between w-full px-5 pt-3 pb-3 mx-auto text-xl text-center bg-white shadow-lg md:flex-col lg:container shadow-gray-300 font-poppins">
        <div class="lg:w-full">
            <a class="text-3xl font-bold text-gray-800" href="{{ route('welcome') }}">
                <img src="/img/logo.png" title="VIDASUG" alt="VIDASUG" class="w-[160px] mx-auto">
            </a>
            <div class="absolute hidden top-4 right-5 md:block">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <a href="{{ route('locale.set', $lang) }}" class="flex flex-row items-center text-sm gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                            </svg>
                            <p class="font-semibold font-poppins">{{ $language }}</p>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="items-center justify-center hidden mt-4 md:flex">
            <nav class="flex flex-row items-center space-x-4 text-base text-gray-800">
                <a href="#" class="transition-all ease-in-out hover:font-semibold hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
                <a href="#about-us"
                    class="transition-all ease-in-out hover:font-semibold hover:text-primary">{{ __('Quienes somos') }}</a>
                <a href="#bariatric-surgery-program"
                    class="transition-all ease-in-out hover:font-semibold hover:text-primary">{{ __('Programa de cirugia bariatrica') }}</a>
                <a href="#nutrition-and-health"
                    class="transition-all ease-in-out hover:font-semibold hover:text-primary">{{ __('Nutricion y Salud') }}</a>
                <a href="#contact-us"
                    class="transition-all ease-in-out hover:font-semibold hover:text-primary">{{ __('Contactanos') }}</a>
            </nav>
        </div>

        <div class="flex flex-row items-center md:hidden gap-x-2">
            <div>
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <a href="{{ route('locale.set', $lang) }}" class="flex flex-row items-center text-sm gap-x-2">
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

    <div id="nav-links"
        class="absolute hidden flex-col w-full p-10 text-center bg-white shadow-lg border-t border-primary
        top-[116px] md:hidden font-poppins shadow-gray-200 h-[60vh] gap-y-7">
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
