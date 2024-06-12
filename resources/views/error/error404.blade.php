<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error page</title>
</head>
<body>
<style>* {
        background-color: #001526;
        font-family: Roboto, sans-serif;
        color: whitesmoke;
        padding: 0;
        margin: 0;
    }

    hr {
        border: #28C892 solid 1px;
    }

    .error-page-header {

        width: 100%;
        display: flex;
        justify-content: center;

    }

    .error-page-header > img {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .error-page-header > a {
        color: #28C892;
        text-decoration: none;
        display: flex;
        align-items: center;
        margin-left: 10px;
        font-size: 500;
    }

    .error-page-content {
        font-size: 500;
    }

    .error-page-text > h1 {
        color: #28C892;
    }

    .error-page-text > p {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    @media (max-width: 450px) {

        .error-page-image {
            display: flex;
            justify-content: center;
        }

        .error-page-image > img {
            width: 344px;
            height: auto;
        }

        .error-page-text {
            margin-top: 20px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .error-page-text > p {
            margin-top: 15px;
            font-size: 15px;
        }
    }

    @media (min-width: 450px) and (max-width: 600px) {
        .error-page-content {
            display: flex;
            flex-direction: column;
        }

        .error-page-image {
            display: flex;
            justify-content: center;
        }

        .error-page-image > img {
            width: 450px;
            height: auto;
        }

        .error-page-text {
            margin-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }


        .error-page-text > p {
            margin-top: 15px;
            font-size: 18px;
        }
    }

    @media (min-width: 600px) and (max-width: 820px) {
        .error-page-content {
            display: flex;
            flex-direction: column;
        }

        .error-page-image {
            display: flex;
            justify-content: center;
        }

        .error-page-image > img {
            width: 590px;
            height: auto;
        }

        .error-page-text {
            margin-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .error-page-text > p {
            margin-top: 15px;
            font-size: 22px;
        }
    }

    @media (min-width: 820px) and (max-width: 1020px) {
        .error-page-content {
            display: flex;
            flex-direction: row;
        }

        .error-page-image > img {
            width: auto;
            height: 410px;
        }

        .error-page-text {
            margin-top: 50px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .error-page-text > p {
            margin-top: 45px;
            font-size: 20px;
        }
    }

    @media (min-width: 1020px) {
        .error-page-content {
            display: flex;
            flex-direction: row;
        }

        .error-page-image > img {
            width: auto;
            height: 600px;
        }

        .error-page-text {
            margin-top: 50px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .error-page-text > h1 {
            font-size: 60px;
        }

        .error-page-text > p {
            margin-top: 45px;
            font-size: 40px;
        }
    }

</style>
<div class="container__error-page">
    <div class="error-page-header">
        <img src="Backgound.png" width="30px">
        <a href="home">Nicotinever</a>
    </div>
    <hr/>
    <div class="error-page-content">
        <div class="error-page-image">
            <img src="error-image.svg">
        </div>
        <div class="error-page-text">
            <h1>Infelizmente esse conteúdo ainda não foi desenvolvido</h1>
            <p>Desculpa por esse imprevisto, aguarde novas atualizações. (Provavelmente isso deveria ter sido
                desenvolvido pelo Jão)</p>
        </div>
    </div>
</div>
</body>
</html>
