@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1 class="text-2xl font-bold">
        Listagem dos Usuários
        (<a href="{{ route('users.create') }}" class="text-blue-500">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get" class="flex items-center mt-4">
        <input type="text" name="search" placeholder="Pesquisar" class="px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <button class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Pesquisar</button>
    </form>

    <table class="mt-4 w-full">
        <thead>
            <tr>
                <th class="px-5 py-2 border-b-2 border-gray-300">Foto</th>
                <th class="px-5 py-2 border-b-2 border-gray-300">Nome</th>
                <th class="px-5 py-2 border-b-2 border-gray-300">Email</th>
                <th class="px-5 py-2 border-b-2 border-gray-300">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="px-5 py-2 border-b border-gray-300 object-cover w-20">
                        @if ($user->image)
                            <img src="{{url("storage/{$user->image}")}}" alt="{{$user->name}}">
                        @else
                            <img src="{{url("storage/images/icon-sem-perfil.png")}}" alt="Sem Foto de Perfil">
                        @endif

                    </td>

                    <td class="px-5 py-2 border-b border-gray-300">{{ $user->name }}</td>
                    <td class="px-5 py-2 border-b border-gray-300">{{ $user->email }}</td>
                    <td class="px-5 py-2 border-b border-gray-300 space-x-2">
                        <a href="{{ route('users.show', $user->id) }}" class="text-blue-500">Detalhes</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500">Editar</a>
                        <a href="{{ route('comments.index', $user->id) }}" class="text-blue-500">Comentários <sup>({{ $user->comments->count() }})</sup></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
@endsection
