@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<h1 class="text-2x1 font-bold leadin-tigh py-2">Detalhes do usuário - {{ $user->name}}</h1>

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
                Ação
            </th>            
        </tr>
    </thead>
    <tbody>    
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->name }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">{{$user->email }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-gray-50 text-left text-sky-500">
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                 <button type="submit" class="shadow bg-red-500 hover:bg-red-300 focus:shadow-outline focus:outline-none text-white text-sm rounded w-20 h-8 font-semibold">Deletar</button>                
                </form>
            </td>            
        </tr>    
    </tbody>
</table>

@endsection

