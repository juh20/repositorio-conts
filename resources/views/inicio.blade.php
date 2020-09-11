@extends('layouts.main')

@section('title', 'Lista de Contatos')

@section('content')
    <h1>Lista de Contatos</h1>
    <table>
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
@endsection

@section('scripts')
    <script src="/js/app.js"></script>
@endsection