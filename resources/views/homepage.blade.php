<x-layout>
    <span id="home"></span>

    <section
        class="container mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 animate__animated animate__fadeInLeft">
        <div id="about-us" class="-translate-y-28"></div>
        <div class="flex flex-col-reverse items-center p-10 lg:flex-row">
            <div>

                <h1 class="mb-2 text-2xl font-bold text-primary font-poppins">{{ __('Quienes somos') }}</h1>
                <p>
                    {{ __('Section1a') }} <br><br>
                    {{ __('Section1b') }} <br><br>
                    {{ __('Section1c') }} <br><br>
                    {{ __('Section1d') }} <br><br>
                    {{ __('Section1e') }}
                </p>
            </div>

            <div class="w-full py-5 ml-4 lg:py-0 md:">
                <img src="/img/quienes-somos.jpg" alt="VIDASUG" title="VIDASUG">
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md shadow-lg border-primary shadow-gray-200 animate__animated animate__zoomInUp">
        <div id="bariatric-surgery-program" class="-translate-y-28"></div>
        <div class="flex flex-col items-center p-10 bg-white rounded-md lg:flex-row">
            <div class="w-full">
                <img src="/img/surg-bar.jpg" alt="{{ __('Programa de cirugia bariatrica') }}"
                    title="{{ __('Programa de cirugia bariatrica') }}" class="mx-auto w-[500px]">
            </div>
            <div>
                <h1 class="mb-2 text-2xl font-bold text-primary font-poppins">{{ __('Programa de cirugia bariatrica') }}
                </h1>
                <p>
                    {{ __('Section2a') }} <br><br>
                    {{ __('Section2b') }} <br><br>
                    {{ __('Section2c') }} <br><br>
                    {{ __('Section2d') }}
                </p>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 wow animate__animated animate__fadeInLeft">
        <div class="flex flex-col items-center p-10 bg-white rounded-md lg:flex-row ">
            <div>
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">{{ __('Mini Bypass Gástrico') }}</h1>
                <p>
                    {{ __('Section3a') }} <br><br>
                    {{ __('Section3b') }} <br><br>
                </p>
                <h2 class="py-4 font-semibold text-primary font-poppins">{{ __('Section3cTitle') }}</h2>
                <p>
                    {{ __('Section3c') }} <br><br>
                    {{ __('Section3d') }} <br><br>
                    {{ __('Section3e') }}
                </p>
            </div>
            <div class="w-full">
                <img src="/img/mini-bypass.png" alt="VIDASUG" title="VIDASUG">
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md shadow-lg border-primary shadow-gray-200 animate__animated animate__zoomInUp">
        <div id="bariatric-surgery-program" class="-translate-y-28"></div>
        <div class="flex flex-col items-center p-10 bg-white rounded-md lg:flex-row">
            <div>
                <h1 class="mb-2 text-2xl font-bold text-primary font-poppins">
                    {{ __('Teleconsultas en VIDASUG: Apoyo Integral sin Fronteras') }}
                </h1>
                <p class="pr-0 lg:pr-5">
                    {{ __('Section7a') }} <br><br>
                    {{ __('Section7b') }} <br><br>
                    {{ __('Section7c') }} <br><br>
                    {{ __('Section7d') }} <br><br>
                    {{ __('Section7e') }}
                </p>
            </div>
            <div class="w-full">
                <img src="/img/telecomunicacion.jpg"
                    alt="{{ __('Teleconsultas en VIDASUG: Apoyo Integral sin Fronteras') }}"
                    title="{{ __('Teleconsultas en VIDASUG: Apoyo Integral sin Fronteras') }}"
                    class="mx-auto w-[500px]">
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md wow animate__animated animate__fadeInLeft border-primary">
        <div class="flex flex-col-reverse items-center p-10 bg-white rounded-md xl:flex-row">
            <div class="lg:w-[500px] w-full mt-8 md:mr-10">
                <img src="/img/educacion.webp" alt="Vidasug" title="Vidasug" class="w-full mx-auto">
            </div>
            <div class="w-full">
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">
                    {{ __('Educación en VIDASUG: Formación Continua y Especializada para Profesionales de la Salud') }}
                </h1>
                <p>{{ __('Section8a') }}</p>

                <div class="grid grid-cols-1 gap-4 mt-5 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot1Title') }}</h3>
                        <p>{{ __('Section8dot1') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot2Title') }}</h3>
                        <p>{{ __('Section8dot2') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot3Title') }}</h3>
                        <p>{{ __('Section8dot3') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot4Title') }}</h3>
                        <p>{{ __('Section8dot4') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot5Title') }}</h3>
                        <p>{{ __('Section8dot5') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8dot6Title') }}</h3>
                        <p>{{ __('Section8dot6') }}</p>
                    </div>
                </div>

                <h2 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8bTitle') }}</h2>
                <p>{{ __('Section8b') }}</p>

                <h2 class="py-4 font-semibold text-primary font-poppins">{{ __('Section8cTitle') }}</h2>
                <p>{{ __('Section8c') }}</p> <br>
                <p>{{ __('Section8d') }}</p>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white rounded-md shadow-lg shadow-gray-200 wow animate__animated animate__fadeInLeft">
        <div id="nutrition-and-health" class="-translate-y-28"></div>
        <div class="flex flex-col-reverse items-center p-10 bg-white rounded-md xl:flex-row">
            <div class="w-full">
                <img src="/img/nutrcion.png" alt="Vidasug" title="Vidasug" class="mx-auto w-[500px]">
            </div>
            <div>
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">{{ __('Nutrición y Salud') }}</h1>

                <h2 class="mb-2 text-lg font-semibold text-primary font-poppins">
                    {{ __('Etapas de la nutrición para pacientes bariátricos') }}</h2>
                <p>{{ __('Section4a') }}</p>
                <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section4bTitle') }}</h3>
                <p>{{ __('Section4b') }}</p>
                <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section4cTitle') }}</h3>
                <p>{{ __('Section4c') }}</p>
                <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section4dTitle') }}</h3>
                <p>{{ __('Section4d') }}</p> <br>
                <p>{{ __('Section4e') }}</p>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md wow animate__animated animate__fadeInLeft border-primary">
        <div class="flex flex-col-reverse items-center p-10 bg-white rounded-md xl:flex-row">
            <div class="w-full">
                <img src="/img/suplementos.png" alt="Vidasug" title="Vidasug" class="mx-auto w-[500px]">
            </div>
            <div>
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">
                    {{ __('Suplementos recomendados') }}</h1>
                <p>{{ __('Section5a') }}</p>

                <div class="grid grid-cols-1 gap-4 mt-5 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5bTitle') }}</h3>
                        <p>{{ __('Section5b') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5cTitle') }}</h3>
                        <p>{{ __('Section5c') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5dTitle') }}</h3>
                        <p>{{ __('Section5d') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5eTitle') }}</h3>
                        <p>{{ __('Section5e') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5fTitle') }}</h3>
                        <p>{{ __('Section5f') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5gTitle') }}</h3>
                        <p>{{ __('Section5g') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section5hTitle') }}</h3>
                        <p>{{ __('Section5h') }}</p>
                    </div>
                </div>

                <p class="mt-5">{{ __('Section5i') }}</p>
            </div>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 bg-white border rounded-md shadow-lg border-primary wow animate__animated animate__fadeInLeft">
        <div class="flex flex-col p-10 bg-white rounded-md lg:flex-row">
            <div>
                <h1 class="mb-2 text-2xl font-semibold text-primary font-poppins">
                    {{ __('Volver a Hacer Ejercicio: Recupera Tu Bienestar') }}</h1>
                <p>{{ __('Section6a') }}</p>
                <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6bTitle') }}</h3>
                <p>{{ __('Section6b') }}</p>
                <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6cTitle') }}</h3>
                <p>{{ __('Section6c') }}</p>

                <h2 class="mt-10 text-xl font-semibold text-primary font-poppins">
                    {{ __('Recomendaciones Iniciales') }}
                </h2>

                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6dTitle') }}</h3>
                        <p>{{ __('Section6d') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6eTitle') }}</h3>
                        <p>{{ __('Section6e') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6fTitle') }}</h3>
                        <p>{{ __('Section6f') }}</p>
                    </div>
                </div>

                <h2 class="mt-10 text-xl font-semibold text-primary font-poppins">
                    {{ __('Precauciones') }}
                </h2>

                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6gTitle') }}</h3>
                        <p>{{ __('Section6g') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6hTitle') }}</h3>
                        <p>{{ __('Section6h') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6iTitle') }}</h3>
                        <p>{{ __('Section6i') }}</p>
                    </div>
                </div>

                <h2 class="mt-10 text-xl font-semibold text-primary font-poppins">
                    {{ __('Consejos para Mantener la Motivación') }}
                </h2>

                <div class="grid grid-cols-1 gap-4 transition-shadow ease-in-out lg:grid-cols-3">
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6jTitle') }}</h3>
                        <p>{{ __('Section6j') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6kTitle') }}</h3>
                        <p>{{ __('Section6k') }}</p>
                    </div>
                    <div
                        class="p-5 transition-all ease-in-out shadow-lg shadow-gray-200 hover:shadow-gray-300 hover:-translate-y-2">
                        <h3 class="py-4 font-semibold text-primary font-poppins">{{ __('Section6lTitle') }}</h3>
                        <p>{{ __('Section6l') }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full mt-6">
                <img src="/img/medicine.svg" alt="VIDASUG" title="VIDASUG">
            </div>
        </div>
    </section>

    <section id="sponsor" class="container mx-auto mt-10 rounded-lg splide">
        <div class="rounded-lg splide__track">
            <ul class="grid grid-cols-2 rounded-lg splide__list lg:grid-cols-6">
                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.mountsinai.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/mountsinai.png" alt="Mount Sinai" class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">Mount Sinai</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.mhs.net/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/memorialhospital.svg" alt="Memorial Hospital"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">Memorial Hospital</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://jeffersonhealthcare.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/jeffersonhealthcare.png" alt="Jefferson Healthcare"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">Jefferson Healthcare</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.phs.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/presbyterian.svg" alt="Presbyterian"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">Presbyterian</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.hopkinsmedicine.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/hopkins-medicine.svg" alt="John Hopkins"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">John Hopkins</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.uclahealth.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/ucla-health.svg" alt="UCLA Medical Center"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">UCLA Medical Center</h2>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="items-center px-2 splide__slide h-fit">
                    <a href="https://www.clinicasierravista.org/" target="_blank"
                        class="z-30 m-2 transition-all hover:-translate-y-1">
                        <div
                            class="items-center w-full h-full px-5 py-6 text-center border rounded-lg shadow-md border-primary bg-slate-700">
                            <img src="/img/sponsor/sierravista.png" alt="Clinica Sierra Vista"
                                class="h-[100px] w-fit mx-auto">
                            <div class="p-2">
                                <h2 class="font-semibold text-gray-500 text-md">Clinica Sierra Vista</h2>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section
        class="container mx-auto mt-10 text-white border rounded-md shadow-lg bg-slate-700 border-primary wow animate__animated animate__fadeInLefts">
        <div id="contact-us" class="-translate-y-28"></div>
        <div class="flex flex-col-reverse items-center p-4 rounded-md lg:p-10 xl:flex-row">
            <div class="w-full xl:w-1/3">
                <img src="/img/contacto.jpg" alt="Vidasug" title="Vidasug" class="mx-auto w-[500px]">
            </div>

            <div class="p-4 transition-all ease-in-out lg:p-10">
                <h1 class="mb-6 text-2xl font-bold font-poppins">{{ __('Contactanos') }}</h1>

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
                                    href="https://www.google.com/maps/place/Pico+1641,+B1721JYG+Merlo,+Provincia+de+Buenos+Aires/@-34.704101,-58.7287971,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcc02454f83765:0x170a0f0c0d290b9c!8m2!3d-34.704101!4d-58.7287971?entry=ttu&g_ep=EgoyMDI0MDgyNy4wIKXMDSoASAFQAw%3D%3D">
                                    Pico 1641, Piso 9 dpto A, B1721JYG Merlo, Provincia de Buenos Aires
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
                                <a class="hover:text-primary" href="mailto:sales@vidasug.com">sales@vidasug.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
