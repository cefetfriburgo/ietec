@extends('layout.main')

@section('title')
Planejamento
@endsection

@section('main-content')
<div>
    <h1>Pesquisar</h1> 
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
    <tr>
        <td><a href="#">20/01/2022</a></td>
        <td>XPTO investimentos</td>
        <td>Capital</td>
        <td>Segue a ficha de Capital do mês</td>
        <td>Modificar | Excluir</td>
    </tr>
    <tr>
        <td>data</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>data</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
</table>
@endsection

