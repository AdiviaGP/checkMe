@extends('user.template')
@section('title','diagnose')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}">
  <img src="img/logo.png" alt="">
  <h1>CheckMe</h1>
 </a>
@endsection
@section('content')
    <section class="content">
      <a href="{{url('/cek_kesehatan')}}">
        <div class="row" id="cek_kesehatan">
          <div class="col-sm-4"><img src="img/diagnosis.png"></div>
          <div class="col-sm-8">
            <h3>CEK KESEHATAN</h3>
            <p>Mendiagnosa penyakit yang kamu derita</p>
          </div>
        </div>
      </a>
      <a href="{{url('/cari_dokter')}}">
        <div class="row" id="cari_dokter">
          <div class="col-sm-4"><img src="img/doctor.png"></div>
          <div class="col-sm-8">
            <h3>CARI DOKTER</h3>
            <p>Cari dokter berdasarkan Spesialisasi dan lokasi kemudian buat janji</p>
          </div>
        </div>
      </a>
      <a href="{{url('/cek_jadwal')}}">
        <div class="row" id="cek_jadwal">
          <div class="col-sm-4"><img src="img/calendar.png"></div>
          <div class="col-sm-8">
            <h3>CEK JADWAL</h3>
            <p>Cek jadwal janjian mu dengan dokter</p>
          </div>
        </div>
      </a>
    </section>
@endsection
