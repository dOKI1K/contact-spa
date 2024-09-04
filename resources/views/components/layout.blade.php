<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="robots" content="index,follow">
    <meta name="description" content="{{ __('Section1a') }}">
    <meta name="keywords"
        content="bariatric, cirugia, surgery, bypass, vidasug, gastrico, eeuu, usa, quirurgica, nutricion, salud, argentina, operacion, suplementos, bienestar, estomago, bariatrica, obesidad, obesity">

    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="icon" href="{{ env('APP_URL') . '/favicon.ico' }}" type="image/x-icon">
    <meta property="og:image" itemprop="image" content="@yield('icon', 'https://vidasug.com/favicon.ico')" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />

    <title>VIDASUG</title>
</head>

<body class="scroll-smooth bg-secondary font-jost">
    <x-header></x-header>
    <main>
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>

</html>
