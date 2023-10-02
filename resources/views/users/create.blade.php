@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1 class="text-2x1 font-bold leadin-tigh py-2">Novo Usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('users._partials.form')
</form>
   
@endsection

