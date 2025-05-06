<x-layout>
    <span id="home"></span>

    <section
        class="container flex flex-col mx-auto mt-10 rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft md:flex-row">
        <div class="w-full md:w-[30%] relative">
            <div class="absolute top-0 left-0 w-full h-full">
                <div>
                    <h1 class="text-2xl font-bold">{{ __('Hero.title') }}</h1>
                    <p class="text-balance">{{ __('Hero.description') }}</p>
                    <a href="">{{ __('Learn More') }}</a>
                </div>
            </div>
        </div>
        <div class="w-full md:w-[70%] z-10">
            <img src="/img/1-first.jpg" alt="Hero">
        </div>
    </section>

    <section
        class="container flex flex-col mx-auto mt-10 rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft md:flex-row">
        <div class="w-full p-7">
            <p class="text-balance">{{ __('Hero.intro') }}</p>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md shadow-lg border-primary shadow-gray-200 animate__animated animate__zoomInUp">
        <div id="bariatric-surgery-program" class="-translate-y-28"></div>
        <div class="flex flex-col items-center p-10 bg-white rounded-md lg:flex-row">
            <div class="w-full">
                <img src="/img/2-second.jpg" alt="{{ __('About Us') }}" title="{{ __('About Us') }}"
                    class="mx-auto w-[500px]">
            </div>
            <div>
                <h1 class="mb-2 text-2xl font-bold text-primary font-poppins">{{ __('About Us') }}
                </h1>
                <p class="text-balance">
                    {{ __('WhoWeAre.p') }}
                </p>
            </div>
        </div>
        <article class="flex flex-col justify-between h-full gap-6 p-10 bg-white rounded-md lg:flex-row">
            <div class="w-full p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">{{ __('Mission') }}</h3>
                <p class="tetx-balance">{{ __('WhoWeAre.mission') }}</p>
            </div>
            <div class="w-full p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">{{ __('Vision') }}</h3>
                <p class="tetx-balance">{{ __('WhoWeAre.vision') }}</p>
            </div>
            <div class="w-full p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">{{ __('Values') }}</h3>
                <ul class="ml-4 list-disc tetx-balance">
                    <li>{{ __('values.1') }}</li>
                    <li>{{ __('values.2') }}</li>
                    <li>{{ __('values.3') }}</li>
                    <li>{{ __('values.4') }}</li>
                </ul>
            </div>
        </article>
    </section>

    <section
        class="container mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 wow animate__animated animate__fadeInLeft">
        <div class="flex flex-col items-center p-10 bg-white rounded-md lg:flex-row ">
            <div>
                <img src="/img/3-third.jpg" alt="{{ __('Medical Technology') }}"
                    title="{{ __('Medical Technology') }}" class="mx-auto w-[500px]">

                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">{{ __('Medical Technology') }}</h1>
                <p>
                    {{ __('MedTech.p') }}
                </p>
                <h2 class="py-4 font-semibold text-primary font-poppins">{{ __('MedTech.title') }}</h2>
                <ul>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.1') }}</h3>
                        <p>{{ __('Licences.1p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.2') }}</h3>
                        <p>{{ __('Licences.2p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.3') }}</h3>
                        <p>{{ __('Licences.3p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.4') }}</h3>
                        <p>{{ __('Licences.4p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.5') }}</h3>
                        <p>{{ __('Licences.5p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.6') }}</h3>
                        <p>{{ __('Licences.6p') }}</p>
                    </li>
                    <li
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Licences.7') }}</h3>
                        <p>{{ __('Licences.7p') }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section
        class="container flex flex-col mx-auto mt-10 rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft md:flex-row rounded-br-[16rem]">
        <article class="w-full p-6 bg-tertiary rounded-br-[16rem]">
            <div class="w-full">
                <div>
                    <h1 class="text-2xl font-bold">{{ __('Hook.title') }}</h1>
                    <p class="text-balance">{{ __('Hook.description') }}</p>
                    <a href="">{{ __('Learn More') }}</a>
                </div>
            </div>

        </article>
    </section>

    <section id="sponsor" class="container flex flex-col mx-auto mt-10 rounded-lg splide md:flex-row">
        <div class="lg:w-[500px] w-full mt-8 md:mr-10">
            <img src="/img/4-fourth.jpg" alt="CBR Groups" title="CBR Groups" class="w-full mx-auto">
        </div>

        <div class="rounded-lg splide__track">
            <h2 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners') }} 🤝</h2>
            <p class="text-balance">{{ __('Partners.title') }}</p>
            <ul class="grid grid-cols-2 rounded-lg splide__list lg:grid-cols-6">
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.1') }}</h3>
                    <p>{{ __('Partners.1p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.2') }}</h3>
                    <p>{{ __('Partners.2p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.3') }}</h3>
                    <p>{{ __('Partners.3p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.4') }}</h3>
                    <p>{{ __('Partners.4p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.5') }}</h3>
                    <p>{{ __('Partners.5p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.6') }}</h3>
                    <p>{{ __('Partners.6p') }}</p>
                </li>
                <li
                    class="items-center p-5 px-2 transition-all ease-in-out shadow-lg splide__slide h-fit shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                    <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Partners.7') }}</h3>
                    <p>{{ __('Partners.7p') }}</p>
                </li>
            </ul>

            <p class="text-balance">{{ __('Partners.footer') }}</p>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md wow animate__animated animate__fadeInLeft border-primary">
        <div class="flex flex-col-reverse items-center p-10 bg-white rounded-md xl:flex-row">
            <div class="w-full mt-8 md:mr-10">
                <img src="/img/5-fifth.jpg" alt="CBR Groups" title="CBR Groups" class="w-full mx-auto">
            </div>
            <div class="w-full">
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
        class="container mx-auto mt-10 text-white border rounded-md shadow-lg bg-slate-700 border-primary wow animate__animated animate__fadeInLefts">
        <div id="contact-us" class="-translate-y-28"></div>
        <div class="flex flex-col-reverse items-center p-4 rounded-md lg:p-10 xl:flex-row">
            <div class="w-full xl:w-1/3">
                <img src="" alt="CBR Group" title="CBR Group" class="mx-auto w-[500px]">
            </div>

            <div class="p-4 transition-all ease-in-out lg:p-10">
                <h1 class="mb-6 text-2xl font-bold font-poppins">{{ __('ContactForm.title') }}</h1>

                <div class="flex flex-col md:flex-row">
                    <div class="w-full p-5 border-b border-white md:border-b-0 md:border-r">
                        <div class="flex flex-row gap-2 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p>Argentina</p>
                        </div>
                        <ul class="ml-6 list-disc">
                            <li>
                                <a class="hover:text-primary"
                                    href="https://www.google.com.ar/maps/place/Pico+1641,+C1429+Cdad.+Aut%C3%B3noma+de+Buenos+Aires/@-34.5364384,-58.4695817,17.28z/data=!4m6!3m5!1s0x95bcb7772c17f071:0xd1b5cab81903182d!8m2!3d-34.5368259!4d-58.4670462!16s%2Fg%2F11sdn5kb0j?entry=ttu&g_ep=EgoyMDI0MTAyNy4wIKXMDSoASAFQAw%3D%3D">
                                    PICO 1641, C1429 CABA, Argentina
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full p-5">
                        <div class="flex flex-row gap-2 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p>{{ __('Estados Unidos') }}</p>
                        </div>
                        <ul class="ml-6 list-disc">
                            <li>
                                <a class="hover:text-primary"
                                    href="https://www.google.com/maps/place/2080+Century+Park+E+Suite+501,+Los+Angeles,+CA+90067,+EE.+UU./@34.0593451,-118.4112102,17z/data=!3m1!4b1!4m6!3m5!1s0x80c2bbf3cd542ad7:0x4fda3bd043f6cc75!8m2!3d34.0593451!4d-118.4112102!16s%2Fg%2F11lkj6_f49?entry=ttu&g_ep=EgoyMDI0MDgyNy4wIKXMDSoASAFQAw%3D%3D">
                                    2080 Century Park East, Suite 501, Los Angeles, CA 90067
                                </a>
                            </li>
                            <li>
                                <a class="hover:text-primary"
                                    href="https://www.google.com/maps/place/1+W+Ridgewood+Ave+Suite+G02,+Paramus,+NJ+07652,+EE.+UU./@40.9704153,-74.0816907,17z/data=!3m1!4b1!4m6!3m5!1s0x89c2e4d416eaaaab:0xee121cab0749062f!8m2!3d40.9704153!4d-74.0816907!16s%2Fg%2F11sttwpx1f?entry=ttu&g_ep=EgoyMDI0MDgyNy4wIKXMDSoASAFQAw%3D%3D">
                                    1 W Ridgewood Ave Suite G02, Paramus, NJ 07652, United States
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row">
                    <div class="w-full p-5">
                        <div class="flex flex-row gap-2 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>

                            <p>{{ __('Número telefónico') }}</p>
                        </div>
                        <ul class="ml-6 list-disc">
                            <li>
                                <a class="hover:text-primary" href="tel:+5492235792916">+54 9 2235792916</a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full p-5">
                        <div class="flex flex-row gap-2 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                            </svg>

                            <p>{{ __('Correo electrónico') }}</p>
                        </div>
                        <ul class="ml-6 list-disc">
                            <li>
                                <a class="hover:text-primary" href="mailto:sales@CBR Group.com">sales@CBR
                                    Group.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
