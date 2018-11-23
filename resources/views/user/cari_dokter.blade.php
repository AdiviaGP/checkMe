@extends('user.template')
@section('title','cari dokter')
@section('header')
<a class="navbar-brand" href="{{url('/dashboard')}}"> < Back </a>
@endsection
@section('content')
    <section class="content cari_dokter">
      <h2>Cari dokter berdasarkan</h2>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Spesialisasi</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Kota/Kabupaten</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <a href="{{url('/hasil_cari_dokter')}}"><button type="button" name="button">CARI DOKTER</button></a>
    </section>
@endsection
