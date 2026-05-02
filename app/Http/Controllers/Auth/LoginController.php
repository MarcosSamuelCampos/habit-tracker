<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

// GET /login
    public function index()
    {
        return view('login');
    }

    // POST /login
    public function authenticate(Request $request){
       
    $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    

    if(Auth::attempt($credenciais)){
        $request->session()->regenerate();

        return redirect()->intended('/');
    }else{
        return back()->withErrors([
            'email' => 'senha ou email errads',
        ]);
    }
    }
}