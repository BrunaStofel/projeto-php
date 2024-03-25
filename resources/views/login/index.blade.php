@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<div class="container mt-5">
        <h1>Login</h1>
        <hr>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" name="password" id="password">
                </div>
                <br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Entrar </button>
                </div>
            </div>
        </form>
    </div>
@endsection