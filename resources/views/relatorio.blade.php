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
        <div id="filtro">
            <input type="Date">
            <input type="text" placeholder="Empresas">
            <input type="text" placeholder="Ordem">
            <input type="button" value="Pesquisar" id="pesquisar">

        </div>
        <div id="lista_relatorio">
            <table id="tabela_relatorio">
                <tr id="tr_titulo">
                    <th class="th_rel">Data</th>
                    <th class="th_rel">Empresa</th>
                    <th class="th_rel">Ações</th>
                </tr>
                <tr class="tr_r ">
                    <td class="td_rel">20/12/2022</td>
                    <td class="td_rel">joniConstruções</td>
                    <td class="td_rel">
                        <button class="lixeira" type="submit">Apagar</button>
                    </td>
                </tr>
                <tr class="tr_r ">
                    <td class="td_rel">12/02/2022</td>
                    <td class="td_rel">Rezende</td>
                    <td class="td_rel"><button class="lixeira" type="submit">Apagar</button></td>
                </tr>
                <tr class="tr_r ">
                    <td class="td_rel">21/07/2022</td>
                    <td class="td_rel">MCdonalds</td>
                    <td class="td_rel"><button class="lixeira" type="submit">Apagar</button></td>
                </tr>
            </table>
            <button id="gerar" type="submit">Gerar Relatório</button>
        </div>
    </main>
</body>

</html>