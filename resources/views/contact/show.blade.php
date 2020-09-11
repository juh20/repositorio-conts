@extends('layouts.main')

@section('title', 'Excluir Contato')

@section('content')
    <h1>Excluir contato?</h1><br>
    <p>Tem certeza de que deseja excluir o contato {{ $contact->name }}?</p><br>
    <p>Criado em: {{ $contact->created_at->format('d/m/Y') }}</p>
    <div>
        <form action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ $contact->name }}" readonly>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" readonly>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" value="{{ $contact->email }}" readonly>
            </div>
            <div>
                <button type="submit">Excluir</button>
            </div>
        </form>
        <button><a href="/">Cancelar</a></button>
    </div>
@endsection