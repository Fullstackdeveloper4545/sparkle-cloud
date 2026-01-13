<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400..800&display=swap" rel="stylesheet">


        <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/hero-three.js'])


    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#101010] text-white antialiased">
        <div class="w-full pt-6">
            <x-header />
            <x-hero />
            <x-logos />
            <x-features />
            <x-text-image />
            <x-split-section />
            <x-templates/>
            <x-main-faq />
            <div class="page-bg">
        <x-container-single />
        <x-footer />
    </div>
        </div>

        @stack('scripts')
    </body>
</html>
