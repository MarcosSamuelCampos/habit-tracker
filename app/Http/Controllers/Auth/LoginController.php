<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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
    public function authenticate(LoginRequest $request){
       
    $credenciais = $request->only('email','password');
    

    if(Auth::attempt($credenciais)){
        $request->session()->regenerate();

        return redirect()->intended(route('site.dashboard'));
    }
        return back()->withErrors([
            'email' => 'senha ou email errado',
        ]);
    }
    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect(route('site.index'));
}
}