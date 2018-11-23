@extends('user.template')
@section('title','cek jadwal')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}"> < Back </a>
@endsection
@section('content')
    <section class="content">
      <div class="col-md-12" id="cek_kesehatan">
        <p>CEK KESEHATAN</p>
      </div>
      <div class="col-md-12" id="cari_dokter">
        <p>CARI DOKTER</p>
      </div>
      <div class="col-md-12" id="cek_jadwal">
        <p>CEK JADWAL</p>
      </div>
    </section>
@endsection
