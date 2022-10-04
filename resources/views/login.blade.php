<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Вход</h1>
    <form class="col-3 offset-4 border rounded" method="POST" action="{{route('user.login')}}">
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Ваше email</label>
            <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
            @error('record')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label-lg">Ваше password</label>
            <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
            @error('record')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="sumbit" name="sendMe" value="1">Войти</button>
        </div>
    </form>
</body>
</html>