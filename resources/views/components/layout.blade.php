<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="robots" content="index,follow">
    <meta name="description" content="{{ __('Section1a') }}">
    <meta name="generator" content="Laravel 11">
    <meta name="author" content="dOKI | Lahuen Millananco">
    <meta name="theme-color" content="#0f172a">
    <meta name="keywords"
        content="CBR Group, CBR Group LLC, Real State, Medice, CBR Group Real State & Medice, U.S.-based company, CBR Group, Innovation, eeuu, usa, Excellence, Dialysis Systems, Medical Components, argentina, operacion, Carl, Zeiss, Meditec, AG, bienestar, estomago, Medical, obesidad, obesity">

    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="icon" href="{{ env('APP_URL') . '/favicon.ico' }}" type="image/x-icon">

    <meta property="og:image" itemprop="image" content="@yield('icon', 'https://cbrgroupllc.com/favicon.ico')" />
    <meta property="og:title" content="CBR Group | Real State & Medice">
    <meta property="og:description" content="{{ __('Section1a') }}">
    <meta property="og:image" content="https://cbrgroupllc.com/img/logo2.png">
    <meta property="og:url" content="https://cbrgroupllc.com/">
    <meta property="og:type" content="website">



    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />

    <title>CBR Group | Real State & Medice</title>
</head>

<body class="overflow-x-hidden scroll-smooth bg-light font-jost">
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
