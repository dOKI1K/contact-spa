<footer class="w-full mt-10 bg-white font-poppins">
    <div class="container grid items-center grid-cols-1 gap-20 pt-10 mx-auto md:grid-cols-2 px-7 md:px-0 pb-28">
        <div class="flex flex-col items-start gap-y-5">
            <img src="/img/logo/logo-byn.svg" alt="" class="h-14">
            <p class="text-sm text-gray-500">Proveemos soluciones integrales de importación, garantizando rapidez,
                seguridad y adaptabilidad a las necesidades de nuestros clientes, contribuyendo al desarrollo económico
                de Argentina.</p>
        </div>


        <div class="flex flex-col text-center gap-y-5 xl:mx-auto ">
            <a href="mailto:brand@mail.com" class="text-sm text-gray-500">brand@mail.com</a>
            <div>
                <a href="#" target="_blank"
                    class="px-2 pt-5 pb-1 transition-colors bg-white rounded-full hover:text-white hover:bg-primary"><i
                        class='text-3xl bx bxl-facebook-circle'></i></a>
                <a href="#" target="_blank"
                    class="px-2 pt-5 pb-1 transition-colors bg-white rounded-full hover:text-white hover:bg-primary"><i
                        class='text-3xl bx bxl-github'></i></a>
                <a href="#" target="_blank"
                    class="px-2 pt-5 pb-1 transition-colors bg-white rounded-full hover:text-white hover:bg-primary"><i
                        class='text-3xl bx bxl-linkedin'></i></a>
                <a href="#" target="_blank"
                    class="px-2 pt-5 pb-1 transition-colors bg-white rounded-full hover:text-white hover:bg-primary"><i
                        class='text-3xl bx bxl-youtube'></i></a>
            </div>
        </div>
    </div>
    <div class="py-5 text-center text-white bg-gray-800 cursor-default">
        <p>Designed by <a href="" class="cursor-pointer hover:text-secondary">dOKI</a> • All rights reserved
            &copy;
            {{ Carbon\Carbon::now()->year }}
        </p>
    </div>
</footer>
