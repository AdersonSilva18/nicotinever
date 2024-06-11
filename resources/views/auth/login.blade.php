<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo(2).ico">
    <title>Login</title>
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

    .card-login label {
        display: block;
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

    .card-login a {
        color: #28C892;
        margin-left: 10px;
        margin-top: 5px;
        display: block;
        margin-bottom: 10px;
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
                    <h2><span>Helth</span> lung,
                        <span>Long</span> life</h2>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username">
                    <input type="password" name="password" placeholder="Senha" required autocomplete="current-password">
                    <!-- Remember Me -->
                    <div class="block mt-4 " style="margin-top: 1rem">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                   name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <a href="a">Esqueceu a senha?</a>
                    <input type="submit" value="ENTRAR">
                </form>
                <p>Não tem uma conta? <a href="{{route('register')}}">Cadastrar</a></p>
            </div>
        </div>
    </div>
</header>
</body>

</html>
