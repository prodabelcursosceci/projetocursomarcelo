<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    # Passando parâmetros: 1ª maneira
    public function index(Request $req)
    {
        // Valida a variavel requerida e tamanho máximo de 10 caracteres
        $validator = Validator::make($req->all(),
            [
                'nome'  => 'required|max:10|alpha|ends_with:a', 
                'idade' => 'sometimes|numeric'
            ]);

        if($validator->fails()) {
            $errors = $validator->errors()->all();
        }
        $nome = $req->nome;
        $ola  = 'mundo!';

        echo "Hello world, $nome<br>";
        return view('index', compact('nome','ola','errors'));
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

    public function indexPost(Request $req) {
        
        return "Informação postada! Telefone: $req->telefone";
    }
}
