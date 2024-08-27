<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />

    <title>Contact</title>
</head>

<body class="scroll-smooth bg-gradient-to-tr from-primary to-secondary">
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
