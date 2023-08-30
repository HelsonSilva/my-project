@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1 class="text-2x1 font-bold leadin-tigh py-2">
    Lista de usuários
    <a href="{{ route('users.create') }}" class="bg-blue-800 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Novo</a>
</h1>
<form action="{{ route('users.index') }}" method="get">
    <input type="text" name='search' placeholder="Pesquisar" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm rounded w-40 h-8 font-semibold">Pesquisar</button>
</form>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden py-1">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Nome
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                E-mail
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Editar
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Detalhes
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->name }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->email }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection