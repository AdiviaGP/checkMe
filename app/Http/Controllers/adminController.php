<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
      return view('admin.dashboard');
    }
    public function data_dokter(){
      return view('admin.data_dokter');
    }
    public function tambah(){
      return view('admin.tambah_data_dokter');
    }
}
