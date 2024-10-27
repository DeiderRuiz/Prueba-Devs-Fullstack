@extends('layouts.auth')
@section('titulo', 'Eitar Usuario')
@section('content')
    <div class="flex items-center justify-center">
        <div class="w-96 rounded-lg bg-white border border-gray-200 shadow dark:bg-gray-700 dark:text-white dark:border-gray-500">
            <div class="p-5">
                <h3 class="text-center tracking-tight text-xl">Editar Usuario {{ $usuario->name }}</h3>
                <form action="{{ route('user.update', $usuario->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-2 gap-2">
                        <label for="name" class="text-left">
                            <span class="text-sm">Nombre</span>
                            <input type="text" name="name" value="{{ old('name', $usuario->name) }}" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('name')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                        <label for="last_name" class="text-left">
                            <span class="text-sm">Apellido</span>
                            <input type="text" name="last_name" value="{{ old('last_name', $usuario->last_name) }}" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('last_name')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <label for="email" class="text-left">
                            <span class="text-sm">Correo Electrónico</span>
                            <input type="email" name="email" value="{{ old('email', $usuario->email) }}" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('email')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                        <label for="cellphone" class="text-left">
                            <span class="text-sm">Número De Telefono</span>
                            <input type="text" name="cellphone" value="{{ old('cellphone', $usuario->cellphone) }}" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('cellphone')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <label for="password" class="text-left">
                            <span class="text-sm">Contraseña</span>
                            <input type="password" name="password" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('password')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                        <label for="password_confirmation" class="text-left">
                            <span class="text-sm">Confirmar Contraseña</span>
                            <input type="password" name="password_confirmation" class="mb-2 appearance-none text-sm rounded-lg relative block w-full px-3 py-2 bg-gray-100 border border-verde-paris focus:outline-none focus:ring-1 focus:ring-verde-unbc focus:border-verde-unbc focus:bg-gray-200 focus:z-10 shadow-sm dark:bg-gray-500 dark:focus:bg-gris-marengo">
                            @error('password')
                                <small class="font-bold text-red-500/80">{{ $message }}</small>
                            @enderror
                        </label>
                    </div>
                    <button type="submit" class="flex justify-center w-full px-4 py-2 bg-verde-unbc border border-verde-paris rounded-md uppercase tracking-wider hover:bg-verde-paris hover:border-verde-unbc focus:bg-verde-paris focus:text-black focus:outline-none focus:ring-2 focus:ring-verde-paris focus:ring-offset-2 transition ease-in-out duration-500">
                        Actulizar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection