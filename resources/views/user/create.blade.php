@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    
    <div class="container mt-5">
        <h1>Cadrastre um usuário</h1>
        <hr>
        <form action="{{ route('users-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite o nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Digite o email">
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="text" class="form-control" name="password" placeholder="Crie uma senha">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    @endsection