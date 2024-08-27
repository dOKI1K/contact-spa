<footer class="w-full mt-10 font-poppins bg-white">
    <div class="container grid grid-cols-1 gap-20 mx-auto md:grid-cols-2 px-7 md:px-0 items-center pt-10 pb-28">
        <div class="flex flex-col gap-y-5 xl:mx-auto">
            <h1 class="font-bold text-[30px] text-gray-700">Brand</h1>
            <p class="text-sm text-gray-500">Our mission is to be your trusted source for timely and accurate information
                about building changes, ensuring you stay informed and confident in your decisions</p>
        </div>


        <div class="flex flex-col gap-y-5 xl:mx-auto text-center ">
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
    <div class="bg-gray-800 text-white text-center py-5 cursor-default">
        <p>Designed by <a href="" class="cursor-pointer hover:text-secondary">dOKI</a> • All rights reserved
            &copy;
            {{ Carbon\Carbon::now()->year }}
        </p>
    </div>
</footer>
