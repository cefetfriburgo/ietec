<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/login.css">
    <link href='css/styles' rel="stylesheet" type="text/css">
    <title>Login</title>
</head>

<body id="body_login">
    <form action="{{route('dash')}}">
        <fieldset id="fd_login">
            <legend> <img src="/img/perfil.png" alt=""> </legend>
            <div class="login_area">
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="login_area">
                <input type="password" name="passw" id="passw" placeholder="Digite sua Senha">
            </div>
            <div class="login_area">
                <input type="submit" value="Logar" id="button">
            </div>
        </fieldset>
    </form>
</body>

</html>