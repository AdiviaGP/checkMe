<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class authController extends Controller
{
  public function masuk(){
    return view('masuk');
  }
  public function daftar(){
    return view('daftar');
  }
  public function validation($request){
  return $this->validate($request, [
    'username' => 'required|max:255',
    'nama' => 'required|max:255',
    'no_hp' => 'required|max:255',
    'password' => 'required|min:6|max:255',
  ]);
}
  public function daftarkan(Request $request){
      $this->validation($request);
      $request['password'] = bcrypt($request->password);
      $daftar = new User;
      $daftar->username = $request->username;
      $daftar->nama = $request->nama;
      $daftar->no_hp = $request->no_hp;
      $daftar->password = $request->password;
      $daftar -> save();
      return redirect('/masuk');
    }
    public function loginkan(Request $request){
      $this -> validate($request,[
        'username' => 'required|max:255',
        'password' => 'required|max:255',
      ]);
      if(Auth::attempt(['username' => $request -> username,'password' => $request -> password, 'status' => 0])){
        return redirect('/dashboard');
      }
      if(Auth::attempt(['username' => $request -> username,'password' => $request -> password, 'status' => 1])){
        return redirect('/admin');
      }
      return redirect()->back();
    }
}
