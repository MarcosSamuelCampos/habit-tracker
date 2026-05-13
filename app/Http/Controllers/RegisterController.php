<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
   public function registro(){

    return view('registro');

   }

   public function store(RegistroRequest $request){
      
    $user = User::query()->create([
      'name'=>$request->input('name'),
      'email'=>$request->input('email'),
      'password'=>$request->input('password'),
    ]);

    Auth::login($user);
    return redirect()->route('site.dashboard');
   }
}
