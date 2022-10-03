<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IETEC | @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    
    <!--
    <link rel="stylesheet" href="/css/style.css">
-->
    <link rel="stylesheet" href="/css/estilo.css">

</head>
<body>



    <header class="container">
        <a href="{{route(home)}}" class="logo">
            <img class="logo" src="/img/ietec_logo.png" alt="Logo da IETEC">
        </a>

    </header>

    <div class="container">
        <nav class="side-bar">
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/empresa/planejamento">
                        <span class="mx-2"></span>Planejamento</a>
                </li>
                <li> 
                    <a href="/empresa/monitoramento">
                        <span class="mx-2"></span>Monitoramento</a>
                </li>
                <li> <a href="/empresa/relatorio">
                        <span class="mx-2"></span>Relatório</a>
                </li>
            </ul>
        </nav>  
        
        <main class="col-auto col-md-9 col-xl-10 px-sm-10 px-0">
        @yield('main-content')
        </main>
    </div>
</body>

</html>
