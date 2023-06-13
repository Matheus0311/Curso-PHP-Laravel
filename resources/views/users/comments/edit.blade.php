

@extends('layouts.app')

@section('title', "Editar o Comentário do Usuário { $user->name }")

@section('content')
    <h1 class="text-2xl font-bold">Editar o Comentário do Usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{route('comments.update',$comment->id)}}" method="post" class="mt-4">
        @method('PUT')
        @include('users.comments._partials.form')
    </form>
@endsection







