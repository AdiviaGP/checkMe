<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <section id="header">
      <div class="logo">
        <img src="img/logo.png" alt="">
      </div>
      <div class="col-md-12 aksi">
        <ul>
        <a href="{{url('/masuk')}}"> <li>Masuk</li></a>
        <a href="{{url('/daftar')}}"><li>Daftar</li></a>
        </ul>
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
          @endforeach
        @endif
      </div>
    </section>
    <section id="aksi">
      <div class="kotak">
        <form action="{{url('/masuk')}}" method="post">
            {{csrf_field()}}
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="tombol">
          <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
