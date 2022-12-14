@extends('./layouts/main')

@section('titulo')
Planejamento
@stop

@section('conteudo')
<h1 id="titulo_relatorio">Planejamento</h1>
    <form id="filtro">
        <input type="Date" id="dataInput">
        <input type="text" placeholder="Empresas" id="empresaInput">
        <input type="text" placeholder="Tipo" id="tipoInput">
        <input type="submit" value="Pesquisar" id="pesquisar">
    </form>
        
    <div id="div_relatorio"></div>

@stop

@section('scripts')
<script src="/js/monitoramento.js"></script>
@stop 



