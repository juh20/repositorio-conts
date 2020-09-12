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
    <table>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td><a href="/contacts/{{ $contact->id }}/edit">Editar</a></td>
                <td><a href="/contacts/{{ $contact->id }}">Excluir</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/contacts/create">Registrar novo contato</a>
    <a href="/autores">Sobre os autores</a>
@endsection

@section('scripts')
    <script src="/js/app.js"></script>
@endsection