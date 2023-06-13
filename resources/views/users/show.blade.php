@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
    <h1 class="text-2xl font-bold">Listagem do Usuário {{ $user->name }}</h1>

    <ul class="mt-4">
        <li class="mb-2">
            <span class="font-bold">Nome:</span> {{ $user->name }}
        </li>
        <li class="mb-2">
            <span class="font-bold">Email:</span> {{ $user->email }}
        </li>
    </ul>

    <form action="{{ route('users.delete', $user->id) }}" method="POST" class="mt-4">
        @method('DELETE')
        @csrf
        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Deletar</button>
    </form>
@endsection
