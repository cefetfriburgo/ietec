<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/styles.css' rel="stylesheet" type="text/css">
    <title>Relatório</title>
</head>

<body id="rel_body">
    <header id="header_rel">
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="\img\ietec_logo.png">
        </a>
        <nav id="link_rel">
            <ul id="link_relUl">
                <li class="link_relLi link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="link_relLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
                <li class="link_relLi link"><a href="{{route('dash')}}">Dashboard</a></li>
            </ul>
        </nav>
    </header>


    <main id="principal_relatorio">
        <h1 id="titulo_relatorio">Relatórios</h1>
        <form id="filtro">
            <input type="Date" id="dataInput">
            <input type="text" placeholder="Empresas" id="empresaInput">
            <input type="text" placeholder="Tipo" id="tipoInput">
            <input type="submit" value="Pesquisar" id="pesquisar">
        </form>
        
        <div id="div_relatorio">
            <span id="erro"></span>
            <span id="data"></span><br><br>
            <span id="Empresa"></span><br><br>
            <span id="Tipo"></span>
        </div>
    </main>
</body>
    <script src="/js/relatorio.js"></script>
</html>