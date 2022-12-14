<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/styles.css' rel="stylesheet" type="text/css">
    <title>IETEC | @yield('titulo')</title>
</head>

<body id="rel_body">
    <header id="header_rel">
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="/img/ietec_logo.png">
        </a>
        <nav id="link_rel">
            <ul id="link_relUl">
                <li class="link_relLi link"><a href="{{route('dash')}}">Dashboard</a></li>    
                <li class="link_relLi link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="link_relLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
                <li class="link_relLi link"><a href="{{route('relatorio')}}">Relatórios</a></li>
            </ul>
        </nav>
    </header>


    <main>
        @yield('conteudo')
    </main>
</body>
    @yield('scripts')
    
</html>