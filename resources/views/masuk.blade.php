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
      </div>
    </section>
    <section id="aksi">
      <div class="kotak">
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="tombol">
          <a href="{{url('/dashboard')}}">  <button type="button" class="btn btn-primary">Login</button></a>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
