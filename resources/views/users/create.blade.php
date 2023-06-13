@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <h1 class="text-2xl font-bold">Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post" class="mt-4" enctype="multipart/form-data">
        @include('users._partials.form')

        <div class="mt-4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Salvar</button>
        </div>
    </form>
@endsection
