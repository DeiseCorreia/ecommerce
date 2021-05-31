<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    
    public function index(Request $request){//method padrão
        
        $dta =[];

        //buscar todos os produtos(select * from Produtos;)
        $listprod = \App\Models\Produto::all();

        $dta["lista"] = $listprod;

        return view("inicio", $dta);
    }



    public function categoria($idcategoria=0){//sobrecarga
        
        $dta =[];
        //select * from categorias;
        $listaCategoria= Categoria::all();

        //select * from produtos limit 4;
        $queryprod= Produto::limit(10);

        if($idcategoria != 0){//se for != é porque foi passado 

            //where categoria_id = $idcategoria; (condição)

            $queryprod->where("categoria_id", $idcategoria);
        }

        $listprod = $queryprod->get();
        
        $dta["lista"] = $listprod;

        $dta["listaCategoria"] = $listaCategoria;

        $dta["idcategoria"] = $idcategoria;//mandando para a view

        return view("categoria",$dta);
    }
    //cadastro de produtos

    public function cadastroProduto($idprod = 0){

        //pega todos os valores do form
        $values = $request->all();

        $prod = new Produto();


        $prod->nome = $request->input("nome"," ");
        $prod->foto = $request->input("foto"," ");
        $prod->descricao= $request->input("descricao"," ");
        $prod->valor= $request->input("valor"," ");

        return view("categoria",$dta);
    }   

       
   
}
