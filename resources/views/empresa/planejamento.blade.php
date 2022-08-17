@extends('layout.main')

@section('title')
Planejamento
@endsection

@section('main-content')
<div>
    <h1>Planejamento</h1> 
    <label for="data-pesquisa">Data:</label>
    <input type="date" id="calendario" />

    <label>Pesquisa</label>
    <input type="search" id="pesquisa_input">

    <label>Tipos</label>
    <input type="checkbox" name="tipo" value="tecnologias">Tecnologias <br>
    <input type="checkbox" name="tipo" value="capital">Capital <br>
    <input type="checkbox" name="tipo" value="mercado">Mercado
    <button>Pesquisar</button>
</div>

<table>
    <tr>
        <th>Data</th>
        <th>Empresa</th>
        <th>Tipo</th>
        <th>Assunto</th>
        <th>Ações</th>
    </tr>
    @foreach($planos as $plano)
    <tr>
        <td><a href="/empresa/planejamento/{{$plano->id}}">{{ $plano->data }}</a></td>
        <td><a href="/empresa/planejamento/{{$plano->id}}">{{ $plano->nome_empresa }}</a></td>
        <td><a href="/empresa/planejamento/{{$plano->id}}">{{ $plano->tipo }}</a></td>
        <td><a href="/empresa/planejamento/{{$plano->id}}"> {{ $plano->assunto}}</a></td>
        <td>
            <a href="/empresa/planejamento/edit/{{$plano->id}}">Modificar</a> | 
            <a href="/empresa/planejamento/remove/{{$plano->id}}">Excluir</a></td>
    </tr>
    @endforeach
    
    
    
</table>
@endsection

