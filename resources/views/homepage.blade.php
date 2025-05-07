<x-layout>
    <span id="home"></span>

    <section
        class="container flex flex-col h-full mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft md:flex-row rounded-br-[16rem]">

        <article class="w-full md:w-[40%] bg-white flex items-center justify-center p-7">
            <div class="flex flex-col bg-white">
                {{-- <img src="/img/logo.png" alt="CBR Group" class="mb-4 w-28" /> --}}
                <h1 class="text-2xl font-bold">{{ __('Hero.title') }}</h1>
                <p class="flex-wrap mt-2 text-sm text-balance">{{ __('Hero.description') }}</p>
                <div class="flex flex-col items-center w-full gap-2 mt-4 md:flex-row">
                    <a href="#contact"
                        class="w-full px-4 py-2 text-lg font-semibold text-center text-white transition-colors ease-in-out delay-100 rounded-md md:w-fit bg-secondary hover:bg-sky-900">{{ __('Contact Us') }}</a>
                    <a href="#us"
                        class="w-full px-4 py-2 text-lg font-semibold text-center border border-gray-400 rounded-md md:w-fit">{{ __('Learn More') }}</a>
                </div>
            </div>
        </article>

        <div class="w-full md:w-[60%] z-10 md:rounded-tl-[16rem] rounded-br-[16rem] bg-white">
            <img src="/img/1-first.jpg" alt="Hero" class="md:rounded-tl-[16rem] rounded-br-[16rem]">
        </div>
    </section>

    <section
        class="container flex flex-col mx-auto mt-10 rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft md:flex-row">
        <div>
            <img src="/img/logo.png" alt="CBR Group" class="w-[150px]">
        </div>
        <div class="w-full p-7">
            <p class="text-balance">{{ __('Hero.intro') }}</p>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-secondary md:rounded-bl-[16rem] rounded-md shadow-lg shadow-gray-200 animate__animated animate__zoomInUp">
        <div id="about-us" class="-translate-y-36"></div>
        <div class="flex flex-col rounded-md lg:flex-row md:rounded-bl-[16rem]">
            <div class="w-full md:w-[50%] md:rounded-bl-[16rem]">
                <img src="/img/2-second.jpg" alt="{{ __('About Us') }}" title="{{ __('About Us') }}"
                    class="w-full mx-auto md:rounded-bl-[16rem]">
            </div>
            <div class="w-full md:w-[50%] p-7 bg-secondary h-full">
                <h1 class="mb-2 text-2xl font-bold text-primary font-poppins">{{ __('About Us') }}
                </h1>
                <p class="text-white text-balance">
                    {{ __('WhoWeAre.p') }}
                </p>
                <h2 class="pt-2 text-white">{{ __('Values') }}</h2>
                <p class="text-white">{{ __('values.1') }} - {{ __('values.2') }} - {{ __('values.3') }} -
                    {{ __('values.4') }}
                </p>

                <article class="flex flex-col justify-between h-full gap-6 py-6 rounded-md lg:flex-row">
                    <div class="w-full p-4 bg-white rounded-md shadow-md">
                        <h3 class="text-lg font-semibold text-primary">{{ __('Mission') }}</h3>
                        <p class="tetx-balance">{{ __('WhoWeAre.mission') }}</p>
                    </div>
                    <div class="w-full p-4 bg-white rounded-md shadow-md">
                        <h3 class="text-lg font-semibold text-primary">{{ __('Vision') }}</h3>
                        <p class="tetx-balance">{{ __('WhoWeAre.vision') }}</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 wow animate__animated animate__fadeInLeft">
        <div class="flex flex-col bg-white rounded-md lg:flex-row ">
            <div>
                <div class="flex flex-col w-full md:flex-row-reverse">
                    <img src="/img/3-third.jpg" alt="{{ __('Medical Technology') }}"
                        title="{{ __('Medical Technology') }}" class="w-full md:w-[50%]" />
                    <article class="p-6">
                        <h1 class="w-full md:w-[50%] mb-2 text-3xl font-semibold text-primary font-poppins pb-4">
                            {{ __('Medical Technology') }}
                        </h1>
                        <p>
                            {{ __('MedTech.p') }}
                        </p>
                    </article>
                </div>
                <ul class="grid grid-cols-1 gap-4 p-6 lg:grid-cols-2 bg-secondary">
                    <li class="flex items-center justify-center p-5 text-center">
                        <h2 class="py-4 text-2xl font-bold text-primary font-poppins">
                            {{ __('MedTech.title') }}</h2>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.1') }}</h3>
                        <p>{{ __('Licences.1p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.2') }}</h3>
                        <p>{{ __('Licences.2p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.3') }}</h3>
                        <p>{{ __('Licences.3p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.4') }}</h3>
                        <p>{{ __('Licences.4p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.5') }}</h3>
                        <p>{{ __('Licences.5p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.6') }}</h3>
                        <p>{{ __('Licences.6p') }}</p>
                    </li>
                    <li class="p-5 transition-all ease-in-out hover:-translate-y-2 bg-light rounded-br-[6rem]">
                        <h3 class="py-2 font-semibold text-primary font-poppins">{{ __('Licences.7') }}</h3>
                        <p>{{ __('Licences.7p') }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section
        class="container flex flex-col mx-auto mt-10 rounded-md shadow-lg shadow-gray-200 wow animate__animated animate__fadeInLeft md:flex-row rounded-br-[16rem]">
        <article class="w-full p-6 bg-tertiary rounded-br-[16rem]">
            <div class="w-full">
                <div>
                    <h1 class="text-2xl font-bold">{{ __('Hook.title') }}</h1>
                    <p class="mb-5 text-balance">{{ __('Hook.description') }}</p>
                    <a href=""
                        class="w-full px-4 py-2 text-lg font-semibold text-center text-white transition-colors ease-in-out delay-100 rounded-md md:w-fit bg-secondary hover:bg-sky-900">{{ __('Learn More') }}</a>
                </div>
            </div>

        </article>
    </section>

    <section id="sponsor"
        class="container flex flex-col mx-auto mt-10 rounded-lg splide wow animate__animated animate__fadeInRight md:rounded-tr-[16rem]">
        <article class="flex flex-col items-center justify-center bg-white md:rounded-tr-[16rem] lg:flex-row">
            <div class="md:w-[30%] w-full">
                <img src="/img/4-fourth.jpg" alt="CBR Groups" title="CBR Groups" class="w-full">
            </div>
            <div class="md:w-[70%] w-full p-7  md:rounded-tr-[16rem]">
                <h2 class="py-4 text-4xl font-semibold text-primary font-poppins">{{ __('Partners') }} 🤝</h2>
                <p class="text-balance">{{ __('Partners.title') }}</p>
            </div>
        </article>

        <div class="splide__track ">
            <ul class="grid grid-cols-2 splide__list lg:grid-cols-6 bg-light">
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.1') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.1p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.2') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.2p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.3') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.3p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.4') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.4p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.5') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.5p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.6') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.6p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 text-center transition-all ease-in-out bg-white splide__slide hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.7') }}</h3>
                    <p class="px-2 text-balance">{{ __('Partners.7p') }}</p>
                </li>
            </ul>

            <div class="w-full p-5 mt-5 text-center bg-white rounded-lg rounded-bl-[16rem]">
                <p class="text-balance">{{ __('Partners.footer') }}</p>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md wow animate__animated animate__fadeInLeft border-primary">
        <div class="flex flex-col-reverse items-center bg-white rounded-md xl:flex-row">
            <div class="w-full">
                <img src="/img/5-fifth.jpg" alt="CBR Groups" title="CBR Groups" class="w-full mx-auto">
            </div>
            <div class="w-full p-10">
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">
                    {{ __('Real Estate') }}
                </h1>
                <p>{{ __('RealEstate.p') }}</p>

                <h3>{{ __('Services.title') }}</h3>

                <div class="flex flex-col">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <p>{{ __('Services.1') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <p>{{ __('Services.2') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <p>{{ __('Services.3') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <p>{{ __('Services.4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="container pt-6 mx-auto mt-10 shadow-lg wow animate__animated animate__fadeInLefts md:rounded-br-[6rem]">
        <div id="contact-us" class="-translate-y-28"></div>
        <div class="flex flex-col-reverse rounded-md xl:flex-row md:rounded-br-[6rem]">
            <div class="w-full transition-all ease-in-out md:w-1/2">
                <div class="w-full p-10">
                    <h1 class="mb-6 text-2xl font-bold font-poppins text-primary">{{ __('ContactForm.title') }}</h1>

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full border-b border-white md:border-b-0">
                            <div class="flex flex-row gap-2 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <a class="hover:text-primary" target="_blank"
                                    href="https://www.google.com/maps/place/310+Racquet+Club+Rd+APT+101,+Weston,+FL+33326,+EE.+UU./@26.1259751,-80.3839895,14z/data=!4m6!3m5!1s0x88d90a3c43eafc83:0x2a89b2d2b95525a8!8m2!3d26.1249974!4d-80.3807601!16s%2Fg%2F11f4lhxqqd?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
                                    310 Racquet Club, APT 101, Weston, FL, 33326-1119
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row">
                        <div class="w-full">
                            <div class="flex flex-row gap-2 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                </svg>

                                <a class="hover:text-primary"
                                    href="mailto:sales@CBR Group.com">info@cbrgroupllc.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6">
                    <img src="/img/6-sixth.jpg" alt="CBR Group" title="CBR Group" class="w-full mx-auto">
                </div>
            </div>

            <form action="{{ route('email.send') }}" method="post"
                class="w-full p-4 text-white lg:p-10 md:w-1/2 bg-secondary md:rounded-br-[6rem]">
                @csrf
                <div class="flex flex-col w-full p-4 lg:p-10">
                    {{-- <h1 class="mb-6 text-2xl font-bold font-poppins">{{ __('ContactForm.title') }}</h1> --}}
                    <p class="pb-3 text-balance">{{ __('ContactForm.p') }}</p>
                    <div class="flex flex-col gap-4">
                        <input type="text" name="name" placeholder="{{ __('Name') }}"
                            class="w-full p-3 text-black rounded-md focus:outline-none focus:ring focus:ring-primary"
                            required>
                        <input type="email" name="email" placeholder="{{ __('Email') }}"
                            class="w-full p-3 text-black rounded-md focus:outline-none focus:ring focus:ring-primary"
                            required>
                        <textarea name="message" rows="5" placeholder="{{ __('Message') }}"
                            class="w-full p-3 text-black rounded-md focus:outline-none focus:ring focus:ring-primary" required></textarea>
                        <button type="submit"
                            class="w-full px-4 py-2 text-lg font-semibold text-center text-white transition-colors ease-in-out delay-100 rounded-md bg-primary hover:bg-sky-900">{{ __('Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>
