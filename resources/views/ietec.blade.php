<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='css/app.css' rel="stylesheet" type="text/css">
    <link rel="Icon" href="/img/ietec_logo.png">
    <title>IETEC - Cefet RJ</title>
</head>

<body>
    <header>
        <div class="central_header">
            <div class="menu">
                <a href="{{route('home')}}">Inicio</a>
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('sobre')}}">Quem somos</a>
            </div>
            <!--menu-->
        </div>
        <!--header-->
    </header>

    <div class="texto_sobre">
        <h1>Seja bem vindo a<br><span id="ietec">IETEC</span></h1>
        <p>Possuimos um ambiente físico que se destina a abrigar negócios e projetos
            <br>que necessitem de um desenvolvimento tecnológico, de formação empreendedora
            <br>e de estruturação gerencial. Constitui, assim, um meio inovador que gera condições
            <br>para aumentar as chances de sobrevivência, crescimento e consolidação de microempresas inovadoras.
            Idealizada há mais de 20 anos, vem consolidando sua estratégia de expansão
            <br>aos campi de Nova Iguaçu, Maria da Graça, Petrópolis, Valença, Angra dos Reis,
            <br> Itaguaí e Nova Friburgo.
        </p>
        <a href="{{route('sobre')}}"><button>Saiba mais</button></a>
    </div>

    <section class="sobre">
        <div class="circulo">
            <img id="predio_icon" src="img/img_prédio_index.png" alt="">
        </div>
    </section>

</body>

</html>