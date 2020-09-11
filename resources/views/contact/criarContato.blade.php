@extends('layouts.main')

@section('title', 'Registrar Contato')

@section('content')
    <h1>Registrar contato</h1>
    <div>
        <form action="/contacts" method="POST">
            @csrf
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name"><br>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone"><br>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email"><br>
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>
        </form>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach)
                </ul>
            @endif
        </div>
    </div>
@endsection