<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<style>
    body{
        background:linear-gradient(RGBA(224, 231, 241,.9),RGBA(167, 178, 198,.8)),url({{asset('img/mail.png')}});
        background-repeat: no-repeat;
        background-size: contain;
        min-height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
    section{
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section div{
        padding: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: RGBA(167, 178, 198,0.5);
        border-radius: 3px;
        margin: 10px;
    }
    span{
        text-align: center;
    }
    button{
        background-color: #5296c3;
        border-radius: 3px;
        padding: 8px;
        border: none;
        color: whitesmoke;
    }
    a{
        margin-top: 10px;
    }
    p{
        background-color: RGB(17, 23, 39);
        padding: 15px;
        margin: 0;
        color: whitesmoke;
        border-radius: 0 0 7px 7px;
        text-align: center;
    }
</style>
<body>
<header>
    <p>Bonjour vous avez reçu un message de la part de {{$name}}</p>
</header>
<section>
    <div>
        <span>Cliquez sur le bouton ci-dessous pour voir le message qui vous ai adressé</span>
        <a href="http://127.0.0.1:8000/{{$link}}"><button>Voir le message</button></a>
    </div>
</section>
</body>
</html>