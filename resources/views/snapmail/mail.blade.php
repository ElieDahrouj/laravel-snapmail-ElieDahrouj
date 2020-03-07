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
<body style="background-image: linear-gradient(RGBA(123, 69, 183,0.5), RGBA(53, 180, 215,0.5)),
                  url('https://static1.squarespace.com/static/5e054fbfd127584d7203cc2b/5e054fe4e2b52a3155e0a5ba/5e054fe4e2b52a3155e0a5dd/1579665867190/?format=2500w');background-size: cover;background-repeat: no-repeat;min-height: 100vh;">
<div class="container pt-2 pb-2" style="width: 500px;">
    <div style="background-color: #232055;border-radius:3px 3px 0 0;padding: 10px"><h3 style="color:RGB(225, 224, 235);text-align:center;margin: 0">SnapMail</h3></div>
    <form style="padding: 15px;background-color: RGB(41, 41, 103);border-radius:0 0 3px 3px;" method="post" action="/" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label style="color: RGB(225, 224, 235)" for="name">Nom et Prénom</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label style="color: RGB(225, 224, 235)" for="email">Email de destination</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label style="color: RGB(225, 224, 235)" for="image">Photo</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label style="color:RGB(225, 224, 235);" for="message">Message</label>
            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" rows="5">{{old('message')}}</textarea>
        </div>
        <button type="submit" style="background-color: #5fb02d;border: 1px solid #5fb02d" class="btn btn-primary">Submit</button>
    </form>
    @if($errors->any())
        <div class="alert alert-danger mt-3" role="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    @if($succes ?? '')
        <div class="alert alert-success mt-3" role="alert">
            {{$succes ?? ''}}
        </div>
    @endif
</div>
</body>
</html>