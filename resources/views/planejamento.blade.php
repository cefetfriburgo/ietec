<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IETEC | @yield('title')</title>
    <link rel="stylesheet" href="/css/planejamento.css">

</head>

<body>
    <header>
        <a href="{{route('home')}}">
            <img src="/img/ietec_logo.png" alt="Logo" width="100px">
        </a>
        <nav>
            <ul id="links">
                <li><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li><a href="{{route('dash')}}">Dashboard</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <h1>Pesquisar</h1>
            <label for="data-pesquisa">Data:</label>
            <input type="date" id="calendario" />

            <label>Pesquisa</label>
            <input type="search" id="pesquisa_input">

            <label>Tipos</label>
            <br>
            <input type="checkbox" name="tipo" value="tecnologias">Tecnologias <br>
            <input type="checkbox" name="tipo" value="capital">Capital <br>
            <input type="checkbox" name="tipo" value="mercado">Mercado <br>
            <button>Pesquisar</button>
        </div>
        <br>
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
    </main>
</body>

</html>