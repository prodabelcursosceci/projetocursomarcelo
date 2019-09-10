<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    # Passando parâmetros: 1ª maneira
    public function index(Request $req)
    {
        $nome = $req->nome;

        echo "Hello world! , $nome";
        return view('welcome');
    }

    # Passando parâmetros: 2ª maneira
    public function index2($nome, $idade=null)
    {
        echo "Hello world , $nome !<br>" ;
        if ($idade){
            echo "Você tem $idade anos !<br>" ;    
        }
        return view('welcome');
    }

}
