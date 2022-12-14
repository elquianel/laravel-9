<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // https://api.github.com/repos/elquianel/clone-home-google/commits
        // https://api.github.com/repos/nomeUsuario/nomeRepo/commits

        return view('index');
    }
}
