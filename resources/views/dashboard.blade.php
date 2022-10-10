@extends('layouts.modelo')

@section ('complementos_css')
<link href='css/dashboard.css' rel="stylesheet" type="text/css">
@endsection

@section('title_pag')
IETEC - Principal
@endsection

<body>
    @section ('menu')
        <nav id="Navegacao">
            <ul id="NavegacaoUl">
                <li class="NavegacaoLi link"><a href="{{route('monitoramento')}}">Monitoramento</a></li>
                <li class="NavegacaoLi link"><a href="{{route('planejamento')}}">Planejamento</a></li>
            </ul>
        </nav>
    @endsection

    @section('principal')
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
    @endsection



</body>
@section('scripts')
    <script src="/js/chart.js"></script>
    <script src="/js/dash.js"></script>
@endsection
</html>