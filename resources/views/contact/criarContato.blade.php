@extends('layouts.main')

@section('title', 'Registrar Contato')

@section('content')
    <h1>Registrar contato</h1>
    <div>
        <form action="/contacts" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input class="form-control" type="text" id="name" name="name"><br>
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="phone">Telefone:</label>
                <input class="form-control" type="text" id="phone" name="phone"><br>
                @error('phone')
                    <p class="alert alert-danger">>{{ $message }}</p>
                @enderror
                <label for="email">E-mail:</label>
                <input class="form-control" type="text" id="email" name="email"><br>
                @error('email')
                    <p class="alert alert-danger">>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </form>
    </div>
@endsection