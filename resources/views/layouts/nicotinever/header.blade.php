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
        flex-direction: r;
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
            padding-right: 20px;
            position: absolute;
            width: 100vw;
            align-items: center;
            justify-content: center;
            padding-bottom: 50px;
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

        .cabecalho {
            display: none !important;
        }

        .logo-icones {
            display: none !important;
        }

        .ftperfil-header {
            display: none !important;
        }

        .search-box {
            display: none !important;
        }

        .icones {
            display: none !important;
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
        margin-left: auto;
    }

    .btn-publicar:hover {
        transform: scale(1.1);
    }

    /* Header */

    .cabecalho {
        display: flex;
        height: 55px;
        background-color: #00907B;
        margin-bottom: 10px;
        justify-content: space-around;
        align-items: center;
    }

    .cabecalho i {
        color: #88EBC4;
        font-size: 40px;
        cursor: pointer;
        transition: .2s;
    }

    .cabecalho i:hover {
        transform: scale(1.1);
    }

    .cabecalho img {
        width: 40px;
        border-radius: 50%;
        cursor: pointer;
        transition: .2s;
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

    .menu-icon {
        display: none;
    }

    .i-header {
        color: #88EBC4;
        transition: transform 0.2s;
        cursor: pointer;
    }

    .i-header:hover {
        transform: scale(1.2);
    }

    header i {
        color: #88EBC4;
        transition: transform 0.2s;
        cursor: pointer;
    }

    header i:hover {
        transform: scale(1.2);
    }

</style>
<header class="cabecalho">

    <div class="logo-icones">

        <a href="{{route('feed.index')}}">
            <div class="logo-total">
                <img class="logo" src="{{asset('imagens/logo-semfundo.png')}}" alt="Logo Nicotinever">
                <h2 class="nicotinever">Nicotinever</h2>
            </div>
        </a>


        <div class="icones">
            <a href="{{route('erro')}}">
                <img class="img-header" src="{{asset('imagens/target.svg')}}" alt="ícone de alvo">
            </a>
            <a href="{{route('feed.index')}}">
                <i class="bi bi-house i-header"></i>
            </a>
            <a href="{{route('erro')}}">
                <i class="bi bi-chat i-header"></i>
            </a>
            <a href="{{route('erro')}}">
                <i class="bi bi-bell i-header"></i>
            </a>
        </div>

        <img class="menu-icon" src="{{asset('imagens/menu.svg')}}" alt="Ícone de Menu">
    </div>

    <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" name="busca" maxlength="50" placeholder="Buscar">
    </div>

    <a href="{{route('profile.index',['user_id' => auth()->user()->id])}}">
        <img src="{{asset(auth()->user()->icon)}}" alt="Foto de perfil" class="ftperfil-header">
    </a>
</header>
