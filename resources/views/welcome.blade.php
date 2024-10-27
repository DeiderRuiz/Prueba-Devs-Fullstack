<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'UNBC') }} - Iniciar Sesión</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @livewireStyles
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <header>
        <nav class="border-gray-200 bg-azul-unbc dark:bg-gray-700 dark:border-gray-800">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LTDA UNBC</span>
            </div>
        </nav>
    </header>
    <main class="p-6">
        <div class="flex items-center justify-center p-6">
            <div class="w-96 rounded-lg bg-white border border-gray-200 shadow dark:bg-gray-700 dark:text-white dark:border-gray-500">
                <div class="p-5">
                    <h3 class="mb-2 text-center tracking-tight text-3xl">UNBC</h3>
                    <h3 class="mb-2 text-center tracking-tight text-xl">Iniciar Sesión</h3>
                    <form action="{{route('login.login')}}" method="post">
                        @if(session('warn'))
                            <p class="mb-3 text-center font-bold text-red-500">
                                {{ session('warn') }}
                            </p>
                        @endif
                        @csrf
                        <label for="email" class="text-left">
                            <span>Correo Electrónico</span>
                            <input type="email" name="email" class="mb-2 appearance-none rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                        </label>
                        <label for="password" class="text-left">
                            <span>Contraseña</span>
                            <input type="password" name="password" class="mb-2 appearance-none rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                        </label>
                        <button type="submit" class="flex justify-center w-full mb-5 px-4 py-2 bg-verde-unbc border border-verde-paris rounded-md uppercase tracking-wider hover:bg-verde-paris hover:border-verde-unbc focus:bg-verde-paris focus:text-black focus:outline-none focus:ring-2 focus:ring-verde-paris focus:ring-offset-2 transition ease-in-out duration-500">
                            Iniciar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @livewireScripts
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
</body>
</html>