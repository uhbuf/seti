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
    <form class="col-3 offset-4 border rounded" method="POST" action="{{route('user.registration')}}">
        <div class="modal fade" id="modalRegistrationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Регистрация</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                  <div class="form-group">
                      <label for="email" class="col-form-label-lg">Email</label>
                      <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
                      @error('email')
                          <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="password" class="col-form-label-lg">Password</label>
                      <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
                      @error('record')
                          <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <button class="btn btn-lg btn-primary" type="sumbit" name="sendMe" value="1">Регистрация</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>