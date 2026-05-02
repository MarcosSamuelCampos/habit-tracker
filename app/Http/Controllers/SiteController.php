<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $nome = 'marcos';
        $habitos = ['correr', 'programar', 'estudar'];

        return view('home', compact('nome', 'habitos'));
    }
}