<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="Icon" href="/img/ietec_logo.png">

    @yield('complementos_css')
    
    <title>@yield('title_pag')</title>
</head>

<body>
    <header>
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="/img/logoietec.png">
        </a>
        <div class="central_header">
            <div class="menu">
                @yield('menu')
            </div> <!--menu-->
        </div><!--header-->
    </header>
        
    <main>
        @yield('principal')
    </main>   
    
    
</body>
    @yield('scripts')
</html>
