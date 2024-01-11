<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;

class LoginController extends Controller
{
    public function auth(request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            if(Auth::user()->level == "admin"){
                return redirect('/home');
            } else {
                return redirect('/operator');
            }
        }
        return recirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
