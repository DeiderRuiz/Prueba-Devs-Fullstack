@extends('layouts.auth')
@section('titulo', 'Panel de Administración')
@section('content')
    @if(session('success'))
        <div class="w-full mb-3 px-4 py-2 rounded-lg mx-auto font-bold text-black border border-verde-paris bg-verde-unbc">
            <span>{{session('success')}}</span>
        </div>
    @endif
    <div>
        <a href="{{ route('user.create') }}" class="relative inline-flex items-center justify-center px-4 py-2 bg-verde-unbc border border-verde-paris rounded-md uppercase tracking-wider hover:bg-verde-paris hover:border-verde-unbc focus:bg-verde-paris focus:text-black focus:outline-none focus:ring-2 focus:ring-verde-paris focus:ring-offset-2 transition ease-in-out duration-500">
            Crear Usuario
        </a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Usuario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo Electrónico
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telefono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                {{ $usuario->name }} {{ $usuario->last_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $usuario->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $usuario->cellphone }}
                            </td>
                            <td class="px-6 py-4 flex items-center">
                                <a href="{{ route('user.edit', $usuario->id) }}" class="font-medium text-verde-unbc dark:text-verde-paris hover:underline">Editar</a>
                                <form action="{{ route('user.destroy', $usuario->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Borrar" class="font-medium text-verde-unbc dark:text-verde-paris hover:underline">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection