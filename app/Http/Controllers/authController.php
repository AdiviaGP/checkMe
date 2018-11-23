<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
  public function masuk(){
    return view('masuk');
  }
  public function daftar(){
    return view('daftar');
  }
}
