@extends('layouts.main')

@section('title', 'Editar Contato')

@section('content')
    <h1>Editar contato</h1>
    <div>
        <form action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ $contact->name }}"><br>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" value="{{ $contact->email }}"><br>
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