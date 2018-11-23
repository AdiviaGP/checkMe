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
        <form action="{{url('/daftar')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label for="username">Nama</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nama" name="nama">
          </div>
          <div class="form-group">
            <label for="username">No HP</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="No HP" name="no_hp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <div class="tombol">
          <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
