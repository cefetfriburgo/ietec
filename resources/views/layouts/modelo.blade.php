<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="/css/app.css" rel="stylesheet" type="text/css" >
    <link rel="Icon" href="/img/ietec_logo.png">
    <title>IETEC - Cefet RJ</title>
</head>
<body>
        <header>
            <div class="central_header">
                <div class="menu">
                    @yield('menu')
                </div> <!--menu-->
            </div><!--header-->
        </header>
            
            <div class="principal">
                    @yield('footer')
            </div>   
        
</body>
    @yield('script')
</html>
