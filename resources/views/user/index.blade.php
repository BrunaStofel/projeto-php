@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    <h1>Listagem de usuários</h1>
    <div>
        <a href="{{ route('users-create') }}" class="btn btn-primary btn-sm mt-1">Novo usuário</a>
        <a href="/logout" class="btn btn-danger btn-sm mt-1"> logout </a>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)    
        <tr>
            <th>{{$user->id}}</th>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>
                <form action="{{ route('users-destroy', ['id'=>$user->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </th>
        </tr>
    @endforeach
    </tbody>
    </table>
    
    @endsection