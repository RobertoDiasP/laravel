@extends('layouts.app')

@section('content')

<h1>Cadastrar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento"><br>

        <button type="submit">Cadastrar</button>
    </form>
@endsection