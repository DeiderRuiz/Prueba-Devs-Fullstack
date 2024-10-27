<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'UNBC') }} - @yield('titulo')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <header>
        <nav class="border-gray-200 bg-azul-unbc dark:bg-gray-700 dark:border-gray-800">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('dashboard') }}">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UNBC LTDA</span>
                </a>
                <div class="flex items-center justify-center self-center font-semibold whitespace-nowrap dark:text-white">
                    <span>{{ Auth::check() ? Auth::user()->name . ' ' . Auth::user()->last_name : 'Invitado' }}</span>
                    <form action="{{route('logout.logout')}}" method="post" class="ml-3">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="p-6">
        @yield('content')
    </main>
    @livewireScripts
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
</body>
</html>