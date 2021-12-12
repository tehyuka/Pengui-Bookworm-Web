<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('registers.register');
    }

    public function registerpost(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'telepon' => 'required|max:20',
            'email' => 'required|email',
            'alamat' => 'required|max:255',
            'nama_pengguna' => 'required|max:20',
            'password' => 'required|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration Successful!');

        return redirect('/logins');
    }
}
