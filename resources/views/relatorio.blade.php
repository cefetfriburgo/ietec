<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/relatorio.css' rel="stylesheet" type="text/css" >
    <title>Relatório</title>
</head>

<body>
    <main id="principal_relatorio">
        <h1 id="titulo_relatorio">Relatórios</h1>
        <div id="filtro">
            <input type="Date">
            <input type="text" placeholder="Empresas">
            <input type="text" placeholder="Ordem">

        </div>
        <div id="lista_relatorio">
            <table id="tabela_relatorio">
                <tr id="tr_titulo">
                    <th>Data</th>
                    <th>Empresa</th>
                    <th>Ações</th>
                </tr>
                <tr class="tr_r ">
                    <td>20/12/2022</td>
                    <td>joniConstruções</td>
                    <td>
                        <button class="lixeira" type="submit">Apagar</button>
                    </td>
                </tr>
                <tr class="tr_r ">
                    <td>12/02/2022</td>
                    <td>Rezende</td>
                    <td><button class="lixeira" type="submit">Apagar</button></td>
                </tr>
                <tr class="tr_r ">
                    <td>21/07/2022</td>
                    <td>MCdonalds</td>
                    <td><button class="lixeira" type="submit">Apagar</button></td>
                </tr>
            </table>
            <button id="gerar" type="submit">Gerar Relatório</button>
        </div>
    </main>
</body>

</html>