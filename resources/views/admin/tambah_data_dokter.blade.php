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
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Spesialisasi</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>-</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </form>
    </section>
@endsection
