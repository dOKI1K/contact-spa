<x-layout>
    <span id="home"></span>

    <section class="container animate__animated animate__fadeInLeft mx-auto h-screen">
    </section>

    <span id="about" class="mb-5"></span>

    <section class="container mt-10 wow animate__animated animate__fadeInLeft mx-auto h-3/5">

    </section>

    <section id="contact"
        class="container mt-10 p-10 wow animate__animated animate__fadeInLeft mx-auto bg-slate-200 flex flex-row">
        <form action="" method="post"
            class="flex flex-col space-y-2 p-5 font-mulish w-full animate__animated animate__slideInUp overflow-hidden">
            @csrf
            <h1 class="text-2xl font-bold font-poppins">Contact Us</h1>

            <label for="ctct-name">{{ __('Full Name') }}</label>
            <input class="py-3 px-2 outline-none rounded-sm border-gray-800 border" type="text" name="ctct-name"
                id="ctct-name" placeholder="Lionel Messi">
            <label for="ctct-email">{{ __('Email') }}</label>
            <input class="py-3 px-2 outline-none rounded-sm border-gray-800 border" type="email" name="ctct-email"
                id="ctct-email" placeholder="liomessi@gmail.com">
            <label for="ctct-message">{{ __('Message') }}</label>
            <textarea class="py-3 px-2 outline-none rounded-sm border-gray-800 border" name="ctct-message" id="ctct-message"
                cols="30" rows="10" placeholder="Message"></textarea>

        </form>
        <div class="w-full">

        </div>
    </section>
</x-layout>
