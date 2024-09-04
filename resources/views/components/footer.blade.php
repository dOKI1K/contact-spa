<footer class="w-full mt-10 font-poppins bg-primary">
    {{-- bg-[#FF0080] --}}
    <div class="container pt-10 mx-auto px-7 md:px-0 pb-28">
        <div class="flex flex-col items-center justify-between text-white lg:flex-row gap-y-5 xl:mx-auto">
            <div class="w-full">
                <h1 class="font-bold text-[30px]">VIDASUG</h1>
            </div>
            <div class="w-full">
                <p class="text-sm text-white">{{ __('Section1c') }}</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center py-5 text-sm text-center text-white bg-gray-800 cursor-default md:flex-row">
        <p>Designed by <a href="" class="cursor-pointer hover:text-secondary">dOKI</a></p>
        <p class="hidden px-2 md:block">•</p>
        <p>All rights reserved &copy; {{ Carbon\Carbon::now()->year }}</p>
    </div>
</footer>
