<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/styles.css' rel="stylesheet" type="text/css">
    <title>IETEC - MONITORAMENTO</title>
</head>

<body id="body_mn">
    <header id="header_mn">
        <a href="{{route('home')}}">
            <img id="logo_Ietec" src="/img/ietec_logo.png" alt="Logo" width="100px">
        </a>
        <nav id="link_mn">
            <ul id="link_mnlUl">
                <li class="link_mnLi link"><a href="{{route('dash')}}">Dashboard</a></li>
                <li class="link_mnLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
                <li class="link_mnLi link"><a href="{{route('relatorio')}}">Relatório</a></li>
            </ul>
        </nav>
    </header>

    <main id="principalMn">
        <div id="formularioMn">
            <form action="" id="formMn">
                <h2>Pesquisa</h2><br>
                <label>Nome da empresa: </label><br>
                <input type="text" name="nomeEmpresaMn" id="nomeEmpresaMn" class="estiloInputTxt"><br><br>
                <label>Tipo de empresa: </label><br>
                <input type="text" name="tipoEmpresaMn" id="tipoEmpresaMn" class="estiloInputTxt"><br><br>
                <label>Data de Incubação: </label><br>
                <input type="date" name="dataInicioMn" id="dataInicioMn" class="estiloInputDate"><br><br>
                <label>Data de graduação: </label><br>
                <input type="date" name="dataFimMn" id="dataFimMn" class="estiloInputDate"><br><br>
                <label>Acompanhamento: </label><br>
                <input type="checkbox" name="bimestreMn" id="bimestreMn">
                <label>Bimestre</label><br>
                <input type="checkbox" name="trimestreMn" id="trimestreMn">
                <label>Trimestre</label><br><br>
                <label>Necessidade de prorrogação: </label><br>
                <input type="checkbox" name="prorrogacaoS_Mn" id="prorrogacaoS_Mn">
                <label> Sim </label><br>
                <input type="checkbox" name="prorrogacaoN_Mn" id="prorrogacaoN_Mn">
                <label> Não </label><br><br>
                <label>Atualizado: </label><br>
                <input type="date" name="AtualizaCaoMn" id="AtualizaCaoMn" class="estiloInputDate"><br><br>

                <input type="submit" value="Procurar" id="btProcura">
            </form>
        </div>
        <div id="arquivosMn">
        </div>
    </main>
</body>

</html>