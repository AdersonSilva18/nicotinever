<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo(2).ico">
    <title>Cadastro</title>
</head>

<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }


    html {
        font-size: 10px;
        color: #fff;
    }

    body {
        background-color: #000000d8;
    }

    .main-login {
        width: 100vw;
        height: 100vh;
        background-color: #001526;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left-login {
        position: relative;
        width: 100vh;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .left-login h1 {
        color: white;
        font-size: 50px;
    }

    .left-login h2 {
        font-size: 30px;
    }

    .left-login h2 span {
        color: #28C892;
        margin-bottom: 100px;
    }

    .left-login img {
        width: 70%;
        height: 70%;
    }

    .right-login {
        width: 100vh;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-login {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px 35px;
        background-color: #001526;
        border-radius: 20px;
        border: 2px solid #28C892;
        box-shadow: 0 0 10px #28C892;
    }

    .card-login img {
        rotate: 180deg;
        width: 100px;
        height: 100px;
        display: flex;
        margin-left: .2%;
        border-radius: 50%;
    }

    .card-login .titulo {
        margin-right: 5px;
        display: flex;
        align-items: center;
    }

    .card-login .subtitulo {
        margin-bottom: 15px;
        color: #ffffff;
        text-align: center;
    }

    .card-login span {
        margin-bottom: 20px;
        color: #28C892;
        text-align: center;
    }


    .card-login input[type="text"], .card-login input[type="password"] {
        width: 100%;
        line-height: 40px;
        border: none;
        border-radius: 25px;
        padding: 0 20px;
        color: #000000;
        background-color: #ffffff9f;
    }

    .card-login input[type="text"] {
        margin-bottom: 20px;
    }

    .card-login input[type="email"], .card-login input[type="password"] {
        width: 100%;
        line-height: 40px;
        border: none;
        border-radius: 25px;
        padding: 0 20px;
        color: #000000;
        background-color: #ffffff9f;
    }

    .card-login input[type="email"] {
        margin-bottom: 20px;
    }

    .card-login input[type="password"] {
        margin-bottom: 20px;
    }


    .card-login a {
        color: #28C892;
        margin-left: 5px;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .card-login .check {
        display: flex;
        margin-top: 15px;
        justify-content: center;

    }

    .card-login input[type="submit"] {
        cursor: pointer;
        display: block;
        width: 100%;
        padding: 10px 20px;
        font-size: 20px;
        background-color: #28C892;
        border-radius: 25px;
        border: none;
        font-weight: bold;
        color: #fff;
        transition: 0.2s;
    }

    .card-login input[type="submit"]:hover {
        transform: scale(1.05);
        box-shadow: #28c89398;
    }

    .card-login p {
        margin-top: 10px;
        text-align: center;
    }

    @media screen and (max-width: 768px) {

        .left-login {
            display: none;
        }

        .card-login {
            align-content: center;
            position: absolute;
            width: 100%;
            height: 100%;
            border: 0;
            box-shadow: none;
        }

        .main-login {
            align-content: center;
            position: absolute;
            width: 100%;
            height: 100%;
        }
    }
</style>
<header>
    <div class="main-login">
        <div class="left-login">
            <h1>Nicotinever</h1>
            <h2>Inspire <span>vida</span>, expire vícios.</h2>
            <img src="{{asset('imagens/respira.svg')}}" alt="">
        </div>

        <div class="right-login">
            <div class="card-login">
                <div class="titulo">
                    <img src="{{asset('imagens/logo.jpg')}}" alt="">
                    <h1>NICOTINEVER</h1>
                </div>
                <div class="subtitulo">
                    <h2><span>Health</span> lung,
                        <span>Long</span> life</h2>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input placeholder="Usuário" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                    <input placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username"  >
                    <input placeholder="Senha"  type="password" name="password" required autocomplete="new-password">
                    <input placeholder="Confirmar Senha"  type="password" name="password_confirmation" required autocomplete="new-password">
                    <input type="submit" value="CADASTRAR">
                    <div class="check">
                        <input type="checkbox" name="termo" id="termo" aria-required="true">
                        <label for="termo">Aceito os <a href="{{route('termo')}}" target="_blank"><span>termos e condições</span></a></label>
                    </div>
                </form>
                <p>Já possui uma conta? <a href="{{route('login')}}">Logar</a></p>
            </div>
        </div>
    </div>
</header>
</body>

</html>
