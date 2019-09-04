<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Classe produto conhecida dentro desse script
use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){
        //Carrega todos os produtos da tabela
        $produtos = Produto::all();

        //Carrega o produto do id dado
        //$p = Produto::find(3);
        //dd($p);

        //$categorias = Categoria::all();
        //dd($categorias);

        return view('listarProdutos',compact('produtos'));
    }
}
