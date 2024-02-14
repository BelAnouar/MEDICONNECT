<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen">
        <div class="flex md:flex-row">
            <div
                class="md:w-1/2 hidden md:flex flex-col px-10 py-28 bg-[url('/public/img/k.jpg')] bg-center h-[100vh]   ">
                <h1 class="mb-6 text-4xl font-semibold text-white ">Welcome</h1>

                <p class="pl-3 leading-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam illo eius vero odio harum laboriosam amet autem. Similique magni iusto exercitationem
                    perferendis architecto saepe! Esse nemo velit vero dolore rerum.</p>
            </div>
            <div class="w-full px-16 py-16 md:w-1/2">

                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
