<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function layout2(){
        return view('pagina2');
    }

    public function layout(){
        return view('site');
    }
}
