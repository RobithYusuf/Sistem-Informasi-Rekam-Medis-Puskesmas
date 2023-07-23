<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  public function halamanlogin()
  {
    return view('login.loginuser');
  }

  public function postlogin(Request $request)
  {
    $credentials = [
      'username' => $request->input('username'),
      'password' => $request->input('password'),
    ];

    if (Auth::attempt($credentials)) {
      return redirect('admin');
    } else {
      Session::flash('error', 'Email atau password salah.');
      return redirect()->back();
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/login');
  }
}