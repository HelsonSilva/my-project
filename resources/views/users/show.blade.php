@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<h1>Detalhes do usuário - {{ $user->name}}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
<button type="submit">Deletar</button>

</form>

<button action="redirect() ->route('users.index')">Voltar</button>

@endsection

