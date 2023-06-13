@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')
    <h1 class="text-2xl font-bold">
        Comentários do Usuário {{ $user->name }}
        (<a href="{{ route('comments.create', $user->id) }}" class="text-blue-500">+</a>)
    </h1>

    <form action="{{ route('comments.index', $user->id) }}" method="get" class="mt-4">
        <input type="text" name="search" placeholder="Pesquisar" class="px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <button class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Pesquisar</button>
    </form>

    <table class="mt-4 w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b-2 border-gray-300">Comentário</th>
                <th class="px-4 py-2 border-b-2 border-gray-300">Visível</th>
                <th class="px-4 py-2 border-b-2 border-gray-300">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td class="px-4 py-2 border-b border-gray-300">{{ $comment->body }}</td>
                    <td class="px-4 py-2 border-b border-gray-300">{{ $comment->visible ? 'VISÍVEL' : 'NÃO VISÍVEL' }}</td>
                    <td class="px-4 py-2 border-b border-gray-300">
                        <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}" class="text-blue-500">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
