@extends('admin.template')
@section('title','diagnose')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}">
  <img src="img/logo.png" alt="">
  <h1>CheckMe</h1>
 </a>
@endsection
@section('content')
          <section class="content">
            <table class="table">
              <a href="{{url('/tambah_data_dokter')}}"><div class="btn btn-success">Tambah</div></a>
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </section>
@endsection
