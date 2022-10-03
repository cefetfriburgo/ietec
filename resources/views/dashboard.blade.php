<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/dashboard.css' rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="/dash.js" defer></script>
    <title>Dashboard - IETEC</title>
</head>

<body>

    <header>
        <a href="{{route('home')}}">
            <img id="LogoIetec" src="/images/logoietec.png">
        </a>
        <nav id="Navegacao">
            <ul id="NavegacaoUl">
                <li class="NavegacaoLi" class="link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="NavegacaoLi" class="link"><a href="{{route('planejamento')}}">Planejamento</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="graphic_pequeno">
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
                <img src="/images/trofeu.png" alt="">
                <img src="/images/trofeu.png" alt="">
                <img src="/images/trofeu.png" alt="">
                <img src="/images/trofeu.png" alt="">
                <img src="/images/trofeu.png" alt="">
                <img src="/images/trofeu.png" alt="">
            </figure>
        </section>
    </main>



</body>

</html>