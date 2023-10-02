@extends('layouts.app')

@section('title', "Comentários do Usuário - $user->name")

@section('content')

<h1 class="text-2x1 font-bold leadin-tigh py-2">
    Comentários do Usuário - {{ $user->name }}
    <a href="{{ route('comments.create', $user->id) }}" class="bg-blue-500 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Novo</a>
</h1>

<form action="{{ route('comments.index', $user->id) }}" method="get" class="py-5">
    <input type="text" name='search' placeholder="Pesquisar" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm rounded w-40 h-8 font-semibold">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden py-1">
    <thead>
        <tr>            
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Contéudo
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Visível
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-black">
                Editar
            </th>                        
        </tr>
    </thead>
    <tbody>
    @foreach ($comments as $comment)
        <tr>            
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$comment->body }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$comment->visible ? 'SIM' : 'NÃO' }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}" class="bg-green-400 rounded h-8 pl-2 text-white px-4 py-1 pl-2">Editar</a></td>            
        </tr>
    @endforeach
    </tbody>
</table>
@endsection