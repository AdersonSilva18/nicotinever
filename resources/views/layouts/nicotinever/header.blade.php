<style>
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
</style>
<header class="cabecalho">

    <div class="logo-icones">
        <div class="logo-total">
            <img class="logo" src="{{asset('imagens/logo-semfundo.png')}}" alt="Logo Nicotinever">
            <h2 class="nicotinever">Nicotinever</h2>
        </div>

        <div class="icones">
            <img class="img-header" src="{{asset('imagens/target.svg')}}" alt="ícone de alvo">
            <i class="bi bi-house i-header"></i>
            <i class="bi bi-chat i-header"></i>
            <i class="bi bi-bell i-header"></i>
        </div>

        <img class="menu-icon" style="display: none" src="{{asset('imagens/menu.svg')}}" alt="Ícone de Menu">
    </div>

    <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" name="busca" maxlength="50" placeholder="Buscar">
    </div>

    <img src="{{asset('imagens/jao.jpg')}}" alt="Foto de perfil" class="ftperfil-header">
</header>
