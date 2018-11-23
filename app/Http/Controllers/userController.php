<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function dashboard(){
      return view('user.dashboard');
    }
    public function cari_dokter(){
      return view('user.cari_dokter');
    }
    public function cek_jadwal(){
      return view('user.cek_jadwal');
    }
    public function diagnose(){
      return view('user.diagnose');
    }
    public function hasil(){
      return view('user.hasil');
    }
}
