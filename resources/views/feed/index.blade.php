<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="shortcut icon" type="image/x-icon" href="./images/logo(2).ico">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Nicotinever</title>
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        box-sizing: border-box;
    }

    a {
        color: #28c89393;
    }

    body {
        background-color: #000000d8;
    }

    .web {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #28c89393;
        padding: 5px 2%;
    }

    .nav-left img {
        rotate: 180deg;
        width: 50px;
        height: 50px;
        margin-left: 20px;
        border-radius: 50px;
    }

    .nav-left, .nav-right {
        display: flex;
        align-items: center;
    }

    .nav-left ul li {
        font-weight: bold;
        font-size: 10px;
        color: #001526;
        list-style: none;
        display: inline-block;
        padding: 0 0;
        transition: transform 0.3s ease;
    }

    .nav-left ul li i {
        box-sizing: border-box;
        color: #001526;
        font-size: 22px;
        cursor: pointer;
        margin: 0 30px;
        padding: 0px;
    }

    .nav-left ul li:hover {
        transform: scale(1.2);
    }

    .profile-icon img {
        border: #28C892 3px solid;
        width: 35px;
        border-radius: 50%;
        margin-right: 20px;
        color: #001526;
        font-size: 28px;
        cursor: pointer;
    }

    .profile-icon:hover {
        transform: scale(1.2);
    }

    .profile-icon {
        margin-left: 30px;
        transition: transform 0.3s ease;
    }

    .search-box {
        margin-left: 300px;
        line-height: 40px;
        width: 350px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        padding: 0 15px;
        background-color: #ffffff9f;
    }

    .search-box i {
        color: #001526;
        font-size: 20px;
    }

    .search-box input[type="text"] {
        line-height: 40px;
        outline: none;
        border: none;
        width: 100%;
        padding: 0 15px;
        background-color: #ffffff00;
    }

    .container {
        display: flex;
        justify-content: space-between;
        padding: 13px 5%;
    }

    .left-sidebar {
        box-shadow: #28c89383 0px 0px 10px 0px;
        border-color: aliceblue;
        color: #28c89393;
        border-radius: 20px;
        background-color: #001526;
        flex-basis: 25%;
        position: sticky;
        top: 0px;
        align-self: flex-start;
        height: 100vh;
        padding: 20px;
    }

    .right-sidebar {
        box-shadow: #28c89383 0px 0px 10px 0px;
        color: #28c89393;
        border-radius: 20px;
        background-color: #001526;
        flex-basis: 25%;
        position: sticky;
        top: 0px;
        align-self: flex-start;
        height: 100vh;
        padding: 20px;

    }

    .left-sidebar img {
        width: 50px;
        border-radius: 50%;
    }

    .main-content {
        flex-basis: 47%;
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

    .imp-links li i {
        padding: 0px 5px;
        text-decoration: none;
        display: inline-block;
        align-items: center;
        margin-bottom: 10px;
        color: #28c89393;
        width: fit-content;
    }

    .write-post-container {
        box-shadow: #28c89383 0px 0px 10px 0px;
        margin: 0 10px;
        margin-top: 10px;
        background-color: #001526;
        border-radius: 6px;
        padding: 20px;
        color: #28c89393;
    }

    .write-post-container .user-profile {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .write-post-container .user-profile div {
        display: flex;
        flex-direction: column;
    }

    .write-post-container .user-profile img {
        width: 45px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .write-post-container .user-profile p {
        margin-right: 10px;
        font-weight: 500;
    }

    .write-post-container .user-profile small {
        font-size: 12px;
    }

    .post-input-container {
        padding-left: 55px;
    }

    .post-input-container textarea {
        resize: none;
        width: 100%;
        color: aliceblue;
        padding: 10px;
        border: none;
        outline: 0;
        border-bottom: 1px solid #28c89393;
        background-color: transparent;
    }

    .add-post-links {
        display: flex;
        margin-top: 10px;
    }

    .add-post-links a {
        font-size: 15px;
        display: flex;
        align-items: center;
        margin-right: 20px;
    }

    .add-post-links i {
        font-size: 15px;
        margin-right: 5px;
    }

    .sidebar-title {
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }

    .right-sidebar h4 {
        font-weight: 600;
        font-size: 16px;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        width: 5px;
        background-color: #28c89393;
        border-radius: 20px;
    }

    .event {
        display: flex;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .event p {
        font-size: 12px;
    }

    .envent a {
        font-size: 12px;
    }

    .left-event {
        border-radius: 10px;
        height: 65px;
        width: 65px;
        margin-right: 15px;
        padding-top: 10px;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 10px #28c89393;
    }

    .left-event span {
        font-weight: bold;
        color: #001526;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #28c89393;
        padding: 4px 0;
    }

    .online-list {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .online-list img {
        border: #28C892 2px solid;

        width: 40px;
        border-radius: 50%;
    }

    .online-list p {
        margin-left: 10px;
    }

    .post-container {
        width: 100%;
        background-color: #001526;
        border-radius: 6px;
        padding: 20px;
        color: white;
        margin: 20px 0;
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

    .mobile {
        display: none;
    }

    @media screen and (max-width: 768px) {

        .mobile {
            background-color: #001526;
            display: block;
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;
            padding-bottom: 5px;
        }

        .main-content {
            padding-right: 30px;
            align-items: center;
            justify-content: center;
            padding-bottom: 40px;
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

        .mobile i {
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

        .mobile i:hover {
            font-size: 52px;
        }

        .web {
            display: none;
        }

        .left-sidebar {
            display: none;
        }

        .right-sidebar {
            display: none;
        }
    }


    /* profile-info */

    .main-info {
        display: flex;
        flex-direction: column;
        padding: 20px;
        border-radius: 6px;
        margin-top: 20px;
    }

    .profile-image {
        box-shadow: #28c89383 0px 0px 10px 0px;
        color: #28C892;
        background-color: #001526;
        border-radius: 20px;
        height: 300px;
        width: 80vw;
        flex-direction: column;
        display: flex;
        justify-content: flex-start;
        align-items: start;
        padding: 20px 40px;
    }

    .main-info p {
        color: white;
        padding: 10px 0;
        margin: 0;
    }

    .main-info h1 {
        color: #28C892;
        font-size: 30px;
        margin: 0;
    }

    .profile-image img {
        border: #28C892 3px solid;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;

    }

    .btn {
        margin-top: 10px;
        padding: 10px;
        background-color: #28C892;
        color: white;
        cursor: pointer;
        border-radius: 20px;
        cursor: pointer;
        transition: .2s;
    }

    .btn:hover {
        transform: scale(1.1);
        background-color: #28C892;
    }

    .profile-info {
        margin: 30px 0;
        box-shadow: #28c89383 0px 0px 10px 0px;
        color: #28C892;
        background-color: #001526;
        border-radius: 20px;
        height: 350px;
        width: 80vw;
        flex-direction: column;
        display: flex;
        justify-content: flex-start;
        align-items: start;
        padding: 20px 40px;

    }

    .profile-info label {
        margin-left: 20px;
        margin-bottom: 5px;
    }

    .main-info label {
        display: block;
    }

    .main-info input[type="text"], .main-info input[type="password"], .main-info input[type="email"] {
        width: 50%;
        line-height: 40px;
        border: none;
        border-radius: 25px;
        padding: 0 20px;
        color: #000000;
        background-color: #ffffff9f;
        margin-bottom: 20px;
    }

    .update-password {
        box-shadow: #28c89383 0px 0px 10px 0px;
        color: #28C892;
        background-color: #001526;
        border-radius: 20px;
        height: 430px;
        width: 80vw;
        flex-direction: column;
        display: flex;
        justify-content: flex-start;
        align-items: start;
        padding: 20px 40px;
    }

    .update-password label {
        margin-left: 20px;
        margin-bottom: 5px;
    }

    .main-info input[type="submit"] {
        cursor: pointer;
        display: block;
        width: 20%;
        padding: 10px 20px;
        font-size: 20px;
        background-color: #28C892;
        border-radius: 25px;
        border: none;
        font-weight: bold;
        color: #fff;
        transition: 0.2s;
    }

    .btn-foto {
        cursor: pointer;
        transition: .2s;
    }

    .btn-foto i {
        font-size: 20px;
        color: #28C892;
        margin-right: 10px;

    }

    .btn-foto:hover {
        transform: scale(1.1);
    }

    .btn-publicar {
        background-color: #28C892;
        cursor: pointer;
        transition: .2s;
        border: none;
        border-radius: 20px;
        padding: 10px 10px;
        margin-left: 300px;
    }

    .btn-publicar:hover {
        transform: scale(1.1);
    }
</style>
@include('layouts.nicotinever.header')
<div class="container">
    <div class="left-sidebar">
        <div class="user-profile">
            <img src="{{asset('imagens/user-profile.png')}}" alt="">
            <div><p>Joana Gonçalves</p></div>
        </div>
        <div class="menu">
            <ul>
                <div class="imp-links">
                    <li><a href="#top"><i class="bi bi-house-door-fill"></i>Inicio</a></li>
                    <li><a href="#"><i class="bi bi-person-fill"></i>Perfil</a></li>
                    <li><a href="#"><i class="bi bi-chat-dots-fill"></i>Mensagens</a></li>
                    <li><a href="#"><i class="bi bi-bell-fill"></i>Notificações</a></li>
                    <li><a href="#"><i class="bi bi-gear-fill"></i>Configurações</a></li>
                    <li><a href="index.html"><i class="bi bi-box-arrow-right"></i>Sair</a></li>
                </div>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="write-post-container">
            <div class="user-profile">
                <img src="{{asset('imagens/user-profile.png')}}" alt="">
                <div><p>Joana Gonçalves</p></div>
                <small>Publico <i class="bi bi-caret-down-fill"></i></small>
            </div>

            <form action="{{route('feed.store')}}" method="post">
                @csrf
                <div class="post-input-container">
                    <textarea name="comentario" rows="3" placeholder="O que Você está pensando?"></textarea>
                    <div class="add-post-links">
                        <input type="file" id="file" name="image" style="display: none;"
                               accept="image/jpeg, image/png"></input>
                        <label for="file" class="btn-foto"><i class="bi bi-camera-fill"></i></label>
                        <input type="submit" value="Publicar" class="btn-publicar">
                    </div>
                </div>
            </form>

        </div>

        @foreach($feeds as $feed)
            <div class="post-container">
                <div class="post-roll">
                    <div class="profile-post-icon">
                        <img src="{{asset($feed->user->icon)}}" alt="">
                        <div><p>{{$feed->user->name}}</p>
                            <small>12 de Junho de 2024 às 9:13 <i class="bi bi-caret-down-fill"></i></small>
                        </div>
                    </div>


                    <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
                </div>

                <p class="post-text">
                    {{$feed->comentario}}
                    @if($feed->image !== null)
                        <img src="{{asset('imagens/pesca.jpg')}}" alt="" class="post-img">
                    @endif
                </p>


                <div class="post-roll">
                    <div class="act-icons">
                        <div><i class="bi bi-heart-fill"></i>172</div>
                        <div><i class="bi bi-chat-fill"></i>35</div>
                        <div><i class="bi bi-send-fill"></i></i>21</div>
                    </div>

                    <div class="post-profile-icon">
                        <img src="{{asset($feed->user->icon)}}" alt="">
                        <i class="bi bi-caret-down-fill"></i>
                    </div>

                </div>

            </div>

        @endforeach

        <div class="post-container">
            <div class="post-roll">
                <div class="profile-post-icon">
                    <img src="{{asset('imagens/aderson.jpg')}}" alt="">
                    <div><p>Aderson Bituca</p>
                        <small>12 de Junho de 2024 às 9:13 <i class="bi bi-caret-down-fill"></i></small>
                    </div>
                </div>


                <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>

            <p class="post-text">
                Ansioso pro Natal😎👍
                <a href="#">#PapaiNoel</a>
                <a href="#">#FelizNatal</a>
                <img src="{{asset('imagens/pesca.jpg')}}" alt="" class="post-img">
            </p>


            <div class="post-roll">
                <div class="act-icons">
                    <div><i class="bi bi-heart-fill"></i>172</div>
                    <div><i class="bi bi-chat-fill"></i>35</div>
                    <div><i class="bi bi-send-fill"></i></i>21</div>
                </div>

                <div class="post-profile-icon">
                    <img src="{{asset('imagens/aderson.jpg')}}" alt="">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

            </div>

        </div>
        <div class="post-container">
            <div class="post-roll">
                <div class="profile-post-icon">
                    <img src="{{asset('imagens/Nycollas.jpg')}}" alt="">
                    <div><p>Nycollas Desenbola</p>
                        <small>9 de Junho de 2024 às 13:18 <i class="bi bi-caret-down-fill"></i></small>
                    </div>
                </div>


                <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>

            <p class="post-text">
                Futzinho pra comemorar 20 anos de fumar ✌
                <a href="#">#Futebas</a>
                <a href="#">#Paz</a>
                <img src="{{asset('imagens/futizin.jpg')}}" alt="" class="post-img">
            </p>


            <div class="post-roll">
                <div class="act-icons">
                    <div><i class="bi bi-heart-fill"></i>587</div>
                    <div><i class="bi bi-chat-fill"></i>359</div>
                    <div><i class="bi bi-send-fill"></i></i>147</div>
                </div>

                <div class="post-profile-icon">
                    <img src="{{asset('imagens/Nycollas.jpg')}}" alt="">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

            </div>

        </div>
        <div class="post-container">
            <div class="post-roll">
                <div class="profile-post-icon">
                    <img src="{{asset('imagens/Pedro.jpg')}}" alt="">
                    <div><p>Pedro Passa o Fino</p>
                        <small>8 de Junho de 2024 às 22:50 <i class="bi bi-caret-down-fill"></i></small>
                    </div>
                </div>


                <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>

            <p class="post-text">
                Desenvolvendo o Nicotinever 👨‍💻
                <a href="#">#PapaiJava</a>
                <a href="#">#EuAmoJava</a>
                <img src="{{asset('imagens/java.jpg')}}" alt="" class="post-img">
            </p>


            <div class="post-roll">
                <div class="act-icons">
                    <div><i class="bi bi-heart-fill"></i>256</div>
                    <div><i class="bi bi-chat-fill"></i>58</div>
                    <div><i class="bi bi-send-fill"></i></i>39</div>
                </div>

                <div class="post-profile-icon">
                    <img src="{{asset('imagens/Pedro.jpg')}}" alt="">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

            </div>

        </div>
        <div class="post-container">
            <div class="post-roll">
                <div class="profile-post-icon">
                    <img src="{{asset('imagens/miguel.jpg')}}" alt="">
                    <div><p>Milguel Fininho</p>
                        <small>11 de Junho de 2024 às 21:36 <i class="bi bi-caret-down-fill"></i></small>
                    </div>
                </div>


                <a href="#"><i class="bi bi-three-dots-vertical"></i></a>
            </div>

            <p class="post-text">
                Amassando os newbas
                <a href="#">#Valorant</a>
                <a href="#">#Loud</a>
                <img src="{{asset('imagens/valoras.jpg')}}" alt="" class="post-img">
            </p>


            <div class="post-roll">
                <div class="act-icons">
                    <div><i class="bi bi-heart-fill"></i>320</div>
                    <div><i class="bi bi-chat-fill"></i>146</div>
                    <div><i class="bi bi-send-fill"></i></i>51</div>
                </div>

                <div class="post-profile-icon">
                    <img src="{{asset('imagens/miguel.jpg')}}" alt="">
                    <i class="bi bi-caret-down-fill"></i>
                </div>

            </div>

        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h4>Eventos</h4>
        </div>

        <div class="event">
            <div class="left-event">
                <h3>28</h3>
                <span>Jul</span>
            </div>
            <div class="right-event">
                <h4>Super Muffato Fresh Run 2024</h4>
                <p>Rede Mufftao</p>
                <a href="https://encurtador.com.br/OAMcc" target="_blank">Mais Informações</a>
            </div>
        </div>

        <div class="event">
            <div class="left-event">
                <h3>23</h3>
                <span>Set</span>
            </div>
            <div class="right-event">
                <h4>Semana Tecnológica 2024</h4>
                <p>Unifil</p>
                <a href="https://www.instagram.com/p/C74H2MARQUp/" target="_blank">Mais Informações</a>
            </div>
        </div>

        <div class="sidebar-title">
            <h4>Contatos</h4>
            <a href="">Fechar Chats</a>
        </div>

        <div class="online-list">
            <div class="online">
                <img src="{{asset('imagens/aderson.jpg')}}" alt="Aderson">
            </div>
            <p>Aderson Bituca</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{asset('imagens/miguel.jpg')}}" alt="Miguel">
            </div>
            <p>Miguel Fininho</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{asset('imagens/Nycollas.jpg')}}" alt="Nycollas">
            </div>
            <p>Nycollas Desenbola</p>
        </div>
        <div class="online-list">
            <div class="online">
                <img src="{{asset('imagens/Pedro.jpg')}}" alt="Pedro">
            </div>
            <p>Pedro Passa o Fino</p>
        </div>
    </div>
</div>
<nav class="mobile">
    <div class="barra">
        <div class="select"></div>
    </div>
    <ul class="paginas">

        <li class="item" onclick="selecionaMenu(0)"><img id="pagina-alvo" src="{{asset('imagens/target.svg')}}"
                                                         alt="ícone de alvo"></li>
        <li class="item" onclick="selecionaMenu(33.33333333333)"><i class="bi bi-house"></i></li>
        <li class="item" onclick="selecionaMenu(66.7666666666666)"><i class="bi bi-person"></i></li>
    </ul>
</nav>


</body>
<script>
    function selecionaMenu(posicao) {
        const select = document.querySelector(".select");
        select.style.left = `${posicao}%`;
    }

    function selecionaConteudo(elemento) {
        var li = elemento.parentNode;
        const elementosLi = document.querySelectorAll(".reset-border");
        elementosLi.forEach(e => {
            e.style.border = "none";
        })

        li.style.borderBottom = "2px solid #28C892"
    }
</script>
</html>
