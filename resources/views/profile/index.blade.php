@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    </style>
    <title>Perfil</title>
</head>

<body>
<style>
    @charset "UTF-8";

    * {
        font-family: Inter, sans-serif;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }


    body {
        height: 100vh;
        background-color: #001526 !important;
    }

    .cabecalho {
        display: flex;
        justify-content: end;
    }

    .menu-icon {
        width: 2rem;
        margin: 1rem 1.5rem 0 0;
        cursor: pointer;
    }

    .foto-edit {
        width: 90%;
        margin: 1rem auto 1rem auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .foto-nomebio {
        width: 70%;
    }

    .nome-bio {
        margin-top: 1rem;
        color: white;
    }

    .foto-perfil {
        width: 100px;
        border-radius: 50%;
    }

    .btn-edit {
        color: white;
        padding: 7px;
        font-size: 14px;
        background: none;
        border: 2px solid #88EBC4;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
    }


    .barra-bio {
        width: 90%;
        margin: 15px auto 0 auto;
        display: block;
        border: none;
        border-top: 3px solid #00907a53;
    }

    .selecao-conteudos {
        display: flex;
        flex-direction: row;
        list-style-type: none;
        justify-content: space-evenly;
        align-items: center;
    }

    .selecao-conteudos > li {
        padding: 15px 10px 5px 10px;
    }

    .selecao-conteudos > li:first-child {
        border-bottom: 2px solid #28C892;
        padding: 15px 10px 5px 10px;
    }

    .p-menu {
        display: none;
    }

    .selecao-conteudos > li > img {
        width: 35px;
        height: 35px;
        cursor: pointer;
        margin: auto;
    }

    .espaco2 {
        width: 300px;
        height: 450px;
    }

    .paginas {
        display: flex;
        flex-direction: row;
        list-style-type: none;
        justify-content: space-around;
        align-items: center;
        height: 60px;
    }

    .paginas > li {
        width: 50px;
        height: 50px;
        cursor: pointer;
        position: relative;
    }

    .paginas > li:first-child {
        padding-top: 3px;

    }

    #pagina-alvo {
        width: 47px;
        height: 47px;
    }

    .i-pag {
        color: #88EBC4;
        font-size: 49px;
    }

    .barra {
        background-color: #02736483;
        position: relative;
        height: 3px;
    }

    .select {
        background-color: #28C892;
        position: absolute;
        left: 66.6666666666666%;
        width: 33%;
        height: 3px;
        transition: left 0.5s ease;
    }


    li:hover > #pagina-alvo {
        width: 50px;
        height: 50px;
    }

    .i-pag:hover {
        font-size: 52px;
    }

    .footer-mobile {
        background-color: #001526;
        width: 100%;
        position: fixed;
        padding-bottom: 5px;
        bottom: 0;
        left: 0;
    }

    .logo-icones {
        display: none;
    }

    .ftperfil-header {
        display: none;
    }

    .search-box {
        display: none;
    }

    .icones {
        display: none;
    }

    .conteudos {
        width: 90vw;
        max-width: 600px;
        margin: 0 auto;
    }


    /* Conteúdo */
    .post-container {
        width: 100%;
        background-color: #001526;
        border-radius: 12px;
        padding: 20px;
        color: white;
        margin: 20px 0;
        border: 1px solid #88EBC4;
    }

    .user-profile span {
        font-size: 13px;
        color: #28c89393;
    }

    .post-text {
        color: white;
        margin: 15px 0;
        font-size: 15px;
    }

    .post-text span {
        color: #28c89393;
        font-weight: 500;
    }

    .post-text a {
        color: #28c89393;
        font-weight: 500;
    }

    .post-text img {
        margin-top: 10px;
        width: 100%;
        border-radius: 4px;
        margin-bottom: 5px;
    }

    .post-roll {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .profile-post-icon img {
        margin-right: 10px;
        width: 40px;
        border-radius: 50%;
    }

    .profile-icon p {
        display: block;

    }

    .profile-post-icon {
        display: flex;
        align-items: center;
    }

    .act-icons i {
        color: #28c89393;
    }

    .act-icons div {
        display: inline-flex;
        align-items: center;
        margin-right: 30px;
        font-size: 14px;
    }

    .post-profile-icon {
        display: flex;
        align-items: center;
    }

    .post-profile-icon img {
        width: 20px;
        border-radius: 50%;
        margin-right: 5px;
    }

    .imp-links {
        margin-right: 10px;
    }

    .imp-links li {
        margin-top: 30px;
        list-style: none;
        margin-bottom: 30px;
        transition: transform 0.3s ease;
    }

    .imp-links li a {
        text-decoration: none;
        color: #28c89393;
    }

    .imp-links li:hover {
        transform: scale(1.02);
    }

    .bi-three-dots-vertical {
        color: #28c89393;
    }

    .imp-links li i {
        padding: 0px 5px;
        text-decoration: none;
        display: inline-block;
        align-items: center;
        margin-bottom: 10px;
        color: #28c89393;
        width: fit-content;
    }


    /* Tablets Pequenos */
    @media (min-width: 500px) {
        .foto-nomebio {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nome-bio {
            margin: 0;
        }

        .nome {
            font-size: 1.4em;
        }

        .btn-edit {
            font-size: 1.01rem;
        }

    }

    @media (min-width: 700px) {
        .p-menu {
            display: block;
            font-size: 17px;
            font-weight: 600;
            color: #28C892;
        }

        .item-menu {
            text-align: center;
            cursor: pointer;
        }

        .principal {
            max-width: 800px;
            margin: 0 auto;
        }

        .foto-perfil {
            width: 14.3vw;
        }

    }

    @media (min-width: 800px) {
        .i-header {
            color: #88EBC4;
        }

        /* Header */
        .cabecalho {
            height: 55px;
            background-color: #00907B;
            margin-bottom: 10px;
            justify-content: space-around;
            align-items: center;
        }

        .logo-icones {
            display: flex;
            align-items: center;
            gap: 2vw;
        }


        .logo-total {
            height: 40px;
            margin: 0 15px 0 10px;
            display: flex;
            align-items: center;
            background-color: #00152697;
            border: 2px solid #28C892;
            box-shadow: #28c89383 0px 0px 10px 0px;;
            border-radius: 30px;
            padding: 0 15px 0 10px;
            cursor: pointer;
        }

        .logo-total:hover {
            background-color: #ffffff58;
        }

        .logo {
            width: 50px;
        }

        .img-header {
            width: 40px;
            transition: transform 0.2 ease;
            cursor: pointer;
        }

        .i-header {
            font-size: 40px;
            transition: transform 0.2 ease;
            cursor: pointer;
        }

        .nicotinever {
            color: white;
        }

        .icones {
            width: 16vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .i-header:hover {
            transform: scale(1.2);
        }

        .img-header:hover {
            transform: scale(1.2);
        }

        .search-box {
            width: 350px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            padding: 0 15px;
            background-color: #ffffff9f;
            height: 30px;
            transition: transform 0.2s ease;
        }

        .search-box:hover {
            transform: scale(1.04);
        }

        .search-box i {
            color: #001526;
            font-size: 20px;
        }

        .search-box input[type="text"] {
            font-size: 1.1em;
            outline: none;
            border: none;
            width: 100%;
            padding: 0 15px;
            background-color: #ffffff00;
        }

        .ftperfil-header {
            display: block;
            width: 40px;
            border-radius: 50%;
            transition: transforme 0.2s ease;
            cursor: pointer;
        }

        .ftperfil-header:hover {
            transform: scale(1.1);
        }

        /* --------------------- */
        .foto-perfil {
            max-width: 140px;
        }

        .menu-icon {
            display: none;
        }

        .footer-mobile {
            display: none;
        }
    }
</style>
@include('layouts.nicotinever.header')

<main class="principal">
    <div class="foto-edit">
        <div class="foto-nomebio">
            <img src="{{asset($user->icon)}}" alt="Foto de perfil" class="foto-perfil">
            <div class="nome-bio">
                <strong class="nome">{{$user->name}}</strong>
                {{--                <div>--}}
                {{--                    <p class="bio">18y</p>--}}
                {{--                </div>--}}
            </div>
        </div>

        @if($user->id == auth()->user()->id)
            <a href="{{route('profile.edit')}}" class="btn-edit">Editar perfil</a>
        @endif
    </div>


    <hr class="barra-bio">

    <nav>
        <ul class="selecao-conteudos">
            <li class="reset-border item-menu" onclick="selecionaConteudo(this)">
                <img src="{{asset('imagens/postagens.svg')}}" alt="ícone de postagens">
                <p class="p-publicacao p-menu">Publicações</p>
            </li>
            <li class="reset-border item-menu" onclick="selecionaConteudo(this)">
                <img src="{{asset('imagens/target.svg')}}" alt="ícone de postagens">
                <p class="p-obj p-menu">Objetivos</p>
            </li>
            <li class="reset-border item-menu" onclick="selecionaConteudo(this)">
                <img class="icone-coracao" src="{{asset('imagens/coracao.svg')}}" alt="ícone de postagens">
                <p class="p-curtidos p-menu">Curtidos</p>
            </li>
        </ul>
    </nav>

    <!-- Aqui irá vir as informações do banco de dados, exemplo: publicações -->
    <article class="conteudos">
        @foreach($feeds as $feed)
            <section class="content">
                <div class="post-container">
                    <div class="post-roll">
                        <div class="profile-post-icon">
                            <img src="{{asset($user->icon)}}" alt="">
                            <div><p>{{$feed->user->name}}</p>
                                @php
                                    $date = Carbon::parse($feed->created_at);
                                @endphp
                                <small>{{$date->isoFormat('D [de] MMMM [de] YYYY [às] HH:mm')}} <i class="bi bi-caret-down-fill"></i></small>
                            </div>
                        </div>


                        <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
                    </div>

                    <p class="post-text">
                        {{$feed->comentario}}
                    </p>


                    <div class="post-roll">
                        <div class="act-icons">
                            <div><i class="bi bi-heart-fill"></i>0</div>
                            <div><i class="bi bi-chat-fill"></i>0</div>
                            <div><i class="bi bi-send-fill"></i></i>0</div>
                        </div>

                        <div class="post-profile-icon">
                            <img src="{{asset($feed->user->icon)}}" alt="">
                            <i class="bi bi-caret-down-fill"></i>
                        </div>

                    </div>

                </div>
            </section>
        @endforeach
    </article>

</main>


<footer class="footer-mobile">
    <nav class="nav-footer">
        <div class="barra">
            <div class="select"></div>
        </div>
        <ul class="paginas">
            <li class="item" onclick="selecionaMenu(0)"><img id="pagina-alvo" src="{{asset('imagens/target.svg')}}"
                                                             alt="ícone de alvo"></li>
            <li class="item" onclick="selecionaMenu(33.33333333333)"><i class="bi bi-house i-pag"></i></li>
            <li class="item" onclick="selecionaMenu(66.7666666666666)"><i class="bi bi-person i-pag"></i></li>
        </ul>
    </nav>
</footer>
</body>
<script>
    function selecionaMenu(posicao) {
        const select = document.querySelector(".select");
        select.style.left = `${posicao}%`;
    }

    function selecionaConteudo(elemento) {
        const elementosLi = document.querySelectorAll(".reset-border");
        elementosLi.forEach(e => {
            e.style.border = "none";
        })

        elemento.style.borderBottom = "2px solid #28C892"
    }
</script>
</html>
