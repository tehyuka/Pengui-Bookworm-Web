<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class LoginController extends Controller
{
  public function login(){
      return view('logins.login');
    }

  public function authenticate(Request $request){
    $credentials= $request->validate([
      'email'=> 'required|email:dns',
      'password'=> 'required',
    ]);

  if(Auth::attempt($credentials)){
    $request->session()->regenerate();
    return redirect()->intended('/'); 
  }    
    return back()->with('loginError','Login Failed!');
  }

  public function logout()
  {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
  }
}