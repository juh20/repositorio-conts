@extends('layouts.main')

@section('title', 'Lista de Contatos')

@section('styles')
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <h1>Lista de Contatos</h1>
    <table class="table table-sm">
        <thead class="thead-dark">
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th colspan="3" scope="col">Opções</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td><a href="/contacts/{{ $contact->id }}/edit">Editar</a></td>
                    <td><a class="text-danger" href="/contacts/{{ $contact->id }}">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="form-group">
        <button class="btn btn-secondary"><a class="link" href="/contacts/create">Novo contato</a></button>
        <button class="btn btn-secondary"><a class="link" href="/autores">Sobre os autores</a></button>
    </div>
    
@endsection

@section('scripts')
    <script src="/js/app.js"></script>
@endsection