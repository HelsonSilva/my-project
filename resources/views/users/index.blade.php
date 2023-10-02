@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1 class="text-2x1 font-bold leadin-tigh py-2">
    Lista de usuários
    <a href="{{ route('users.create') }}" class="bg-blue-500 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Novo</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="py-5">
    <input type="text" name='search' placeholder="Pesquisar" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm rounded w-40 h-8 font-semibold">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden py-1">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Foto
            </th>
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
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Comentários
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                @if ($user->image)
                    <img src="{{ url("storage/{$user->image}") }}" alt="{{$user->name }}" class="object-cover w-20">
                @else
                    <img src="{{ url("images/favicon.ico") }}" alt="{{$user->name }}" class="object-cover w-20">
                @endif
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->name }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->email }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('users.edit', $user->id) }}" class="bg-green-400 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Editar</a></td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('users.show', $user->id) }}" class="bg-orange-500 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Detalhes</a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('comments.index', $user->id) }}" class="bg-blue-500 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Anotações ({{ $user->comments->count() }})</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="py-4">
    {{ $users->appends([
        'search' => request()->get('search', '')
    ])
    ->links() }}
</div>

@endsection