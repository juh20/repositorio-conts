@extends('layouts.main')

@section('title', 'Editar Contato')

@section('content')
    <h1>Editar contato</h1>
    <div>
        <form action="/contacts/{{ $contact->id }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="name">Nome:</label><br>
                <input class="form-control" type="text" id="name" name="name" value="{{ $contact->name }}"><br>
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="phone">Telefone:</label><br>
                <input class="form-control" type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br>
                @error('phone')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <label for="email">E-mail:</label><br>
                <input class="form-control" type="text" id="email" name="email" value="{{ $contact->email }}">
                @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button class="btn btn-secondary" type="submit">Salvar</button>
                <button class="btn btn-secondary" type="submit"> <a href="/contacts" class="link" >Cancelar</a></button>
            </div>
        </form>
    </div>
@endsection