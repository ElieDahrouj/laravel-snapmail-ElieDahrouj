<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @media (min-width: 1200px) {
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 915px;
        }
    }
</style>
<body style="padding:0;background-image:linear-gradient(rgba(223,219,229,0.5),rgba(100,53,132,.5)),url({{asset('img/undraw_newsletter_vovu.png')}});background-repeat: no-repeat;background-size: contain; min-height: 100vh">
@if(count($msgTemporary) > 0)
    @foreach($msgTemporary as $msg)
        <main class="container pt-4" >
            <h3 class="pb-3 pt-3 text-center text-light rounded-top mb-0" style="background-color: rgb(148,153,179)">Message Snap Mail</h3>
            <div class="p-4" style="background-color: rgba(25,11,50,.5);">
                <div class="d-flex justify-content-center">
                    <img class="rounded" style="max-width: 100%;width: 270px" src={{asset('storage/img/'.$msg->photo_url)}} alt="">
                </div>
                <p class="mt-4 mb-0 text-light">Envoyé il y a {{$diffHuman}}</p>
                <p class="mb-0 text-light"> {{$msg->message}}</p>
            </div>
            <div class="rounded-bottom" style="background-color: #ededee">
                <p class="p-1 h6" style="font-size: 11px"> <img style="width: 20px" src="https://img.icons8.com/windows/50/000000/box-important.png" alt="">
                    Attention les messages envoyés sur Snap Mail sont détruis à l'ouverture du message !
                </p>
            </div>
        </main>
    @endforeach
@else
    <div class="alert alert-danger text-center" role="alert">
        Erreur le message n'existe plus
    </div>
@endif
</body>
</html>