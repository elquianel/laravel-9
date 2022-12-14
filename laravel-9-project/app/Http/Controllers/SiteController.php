<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $name = 'Teste';

        $data = [
            'first_name' => $name,
            'html' => '<strong>assim ele interpreta html </strong>',
        ];

        // o view recebe mais de um parametro
        // o segundo parametro é um array nomeado para transferir dados para a view
        return view('welcome', $data);
    }

    public function index2(){
        $name = 'Teste';

        $data = [
            'first_name' => $name,
            'html' => '<strong>assim ele interpreta html </strong>',
        ];

        // o view recebe mais de um parametro
        // o segundo parametro é um array nomeado para transferir dados para a view
        return view('include', $data);
    }

    public function out(){
        return view("out");
    }

    public function users(Request $r){
        $data = [
            'qtd' => $r->qtd
        ];


        return view('users', $data);
    }
}
