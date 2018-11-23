@extends('user.template')
@section('title','Hasil')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}"> < Back </a>
@endsection
@section('content')
    <section class="content cari_dokter">
      <h2>Hasil Pencarian Dokter Saraf <br>
        di kota Yogyakarta
      </h2>
      <div class="container">
        <div class="row">
          <div class="col-sm">
          <p> One of three columns</p>
          </div>
          <div class="col-sm">
            <p> One of three columns</p>
          </div>
          <div class="col-sm">
            <p> One of three columns</p>
          </div>
          <div class="col-sm">
          <p> One of three columns</p>
          </div>
          <div class="col-sm">
            <p> One of three columns</p>
          </div>
          <div class="col-sm">
            <p> One of three columns</p>
          </div>
        </div>
      </div>
    </section>
@endsection
