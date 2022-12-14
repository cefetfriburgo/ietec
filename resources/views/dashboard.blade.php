<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='/css/styles.css' rel="stylesheet" type="text/css">
    <title>Ietec dashboard</title>
</head>


<body id="dash_body">
    <header id="header_dash">
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="\img\ietec_logo.png">
        </a>
        <nav id="Navegacao">
            <ul id="NavegacaoUl">
            <li class="link_relLi link"><a href="{{route('dash')}}">Dashboard</a></li>    
                <li class="link_relLi link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="link_relLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
                <li class="link_relLi link"><a href="{{route('relatorio')}}">Relatórios</a></li>
            </ul>
        </nav>
    </header>

    <section id="graphic_small">
        <div class="GraphicSmall">
            <canvas id="barSmallChart"></canvas>
        </div>
        <div class="GraphicSmall">
            <canvas id="pizzaSmall"></canvas>
        </div>
        <div class="GraphicSmall">
            <canvas id="teiaSmall"></canvas>
        </div>

    </section>

    <section id="graphic_big">
        <div class="GraphicBig">
            <canvas id="bar-chart"></canvas>
        </div>
        <div class="GraphicBig">
            <canvas id="pie-chart"></canvas>
        </div>
        <div class="GraphicBig">
            <canvas id="radar-chart"></canvas>
        </div>
    </section>

    <section id="trofeu">
        <figure id="">
            <img src="/img/trofeu1.png" alt="">
            <img src="/img/trofeu1.png" alt="">
            <img src="/img/trofeu1.png" alt="">
        </figure>
    </section>
</body>
<script src="/js/chart.js"></script>
<script src="/js/dash.js"></script>

</html>