<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ietec dashboard</title>
    <link href='css/dashboard.css' rel="stylesheet" type="text/css">
</head>


<body>
    <header>
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="\img\ietec_logo.png">
        </a>
        <nav id="Navegacao">
            <ul id="NavegacaoUl">
                <li class="NavegacaoLi link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="NavegacaoLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
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