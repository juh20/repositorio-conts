@extends('layouts.main')

@section('title', 'Excluir Contato')

@section('content')
    <h1>Excluir contato?</h1><br>
    <h4 class="alert alert-warning">Tem certeza de que deseja excluir o contato {{ $contact->name }}?</h4>
    <p>Criado em: {{ $contact->created_at->format('d/m/Y') }}</p>
    <div>
        <form action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="form-group">
                <label for="name">Nome:</label><br>
                <input class="form-control" type="text" id="name" name="name" value="{{ $contact->name }}" readonly><br>
                <label for="phone">Telefone:</label><br>
                <input class="form-control" type="text" id="phone" name="phone" value="{{ $contact->phone }}" readonly><br>
                <label for="email">E-mail:</label><br>
                <input class="form-control" type="text" id="email" name="email" value="{{ $contact->email }}" readonly>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Excluir</button>
                <button class="btn btn-secondary"><a class="link" href="/">Cancelar</a></button>
            </div>
        </form>
    </div>
@endsection