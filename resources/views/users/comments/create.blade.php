@extends('layouts.app')

@section('title', "Novo Comentário para Usuário {$user->name}")

@section('content')
<h1 class="text-2x1 font-bold leadin-tigh py-2">Novo Comentário para Usuário - {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('comments.store', $user->id) }}" method="post">
     @include('users.comments._partials.form')
</form>
   
@endsection

